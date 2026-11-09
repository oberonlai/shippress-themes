# Reference (draft, stage 1)

- Main: https://redine.jp/shiodome/ — shared food hall; screenshots `ref/redine-first.png`, `ref/scroll-redine-hero-after.png`, `ref/redine-feature.png`, `ref/redine-shopcards.png`, `ref/redine-lower.png`.
- Secondary: https://www.tokyo-dome.co.jp/foodstadium/ — `ref/tdc-first.png`, `ref/scroll-tdc-after.png`, `ref/tdc-shopcards.png`.
- Measured tokens: `reference-tokens.md`. IMAGERY: photo (film-grain, warm, quiet).

## Signature candidates (shapes, not copies)
| # | Candidate | Source | Our rendering |
|---|---|---|---|
| T1 | Kitchen card: wide cover photo, round medallion straddling its bottom edge, dark "Hours" chip row, flanked-rule "Today's plates" label with three small square thumbnails | redine shop cards | Kitchen cards on a warm paper band, medallion = our own drawn monogram disc |
| T2 | Rounded photo window inset on a pale ground under the header, with a "today's hours" strip and an arc-cut band edge below | Tokyo Dome hero + hours strip | Framed window (rounded 14px) containing a horizontal scroll strip of photographs; hours strip + convex arc into next block |
| T3 | Centred Latin caps title (0.2em tracking) + small sub-label + short gold rule, plus gold-highlighted words in the statement lines | redine section lockup | Fraunces caps title lockup, gold highlight on key words |

## Colour roles
Ink #3F342C / text, gold #B8860A accent (muted, tiny areas), white ground, paper band #F6F1E7, stone #E5E2D8, pale cool ground #F1F5F5 for the window band.

## Scroll effects found
See stage-a.md table. Reference has almost no scroll reveals: hero shrink 100svh->97svh, header scrim, jQuery carousel.

## Our counterpart (filled in at the spec stage; binding detail in `design-spec.md`)
| Reference element | Source | Our counterpart | Where |
|---|---|---|---|
| Shop card: cover photo, 80px medallion on its edge, flanked-rule label, 3 square thumbnails, dark Hours chip, full-width gold button | redine | T1 kitchen card (white r14 on paper band #F6F1E7, our own monogram medallion, "Today's plates", 144px thumbs r8, ink Hours chip r4, gold r10 button) | Home block 4; Kitchens (8 cards), Kitchen detail, Prices head |
| Inset rounded photo window on pale ground + carousel | Tokyo Dome | T2 framed window 1000x540 r12 on #F1F5F5 holding a 4-photo horizontal scroll strip (P01-P04), one-time nudge | Home first screen; About / Visit page heads |
| Today's hours strip + vertical hairline + convex arc edge | Tokyo Dome | Hours strip "Today 11:00-21:30" with 1x116px hairline, 3 icon links, 160px convex arc into white | Home block 2; Visit, Lunch Hour, Tables |
| Caps title lockup + sub-label + 40px gold rule, gold-highlighted words | redine | T3 Fraunces caps 36px 0.2em + sub-label + 40px gold rule, gold words in statements | Every section title on every page |
| SCROLL cue (caps + 2x80 line) | redine | Hours chip "12:10 - 8 kitchens open" + 2x80 white line drawing down (in flow on mobile) | Home window bottom-right |
| Hero ease 100svh -> 97svh, 1s, delay 2s | redine | Window clip inset 2% -> 0, 1s ease, delay 0.4s; strip nudge at 2.4s | Home first screen |
| Header scrim after scroll, 0.15s cubic-bezier(.4,0,.2,1) | redine | Split white header, soft shadow after 40px, same timing | All pages |
| Palette ink #3B3225 / gold #B8860A / white / paper #F7F2E6 / stone #E5E2D8 | redine (+ #F1F5F5 Tokyo Dome) | Ink #3F342C / gold #B8860A / #FFFFFF / #F6F1E7 / #E5E2D8 / #F1F5F5 | Site-wide |
| (none on reference) | ours | sp-parallax band P13 (--sp-par 10%, 6% mobile), sp-reveal--up + sp-stagger on kitchen cards, sp-count on figures | Home blocks 3, 4, 6 |
