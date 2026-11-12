# Reference tokens: kameda.com (group top, 1440x900, measured with getComputedStyle) + dept page (medical.kameda.com clinic department)
Reference: https://www.kameda.com/ (a Japanese multi-site medical group). Dept page: https://medical.kameda.com/clinic/medi_services/index_16.html

## (a) Colour (area share over the 1440x900 first screen and the whole top page)
| Role | Hex | Share |
|---|---|---|
| Base / ground | #FFFFFF (page), #F8FAF8 (menu drawer, search panel) | ~80% below the fold |
| Hero photo (dark teal-grey video still) | #204040 / #406060 / #E0E0E0 mix | 70% of first screen; saturated share (S>0.5) measured 0.3% |
| Main (deep green) | #165C48 | links, 5px open-row bar, solid block button, circle arrows: <3% |
| Sub (department band) | ~#409980 (flat band on the dept page, white text) | dept pages only, ~12% of that first screen |
| Tint (rows) | #E8EFED | ledger rows, active filter row |
| Text | #333333 | body, headings |
| Muted | #848484 (numerals), #E0E0E0 (hairlines) | |
Accent: none; the one green does everything. First-screen saturated share: under 1%.

## (b) Type
- Family: Noto Sans JP (body, headings) + Barlow Condensed (Latin captions, numerals, "Menu" label, hero caption).
- H1 section title 50px / 700 / lh 87.5px (1.75), colour #333. Card h2 16px / 700 / lh 28px. Body 16px / 400 / lh 28px (1.75). Row label 15px / 500.
- Hero caption: Barlow Condensed 40px / weight 100 / letter-spacing 8px, white, sentence case.
- Numerals: Barlow Condensed italic-feel 54px / 500 / #848484.
- Nav links 16px #165C48; tiny "Menu"/"Close"/"scroll" labels: Barlow Condensed ~12px, tracked.

## (c) Spacing
- Container 1200px (l-inner), news/dept pages 1040px; hero 630px tall (70% of 900) then white lower half.
- Section top gap ~100px; section title block 158px tall; accordion row 74px; news item 64px; card image 265x152 gap 20px (4-up).
- Faint vertical hairline backdrop: columns every 324px (5 lines), 1px #E8E8E8, run behind all sections (used only as an observation; our theme does not copy it, see reference.md).
- Header: transparent on hero, 100px tall white after; logo at x30.

## (d) Radius, border, shadow
- Radius 0 on all images and rows; round only on circle controls (36px search button, 28px outline-circle arrows) and the 36px-high pill label (1px #165C48 border, white fill, radius 999).
- Hairline rules 1px #E0E0E0; open row gets a 5px #165C48 right edge; dept tabs have 1px #165C48 top and bottom rules with chevron-down.
- Shadow: only the floating search/back-to-top circles (soft, ~0 2px 8px rgba(0,0,0,.2)).

## (e) Imagery
IMAGERY: photo. Real photography throughout (hospital exteriors with sky, interiors, a bright top-down stack of hands, a looping muted video still in the hero). Hero is a 1440x630 photo, no radius. Card photos 265x152 (1.74:1), object-fit cover, 0 radius, no mask, no overlap. One split block: photo flush left 720px wide x 624px (about 1.15:1), grey #F7F7F7 panel flush right, panel text centred. Dept page: no photo in the opening band, a white circle medallion (80px) with a line icon.

## (f) Decoration
- 2px white vertical rule at x=433 (30%) dividing the hero into a link column and a photo; column holds 3 rows 64px apart with 28px outline-circle arrows right.
- Condensed numerals 01-08 at x 190-240 in rows; "scroll" vertical micro-label with a 1px line at the hero's lower right.
- Two-tone section rule on the dept page: 218px #165C48 segment over a 3px #E0E0E0 full rule, 44px under the heading.
- Dept tab row: five tabs each 168px wide, gap 30px, 1px green top and bottom rule, chevron right.
- Audience icons (person = for patients, stethoscope = for clinicians) at the right of dated news rows, with a legend under the filter column.

## (g) Motion
- No scroll-driven reveals on the page (opacity and transform are 1 / none before and after a 1600px scroll).
- Hero: muted looping video (movie_visual.mp4). Header drawer: transform + visibility .3s ease. Hover: text-decoration, background-color, opacity .3s ease. Accordion: CSS checkbox (no JS), instant. Swiper 8 carousel (loop, 3-up from 768px, bullet pagination, prev/next). No GSAP, no AOS.
