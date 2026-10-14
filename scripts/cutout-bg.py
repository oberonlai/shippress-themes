#!/usr/bin/env python3
"""Remove a flat / auto-detected background and write a WebP with real alpha.

Usage:
  scripts/cutout-bg.py <in.(png|jpg|webp)> <out.webp> [max_px=1600]

Method order:
  1. rembg (ML) if a usable interpreter is found (.venv-rembg next to repo,
     REMBG_PYTHON, or REMBG_BIN pointing at a rembg CLI).
  2. ImageMagick flood-fill from corners (expects a plain solid background).

Exits non-zero if the output has no usable alpha or edges look broken.
Never draws SVG — input must already be a raster from grok-image.sh.
"""
from __future__ import annotations

import os
import shutil
import subprocess
import sys
import tempfile
from pathlib import Path

from PIL import Image, ImageFilter, ImageStat


def find_rembg_python() -> str | None:
    env = os.environ.get("REMBG_PYTHON")
    if env and Path(env).exists():
        return env
    here = Path(__file__).resolve().parent
    repo = here.parent
    candidate = repo / ".venv-rembg" / "bin" / "python"
    if candidate.exists():
        return str(candidate)
    return None


def remove_with_rembg(src: Path, tmp_rgba: Path) -> bool:
    py = find_rembg_python()
    if not py:
        return False
    code = r"""
import sys
from pathlib import Path
from rembg import remove, new_session
from PIL import Image
src, dst = Path(sys.argv[1]), Path(sys.argv[2])
# u2net ~176MB; avoid default bria-rmbg (~1GB) which is slow to fetch
session = new_session("u2net")
im = Image.open(src).convert("RGBA")
out = remove(im, session=session)
out.save(dst, "PNG")
print("rembg-ok")
"""
    try:
        r = subprocess.run(
            [py, "-c", code, str(src), str(tmp_rgba)],
            capture_output=True,
            text=True,
            timeout=180,
            check=False,
        )
    except (subprocess.TimeoutExpired, OSError) as e:
        print(f"rembg failed: {e}", file=sys.stderr)
        return False
    if r.returncode != 0 or "rembg-ok" not in (r.stdout or ""):
        print(f"rembg stderr: {(r.stderr or '')[:400]}", file=sys.stderr)
        return False
    return tmp_rgba.exists()


