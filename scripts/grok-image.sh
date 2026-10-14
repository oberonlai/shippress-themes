#!/usr/bin/env bash
# Generate ONE raster illustration with Grok Build's built-in image_gen tool, then save it as WebP.
#
# Usage: scripts/grok-image.sh <out.webp> "<prompt: subject + style, e.g. watercolour, no text>" [max_px=1600]
# - Each attempt is capped at 180 s (GROK_IMAGE_TIMEOUT); one retry on failure or a blank image.
# - Blank check: rejects images whose pixel std-dev is below 8 (near-empty/flat output).
# - Output: WebP quality 82, longest side <= max_px (image_gen returns ~1024 px; it is not upscaled).
# Never hand-draw SVG for theme illustrations; use this script.
set -uo pipefail
out=${1:?out.webp}; prompt=${2:?prompt}; max=${3:-1600}
limit=${GROK_IMAGE_TIMEOUT:-180}
tmp=$(mktemp -d); trap 'rm -rf "$tmp"' EXIT
for attempt in 1 2; do
  rm -f "$tmp"/*.png "$tmp"/*.jpg "$tmp"/*.jpeg "$tmp"/*.webp
  ( cd "$tmp" && timeout "$limit" grok -m grok-4.7-build-fast --reasoning-effort low --always-approve -p \
    "Use your image_gen tool to generate exactly ONE raster image (do NOT write SVG or draw with code). $prompt. Save the generated image file into the current directory as img.png (convert if needed). Reply only with the filename." \
    >"$tmp/log.txt" 2>&1 )
  src=$(ls "$tmp"/*.png "$tmp"/*.jpg "$tmp"/*.jpeg "$tmp"/*.webp 2>/dev/null | head -1)
  if [ -n "$src" ] && python3 - "$src" "$out" "$max" <<'PY'
import sys
from PIL import Image, ImageStat
src, out, mx = sys.argv[1], sys.argv[2], int(sys.argv[3])
im = Image.open(src).convert("RGB")
if max(ImageStat.Stat(im).stddev) < 8:
    sys.exit(1)
w, h = im.size; s = mx / max(w, h)
if s < 1:
    im = im.resize((round(w * s), round(h * s)), Image.LANCZOS)
im.save(out, "WEBP", quality=82)
PY
  then echo "ok $out (attempt $attempt)"; exit 0; fi
  echo "attempt $attempt failed for $out" >&2
done
exit 1
