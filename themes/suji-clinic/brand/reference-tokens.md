# Reference tokens — measured with getComputedStyle at 1440×900 (values only; no assets, copy or logos reused)
Source: https://shinmi-shika.com/ (S5-Style entry, dental clinic). Screenshots: `ref/shinmi-first.png`, `ref/scroll-shinmi-{900,1800,2700,3600,4500}.png`; raw probe `ref/shinmi-probe.json`.

## (a) Colour (share of page area, hero excluded)
| Role | Hex | Share | Where |
|---|---|---|---|
| Ground | `#F3F5F5` + faint marble/paper texture, white | ≈70% | page, news, feature bands |
| Ink / text | `#332F26` | text | body, headings |
| Main (slate-violet) | `#565565` | ≈6% | footer, notice buttons, booking tab |
| Secondary (steel blue) | `#839FB6` | ≈7% | tab label on implant band, box__feature02 |
| Accent (taupe) | `#998E73` / `#CCC6B9` | ≈4% | topics band, ceramic band tab |
| Tint (lavender) | `#AD9FBD`, `#DED9E5`, `#CDD9E2` | ≈6% | band tints behind photos |
First-screen saturated share (HSL s>0.45): **≈2%** (grey-toned photographs, one lavender notice card ≈4% of the area at low saturation).

## (b) Type
Latin display: thin high-contrast serif (Cormorant-like) caps, `letter-spacing .08em`, 80–120px, weight 300–400, used as ghost words (CERAMIC / IMPLANT / ROOT) and section titles (NEWS, MEDICAL, GREETING) over a small JP sub-label (≈19px).
JP: Noto Sans JP 300 body 16.2px / lh 2.0 (32.4px) / ls 1.62px (0.1em); nav 16.2px 300; h3 21.6px yu-mincho 400 ls .1em; hero h2 ≈ 64px white 400 ls .1em, lead 18px lh 2.0.
Nav labels: JP 16px over Latin caps 11px light grey (`HOME / MEDICAL / STAFF …`).

## (c) Spacing
Section padding 90–120px top, 108–157px bottom (at 16.2px root = 6.67rem); container ~1296 / 1359 / 1395 px, text column 648–670px; band rows 486px tall (photo 747×378 + card); feature bands 898px; footer 805px. Column gap ≈ 54px.

## (d) Radius / border / shadow
Radius 0 everywhere. Hairline 1px white frame on header info box; hero rule 1px white under headline (555px wide). Nav bar shadow `rgba(0,0,0,.3) 2.6px 3.1px 16px`. Tab labels and thumbnails: hard offset shadow `2px 2px 0 #332F26`; thumbnails have a 3px grey offset frame (bottom-right).

## (e) Imagery — IMAGERY = photo
Real photographs, bright, desaturated clinical palette (white coats, pale walls, blue-grey light); close-ups of hands/instruments plus portrait of the director. Tinted-photo bands: photo washed 70% with lavender/blue/taupe, ghost Latin word set on the photo, white card laid over it.
- Hero: two photos, each 720×900 (50% / 50%), cover crop, edge to edge, no radius, slideshow cross-fade 5s.
- Band photo: 747×378 (≈1.98:1) right or left of the band, band 1413×486 with 54px padding; white card ≈ 55% of the band width, cut diagonally at its photo-side edge (clip-path polygon, ≈ 8% slant), overlapping the photo by ≈ 70px; tab label (taupe/blue, white text 22px, hard shadow) sits on the card's top-left.
- Thumbnail grid 3×2: 3:2 photos ≈ 195px wide at 720 scale → 398×≈250 at 1440; title 22px + circle arrow chip Ø36 dark `#565565`, Latin sub-label 11px grey, one-line caption 12px.
- Director portrait 642×597 (≈1.08:1) with vertical Latin word GREETING running down its left edge, name plate overlapping lower-left.

## (f) Decoration
Seam: none visible between hero halves. Notice card on the seam at bottom right: 470×120, lavender `#AD9FBD`@90%, 1px white inner frame 6px inset, icon disc Ø80 white 20% + two-line centred white text. Header info box: 1px white outline 245×72 + violet tab 162×90 "WEB reservation" (Japanese) with notch triangle bottom-right. Pagetop tab 45×45 taupe, bottom-right fixed. Nav dividers: 1px × 36px vertical rules between items. Vertical text (JP tategaki) in greeting.

## (g) Motion
Hero: slick fade, 5000 ms autoplay, crossfade (opacity). Nav: second fixed nav translates in from −90px when scrolling up past the nav, out when scrolling down; transition `.3s ease-in-out`. Pagetop fades in after 100px (jQuery fadeIn slow). Hover: `.3s` opacity/colour on links. No scroll-reveal found (AOS stylesheet loaded, zero `data-aos` elements).