def corner_bg_rgb(im: Image.Image) -> tuple[int, int, int]:
    rgb = im.convert("RGB")
    w, h = rgb.size
    samples = [
        rgb.getpixel((2, 2)),
        rgb.getpixel((w - 3, 2)),
        rgb.getpixel((2, h - 3)),
        rgb.getpixel((w - 3, h - 3)),
        rgb.getpixel((w // 2, 2)),
        rgb.getpixel((2, h // 2)),
    ]
    # median-ish average of corners (dominant flat bg)
    rs = sorted(s[0] for s in samples)
    gs = sorted(s[1] for s in samples)
    bs = sorted(s[2] for s in samples)
    mid = len(samples) // 2
    return rs[mid], gs[mid], bs[mid]


def remove_with_imagemagick(src: Path, tmp_rgba: Path) -> bool:
    convert = shutil.which("magick") or shutil.which("convert")
    if not convert:
        return False
    with Image.open(src) as im:
        r, g, b = corner_bg_rgb(im)
    # fuzzy flood-fill from all four corners → transparent
    fuzz = os.environ.get("CUTOUT_FUZZ", "12%")
    cmd = [
        convert,
        str(src),
        "-alpha",
        "set",
        "-channel",
        "RGBA",
        "-fill",
        "none",
        "-fuzz",
        fuzz,
        "-draw",
        f"color 0,0 floodfill",
        "-draw",
        f"color %[fx:w-1],0 floodfill",
        "-draw",
        f"color 0,%[fx:h-1] floodfill",
        "-draw",
        f"color %[fx:w-1],%[fx:h-1] floodfill",
        # ImageMagick %[fx:…] in -draw is unreliable; use explicit corners via identify
        str(tmp_rgba),
    ]
    # Rewrite with concrete corners after reading size
    with Image.open(src) as im:
        w, h = im.size
    cmd = [
        convert,
        str(src),
        "-alpha",
        "set",
        "-fuzz",
        fuzz,
        "-fill",
        "none",
        "-draw",
        f"color 0,0 floodfill",
        "-draw",
        f"color {w-1},0 floodfill",
        "-draw",
        f"color 0,{h-1} floodfill",
        "-draw",
        f"color {w-1},{h-1} floodfill",
        "PNG32:" + str(tmp_rgba),
    ]
    # Prefer chroma match against sampled bg when corners are solid
    chroma = f"rgb({r},{g},{b})"
    cmd_chroma = [
        convert,
        str(src),
        "-alpha",
        "set",
        "-fuzz",
        fuzz,
        "-transparent",
        chroma,
        "PNG32:" + str(tmp_rgba),
    ]
    try:
        r1 = subprocess.run(cmd_chroma, capture_output=True, text=True, timeout=60)
        if r1.returncode == 0 and tmp_rgba.exists():
            return True
        r2 = subprocess.run(cmd, capture_output=True, text=True, timeout=60)
        return r2.returncode == 0 and tmp_rgba.exists()
    except (subprocess.TimeoutExpired, OSError) as e:
        print(f"imagemagick failed: {e}", file=sys.stderr)
        return False


def verify_alpha(im: Image.Image) -> None:
    if im.mode != "RGBA":
        raise SystemExit("cutout verify: output is not RGBA")
    a = im.getchannel("A")
    # histogram: count near-transparent and near-opaque
    hist = a.histogram()
    total = im.size[0] * im.size[1]
    transparent = sum(hist[:32])  # alpha < 32
    opaque = sum(hist[224:])  # alpha >= 224
    if transparent / total < 0.05:
        raise SystemExit(
            f"cutout verify: too little transparency ({transparent}/{total})"
        )
    if opaque / total < 0.08:
        raise SystemExit(f"cutout verify: subject too thin ({opaque}/{total})")
    # edge cleanliness: alpha along border should be mostly transparent
    w, h = im.size
    border = []
    for x in range(w):
        border.append(a.getpixel((x, 0)))
        border.append(a.getpixel((x, h - 1)))
    for y in range(h):
        border.append(a.getpixel((0, y)))
        border.append(a.getpixel((w - 1, y)))
    border_opaque = sum(1 for v in border if v > 200)
    if border_opaque / len(border) > 0.35:
        raise SystemExit(
            f"cutout verify: subject touches frame too much "
            f"({border_opaque}/{len(border)} border pixels opaque) — "
            "regenerate with more padding / solid background"
        )
    # reject noisy alpha (very high local variance on alpha edge)
    edge = a.filter(ImageFilter.FIND_EDGES)
    mean_edge = ImageStat.Stat(edge).mean[0]
    if mean_edge > 48:
        # soft warning only for rembg feather; hard-fail extreme noise
        if mean_edge > 90:
            raise SystemExit(
                f"cutout verify: alpha edges look noisy (edge mean={mean_edge:.1f})"
            )


def resize_max(im: Image.Image, mx: int) -> Image.Image:
    w, h = im.size
    s = mx / max(w, h)
    if s < 1:
        return im.resize((round(w * s), round(h * s)), Image.LANCZOS)
    return im


def main() -> int:
    if len(sys.argv) < 3:
        print(__doc__, file=sys.stderr)
        return 2
    src = Path(sys.argv[1])
    out = Path(sys.argv[2])
    mx = int(sys.argv[3]) if len(sys.argv) > 3 else 1600
    if not src.exists():
        print(f"missing input: {src}", file=sys.stderr)
        return 1

    out.parent.mkdir(parents=True, exist_ok=True)
    with tempfile.TemporaryDirectory() as td:
        tmp_rgba = Path(td) / "cut.png"
        method = None
        if remove_with_rembg(src, tmp_rgba):
            method = "rembg"
        elif remove_with_imagemagick(src, tmp_rgba):
            method = "imagemagick"
        else:
            print(
                "cutout-bg: neither rembg nor ImageMagick succeeded. "
                "Install ImageMagick, or create .venv-rembg with "
                '`python3 -m venv .venv-rembg && .venv-rembg/bin/pip install "rembg[cpu]" pillow`',
                file=sys.stderr,
            )
            return 1

        im = Image.open(tmp_rgba).convert("RGBA")
        im = resize_max(im, mx)
        verify_alpha(im)
        # WebP with alpha (lossless-ish quality for cutouts)
        im.save(out, "WEBP", quality=90, method=6)
        print(f"ok {out} method={method} size={im.size[0]}x{im.size[1]}")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
