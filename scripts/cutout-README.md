# Cut-out / break-frame images

For break-frame (破格) layouts, generate transparent-background WebP:

```bash
scripts/grok-image.sh --cutout assets/images/hero-cutout.webp \
  "subject description, <illustration style>, no text"
```

Pipeline:
1. Grok `image_gen` draws the subject on a solid chroma-green backdrop (prompt appended by the script).
2. `scripts/cutout-bg.py` removes the background:
   - **Preferred:** `rembg` with `u2net` via `.venv-rembg` next to the repo root
     (`python3 -m venv .venv-rembg && .venv-rembg/bin/pip install "rembg[cpu]" pillow`)
   - **Fallback:** ImageMagick `-transparent` / corner flood-fill (`CUTOUT_FUZZ`, default `12%`)
3. Verifies real alpha (enough transparent + opaque pixels; subject not glued to the frame).

Never hand-write SVG illustrations; always use this raster path.
