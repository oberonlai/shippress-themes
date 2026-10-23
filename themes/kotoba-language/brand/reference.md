# Brand reference — Kotoba Language (draft, stage 1)

Slug `kotoba-language`, adult language school for new arrivals and cross-border teams, type **education** (row b8-5). Archetype split-screen, hero photo-left-text-right, first screen top-bottom-halves, page structure **audience-gateway**, nav split, real photography (high-key). Palette kuwazome `#6E5C4C` as the one muted accent, fonts EB Garamond + Source Sans 3.

Reference (S5-Style education/healthcare category, not used before): **R1 = QuSS (Quantum Science School, RIKEN) https://quss.riken.jp/** (S5-Style https://www.s5-style.com/12066/). Not an exact industry match (youth/academic science summer school, not an adult language school) but closest unused entry in the S5-Style school/education category reachable in the time budget; borrow structure, technique and colour relationship only — no copy, photos, logo or whole-page layout.

Screens: `brand/ref/quss-first.png` (first screen, 1440x900), `brand/ref/quss-part1.png`, `brand/ref/quss-part2.png`. Measurements: `brand/reference-tokens.md` (tok(a)…tok(g); several marked "approx" — time-boxed research, not all values captured with getComputedStyle).

## Signature candidates (pick 2–3 for design-spec, must be obvious)

1. **Oversized cropped display wordmark** — the site name set at ~200px Imbue serif, so tall it bleeds past the top of its own section into the one above (seen twice: hero "QuSS", and a second oversized word cut off at the very bottom of the page). *Ours*: a huge EB Garamond lockup of one keyword ("Kotoba." or similar), cropped by its section edge, at hero open and once more deep in the page (About or Placement section).
2. **Curved bracket/arc rules with dot terminators flanking a centred element** — two thin curved lines (like large soft parentheses, ~380px tall) each ending in a small filled dot, placed either side of a circular photo or a centred line of text. *Ours*: flank the circular placement-path photo (work/settlement/exam gateway) or a centred pull-quote with the same arcs in `#6E5C4C` or ink.
3. **Vertical micro-label rail on the right edge** — a tiny rotated label ("SCROLL ↓", later "PAGE TOP ↑") paired with 2–3 short horizontal hairlines and a dot, fixed to the right edge of the viewport through the scroll. *Ours*: a vertical "ENQUIRE ↗" or language-path label rail, same hairline + dot motif.
4. **Dark rounded pill news/ticker bar** floating at the base of the hero, holding a label + 2 underlined links in one line (overflow clipped on narrow widths). *Ours*: a pill bar for "Next placement evening" / cohort dates.

## Colours

- QuSS: ground `rgb(240,240,238)` (off-white greige) ~85–90% of first screen; ink `rgb(0,0,0)` text/wordmark; the only saturated colour is inside the circular photo (sky/sea blue) — a small circular crop, well under 15% of the first screen. No accent hue outside photography.
- Ours (proposal, for opus): ground off-white/stone (same family as QuSS, not identical), ink `#1E1B18`-ish text, accent kuwazome `#6E5C4C` on arcs, pill, rail and small labels only (≤5%), never a full-bleed field. First-screen saturated pixels target ≤15% (photo only). Roles: main = ink, aux = stone/ground, base = off-white, accent = `#6E5C4C`.

## Recent theme home block order (must differ)

- Daichi Landscapes: hero (photo top-half + staggered white tiles + stone bottom-half w/ info card) → wave band process timeline → …
- Oto Audio: hero (straddled H1 over photo) → line-icon category chips → ink comparison table (3 headphones) → white 3:4 product trio band → listening room → …
- Ito HR Partners: hero (marquee photo loop + slate pill) → pale inset service index → blurred-photo approach cards (vertical "Feature 01" label) → …
- Kaiten Skills: hero (hand-cut frame + blob + leaf CTA, parallax) → intro → 5-step ink-band horizontal timeline (112px numerals) → price panel → …

Kotoba's audience-gateway structure (work / settlement / exam paths) must read differently from these — no vertical timeline, no card-mosaic, no comparison table; lead with the split-screen photo hero and resolve into three named gateway paths, each its own visual weight (not identical 3-up cards).

## Scroll effect candidates (see the scroll-effect candidates table in stage-a.md)

QuSS: no GSAP / ScrollTrigger / AOS / jQuery detected on the page (checked via `window.gsap` etc. — all false); only script is a site-specific Astro bundle plus GA. Likely plain CSS reveal or a small custom IntersectionObserver inside that bundle — not reverse-engineered further given the time budget. Treat QuSS's motion as unconfirmed/subtle; do not assume a specific easing from it. Use sp-scroll defaults (sp-reveal--up, sp-stagger) rather than copying unverified timing.

