# Reference — Shirota Laundry (our counterpart, filled from design-spec.md)
Sources (S5-Style gallery, not used by earlier themes):
- Primary: https://www.union-tec.jp/ (S5-Style #12083, category architecture / construction / real estate) — oval photo window over a giant wordmark, hairline grid, scroll morph.
- Secondary: https://www.rondomark.jp/ (S5-Style #12095, category other) — calm grey/taupe palette, wide-tracked type.
Screenshots: brand/ref/union-first.png, union-s2/s4/s6.png, rondo-first.png, rondo-s2/s4/s6.png, scroll-union-*.png. Tokens: reference-tokens.md.

| # | signature move candidate (union-tec) | shape / composition | our counterpart |
|---|---|---|---|
| 1 | Oval photo window over giant wordmark | ≈510×350 superellipse centred over a 190px black wordmark, hiding middle letters | T1: tall oval 375×540 (rest state) at right over ghost "SHIROTA" 17.5vw #F3EFEF; every inner page head (smaller oval + ghost page word) |
| 2 | Hairline 8-col grid with ticks, slightly warped | 1px #E3E3E3 lines full viewport, behind everything | T2: fixed "sheet weave" grid 1px #E5E1E1 + 5px ticks site-wide, wave SVG in hero |
| 3 | Oval morph on scroll (wide → tall portrait at right) | clip-path interpolates, ~350px scroll | Rest state used as hero; motion → sp-parallax 10% in oval; next stage → full-bleed packing band with 320×220 oval inset (sp-parallax 8%) |
| 4 | Text scrub grey→black per character | 25px lead, scroll-linked | Not reproduced (no custom scroll); statement lead 1.75rem with sp-reveal--up |
| 5 | Pill CTA with dot + fixed top-right pill pair | 216×48 / 88×24 | 216×48 dot pills site-wide; header stacked pair "Book a collection"/"Rates" 24px; sp-reveal--left stagger on pill rows |
Rondomark (palette/type only): taupe #938978 tag, ground #F0F0F0, ink #2C2C2E, wide tracking .08em.
Palette (ours, from reference relations): base #FFFFFF 76% / ink 7% / red-mouse #8A6A68 accent ≤4% / soft grey #F0F0F0 card ground. First-screen saturated share ref 4.3%.
Scroll effects: see stage-a.md table.
Capability cards (union s4) → T3 staggered square card mosaic #F6F4F4, radius 0, outline-oval icons. Rondomark → #F0F0F0 CTA band, .08em tracking on CJK H2.
