# Reference — Nohara Holiday Park ("Our version" filled at design)
Primary: https://www.hoshinoresorts.com/en/ (Hoshino Resorts). Style source: S5-Style listing for travel-stays; domain not used by any earlier theme.
IMAGERY: photo (real documentary photography; ours adds a film-grain finish).
Screenshots: `ref/hoshino-first.png`, `ref/scroll-hoshino-900.png` (awards ledger), `ref/scroll-hoshino-2700.png` (brands card over photo + logo row), `ref/scroll-hoshino-4800.png` (news cards), `ref/scroll-hoshino-6000.png`. Tokens: `reference-tokens.md`.

## What the first screen shows
A full-bleed daylight photograph of a place with water, trees and people on the grounds; wordmark and one short line centred over it; fixed white header (wordmark left, three nav words, language, one dark booking pill with a round "best rate" disc, round menu button); slides advance sideways with a 01/03 counter and a thin vertical white line as scroll cue.

## Signature technique candidates (see stage-a.md for the chosen set)
1. Year ledger: three equal columns separated by 1px vertical hairlines; centred serif year, 32x2 dash, serif title; last column faded.
2. Caption-panel cards: wide photo over a pale grey panel with a square badge, a 1px vertical rule, small date and a title.
3. Booking pill: long dark pill with a white round two-line "best rate" disc at its end, next to a round menu button.
4. Hero chapter dash + counter (01/03) and a thin vertical hairline cue.

## Our version (filled at design; details in `design-spec.md`)
| Reference element | Our version |
|---|---|
| Full-bleed daylight photo of the grounds, people small in it (hero) | Film-grain photo H1: head warden walking a guest and child past a touring caravan on a gravel pitch; left 62% of the first screen, bleeding left; `sp-parallax` 8% |
| Centred wordmark + "SINCE 1914" | Serif H1 (Newsreader 4.5rem) + "Since 2004 · Wenlow Vale" in the right column beside the photo |
| 1px white vertical cue line + 01/03 counter | 1px white 120px line + "01 / 03 — Pitches · Lodges · Out of season" at the photo foot (desktop; in flow on mobile) |
| Dark "Check Availability" pill with white "BEST RATE" disc (T3) | Olive `#5F6848` pill 300x50 r25 "Book a pitch" with white 40px "BOOK / DIRECT" disc; the single booking action in header, hero, home blocks 5/8/10 and every inner page |
| Fixed white 76px header, round menu button | White sticky 80px split header (one menu left, wordmark centre, pill right); round 44px menu button on mobile |
| Awards ledger: band 230px, straddling title, 3 hairline columns, serif year, 32x2 dash, third faded (T1) | "Three ways to stay": `#E7E9E4` band, straddling Newsreader title, columns 52 / 14 / Nov-Mar, 1px `#1F1F1F` hairlines, third at 55%; continued on Stays, Pitches, Lodges, Prices, Wardens |
| News cards: photo flush on `#F4F4F4` panel, 48px badge, 1px vertical rule, date + title (T2) | "Stays this season" and journal cards: photo 418x255 flush on `#F2F3EF` panel, 48px olive square letter badge, 1px rule 120px, small line + serif title; continued on Stays, Out of season, Stories, Journal, archives |
| "Our Brands": full-bleed photo with an inset white card at the right | Home block 6 "The grounds": G1 full-bleed band 1440x560 (`sp-parallax` 10%) with a static white 720x300 card at x 628-1348; About page band |
| `.ons_u` drop-in, ledger stagger 250ms, card photo 1.1 to 1 | `sp-reveal--down` 1s cubic-bezier(.19,1,.22,1) on H2s; ledger delays .75 / 1 / 1.25s; `sp-reveal--zoom` on cards |
| Monochrome page, colour only in photos | White / `#E7E9E4` / `#F2F3EF` / ink `#1F1F1F`; olive `#5F6848` accent at most 6%; first-screen saturated share at most 8% |
