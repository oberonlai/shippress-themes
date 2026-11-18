# Reference
Primary: https://tsuzuku-ni-tsuzuke.jp/ (S5-Style entry, a returnable-bottle drinks campaign with a short-story booklet; food and drink category). No secondary.
Why: three equal columns as the whole first screen, quiet cream/brown palette, documentary photography, a locations list page (/shops) with ruled rows and map links, which matches this row's locations-network structure.

## Signature techniques (observed → ours; details in design-spec.md §1)
| # | Technique | Observed | Our counterpart |
|---|---|---|---|
| T1 | Three-equal-column stage: photo / paper column with ornament frame / contents column | ref/tsuzuku-first.png | S1 three-panel cover, edge to edge, reordered text-left-photo-right: paper 43% with a pleat-rim double frame and 8 pleat-fan ornaments (wordmark, H1 "Folded in front of you.", lede, round steamer photo P02 in the drawing's slot, pill "Order ahead") / clay index panel 28.5% `#D4BF96` / full-height documentary photo P01 (cook pleating the 18th fold, steamers lifting behind) with a cream caption at its foot. Repeated as slim 420px three-panel heads on every inner page with a different photo each, and as the home §2 fold spread (sticky photo / rows / fact panel). |
| T2 | One centred sentence per row between dashed 1px rules | ref/scroll-tz-about-after.png | S2 `kd-rows`: 450px measure, 42px rows, 1px dashed `#82642A`, stanzas of 3; faint "KAWA" ghost wordmark; `kd-ticket` box with pill label on its top edge. Home §2 fold story, §4 reheating, §5 order-ahead steps, §9 steam letter; inner: menu dish notes, frozen reheating, branch pages, about (12 rows), order ahead. |
| T3 | Vertical contents index with dotted leaders and a ▾ marker, plus a rattling scalloped badge | ref/tsuzuku-first.png, ref/scroll-tz-shops-after.png | S3 `kd-index`: 6 horizontal rows (3 branches + hours, frozen packs, order ahead, menu) with numbers, 2px dotted leaders and right values, ▾ on Harbour Street, hover inversion; scalloped 104px brown badge "Frozen packs · Fridays · restocked" at −12° on the index/photo seam, rattling every 5s; boxed "Today" label + 18s ticker at the panel foot; brown tab labels on a 2px rule as section openers (ref /shops group tab). Repeated in every inner page head, the branch/menu/frozen lists and the footer. |

## Scroll effects observed → ours
| Reference | Ours |
|---|---|
| GSAP text fade-in translateY 20px, ≈.8s, ≈.1s stagger | `sp-reveal--up` + `sp-stagger`, 20px, .8s cubic-bezier(.22,1,.36,1) (not on the stage, tables, prices or forms) |
| News ticker translateX 0 → −50%, 18s linear | `sp-marquee` at 18s on the index panel foot |
| Photo column holds still while the paper scrolls (Lenis + fixed column) | `sp-parallax`: P01 photo panel 8% (mobile 5%), P10 glass band 10% (6%), inner heads 6% (4%) |
| Frame border draws in on load; badge rattle 5s | CSS only: `kd-draw` 1s ease on the frame lines, `kd-rattle` 5s linear; off for reduced motion / sp-static / editor |
Library in the reference: Lenis + GSAP ScrollTrigger; we use sp-scroll only.

## Colour (source → ours)
Paper #F6F1E7 → #F6F1E7 · brown #8E6D2E → ink #82642A (−3% L, AA) · flat brown panel #8E6D2E → clay #D4BF96 (same hue; the brown panel alone would exceed the 15% first-screen saturation cap) · cream on brown #F6F1E8 kept for badge, tabs, labels, hover.
