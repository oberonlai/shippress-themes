# Reference tokens — measured with getComputedStyle (1440×900, 2026-10-28)
Main: https://coralcap.co/ (S5-Style #11295; venture capital, EN page). Secondary (structure/overlay only): https://alex-group.co.jp/ (S5-Style #12145; accounting office). Only values and descriptions; no assets, text or logo copied.

## (a) Colour (Coral; area share = share of summed painted background boxes, rough)
| Role | Hex | Share |
|---|---|---|
| Base / page | #F9F8F4 | ~70% |
| Soft panel (sticky left panel, 600px wide) | #DBD3C7 sand | ~10% of first 3 screens |
| Ink / text | #333333 (body), #312C29 (dark tab + footer band) | text, ~6% dark |
| Light-on-dark | #EDE6DD | text on dark only |
| Accent | #FF6D48 coral (one word of the H1, "01" numerals, logo mark); tint rgba(255,109,72,.12) | <2% |
| Hairline | rgba(51,51,51,.2) 1px | — |
First-screen saturated share (HSV s>.5, v>.25, sampled screenshot): Coral 0%; ALEX 23% (navy #171C60 overlay box + blue #1E88E5-ish CTA; used only as secondary evidence). ALEX: white #FFF 60%, pale blue #DEEAFB 12%, navy #171C60 9%, text #333.

## (b) Type
- Coral: display = "FT Lambert" (serif, high-contrast transitional), body = Inter + Noto Sans JP. ALEX: Shippori Mincho B1 (mincho) throughout.
- H1 72px (4.5rem) /65.5px (line-height .91), weight 400, letter-spacing −4.3px (−0.06em), case as typed (Title Case), colour #333, one word in accent.
- H2 section title 96px (6rem) / 124.8px, weight 400, ls −3.84px (−0.04em); Portfolio/Media 95px / 109px.
- Label h2/h3: Inter 16px/16px, 600. Body 14px/21px (JP 16px/1.8), weight 500–700, ls .14–.28px. Stat numerals ~64px serif ("600+"), caption 12–13px Inter 600.
- ALEX: nav 14–15px mincho ls .1em; H2 24px/38.4px ls 1.2px; script tagline (Tangerine-like) ~56px on navy.

## (c) Spacing
- Page padding 30px (header) / 34px (content) at 1440. Section split: left sticky panel 600px (41.6% of viewport) + right column starts x=741, width ≈ 656 (col content), with 140px gutter between panel and text.
- Section min-height 110vh, padding 64px top / 60–120px bottom (inner). Next section top padding 160px (fluid 80–160). Hero H1 starts y≈290, photos start y≈500.
- Stat rows: hairline, label, numeral, then text column ~340px + 228px thumbnail stack (gap ≈ 70px).

## (d) Radius / border / shadow
- Radius 0 on photos and panels; 9999px on language pill and READ MORE pill (1px rgba(51,51,51,.2) border; READ MORE = #333 fill, light text, circular arrow chip 40px beside it). Dark vertical tab: radius 8px, 60×330px, fill #312C29. No shadows anywhere.
- ALEX: 0 radius, 1px navy outline buttons, navy box overlay with no shadow.

## (e) Imagery
- **IMAGERY: photo.** Documentary event/office photography, tight crops of people mid-conversation, no studio gloss. Coral treats every photo as warm monochrome (sepia duotone: shadows ≈ #2A201B, highlights ≈ #F1E7DC); ALEX uses full-colour candid office photo.
- Aspect ratio 1.40:1 for every tile (small 297×212, large 603×431; 2× the small plus gutter 9px); portrait tile ~340×400 (≈0.85) in first row. Radius 0, object-fit cover, no filter in CSS (monochrome baked into the files).
- Layout: first-screen mosaic = 4 columns starting x=471, bleeding off right edge, bottom/top edges bowed (curved cylinder warp, ~2–3° tilt at the left end; produced by a transformed wrapper), tiles scrolling with page. Mosaic occupies right 66% of viewport width; left 33% empty. Section thumbnails: stack of 3 × 228×163 at the right end of each sticky section, no gap (touching, 2px).
- ALEX: one full-bleed photo (x≥72, 1368×≈800) with navy box (746×323, overlapping the bottom-left, flush to the viewport edge) carrying the script tagline + mincho line.

## (f) Decoration
- Section numeral "01/02/03" 12px Inter coral, 1px coral underline 16px wide, centred above the section title.
- Left sticky list: "Capital / Talent / Insights", 13px, a 6px dark dot marks the active one, at bottom-left of the panel (x=24, y=585–640), items 27px apart.
- Vertical tab "FEATURED": fixed, right 12px, 330px tall, rotated text 16px/600 ls .05em, "+" circular chip 32px (1px rgba(237,230,221,.2)) at top.
- Hairline rules 1px rgba(51,51,51,.2) full column width above each stat block.

## (g) Motion
- Headline reveal (a-reveal-mask-text): characters split; each translateY 140%→0 + opacity, 1s `cubic-bezier(.17,.84,.43,.99)`, stagger .04s per character; second overlay uses a soft mask-position wipe 1.5–2.2s `cubic-bezier(.23,.14,0,.98)`.
- Fade-in stagger (a-fadein-stagger): translateY 55px→0, opacity 0→1.
- Nav/header: opacity 1s ease delay 1s on load; bar translate .4s `cubic-bezier(.5,1,.89,1)`; modal menu items .5s `cubic-bezier(.17,.19,.35,1)`; hover bg 2s `cubic-bezier(.19,1,.22,1)`; per-letter colour hover 1s `cubic-bezier(.61,1,.88,1)` .02s stagger.
- Sticky left panel: position sticky top 0, three sections each 110vh scroll past it; active list dot swaps with IntersectionObserver rootMargin −50%/−45%.
- ALEX: IntersectionObserver threshold .15, rootMargin 0 0 −40px; slide-up 40px / slide-left/right 40px / zoom .88→1 / rotate −6°, .7s `cubic-bezier(.16,1,.3,1)`, optional delay attr (ms).
