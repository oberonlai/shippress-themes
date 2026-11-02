# Noboru Lifts

A landing-page block theme for an office lift inspection contractor. Reference: a Japanese renewal landing page (see brand/reference.md). Stage one covers the home page in English.

## Techniques
1. **Open paper first screen** (front-hero): hairline frame, boxed header that shrinks after the hero (CSS scroll-driven, no script), a photo row drifting left, a headline cut by the fold, a notice card with a sideways tab.
2. **Ink strip headings** (`.nl-h2` with one `.nl-strip` per line).
3. **Sticky visit cards** (front-visit): 1200x528 split cards pinned at the top, each slides over the previous one.

## Patterns
front-hero, front-intro, front-visit, front-buildings, front-quiet (parallax), front-sheet, front-fees, front-crew, front-stories, front-book.

## Scroll effects
`assets/sp-scroll.css` and `assets/sp-scroll.js` (shared ShipPress component): reveal, stagger, parallax, marquee.
