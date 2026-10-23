# Neiro Music — reference (stage 1; "Ours" columns = 成品對應, filled by the spec step; binding detail in design-spec.md)
Sources are S5-Style entries (https://www.s5-style.com/), checked against every existing themes/*/brand/reference.md: neither site was used before.
| # | Site | S5 category | Role |
|---|---|---|---|
| R1 | https://izanami-official.com/ | 学校･教育･医療･福祉 | primary; measured in `reference-tokens.md` |
| R2 | https://bumpofchicken-30th.com/ | バンド･音楽･レーベル | secondary; first-screen composition and type only |
Screens: `ref/iz-first.png`, `ref/iz-photopair.png`, `ref/iz-bg-text.png`, `ref/boc-first.png`; scroll pairs `ref/scroll-iz-*.png`.

## Colour relationship (R1)
| Role | Hex | Share | Ours |
|---|---|---|---|
| Ground (main) | `#0A0801` | 60–85% | `#0D0B06` ink, 60–85% |
| Text / line (secondary) | `#D9D7D4` | 5–8% | `#D9D7D4`, hairline rgba(217,215,212,.18) |
| White (top accent) | `#FFFFFF` | <1% | `#FFFFFF` H1 + logo only |
| Photo mid tones (colour only via photography) | `≈#4A5148`, `≈#B9A98A` | 15–55% where a photo band shows | low-key warm photos (STYLE in design-spec §8), parallax band P16 |
| Accent hue | none in UI | 0% | `#705868` ≤3% (nav dots, active line, focus, button border); lifted ground `#17140E` |
First-screen saturated pixels: R1 0.0%, R2 2.4%.

## Signature technique candidates
| # | Technique (R1 unless noted) | Shape / composition / position | Ours |
|---|---|---|---|
| T1 | Overlapping portrait pair in hero | 468×720 (2:3) photo at right x900–1368; a 252×376 (≈2:3) photo overlaps its upper-middle at x1044–1296, breaking the top edge; headline third line indented ≈225px | Hero (mirrored: big P01 left x72, small P02 overlapping, rising 48px above it; H1 right with 3rd-line indent 225px); About/Teachers/Recitals heads |
| T2 | Stacked sticky rows | three 675px rows, `position: sticky`, next row covers previous; each row = vertical label (left, x72), title + tagline + paragraph (x400, 324 wide), 324×495 portrait photo (x1044), 1px hairline x72–1044, numeral 01/02/03 bottom-left | Home "A Teaching Day": 5 sticky 675px rows (15:30–20:30 as numerals, 324×495 photos P05–P09); Lessons, Schedule, Teachers, Recitals, Stories, About |
| T3 | Vertical rail label | `writing-mode: vertical-rl`, caps serif ≈16–18px, ls ≈0.2em at x≈75, sticky per section | Every home section + all inner page heads (Outfit 1rem caps .2em, x72, sticky ≥1024; horizontal <1024); 72px line-link everywhere |
| T4 | Low-key full-bleed photo with top gradient and quiet text block over it | text column ≈470px at x720, dark gradient at the top | Home block 6: full-bleed P16 `sp-parallax` (--sp-par 10%/6%), top gradient, centred 360px text |
| T5 (R2) | Centred two-line serif wordmark above a single tilted (≈−8°) dimmed photo on black, with 1px crosshair/tick marks | wordmark ≈70px caps, photo ≈570×580 | Only 12px crosshair ticks in the parallax band corners; no tilted photo, no centred wordmark |

## Motion (details in `reference-tokens.md` (g))
Lenis smooth scroll + GSAP; per-line text rise (translateY 1 line-height, opacity 0→1, ≈1.0–1.3s, quart.out, stagger .07, trigger ≈95% viewport); sticky stack; background photo fade-in while dark run scrolls out; WebGL photo reveal (not reproducible).
R2: no document scroll (fixed WebGL screen) → none.


## Ours (成品對應) — motion
sp-stagger + sp-reveal--up (28px, 1.2s, cubic-bezier(.25,1,.5,1)) for text; sp-reveal--wipe 1.1s for row/portrait photos; CSS sticky rows; sp-parallax on the Long Room band. No Lenis, no GSAP.
