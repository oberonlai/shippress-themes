# Brand reference — Kotoba Language (draft, stage 1)

Slug `kotoba-language`, adult language school for new arrivals and cross-border teams, type **education** (row b8-5). Archetype split-screen, hero photo-left-text-right, first screen top-bottom-halves, page structure **audience-gateway**, nav split, real photography (high-key). Palette 桑染 `#6E5C4C` as the one muted accent, fonts EB Garamond + Source Sans 3.

Reference (S5-Style education/healthcare category, not used before): **R1 = QuSS (Quantum Science School, RIKEN) https://quss.riken.jp/** (S5-Style https://www.s5-style.com/12066/). Not an exact industry match (youth/academic science summer school, not an adult language school) but closest unused entry in the S5-Style school/education category reachable in the time budget; borrow structure, technique and colour relationship only — no copy, photos, logo or whole-page layout.

Screens: `brand/ref/quss-first.png` (first screen, 1440x900), `brand/ref/quss-part1.png`, `brand/ref/quss-part2.png`. Measurements: `brand/reference-tokens.md` (tok(a)…tok(g); several marked "approx" — time-boxed research, not all values captured with getComputedStyle).

## Signature candidates (pick 2–3 for design-spec, must be obvious)

1. **Oversized cropped display wordmark** — the site name set at ~200px Imbue serif, so tall it bleeds past the top of its own section into the one above (seen twice: hero "QuSS", and a second oversized word cut off at the very bottom of the page). *Ours*: a huge EB Garamond lockup of one keyword ("Kotoba." or similar), cropped by its section edge, at hero open and once more deep in the page (About or Placement section).
2. **Curved bracket/arc rules with dot terminators flanking a centred element** — two thin curved lines (like large soft parentheses, ~380px tall) each ending in a small filled dot, placed either side of a circular photo or a centred line of text. *Ours*: flank the circular placement-path photo (work/settlement/exam gateway) or a centred pull-quote with the same arcs in `#6E5C4C` or ink.
3. **Vertical micro-label rail on the right edge** — a tiny rotated label ("SCROLL ↓", later "PAGE TOP ↑") paired with 2–3 short horizontal hairlines and a dot, fixed to the right edge of the viewport through the scroll. *Ours*: a vertical "ENQUIRE ↗" or language-path label rail, same hairline + dot motif.
4. **Dark rounded pill news/ticker bar** floating at the base of the hero, holding a label + 2 underlined links in one line (overflow clipped on narrow widths). *Ours*: a pill bar for "Next placement evening" / cohort dates.

## Colours

- QuSS: ground `rgb(240,240,238)` (off-white greige) ~85–90% of first screen; ink `rgb(0,0,0)` text/wordmark; the only saturated colour is inside the circular photo (sky/sea blue) — a small circular crop, well under 15% of the first screen. No accent hue outside photography.
- Ours (proposal, for opus): ground off-white/stone (same family as QuSS, not identical), ink `#1E1B18`-ish text, accent 桑染 `#6E5C4C` on arcs, pill, rail and small labels only (≤5%), never a full-bleed field. First-screen saturated pixels target ≤15% (photo only). Roles: main = ink, aux = stone/ground, base = off-white, accent = `#6E5C4C`.

## Recent theme home block order (must differ)

- Daichi Landscapes: hero (photo top-half + staggered white tiles + stone bottom-half w/ info card) → wave band process timeline → …
- Oto Audio: hero (straddled H1 over photo) → line-icon category chips → ink comparison table (3 headphones) → white 3:4 product trio band → listening room → …
- Ito HR Partners: hero (marquee photo loop + slate pill) → pale inset service index → blurred-photo approach cards (vertical "Feature 01" label) → …
- Kaiten Skills: hero (hand-cut frame + blob + leaf CTA, parallax) → intro → 5-step ink-band horizontal timeline (112px numerals) → price panel → …

Kotoba's audience-gateway structure (work / settlement / exam paths) must read differently from these — no vertical timeline, no card-mosaic, no comparison table; lead with the split-screen photo hero and resolve into three named gateway paths, each its own visual weight (not identical 3-up cards).

## Scroll effect candidates (see stage-a.md "捲動手法候選" table)

QuSS: no GSAP / ScrollTrigger / AOS / jQuery detected on the page (checked via `window.gsap` etc. — all false); only script is a site-specific Astro bundle plus GA. Likely plain CSS reveal or a small custom IntersectionObserver inside that bundle — not reverse-engineered further given the time budget. Treat QuSS's motion as unconfirmed/subtle; do not assume a specific easing from it. Use sp-scroll defaults (sp-reveal--up, sp-stagger) rather than copying unverified timing.

