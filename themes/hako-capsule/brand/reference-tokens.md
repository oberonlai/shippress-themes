# Reference tokens (main reference: https://tokyonode.jp/ — measured with getComputedStyle at 1440x900, 2026-11-16)
Secondary reference: https://ise-seaparadise.com/ (used only for the "today" info card, the notched date-tab cards and the lowered-middle card row; its saturated sticker colours are NOT borrowed).

## (a) Colour (main; area share of painted surfaces)
- Ink / text: #1E1E1E (about 60% of text+rule usage); pure #000 only on the first-screen scrim.
- Base: #FFFFFF (about 80% of the page area outside photos).
- Pale band: #F7F7F7; hairline: #E6E6E6; mid grey label: #9D9D9D; frame line: #1E1E1E 1px.
- Accent: none (colour comes only from photographs). First screen: white nav + photo, saturated share about 2%.
- Secondary site saturated values (reference only, not used): #6096CD sea blue, #713DF6 violet, #F3ED69 yellow, #F2A7B5 pink.

## (b) Type
- Display / wordmark: a thin condensed grotesque (Tokyonode custom), uppercase, 42px section titles, wide tracking (about 0.12em), weight 400.
- Body: trade-gothic-next family, weight 300, 16.5px / line-height 30.8px (1.87); h3 23px weight 200, lh 1.3.
- Nav: 16px uppercase, tracked about 0.1em, weight 300.
- Labels/tags: 12-13px, pill outline 1px, uppercase.

## (c) Spacing
- Page is full-bleed; sections are separated by full-width 1px rules; h2 band 45px tall (padding 22.8 / 21.2px) between two rules.
- Header: 138px (wordmark band 62px + 76px boxed nav bar); nav bar has a 1px ink frame and becomes sticky.
- Event row: 50/50, photo left 720x382, text right with 40px padding; foot strip 84px tall in 3 cells (venue+date | link | 48px arrow box).
- News wall: 5 columns x 288px, cells 513px tall (photo 288px square, label row, title, foot row 48px with arrow box).

## (d) Radius, border, shadow
- Radius 0 everywhere except 999px outline pills; borders 1px #1E1E1E / #E6E6E6; no shadows.

## (e) Imagery
- IMAGERY = photo (real photography, editorial, events and food; some posters). Ratios: wide stage 1440x590 (about 2.4:1), event photo 1:1, news cells 1:1. No masks, no overlaps; photos sit flush in grid cells.
- Secondary: photo cards 4:3-ish with 8px white inner frame and a white notched tab carrying a big date at the bottom-left.

## (f) Decoration
- 1px frame around the nav bar; 1px full-width section rules; square 48px arrow boxes (1px border, diagonal arrow) at the right of every row/cell; outline pills (tags); dark status chip ("In session").
- Secondary: white notched date tab (about 148x70) at card bottom-left with a 36px circular weekday badge; white slab header with a rounded bottom-left corner.

## (g) Motion
- Main: Webflow interactions; the wide wordmark band collapses so the sticky nav carries a small left wordmark after scroll; section titles use a clip/reveal "title-animation" class (estimated 0.6-0.8s ease).
- Secondary: `.js-fadeup` = opacity 0 + translateY(150px), transition all 0.3s, class added when element top + 200 < viewport height (scroll listener); `.js-tada` = animate.css tada when in view; Swiper: topics slidesPerView 1.2 (3 at >= 834px), gap 15px; marquee swipers speed 20000-40000ms loop.
