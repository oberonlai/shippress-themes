# Reference (implementation column filled from design-spec.md)
Reference: https://www.ms-ins.com/business/ (Mitsui Sumitomo Insurance, corporate customers). Photograph-first business page, one path to an enquiry.
Imagery: photo (documentary, desaturated, shallow depth). Palette in `reference-tokens.md`.
Secondary: none (the structure and look come from one site; a second site was screened and rejected as illustrated / wordmark-led).
| Signature | Reference element | Our version | Implementation (as built) |
|---|---|---|---|
| T1 | Page-head band with two skewed wedges off the right edge, then a full-bleed documentary photo with a statement on its pale-faded left | Slate wedge head + photo-left / text-right first screen | `hb-hero`: 176 px hatched paper band, H1 4.5rem, wedges A 420×112 / B 300×176 slate gradients bleeding right; full-bleed H1 photo (62%) with right haze, statement + ochre CTA on it, `sp-parallax` 8%; inner pages: 140 px band + wedges + 4:1 photo band (sp-parallax 6%) |
| T2 | Three flush step columns 01/02/03, tone stepping | "How a review runs", slate tones stepping light to dark | `hb-steps`: 3 flush columns `#8D9AA8`/`#5E6C7B`/`#243241`, min-height 420, 5rem numerals, chevron joins, `sp-stagger` + `sp-reveal--up`; compact on /fees/, /contact/, variant on /claims/ |
| T3 | Two-tab index (by type / by trade) with notched-corner cells | "Which covers a review includes" two-tab index, notched cells | `hb-index`: radio tabs By cover / By trade, active slate with down-notch, 1 px slate frame, 3×2 cells with 14 px `#8D9AA8` corner notch; expanded on /covers/, /trades/; cells on /cases/, /news/ |
Screens: `ref/ms-first.png`, `ref/ms-biz-first.png`, `ref/ms-biz-full.png`, `ref/ms-home-full.png`.
