# Reference tokens — Izanami (primary), measured 2026-10-24 at 1440×900 with getComputedStyle + screenshots
Source: https://izanami-official.com/ (S5-Style, category schools, education, medicine and welfare). Secondary: https://bumpofchicken-30th.com/ (category bands, music and labels; fixed WebGL screen, no document scroll, used only for the first-screen composition). Numbers and descriptions only; no copy, photos or logo reused. "≈" = read from screenshot, not computed.

## (a) Colour (area share of full-page screenshots, first screen 100% dark)
| Role | Hex | Share | Where |
|---|---|---|---|
| Ground (main) | `#0A0801` (rgb 10 8 1) | ≈ 60–85% of any viewport | body, nav, project rows |
| Text / line | `#D9D7D4` (rgb 217 215 212) | ≈ 5–8% (text and 1px lines) | every text node, borders |
| Pure white | `#FFFFFF` | < 1% | h1 + logo mark only |
| Photo-borne mid tones | misty green-grey `≈#4A5148`, bamboo `≈#B9A98A` | 15–55% only where a full-bleed photo shows | background photo bands |
| Accent hue | none in UI; colour comes only from photographs | — | — |
Saturated pixels (HSV s>0.5, v>0.25): first screen 0.0%, other screens 0–2.4%. Light (>140) 1–40%, dark (<40) 40–100% depending on photo band.

## (b) Type
| Role | Family | Size | Weight | Line-height | Letter-spacing | Case |
|---|---|---|---|---|---|---|
| Section heading (h2-level, 3 lines) | Playfair Display | 45px (3.125rem @1440 base 14.4) | 400 | ≈ 63px (1.4) | normal | sentence |
| Row title ("School", "Craft") | Playfair Display | ≈ 45px | 400 | ≈ 1.1 | normal | sentence |
| Row tagline | Shippori Mincho | 18px | 400 | 32.4px (1.8) | normal | sentence |
| Body | Shippori Mincho | 14.4px | 400 | 34.56px (2.4) | normal | sentence |
| Nav / language / MENU | Cinzel | 12.6px | 400 | 12.6px (1.0) | ≈ 0.08em | as typed (caps) |
| Vertical rail label | Cinzel | ≈ 16–18px, `writing-mode: vertical-rl` | 400 | 1 | ≈ 0.2em | caps |
| Row numeral "02" | Cinzel | 16.2px | 400 | 1 | normal | — |
| Text link "View Craft" | Playfair Display | 18px, preceded by a 72×1px line, 17px gap | 400 | 1 | normal | — |
Secondary (BoC): wordmark serif bold ≈ 70px/0.95, caps, centred, two lines; sub-line spaced caps ≈ 22px ls 0.3em; menu list sans ≈ 32px lh 1.05 caps centred.

## (c) Spacing
- Side margin 72px (nav logo, rail labels, hairlines start at x=72); content right edge 1368px (container 1296px).
- Row grid (project rows): rail label col x=72–90; text col x=400, width 324; photo col x=1044, width 324; gap text→photo ≈ 320px.
- Sticky row: 675px tall (495 photo + 90px top + 90px bottom padding), 3 rows, each `position: sticky; top: 0`-style stacking (next row slides over the previous).
- Hero text block starts x=252 (≈ 17.5% of width), width ≤ 650px; third heading line indented (starts x≈477).
- Philosophy block top padding 990px (long dark run before the first text); between hero and next block ≈ 1440px of scroll.
- Centered "Who we are" text column width 360px (x=540–900) on a full-bleed photo.

## (d) Radius, border, shadow
- Radius 0 everywhere (photos, rows). Border: 1px hairline `≈ rgba(217,215,212,.18)` between rows, running from x=72 to x=1044 (≈ 972px, stops at the photo column). Shadow none. Overlay: top-to-transparent dark gradient (≈ 0→60% black over the first 35% of a photo band).

## (e) Images
| Image | Size at 1440 | Ratio | Position / overlap |
|---|---|---|---|
| Hero big portrait photo | 468×720 | 2:3 | x=900–1368, top y=47 (bleeds under nav row) |
| Hero small portrait photo | 252×376 | ≈ 2:3 | x=1044–1296, y=0–376, **overlaps the big photo's upper-middle**, offset up/right so it breaks the top edge |
| Project row photo | 324×495 | ≈ 2:3 (0.655) | right column x=1044–1368, vertically aligned with row text |
| Background band | 1440×900+ | full-bleed | misty architectural interior, dark top gradient, text sits over it; text column ≈ 470px wide |
| Centre-logo band | 1440×900 | full-bleed | foggy forest, dim; logo centred at y≈360 |
Photos are WebGL canvases on the original (shader reveal); no clip-path, no mask CSS, no filter on the DOM. BoC: tilted (≈ −8°) 3:4 photo 570×580 centred slightly right, dimmed to ≈ 55% brightness on black.

## (f) Decoration
- Vertical rail label (see b) at x≈75–90, repeats per section ("PHILOSOPHY", "PROJECTS", "COMPANY"), sticky while section is on screen.
- Row index numeral "01/02/03" bottom-left of each sticky row, x=72, y = row bottom − 40.
- Hairline 1px between rows; short 72×1px line before the text link.
- Dots: 4px dots above "EN JA" and "MENU" in the nav (x=1052, 1348, y=21).
- Logo mark top-left x=72, 44×90 (own mark, not reusable). BoC: 1px crosshair grid lines + tiny red tick marks at screen edges, `[ + .00 .50 .00 ]` coordinate readout bottom-left (decoration only).

## (g) Motion
| Effect | Measured | Values |
|---|---|---|
| Smooth scroll | Lenis (class `lenis`, `lenis-stopped` in markup) | lerp-style inertia, wheel only |
| Text line reveal | per-line `span`: opacity 0→1 and translateY 34.56px (= 1 line-height) → 0 | start when the line's top reaches ≈ 95% of viewport height; ≈ 1.0–1.3s; ease out (≈ `quart.out` = cubic-bezier(.25,1,.5,1)); stagger ≈ 0.07s/line |
| Heading reveal | spans per line, colour transparent→light, same family of tween | 1.4s `quart.out`, stagger 0.07 (most frequent tween values in the bundle: 1.4s ×18, 0.7s ×11, stagger .07 ×6, eases quart.out ×11, cubic.out ×7, expo.out ×3) |
| Sticky stacked rows | CSS `position: sticky` on 3 `.stickySection` | each row travels 675px then the next row covers it; no transform |
| Background photo band | fades from black into the photo as the dark philosophy run scrolls out (≈ 1500→3300px) | opacity + vertical drift of the photo behind a fixed text block |
| Photo reveal | WebGL shader mask per photo (not reproducible; use sp-reveal--mask or --wipe) | ≈ 1.1–2s |
| Library | GSAP + ScrollTrigger (imported), Lenis, one IntersectionObserver helper, three.js | — |
