#!/usr/bin/env python3
"""Raster copies of a theme's SVG illustrations for the demo import (WordPress refuses SVG uploads).

Usage: python3 scripts/rasterize-images.py themes/<slug> [...]
Needs headless Chrome (CHROME=..., default google-chrome) and Pillow. Authoring tool only: the theme ships the results.

Every assets/images/<name>.svg is rendered at its own size on a transparent background, then saved to
assets/images/demo/<name>.jpg (quality 82) when it is fully opaque, or <name>.png (256-colour) when it has
transparency. inc/demo-import.php imports these into the Media Library and swaps the SVG URLs for them.
"""
import os, re, subprocess, sys, tempfile
from PIL import Image

CHROME = os.environ.get("CHROME", "google-chrome")

def size(svg):
    m = re.search(r'viewBox="\s*[-\d.]+[\s,]+[-\d.]+[\s,]+([\d.]+)[\s,]+([\d.]+)', svg)
    return (round(float(m.group(1))), round(float(m.group(2)))) if m else (1600, 1200)

def render(path, w, h, out):
    html = f'<html><body style="margin:0;background:transparent"><img src="file://{path}" width="{w}" height="{h}" style="display:block"></body></html>'
    with tempfile.NamedTemporaryFile("w", suffix=".html", delete=False) as f:
        f.write(html)
    try:
        subprocess.run([CHROME, "--headless=new", "--no-sandbox", "--disable-gpu", "--hide-scrollbars", "--allow-file-access-from-files",
                        "--default-background-color=00000000", f"--window-size={w},{h}", f"--screenshot={out}", f"file://{f.name}"],
                       check=True, stdout=subprocess.DEVNULL, stderr=subprocess.DEVNULL, timeout=60)
    finally:
        os.unlink(f.name)

def main(themes):
    for theme in themes:
        src = os.path.join(theme, "assets/images")
        dst = os.path.join(src, "demo")
        os.makedirs(dst, exist_ok=True)
        for old in os.listdir(dst):
            os.unlink(os.path.join(dst, old))
        for name in sorted(n for n in os.listdir(src) if n.endswith(".svg")):
            path = os.path.abspath(os.path.join(src, name))
            w, h = size(open(path, encoding="utf8").read())
            with tempfile.TemporaryDirectory() as tmp:
                png = os.path.join(tmp, "shot.png")
                render(path, w, h, png)
                im = Image.open(png).convert("RGBA")
            base = os.path.join(dst, name[:-4])
            if im.getextrema()[3][0] == 255:
                im.convert("RGB").save(base + ".jpg", quality=82, optimize=True, progressive=True)
                out = base + ".jpg"
            else:
                im.quantize(256, method=Image.Quantize.FASTOCTREE).save(base + ".png", optimize=True)
                out = base + ".png"
            print(f"{out} ({w}x{h}, {os.path.getsize(out) // 1024} KB)")

if __name__ == "__main__":
    if len(sys.argv) < 2:
        sys.exit(__doc__)
    main(sys.argv[1:])
