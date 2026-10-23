# Kotoba Language

A WordPress block theme for an adult language school in Rotterdam (founded 2016) that serves new arrivals and cross-border teams. The school is fictional; people, places and fees are written down in [`brand.md`](brand.md). Type: education. Sample content is in English; zh-TW, ja, fr and de follow in later versions.

## Concept: a school told through a cropped wordmark and three ways in

- **Palette.** Ground `#F2F1EE`, white panel, ink `#0D0C0A`, pill `#15130F`; mulberry brown `#6E5C4C` (桑染) only on arcs, the right-edge rail, labels and fee rules. First screen saturated pixels about 4%.
- **Type.** EB Garamond for headings, wordmark and prices; Source Sans 3 for reading (OFL-1.1, Latin WOFF2 subsets bundled). Noto Serif TC/JP subsets are bundled for the later languages.
- **Photographs.** Fourteen high-key photographs from one shared style string, none repeated on a page; teacher portraits are single-person shots on a plain pale wall.
- **Signature.** An oversized `Kotoba.` wordmark cropped by the fold (mirrored by `Enrol.` at the close); mirrored curved arcs with diagonal dots around a circular photograph and the pull-quotes; a fixed right-edge rail whose label swaps from `ENQUIRE` to `PAGE TOP` while scrolling.
- **Motion.** `sp-scroll` (reveal, stagger, wipe, parallax on the hero photograph and the classroom band); respects `prefers-reduced-motion`, content visible without JavaScript.

## Front page

1. Split opening: photograph left, text right, intake-dates pill and the cropped wordmark below.
2. Three pathways (work, settlement, exams) around a circular photograph.
3. The school in three paragraphs.
4. Levels as a CEFR hairline scale.
5. Classroom band (parallax) and pull-quote.
6. Teachers in circular portraits.
7. Fee table in EUR.
8. Learner stories.
9. Enquiry close with the `Enrol.` wordmark.

## Stage-2 fixes (home)

- Intake pill moved to the gap between the photograph row and the wordmark, so it no longer covers the letters.
- Teacher portraits P2, P3, P5 and P6 regenerated on a plain wall with nobody else in frame.
- Editor validation: every full-width group now carries `alignfull`, and the fee table uses core-table markup only (nth-child styling instead of cell classes). All 26 documents parse without invalid blocks.
- Main menu (Courses, Pathways, Teachers, Fees, Stories, Journal) links to real pages. Inner-page content and the other four languages follow.
