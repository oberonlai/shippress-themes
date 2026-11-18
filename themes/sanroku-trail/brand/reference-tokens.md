# Reference tokens (main reference: camp.muji.com, measured with getComputedStyle at 1440x900)

(a) Colour — areas on first screen: sky/forest photo ~100% above 600px; below it a warm grey notice list.
- Page ground `#F1F0EE` (warm light grey). Text ink `#1D1D1F`. Muted text `#6D6D72`.
- Dark band (route/map band) `#3A4F44` (deep green-grey), white 1px hairline map outline on it.
- Single accent: sand button `#E0CEAA` (bg of the booking button) with ink text; small red notice chips (`#B5242B`-ish).
- First-screen saturated share (S>0.45, V>0.2): 0.4%. Photo muted greens `#899D88` / `#546657`.
(b) Type — "Gothic MB101" DemiBold (h2) / Medium (body) gothic family, sans. Body 16px / normal; h2 26px, lh 39px, tracking 2.6px (0.1em); small notes 12px lh 18px tracking 0.72px (0.06em); nav button 12px. Vertical headlines use writing-mode: vertical-rl (5 uses), large (~40px glyphs) at the photo's right side.
(c) Spacing — page gutter 24px (notice rows 30px), content frame 1312px wide (64px side margins at 1440), band padding ~64-120px, photo block 1312 x ~730, split text row: title column x=64, body column x=621 (about 43%).
(d) Radius/borders — button radius 4px; notice rows separated by 1px hairlines; accordion rows 1px hairlines; tables 1px grey border cells (6 equal cells); no shadows.
(e) IMAGERY: photo. Documentary natural-light outdoor photographs: wide 2.4:1 first-screen landscape, 1312x730 (1.8:1) inset photos, people small in the frame, muted greens, soft overcast sky; no masks, no clip-path; photo flush to the viewport on the first screen, inset 64px elsewhere; a vertical headline sits over the sky area at the right.
(f) Decoration — hairline map outline (white 1px) with one white 10px dot; dotted leaders between place name and travel time; red chips; 80x12 arrow glyph at bottom-right of photo; vertical caption beside the photo.
(g) Motion — fade+rise on enter: `transition: opacity .65s, transform .65s cubic-bezier(.165,.84,.44,1)` (ease-out-quint), scale .65s same curve for photos; hover colour .2s ease-out; no library (own IntersectionObserver + one scroll listener).
