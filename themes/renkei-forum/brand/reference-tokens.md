# Reference tokens (measured with getComputedStyle, Chrome headless 1440×900, 2026-10-27)
Main reference: https://corekara.co.jp/scratch/20260826_conference/ (S5-Style listing; a one-day online conference landing page, Vite SPA + GSAP/ScrollTrigger + Lenis). Values only; no assets, text or logo copied.

## (a) Colour
| Role | Hex | Where | Share of hero first screen / whole page |
|---|---|---|---|
| Ground (dominant) | `#000000` | body, hero field, concept, timetable | 46 % first screen (dark px), ~70 % page |
| Accent (electric blue) | `#0C62ED` | hero top band 201 px, marquee text, CTA pill, highlight bars, speakers section, labels, wipe bands | 27 % first screen (saturated px incl. gradient), ~15 % page |
| Panel | `#262626` | nav capsule, session cards, sponsors strip, FAQ | ~12 % page |
| Text | `#FFFFFF` (secondary `rgba(255,255,255,.6)`) | all copy on black; black `#000` on blue band | — |
| Hairline | `#4C4C4C`, `rgba(255,255,255,.14)`, 1px blue rule `#0C62ED` | card borders, section dividers | — |
| Object | `#E0E0C0`-ish bone/clay (rendered 3D object) | hero centre emblem | 14 % light px |
Counts of computed colours: white 2568, black 540, blue 327, #262626 269, white-60 % 240, #4C4C4C 141.

## (b) Type
- Display: `dnp-shuei-4gob-std` (heavy gothic/brush display, falls back to Yu Mincho), weight 700, **negative tracking −0.05em**, line-height 0.9: H1 two lines 45px + 68.4px (lh 40.5), H2 "section" 54px / lh 48.6 / ls −2.7px. Giant vertical-writing label ≈ 100px+ (`writing-mode: vertical-rl`).
- Body/UI: `Gen Interface JP` sans, 16px, weight 400 (CTA 16.2px/500), lh normal for UI, session title 23.4px / lh 32.76 / ls 1.17px (0.05em); session body ≈ 14.4px lh 1.5; small captions 9–10.8px; subtitle 12.6px ls −0.05em; labels (Sec.01, 01/02/03) 12–13px.
- Marquee text 99px, bold grotesk, caps, blue on black (low contrast: reads as a texture). Case: tagline Latin sentence case, marquee uppercase.

## (c) Spacing
- Page gutter **45px** each side (header, hero, strips, cards); max content = full width; session list x 271 → 1395 (1124px) with 225px sticky left rail.
- Section padding: meta strip 45/45; application block 60/60; hero top band 201px high (18px inner top); big sections are 900px (100vh) tall frames; text-FAQ column 810px centred.
- Card: 325px high, three columns 72 | 816 | 234; row gap ≈ 15px; sticky `top:45px`.

## (d) Radius / border / shadow
- Pills: nav capsule `#262626`, radius 999px, 409×50; CTA 238×50 radius 999px, padding 9px 40.5px; hero menu pills radius 999px, 1px outline, 12.6px.
- Ellipse/dome containers: `border-radius: 50%` black ellipse 1350×315 (speakers heading), dome top (≈ 1700px circle clipped) for timetable intro. Cards radius 0, 1px `#4C4C4C` rules between cells. No shadows (flat).

## (e) Imagery
- **IMAGERY = photo.** Main images are photographs: speaker portraits (cut-out head-and-shoulders, desaturated B/W, contrasty studio light, plain-neutral edge) in 234×~140–340px tiles, ratio ≈ 1.2:1 – 0.9:1, no radius, flush against a 1px grid; one rendered hero object (bone-white clay-embossed glyph, 717×718, ratio 1:1, soft side light, centred, overlaps the blue band by ~25px; ghosted copies of the glyph left/right at ~6 % white on black). Sponsor logos strip (grey-white monochrome).
- Positions: hero emblem centre 612px wide (42 % width); speaker row full-width (7 portraits) inside the ellipse; session portrait right column 234px (16 % width).

## (f) Decoration
- Thin 1px blue ellipse outline (≈1440×700) crossing the hero; ghost giant glyphs; blue highlight rectangles behind each text line of headings (inline `background:#0C62ED`, black text); vertical-writing paragraph columns (6 columns × 18px, lh 1.9); numbered labels "01/02/03" (blue 11px) with pill tags (`#262626`, blue 20px text, radius 999); tiny blue dash between steps (24×2px); "Sec. 01" blocks with time ranges.

## (g) Motion
- Intro: black screen ~1.2s → blue rectangle wipes in (≈0.9s power3/4.inOut) → hero settles; total ≈ 3.5s.
- Marquee (hero top/bottom, 99px text): JS-driven, ≈128 px/s, linear (`ease:none`), two copies.
- Scroll: GSAP ScrollTrigger scrub 0.55–0.8, `ease: none`; pinned sections (`top top`, end `+=1.0–2.0 viewport heights`); elements power2/3.out 0.6–1.0s on enter; Lenis smooth scroll; CSS easings cubic-bezier(.65,0,.35,1) and (.22,1,.36,1).
