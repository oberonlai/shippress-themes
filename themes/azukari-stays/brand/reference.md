# Reference notes (draft, stage 1 research) — Azukari Stays

Primary reference: https://tokitoki-patina.jp/ (S5-Style, hotel / inn). A whole renovated 190-year-old house let to one party; quiet dark opening screen, a pale loose-field page of unframed photographs, a five-stage day stepper in the header, a line floor plan with tabs, and a three-photo strip with a vertical white label tab.
Secondary reference: https://loof-inn.com/ (S5-Style, hotel / inn). Farmhouse inns; a night photograph with a thin light headline lying over it at the left and a pale grey info bar directly under the photo.

Imagery: photo (documentary, available light). Measured tokens: `reference-tokens.md`. Screens: `ref/`.

## What we borrow (concept, structure, relations; no assets, copy or logos)
1. Opening from a dark interior into a lit room (primary hero) -> a dark ink panel with a diagonal edge opening into a lit farmhouse bedroom.
2. Day stepper of five dots and a 1 px line in the header (primary) -> a five-stage owner flow stepper: Listing, Turnover, Guests, Fees, Payout.
3. Line floor plan with underlined tab text and one accent dot (primary) -> our own drawn plan of a farmhouse with room tabs.
4. Three-photo strip, neighbours cut by the viewport edge, vertical white label tab, long thin arrows (primary).
5. Thin light headline lying across the photo at the left + pale info bar docked under the photo (secondary).

## Colour relations
Pale page ground with one deep blue-black block (#1C262E in the reference) and a tiny warm accent. Ours: cooler pale ground, ink-blue block, clay accent #9F563A only as the active dot, links and the one CTA.

## Finished-theme mapping (planned in design-spec.md; verify at stage 2)
| Reference technique | Where in our theme | Pages |
|---|---|---|
| Dark room opening onto a lit garden (tokitoki hero) + slow settle 2.4s cubic-bezier(.65,0,.35,1) | Home H1: ink-blue panel #1C262E with a diagonal edge onto one lit farmhouse bedroom photo (P01); load settle 1.04 to 1 plus sp-parallax 8% | Home; every inner page opens with the same diagonal hero (shorter, 440px) |
| Five-dot day stepper in the header (T1) | The single top menu: Listing, Turnover, Guests, Fees, Payout; dots 10px, 1px track, 105px apart; clay on passed/active | Every page (page stage lit: Homes = Listing, What we handle = Turnover, Owner stories = Guests, Fees & payouts = Payout) |
| Line floor plan with underlined tabs and one accent dot (T2) | Home H4 "Walk through the house with us": our own SVG farmhouse plan, tabs Entry / Kitchen / Bedrooms / Bathroom / Yard, one 14px clay dot | Home, What we handle, Fees & payouts, Owner stories, Consultation, About |
| Three-photo strip with cut neighbours, white vertical tab 85 x 368, thin chevrons (T3) | Home H5 "Homes we run": six 576 x 384 photos in a CSS scroll-snap row | Home, Homes we run, Owner stories, About, Journal |
| Thin light headline lying across the photo at the left (loof) | Home h1 Outfit 200 4.5rem, line 2 crossing the diagonal onto the photo | Home |
| Pale grey info bar under the photo with one button (loof) | 108px #E3E6E5 bar: 41 homes, 6 regions, 18% of nightly revenue, payout on the 5th + clay "Book an owner consultation" | Home; 72px variant on Fees & payouts and Consultation |
| Loose flush field: photos flush to the viewport edge, 400-420px text columns, small photo overlapping a corner | Home H2 and the five stage chapters (H3) | Home, What we handle, About |
| 180px left rail rule + giant thin section word with 140px hairline (loof) | Chapter numbers 01-05, "Fees", "Questions" | Home, Fees & payouts, About |
| 4:5 cards 290 x 437 with vertical captions beside (loof) | Home H8 owner stories | Home, Owner stories |
| Photo rows looping 900s linear (tokitoki) | sp-marquee region names row, 90s linear | Home, Homes we run |
| Dark closing block #1C262E | Home H10 "Book an owner consultation" with the contact form slot | Home (Consultation page uses the pale panel) |
