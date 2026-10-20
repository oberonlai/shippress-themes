#!/usr/bin/env python3
"""Share of saturated pixels in a theme's first screen (quality gate, design-plan.json rules.quality_gate, #226).

    python3 scripts/check-first-screen.py <screenshot.png|.webp|.jpg> [--crop 1440x900] [--max 15]

Crops the top-left WxH of the screenshot (default 1440x900; a smaller image is used whole), counts the pixels with
HSV saturation > 35% and value > 24%, prints the percentage and exits 1 when it is above --max (default 15).
Needs Pillow only.
"""
import argparse
import sys

from PIL import Image, ImageChops

S_MIN = 0.35
V_MIN = 0.24


def saturated_percent(path, crop=(1440, 900)):
    img = Image.open(path)
    w, h = img.size
    img = img.convert("RGB").crop((0, 0, min(crop[0], w), min(crop[1], h))).convert("HSV")
    # Pillow's HSV bands are 0-255; S > 35% and V > 24% as integer thresholds.
    s_cut, v_cut = S_MIN * 255, V_MIN * 255
    _, s, v = img.split()
    mask = ImageChops.logical_and(s.point(lambda x: 255 if x > s_cut else 0).convert("1"), v.point(lambda x: 255 if x > v_cut else 0).convert("1"))
    hits = mask.convert("L").histogram()[255]
    total = img.size[0] * img.size[1]
    return 100.0 * hits / total if total else 0.0


def main(argv=None):
    p = argparse.ArgumentParser(description="Percent of saturated pixels (HSV S>35%, V>24%) in the first screen.")
    p.add_argument("image")
    p.add_argument("--crop", default="1440x900", help="top-left crop WIDTHxHEIGHT (default 1440x900)")
    p.add_argument("--max", type=float, default=15.0, help="fail above this percent (default 15)")
    a = p.parse_args(argv)
    try:
        cw, ch = (int(x) for x in a.crop.lower().split("x"))
    except ValueError:
        p.error("--crop must look like 1440x900")
    pct = saturated_percent(a.image, (cw, ch))
    ok = pct <= a.max
    print(f"{pct:.1f}% saturated pixels in the first {cw}x{ch} (max {a.max:g}%): {'ok' if ok else 'FAIL'}")
    return 0 if ok else 1


if __name__ == "__main__":
    sys.exit(main())
