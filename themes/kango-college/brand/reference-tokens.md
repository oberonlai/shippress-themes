# Reference tokens: J. F. Oberlin University (https://www.obirin.ac.jp/), measured 2026-11-02 at 1440x900

Screens: ref/obirin-first.png, ref/scroll-obirin-1800.png (three-cell search band), ref/scroll-obirin-2700.png (interview rows), ref/scroll-obirin-4500.png (dated event rows).
Only values and descriptions are recorded. No asset, text or logo is copied.

## (a) Colour
| Role | Hex | Share |
|---|---|---|
| Base page | #F7F6F5 | ~45% |
| Alt band (warm grey) | #EFEAE6 | ~35% |
| Ink / text | #070B0D | text |
| Accent (deep wine) | #941E57 | ~6% (icons, links, one notice card) |
| Hero photo | blue sky + grey concrete | first-screen saturated share 26.7% (sky), accent card 9% |
Soft pink radial glow (#F3E6EA to transparent) sits behind some sections.

## (b) Type
- Family: YakuHanMP + Noto Serif JP, serif everywhere (headings and body), weight 400, no bold.
- Body 16px / 25.6px, letter-spacing normal. h1 32px / 51px. Section titles about 24-28px, light. Nav 13px.
- Event dates: serif numerals about 56px, tight (11.12), with small weekday superscript.
- Latin tagline in hero: about 22px, letter-spacing about 0.08em, white, centred.

## (c) Spacing
- Section padding 140px top, 140-200px bottom on long blocks. Full-width bands, content columns inset ~144px left.
- Three-cell band: 3 equal columns, 1px vertical dividers, cell height ~560px, padding ~40px.
- Header 96px tall, transparent over the hero, flat warm fill after scroll.

## (d) Radius / border / shadow
- Radius 0 on cards and bands; pills (location chip) radius 999px with 1px hairline; round Ø24 arrow buttons.
- Hairlines 1px #070B0D at low opacity; link underline 1px full ink under "View details".
- No shadows except the floating notice card (flat, wine fill, 300x400).

## (e) Imagery - IMAGERY: photo
- Hero: one full-bleed photograph (architecture, 16:10), dark veil ~15%, nothing cropped into shapes.
- Interview portraits: 88x88 square thumbnails, 1:1, radius 0, beside two-line quote + dash name.
- Event thumbnails: 250x118 banner crops, right-aligned in each row.
- The only non-photo art: three flat wine geometric glyphs (grouped shapes) at ~96px in the search cells.

## (f) Ornament
- Ghost bullet dot (6px, ink) before each dated row.
- Three flat geometric glyphs (triangle / circle / square groupings, bars, four circles) in accent wine, centred in cells.
- Round Ø24 outline arrow at row ends, wine.
- Tag chips: 1px hairline box, 12px text, white fill; location pill with small map-pin.

## (g) Motion
- GSAP + ScrollTrigger (bundled in app.js) for reveals; Splide for carousels (interview rows slide sideways with a round next button).
- Hero: slow load fade of the tagline; header turns from transparent to flat fill after the fold.
- Rows fade up about 20px as they enter (ease-out, about 0.8s).
