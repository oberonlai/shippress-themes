# Kanjo College: reference notes (binding mapping in design-spec.md)
Reference: https://www.mejiro.ac.jp/univ/mejinavi2026/
Secondary: https://www.mito.ac.jp/70th-anniversary/
Screenshots in `ref/` (mejiro-first.png, scroll-mejiro-*.png, mito-first.png, scroll-mito-*.png). Tokens in `reference-tokens.md`.

## Structure observed
Mejiro: hero landscape wordmark -> MESSAGES (4-up portrait cards on green) -> DATA (round disc carousel on cream) -> LOOKBOOK -> ADMISSIONS -> MOVIE -> short movie band -> more information -> official account. A fixed bottom route bar tracks progress through these sections.
Mito: framed rounded window hero -> About (map with five labelled nodes) -> History -> Infographics band -> People -> Vision -> navy Join Us footer.

## Signature candidates
1. Fixed bottom route bar: thin track, five nodes, marker riding the fill, bubble with the current section name, goal flag (mejiro).
2. Tall portrait cards on a line-art backdrop with a cloud-pill label overlapping the bottom, dotted vertical dividers between (mejiro).
3. Rounded window card on pale ground with vertical caption, "01" index, outlined square stickers (mito).

## Our counterpart
| Reference element | Kanjo College (design-spec.md) |
|---|---|
| Mito framed rounded window r48, vertical caption, "01", outlined stickers | T1: home hero window 560x700 r48 with P01, vertical caption "Accountancy college · Halden", index pill, 3 outline stickers 36px r8; smaller window head on every inner page |
| Mejiro portrait cards 0.74:1 r16 outlined, cloud pill r40 overlapping, dotted dividers, line-art panel | T2: home "Four papers" 4 cards (P03-P06) on #DDE4E7 band with ledger line-art; Papers, Lecturers, Stories, About |
| Mejiro fixed bottom route bar (840px track, 5 nodes, marker, bubble, flag) | T3: site-wide route bar Enrol · Weeks 1-4 · Mock paper · Exam week · Results, slate fill, pencil marker, CSS scroll() timeline |
| Mejiro line-art landscape + winding path to a signpost, hiker with map | KV: ledger rules + red margin line bending into a path to a 3-arm signpost (Papers / Pace / Places); lecturer ruling a ledger line, two students comparing an exercise (P01) |
| Mejiro brown subtitle pill + headings | ink chip r40 + Schibsted Grotesk 700 H2 |
| Mejiro reveals y100, circ.out; stagger y10-20 | sp-reveal--up 24px 0.8s; sp-stagger 16px; sp-count on pacing figures |
| Mito Lenis drift of hero window | sp-parallax 8% hero window, 10% evening-room band (P08), 6% mobile |
| Colours cream/green/red-orange (mejiro), #EFF6F8/#E4F1F4/navy (mito) | #EEF2F3 ground 60%, #DDE4E7 band 15%, slate #5C6A72 15%, ink #1F2A30 7%, ledger red #B4533C <=3% |
