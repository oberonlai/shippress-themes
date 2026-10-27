# Reference tokens — www.good2garden.com (measured with getComputedStyle, 1440×900, 2026-10-27)
Only numbers and descriptions; no assets, text or logo copied.

## (a) Colour
| Role | Hex | Share of page | Where |
|---|---|---|---|
| Ground (base) | #F7F6F0 (rgb 247,246,240) | ~70 % | body, About, Works, News, Column |
| Ink (text, rules) | #141811 (green-black) | ~8 % | body text, 1px grid rules, buttons |
| Dark panel | #141811 | ~15 % (service panels, full 100dvh) | Service left half, footer area |
| Hover tint | #EEEEE7 | <1 % | card hover |
| Muted text | #858781 (rgb 133,135,129) | <1 % | Japanese sub-label of section titles |
| Accent | none (only the photos carry colour: leaf green, bark brown, sky) | — | — |
First-screen saturated share (S>0.5, V>0.35, pixel sample of 1440×900 hero): **6.6 %** (all from the photo's bokeh greens). Scrolled sections: 0.9–3 %.

## (b) Type
- Family: neue-haas-grotesk-display (Typekit) → dnp-shuei-gothic-gin-std / yakuhanjp for Japanese. Sans only.
- Hero EN line: 64px (4rem), weight 400, lh 89.6px (1.4), ls 1.28px (0.02em), white. Hero JA kicker above it: 20px (1.25rem), 500, ls 0.05em.
- Section titles: EN 35px / 400 / ls 0.7px (0.02em) + JA sub-label 13px / 400 / ls 1.04px / #858781, placed inline right of the EN word (Works) or stacked and centred (Service).
- About heading 20px / 500 / lh 36px (1.8) / ls 2px (0.1em). Body 15px / 400 / lh 34.5px (2.3) / ls 1.5px (0.1em).
- Card title 15px / lh 27px; card meta 12.8px, tag line 16px; button 17px / ls 0.48px. Nav 15px / 400 white on the photo. Body default 16px / 1.6.
- Case: no uppercase transforms. Section label words are Title Case (Works, Service, Flow, FAQ).

## (c) Spacing
- Section padding-top: About 130px, Works 160px, Service 140px, Others 200px (bottom 160px), Column 100px (bottom 190px), Contact 150px. Almost no bottom padding except Others/Column.
- Container: full width, side gutter 75px; About: image col x75–575 (500px), text col from x728, width 637px. Works: 3-column grid on 1440, each cell 480px with 1px ink rules, cell padding 70px 75px.
- Header: fixed, 75px high, transparent, logo left x24, nav right; drawer menu sticky.

## (d) Radius / border / shadow
- Radius 0 everywhere (photos, cards, buttons are square). Shadow none. Borders: 1px #141811 grid rules between Works cells (right and bottom), underline 1px ink on "View more" button (padding-bottom 12px) and on area labels; phone pill in header: ~1px white-ish outline, radius 9999px, 135×38.

## (e) Imagery
- **IMAGERY = photo.** Real documentary photography: hero is a video (poster still) of a bare hand resting on moss-covered tree bark, soft green bokeh at left, warm side light on the fingers, white shirt cuff entering from the bottom right; deep dark green/black overall. Content images are natural-light exterior photographs, slightly lifted/desaturated, no filters.
- Hero: full-bleed 1440×908, `<video>` muted loop, cover; text bottom-left (left 97px, bottom 42px) in white.
- About: two images — big portrait 500×750 (2:3, radius 0) left at x75 (34% of width), small landscape 260×184 (1.41) floating right at x1105 and aligned ~200px above the text block; text column starts x728 and is offset down ~300px from the big image's top.
- Works cards: images 329 wide, ratio vary 3:4 (0.75), 3:2 (1.5), 2:3 (0.67) inside a fixed-height cell, vertically centred, mixed ratios on one row (the "uneven" rhythm), radius 0, `figure` overflow hidden.
- Service intro: ~6 small photos (≈240×270, 270×55 crops) scattered around a centred title block, pinned to the section edges, overlapping the viewport edges.
- Service panels: 50/50 split, left dark #141811 with centred label + JA line + EN title, right photo 720×900 (full-bleed half), a small 240×? portrait photo overlapping the dark side bottom-centre (x240–480).

## (f) Decoration
- 1px ink grid lines (3-col cells), underlined arrow button (arrow 20×16 icon slides out/in on hover over 0.3s ease cubic-bezier(.445,.05,.55,.95)), small underlined area labels, hashtag meta line in #858781. No dots, badges or numbering on home besides "Service" count.

## (g) Motion
- Hero loader: first ~3s white screen with two centred lines (JA 15px / EN 36px) then the video/hero fades in.
- Reveals (data-scroll-trigger, IntersectionObserver rootMargin 0 0 -20% 0, threshold 0, class `:visible` added once): `fade` opacity 0→1, 1.8s cubic-bezier(.25,.46,.45,.94) (21 elements: headings, body text); `top` translateY(8%) + opacity 0 → 0, 1s cubic-bezier(.165,.84,.44,1); `blur` blur(1em) brightness(1.85) → none, 1.3s cubic-bezier(.165,.84,.44,1); `text` per-character spans translateY(100%) in an overflow-hidden flex line (GSAP); `mask` (12 Works figures): figure overflow:hidden, inner image transitions 0.65s cubic-bezier(.25,.46,.45,.94) (image move/scale inside the frame). No stagger delay on the transitions (delay 0).
- Service: `.top-service__inner` position:sticky top:0 height 100dvh inside a 4950px tall container; a scroll listener maps scroll progress / total to item index and toggles `.active` so panels swap one by one (title/heading opacity, desc 0.5s fade).
- Card hover: background → #EEEEE7 0.3s cubic-bezier(.25,.46,.45,.94).
- Library: custom IntersectionObserver class + GSAP (ScrollTrigger registered) + Splide (column slider) + smooth-scroll lib.
