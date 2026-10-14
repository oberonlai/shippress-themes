#!/usr/bin/env bash
# Generate ONE raster illustration with Grok Build's built-in image_gen tool, then save it as WebP.
#
# Usage:
#   scripts/grok-image.sh <out.webp> "<prompt: subject + style, e.g. watercolour, no text>" [max_px=1600]
#   scripts/grok-image.sh --cutout <out.webp> "<prompt>" [max_px=1600]
#   CUTOUT=1 scripts/grok-image.sh <out.webp> "<prompt>" [max_px=1600]
#
# --cutout / CUTOUT=1:
#   Appends a solid flat-background instruction, then runs scripts/cutout-bg.py to produce
#   a WebP with real alpha (break-frame / 破格 cut-outs). Prefers rembg; falls back to
#   ImageMagick flood-fill/transparent. Verifies alpha coverage and clean edges.
#
# - Each attempt is capped at 180 s (GROK_IMAGE_TIMEOUT); one retry on failure or a blank image.
# - Blank check: rejects images whose pixel std-dev is below 8 (near-empty/flat output).
# - Output: WebP quality 82 (opaque) or 90 (cutout), longest side <= max_px.
# Never hand-draw SVG for theme illustrations; use this script.
set -uo pipefail

cutout=0
if [ "${1:-}" = "--cutout" ] || [ "${1:-}" = "-c" ]; then
  cutout=1
  shift
elif [ "${CUTOUT:-0}" = "1" ] || [ "${CUTOUT:-}" = "true" ]; then
  cutout=1
fi

out=${1:?out.webp}; prompt=${2:?prompt}; max=${3:-1600}
limit=${GROK_IMAGE_TIMEOUT:-180}
here=$(cd "$(dirname "$0")" && pwd)
cutout_py="$here/cutout-bg.py"

if [ "$cutout" = 1 ]; then
  # Solid chroma / studio backdrop so rembg or flood-fill can isolate the subject.
  prompt="$prompt, isolated single subject fully visible with generous padding from all edges, centered, plain solid flat chroma-key green background #00FF00, no floor, no shadow on the background, no text, no watermark, no frame, no border"
fi

tmp=$(mktemp -d); trap 'rm -rf "$tmp"' EXIT
for attempt in 1 2; do
  rm -f "$tmp"/*.png "$tmp"/*.jpg "$tmp"/*.jpeg "$tmp"/*.webp
  ( cd "$tmp" && timeout "$limit" grok -m grok-4.7-build-fast --reasoning-effort low --always-approve -p \
    "Use your image_gen tool to generate exactly ONE raster image (do NOT write SVG or draw with code). $prompt. Save the generated image file into the current directory as img.png (convert if needed). Reply only with the filename." \
    >"$tmp/log.txt" 2>&1 )
  src=$(ls "$tmp"/*.png "$tmp"/*.jpg "$tmp"/*.jpeg "$tmp"/*.webp 2>/dev/null | head -1)
  if [ -z "$src" ]; then
    echo "attempt $attempt failed for $out (no image)" >&2
    continue
  fi

  if [ "$cutout" = 1 ]; then
    # Blank check on RGB before cutout
    if ! python3 - "$src" <<'PY'
import sys
from PIL import Image, ImageStat
im = Image.open(sys.argv[1]).convert("RGB")
sys.exit(0 if max(ImageStat.Stat(im).stddev) >= 8 else 1)
PY
    then
      echo "attempt $attempt blank image for $out" >&2
      continue
    fi
    raw="$tmp/raw-for-cutout.png"
    python3 - "$src" "$raw" <<'PY'
import sys
from PIL import Image
Image.open(sys.argv[1]).convert("RGB").save(sys.argv[2], "PNG")
PY
    if python3 "$cutout_py" "$raw" "$out" "$max"; then
      echo "ok $out cutout (attempt $attempt)"
      exit 0
    fi
    echo "attempt $attempt cutout failed for $out" >&2
    continue
  fi

  if python3 - "$src" "$out" "$max" <<'PY'
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
