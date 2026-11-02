# Reference
Reference: https://mud.co.jp/ (S5-Style collection; design studio; quiet monochrome, framed window)
Secondary: https://andmade.jp/ (S5-Style collection; design studio; text catalogue in three equal columns)
Chosen for form, not industry: both are paper-white, hairline, grid-led sites, which suits a stationery shop.

| Element | Where seen | Our counterpart |
|---|---|---|
| 1px inset frame (40px) around a quiet hero window, wordmark low-right | mud first screen, ref/mud-first.png | Home hero T1: 1 px ink frame, inset 40, three equal photo cells; wordmark on a plate low right in cell 3 (repeated small in home blocks 6 and 10, and on 6 inner pages) |
| Hand-ruled line art (contour rings) inside the frame | mud first screen | Own hero-contour.svg: seven rings and one deckle line across all three photos, slow 40 s drift; also fills the rings-only frame in home block 10 |
| Ruled index rows: "01." numeral + 80px title + short lead in right column | mud Service, ref/scroll-mud-index-rows.png | Home block 3 T2: six paper rows, 5rem gsm figure at x=40, name at x=320, four-cell mono spec strip from x=848 (Papers, Weights, Prices, Contact, Single product) |
| 2-up edge-to-edge works grid with mono tag chips | mud Works, ref/scroll-mud-works-grid.png | Home block 7: envelopes and notebooks, 2-up edge to edge at 1.8:1, chips and mono captions |
| 3-column catalogue of underlined titles + grey spec meta + mono dates | andmade, ref/andmade-first.png | Home block 5 T3: nine underlined uses at x=198/546/894 (Shop, Weights, About, Journal) |
| Left label rail and rotated right-edge captions | andmade | Short left label, sticky inside T3 only; rotated captions not used (side rails banned, rotated rail on the used list) |
| Staggered translate reveal, 0.9s, 0.11s stagger | andmade (CSS transitions), ref/scroll-andmade-370.png / -870.png | Home block 5 and inner T3 lists: sp-stagger + sp-reveal--up, 0.9s cubic-bezier(.22,1,.36,1), 24 px, 0.12s stagger |

Colour relationships taken: ground ~#F2F2F2 / #F6F6F4, pure ink text, no saturated accent on first screen (0%). Ours adds sage #888C7B as the single quiet accent; measured first-screen saturation of both references is 0.0%, and ours matches it.
Screenshots: brand/ref/*.png. See reference-tokens.md for measured values.
