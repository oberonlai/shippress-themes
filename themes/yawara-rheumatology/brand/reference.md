# Reference notes — Yawara Rheumatology (draft, stage 1)

Primary reference: https://otani.or.jp/ (an island hospital; a quiet, bright, two-halves first screen). Measured tokens: `reference-tokens.md`. Screens: `ref/otani-first.png`, `ref/scroll-otani-900.png`, `ref/scroll-otani-1800.png`, `ref/scroll-otani-wheel-before.png`, `ref/scroll-otani-wheel-after.png`, `ref/otani-about.png`.
IMAGERY: photo (the reference uses bright daylight photographs only; high-key, haze-lifted, no illustration).

## What the reference does (home, 1440x900)
1. Top 53%: a full-width photographic strip. A wide landscape cell (3.6:1) plus 1:1 square cells that slide in sideways when the visitor scrolls the wheel (the page itself stays still).
2. A white 163x163 tab card sits at the lower-left of each square cell, flush with the photo/white seam; it holds a title and a small-caps sub-label.
3. A white caption tab at the photo's bottom-right straddles the seam: place + month.
4. Bottom 47%: pure white. Logo at the left (overlapping the seam), a 3-column navigation starting exactly at the page centre, a rotating one-line notice (dated, pale highlight chip), phone number and hours.
5. One warm accent only on the single "online visit" button.

## Signature technique candidates (ours, 2-3 to be used)
- A. Half-and-half first screen: photo strip over the top 53%, white control half below with notice line + phone + hours; strip pans sideways between cells of different shape.
- B. Seam tab card: white square card at a cell's lower corner, bottom flush with the seam, label + small-caps sub-label.
- C. Single-line dated notice reel on a pale tint chip (one line at a time, 4 s).
- D. Haze-lift: the first photo loads at brightness 140% and settles to 100% (2 s).

## Colour relationships taken from the reference (our hex in the "Ours" column is filled in by design-spec)
| Role | Reference | Ours |
|---|---|---|
| Ground | #FFFFFF | #FFFFFF |
| Ink | #001446 | #001446 |
| Haze wash | #C0E0F0 | high-key photos + band #E6F0F7 |
| Label grey-blue | #7A86A2 | #7A86A2 |
| Accent (single CTA) | #C86D00 | #C86D00 ("Book a first visit" only, hover #001446) |
| Notice chip | pale red tint | #FDE8E8 bg / #C00000 text |

## Final mapping (to be filled after build)
| Reference element | Our counterpart (page / block) |
|---|---|
| Top-half photo strip, wide 3.62:1 cell + abutting squares, white lower half (T1) | Home block 1 `yw-kv` (P01 wide + P02–P04 squares); `yw-pagehead` on every inner page; home block 8 visit strip |
| White 163x163 seam tab card with small-caps sub-label (T2) | Home KV squares, home block 2 (P05), block 4 team squares, block 7 journal squares; Conditions, Team, Journal/category/tag pageheads and lists |
| Caption tab straddling the seam | Home KV (P01), block 3 parallax band (P06), block 8 (P14); First visit (P15), Contact (P14), single post head |
| Dated notice reel on pale chip + italic phone + hours (T3) | Home KV white half; Journal/archive dates; Fees chip; Contact phone row; Notices sign-up |
| Logo over the seam at x=80, column at 50% | Home KV lockup; 50% column line on all pages; footer |
| Brightness 140%->100% haze lift (2 s) | Home P01 on load |
| Sideways strip pan | Home KV `sp-marquee` (120 s drift) |
| Photo panning inside oversized cell | `sp-parallax` home block 3 (P06, 10%) and block 8 (P14, 8%) |
| Single orange CTA, fade 800 ms + hover to navy | "Book a first visit" in header, KV and block 8 |
