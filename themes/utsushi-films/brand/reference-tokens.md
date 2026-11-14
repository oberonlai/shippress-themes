# Reference tokens — main reference https://www.east64films.com/ (measured 1440×900, getComputedStyle)

## (a) Colour
- Ground (body): #222222, about 80% of the first screen. Text: #ECE9E2 (warm off-white), about 6%. Dimmed rows/labels: #5A5751 on the ground, and rows at about 0.2–0.3 opacity.
- Single bright accent: white box #FFFFFF with #151515 text (the "Contact" tab, 13px, padding 4px 8px, radius 0), under 1%.
- The only saturated colour is the film still inside the window (about 23% of the first screen area). Page ground has a per-film hue shift (data-hue 210 / sat 24 on every row, i.e. barely visible).
- Inner pages: same #222 ground; the About hero is a full-bleed low-key photograph (near black, blue-violet monitors).

## (b) Type
- Index/UI: helvetica-neue-lt-pro (neo-grotesque) 13px / 500 / lh 23.97px / ls normal / UPPERCASE, colour #ECE9E2.
- Caption and display: matrix-ii-ext-semi-narrow (condensed high-contrast serif) 44px / 400 / lh 55px, centred, title-case; meta line 20px uppercase.
- About body: ~15px sans, lh 1.3, measure ~680px, centred column; strengths titles ~40px condensed serif, numerals 11px.
- Header: tagline 12px caps top-left, logo centred, nav 12px caps right, JP / EN switch far right.

## (c) Spacing
- Works stage: fixed full viewport; the index list is a 10-row, 23px-pitch table (columns at x48 number, x156 title, x941 client, x1205 category, x1349 year) crossing the window.
- Window 728×418 (16:9), centred x356–1084, y241–659. Caption block starts at y706, 112px high. Header height 33px at y18. Fixed corners at 20px.
- About: sections 160–300px apart; three strength columns 370px apart.

## (d) Radius, borders, shadow
- Radius 0 everywhere. No borders except the 1px horizontal line with "TOP … ABOUT" page-turn labels on the About hero. No shadow.

## (e) Imagery
- IMAGERY: photo. Real documentary and commercial film stills, mostly low-key and cinematic; 16:9 for work windows, 334:188 for related thumbs; gallery strip height clamp(160px, 22vw, 254px) with auto width.
- Window is a crop of a full-viewport video layer (clip + inner pan, "preview-para"); crossfades between films; no radius, no overlap with text except the index rows crossing it.

## (f) Decoration
- Row marker "▸" before the active row; numerals 01–10 at 13px; dimmed inactive rows.
- Right-edge progress pill: 4px wide, height clamp(50px,10vh,100px), thumb 20px, rgba(255,255,255,.18) track.
- Custom cursor label (11px caps) follows the pointer over the window.
- Fixed corner furniture: "Follow us" bottom-left, white "▸ Contact" box bottom-right.

## (g) Motion
- Intro: loading text lines ("We create …") then reveal. Row colour transition 0.45s cubic-bezier(0.25, 0.1, 0.25, 1). Caption characters split per char and rise (char-inner). Library: GSAP + ScrollTrigger + Lenis smooth scroll + Swup page transitions (WordPress theme).
- Wheel/touch advances the active row; each step crossfades the window media and swaps the caption; pointer-over-window shows the cursor label.
