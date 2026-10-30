# Reference — Shirushi Customs ("Ours" = 成品對應, filled in by the stage-1 spec; details in design-spec.md)
Main reference: https://takenaka-foodware.jp/ (B2B tableware maker, S5-Style-listed corporate/B2B site). Not on the used list.
Screenshots: brand/ref/scroll-take-*.png (first = first screen; 900/1800 = hero→paper handover; 3000 brand block; 5000 recommend strip; 6100 story; 7600 OEM + contact).

| # | Reference signature | Where | Ours (成品對應) |
|---|---|---|---|
| T1 | Dark full-bleed photo hero pinned for 250vh; statement rides up from below; pale paper sheet takes over | first screen → 900–1800 | Home `front-stage`: W1 dim warehouse bay (cartons on racks, gloved hand + packing list), 150vh Cover with `sp-parallax` 10%, H1 starts at 64vh and rides up over the slower photo, sticky 1px timeline line with DOCUMENTS…RELEASE ticks; cool paper sheet follows. Inner page heads: 62vh dark band + lit tick (all pages). |
| T2 | Fused photo + text cards in a strip with peeking neighbours, bracket tag bottom-right, black pill + disc arrow, progress line + round arrows | recommend 5000 | Home `front-handover`: five stage dossiers (S1–S5 photo 0.78 fused to 344px panel), bracket tag "( 02 / 05 )", VIEW MORE + Ø32 disc, progress line + Ø30 arrows on band #E6EAE9. Also Services, Process, Case files, Notes. |
| T3 | Blurred copy of the photo as the ground, sharp inset window, outline map with ringed pin + coordinates | story 6100 | Home `front-quay`: Q1 quay blurred as ground (`sp-parallax` 8%) + sharp 3:2 r4 inset (`sp-reveal--mask`), fictional outline bay + ringed pin, caption PORT ARDALE / NORTH QUAY / SHED 11 · DOOR 4 / hours. Also Process, Team, About, Contact. |
| T4 | Notice panel: two columns split by a vertical hairline, large numerals | contact 7600 | Home `front-notice`: #E3E9E9 r4 panel, hairline split, phone +1 (555) 014-2300 and counter 08:30–17:00 as large numerals, white "Open a file" pill. Also Services, Prepare, Fees, Contact. |

Colour relation: all-neutral paper/near-black, no saturated accent; ours: paper #F1F3F2 (ref #F4F2ED cooled, not cream), band #E6EAE9, dark #101A1C, ink #1D2426, steel #4C6568 ≤4%, amber #B07A3A ≤1% off the first screen.
Scroll effects: see stage-a.md table (GSAP ScrollTrigger scrub on hero copy, y20 reveals).
