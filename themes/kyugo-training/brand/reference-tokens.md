# Reference tokens: gakuen.toyota-shokki.co.jp (S5-Style entry /11519/), measured 2026-10-27 with Playwright getComputedStyle at 1440×900
Screenshots in `ref/`. Values only; no assets, text or logo copied.

## (a) Colour
| Role | Hex | Where | Area (home, full page) |
|---|---|---|---|
| Main | `#005EB8` | `--clr-primary`: rail tiles, link hover, section ground start | ~15% |
| Gradient partner | `#4299F0` → `#60A0EC` → `#2BA8F0` | linear wash from main to light cyan-blue: hero lower-right wash, About / Data / Interview / Talk full-bleed bands | ~30% of page (bands) |
| Base | `#FFFFFF` (`--bg-clr-body`), `#F7F8F8` (`--bg-clr`), `#F7F7F7` thin grey | page ground, rails, News/School/Curriculum sections | ~45% |
| Text | `#000000` (`--fc-base`), `#838383` secondary, `#FFFFFF` on bands | body, headings | text only |
| Footer | `#3E3E3E` | footer block | ~5% |
| Accent | none used on the home (pink/orange variables exist, unused) | | 0 |
First screen 1440×900 (ref-first.png): saturated pixels (HSV s>0.5) 19.6% (blue wash lower right + right rail tiles), white 15.6% (two 120px rails), dark 12.2% (cap, hair, top fade). Full page saturated 35.4%.
## (b) Type
- Family: Yu Gothic stack (`游ゴシック体, YuGothic, Yu Gothic, sans-serif`) body/headings; Inter 500/600/700 for the English hero line and section English labels.
- Body 16px (1rem) / lh 28.8px (1.8) / 400, ls normal. Nav 16px / 700 / lh 22.4px.
- H2 section title 24px / lh 33.6px / 700 (News, School, Data). Lead statements 28px / lh 39.2px / 700 (School) and 34px / lh 47.6px / 700 / ls 0.68px (About, white on band). Small labels 16px 700 lh 1.
- Hero tagline: Inter ~80px / lh ~80px / 700, three lines, white; JP kicker 18px 500 above. Data numerals: ~100px 700 + small unit 24px.
- No uppercase transform. CSS fluid scale `--fs-sm` clamp(1.2rem…1.4rem), `--fs-md` 1.4–1.6rem, `--fs-lg` 1.6–1.8rem; `--fs-h-lg` 2.2rem.
## (c) Spacing
- Fixed 120px side rails (left white, right white) → content column 1200px at 1440. Inner containers 1080px (padding 90px) and 1020px.
- Section padding: News 120/110, About 120/160, School 150/120, Curriculum 0/155, Data 120/120 (side 60), Interview 0/108. `--verticalSpace` clamp(4.5rem…9rem), `--sideSpace` clamp(2rem…4rem), gaps `--gap-md` 1.6–3.2rem.
- Header: no bar; nav row 16px bold white over the photo top (dark top fade), items separated by 1px hairline dividers, ~54px gaps.
## (d) Radius, border, shadow
- Radius 0 on all photos and cards (square). Round only the circle arrow button (88px, 1px white-60% border). Cards: white, no border, stacked-paper shadow (2 offset copies behind, rotated ~1–2°). No box-shadow on text blocks. Hairlines 1px `#F0F0F0` (`--border-clr`) / white-40% on bands.
## (e) Imagery
- **IMAGERY = photo** (documentary, soft natural light, shallow depth, cool-neutral grade; real people at work: instructor and trainee at a bench, hands on a machine, no staging look). No illustration.
- Hero: 1200×900 (4:3) photo, cover, square, left/right inside the 120px rails, crossfade slideshow of 5 photos; bottom-right 55% × 60% linear-gradient wash (transparent → `#2B9BF0`) over the photo carrying the tagline.
- Card swiper photos: portrait 0.81–0.84:1 (416×515 → 353×419 stacked, each deeper card smaller), square corners, bleeding off the white card's top-left; text panel (white, ~420px) overlapping the photo's right edge by ~120px.
- School block: photo 524×600 (0.87:1) right, text left; Curriculum: wide 1200×~420 photo band with three 153×80 (1.91:1) thumbnails strip below; Interview / Talk: portrait cut-outs on gradient bands (cropped photos, no cut-out silhouettes).
## (f) Decoration
- Vertical writing org name left rail (16px, 700) with logo mark above and vertical copyright below (12px grey). Right rail: hamburger = two 50×2px lines in main; vertical "access" label with pin; main-colour 120×170 tile "download materials"; logo tile bottom.
- Circle arrow buttons 88px with 1px border; "More Detail :" 11px label above underlined 16px link; big translucent ghost numerals "01" on card photos (white, ~60px).
- Stat band: hairline above each stat, numeral huge, unit small, caption 12px.
## (g) Motion
- Hero: Swiper `fade`, speed 900ms, autoplay delay 4000ms, main + thumb swipers synced.
- About: Swiper `cards` effect, speed 300ms, side arrows 36px.
- Hover: `--transition` 0.3s `cubic-bezier(.165,.84,.44,1)` (easeOutQuart) on colour/opacity (logo hover opacity .6).
- Accordion: `Element.animate` height/opacity 200ms ease-out.
- `.js-fadeIn` (+`-up/-down/-left/-right`): opacity 0 + translate 20px → 1, transition 2s opacity/transform, toggled by IntersectionObserver (rootMargin `0 0 -15%`, threshold 0, sets `data-scroll=in`); defined in CSS but no element on the home carries it (inner pages only).
- Back-to-top button appears after 1.5 viewport heights.
