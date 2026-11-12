# Reference tokens — measured on the primary reference (Japanese industrial-waste company site, 1440×900, 390×844)
Source: https://www.daiseki.co.jp/ (home, /business/, /business/recycle/waste_oil.html). Screens in `ref/`. Only values and descriptions; no assets, copy or logos reused.

## (a) Colour (home first screen + service pages)
| Role | Hex | Share |
|---|---|---|
| Ground | #FFFFFF (page), #F5F5F5 rows | ~62% |
| Sky/wash (illustration + hero fade) | pale cyan-blue ~#BFE8F2 → white | ~18% (home hero), ~4% on service pages |
| Primary slate | #314A57 (nav current tab, breadcrumb bar, rules, arrows) | ~8% |
| Accent teal | #22B0A4 (chevrons, bullets, pictogram drops), #5EC5BD light | ~3% |
| Text | #333333 | — |
| Alert red | #DB0A0A (outlined helpline box only) | <1% |
| Green outline | #00B050 (outlined permit box only), pale green band #EFFAE1 | <2% |
Measured saturated-pixel share (S>0.5, L 0.15–0.85) of the first 770 px: home 26.8% (full watercolour hero), service page 4.9%. Ours: hero kept pale, target ≤12%.

## (b) Type
Noto Sans JP + Source Sans Pro (Latin). Body 16px/28.8 (1.8) w400 #333. h1 (hero catch) ~4.5–5rem mixed weights; page h1 32px w300; section h2 28px w600, padding-bottom 25px, margin-bottom 50px with 1px slate rule; lead h2 24px w300 lh 1.8; h3 24px w500 ls 1.2px with a 24×3 teal dash at left (padding-left 40px); card title 18px w500. Letter-spacing normal except h3. No uppercase.

## (c) Spacing
Container 1200px (x120–1320 at 1440). Hero 640px tall under a 106px two-tier header (utility row 55px + nav row 51px; shrinks to ~56px after 200px scroll, utility row hidden). Section padding ≈ 100px top/bottom. 3-up cards 360px wide, gap 60px. Buttons 266×61.

## (d) Radius, borders, shadow
Radius 0 everywhere except round pictogram badges (150px circle) and pale 6px tiles in the flow diagram. Buttons: solid slate fill, white 15px text, chevron; link boxes 1px/3px #ccc border with teal ">" at right. Outline utility boxes 1px green / red, 4px radius. Shadows: none (cards 1px #e2e2e2). Gradient hairline 3px under page titles (yellow-green → teal).

## (e) Imagery
**IMAGERY = illustration.** Soft watercolour/gouache on textured paper: wet-edge washes, pale cyan sky, muted greens, small saturated accents (a red top, a yellow hat), flat simplified buildings with window dots, faint pencil texture, no outlines or thin grey ones; people small, faceless/simple, seen from behind or side. Process diagrams are separate flat pictograms: slate (#314A57) and grey (#999) bodies with one teal accent, 2px slate arrows. Ratios: hero panorama ~2.25:1 full bleed (640px), 3-up link cards 360×248 (1.45:1), video frame 960×540, pale wash band with an illustration bleeding off the right edge and dissolving to white leftwards. No clip-paths; the only mask is the white-fade gradient on the left of band illustrations.

## (f) Decoration
Gradient 3px hairline under page titles; teal 24×3 dash before h3; slate 1px rule under h2; circle-arrow chevrons in teal (Ø24) at card corners; dotted teal connector lines in the flow diagram; round Ø150 badges with white icon on blue/terracotta; pale-green translucent arrows (▶) between flow steps; outline tag chips (1px slate, 11px) in dated news rows.

## (g) Motion
Hero: Vegas Ken Burns slider — transition `blur` 3000ms, delay 10000ms, animation `kenburns` 20000ms (slow zoom ≈ 1→1.15). Headline lines swap with opacity .8s every 10188ms. Scroll: jQuery scroll listener adds `fadeInDown` (CSS keyframe, duration 3s, fill both) when element is 200px inside the viewport (+100 on mobile); header gets `hdScroll` after 200px (logo height 40px, utility row hidden); smooth anchor scroll 500ms swing; back-to-top fades in after 300px; hover transitions .2–.3s. No parallax, no sticky stacks, no marquee.
