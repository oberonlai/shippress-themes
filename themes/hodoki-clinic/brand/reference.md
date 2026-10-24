# Hodoki Clinic: reference (stage 1 draft, 2026-10-24)

Source list: S5-Style (https://www.s5-style.com/), category "school / education / medical / welfare". Neither site appears in any earlier theme's reference.md.

| | Site | Why |
|---|---|---|
| R1 (main) | Lux Clinic, https://lux-clinic.jp/ | full-bleed photo hero, centred nav row under the logo, arch photo, giant light-serif wordmark with bleeding photos, parallax, pinned expanding box |
| R2 (secondary) | T.S.NAKAMURA Bone & Joint Clinic, https://ts-nakamura.com/ | physiotherapy / bone-setting clinic, white ground, rounded photos at mixed ratios, rounded-edge dark photo band, mixed-ratio photo strip, wipe-in photos |

Screens: `ref/lux-clinic-first.png`, `ref/lux-clinic-page-a.png`, `ref/lux-clinic-page-b.png`, `ref/nakamura-first.png`, `ref/nakamura-page-a.png`, `ref/nakamura-page-b.png`; scroll states `ref/scroll-*.png`. Measurements: `reference-tokens.md`.

## Signature techniques (candidates; final pick in design-spec)
| # | Source | Technique (shape / composition / position) | Our counterpart (design-spec.md) |
|---|---|---|---|
| T-a | R1 message band | Two-line giant light serif phrase, second line wider and stepped; two rectangular photos bleed off the left and right viewport edges and overlap the letters, the right one dropped lower | **T3** (design-spec §1): home H4 "UNWIND / AND MOVE AGAIN." Source Serif 4 300 10.625rem gradient, photos #5 517×280 bleeding left and #6 394×243 bleeding right 120px lower; inner: About, After surgery, Desk workers, Stories |
| T-b | R1 intro | Arch-topped photo (radius = half the width on the top corners, 450×580) to the right of a narrow text column, with a Latin outline label (hairline + small sub-label) at top-left and a small photo straddling it | **T2**: home H2 "ABOUT / HODOKI" (text 710 + arch 450×580 right, small photo #2 bleeding −20px left over the label) and H8 mirrored; inner: About, Conditions, After surgery, Desk workers, First visit, Therapists, Visit |
| T-c | R1 header and hero | Logo left and pill CTAs right, nav as a single centred row beneath with `/` separators; full-bleed photo with the headline at bottom-left over the photo, hairline + English sub-line | **T1** + KV: header (wordmark left, phone/hours + pills `#4F6159`/`#8FA398` right, centred `/` nav), full-bleed hero #1 with bottom-left headline + 60px hairline + italic sub-line, white info bar below; all 9 inner page heads |
| T-d | R1 pinned box | Small arch-shaped box pinned in the viewport centre that expands while scrolling to a wide rounded panel (radius 332px to 0) | not used (needs pinning); nearest idea is the parallax drift, see spec §10 |
| T-e | R2 info band | Dark photo band with 50px rounded corners and centred white text, preceded by a white section with a 50px rounded bottom edge | S-b: home H5 white method band with 50px rounded bottom → H6 50px-radius parallax proof band (#10, `--sp-par` 10%); Stories bands |
| T-f | R2 strip | Full-bleed row of photos at mixed ratios (1:1, 0.73, 1.4:1), 420px tall, tops staggered by up to 127px, looping | not used (marquee/loop rows avoided vs recent themes) |
| T-g | R2 cards | White 10px-radius cards with soft 24px shadow: vertical title left, thumbnail right | partly: R2 10px radius + `0 0 24px rgba(0,0,0,.1)` on journal cards only; vertical titles not used (no vertical text) |

## Colour (reference relationships; ours replaces the cream/gold and blue; final values in design-spec §3)
| Role | Reference | Ours (draft) | Area |
|---|---|---|---|
| Ground | R1 `#F2EBDC`, white bands `#FFFFFF`, `#F8F8F8`; R2 `#FFFFFF` | final: pale sage-stone `#ECEFEA` (≈ 60 %), white `#FFFFFF`, pale `#F7F8F5` footer | ≈ 85% |
| Ink | R1 `#473C2B`, R2 `#333333` | final: green-ink `#33403A` (same lightness as R1 ink) | text |
| Accent | R1 gold `#B99533` (labels, wordmark gradient), R2 blue `#0068B7` | Seiji-nezu (celadon grey) `#6E847C` (labels, hairlines, wordmark tint, pills' outline) | ≤ 5%, never a full-bleed field |
| Support | R1 `#AC8655`, `#BCA866` pills | final: `#4F6159` filled pill, `#8FA398` second pill / outlines, gradient `#5E7569→#B9C9C0→#6E847C` | ≤ 4% |
First-screen saturation: R1 61.6% (amber interior photo), R2 6.5%. Ours ≤ 15%: the hero photograph must be pale, low-chroma, high-key.

## Scroll effects seen
See `reference-tokens.md` (g); the sp-* mapping table is in the run's stage-a.md.
