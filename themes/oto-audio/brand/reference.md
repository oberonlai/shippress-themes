# Oto Audio: reference (stage 1 draft; "Ours" column to be filled after build)
Source collection: S5-Style (https://www.s5-style.com/). Neither site is in any earlier theme's reference.md.
| id | site | why | used for |
|---|---|---|---|
| R1 | https://camitabox.com (CAMITA, V-cut gift boxes) | product-object brand; photo bleeding off the left (75.5% of width) with a quiet white right column; nav spread across the full width | hero composition, photo-left split, drawn-line icons, numeral chips, fixed round badge |
| R2 | https://luci.co.jp/led/en/pickup/kiwa (Luci KIWA lighting) | low-key product photography on warm near-black, light serif, product trio on a white band | ground/ink relationship, product trio, reveal motion, parallax band, circle-mask image |
Measured numbers: `reference-tokens.md`. Screens: `ref/` (camita-first.png, camita-sheet.png, luci-first.png, luci-sheet.png, scroll-*-before/after.png).

## Signature candidates (shape, composition, position)
R1-a. Photo-left bleed: one photo 1088x700 (aspect 1.55) flush to the left edge and under the header, the page's white column on the right with a wordmark and a tiny mark straddling the photo's right edge; a rotated caption runs down the far right edge.
R1-b. Five-item nav spread over the full width (first item left-aligned at the gutter, last right-aligned), plain text, underline on current; nothing else in the bar.
R1-c. Line-drawn product icons (four, side by side) that draw themselves, each with a centred caption in which the number sits on a black chip.
R1-d. Fixed round badge (~320px, 3px ring, text on a circle path) pinned bottom-right, appearing after the hero.
R2-a. Product trio: three 3:4 cards (427x576, gap 20) on a white band between two ink sections, each with a name image at the foot and a round outline "+" button.
R2-b. Crosshair grid: a three-column feature text block framed by 1px plus-marks and corner brackets in grey on the ink ground.
R2-c. Hollow-circle section labels (10px ring + 20px label) above serif light headings (32-42px, ls 0.05em).
R2-d. Circle-mask reveal of a near-square image (circle(0%) to circle(75%), 2s).
R2-e. Full-bleed 3:2 image seen through a 480px high frame, image sliding behind it (parallax).
Chosen for Oto Audio (final, see design-spec.md section 1): T1 = R1-a + R1-b, T2 = R2-a, T3 = R2-b; supporting R2-c labels and R1-c icons; R1-d and R2-d not used. Draft list was: R1-a (photo-left split, matches row archetype), R2-a (product trio with comparison framing), R2-b (spec crosshair frame behind the comparison table), R1-c reinterpreted as drawn headphone/amp/speaker line icons.

## Colour relationship (R1 + R2)
| role | R1 | R2 | Ours (draft) | share |
|---|---|---|---|---|
| ground | #FFFFFF | #16160E | #FFFFFF ~50%, stone #F4F3F0 ~8%, ink #16160E bands ~30% | 55% / 35% |
| text | #000000 | #E8E8E7 on ink, #16160E on white | #16160E / #E8E8E7 | 5% |
| mid | none | #5D5D58 lines, #2F2F27 cards, #8B8B87 meta | same | 5% |
| accent | none (photo colour) | none | #6F5A43 (row hex 煤竹色), small marks only | <=3% |
First-screen saturated px: R1 4.3%, R2 0-0.5%. Ours: spec gate <=8%, target 3-6% (common cap 15%).

## Scroll effect candidates (see stage-a.md table)
R1: line draw (IO 0.5, dur 1s x len/400, step .2s, cubic-bezier(.45,0,.55,1)); KV blur(10px)->0 crossfade 1s; Lenis smooth scroll. R2: fade-up translateY(40px) .5s cubic-bezier(.22,1,.36,1) with .1s stagger from .3s; scaleX bar 1.2s; circle clip-path 2s; band parallax margin-top -200px; KV blur(20px)->0 2s.

## Our implementation (成品對應; binding mapping from design-spec.md, class names fixed, build fills file paths)
| item | source | where | class / file | note |
|---|---|---|---|---|
| T1 photo-left split, heading straddling edge | R1-a, R1-b | home `front-hero` (S1, 75.5% x 0, H1 overlaps 88 px); small version on every inner page head (62%, overlap 72 px); mirrored on home `front-visit` (S9 bleeds right) | `.oa-split`, `.oa-split__photo`, `.oa-split--head`, `.oa-split--mirror`; patterns `front-hero.php`, `page-head.php`, `front-visit.php` | straddle + vertical caption only >= 1024 px; stacked in flow below |
| spread nav | R1-b | header (7 items justify-between, 1.5rem Public Sans 300) | `parts/header.html`, `.oa-nav` | collapses to wordmark + Cart + Menu < 1024 |
| T2 product trio | R2-a | home `front-trio` (PA40, PD2, PS5); Shop grid cards; Single product "Pairs well with"; Listening room "On the demo shelf"; empty cart | `.oa-trio`, `.oa-card`, `.oa-card__plus`; `front-trio.php`, WooCommerce templates | 3:4, gap 20, round "+" 40 px, bracketed name, pill 165x42 |
| T3 crosshair frame | R2-b | home `front-compare` (headphones table); Compare (3 tables); Single product spec panel; Listening room process; Services price list; About facts; Shipping numbers; cart/checkout totals | `.oa-cross`, `.oa-cross__in`, `.oa-cross__plus`; `front-compare.php`, `page-compare` | 1 px #5D5D58, 40 px arms; plus marks hidden < 782, tables stack |
| hollow-circle labels | R2-c | every home section and inner page head | `.oa-label` | 10 px ring, #6F5A43 on light / #A8917A on ink |
| line icons + numeral chips | R1-c | home `front-ways` (headphones, amplifier, DAC, speaker); chips also in About / Shipping numbers | `.oa-ways`, `.oa-chip`; inline SVG in `front-ways.php` | sp-reveal--wipe, 1s cubic-bezier(.45,0,.55,1) |
| parallax band | R2-e | home `front-band` (S3, 480 px frame, layer 150%, --sp-par 12% / 8% mobile); hero S1 and inner heads --sp-par 6% | `.oa-band.sp-parallax`, `.sp-parallax__layer` | check-parallax.mjs desktop + mobile |
| fade-up + stagger | R2 inview | text blocks, trio / story cards, room rows | `sp-reveal sp-reveal--up`, `sp-stagger` | --sp-dist 28px, --sp-dur .7s, cubic-bezier(.22,1,.36,1) |
| round badge | R1-d | not used | — | fixed 320 px badge would cover the first-screen ink strip and cart |
| circle-mask reveal | R2-d | not used | — | no sp-* equivalent; wipe used instead |
| colour | R1 white + R2 ink | ground #FFFFFF, stone #F4F3F0, ink #16160E, #E8E8E7 / #8B8B87 / #464641 / #5D5D58 / #2F2F27 / #3E3A39, accent #6F5A43 <= 3% | `theme.json` palette | first-screen saturated gate <= 8% |
