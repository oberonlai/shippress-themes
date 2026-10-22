# Reference (stage 1 draft; "Applied in theme" column left empty for stage 2 / design-spec)

## Sources (S5-Style, manufacturer / industrial-materials; neither URL is in any earlier theme's reference.md)
- R1 https://www.nittadupont.co.jp (Nitta DuPont, polishing materials maker; S5-Style /10886/). First screen `ref/nitta-first.png`, product rows `ref/nitta-part1.png`, `ref/nitta-part2.png`, `ref/nitta-part3.png`.
- R2 https://elec-inc.com (elec Inc., electrical works; S5-Style /11213/). First screen `ref/elec-first.png`, parts `ref/elec-part1.png`, `ref/elec-part3.png`.
Measured tokens: `reference-tokens.md`. Scroll teardown: `ref/scroll-*.png` and stage-a.md table.

## Signature technique candidates
| # | Ref | Technique (shape, composition, position) | Applied in theme |
|---|-----|------------------------------------------|------------------|
| A1 | R1 | Ruled product rows: full-width 1px blue hairline above each row; photo 3:2, radius 8, flush left (x=30, 54% width); right column from x=62.5% with a "(01) Polishing Pad" index label in small blue grotesk, 28px/600 title, 3-line body and a dotted-underline "see more" link with a tiny arrow. Rows repeat down the page at ~537px pitch | |
| A2 | R1 | Outline pill button (232x58, r29) with a filled 34px round arrow disc inside its right end | |
| A3 | R1 | Intro text pushed into the right half (starts x=900) leaving the left ~55% empty on the pale ground, directly under the hero | |
| A4 | R1 | Small 3:4 portraits (r8, 216-259px wide) scattered at different heights/x on the ground, a 420px text block between them | |
| B1 | R2 | Photo field: monochrome photos of mixed size (160-500px) at staggered y offsets, drifting horizontally with scroll; caption + #tag under each | |
| B2 | R2 | Fixed 96px disc "CONTACT" with a 140px ring of rotating wide-tracked text, top-right | |
| B3 | R2 | Giant wide-grotesk marquee line cropped by the viewport edges under the hero | |
| B4 | R2 | Small uppercase wide-tracked section label above body copy | |
Take for Denki Components (quiet palette only): A1 (as the product-families ledger), A2, A3 from R1; B1 (staggered photo offsets, light-touch) and B2 (round "Request samples" badge) from R2, recoloured to ink/stone, no orange field, no dark full-bleed ground.

## First-screen measurements (1440x900)
| Ref | Saturated pixels (s>0.4, v>0.25) | Dominant colours |
|-----|---------------------|------------------|
| R1 | 13.0% (hero art blobs) | #C8E0F0 27%, #F8F8F8 22%; later screens 0.1-3.8% sat on #F0F0F8 / #E8F0F0 / #F8F8F8 |
| R2 | 60% (night-blue hero art), later screens 25.6% | #101010 45%, orange #E86010 2.5% - structure only, not usable as ratio |

## Palette (relationship from R1; accent per design-plan 鉄紺 #2E3A4B)
| Role | Hex | Share | Source |
|------|-----|-------|--------|
| Ground | #F2F4F7 (cool paper) | ~55% | R1 #F0F0F8 / #F8F8F8 field |
| Band / surface | #E6ECF0 | ~20% | R1 #E8F0F0 band |
| White | #FFFFFF | ~15% | R1 header and card whites |
| Ink | #13253B | ~7% (text) | R1 body ink rgb(19,37,59) |
| Accent (main) | #2E3A4B 鉄紺 | ~2% small areas: arrow disc, index labels, hairline tint, buttons | design-plan hex, used like R1's #2E5DBC |
| Spot | #B5683A copper | <=1% (one detail: sample badge ring / active mark) | R2 orange logic, desaturated |
First-screen saturated target <= 8% (cap 15%).

## Scroll effect teardown
See stage-a.md "scroll candidates" table. Before/after: `ref/scroll-elec-2600-before.png`, `ref/scroll-elec-2600-after.png`, `ref/scroll-nitta-1500-before.png`, `ref/scroll-nitta-1500-after.png` (R1 row already revealed on jump-scroll; its effects are recorded from CSS/JS in reference-tokens.md section g).
Note: no code, text, photo or logo copied; only timing, trigger, shape and numbers recorded.
