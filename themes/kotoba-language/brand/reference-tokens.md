# Reference tokens — QuSS (https://quss.riken.jp/), measured via Playwright/getComputedStyle at 1440x900 unless noted

Time-boxed (stage 1, ~6 min browser budget). Values marked **approx** are read from the screenshot, not `getComputedStyle`. 成品 (final theme) column left blank for stage 2.

## (a) Colour — hex / area %, 成品

| Role | QuSS hex | Area % (first screen) | 成品 |
|---|---|---|---|
| Ground | `#F0F0EE` (rgb 240,240,238) | ~85% | `#F2F1EE`, ~68% of page (+ white panel ~8%) |
| Ink (text/wordmark) | `#000000` | ~10% | `#0D0C0A`, ~20% |
| Photo accent (sky/sea, inside circle crop only) | approx `#4FA8D8`–`#8FC6E6` range | <5%, confined to one ~370px circle | saturation only inside photography; first screen 6–12% (cap 15%). Accent hue 桑染 `#6E5C4C` ≤5%, arcs/rail/labels only |
| Pill bar fill | `#15130F`-ish near-black (approx, from screenshot) | <2% | `#15130F` intake pill + filled buttons, ≤3% |

## (b) Type — family / size / weight / line-height / letter-spacing / case, 成品

| Element | Family | Size | Weight | Line-height | Letter-spacing | Case | 成品 |
|---|---|---|---|---|---|---|---|
| Body / default | "BIZ UDPMincho", serif | 14px (0.875rem) | 400 | 22.4px (1.6) | normal | sentence | Source Sans 3 400, 17px (1.0625rem), LH 1.6 |
| Oversized wordmark ("QuSS", repeated mid-page) | Imbue, serif | ~200px measured on one instance (approx 180–260px across instances, hero one is larger, visually ~340px tall cap height) | 400 | tight (~0.9, cropped by overflow) | normal | mixed case as typed | EB Garamond 400, `clamp(5rem,15.5vw,13.75rem)` = 220px @1440, LH 0.82, wrapper `overflow:clip` at 0.62x line box, left-flush 80px |
| Headline (h2) | serif, underlined per-phrase | approx 52–56px | 600–700 | ~1.2 | normal | — | EB Garamond 400/500, section 2.75rem (44px) / page head 4.5rem, LH 1.12, letter-spacing -0.01em, left-aligned |
| Nav / micro-labels (SCROLL / PAGE TOP) | sans, rotated vertical | approx 11px | 400–500 | normal | wide (~0.1em, approx) | upper | Source Sans 3 500, 0.6875rem (11px), 0.14em, upper, `writing-mode: vertical-rl`, `ENQUIRE ↗` → `PAGE TOP ↑` |

## (c) Spacing — section padding / container width / column gaps, 成品

| Metric | QuSS (approx, from screenshot at 1440px) | 成品 |
|---|---|---|
| Side margin (hero text start) | ~80px | 80px @1440, 24px @390 |
| Hero wordmark top offset | ~190px from viewport top | 190px |
| Section vertical rhythm (News pill to Summer School block) | ~160–200px gap (approx) | 176px desktop / 88px mobile |
| Circular photo diameter | ~370px (measured via screenshot proportion) | 372px @1440 (home path-1 circle); portraits 200px |
| Arc flank width either side of circle/COMING SOON block | ~110px arc span, ~400px tall (approx) | 112x400px inline SVG, bulge 26px, gap 64px (72x240px / 20px at <=782px) |

## (d) Radius / border / shadow, 成品

| Element | QuSS | 成品 |
|---|---|---|
| Circular photo | `border-radius: 50%` (visual; not confirmed via computed style — selector matched wrong img) | `border-radius: 50%`, true circle >=320px @1440 |
| News pill | fully rounded ends (approx, pill shape) | fully rounded, h 80px, max-w 712px, `#15130F`, white 0.875rem; two stacked lines (not clipped) <=782px |
| CTA "more" button | fully rounded (pill), black fill, white text, ~14px font | `Enquire` pill: `#15130F` fill, white Source Sans 3 600 0.875rem, fully rounded |
| Shadows | none observed (flat design throughout) | none; radius 0 except pills and circles |

## (e) Imagery — aspect ratio / mask / overlap / position / width%, 成品

| Image use | QuSS | 成品 |
|---|---|---|
| Hero circular photo | perfect circle crop, ~370px diameter, right-aligned in a text-led section (not full-bleed), flanked by arc rules | same relationship: S3 372px circle right-aligned in the text-led lead gateway row, flanked by arcs. S2/S4/S5 circles on inner pages. Plus one 21:9 full-bleed classroom band (our addition), 16/10 hero photo half |
| No other photos surfaced in the ~35% of page height captured | | 16 photographs total, one STYLE string, 14 on the home page, 0 cut-outs |

## (f) Decoration — lines / dots / labels / numbering, 成品

| Decoration | QuSS | 成品 |
|---|---|---|
| Arc rule + dot terminator | thin 1px curved line (~110px x ~400px bounding box), small filled circle (~6px) at one end | 112x400px, 1px `#6E5C4C`, dot r=3.5px; left arc dot top, right arc dot bottom (diagonally opposed) |
| Horizontal 3-line + dot cluster (top-right, persists through scroll) | 3 horizontal hairlines of increasing length (~60/100/160px) with a dot at one end, rotated vertical label beside it | T3 rail: 56/96/152px, 8px apart, `#6E5C4C`, 3.5px dot at the long line's left end, `position: fixed; right: 28px`, hidden <960px |
| Section label hairline | short horizontal rule (~45px) before a block of body text | 45px, 1px `#6E5C4C`, 14px gap, before every section label and page head |

## (g) Motion — type / duration / delay-stagger / easing / distance, 成品

| Effect | QuSS | 成品 |
|---|---|---|
| Scroll library | none detected: `window.gsap`, `ScrollTrigger`, `AOS`, `jQuery` all `undefined`. | sp-scroll only (CSS scroll-driven + IntersectionObserver fallback). No GSAP/AOS/Lenis/jQuery, no scroll listener |
| Observed motion | not isolated within the time budget; treat as unconfirmed. | **Timing NOT attributed to the reference** — sp-scroll defaults: `sp-parallax` hero photo half `--sp-par:10%`, full-bleed band 8%, mobile 6%, layer scale 1.18; `sp-stagger`+`sp-reveal--up` 0.8s `cubic-bezier(.23,1,.32,1)`, 24px, 0.12s step; `sp-reveal--wipe` 1.1s `cubic-bezier(.77,0,.175,1)` (clip on child img). Hero: no reveal |
