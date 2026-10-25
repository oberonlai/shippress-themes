# Reference (draft) — Kazoe Books App
Source: https://recruit.smarthr.co.jp/ (S5-Style "Good Web Design", listing 12086; business-services/SaaS). Full-width, 1px-border label-box type, halftone gradients.
## Signature candidates
1. Hero H1 set as stepped white label boxes (one box per line, 1px ink border, flush left) over a split first screen: top half saturated gradient field, bottom half pastel gradient.
2. Numbered issue rows: 80px number column + 1px rules + huge bold line-boxed headings + ink "+" toggle.
3. Fixed bottom-right CTA pair (outline + ink fill, 301×80) and 80×80 hamburger box, all radius 0.
4. Halftone dot-dither edge + dot-mask left→right reveal.
Palette: ink #23221F, base #FFF, primary #00C4CC, deep #1A1A9A, sky #8CD2EE, peach #F8B4AC. See reference-tokens.md.
## Screens: ref/smarthr-first.png, smarthr-s0..s3.png, scroll-before/mid/after.png
## Mapping to the finished theme
| Reference technique | In the theme |
|---|---|
| Stepped white label-box H1 (110px, 1px ink border, flush left) | T1: hero "Close the day / in one tap." 6.25rem boxes; all section heads and inner page heads boxed (design-spec §1) |
| Top/bottom halves first view, cyan→deep-blue gradient + 3px dither, peach→sky lower half | T2: #7FA3B5→#2F4B5C dither band (46vh) over #F1CFC6→#CFE0E8 band holding photo K01; halves head on all inner pages |
| Numbered ISSUE rows (80px number column, full-width rules, ink "+" box, 0.8s accordion) | T3: home Features (4) + FAQ (6); Features, Setup, FAQ, Stories, About, Waitlist, Contact pages |
| Fixed bottom-right CTA pair 301×80 + 80×80 menu box | "Join the waitlist" + "Start free" 300×80 fixed; 80×80 menu box; mobile 56px bar |
| Halftone mask sweep L→R 0.8s | sp-reveal--wipe on Lead, card row, Stories band, Pricing head |
| Gradient field drift (dither dissolving) | sp-parallax: hero dither layer 8%, K01 6%, K09 band 10% |
