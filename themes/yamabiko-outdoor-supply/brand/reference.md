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
| Accent | white UI line | thin | 柿渋 #8F5E3F small areas only |
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

## Product mapping (filled by build stage)
- (empty)
