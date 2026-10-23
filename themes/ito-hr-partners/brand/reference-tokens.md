# Reference tokens — TMG Law Office (https://tmg-law.jp/), measured with getComputedStyle at 1440×900 on 2026-10-23
Numbers and descriptions only. No copy, photos or logo reused. Main reference (80% similarity target). Page height 10264 px.

## (a) Colour
| Role | Ref value | Share of first screen / page | Note |
|---|---|---|---|
| Ground | `#FFFFFF` | ~50% first screen | header, hero, intro, news |
| Warm band ground | `#F6EFE0` (primary-100) | 8.5% first screen; sections service/faq/reason/footer | ours: cool stone, not cream |
| Slate band | `#647582` (surface-700) | 3.5% first screen (topics pill); lawyer band 1385×1266 | ours: muted green-grey |
| Ink / text | `#2A2C33` | ~3% | body and headings |
| Accent | `#DC5310` (primary-600), `#E97F14` (primary-500) | 0.7% first screen | CTA button, tick icons, arrows, vertical labels |
| Hairline | `rgba(0,0,0,.15)` 1px | | card borders, list rules |
First-screen saturated pixels (S>0.5, V>0.25): 3.44%.

## (b) Type
- Family: Noto Sans JP only (body and display), Latin falls to the same face.
- Body 16px / 400 / lh 1.4 (22.4px) / ls 0.04em (0.64px). Para text on content 1.28px ls (0.08em).
- Hero headline ≈ 80px / 700, one line, left, ls ≈ 0.05em; 3 tick tags 22px / 700 beside orange tick icons.
- h2 section: 43.92px / 700 / lh 1.4 (61.5px) / ls 0.08em; intro h2 53.44px / lh 1.4 / ls 0.08em; feature h2 35.28px lh 1.4; sub h2 30.96px; h3 26.64px / 700.
- Small label (EN "Services", "Features", "FAQ"): ~14px, accent colour, above the h2.
- Nav 15px / 700 / ls .08em. CTA 15px / 700 / ls 0.08em (1.2px).
- No uppercase transform. Vertical "Feature 01" label rotated (writing-mode) in accent.

## (c) Spacing
- Header 123px tall incl. 1px bottom rule; side padding 18–40px (full-bleed header, wide layout).
- Section padding ≈ 110px top/bottom (lawyer band 110.8). Reason header padding-top 250px.
- Content container 1304–1360 wide on 1440 (side 40.7px); cards in 3-col grid with ~43px gap (415 wide, 458 pitch). Contents width token 1100 / wide 1200 in the CMS, page overrides to full width.
- Hero photo row gap 40px (desktop) / 10px (mobile).

## (d) Radius, border, shadow
- Radius 10px photos and cards; 4px buttons and small tags; full circle crop on portraits (inside a 10px frame).
- Card border 1px `rgba(0,0,0,.15)`, white fill; no shadow (`none`). Only token shadow `0 0 20px rgba(0,0,0,.25)` unused on home.
- Topics pill: slate fill, radius 10, bar 760×62 floating at the bottom of the first screen, white text, round white arrow disc at right.

## (e) Images
| Image | Ratio | Size @1440 | Radius / mask | Position |
|---|---|---|---|---|
| Hero loop slides (tall portrait cards) | 480:497 (≈0.97) | 480×497, gap 40 | 10px; one slide cropped to a circle inside the card | full-bleed row under the headline, y 414–911, edge to edge, auto-scroll |
| Seminar cards | 1.34 (4:3) | 210×157 inside 637×207 white card | 10px | horizontal slider below hero |
| Intro pair | 1.33 | 420×315 (left, x90) and 630×473 (right, x720, y +75 lower) | 10px | staggered two photos beside heading column, vertical offset 75px |
| Service card top | 2.0 | 415×208 | 4px | 3 equal cards |
| Service icons | 1.0 | 56×56 and 44×44 | none | line icons in accent |
| Reason feature | 1.0 | 540×540 at x832, inside white card 10px | 10px | white cards overlap a fixed blurred photo section |
| Lawyer portraits | 0.97 | 398×411, circle crop | 50% mask | 3-up slider on slate band, name + role below |
- Reason section: `background-attachment: fixed`, cover, blurred high-key office photo behind white feature cards (parallax-like, not transform based).

## (f) Decoration
- Orange check-tick icons (22px round, tint fill) before the 3 hero tags; 1px dotted vertical separators between tags.
- Vertical rotated label "Feature 01/02/03" in accent at the left edge of each feature card.
- Round arrow discs (accent fill 28px, white arrow) at card corners and list rows; pagination dots + two circular arrow buttons on sliders.
- Count tags ("500+", "300+") as large accent numerals with small unit.
- Footer on warm band: large circular emblem, 5-column link list with small accent bullets.

## (g) Motion
- Reveal: IntersectionObserver, rootMargin `0 0 -100px 0`, threshold 0, adds `.is-animated` once; `fadein-up`: opacity 0→1 and translateY(30px)→0, 0.6s `ease` (CSS vars `--mh--fade-duration` .6s, easing `ease`), optional delay 0.1–0.3s. 7 elements on the home (headings, header groups, footer CTA head).
- Hero marquee: Splide AutoScroll, loop, `autoWidth`, gap 40 (10 on mobile), speed 1 px/frame desktop (~63 px/s measured), 0.5 on small; no pause on hover, no drag.
- FAQ slider autoplay 5000ms; lawyer slider drag + arrows.
- Reason section fixed-background parallax (background-attachment: fixed).
- Hover: card image zoom (`u-zoom`) and underline slide (`u-anim-underline`).
