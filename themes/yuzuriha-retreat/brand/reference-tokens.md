# Reference tokens (measured with getComputedStyle, 1440x900, headless Chrome)

Primary: https://earthboat.jp/ (top page, English). Secondary: https://www.hana-mura.com/ (top page).
Only values and descriptions are recorded; no assets, copy or logos are reused.

## (a) Colour (Earthboat)
| Role | Hex | Where | Share of page height |
|---|---|---|---|
| Ground (pale olive stone) | #E5E4D5 | body and the stay/location sections | about 37% |
| Lighter band | #EDECE2 | topics / news band | about 48% |
| Ink | #212227 | all text, pill CTA fill | text only |
| Dark overlay | rgba(0,0,0,.6), #1C1D1F | full-screen menu | hidden state |
| White | #FFFFFF | footer and hero headline | footer ~15% |
| Hero glow | #1C3537 at 50% opacity, blur 105px, 380px square | behind the headline, lower left | local |
First screen: a full-bleed photo/video under a 67px frosted strip; share of pixels with saturation > 0.45 measured on the screenshot = 0% (snow, dark timber, tan trees). Secondary (Hana-mura): white page, one tall dark-green photo; saturated share 0%.
No accent hue exists on the reference; the pill and all links are ink. Our accent (design-plan hex #B98C46, a yellow-brown) is added only as hairlines, small markers and one text-link underline, at most 5% of any screen.

## (b) Type (Earthboat)
- Display: "new-spirit" serif (we use Newsreader). H1 67.5px / lh 1.0 / weight 500 / ls normal / colour #FFFFFF at opacity .6 over the photo. H2 42.2px / lh 1.0 / weight 400 / ink.
- Card title: Noto Sans JP 21.1px / lh 1.7 / weight 400 / ls .03em. Caption 12.65px / lh 1 / weight 500 / ls .03em.
- Body and UI: Manrope 14.4px / weight 500; pill label 14.4px / ls .033em.
- Hana-mura: Zen Old Mincho throughout, tiny Latin caps labels (about 11px, ls .12em), vertical Japanese columns.
- Case: sentence case headings, small caps only for labels.

## (c) Spacing
- Header 67px high, side padding 42px (48px in the mega menu). Hero 100vh. Content grid left edge x=124 (8.6% margin) at 1440; card grid 3 columns of 369px, gap about 43px; section padding about 96px top and bottom.
- Strip rows: photos 3:4-ish tall cards 280px wide, gap 8.4px, strip starts at x=738 and bleeds to the right edge.

## (d) Corners, borders, shadow
- Photos: radius 0. Pill CTA: radius 9999px, 38px high, 190px wide, padding 8.4px 21px, fill #212227, white text. Outline pill: 1px solid #212227, radius 30px.
- Search/tag chips: 1px solid #8E8E8E, padding 8.4px 16.9px. Shadow none. Frosted header: backdrop-filter blur(10.5px) with background rgba(229,228,213,.1).

## (e) Imagery
IMAGERY: photo. Documentary film still / video: wide full-bleed hero (16:9, 1600x900 video), square location photos 1:1 (384x384), tall strip photos about 0.6:1. Radius 0, no masks except the footer ridgeline cut. Hero text lower left (x 124, y 462). Footer: a photograph clipped to a mountain ridgeline silhouette rising from the right edge, about 40% of the width, text left of it.
Hana-mura: one very tall portrait (610x1070, 0.57:1) centred at x=415 under the header, other photos 0.72:1 (526x735) and 1.27:1 (840x660) placed at different left offsets on white; thin outline circles (about 80px) labelled CONCEPT / CUISINE / GUEST ROOMS docked at a photo's lower corner; vertical serif text columns beside photos.

## (f) Decoration
- Strip progress bar under the horizontal photo strip: 2px line, filled part grows from 150px to full width with scroll; small round arrow buttons at the right.
- Card badge: 24px outline circle with a chevron at the photo's top-right; four tiny dots under each photo as a pager; hashtag micro-labels in 12px.
- Menu icon: two 1px lines, 28px wide. Footer link rows separated by 1px hairlines with a chevron at the right.
- Hana-mura: tiny "JP / EN" switch at the right of the photo, small address text bottom-left, double hairline menu icon.

## (g) Motion
- Hero: muted autoplay looping video; header turns into a frosted strip (blur 10.5px) once the page moves.
- Strip: scroll listener (passive) on its own container drives the progress bar width, arrow buttons scrollBy 290px smooth.
- Menu: full-screen overlay opened with a clip-path inset animation (gsap bundle).
- Cards: no reveal observed; Hana-mura: no scroll animation observed beyond swiper.
