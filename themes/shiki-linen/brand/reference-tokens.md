# Reference tokens — Shiki Linen (measured, values only; no assets copied)

Primary: https://hadawa.jp/ (1440×900, headless Chrome, getComputedStyle). Secondary: https://terada-knit.co.jp/ (decoration and palette only).

## (a) Colour
| Role | Hadawa value | Share of first screen | Ours (Shiki Linen) |
|---|---|---|---|
| Ground | #FFFFFF | ~38% (white margins + text zone) | #FFFFFF, with #F2F1EC bands |
| Text / ink | #000000 | <2% | #1F231B |
| Button | #000000, white text, radius 2px | <1% | ink #1F231B; moss on hover |
| Photo field | mid-tone skin / street, low saturation | ~60% | film-grain photographs, muted |
| Accent | logo gradient peach to brown | <1% | moss #5F6B4E (≤10% of first screen) |
Secondary (Terada): ground #F7F4EC, fill #FCFAF4, thread line #CC9D58, ink #554D46.
Saturated share, first screen: Hadawa ≈ 12% (photos only, no colour blocks). Ours target ≤ 12%: moss appears only on the thread line, tags and the order button.

## (b) Type
- Family: Avenir, then Yu Gothic stack (light humanist sans). Ours: Manrope (display) + Source Sans 3 (body), CJK Noto Sans TC / JP.
- Body 15px, line-height normal (~1.7 effective), letter-spacing normal. Statement lines 18–20px, weight 400, lh ~26px.
- Section heads H2: 28px, weight 200, no tracking, no transform.
- Nav 15.5px weight 400. Button 13.3px, tracking 0.7px, padding 8px 20px.
- Wordmark: letter-spaced thin lowercase, peach-to-brown gradient, 100×18px.

## (c) Spacing
- Fixed white header 66px tall: nav left, logo centred, order button + cart + language right.
- Page gutter 14–72px depending on photo; photos anchor to alternating viewport edges.
- Vertical gap between photo groups 90–200px. Large empty white ground beside each photo.
- Footer: 3 columns from x=144, 32px link pitch, copyright 11px centred.

## (d) Radius, borders, shadow
- Photos radius 0, no border, no shadow. Button radius 2px. Hairlines absent. Quiet.

## (e) Imagery — IMAGERY: photo
- Real photography, documentary and product close-ups of hands, rings and street portraits; soft daylight, slightly desaturated, natural skin.
- Ratios: 0.70 portrait (504×720) at left x=72; 1:1 (461) pinned to right edge x=936; 1.5:1 (792×528) pinned to left viewport edge; pair of 0.64 portraits (403×630) side by side, the right one 225px lower; contiguous strip of 432×550 portrait tiles, 0 gap, neighbours cut by both viewport edges; wide 1.47 photo at 792 (55% width).
- Product shot: ring on a tone-on-tone ground (peach backdrop matching the product colour).
- Hero: two equal-width photo/video panels, 22px gutter, 29px outer margin, 612px tall, under the header.

## (f) Decoration
- Almost none: tiny text link "Learn more" with 1px underline; black rectangular button. Terada: one continuous thin gold thread line sweeping into a big circle; menu icon of dash-dot lines.

## (g) Motion
- Photos: wrapper scale 1.2 → 1 on entering the viewport, 0.5s cubic-bezier(0.6, -0.05, 0.01, 0.9); image opacity transition 0.25s linear.
- Hero image slot cross-fades two photos, 1.2s ease-in-out.
- Hover transitions 0.3s ease-in-out. Library: Gatsby/React runtime; no GSAP / Lenis detected.
