# Akari Hotel — reference (draft, stage 1)
Source: S5-Style (https://www.s5-style.com/). Used 2 entries (hotel / stay); neither used by an earlier theme.
- R1 (main, 80% target): TRUNK (HOTEL) CAT STREET — https://wedding.trunk-hotel.com/catstreet — screens `ref/trunk-first.png`, `ref/trunk-sheet.png`; tokens in `reference-tokens.md`.
- R2 (secondary, structure only): Yuien — https://yuien.life/ — `ref/yuien-first.png`, `ref/yuien-sheet.png`.
## Borrowed (relationships, shapes, composition; no copy/photos/logo)
| Technique | R | Ours (filled in later stages) |
|---|---|---|
| Giant serif section word (~11vw, lh .8, ls −.05em) overlapping a photo edge, numbered "( 01 )" | R1 | T1: home chapters 01 Arrival / 03 Evening (mirrored) / 05 Breakfast + Enquire, `clamp(4.5rem,11.43vw,10.3rem)` solid ink over P03/P08/P10/P11; every inner page head |
| Ink band with sticky stacked photo (823×900) at right, previous photo shrinks 0.7 + fades | R1 | T2: home 02 Rooms band #121212, P05/P06/P07 aspect 823/900 flush right 57.15%, CSS sticky + sp-reveal--zoom; Rooms and Breakfast & Bar pages |
| Wide photo opening via clip inset 1.5%→0 + inner parallax 16% | R1 | T3: P04 / P10 16:10 62vw right-aligned with lone label, sp-reveal--mask + 1 px #808080 sp-reveal--wipe line; parallax → sp-parallax 12% on P01 dusk room band |
| Rounded outer frame / vertical side labels / slow text marquee | R2 | Only the 28 px radius, on the single enquiry card (home 10); no frame, no vertical labels, no marquee |
## Colour relationship
Ink #121212 (≈90% first screen) + white sections + 1 px #808080 hairlines; photography carries colour. Ours: ink/stone ground, accent #7A6E80 only on small areas.
## Scroll effects: see `ref/scroll-*.png`.
Finished-product mapping (stage 1 spec, see design-spec.md):
- Key visual: R1 ink wordmark screen + small centred entrance photo + link-column row + pill + "(Beyond The Wedding)" + peeking full-bleed photo → Akari ink screen "AKARI (HOTEL) / TESSEL STREET", P02 guest arriving at dusk, four day-time info bar + Enquire pill, "(Beyond The Check-in)", P01 dusk room peeking then parallax.
- Colour: #121212 / #FBFBFA / #808080 hairline (R1) + #7A6E80 accent ≤2% (row).
- Motion: sp-parallax (P01 12%), sp-reveal--mask/--wipe (wide photos, lines), sp-stagger+--up (chapter heads); hero load animation only.
