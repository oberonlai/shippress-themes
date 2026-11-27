# Reference tokens — measured 2026-11-27 (1440 × 900, headless Chromium)

Primary: https://www.azabu-u.ac.jp/ (university with a veterinary school; hands-on animal care, clear audience paths).
Secondary: https://www.yamazaki.ac.jp/ (animal-nursing school group; solid panel beside a photo).
Only values and descriptions are recorded; no assets, text or logos are copied.

## (a) Colour
| Role | Primary (azabu) | Share of first screen | Ours (Shirogane) |
|---|---|---|---|
| Brand / headings | #7B2482 (purple) | ~3 % | #5C6B48 pine |
| Page ground | #FFFFFF | ~55 % | #FFFFFF |
| Pale band | #EADDEE (lilac, triangulated), #EAEDF2 (grey) | ~10 % | #EDF0E6 (pale sage), #EEF1F2 |
| Text | #000000 / #8D8D8D date | – | #232820 / #6B7266 |
| Accent (notice) | #FF1054 crimson label cell | ~2 % | #B5472F brick, notice cells only |
| Course hex tiles | #873489, #9A4742, #DDA833, #CB5390, #3CA8B8, #88B83E | 11 % on the hex screen | muted: #5C6B48, #7B5A44, #B58E3A, #A5586B, #3F7C85, #7D9150 |
Hero photo: washed overlay of a photograph, blue-grey (#A0B0D0 family) — only ~2 % of the first screen is saturated.
Secondary hero: teal panel #3FC4B7 (~30 % saturated) — NOT adopted; ours is pine #5C6B48 (HSV S≈0.34), first-screen saturated share target ≤ 12 %.

## (b) Type
- azabu body: Montserrat + Japanese gothic, 14 px / 22.4 px, weight 400, normal tracking.
- h2: 23.8 px, 700, #7B2482, padding 50 0 20, small Latin caps sub-label beside it (≈ 11 px, tracked .15em).
- Header nav: 15 px 700 with a 8 px Latin sub-label (tracked, caps) under each item.
- Section label style: big Latin word ("NEWS", "PICKUP", "PHOTO") + small JP subtitle on the same baseline, 1 px black rule under (pickup, photo).
- yamazaki: Noto Sans JP, H1 33.7 px/49 px 700 white on panel; section H2 30 px 700 #434343 centred; body 16 px; nav 16 px 700.
- Ours: Manrope (display 700/800, caps sub-labels .14em) + Source Sans 3 body; largest type ≥ 4.25rem (hero H1 4.5rem).

## (c) Spacing
- Container 980 px (azabu) / 1040 px (yamazaki); ours 1200 px.
- Section padding: ≈ 80–100 px top/bottom (news 654 px block, hex band 378 px, pickup 82 px rows with 20 px gaps).
- Header: fixed, 145 px, two tiers (global nav + audience row of 5 cells, 62 px, dotted vertical separators).
- Pickup tiles: 314 × 82, gap 20 × 20, thumb 80 × 80 flush left.

## (d) Radius, border, shadow
- Radius 0 everywhere in azabu; yamazaki buttons radius 0, tag chips pill (r999, 1 px teal outline).
- Borders 1 px #E0E0E0; dotted 1 px separators in nav and news; notification rows 1 px crimson.
- Shadow: soft grey drop under pickup tiles (0 8px 8px -6px rgba(0,0,0,.2) look); none elsewhere.

## (e) Imagery — IMAGERY: photo
- Documentary photographs (large animals, students in scrubs, field work), real faces. Hero is a full-viewport photo set (7 stills) cross-dissolving.
- Banner strip: three 980 × 460 banners visible at once (swiper, loop, dots), ratio 2.13:1, radius 0.
- News thumbnails 80 × 80 square, 1 px #E0E0E0 border. Photo archive 280 × 140 (2:1).
- Hex course tiles are flat colour, 260 × 232 (CSS 220 wide at 980 container), no mask on photos; photo (horse head, fruit) sits behind the tiles at the band edges, bleeding off both sides.
- yamazaki: hero is a split — photo right (≈ 58 %), flat panel left with a big curved edge; mint strip with three flat coloured buttons below.

## (f) Decoration
- Hex tiles: two rows zig-zag, offset x 152 px, y 145 px between rows, six tiles; label serif-like white 24 px + 10 px caps English line; hover shifts margin-top 15 px, opacity .8, .4 s.
- Band behind hexes: pale lilac low-poly triangulation, 378 px high.
- Notification rows: crimson label cell (150 px) + white text cell, 1 px crimson frame, chevron right.
- Right-edge fixed stack: three 100 × 85 tiles (apply, site, page-top) — not adopted.

## (g) Motion
- Hero: pure CSS `slideShow` keyframes, 18 s loop, each slide delayed i × 3 s, opacity 0 → 1 at 5 %, hold to 12 %, → 0 at 20 %, `linear` (so slides overlap = double exposure).
- Banner strip: Swiper 3.4.1, autoplay, loop, dots + arrows. Header float menu: jQuery fadeIn on scroll (400 ms default).
- No scroll-reveal on content. Page scroll jumps use jQuery animate 'quart'.
