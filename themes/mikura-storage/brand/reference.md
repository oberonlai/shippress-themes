# Reference: Quraz
Reference: https://www.quraz.com/ (a Japanese trunk-room / self-storage operator; the signature on the first screen is a staffed building, a concierge desk, a key-card tap and a corridor of boxes, with a three-fact bar).
Imagery: photo. Tokens: `brand/reference-tokens.md`. Screens: `brand/ref/`.

## Signature candidates taken from it
| # | Reference signature | Where seen | Our adaptation | Our product |
|---|---|---|---|---|
| 1 | Numbered tile cards: photo on top, pale panel below, 44 px solid numeral tile beside a two-line title | `ref/quraz-s2.png` | "Five things a visit shows" cards | Home block 2 cards 1-5 (P8-P12), then Sizes, Visit, About, News (spec section 2) |
| 2 | Warm panel with a grid of solid round icon discs and small captions, title with a 2 px underline | `ref/quraz-s2.png` | "What every unit includes" disc panel | Home block 2 sixth cell with six 84 px orange discs, then Sizes, Visit, About, Contact |
| 3 | Floating dock card with two stacked buttons (phone, book a visit) that slides in after the first screen | `ref/scroll-quraz-dock-before.png`, `-after.png`, `quraz-s3.png` | Dock on all pages | White radius-4 card, phone and "Book a visit", scroll-driven CSS, all pages except Thanks; bottom bar on phones |
| KV | Drifting 3-up square photo strip + centred three-fact bar straddling its bottom | `ref/quraz-first.png` | Hero lower half | Six touching 360 px squares (P2-P7), drift 54 px/s, pause button, blue 590 x 78 bar straddling the lower edge, ring tag in place of the seals |

## Palette source
Source: https://www.quraz.com/ (`brand/reference-tokens.md` section a). The theme uses the reference's own values and proportions: main `#0066BB`, tint `#E5F0F8`, card tint `#E5EEF8`, warm panel `#FDEFE3`, accent `#E86F00`, text `#212529`, ground `#FFFFFF`. The plan row's plum `#6E6168` and the plum mapping drafted during research are not used: `rules.palette_from_reference` overrides the row, and the colours suit the industry.

First-screen saturated share: reference 27.7%; limit min(30, 27.7) = 27.7%; target at or under 20%. Measured theme value to be added at the gate step.
