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
