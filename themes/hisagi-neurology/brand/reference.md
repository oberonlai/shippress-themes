# Reference

Reference: https://solve-net.com/tuningelement/5minutereliefpatch/ (S5-Style listed; health / medical-device brand site, photographic).

## Signature candidates
| # | Reference technique | Our version (design-spec.md §1) |
|---|---|---|
| T1 | One huge stadium-shaped window (radius 10000px, 1312x785, soft glow) holding the hero subject on a pale wash, crossed at its lower third by a row of vertical gradient capsules of varied heights and offsets | Home `window`: the same 1312x785 stadium (radius 9999px, glow rgba(58,70,84,.05) 0 0 32px 8px, white to #EAF0F4 wash) with the documentary photo H01 (neurologist and patient at a side-lit desk, reflex hammer by the blotter) in its left half and the h1 "Listen first. / Scan later." on the wash at right; 16 capsules (64px, 170-235px, aqua/mint/mist/pale-lemon to white) cross the lower third past both edges as nerve-signal amplitudes, settling in on load. Carried as a capsule band under section titles (home principles), a half-height row on every inner page head (mini stadium, 1312x440) and the footer edge. |
| T2 | Pinned pastel disc with the subject and hairline lead lines to small labels; text column beside it with dot + uppercase "FEATURE 01" label; ghost giant Latin word drifting behind | Home `symptoms`: a 512px photo disc (S01, spiral-drawing tremor test, #E3EBF1 ring), CSS-sticky while three "SYMPTOM 01-03" blocks pass in a 400px column; three elbowed 1px #5E8C9A callouts ("Tremor at rest", "Line steadiness", "Pen pressure"); ghost "Listen · Examine · Explain" (Manrope 200, 12vw, 6%) drifts behind via sp-marquee 60s. Also on About (H02), Symptoms (S01), Examination (E02), Tests (X01), Cases (C01/S03/S04). |
| T3 | Floating bottom-right white card with thumbnail and one CTA, plus white label strips with wide tracking | Fixed 260x80 white "Book a consultation / First visit · 60 min · €180" card with the B01 reception thumbnail, bottom-right 24px, at >=1024px on every page except Book; every section label on a white strip (Manrope 600 .875rem caps, .4em), home lead h2 lines on white strips (radius 8, box-decoration-break clone). |

## Palette (ours: indigo blue-iron #3A4654)
| Role | Hex | Share |
|---|---|---|
| Ground (cool paper, replaces the reference's warm cream) | #F3F5F7 | ~55% |
| Window / cards | #FFFFFF | ~25% |
| Ink (headings) / body text | #3A4654 / #5F6670 | ~8% |
| Secondary mist blue | #8FA3B8 | ~5% |
| Accent capsule tints (aqua / mint / pale lemon / mist, final in design-spec §5) | #9EDFE8 / #BFE8D6 / #F1EDB5 / #A9BFD3 | ~6% (first-screen saturated share target <=8%, cap 15%) |
| Point accent (single small use) | #5E8C9A | <1% |

## Scroll effects observed
GSAP ScrollTrigger scrub with pin on the feature disc (3-6 viewport heights), reveal tween 0.3-0.4s, Lenis smooth scroll. Our mapping uses only sp-* classes: sp-reveal--up (+sp-stagger), sp-marquee (ghost word), sp-parallax (hero H01 8%, room band R01 10%, page heads 6%); the pinned disc is CSS sticky (design-spec.md §7).

Screenshots: ref/tuning-first.png, ref/scroll-tuning-*.png.
