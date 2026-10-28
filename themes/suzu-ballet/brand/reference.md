# Reference (draft — the "our match" column to be filled in stage 2)
Source: S5-Style https://www.s5-style.com/ (education/lesson category, yoga & studio classes). Main: https://anjalirokko.jp/ (S5-Style #10986, yoga studio). Secondary (hero overlay + floating nav bar only): https://pikkasinternational.com/ (S5-Style #10530, international preschool).
Neither URL appeared in other themes' reference.md at 2026-10-28.

| Technique | Reference approach | Our match |
|---|---|---|
| T1 Arch window + overlapping thin caps headline | Hero photo clipped to a tall arch (59% width), headline 130px thin caps running across its shoulders | Home `front-hero`: B1 (teacher correcting a student's arm at the barre, mirror) in a semicircle-top arch 59% wide at x 36–95%, top 205px, bleeding off the fold, `sp-parallax` 8%; H1 "STAND TALL, / AT THE BARRE." Outfit 200 7.5rem crossing both shoulders. Inner page heads: small arch (40%) with caps title crossing its left shoulder on all 9 pages; home trial close uses an arch-topped B15. |
| T2 Split 50/50 sage panel + portrait photo (Lesson) | left sage #BBC6B9 w/ asanoha pattern, giant caps title, right white with 3:4 photo | Home `front-classes`: 835px full-bleed, left #C6B9C1 (same L/S, mauve per row) with own harlequin lattice white 35%, "CLASSES / & FEES" 5.625rem caps, outline pill; right white with B6 388×503 inset 166px, radius 0, `sp-reveal--mask`. Also Classes, Fees & Terms, Teachers & Pianists, Trial, About. |
| T3 Three columns with line icons + hairline dividers | 3 reasons, icons 65px above | Home `front-reasons` (supporting): 3×430px, 1px vertical hairlines, own 65px line icons (barre, piano keys, two circles), `sp-stagger`+`--up`; repeated on About. |
| T4 Full-bleed tinted photo band with oversized caps at bottom, parallax | ~1440×690 greige close-up photo, huge caps headline along its bottom edge, GSAP scrub parallax | Home `front-band`: B11 (arm in port de bras) greige, `sp-parallax` 10% (mobile 6%), "EVERY DAY" Outfit 200 up to 11.5rem touching the bottom edge. Inner: Classes, Timetable, About, Showcase, Contact bands. |

Palette: base #F8F7F5/#EDE6E0, panel #BBC6B9, primary #5A695F/#465B4E, text #303930. Saturated share first screen 0.4%.
Scroll: IntersectionObserver fade-up 20–70px, 1s cubic-bezier(0.165,0.84,0.44,1); GSAP ScrollTrigger scrub parallax; Lenis. Details in reference-tokens.md. Screenshots: ref/.

Secondary pikkasinternational.com our match: one inline photo chip (B10 crop, 96×64, radius 32) inside the home Stories heading; nothing else borrowed.
