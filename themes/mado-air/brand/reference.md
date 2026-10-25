# Reference (draft, stage 1) — Mado Air
- **Primary reference:** https://www.balmuda.com/jp/pure/ (BALMUDA The Pure product page; the row's note names balmuda.com product pages). Not in any earlier reference.md (checked with the grep). A second reference was skipped: the six-minute and cost budget went into deep measurement of one site; the combined palette/structure of the row's note is covered by it.
- Screenshots: ref/balmuda-first.png, balmuda-tech.png, balmuda-design.png, balmuda-gallery.png, scroll-balmuda-before.png, scroll-balmuda-after.png. Tokens: reference-tokens.md.
## Signature devices (candidates; 2–3 will be used)
1. **Full-bleed calm-room hero + product-name lockup lower-left** under a two-tier header (dark global bar, then white product sub-bar with anchor links and CTA pills) — ref/balmuda-first.png.
2. **Anchor sub-nav with pills**: product name left, 5 anchors, outline pill + filled pill right (sticky) — one repeated CTA.
3. **Technology band**: light-grey band, uppercase Latin label + 1px rule + short text left, tall line-art cutaway diagram with pale-cyan airflow bleeding off the band bottom right — ref/balmuda-tech.png.
4. **Dark macro "Design" band**: full-bleed close-up photo, text left, white pill button — ref/balmuda-design.png.
5. **3×2 square gallery** in a 980px container, then packshot + price card + three icon assurances — ref/balmuda-gallery.png.
## Our translation (finished-product column, filled at stage 2)
| Reference device | Ours |
|---|---|
| 1. Calm-room hero + lockup lower-left + two-tier header | **Used (KV + T1).** Full-bleed morning windowsill photo, 3-photo CSS crossfade 1s ease-out, H1 "Mado Air" 4.5rem white lower-left, 96 px play button lower-right, `sp-parallax` 8% on the photo layer; `#1F1F1F` 64 px bar + white 72 px sticky sub-bar. Every page. |
| 2. Anchor sub-nav with pills | **Used (T1).** 7 anchors + outline "Notify me" + cyan filled "Pre-order" (the one repeated CTA); inner pages swap in their own anchors. |
| 3. Technology band (grey, Latin label + rule, cropped cutaway) | **Used (T2).** `#E9E9E9` band, HOW IT WORKS 2.4rem + 1 px #333 rule, own SVG cutaway 460×1010 cropped top and bottom, cyan airflow, `sp-reveal--wipe`, 3 `sp-count` numbers. Also on How it works, Specs, Care. |
| 4. Dark macro Design band | **Used (T3).** Full-bleed 710 px dark grille macro, overlay .4, text left, white pill, `sp-parallax` 10%; directly after T2. Also on Design, Pre-order, Studio. |
| 5. 3×2 square gallery + packshot/price card + assurances | Partly used as a regular structure (gallery 313 px squares, gap 10; pre-order card + 3 assurances); not counted as a signature. |
Palette: #FFF / #E9E9E9 / #333 / #1F1F1F / cyan #4DC0DB taken directly; green CTA #4BA53A dropped (brand-specific). Type tokens 2.4 / 2.375 / 1.3 / 1.125rem, lh 1.2 / 1.8 taken directly. Full mapping: design-spec.md §10.