## Caveats (time-boxed stage 1)

- Only one reference site captured (budget allowed ~1 before the lane deadline); a second S5-Style candidate was not screenshotted.
- `reference-tokens.md` values are a mix of measured (`getComputedStyle`) and visually-estimated ("approx") — spot-check before locking the design-spec.
- Fill in the "Built" (final) columns in reference-tokens.md during/after stage 2 build.

## Built mapping (filled after the design-spec was locked, 2026-10-24)

| Reference technique / value | Built equivalent (Kotoba Language) |
|---|---|
| Oversized cropped wordmark (Imbue ~200px, cut by the section edge) | **T1**: EB Garamond `clamp(5rem, 15.5vw, 13.75rem)` (220px at 1440), `line-height: 0.82`, left-aligned at 80px, outer `overflow: clip` at 0.62× the line box. On the home hero the lower half of `Kotoba.` is cut by the first-screen bottom edge; it appears again on home block 9 and on About, Courses, Fees, Teachers, Stories and Enquiry (cut by the section top edge) |
| Curved brackets plus end dots flanking a circular photo or centred text (~110×400px, 1px, 6px dot) | **T2**: inline SVG 112×400px, 1px `#6E5C4C`, bulge 26px, dot `r=3.5` (left arc dot on top, right arc dot on the bottom), gap 64px (at 782px and below: 72×240px / 20px). Home block 2 flanks the 372px circular photo S3, block 5 flanks a centred 2.75rem pull-quote, block 9 flanks a centred enquiry line. Inner pages About, Courses, the three pathways, Teachers, Levels, Fees, Stories, Enquiry and 404 all have it |
| Fixed vertical micro-label on the right edge plus a growing hairline cluster (60/100/160px plus a dot, SCROLL down then PAGE TOP up) | **T3**: `position: fixed; right: 28px`, hairlines 56/96/152px (8px apart, `#6E5C4C`, 3.5px dot at the left end of the longest line) plus a vertical label at 0.6875rem / 0.14em reading `ENQUIRE`, swapping to `PAGE TOP` at 60% scroll. Present on every template, hidden below 960px (the phone first screen must not stack vertical type) |
| Dark rounded pill news bar (near-black, clipped when narrow) | Intake pill on the first-screen bottom edge: `#15130F`, height 80px, max-width 712px, white type at 0.875rem, two 2026 intake-date links. At 782px and below it becomes two lines inside the pill and is not clipped (the opposite of the reference; see design-spec section 6) |
| Ground `#F0F0EE` ~85% / ink `#000000` / saturated colour only inside the circular photo crop | Ground `#F2F1EE` ~68%, white panel ~8% (the split hero needs it), ink `#0D0C0A` ~20%, kuwazome `#6E5C4C` at most 5% and only on arcs, hairlines, labels and the price prefix. Saturated pixels only in photographs, first screen 6–12% (cap 15%) |
| No shadows site-wide; radius only on the pill and circular photos | Same: shadow 0, radius 0 (pills fully round, photos 50%) |
| 45px section-label hairline | Same: 45px, 1px `#6E5C4C`, 14px gap before the label, on every home section and every inner-page title |
| Motion: no library detected (gsap, AOS and jQuery were all undefined) | Timings and easing are not taken from the reference. sp-scroll defaults: `sp-parallax` (hero photo half `--sp-par: 10%`, home block 5 full-bleed band 8%, phones 6%), `sp-stagger` plus `sp-reveal--up` (0.8s `cubic-bezier(.23,1,.32,1)`, 24px, 0.12s step), `sp-reveal--wipe` (1.1s `cubic-bezier(.77,0,.175,1)`, clip on the child img). The hero has no reveal |
| Type (BIZ UDPMincho 14px/1.6 body, serif 52–56px h2, 11px vertical sans labels) | EB Garamond (wordmark, headings, prices) plus Source Sans 3 (body and UI). zh-TW uses Noto Serif TC and ja uses Noto Serif JP (headings at 0.75×, line-height 1.85). Body 1.0625rem/1.6, section headings 2.75rem/1.12, page-head headings 4.5rem, micro-labels 0.6875rem/0.14em. All loaded via theme.json fontFace, the same set in the editor and on the front end |

Full built spec: `brand/design-spec.md` (the similarity table is in section 11). Photographs and copy are original; none of the reference site's assets, text or logo were used.
