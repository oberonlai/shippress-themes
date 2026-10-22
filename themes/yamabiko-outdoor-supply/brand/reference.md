# Reference (draft, stage 1 research)

## Source
- https://botanistofficial.com/ (S5-Style listed; lifestyle / nature goods store, not used by any earlier theme). Screenshots: `ref/botanist-first.png`, `ref/scroll-botanist-*.png`.
- Only structure, gestures and colour relationships are borrowed. No copy, photos or logo.

## Signature gesture candidates (shape / composition / position)
1. **Pinned full-bleed photo that insets** — first-screen photo fills the viewport; while scrolling it stays pinned, darkens under a veil and shrinks to about 38px side margins (rounded-free rectangle) before the white section slides over it.
2. **Left-edge vertical section index** — fixed bottom-left list "— TOP / — MISSION / — SPECIAL ..." with a longer active dash; small caps 0.75rem. Maps to a spec-catalogue index (Tents / Packs / Layers / Sleep).
3. **Product floating chip** — bottom-right dark capsule with a tiny product thumb, label and arrow ("PRODUCT →"), always visible.
4. Headline set low-left, widely tracked light weight, over the photo; the product sits at centre with the story object on the right.

## Colour (measured from first screen 1440x900)
| Role | Reference | Share | Our mapping (draft) |
|---|---|---|---|
| Main (photo) | deep forest green #105030 / #107050 | ~35% | NOT adopted (saturation); photo graded low-chroma |
| Base | near black #101010, white #FFFFFF | ~12% / page ground | ground stone off-white, ink |
| Secondary | veil teal #103030 | ~5% | ink veil |
| Accent | white UI line | thin | persimmon-tannin (kakishibu) #8F5E3F small areas only |
- Reference first-screen saturated pixels (S>0.5): ~55%. Our rule: <=15%; use gesture, not the saturation.

## Scroll effect teardown (botanistofficial.com)
| Effect | Trigger | Position | Duration / delay | Easing | Distance | Library |
|---|---|---|---|---|---|---|
| Hero photo pin + inset + veil | GSAP ScrollTrigger (scrub) | hero top → ~2 viewports | scrubbed | linear-scrub | scale to ~38px margins | GSAP + Lenis smooth scroll |
| Section title fade/rise | ScrollTrigger / IntersectionObserver | ~80% viewport | ~0.8–1.2s | cubic-bezier(0.25,1,0.5,1) / (0.33,1,0.68,1) | small Y | GSAP |
| Left index active dash | scroll listener | per section | 0.2s | ease | — | custom |
| Link hover opacity | CSS | — | 0.2s | ease | — | CSS |
Screens: `ref/scroll-botanist-pin-inset-before/after.png`, `ref/scroll-botanist-fade-before/after.png`. Only recorded, not copied.

## Mapping to sp-* (our implementation, to fill in design stage)
- Pin + inset hero photo → sp-reveal--mask / sp-parallax on the photo band (not hero reveal).
- Section titles → sp-reveal--up with sp-stagger.
- Spec numerals → sp-count.

## Product mapping (design-spec.md is binding)
| Reference gesture (botanistofficial.com) | Yamabiko implementation | Where |
|---|---|---|
| Pinned hero photo inset to ~38px margins under dark veil, 3 underlined menu titles | **T1 inset veil band**: static after-state, photo inset 38px both sides, square corners, veil `rgba(22,28,30,.62)`, 3 labelled titles with 1px white underlines (Tents & tarps / Packs / Layers & sleep); `sp-parallax` on photo | Home block 3; header band of Shop, Compare, Rental, Workshop, Field notes, About, Visit, Returns/FAQ/Contact |
| Fixed bottom-left dash index, longer active dash | **T2 dash index**: fixed bottom-left ≥1360px, 12px dashes, active 24px in persimmon-tannin (kakishibu) `#8F5E3F` (static: current page/section family) | Every page (home: CATALOGUE active) |
| Bottom-right capsule product chip (thumb + label + arrow) | **T3 field-pick chip**, inverted dark `#1E2022`, round thumb, "Ridgeline 2 Tent — €389 →"; ≥782px only; hidden on cart/checkout | Every page; product pages say "Compare tents →" |
| Low-left light headline over photo | Hero H1 Bitter 300 low-left "Slept in / before it's sold." over muted full-bleed photo + in-flow info bar | Home first screen |
| Colour: green field ~35% / ink #101010 / veil #103030 / white UI | Green dropped; stone ground `#EEEFEC`, ink `#1E2022`, veil `#161C1E`, white surface, persimmon-tannin (kakishibu) accent ≤3%; first-screen saturation ≤15% | Site-wide |
| Title fade/rise cubic-bezier(0.25,1,0.5,1) ~1s | `sp-stagger` + `sp-reveal--up` | Catalogue tiles, stories, Shop grid, Field notes |
| (no numerals on reference) | `sp-count` on 15 · 1,140 · 30 | Home block 4 only |
