# Reference tokens — measured on the primary reference (YKK AP, ykkap.co.jp), with AGC (agc.com) as the secondary for the diagonal solid-panel hero
Measured 2026-11-27 with headless Chrome (1440 x 900) via getComputedStyle, the site CSS bundle and screenshot pixel sampling. Values only; no assets, copy or logos reused. Screens in `ref/`.

## (a) Colour
| Role | Primary (YKK AP) | Share of first screens | Secondary (AGC) |
|---|---|---|---|
| Ground | #FFFFFF | ~70% (header, body, gaps) | #FFFFFF |
| Pale band | #F9F9F9 / #F6F6F6 notice and catalogue bands | ~15% | #ECEFF1 card band |
| Accent (single) | #0084B9 (192 uses in the CSS: active nav block, links, outline buttons, hero pager) | 4–6% on inner pages; 23% on the campaign home | navy #001F6B hero panel + headings |
| Text | #000000 body, #666666 secondary, #828282 meta | – | navy and black |
| Lines | #DBDBDB hairlines, #C4C4C4 | 1px | #D8D8D8 |
| Alert | #F64D4D (rare) | <1% | crimson #E60044 pager dot |
Saturated share of first screen (channel spread > 90, sampled 144x90): YKK home campaign slide 22.8%; YKK window-reform page 1.4–4%; YKK business 3.8%; AGC home 34% (navy panel + a colourful photo). **Ours: aim 8–14% (one dark slate panel is NOT saturated; accent used only on the active nav block, one CTA and the pager), hard cap 15%.**

## (b) Type
YKK AP: Noto Sans JP throughout (headings and body); Latin falls to the system sans. H2 24px / 30px line height / weight 400 (light-looking, centred, with a 24px x 2px black bar under it); H3 20px / 25px / 400; nav 16px / 20px / 400; button 14px / 28px / 400; breadcrumb 12px; tracking normal; body 14–16px. Hero statements on the campaign slide are heavy (900) display, huge; inner heroes are 32px / 700 white centred on a 35% dark scrim.
Our mapping: Onest (display, 600–700) + DM Sans (body 400/500), CJK Noto Sans TC/JP; H1 >= 4.25rem (68px) on the slate panel.

## (c) Spacing and layout
Container 1208px content inside a 1288px header (1440 viewport), 116px side gutter. Header two-tier: utility row (links, pill search 240x40, r20) then a 44px main nav row, bottom hairline; current nav item is a solid #0084B9 block 44px high, white text. Section padding ~64–96px top and bottom; centred H2 then 40–60px to content. Card grids 4-up: 272px cards, 40px gutter (4 x 272 + 3 x 40 = 1208). Hero image 1440 x 309 (4.67:1) on inner pages, edge to edge, three photos abutting (no gap) with a centred caption.

## (d) Radius, borders, shadow
Radius 0 on photos, buttons and cards; the search field is the only pill (r20). Outline button 1px #0084B9, 158x32, with a 16px circle arrow icon. Cards 1px #DBDBDB. No shadows on YKK (AGC cards: 0 2px 8px rgba(0,0,0,.12) on a #ECEFF1 band).

## (e) Imagery — IMAGERY = photo
Real photography and clean product renders: large panes, window frames and facades in daylight, high-key, white or pale walls, bright sky; people rare (a snow-clearing worker on one campaign slide). Catalogue photos are 1:1 squares (272 x 272, r0) with the caption below, left aligned, 18px; hero strips 4.67:1; related-content tiles 1.5:1 (270 x 180); AGC hub cards are white cards with a 10px inset photo ~1.45:1. No masks or clip-paths on photos; no overlap with text except the hero caption centred over the three-photo strip. AGC hero: solid navy panel (45% wide) with a slanted right edge (~15 degrees from vertical, edge at x 650 at the top, 500 at the bottom of a 434px strip) and one full-colour photograph filling the rest; the slide area sits inset 15px from the viewport edges.

## (f) Decoration
Short centred rule under H2: 24 x 2px #000. Hairline breadcrumb row with chevrons. Hero pager: five 10 x 10 squares, 20px apart, grey #C4C4C4 with the current one #0084B9 (YKK); three squares with a crimson current (AGC). Square arrow tabs 80 x 80 flush at the left and right middle of the YKK slider (blue-teal and green-grey, white chevron). Notice rows with a circled "!" icon and blue link text. "Back to top" 40 x 40 square, #0084B9, fixed bottom right. Dated ledger rows (AGC news): date left 130px, category chips, title in blue, 1px #D8D8D8 row rules.

## (g) Motion
YKK: no scroll reveals. Hero is a slick carousel (autoplay 4s on slides, 7s on the lead slide, 500ms slide, not fade) with arrow tabs and square pager. Header/menu transitions 0.2–0.4s, cubic-bezier(0.215, 0.61, 0.355, 1) (ease-out cubic): colour 0.2s, border 0.2s, opacity 0.3–0.4s on the mega-panel. Scroll-spy: IntersectionObserver rootMargin "-50% 0px" toggles `-current` on in-page anchors. A scroll-hint overlay on horizontally scrollable tables (scroll listener).
AGC: slick carousel with pause button; sticky header collapses on scroll from 95px to 55px (logo shrinks, utility row removed), instant swap with ~0.3s transition.
