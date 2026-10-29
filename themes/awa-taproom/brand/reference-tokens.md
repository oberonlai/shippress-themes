# reference-tokens — AFURI BREWING (https://afuribrewing.com/), measured 2026-10-29, Chrome headless 1440×900
Source: S5-Style listing (craft beer site, "folding photo frame over a mountain"). Values from getComputedStyle / getBoundingClientRect / main.css. Values only; no assets, copy or logo taken. Items I could not measure are marked (not measured).

## (a) Colour (first screen 1440×900, screenshot sampled)
| Role | Hex | Share of first screen |
|---|---|---|
| Sky ground (saturated) | #00A0E0 / lighter #80C0E0 | ≈42% saturated (sky + framed photo backdrop) — far above our ≤15% cap, so we keep the *relation* (one flat ground + framed photo) not the hue |
| Deep forest (bottom band) | ≈#0B2A2A | ≈20% |
| Text on ground | #FFFFFF | headline, nav |
| Text on white sections | #1D1D1D (29,29,29) | all later sections |
| Page ground (below fold) | #FFFFFF | ≈85% of the long page |
| Accent | none on page chrome; colour comes only from product cans (green/yellow/pink/blue) | — |
Our mapping: ground = umber #3B2E28 family (dark) → white-ish ground below; no saturated accent beyond one amber.

## (b) Type
- Latin: Helvetica Now Text Medium-like grotesque (footer 17/500/22px); logo and nav in caps, nav ≈16–18px caps, tracking normal.
- Japanese: Yu Gothic Pr6N (Morisawa) Medium 36px/45px (hero lead, h2) and Bold 26px/30px (h3 card titles), weight 400/700, letter-spacing normal, color #fff on photo / #1D1D1D on white.
- H1 wordmark "AFURI BREWING" ≈78px caps, white, bottom-left of fold at x50, baseline ≈ y800; JP sub 26px.
- Lead underline: key phrases carry a 2px solid underline of the text colour.
- Small label "ABOUT | …" ≈17px caps with a hairline separator.

## (c) Spacing
- Page gutter 50px both sides at 1440 (content 1340 wide, `.l_body` x50–1390).
- Product row: 4 columns 302px wide, gap 44px (x50, 396, 742, 1088).
- Gap between lead block and next row ≈ 240px; section padding-top ≈ 135–243px (`l_smt135`, `l_pmt243`).

## (d) Radius / border / shadow
- Radius 0 everywhere (photos, frame). Shadow none.
- Card head: 4px solid #1D1D1D top rule, cut by a 20px gap near the right end (rule is two segments: 276px + 20px), then a Ø24 outlined circle with a ▸ glyph.
- Hairline 1px #CFCFCF under blocks.

## (e) Imagery — **IMAGERY = photo**
Main images are real photography (mountain landscape, product can + glass still life on blue, forest stream strips, brewers' portraits). One small isometric flat-colour illustration (brewery building, ~5% of imagery) → photo wins.
| Image | Ratio | Radius | Mask | Position / width |
|---|---|---|---|---|
| Hero framed photo | 983×640 (1.54) | 0 | scroll-driven mask-image wipe (see g) | x229 y130, 68% of width, centred, sky shows left/right/top |
| Full-bleed mountain behind | cover 1440×900 | 0 | none | fixed behind frame |
| 3-photo strip (forest/stream) | 249×223 each ≈1.1, flush | 0 | none | right half, x742–1390 (45% width), 237px gaps |
| Can packshots row | 4 tall cans bleeding off top | 0 | none | full row, offset |
| Brewer portraits | ≈1:1.2 | 0 | none | right column 302px |

## (f) Decoration
- Tiny mountain-line logo 32×14 top-left (x50,y57), 1px line, white.
- Vertical rotated label "ABOUT | AFURI BREWING" grey #BDBDBD at x50, y565–755, ≈15px caps.
- "SCROLL DOWN ◉" bottom-right with a 148×2 white bar, last 16px detached.
- Mini 4-triangle glyph at x50,y472.
- Circle ▸ buttons Ø24, 1px #1D1D1D.

## (g) Motion
- Hero: `div.js_fv_heroImg.js_mask` — a CSS mask-image (180deg gradient, mask-size 100%×300%) whose mask-position is tweened by the site's own JS (custom rAF tween, easeInOutQuart); the photo frame is fully gone (opacity 0) by scrollY 100px, revealing the full-bleed mountain; then a lead line ("... tsukuru", Japanese lead line) swaps in at the bottom-left. Hero stays pinned: `.hm_fv` 1681px tall over a 900px sticky stage.
- Hero slider: the framed photo auto-cycles with the same mask wipe, slide progress 0–1, eased 0.5–0.8 and 0.65–0.95 with easeInOutQuart.
- Link hover: color 0.4s cubic-bezier(.25,.46,.45,.94); product card hover swaps can photo → poured glass.
- Dominant site easings in CSS: cubic-bezier(.77,0,.175,1) ×115 (easeInOutQuart-like), cubic-bezier(.165,.84,.44,1) ×98 (easeOutQuart).
- IntersectionObserver used only for play/pause of in-view modules; scroll tween is rAF, no GSAP/ScrollTrigger/Lenis/Swiper found.
