# Reference research (stage 1 draft; "Our version" column filled in design-spec)

Reference: https://niseko-distillery.com/ja/ (S5-Style category: food and drink / spirits; craft gin and whisky distillery with tours, product and shop). Screenshots: brand/ref/niseko-first.png, scroll-niseko-900/1800/2700/3600/4800.png. Tokens: reference-tokens.md.
Secondary: none. (kinobigin.com and kyotodistillery.jp sit behind a bot challenge and could not be captured; no further S5-Style distillery site was reachable.)

## Signature candidates
| # | Technique (shape, composition, position) | Our version |
|---|---|---|
| T1 | Stacked tinted bands over the hero: a burnt-orange notice strip, a lighter caramel strip, then the photo, then a flat charcoal nav row with a thick grey underline on the current item | Header on every page: copper 'Next tour' strip #A0522A 48px + caramel 'Today's batch' strip #C88C5A 40px, centred caps nav on #3C3939 with 4px #9A9696 underline (spec S1, KV 1/3) |
| T2 | Wide inset photo 87% of the viewport on a charcoal ground, a two-line light statement above it, six dot pager under it | Home H4 still-room photo at 87% (max 1250px) on charcoal with six dots labelled Botanicals…Bottle; also /process/, /about/, /tours/, single post (spec S2) |
| T3 | Product/story block where a frosted pale photograph fades in from the right over white, bottle left, long-line-height text right, orange caps "VIEW MORE" link | Home H5 'What goes in the bottle': bottle photo left, botanical-tray photo ghosted from the right on #EEF1EE, caps copper link; also /shop/, /botanicals/, /about/, /book/ (spec S3) |
| T4 | Full-bleed photo bands divided by a 20px charcoal rule | 20px #3C3939 rule under every full-bleed band: home H2 parallax band, H7 tour band, /visit/, /tours/ (spec S4) |

## Scroll effects
| Effect | Trigger | Detail |
|---|---|---|
| fadeIn_up on headings, paragraphs, links | AOS 2.3.1 (IntersectionObserver), once | fade plus about 20px rise, about 0.8s ease |
| Cross-fade slider | flexslider (jQuery), timed | 6 slides, dots |
| Back-to-top fixed button | scroll listener, shows after 100px | fade in/out |
