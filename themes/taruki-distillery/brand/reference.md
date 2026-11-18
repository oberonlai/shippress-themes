# Reference research (stage 1 draft; "Our version" column filled at build)

Reference: https://niseko-distillery.com/ja/ (S5-Style category: food and drink / spirits; craft gin and whisky distillery with tours, product and shop). Screenshots: brand/ref/niseko-first.png, scroll-niseko-900/1800/2700/3600/4800.png. Tokens: reference-tokens.md.
Secondary: none. (kinobigin.com and kyotodistillery.jp sit behind a bot challenge and could not be captured; no further S5-Style distillery site was reachable.)

## Signature candidates
| # | Technique (shape, composition, position) | Our version |
|---|---|---|
| T1 | Stacked tinted bands over the hero: a burnt-orange notice strip, a lighter caramel strip, then the photo, then a flat charcoal nav row with a thick grey underline on the current item | |
| T2 | Wide inset photo 87% of the viewport on a charcoal ground, a two-line light statement above it, six dot pager under it | |
| T3 | Product/story block where a frosted pale photograph fades in from the right over white, bottle left, long-line-height text right, orange caps "VIEW MORE" link | |
| T4 | Full-bleed photo bands divided by a 20px charcoal rule | |

## Scroll effects
| Effect | Trigger | Detail |
|---|---|---|
| fadeIn_up on headings, paragraphs, links | AOS 2.3.1 (IntersectionObserver), once | fade plus about 20px rise, about 0.8s ease |
| Cross-fade slider | flexslider (jQuery), timed | 6 slides, dots |
| Back-to-top fixed button | scroll listener, shows after 100px | fade in/out |
