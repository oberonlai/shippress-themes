# reference-tokens.md — asa-ban.com (BAN INOUE, S5-Style, 生活用品･物販 / ファッション). Measured 2026-10-28 by getComputedStyle at 1440×900 (Playwright, headless). Values only; no assets, copy or logo reused.
## (a) Colour (hero slides rotate; area % from screenshot quantize)
| role | hex | where | share |
|---|---|---|---|
| base | #282B33 body (sections paint #33363E) | every section except hero/company-photo/shop | ~75–80% of page |
| text | #DAD6CE (rgb 218,214,206) | body, titles, nav | text only |
| text muted | #8C8C8C | footer address, captions | <1% |
| mid / photo-slate | #7C8A91 (grey-blue wash behind shop info), rows ink #373834 on it | shop-info band | ~5% |
| accent (photographed) | red scarf #6C030B / #8A1B1B + brand seal #C8161D | hero slide 1 only, logo seal, about portrait | hero slide 1 ≈72% saturated; slides 2–3 ≈1–5%; all other screens 0–5% |
| hairlines | rgba(218,214,206,.2) on dark; rgba(55,56,52,.3) on light | rows, buttons | 1px |
First screen is a rotating 3-slide photo; only slide 1 is saturated. Section screens: 0–5% saturated.
## (b) Type
- Family: Lusitana (Latin serif) → "Shippori Mincho" (JP serif) → yakuhanjp; logo = geometric sans wordmark, tracking wide.
- body 15px (0.9375rem), weight 400, line-height 25.5px (1.7), letter-spacing .75px (.05em), no transform.
- h2 section label (About / Company / Shop info / Blog) 20px/600, lh 25.5px, ls .75px — **small label, not display**.
- catch line h3 20px/600, lh 34px, ls 1px; slide title 20px/600 ls 6px **writing-mode: vertical-rl**, padding-left 20px.
- nav 15px/400 ls .75px; button 14px ls .75px; footer address 13px ls 1.3px colour #8C8C8C.
- Max size on page 20px (very quiet; our theme.json must still carry ≥4.25rem display size).
## (c) Spacing
- Header 90px tall, side padding 40px, transparent over hero, hamburger = 2 hairlines 50px wide at right (ease cubic-bezier(.19,1,.22,1) 1s).
- Container padding 0 60px (content 1320 at 1440). Footer top padding 210px 100px 0 50px.
- About section padding 230px top / 210px bottom; company 230px; shop 250px top. Catch → body margin-bottom 90px; body paragraphs gap 20px.
- Grid: 12 col; about text column starts x=877 (≈ col 8), width ~500; company is 50/50 (text 0–728, photo 728–1440, 713×941).
## (d) Radius / border / shadow
- Radius 0 everywhere; no shadows; borders 1px hairlines only (rows 69–79px high, padding-bottom 20px, arrow ">" 6px at right).
- Button = text + ">" with 1px bottom rule rgba(.2), width 120px, padding-bottom 10px; hover = first/second span slide (data-hover-animation).
## (e) Imagery
- **IMAGERY = photo** (film-like documentary photographs: forest, rice terrace at dusk, building, hands with linen; muted, slightly grainy, low contrast, cool-green shadows, dusk magenta sky).
- Aspect/placement: hero full-bleed 1872×1170 (scaled 130% for slow zoom); about big portrait 477×~715 (2:3) at x=60 (33% width); about small landscape 329×220 (3:2) at x=1051 bottom-right (23% width, offset ~140px lower than text); service slide photo 539×359 (3:2) at ~37% width with vertical title beside; service full-bleed backdrop 1368×855; company photo 713×941 (3:4) right half full height; blog 528×702 (3:4) left + 330×221 right + 3 sq thumbs 178×178.
- Mask: alpha PNG mask, mask-size auto 200% → 500%, mask-position top → 100% (5s) = organic reveal (not clip-path). No overlap/negative offsets; images sit on dark, 0 radius.
## (f) Decoration
- Vertical title (vertical-rl) beside photos, 20px ls 6px #DAD6CE; red circular seal 22px in logo; 1px rules; ">" 6px glyphs. No dots, no numbers, no tags.
## (g) Motion
- KV slider: Splide fade, interval 5000ms, speed 3000ms, easing cubic-bezier(.25,1,.5,1); each slide image scale slow-zoom transition 10s linear.
- data-scroll-trigger="top": translateY(8%) + opacity 0 → 0/1, 1.5s cubic-bezier(.165,.84,.44,1), IntersectionObserver rootMargin 0 0 -20% 0, threshold 0, optional data-delay (s).
- "text": per-glyph spans translateY(100%) → 0, GSAP power1.inOut, duration .5, stagger .03.
- "mask": img alpha-mask animation 5s cubic-bezier(.16,1,.3,1) forwards (opacity 0→1 by 20%).
- "blur": filter blur(1em) brightness(1.85) → none, 1.3s cubic-bezier(.165,.84,.44,1).
- Parallax image: GSAP ScrollTrigger scrub 3, y 0 → −element height, start "top bottom" end "bottom top".
- Service: ScrollTrigger pin; title fades in (y 20→0, stagger .1) then horizontally pinned track (xPercent), each slide fades/scale .8 on exit, scrub 1; backdrop mask-size 200→500.
- Lenis smooth scroll (global); header bg/height transition .3s cubic-bezier(.215,.61,.355,1); language links color .3s cubic-bezier(.165,.84,.44,1).
