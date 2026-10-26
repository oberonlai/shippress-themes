# Reference (draft, stage 1) — Isso Relocation
Main reference: **https://besthome-ep.com/** (S5-Style, 住宅・建築 / 注文住宅). Not used by any earlier theme (checked with grep over themes-repo reference.md). Numbers: `reference-tokens.md`. Screenshots: `brand/ref/`.
Only structure, techniques, colour relationships and the key-visual concept are borrowed. No photo, text or logo is copied.

## Signature techniques (candidates; product column left blank until stage 2)
| # | Reference technique (what it looks like) | Reference value | Ours (to fill) |
|---|---|---|---|
| T1 | **Top-bottom split first screen, photo left / text right**: 720×900 dark photo on the left 50%, a blurred grey gradient right half overlapping it by 144px, small 300×400 framed photo with two vertical text columns on either side of it, nav as two columns of small links top right | `ref/besthome-first.png` | |
| T2 | **Giant outlined wordmark across the bottom of the first screen** (≈93px tall, full width −40px), crossing the photo/gradient seam; glyphs rise one by one from the baseline | `ref/scroll-wordmark-before/after.png` | |
| T3 | **Full-bleed 16:9 photo with two smaller photos overlapping its lower-left (25%) and upper-right (40%, pulled up 80px)** | `ref/besthome-s3.png` | |
| T4 | **96px display H2 with a tiny "( 01 )" label, body text pushed to a half-width right column** (50%, margin-left auto), 160px section padding | `ref/besthome-s1.png` | |
| T5 | **Fixed side tab** at the right edge (49×183px, dark, vertical text, dashed divider, chevron) | `ref/besthome-first.png` | |
| T6 | Rising wipe reveal on almost every text and image (mask gradient, 1.2s) | `ref/scroll-fade-*.png` | |

## Colour relationship
Monochrome. Ground `#FFFFFF` + faint paper grain ≈ 55%, charcoal `#2B2B2B` text and `#2D2D2D` footer, quiet band `rgba(0,0,0,.05)`, hero right half a mid grey gradient; accent navy `#2E4282` <1%; red only in the logo. First screen saturated share 2%. Colour comes from photographs only. Ours maps this to 煤竹 `#6B5B4E` as the single accent in the same proportion (<1–3%) on warm-grey neutrals.

## Imagery
IMAGERY: photo (real photographs, dim muted warm-grey tone, 3:4 / 16:9 / 4:5 crops, radius 0).

## Scroll effects
See stage-a.md「捲動手法候選」. Reference uses jQuery inview + CSS (no parallax). We replace with sp-reveal / sp-count / sp-marquee and add sp-parallax (required).
