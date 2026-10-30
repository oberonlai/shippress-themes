# Reference tokens — https://www.sanno.ac.jp/ (measured with getComputedStyle, 1440×900, 2026-10-30)
Only values and descriptions; no assets, copy or logos reused.

## (a) Colour
| Role | Hex | Share |
|---|---|---|
| Ground | #FFFFFF / #F8F8F8 (alternating bands) | ~70 % |
| Text / ink | #212121 | — |
| Accent (links, MENU block, follow band) | #005BCB | first screen ≈ 0.5 % (75×80 MENU block), whole page ≈ 6 % |
| Tint band | linear-gradient(124deg, rgba(194,207,222,.3) → rgba(0,91,203,.3)) ≈ #E3EAF3 → #BDD3F0 | 1 band, ~9 % of page |
| Secondary accent (red) | ≈ #C9403B (ribbon, corner ticks, pager arrows) | < 1 % |
| Dark chips | #444 (top-bar tabs), #212121 (arrow squares) | < 1 % |
First-screen saturated share: < 2 % (the photo is soft, desaturated).

## (b) Type
- Latin/CJK headings: Zen Old Mincho 500 (serif). Body/UI: Noto Sans JP 400/700.
- H2 lv01 80 px (section giant word), H2 lv02 36 px ("PICK UP"), H2 60/72 px multi-line, NEWS 48 px, H3 serif 28 px, card H3 sans 700 22 px, button 16 px serif/sans. line-height mostly normal on headings, 1.8–2 body. letter-spacing normal on headings; hero statement very wide (~0.4em).
- Case: Latin all caps for section labels (PICK UP, NEWS), CJK as is.

## (c) Spacing
- Container 1290 (x75–1365 at 1440); page margin 35 px for hero stage. Band padding 80–120 px top/bottom (banner bands 120, pickup 80, manabi 85/80). Card gap 20 px (4-up 308 wide). 3-up cards 410 wide gap 30.

## (d) Radius, borders, shadow
- Radius 0 everywhere. Buttons 1 px #212121 border, white fill, padding 12/48/12/20, 0.3 s hover. Cards flat white, no shadow. Tags: 1 px outlined pills (radius ~12) in grey/blue.

## (e) Imagery — IMAGERY: photo
- Hero: real photograph (soft-focus, close crop of a person in conversation), inset 35 px from left/right, 1370×690 ≈ 2:1, radius 0, white notch card (450×98) cut into its bottom-left corner, bottom edge sits at 770 px so the stage ends above the fold bottom.
- Pick-up cards: 3:2 photographs (308×205), radius 0, top of white card, text below. Small spot illustrations (330×240 flat-colour line figures) only inside the 3 "manabi" cards — minor, not the main imagery.
- Banner: 2.2–3:1 photo+type composite.

## (f) Decoration
- Section label: 100×2 px two-tone rule (blue left half, red right half) at left of the serif label.
- Manabi cards: white, 410 wide; blue 20 px corner tick at top-right (L-shape, 2 px), red tick at bottom-left; card title in a box with open corner brackets (one at top-left, one at bottom-right, 1 px #212121, 28 px arms).
- Arrow controls: 30×30 black squares with white arrows; card arrow 40×46 black square flush at card bottom-right.
- Diagonal red corner ribbon on banner (top-left, 45°).
- Vertical "NEWS" heading (70×145) beside list.
- Floating pager (up/prev/next/down arrows blue + red) bottom-right.

## (g) Motion
- Hero statement: per-character fade-in, slow (≈ 60 ms stagger, total ≈ 3 s), ease-out; hero is a video/slick slider with arrows.
- Header: on scroll the top bar collapses (height 80 → 44 px, 0.5 s) and the nav drops under the tab row.
- Hover: buttons/cards 0.3 s, arrow slides 0.4–0.5 s ease-out, image scale 0.4 s.
- Banner strip: slick carousel, peeking neighbours, 630×200 slides gap 30.
- No scroll-reveal library (jQuery + slick only).
