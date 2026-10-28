# Reference (draft) — Kura Wine
Source: S5-Style listing. Main reference: https://asa-ban.com/ (BAN INOUE, lifestyle goods and fashion; Japanese lifestyle shop, film photographs, dark slate sections). Screenshots in brand/ref/ (asa-first, asa-s1, asa-s2, asa-company, asa-shop, asa-blog, scroll-*.png). Also looked at https://ginnomori.info/ludique/ (illustrated, 70%+ saturated, rejected as 2nd reference: too loud for the quiet-palette note).
Not used before: checked against all themes/*/brand/reference.md.
IMAGERY: photo (film-grain documentary).
## Signature techniques (candidates)
1. Full-bleed film photograph first screen with slow 10s zoom and 3-slide 3s cross-fade, header transparent over it (hairline hamburger, small logo left, small serif nav).
2. Scattered About: tall 2:3 portrait flush-left (33% w) + small 3:2 print flush-right lower (23% w) + narrow text column from col 8; all on a flat dark field, images revealed by an organic alpha-mask wipe.
3. Vertical-rl title beside a 3:2 photo ("Service" slides) + pinned horizontal slide track.
4. 50/50 split: dark text column with hairline link rows (250px cells, ">" glyph) vs full-height 3:4 photo.
5. Shop-info rows: 2-col hairline rows (name 15px + address 13px, ">" at right).
## Colour
base #282B33 / #33363E (~78%), text #DAD6CE, muted #8C8C8C, slate wash #7C8A91, accent red #6C030B–#C8161D (hero slide 1 only).
## Scroll effects: see stage-a.md table. Tokens: reference-tokens.md.
## Build mapping (matches design-spec.md; the done column is ticked after stage 2)
| ref element | our theme | done |
|---|---|---|
| KV full-bleed film photo, 3-slide fade 5s/3s, 10s zoom, transparent 90px header | T1 `kw-kv`: K1 cellar rack → K2 opened case → K3 tasting table, CSS fade 15s cycle + zoom, sp-parallax 10%, H1 bottom-left + info bar | |
| Scattered About (2:3 left 33%, 3:2 right lower 23%, text col 8, mask reveal) | T2 `kw-about` (K4 + K5, sp-reveal--mask); also About, Growers, The Case, single product, journal single | |
| Vertical-rl title beside 3:2 service photo | `kw-shipments` 3 alternating rows (K6/K7/K8 + Jura/Douro/Burgenland), Shipments, Growers, single product; ≥782px only | |
| Company 50/50 split, 2×2 hairline link rows + ">" vs full-height 3:4 photo | T3 `kw-case` (K9 half-bleed, 4 stage rows); The Case, Tastings, About, Visit, Shop | |
| Shop-info 2-col hairline rows on blurred grey-blue wash | `kw-visit` pre-footer: blurred K11 under sooty bamboo (kurotake) #6A5A48 82%, sp-parallax 6%, every page | |
| Blog 3:4 large left + small images | `kw-pouring` K10 3:4 + 2×2 bottles; Journal index 3:4 + 1:1 178px thumbs | |
| Colour #282B33 / #33363E / #DAD6CE / #8C8C8C / wash #7C8A91 / red #6C030B–#C8161D | #282B33 / #33363E / #E2DCD0 / #94918A / wash #6A5A48 (row sooty bamboo (kurotake)) / wine #7A1E22 ≤2% | |
| Lusitana serif 15px/25.5, labels 20px, max 20px | Fraunces 15px/25.5, labels 20px, KV H1 4.5rem; Karla utility; Noto Serif TC/JP | |
| Motion: top 8% 1.5s cubic-bezier(.165,.84,.44,1); mask 5s; parallax scrub | sp-reveal--up (+stagger) 1.5s same curve, 24px; sp-reveal--mask; sp-parallax | |
| Radius 0, no shadow, text button + ">" with 1px rule | identical | |
