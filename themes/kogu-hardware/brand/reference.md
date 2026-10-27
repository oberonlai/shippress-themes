# Reference
Source: S5-Style listing → **https://www.good2garden.com/** (Good2Garden, exterior & garden works, Kobe; category near shops/home-craft). Not used by any earlier theme (checked with grep).
IMAGERY: photo (documentary, natural light, no illustration).

| Item | Reference (measured) | Finished theme (Kogu Hardware, binding: design-spec.md) |
|---|---|---|
| Hero | full-bleed 1440×908 documentary video/photo of a hand on tree bark, bokeh left, bottom-left 2-line headline (JA 20px kicker + EN 64px), transparent fixed 75px header with white nav + phone pill | full-bleed photo H1 (hand lifting a brass hinge off a pegboard, warm-grey bokeh left, rolled cuff bottom-right), `sp-parallax` 10%; kicker 20px + H1 4.25rem bottom-left (97/48px); transparent 75px header, white nav, outlined phone pill; 72px ruled info bar under the photo (hours · keys cut while you wait · address · How to ask →) |
| Palette | ground #F7F6F0, ink/dark panel #141811, hover #EEEEE7, muted #858781, no accent colour | same four values; charcoal #4E4B4A replaces the ref's dark-green second panel; brass #A9823A only as a 6px dot; meta text #6B6D67 for AA |
| First-screen saturation | 6.6 % | target ≤ 8 %, hard cap 15 % |
| Type | Neue Haas Grotesk Display + Japanese gothic, 64/35/20/15px, ls 0.02–0.1em, lh 1.4–2.3 | sans: Instrument Sans (display 400) + Manrope (body) + Noto Sans TC/JP; 68/48/35/20/16/13px, ls .02em display, lh 1.4 hero / 1.9 body (CJK 1.85) |
| Signature 1 | About: tall portrait 2:3 left + small landscape floating top-right + text column offset down | T2 — home "Since 1987" (C1 2:3 at x75 w500, C2 260×184 at x1105, text x728 w637 offset ~300px); also About (mirrored), Home fixers, Trade, Makers, How to ask, Visit, story single |
| Signature 2 | Works: 3-column grid divided by 1px ink rules, mixed-ratio photos centred in cells, underline "View more" | T1 — home audience gateway (G1 3:4 · G2 3:2 · G3 2:3) and "From the drawers" (PR1–PR3); full-bleed, 1px #141811 rules, cell pad 70/75, photo 329w; also shop grid, single product gallery cell, Home fixers, Trade, Makers, Stories index |
| Signature 3 | Service: sticky 100dvh stage, dark half + photo half swapping panel by scroll progress | T3 — home "At the counter": three 50/50 panels (#141811 / #4E4B4A / #141811 + S1/S2/S3), 240×320 small photo (PR6/PR4/PR5) overlapping the 3rem title, CSS sticky stacking ≥960px (no JS); also Services, Home fixers, Trade, Visit |
| Signature 4 | Scattered small photo fragments pinned to the edges around a centred title | not used (would read as a collage, which the quality rules forbid) |
| Scroll | fade 1.8s / top 8% 1s / blur / char-mask text / image mask 0.65s | sp-parallax (hero 10%, floor band 8%), sp-reveal--up (1s, cubic-bezier(.165,.84,.44,1)), plain sp-reveal fade on paragraphs (1.8s, cubic-bezier(.25,.46,.45,.94)), sp-reveal--wipe on grid/T2 photos (1.1s built-in), sp-count on "1,248" |
Screens: ref/good2garden-first.png (loader), ref/good2garden-first-hero.png, ref/scroll-g2g-*.png. Tokens: reference-tokens.md.
