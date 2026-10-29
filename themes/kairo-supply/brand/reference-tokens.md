# Reference tokens: https://otoden.co.jp/ (measured 2026-10-29, 1440×900, getComputedStyle + CSS vars). Values only; no assets copied.
## (a) Colour
- Main #FFD900 (var --color-main; second #FFE100) ≈6% of first screen, ≈25% of full page (people section is a full yellow band).
- Accent blues #3575D6 / #2473AF / #88A5BE / #366083 / #244A62 (badges, sky tint); ink #111111; page ground #FFFFFF, soft greys #F4F4F3 / #F2F2F2 / #E5E5E3.
- First screen: saturated (S>0.5) 16.8% total (yellow 6.0%, blue overalls 9.4%); remainder pale grey-white #C9CFD2 / white.
## (b) Type
- Latin display Albert Sans 500 (57px section words, ls .013em); JP Noto Sans JP 500, body 14px/26px ls .04em; nav 14px ls .08em; small labels 12px 600 ls .02em grey #9A9A9A; vertical-writing (tate) 20–24px headings. Giant top word ≈150px cap height (we do NOT reuse).
## (c) Spacing
- Container 1100 (x170–1270); wide cards 506 wide, gap 88. Section padding 306px top / 220px bottom (about); intro stage 2305px tall (sticky scene). Header fixed, nav pill 557×58 at x713 y31.
## (d) Shape
- Nav pill radius 1000px, bg rgba(255,255,255,.5) + blur; cards radius ~60px (white, soft large shadow ≈0 20px 60px rgba(0,0,0,.12)); inner photos radius 15px; stage photo top corners radius ≈200px (var --radius-xl); circular badges 50%. No borders; 1px dotted rules for small labels.
## (e) Imagery — IMAGERY: photo
- Documentary real photography, daylight, slightly desaturated sky blue, real workers in blue overalls, hard hats; no illustration. Hero: standing worker portrait, full-bleed, ~65% width, centred, with a diagonal band of white daylight and a flat yellow cast shadow of the figure on the left. Stage: ~1440×1000 photo, top corners r≈200, lower 40% fades to white fog. Cards: 420×300 (1.4:1) r15 inset in white r60 cards. People tiles: tilted portrait cards on yellow.
## (f) Decoration
- Yellow dot (Ø36) + caps label "INTRODUCTION" as section marker with a tiny dashed corner; dotted vertical line + dots nav (5 dots Ø16, vertical-rl labels) bottom-left; round yellow disc button Ø58 with horizontal lines top-right; dark disc badge Ø58; blurred yellow light cones (gradient + grain) rising from bottom of stage; blue scalloped numeral badges (01, 40 PEOPLE).
## (g) Motion
- Lenis smooth scroll; GSAP 3.0.5 (no ScrollTrigger plugin; own IntersectionObserver `js-trigger`). `js-fadeup`: opacity 0→1, translate3d(0,1rem,0)→0, delay var(--transition-delay) default 200ms, stagger via inline delay; `js-fade` opacity only. Easing easeOut / easeInOutExpo. Stage: photo pinned while 4 text blocks pass (sticky), fog + yellow cone grow as scroll progresses. Hero: shadow/light band slides in on load.
