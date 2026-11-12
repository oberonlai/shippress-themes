# Reference
Main: https://www.akomeya.jp/ (Akomeya, a rice shop and kitchen goods store). Shots in ref/: akomeya-first.png, akomeya-grid.png, scroll-akomeya-before.png, scroll-akomeya-after.png.
Measured tokens: reference-tokens.md. Design spec: design-spec.md (signatures T1-T3, Key visual concept, similarity table).
| Reference trait | Where seen | Our adaptation (product fit) |
|---|---|---|
| Ruled category rail with thumbnail chips and plus marks, left of the stage | first screen | T1: "This morning's cuts" rail, 200px, 6 rows x 57px with 30px photo chips (sprite H05), 2px heading rule, chevron / plus; recurs as the 200/40/960 grid in home Counter and Farms sections and in every inner page head |
| Framed horizontal slider of butted photos, dot pager | first screen | Hero stage 960x440: horizontal scroll-snap strip of four butted low-key photos at different heights (H01 owner and forequarter at the block with a regular pointing at the board, H02 counter trays, H03 parcel, H04 cold-room rail), paper rectangles across the seams, photos slide behind a paper panel carrying the h1; 4-dot pager and edge chevrons |
| Gold corner NEW tab on 4-up square cards, caption below | product grids | T2: brass #B09D60 41px "TODAY" tab on 4 square cut cards (225px, caption with price below); same tab carries farm distances, step numbers and years on inner pages |
| Double-line outline wide button with long arrow | grid foot | T3: 290x50 double 1px line button with a long thin arrow under the cut cards, farms, order band and inner pages; also the mailto fallback button |
| Centred section title with small Latin sub-label | every section | Centred Schibsted Grotesk h2 1.75rem with a bark sub-label (COUNTER, DAILY, WRAPPING, FARMS, ORDER) kept in English in all five languages |
| Beige utility bar with a small red note | top of page | #EFEBDD bar with red #ED4831 "Orders close 18:00 for next-morning pickup" |
| Very slow image hover scale (8s) | slider, cards | Same 8s cubic-bezier(.7,0,1,1) hover scale on strip photos and cards; the same calm drift moved to scroll as sp-parallax on the salt-block band |
Palette relationship: white ground, beige utility paper, one muted gold, one tiny red (all kept as measured); bark brown #6B5346 replaces the reference's dark grey only on the order button, active nav, sub-labels and footer.
