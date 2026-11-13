# Reference research (draft; "ours" column filled in stage 2)
Main reference: https://www.yokorei.co.jp/ (cold-storage operator; plan-assigned reference, S5-Style category: business / logistics).
Screens: ref/yk-first.png, ref/scroll-yk-900.png, scroll-yk-1800.png, scroll-yk-2700.png, scroll-yk-3600.png, scroll-yk-4500.png.

## Structure (1440 wide)
1. Two-row header 110px (utility links + search / main nav). 2. Full-bleed 690px crossfade hero, catch lockup bottom-left, pager with progress rings + pause bottom-right, white quick-guide card at lower right. 3. Alert band (310px label + rows). 4. Business: gradient red band, giant lowercase Latin title, two white cards (520 text + 680 photo slider). 5. News list. 6. IR: full-bleed photo band, giant word + underlined link + circle arrow. 7. Sustainability same pattern. 8. Recruit band.

## Signature candidates
- A. Crossfade hero with progress-ring pager + boxed pause, catch line bottom-left, slanted English line across its foot.
- B. Gradient band (solid to transparent) holding giant lowercase word and white cards fusing text panel and photo.
- C. Alert band: 310px label cell + hairline rows under the hero.
- D. Photo band with giant lowercase word and underlined link + 60px circle arrow.

## Scroll effects
None triggered by scroll (Splide fade only; no IntersectionObserver). Recorded as "none"; our sp-* choices are in stage-a.md.

## Built as (ours) — mapping filled at spec (design-spec.md §1, §2, §12)
| ref element | our counterpart (built as) | where | spec |
|---|---|---|---|
| Two-row header 110px (utility + main nav), logo left | sticky two-row header 104px: plain utility row (dock hours, phone, language) + wordmark, one anchor `core/navigation`, CTA "Ask about capacity" | all pages | §3 #1 |
| Full-bleed 690px crossfade hero (forklift in chilled hall) | full-bleed low-key dock hero, 3 slides K01 (supervisor probing at the dock seal, driver with pallet) / K02 (forklift aisle) / K03 (frozen-room door), 4000/1000 ms | home §2; Rooms head as 2-slide | T1, KV |
| Thin catch line bottom-left + kicker | kicker + h1 "A numbered room / that holds its cold." Schibsted Grotesk 400 4.5rem white, bottom-left | home §2 | T1 |
| Tilted italic red English line across the catch's foot | "Room 4 · −21 °C · held", Schibsted 700 italic, #BFD3CF, −7° | home §2 + every inner page head | T1 |
| Pager: SVG progress ring + boxed pause | identical geometry (r 14.5, stroke 4, dash 91.11; pause 38×20), CSS clock + tiny click-only JS | hero, card photos, Rooms head | T1 |
| Quick-guide white card in the hero | not used (no card docked on the hero) | — | §2 |
| Alert band: 310px label + hairline rows | "room log" strip: 310 label + 3 rows (time, room, reading, amber tick) | home §3; register / hours / terms strips on Rooms, Booking, Rates, Dock, About, Ask | T3 |
| Rounded red band fading to greige + giant lowercase word "business" | patina band (radius 40 top, solid to 64.3% then ground) + giant white "rooms" | home §5; Rooms, Booking, Rates, Dock, About, Cases, Ask, Room alerts, Journal | T2 |
| White cards: 520 text (icon, title, 60px circle arrow, 3 hairline rows) + 680 crossfade photo | identical 520 + 680 × 440 fused cards, one per temperature band, 2-slide crossfade each | home §5; inner fused cards | T2 |
| News list with giant "news" title | giant lowercase section words on every home section (held, booking, the day, rates, cases); news list itself → Journal archive | home §4–§10 | §3 |
| IR / sustainability photo band: giant word + underlined link + 60px circle arrow | "the dock" band 1440×500, D01, + sp-parallax 10% | home §6; enquiry band on inner pages | T4 |
| Sustainability 4 photo cards with dark gradient + label + arrow | 3 case cards with bottom gradient, "Case 0n", title, arrow | home §10 | §3 |
| Recruit band: red block + photos, circle arrow | enquiry block: patina 470 + photo E01 730, CTA "Ask about capacity", circle arrow | home §11 | §3 |
| Grey footer, 4 columns, hairline heading rows with arrows | #4A5553 footer, 4 columns, hairline heading rows with arrows; paragraph links | all pages | §3 #13 |
| Colours #C51D23 / #F7F6F5 / #FFFFFF / #222 / #DDD | #5A7572 / #F3F5F4 / #FFFFFF / #1E2A29 / #D5DDDB (+ amber #D98A2B ≤2%) | site | §5 |
| Motion: Splide fade, hover .2s / image .4s, no scroll effects | same crossfade and hovers + sp-parallax, sp-reveal--up + sp-stagger, sp-count | site | §7 |
