# Neiro Music — reference (draft, stage 1; "Ours" columns filled in stage 2)
Sources are S5-Style entries (https://www.s5-style.com/), checked against every existing themes/*/brand/reference.md: neither site was used before.
| # | Site | S5 category | Role |
|---|---|---|---|
| R1 | https://izanami-official.com/ | 学校･教育･医療･福祉 | primary; measured in `reference-tokens.md` |
| R2 | https://bumpofchicken-30th.com/ | バンド･音楽･レーベル | secondary; first-screen composition and type only |
Screens: `ref/iz-first.png`, `ref/iz-photopair.png`, `ref/iz-bg-text.png`, `ref/boc-first.png`; scroll pairs `ref/scroll-iz-*.png`.

## Colour relationship (R1)
| Role | Hex | Share | Ours |
|---|---|---|---|
| Ground (main) | `#0A0801` | 60–85% | |
| Text / line (secondary) | `#D9D7D4` | 5–8% | |
| White (top accent) | `#FFFFFF` | <1% | |
| Photo mid tones (colour only via photography) | `≈#4A5148`, `≈#B9A98A` | 15–55% where a photo band shows | |
| Accent hue | none in UI | 0% | palette hex `#705868`, ≤3% |
First-screen saturated pixels: R1 0.0%, R2 2.4%.

## Signature technique candidates
| # | Technique (R1 unless noted) | Shape / composition / position | Ours |
|---|---|---|---|
| T1 | Overlapping portrait pair in hero | 468×720 (2:3) photo at right x900–1368; a 252×376 (≈2:3) photo overlaps its upper-middle at x1044–1296, breaking the top edge; headline third line indented ≈225px | |
| T2 | Stacked sticky rows | three 675px rows, `position: sticky`, next row covers previous; each row = vertical label (left, x72), title + tagline + paragraph (x400, 324 wide), 324×495 portrait photo (x1044), 1px hairline x72–1044, numeral 01/02/03 bottom-left | |
| T3 | Vertical rail label | `writing-mode: vertical-rl`, caps serif ≈16–18px, ls ≈0.2em at x≈75, sticky per section | |
| T4 | Low-key full-bleed photo with top gradient and quiet text block over it | text column ≈470px at x720, dark gradient at the top | |
| T5 (R2) | Centred two-line serif wordmark above a single tilted (≈−8°) dimmed photo on black, with 1px crosshair/tick marks | wordmark ≈70px caps, photo ≈570×580 | |

## Motion (details in `reference-tokens.md` (g))
Lenis smooth scroll + GSAP; per-line text rise (translateY 1 line-height, opacity 0→1, ≈1.0–1.3s, quart.out, stagger .07, trigger ≈95% viewport); sticky stack; background photo fade-in while dark run scrolls out; WebGL photo reveal (not reproducible).
R2: no document scroll (fixed WebGL screen) → none.
