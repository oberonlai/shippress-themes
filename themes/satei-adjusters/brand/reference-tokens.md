# Reference tokens: bright-avenue.jp (S5-Style #12081, measured 2026-10-27, 1440×900, getComputedStyle)
Only values and descriptions. No assets, text or logo copied.

## (a) Colour
| Role | Hex | Area |
|---|---|---|
| Ground | `#F6F6F6` (sections: `#F6F6F6` / `#FFFFFF` alternate) | ~65% of page |
| Ink / body text | `#333333` | ~8% |
| Accent panel (sticky feature half) | `#609AAE` (hover `#598EA1`; right half darker teal ≈`#5A8C9F`) | ~12% of page, 0 in first screen |
| Mauve-grey band (news section ground, wordmark, "gray" half of two-tone headings) | `#AFA3A3` | ~5% |
| Menu button | `#609AAE`, 60×60, radius 5, white 1px inner ring | <0.5% |
| White text on panels | `#FFFFFF`, secondary `rgba(255,255,255,.7)` | — |
First screen: full-bleed pale blue-grey/green photo; saturated share ≈2% (script, S>0.45), blue menu square is the only saturated flat colour.

## (b) Type
| Item | Value |
|---|---|
| Families | JA: YakuHanJP + Noto Sans JP, headings MFW-TBGoPro-Bold (heavy gothic); Latin: Aeonik (geometric grotesk) |
| Body | 14px / lh 1.65 (≈23px) / 400 / ls normal, `#333` |
| Hero statement h2 | 24px / lh 1.35 / 400–bold look, white |
| Section label (h2 small, left column) | 12px / lh 1 / 700 |
| h3 (numbered, underlined) | 18px / lh 1.45 / underline |
| Large section headline (two-tone) | ≈40px (2.5rem) / lh 1.2 / bold |
| Giant wordmark (hero) | 210px Aeonik 500 uppercase, ls −4.2px, lh 0.83, colour `#AFA3A3` metallic gradient |
| Stat number | ≈96px Aeonik bold + 18px unit |
| Nav | 12px / 400; chips 12px; buttons 12px |

## (c) Spacing
Section padding-top 150px; padding-bottom 150–190px (footer recruit 256px). Header padding-inline 40px; header inner full width 1440. Content grid: label column 40→~215px (≈ 1/6), headings column from x≈256, right column from x≈871 (two columns at 50/50 inside 1360). Feature split: left half 554px sticky, right image column 552px wide starting x=721.

## (d) Radius, border, shadow
Image radius 5px (`--image-reveal-radius: 5px`); menu button radius 5px; pill chips radius 900px with `0 1px 1px rgba(0,0,0,.09)` shadow, padding 0 10px 1px, 12px type; outline pill buttons 1px solid ink, radius 900px, padding 0 12px, height ≈30. Hairlines 1px (section top rule `#333` at ~20% on grey, white 40% on panels).

## (e) Imagery
IMAGERY: **photo**. Main images are interior photographs (AI-looking, soft natural window light, plants, timber furniture), pale blue-grey walls, out-of-focus green foreground bokeh in the hero. Sizes: hero full-bleed 1440×900; collage cards 248×155 and 308×193 (1.60:1), portrait 237×397 (0.60:1); feature images 552×449 (1.23:1) object-fit cover, radius 5, clip-path reveal from top (`inset(0 0 100% 0 round 5px)` → full); case thumbnails ≈ 95px high strip. Position: feature images right column x=721 (50% of width, 38% of container), stacked with ≈17px gap before caption.

## (f) Decoration
Numbered underlined h3 ("1. …"), pill chips (3–4 under each service), outline pill button with arrow "→", table-of-contents list in the sticky panel (current item white bold, others 55% white), section label at left with 1px top hairline, huge uppercase wordmark, 45 + unit stat.

## (g) Motion
| Effect | Detail |
|---|---|
| FV | page-load: text/wordmark reveal chain (`is-loading-fv-*`), video/poster handoff; section is 1800px tall and pinned: hero photo shrinks into a scattered card set on scroll (JS, rAF) |
| Image reveal | `data-image-reveal` clip-path inset from bottom → full, 1.3s, ease `cubic-bezier(.87,0,.13,1)`; radius 5px |
| Content reveal | `.is-top-content-reveal-pending` (visibility hidden, opacity 0) → `-active`; buttons/lead fade up |
| Two-tone headline | grey `#AFA3A3` half shifts to ink/white as the block enters (colour sweep) |
| Sticky feature | left 50% panel sticky; TOC highlights the item whose image is in view; panel colour deepens |
| Easings used (counts in CSS) | `.55,.05,.22,.99` ×66 (UI, hovers 0.3s), `.16,1,.3,1` ×56 (reveals), `.87,0,.13,1` ×49 (clips/panels), `.22,1,.36,1` ×19 |
| Menu button | hover-rotate label (text rolls), opacity .3s |
| Library | none global (no GSAP/Lenis/AOS/jQuery); vanilla modules + `canvas.p-top__plane-reveal-canvas` WebGL plane |
