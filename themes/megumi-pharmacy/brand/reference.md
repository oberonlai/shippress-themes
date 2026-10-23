# Reference — Megumi Pharmacy (draft, stage 1 research; "Ours" columns filled in design stage)

Only reference (80% similarity target): **R1 = Itoh Kampo Pharmaceutical, https://www.itohkampo.co.jp/** — S5-Style category 学校･教育･医療･福祉 / 美容･健康. Not used by earlier themes (checked against themes/*/brand/reference.md). Measurements: `reference-tokens.md`. Screens: `ref/itoh-first.png`, `ref/itoh-sheet.png`, `ref/scroll-itoh-*.png`. Candidates rejected: fukushi.gifu.jp and recruit.haruokakai.or.jp (site firewall blocked our headless browser; not bypassed), southern-hills.ed.jp (same visual family as Kaiten Skills).

| # | Signature technique (R1) | Shape / composition / position | Ours (成品對應, see design-spec.md) |
|---|---|---|---|
| T1 | Fixed full-bleed photograph as the page's backdrop; hero copy (3 lines, white, left, vertically centred, wide tracking) rises in line by line; scrolling content (intro text, then white sections) slides over the pinned photo | photo `position:fixed` 100dvh; intro text 548px column centred over it, white, 1px white outline button | **Home `front-stage`**: one tall full-bleed Cover (P01, `sp-parallax` 8%/6%), part A 100svh with 3 white Literata lines left + info bar, part B 645px intro (padding 109/37/120) + white outline button r7.5 on the same photo; white section starts flush below. Header 87px transparent, 60px `#8A7070` circle fixed right. Inner pages: T1-page stage (62svh photo + white title, parallax) on all 9 inner pages; home `front-visit` closes on a parallax photo. |
| T2 | Portrait link cards with the label sitting inside the image bottom-left, hover zoom | 3 cards 452×589 (≈0.77), radius 7.5, gap ~40 | **Home `front-ways`**: 3 cards aspect 0.77, r7.5, gap 40, label Literata 1.75rem + 30×18 `#8A7070` pill inside bottom-left (padding 51/37), hover 1.07 (P02–P04). Also Services (3), People (6 portraits), Stories (3 story cards); Shop cards keep r7.5 + hover 1.07. |
| T3 | Numbered 01–05 index rows with hairlines and tiny round arrow pills beside one tall portrait photo whose neighbours peek at the edges | rows 78px, photo 338×450 radius 7.5 at right 61% | **Home `front-process`**: `#F4F4F4` panel inset 15px r15, five `core/details` rows 01–05 (78px, 1px `#DDD`, index 15/500, title 18.75, accent pill, row 01 open with accent underline, .25s), P07 338×450 r7.5 at 58% + P08 peeking cut by the window edge. Also About (history), Prescriptions, Medicine reviews, Vaccinations, Visit. |
| T4 | One rounded band (radius 37.5) inset 15px from viewport edges holding a magazine block; white notched panel inside | band 1410×811 | Not used (saturated yellow band; row forbids an accent field). Its ~12% share goes to the `#F4F4F4` T3 panel. |

Palette (R1): ground `#FFFFFF`, text `#383736`, panel `#F4F4F4`, accent `#79B121` (≈1–2%), band `#F6BB37` (not borrowed). First-screen saturated pixels ≈1%. Ours: low-chroma ground, `#8A7070` accent only on small areas.

Scroll: IntersectionObserver fade (1s, cubic-bezier(.33,1,.68,1), 14px up), per-line hero rise with skew (1.2s spring), fixed backdrop. See `ref/scroll-itoh-*.png`.

## 成品對應 (design stage, 2026-10-24)
- Palette: `#FFFFFF` / `#383736` / `#F4F4F4` / `#DDDDDD` exactly as R1; accent `#8A7070` (row 紅消鼠) takes R1 `#79B121`'s roles and 1–2% area; yellow band dropped. First-screen saturation target ≤ 4% (cap 15%).
- Type: Literata (display, R1 Momochidori role) + Public Sans (body, R1 Ryo Gothic role); sizes/line-heights/tracking from `reference-tokens.md` (b), see design-spec §3.
- Motion: R1 fixed backdrop → `sp-parallax` (stage, visit, inner stages); R1 `.inview.-fadeIn` → `sp-reveal--up` with `--sp-dur:1s; --sp-ease:cubic-bezier(.33,1,.68,1); --sp-dist:14px`; R1 delayed link fade → `sp-stagger`. Hero line rise not reproduced (no hero animation rule).
- R1 NEWS RELEASE block → home `front-notices` (Latin uppercase label + hairline rows with date / chip / title / pill).
- Full comparison: design-spec.md §9 similarity table.
