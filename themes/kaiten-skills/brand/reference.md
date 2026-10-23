# Kaiten Skills - reference notes (DRAFT, stage 1)
Source gallery: https://www.s5-style.com/ (category: education). Neither site was used by earlier themes (grep checked).
| Site | URL | Gallery page | Use |
|---|---|---|---|
| Yanokuchi kindergarten (primary) | https://yanokuchi.ed.jp/ | s5-style.com/12141 | structure, hand-cut photo frame, section rhythm, scroll set |
| ECC-iCAP (secondary) | https://www.ecc.kyoto-unicap.co.jp/ | s5-style.com/12143 | dark ink ground, big numerals, scrub transition, nav bar |
(daiichisemi.net, gallery 12132, closed the connection from this host; not used.)
Screenshots: brand/ref/yk-first.png, ec-first.png (ec first paint is a dark loader/quote screen), scroll-yk-{1,2,3}-{before,after}.png, scroll-ec-{1,2,3}-{before,after}.png.
Tokens: reference-tokens.md. Signature candidates, colours, scroll table: cc-runs/th-kaiten-skills/stage-a.md.
## Mapping table (成品對應; classes per design-spec.md, "Done" ticked in stage 2)
| Reference move | Ours (class / file) | Done |
|---|---|---|
| Hero photo in hand-cut rounded frame with logo blob biting the corner (yanokuchi) | T1: `.ks-cut` SVG-mask frame (inset 36, top 92, r36) around P01 + `.ks-blob` #8A4B3A 394x103 in header part; pattern `front-hero`; inner pages: Courses, Single course, Lesson player, How it works, Tutors, Stories, Contact heads | |
| Leaf-shaped CTA on the photo corner (yanokuchi) | T2: `.ks-leaf` 132x120 #E3C6B6, radius 60/6/60/24, dotted label, fixed bottom-right desktop, in-flow on mobile; Single course "Enrol · EUR129", Lesson "Next lesson" | |
| Alternating tone bands (yanokuchi) + big numerals on dark ground (ecc) | T3: `.ks-band` #2A2525 with 10px wave edges, horizontal 5-step timeline, `.ks-num` 7rem; slanted stone panel holding the price table; pattern `front-steps` + `front-prices`; How it works, Pricing, Single course curriculum, My courses, Tutors | |
| Staggered horizontal photo strip (yanokuchi) | `front-courses` strip: 449px cards, gap 47, even offset 38px, radius 16, bleeding right | |
| Zoom/rotate-in images on scroll (yanokuchi) | `sp-reveal--zoom` (.9s, cubic-bezier(.34,1.4,.64,1)) on P02 and story figures | |
| Char-split title rise (yanokuchi) | `sp-reveal--up` on label+h2 (.6s) | |
| Stagger 0.15 (ecc) | `sp-stagger` on timeline steps and stories | |
| Hero slow zoom (yanokuchi) / scrub mv (ecc) | `sp-parallax` hero P01 `--sp-par` 8% (5% mobile) and interlude P10 10% (6% mobile) | |
