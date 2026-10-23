# Reference tokens — QuSS (https://quss.riken.jp/), measured via Playwright/getComputedStyle at 1440x900 unless noted

Time-boxed (stage 1, ~6 min browser budget). Values marked **approx** are read from the screenshot, not `getComputedStyle`. 成品 (final theme) column left blank for stage 2.

## (a) Colour — hex / area %, 成品

| Role | QuSS hex | Area % (first screen) | 成品 |
|---|---|---|---|
| Ground | `#F0F0EE` (rgb 240,240,238) | ~85% | — |
| Ink (text/wordmark) | `#000000` | ~10% | — |
| Photo accent (sky/sea, inside circle crop only) | approx `#4FA8D8`–`#8FC6E6` range | <5%, confined to one ~370px circle | — |
| Pill bar fill | `#15130F`-ish near-black (approx, from screenshot) | <2% | — |

## (b) Type — family / size / weight / line-height / letter-spacing / case, 成品

| Element | Family | Size | Weight | Line-height | Letter-spacing | Case | 成品 |
|---|---|---|---|---|---|---|---|
| Body / default | "BIZ UDPMincho", serif | 14px (0.875rem) | 400 | 22.4px (1.6) | normal | sentence | — |
| Oversized wordmark ("QuSS", repeated mid-page) | Imbue, serif | ~200px measured on one instance (approx 180–260px across instances, hero one is larger, visually ~340px tall cap height) | 400 | tight (~0.9, cropped by overflow) | normal | mixed case as typed | — |
| Headline (h2, "学び、触れ、挑む。") | serif (CJK, likely same stack), underlined per-phrase | approx 52–56px | 600–700 | ~1.2 | normal | — | — |
| Nav / micro-labels (SCROLL / PAGE TOP) | sans, rotated vertical | approx 11px | 400–500 | normal | wide (~0.1em, approx) | upper | — |

## (c) Spacing — section padding / container width / column gaps, 成品

| Metric | QuSS (approx, from screenshot at 1440px) | 成品 |
|---|---|---|
| Side margin (hero text start) | ~80px | — |
| Hero wordmark top offset | ~190px from viewport top | — |
| Section vertical rhythm (News pill to Summer School block) | ~160–200px gap (approx) | — |
| Circular photo diameter | ~370px (measured via screenshot proportion) | — |
| Arc flank width either side of circle/COMING SOON block | ~110px arc span, ~400px tall (approx) | — |

## (d) Radius / border / shadow, 成品

| Element | QuSS | 成品 |
|---|---|---|
| Circular photo | `border-radius: 50%` (visual; not confirmed via computed style — selector matched wrong img) | — |
| News pill | fully rounded ends (approx, pill shape) | — |
| CTA "more" button | fully rounded (pill), black fill, white text, ~14px font (confirmed `color: rgb(255,255,255)`) | — |
| Shadows | none observed (flat design throughout) | — |

## (e) Imagery — aspect ratio / mask / overlap / position / width%, 成品

| Image use | QuSS | 成品 |
|---|---|---|
| Hero circular photo | perfect circle crop, ~370px diameter, right-aligned in a text-led section (not full-bleed), flanked by arc rules | — |
| No other photos surfaced in the ~35% of page height captured (archive section photos exist further down, not captured in time budget) | | — |

## (f) Decoration — lines / dots / labels / numbering, 成品

| Decoration | QuSS | 成品 |
|---|---|---|
| Arc rule + dot terminator | thin 1px curved line (~110px x ~400px bounding box), small filled circle (~6px) at one end | — |
| Horizontal 3-line + dot cluster (top-right, persists through scroll) | 3 horizontal hairlines of increasing length (~60/100/160px) with a dot at one end, rotated vertical label beside it | — |
| Section label hairline | short horizontal rule (~45px) before a block of body text | — |

## (g) Motion — type / duration / delay-stagger / easing / distance, 成品

| Effect | QuSS | 成品 |
|---|---|---|
| Scroll library | none detected: `window.gsap`, `ScrollTrigger`, `AOS`, `jQuery` all `undefined`. Only scripts loaded: GA (`gtag/js`) + one Astro-bundled site script. | — |
| Observed motion | not isolated within the time budget (no obvious large jump between static screenshot and scroll position — likely subtle/CSS-only or none). Do not copy a specific easing/duration from this site; treat as unconfirmed. | — |
