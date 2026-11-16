# Reference tokens — main reference https://silotheatre.co.nz/ (measured 1440x900 with getComputedStyle, 2026-11-16)

(a) Colour (area share over the whole page; the page ground flips between white, black and flat colour floods)
- Ground white `#FFFFFF` ~38%; black `#000000` ~24% (season-announcement section, 1117px tall); pale grey `#EDEDEF` (menu overlay) ~4%.
- Flat colour floods in tall half-width panels: deep green `#002519` with cream text `#FFF4EA`, oxblood `#640014`, red `#D72C24`, yellow `#F0DD17`, orange `#F37520` ~ 25% together. Colour otherwise comes only from the photographs.
- Text: black on white, white on black, mid grey `#999999` for the giant marquee line on black.
- First-screen saturated share (S>0.5, V>0.3, 144x90 sample): **37%** (the orange running-track photo). Our translation keeps the composition but lowers it: low-key photographs plus plum, target first-screen saturated share <= 12% (hard cap 15%).

(b) Type
- Body/UI: Suisse BP Int'l (grotesque) 400, 20px / 24px, normal tracking; UI links uppercase 24px / 29.3px, +0.48px (0.02em), medium weight.
- Display: Founders Grotesk bold, uppercase, 74px / 84px (H1 marquee line "SILO THEATRE 2026", "2026 ARTISTIC STATEMENT").
- Intro paragraph 24px / 28.3px centred, max-width 950px; light 50px / 53px statements inside colour panels; menu overlay items 48px / 44.6px.
- Ours: Playfair Display (display, 400/700 italic accents) + Source Sans 3 (UI/body); CJK Noto Serif TC / JP.

(c) Spacing
- Nav bar 48px high, padding 12 16 7. Header photo block 820px tall (first screen minus 80px bar); marquee strip 108px tall directly below.
- Section padding: white intro ~ 640px above the wordmark; black section padding-top 128px, marquee row 108px (12px pad), poster cards 258x368 with 128px gaps in a horizontal row.
- Colour-flood tiles: 480 x 706 each, padding-bottom 705px (text at top), three abutting.
- Container: full-bleed; text column 950px centred.

(d) Radius, border, shadow
- Radius 0 everywhere except outline pills (52px radius, 1px border in the panel colour, padding 14 56 10, uppercase 20px). No shadows.

(e) Imagery: IMAGERY = photo (documentary theatre photography, flash-lit faces, rehearsal rooms, stage scaffolding in blue-violet light). No illustration except the tiny scattered-letter wordmark.
- Hero: two full-bleed face photographs side by side, each 720 x 820 (ratio 0.88), abutting with no gap, object-fit cover.
- Poster cards: 258 x 368 (0.70) on black, label with a 10px dot + caps 11px, title bold caps 20px under.
- Slide row: centre slide 672 x ~ 560 (1.2), neighbours smaller and offset lower, long arrow (70px, 1.5px) between.
- Wide band photo: 1196 wide (inset 122px each side), full photo of a lit stage.

(f) Decoration
- Four corner micro-links in the hero (menu with a 16px round dot at top-left, centre wordmark link, "About" with a small arrow at top-right; "Sign-up" bottom-left, show link bottom-right), all uppercase 24px white.
- Bullet dot (10px) + caps label above every card title; thin 1.5px long arrows; no rules.
- Scattered-letter wordmark: four letters of the name set on staggered vertical offsets (45-60px apart) in black, 80px.

(g) Motion
- Marquee: the bold caps line runs right to left as a JS transform (GSAP) at ~88px/s, two copies spaced 826px apart, continuous; same on the black section (grey).
- Fade-in keyframes 0.4s and 2.5s linear (hero photo and text), scaleIn / scaleOut keyframes for the menu overlay, pulsate 1.8s on the cue dot, `cubic-bezier(.65,.05,.36,1)` and `cubic-bezier(0,0,.2,1)` for panels and hovers.
- Swiper carousels (vendor.js: Swiper, GSAP + ScrollTrigger, Vue) for the show row and the poster row; header colour inverts over black sections.