## Caveats (time-boxed stage 1)

- Only one reference site captured (budget allowed ~1 before the lane deadline); a second S5-Style candidate was not screenshotted.
- `reference-tokens.md` values are a mix of measured (`getComputedStyle`) and visually-estimated ("approx") — spot-check before locking the design-spec.
- Fill in "成品" (final) columns in reference-tokens.md during/after stage 2 build.

## 成品對應（design-spec 定稿後填，2026-10-24）

| 參考站手法／數值 | 成品對應（Kotoba Language） |
|---|---|
| 超大裁切字標（Imbue ~200px，被區塊邊緣切掉） | **T1**：EB Garamond `clamp(5rem, 15.5vw, 13.75rem)`（1440 時 220px）、`line-height: 0.82`、左齊 80px，外層 `overflow: clip` 高 0.62× 行框。首頁 hero 下半部 `Kotoba.` 被首屏下緣切掉；首頁 block 9 與 About／Courses／Fees／Teachers／Stories／Enquiry 內頁再出現一次（被區塊上緣切） |
| 弧線括號＋端點圓點夾住圓形照片／置中文字（~110×400px、1px、6px dot） | **T2**：inline SVG 112×400px、1px `#6E5C4C`、凸出 26px、dot `r=3.5`（左弧在上、右弧在下），間距 64px（≤782px 時 72×240px／20px）。首頁 block 2 夾 372px 圓形照片 S3、block 5 夾置中 2.75rem pull-quote、block 9 夾置中詢問句；內頁 About／Courses／三條 pathway／Teachers／Levels／Fees／Stories／Enquiry／404 都有 |
| 右緣固定直排微標籤＋遞增細線群（60/100/160px＋dot，SCROLL ↓ → PAGE TOP ↑） | **T3**：`position: fixed; right: 28px`，細線 56/96/152px（間距 8px、`#6E5C4C`、最長線左端 3.5px dot）＋直排標籤 0.6875rem／0.14em `ENQUIRE ↗`，捲到 60% 換成 `PAGE TOP ↑`。全部模板都有，<960px 隱藏（手機首屏不得有直排疊字） |
| 深色圓角 pill 新聞列（近黑、窄寬被裁切） | 首屏下緣的 intake pill：`#15130F`、高 80px、最大寬 712px、白字 0.875rem、放兩個 2026 開課日連結；**≤782px 改成 pill 內兩行，不裁切**（與參考站相反，見 design-spec §6） |
| 底色 `#F0F0EE` ~85% ／ ink `#000000` ／ 飽和色只在照片圓形裁切內 | 底色 `#F2F1EE` ~68%、白面板 ~8%（split hero 需要）、ink `#0D0C0A` ~20%、桑染 `#6E5C4C` ≤5% 只在弧線／細線／標籤／價格前綴、飽和像素只在照片，首屏 6–12%（上限 15%） |
| 全站無陰影、圓角只在 pill 與圓形照片 | 一致：陰影 0、圓角 0（pill 全圓、照片 50%） |
| 45px 區塊標籤短線 | 一致：45px、1px `#6E5C4C`、與標籤間距 14px，首頁每區塊與每個內頁標題都用 |
| 動效：未偵測到函式庫（gsap／AOS／jQuery 皆 undefined） | **不引用參考站的時間與緩動**。改用 sp-scroll 預設：`sp-parallax`（hero 照片半邊 `--sp-par: 10%`、首頁 block 5 全幅帶 8%、手機 6%）、`sp-stagger`＋`sp-reveal--up`（0.8s `cubic-bezier(.23,1,.32,1)`、24px、0.12s 步進）、`sp-reveal--wipe`（1.1s `cubic-bezier(.77,0,.175,1)`，clip 施在子 img）。hero 不加 reveal |
| 字體（BIZ UDPMincho 14px/1.6 本文、serif 52–56px h2、11px 直排 sans 標籤） | EB Garamond（字標／標題／價格）＋ Source Sans 3（本文／UI），zh-TW Noto Serif TC、ja Noto Serif JP（標題 0.75×、行高 1.85）；本文 1.0625rem/1.6、區塊標題 2.75rem/1.12、頁首標題 4.5rem、微標籤 0.6875rem/0.14em。全部用 theme.json fontFace 載入，編輯器與前台同一套 |

成品規格全文：`brand/design-spec.md`（相似度對照表在 §11）。照片與文案全部自製，未取用參考站素材、文字或 logo。
