# reference — Kama Cookware (finished layout filled from design-spec.md, stage 1)
Main reference: https://yokanka.com/ (S5-Style entry; product / confectionery brand, not used by earlier themes). Details in `reference-tokens.md`. Screenshots in `ref/`.
## Signature technique candidates
| # | Technique (shape / composition / position) | Finished layout |
|---|---|---|
| 1 | First screen: pale grey ground, five wide product slabs (460×219) in a diagonal staircase (+440px x, −130px y per step) drifting leftwards, small centred title + wordmark above, small info card lower right, vertical caption badge at left edge | T1 + KV: home hero five 2.1:1 cookware slabs (#1–#5) in rising diagonal with left drift on `#E8ECEB`, wordmark+H1 left, vertical rail (sp-marquee), bottom info bar; Shop header and About reuse slab/diagonal |
| 2 | About: left 50% sticky full-height portrait; the picture swaps as text scenes scroll, each new picture opens through an expanding radial arch mask; right column holds short quiet paragraphs | T2: home "Which pan for which hob" sticky 50% photo (#6–#9) with sp-reveal--mask swap; Which Pan and Seasoning & Care pages |
| 3 | Headline whose characters are revealed one by one through overflow masks, synced to scroll | Home question statement: word spans sp-stagger + sp-reveal--up; hero H1 CSS-only fade/de-blur intro |
| 4 | Black event-gallery band between pale sections; two rows of 3:4 frames scale 1.3→1 as it enters | T3: home Service counter dark band `#141B1B`, 6 3:4 frames sp-reveal--zoom; Repair & Service and Seasoning & Care |
| 5 | Giant two-tone wordmark marquee with rounded product pills between words, rising in at page bottom | Footer Fraunces wordmark sp-marquee with rounded pills, all pages |
## Palette relationship
Ground `#ECECEA` ≈75–80%, ink `#000` ≈3%, one black band ≈9%, colour only in photos (≈9.6% saturated in first screen).
## Scroll effects
See stage-a.md table (GSAP ScrollTrigger on reference; we use sp-scroll only).
