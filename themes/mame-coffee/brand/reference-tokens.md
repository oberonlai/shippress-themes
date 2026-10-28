# Reference tokens — https://afuribrewing.com/ (S5-Style entry 12018, craft-beer brand site)
Measured 2026-10-28 with headless Chromium at 1440×900 (getComputedStyle + screenshot pixel counts). Values only; no assets, text or logos copied. "n/m" = not measured.

## (a) Colour (first screen, 1440×900)
| role | hex | share of first screen |
|---|---|---|
| main (sky blue, saturated) | #00A0E9 → #80C0E0 range | ~41% (sat>0.5 share = 45%) |
| secondary (dark forest ridge, bottom) | #002020 | ~7% (bottom 30% strip) |
| base | #FFFFFF | 0% first screen; 100% of every section below the hero |
| text | #1D1D1D (29,29,29) | body/headings below hero |
| panel ground | #E8E8E8 | product photo panels |
| accent | none beyond the label artwork | — |
Below the hero the page is white + #1D1D1D + #E8E8E8 only; all colour comes from photos.

## (b) Type
- Families: JP Yu Gothic (webfont, Medium 400 / Bold 700) for headings and body; Latin "Helvetica Now Text" Medium for nav and labels. No serif.
- Hero lede: 24px / lh 30px, weight 400, white, key phrase underlined 1px.
- Hero statement H2: 36px / 45px, weight 400, white.
- Product / card titles (H3): 26px / 30px, weight 700, ls normal, caps as written (Latin in capitals).
- Nav: 17px Helvetica Now Medium, white on hero; secondary nav item 15px.
- Small label (category line "ABOUT | …"): ~17px; caption/body under cards 12–14px, lh ≈ 27px (2× x-height rhythm), weight 500–700.
- Hero wordmark: ~86px, white, caps, bottom-left, overlapping the window's lower edge.
- Vertical side label (rotated 90°, grey #C8C8C8, ~13px) at x=50.

## (c) Spacing
- Page gutter 50px at 1440; content container 1340px; 4-column card grid, card width 302px, column gap 44px (x = 50 / 396 / 742 / 1088).
- Section top: a 3px dark rule on top of each card/column with a short gap near its right end, then title 30px below the rule. Section top padding ≈ 120–160px; cards sit ≈ 170px below their title.
- Hero frame: 982×640 at (229,130) = 68% of width, 71% of height, centred; page has no side padding in hero.

## (d) Radius / border / shadow
- Radius 0 everywhere (photos, panels, badges). Circle play buttons 24px with 1px grey outline. Borders: 3px #1D1D1D top rule; 1px #C8C8C8 hairline between spec and description. No shadows.

## (e) Imagery — IMAGERY = photo
Main image type is **photo** (hero window photograph, backdrop mountain photograph, product packshots, brewer portrait). One isometric flat illustration (taproom, black 2px outlines, flat green/terracotta/cream fills, tiny people) appears once as a card image — a minority, so IMAGERY stays photo.
| image | ratio | radius / mask | placement / size |
|---|---|---|---|
| hero window photo (product on blue water + glass) | 982:640 ≈ 1.53:1 | none, sharp rectangle | centred, 68% width, floats above the backdrop; lower edge overlapped by the wordmark |
| hero backdrop (sky → mountain ridge photo) | full-bleed ~1.55:1 | none | behind the window, scaled larger than the viewport (1656×1078 on 1440×900) |
| product cards | 302:390 ≈ 0.77:1 (portrait) on #E8E8E8 | none | 4-up, 21% width each |
| feature cards | 648:390 and 302:390 | none | one wide + one narrow in one row |
Style: daylight, cool clear skies, mist and forest; product shot with soft shallow-focus background; neutral grey packshot ground.

## (f) Decoration
- 3px top rules above every card and section (width = column), with a ~12px break in the last 4% of its length.
- Round 24px outline "play" arrow button at the right of each title.
- Small white label chips ("NEW") 12px bold, 8px padding, inset 12px top-left on the product panel.
- Three-level rating bars (5 small black/grey blocks, 12px tall).
- Rotated side label + 4-dot glyph bottom-left of viewport.
- "SCROLL DOWN" 17px with a short white line (110px, 2px, with a gap) above it, bottom-right.

## (g) Motion
- Header transform 0.25s cubic-bezier(.165,.84,.44,1); header padding 0.43s cubic-bezier(.77,0,.175,1); logotype slide 0.43s same easing; image fade-in 0.2s linear.
- Hero scroll: window and backdrop both scale up while scrolling (backdrop 1656→1938px wide over 200px scroll = +17%; window 1014→1168 = +15%, moving up ≈50px per 200px), then backdrop becomes the full-screen mountain with the lede replaced by a new statement.
- Implementation: own main.js (no GSAP/ScrollTrigger/Lenis found); scroll position handler + IntersectionObserver controller toggling visibility, requestAnimationFrame easing.
