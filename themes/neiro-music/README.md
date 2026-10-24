# Neiro Music

A WordPress block theme for a private music school in Ghent (founded 2011) for children from five and adult beginners. The school is fictional; people, places and fees are written down in [`brand.md`](brand.md). Type: education. Sample content is in English; zh-TW, ja, fr and de follow in stage 2.

## Concept: a school told as one teaching day

- **Palette.** Ink ground `#0D0B06`, lifted ink `#17140E` for the fee panel and footer, bone `#D9D7D4` for text and hairlines; grape `#705868` only on 4px nav dots, the active-nav underline, the focus ring and the button hover. First screen saturated pixels under 5%. The header is sticky and fades in an ink ground as you scroll (CSS scroll-driven, no script); the hero sits under it.
- **Type.** Crimson Pro for headings and reading, Outfit for labels, rail labels and time numerals (OFL-1.1, Latin WOFF2 bundled).
- **Photographs.** Sixteen low-key photographs from one shared style string, none repeated on the page.
- **Signature.** (1) Two overlapping 2:3 portrait photographs in the hero, the small one rising above the big one's top edge, with the third headline line indented; (2) the teaching day as five stacked sticky rows, each a time numeral, title, text and 324x495 portrait with a hairline that stops at the photo column; (3) a vertical rail label in the left gutter of every section and a 72px-line text link.
- **Motion.** `sp-scroll`: per-block rise (28px, 1.2s), photo wipe, and a parallax Long Room band (10%); reduced motion and no-JS show the final state.

## Front page

1. Overlapping portrait pair and the three-line headline.
2. Philosophy with one portrait set lower.
3. A teaching day: five sticky rows, 15:30 to 20:30.
4. Four instruments in hairline columns.
5. Teachers: text and three portraits.
6. Parallax band: the Long Room, with crosshair ticks.
7. Term fees in euro on a lifted panel.
8. Pupils' stories as rows.
9. Visit.
