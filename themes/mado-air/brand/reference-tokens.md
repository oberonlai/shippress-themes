# Reference tokens — BALMUDA The Pure (https://www.balmuda.com/jp/pure/), measured 2026-10-25, 1440×900, getComputedStyle
Only numbers and descriptions; no assets, text or logos copied. Source screenshots in ref/.

## (a) Colour (tok a)
| Role | Hex | Share | Where |
|---|---|---|---|
| Base | #FFFFFF | ~45% of page | body, sub-nav bar, overview, gallery |
| Soft base | #E9E9E9 (tech band, light grey) | ~10% | "Technology" band |
| Ink / text | #333333 (body), #000000 (headings in bands) | text | |
| Dark | #1F1F1F top bar (100px); charcoal photo band #2B2D2E–#333 | ~15% | global nav, "Design" full-bleed macro photo |
| Accent 1 (airflow cyan) | #4DC0DB | <1% | "Learn more" pill on tech band, airflow diagram tint |
| Accent 2 (CTA green) | #4BA53A | <1% | Buy pill, active sub-nav label |
| Greys | #828282 #707070 #BDBDBD #EDEDED #404040 | UI | captions, rules, borders |
First screen (hero photo, nav dark bar excluded from saturation): saturated share (S>0.35,V>0.2) = **11%** (green plant + wood floor). Dominant tones: warm grey wall #BDBCB5/#D3D3CE, wood #B2AA9D/#928977, shadow #3C362C.

## (b) Type (tok b) — Open Sans (Latin, 400 only) + YuGothic/Hiragino Kaku Gothic (JP); weight is 400 almost everywhere, hierarchy by size
| Level | px | rem | weight | line-height | letter-spacing | case |
|---|---|---|---|---|---|---|
| Hero product name (on photo, white) | ~48 | 3 | 400 | ~1.2 | normal | as typed |
| Hero tagline (white, italic JP) | ~32 | 2 | 400 | – | .1em | |
| Page title (H2) | 38.4 | 2.4 | 400 | 53.76 (1.4) | normal | none |
| Section title (Latin label e.g. TECHNOLOGY / DESIGN) | 38.4 | 2.4 | 400 (reads heavier, sans) | 46.08 (1.2) | normal | UPPERCASE |
| Section subtitle (H3) | 38 | 2.375 | 400 | 45.6 (1.2) | normal | none |
| Lead (overview) | 20.8 | 1.3 | 400 | 37.44 (1.8) | normal | |
| Body / desc | 18 | 1.125 | 400 | 32.4 (1.8) | normal | |
| Footnote (*1 *2) | 12.8 | .8 | 400 | 23.04 | normal | italic |
| Sub-nav links / buttons | 12.8–14 | .8–.875 | 400 | – | normal | |

## (c) Spacing (tok c)
- Top bar 100px (dark); sub-nav bar 90px (white; product name 24px left, anchor links 13px, pills right).
- Hero billboard: full-bleed 1440×810 under sub-nav (≈90vh).
- Section padding: 96px top / 96px bottom (tech 710px tall, overview 1205px tall with image).
- Container: 980px (x=230..1210); overview text column 880px; section text column 490px; gallery 3×2 tiles 313×313 square, gap ≈10px.
- Text-to-diagram gap: text left column 490, diagram right at ~x=830.

## (d) Radius, border, shadow (tok d)
- Pills: radius 16px (sub-nav, 32px tall) and 22px (section buttons 180×44); outline 1px #000 (light bg) / 1px #FFF (dark bg); filled variant bg #4DC0DB or #FFF.
- Rules: 1px #333 under section subtitle (≈490px long). Images radius 0. No shadows.
- Service cards (bottom): 1px #EDEDED panel, radius ~5px, 3 icon columns.

## (e) Imagery (tok e)
**IMAGERY = photo.** Hero, design band, usage slider, gallery are all photographs; the only non-photo is one line-art cutaway diagram of the unit (pale blue airflow tint) in the Technology band (<1/6 of image slots).
Photo style: high-key natural-light interiors, soft diffused daylight, desaturated warm greys + a little plant green and light-wood floor; product centred or off-centre small in a large calm room; shallow depth of field in lifestyle crops; matte, low contrast; macro detail shot in dark moody grade for the Design band.
| Image | Ratio | Radius | Mask | Position / width |
|---|---|---|---|---|
| Hero billboard (5-slide crossfade) | 16:9 (1440×810) | 0 | none | full-bleed |
| Technology cutaway diagram | ~1:2.2 tall | 0 | none | right half, bleeds off band bottom (cropped by section edge) |
| Design macro band | full-bleed 1440×710 | 0 | dark overlay ~.4 | text left over photo |
| Usage slider | full-bleed | 0 | none | text left, blur-foreground photo |
| Gallery tiles | 1:1 (313×313) | 0 | none | 3×2 grid centred, 980 container |
| Product packshot (price card) | portrait 1:3 | 0 | none | centred, 2 colours side by side |

## (f) Decoration (tok f)
- Dot pager under sliders (6–8px dots, grey / dark active) · circular play button 110px, 4px white border, bottom 7% right 8% on hero · slim 60px round arrows left/right on hero · short 1px hairline under section subtitles · Latin uppercase section labels (TECHNOLOGY, DESIGN) as eyebrow above JP subtitle.

## (g) Motion (tok g)
- Hero: slick carousel crossfade, text overlay fades with opacity transition 1s ease-out, play-button fades 1s.
- Lazy background / images: opacity 0→1, `transition: opacity 1s` (class .lazyload → .loaded), added by a jQuery scroll listener when section top < scrollTop + 0.8·viewport.
- fadeInUp keyframe exists: opacity 0→1, translateY 40px→0 (used on card/modal level), modal open .5s delay .5s.
- Buttons `transition: all .2s`; blockquote carousel fade `.5s` delay `.3s`.
- No parallax, no sticky, no counters, no marquee.
