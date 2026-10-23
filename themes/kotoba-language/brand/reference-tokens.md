# Reference tokens — QuSS (https://quss.riken.jp/), measured via Playwright/getComputedStyle at 1440x900 unless noted

Time-boxed (stage 1, ~6 min browser budget). Values marked **approx** are read from the screenshot, not `getComputedStyle`. 成品 (final theme) column left blank for stage 2.

## (a) Colour — hex / area %, 成品

| Role | QuSS hex | Area % (first screen) | 成品 |
|---|---|---|---|
| Ground | `#F0F0EE` (rgb 240,240,238) | ~85% | `#F2F1EE`, ~68% of page (+ white panel ~8% for the split hero) |
| Ink (text/wordmark) | `#000000` | ~10% | `#0D0C0A`, ~20% |
| Photo accent (sky/sea, inside circle crop only) | approx `#4FA8D8`–`#8FC6E6` range | <5%, confined to one ~370px circle | saturation only inside photography; first screen 6–12%, cap 15%. Accent hue 桑染 `#6E5C4C` on arcs/rail/labels only, ≤5%, never a field |
| Pill bar fill | `#15130F`-ish near-black (approx, from screenshot) | <2% | `#15130F`, ≤3% (intake pill + filled buttons) |

## (b) Type — family / size / weight / line-height / letter-spacing / case, 成品

| Element | Family | Size | Weight | Line-height | Letter-spacing | Case | 成品 |
|---|---|---|---|---|---|---|---|
| Body / default | "BIZ UDPMincho", serif | 14px (0.875rem) | 400 | 22.4px (1.6) | normal | sentence | Source Sans 3 400, 17px (1.0625rem), LH 1.6; zh-TW Noto Serif TC / ja Noto Serif JP at LH 1.85 |
| Oversized wordmark ("QuSS", repeated mid-page) | Imbue, serif | ~200px measured on one instance (approx 180–260px across instances, hero one is larger, visually ~340px tall cap height) | 400 | tight (~0.9, cropped by overflow) | normal | mixed case as typed | EB Garamond 400, `clamp(5rem, 15.5vw, 13.75rem)` = 220px at 1440, LH **0.82**, wrapper `overflow: clip` at 0.62× line box, left-flush at 80px |
| Headline (h2, "学び、触れ、挑む。") | serif (CJK, likely same stack), underlined per-phrase | approx 52–56px | 600–700 | ~1.2 | normal | — | EB Garamond 400/500, section heading **2.75rem**, page head **4.5rem** (theme.json max), LH 1.12, letter-spacing −0.01em |
| Nav / micro-labels (SCROLL / PAGE TOP) | sans, rotated vertical | approx 11px | 400–500 | normal | wide (~0.1em, approx) | upper | Source Sans 3 500, **0.6875rem (11px)**, letter-spacing **0.14em**, uppercase; vertical rail label `writing-mode: vertical-rl` |

## (c) Spacing — section padding / container width / column gaps, 成品

| Metric | QuSS (approx, from screenshot at 1440px) | 成品 |
|---|---|---|
| Side margin (hero text start) | ~80px | **80px** at 1440, 24px at 390; content width 1200px, narrow text column 680px |
| Hero wordmark top offset | ~190px from viewport top | **190px** |
| Section vertical rhythm (News pill to Summer School block) | ~160–200px gap (approx) | **176px** desktop / 88px mobile |
| Circular photo diameter | ~370px (measured via screenshot proportion) | **372px** at 1440 (home block 2 + pathway pages); teacher portraits 200px |
| Arc flank width either side of circle/COMING SOON block | ~110px arc span, ~400px tall (approx) | **112 × 400px** inline SVG, bulge 26px, gap to flanked element **64px** (≤782px: 72 × 240px, gap 20px) |

## (d) Radius / border / shadow, 成品

| Element | QuSS | 成品 |
|---|---|---|
| Circular photo | `border-radius: 50%` (visual; not confirmed via computed style — selector matched wrong img) | `border-radius: 50%` (372px home, 200px portraits) |
| News pill | fully rounded ends (approx, pill shape) | fully rounded, `#15130F`, height 80px, max-width 712px; **two stacked lines inside the pill ≤782px, never clipped** |
| CTA "more" button | fully rounded (pill), black fill, white text, ~14px font (confirmed `color: rgb(255,255,255)`) | `Enquire` pill: fully rounded, `#15130F` fill, white Source Sans 3 0.875rem |
| Shadows | none observed (flat design throughout) | none; radius 0 everywhere except pills and circles |

## (e) Imagery — aspect ratio / mask / overlap / position / width%, 成品

| Image use | QuSS | 成品 |
|---|---|---|
| Hero circular photo | perfect circle crop, ~370px diameter, right-aligned in a text-led section (not full-bleed), flanked by arc rules | same relationship: S3 as a 372px circle, right-aligned in a text-led gateway row, flanked by the arcs. Added beyond the reference: one 21:9 full-bleed classroom band (S6) and a 16:10 hero half (S1) |
| No other photos surfaced in the ~35% of page height captured (archive section photos exist further down, not captured in time budget) | | 16 photographs from one STYLE string, 14 on the home page, 0 cut-outs; portraits as 1:1 circles, scenes 16:10 / 4:3 / 3:2 / 21:9 |

## (f) Decoration — lines / dots / labels / numbering, 成品

| Decoration | QuSS | 成品 |
|---|---|---|
| Arc rule + dot terminator | thin 1px curved line (~110px x ~400px bounding box), small filled circle (~6px) at one end | 1px `#6E5C4C` curve, 112 × 400px, dot `r=3.5px`; left arc dot top, right arc dot bottom (diagonally opposed) |
| Horizontal 3-line + dot cluster (top-right, persists through scroll) | 3 horizontal hairlines of increasing length (~60/100/160px) with a dot at one end, rotated vertical label beside it | T3 rail: `fixed; right: 28px`, hairlines **56 / 96 / 152px**, 8px apart, dot at the longest line's left end; rotated label `ENQUIRE ↗` → `PAGE TOP ↑` at 60% depth. Hidden <960px |
| Section label hairline | short horizontal rule (~45px) before a block of body text | **45px**, 1px `#6E5C4C`, 14px gap before the 0.6875rem label; every home section and every page head |

## (g) Motion — type / duration / delay-stagger / easing / distance, 成品

| Effect | QuSS | 成品 |
|---|---|---|
| Scroll library | none detected: `window.gsap`, `ScrollTrigger`, `AOS`, `jQuery` all `undefined`. Only scripts loaded: GA (`gtag/js`) + one Astro-bundled site script. | `sp-scroll` only (CSS scroll-driven + IntersectionObserver fallback); no GSAP / AOS / Lenis / jQuery, no hand-written scroll listener |
| Observed motion | not isolated within the time budget (no obvious large jump between static screenshot and scroll position — likely subtle/CSS-only or none). Do not copy a specific easing/duration from this site; treat as unconfirmed. | **Timings NOT attributed to the reference** — sp-scroll defaults: `sp-parallax` hero photo half `--sp-par: 10%` + full-bleed band 8% (mobile 6%); `sp-stagger` + `sp-reveal--up` 0.8s `cubic-bezier(.23,1,.32,1)`, 24px, 0.12s step; `sp-reveal--wipe` 1.1s `cubic-bezier(.77,0,.175,1)` with clip on the child img. Hero: no reveal |
