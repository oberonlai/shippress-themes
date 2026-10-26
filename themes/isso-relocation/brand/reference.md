# Reference (draft, stage 1) — Isso Relocation
Main reference: **https://besthome-ep.com/** (S5-Style, 住宅・建築 / 注文住宅). Not used by any earlier theme (checked with grep over themes-repo reference.md). Numbers: `reference-tokens.md`. Screenshots: `brand/ref/`.
Only structure, techniques, colour relationships and the key-visual concept are borrowed. No photo, text or logo is copied.

## Signature techniques (成品對應 filled from design-spec.md)
| # | Reference technique (what it looks like) | Reference value | Ours (成品對應) |
|---|---|---|---|
| T1 | **Top-bottom split first screen, photo left / text right**: 720×900 dark photo on the left 50%, a blurred grey gradient right half overlapping it by 144px, small 300×400 framed photo with two vertical text columns on either side of it, nav as two columns of small links top right | `ref/besthome-first.png` | **S1** home hero: H1 dark film-grain office floor (crates, taped floor plan) left 0–720; gradient `#8A8581`→`#4A4A50` from x 576 (144 px masked overlap); H2 300×400 labelled-crate photo at 930/247 between vertical lines "One weekend, one floor." / "Back at work on Monday."; anchor nav 2×3 top right. Inner pages: 64vh split page head on all 11 pages. |
| T2 | **Giant outlined wordmark across the bottom of the first screen** (≈93px tall, full width −40px), crossing the photo/gradient seam; glyphs rise one by one from the baseline | `ref/scroll-wordmark-before/after.png` | **S2** "ISSO RELOCATION" Hanken Grotesk 500 uppercase white, `clamp(3rem,7.4vw,7rem)`, full width −40 px, crossing the seam; CSS load glyph rise 0.8 s `cubic-bezier(.25,.8,.25,1)` +0.04 s steps. Inner heads: page-name wordmark (METHOD, PRICES…). |
| T3 | **Full-bleed 16:9 photo with two smaller photos overlapping its lower-left (25%) and upper-right (40%, pulled up 80px)** | `ref/besthome-s3.png` | **S3** home block 3: T1 full-bleed 16:9 (sp-parallax 10%), T2 25% lower-left, T3 40% right −80 px. Also Method, Planning, Crew, 3 story posts. |
| T4 | **96px display H2 with a tiny "( 01 )" label, body text pushed to a half-width right column** (50%, margin-left auto), 160px section padding | `ref/besthome-s1.png` | Section system on every section: "( 01 )" Hanken 300 15 px `#6B5B4E` + Hanken Grotesk 300 96 px H2 + 50% right column, 160 px padding; concept image C1 44.4% flush right. |
| T5 | **Fixed side tab** at the right edge (49×183px, dark, vertical text, dashed divider, chevron) | `ref/besthome-first.png` | Fixed tab "Request a quote" 49×183 `#2B2B2B`, radius 4 0 0 4, dashed divider, chevron, slides 30 px→0; hidden < 782 px. |
| T6 | Rising wipe reveal on almost every text and image (mask gradient, 1.2s) | `ref/scroll-fade-*.png` | `sp-reveal--mask` (text) / `--wipe` (photos) 1.2 s in 6 of 11 home blocks; none in hero. |

## Colour relationship
Monochrome. Ground `#FFFFFF` + faint paper grain ≈ 55%, charcoal `#2B2B2B` text and `#2D2D2D` footer, quiet band `rgba(0,0,0,.05)`, hero right half a mid grey gradient; accent navy `#2E4282` <1%; red only in the logo. First screen saturated share 2%. Colour comes from photographs only. Ours maps this to 煤竹 `#6B5B4E` as the single accent in the same proportion (<1–3%) on warm-grey neutrals.

## Imagery
IMAGERY: photo (real photographs, dim muted warm-grey tone, 3:4 / 16:9 / 4:5 crops, radius 0).

## Scroll effects
See stage-a.md「捲動手法候選」. Reference uses jQuery inview + CSS (no parallax). We replace with sp-reveal / sp-count / sp-marquee and add sp-parallax (required).

## 成品對應 (summary, stage 1 spec)
- Colour: reference tokens as-is (`#FFFFFF`+grain, `#2B2B2B`, `#2D2D2D` footer, `#F2F2F2` band, gradient `#8A8581`→`#4A4A50`, navy `#2E4282` <2%) + row 煤竹 `#6B5B4E` for labels only. First-screen saturation gate 2.0%.
- Type: sans per row (Hanken Grotesk / Instrument Sans; Noto Sans TC / JP), same sizes as tokens (96 / 32 / 16 / 15 / 13 px).
- KV: reference "dark interior with a model on the table + framed forest" → "half-cleared office floor with a taped floor plan + framed hand labelling a crate", wordmark ISSO RELOCATION; motion: parallax drift + glyph rise + tab slide.
- Motion: sp-reveal--mask/--wipe, sp-stagger+--up, sp-count, sp-marquee (footer 20 s), sp-parallax on hero H1 (8%) and trio T1 (10%).
- Full binding detail: `design-spec.md`.
