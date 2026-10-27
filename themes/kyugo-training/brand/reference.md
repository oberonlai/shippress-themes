# Reference (draft; "our counterpart" column filled in stage 2)
- Source: S5-Style entry https://www.s5-style.com/11519/ → https://gakuen.toyota-shokki.co.jp/ (company technical training school; category close to workplace training). Not used by any earlier theme (checked against all themes/*/brand/reference.md).
- Tokens: `reference-tokens.md`. Screenshots: `ref/ref-first.png`, `ref/ref-full.png`, `ref/scroll-{school,data,about}-{before,after}.png` (the home has no scroll-reveal; before/after only show section positions).
## Signature candidates
| # | Reference technique | Shape / position | Our counterpart |
|---|---|---|---|
| A | Two 120px white side rails framing a 1200px photo stage; left rail has vertical-written org name, logo mark, vertical copyright; right rail has hamburger lines, vertical "access", a main-colour tile | full-height strips left/right | |
| B | Hero 4:3 photo with a corner colour wash (transparent→main) carrying a 3-line huge white tagline lower right | bottom-right 55%×60% | |
| C | Stacked-paper card slider: square portrait photo bleeding top-left of a white card, text panel overlapping, two cards peeking behind | About block | |
| D | Stat band on full-bleed colour with hairlines and giant numerals + small units | Data block | |
## Colour roles
Main `#005EB8` (our `#5A6148`), gradient partner `#4299F0` (lighter olive), base `#FFFFFF`/`#F7F8F8`, text `#000`, footer `#3E3E3E`; no accent. See tokens (a).
## Scroll / motion
Hero fade slideshow 900ms/4000ms; cards swiper 300ms; hover 0.3s easeOutQuart; IO fade-in class `.js-fadeIn` 2s translate 20px (not on home).
