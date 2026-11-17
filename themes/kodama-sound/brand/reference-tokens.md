# Reference tokens (measured, 1440x900, getComputedStyle + pixel samples)

Main reference: https://ondocollective.jp/ (a creative collective's site; photo-led, quiet, one hand-drawn line motif).
Secondary: https://www.nsl-jp.com/ (a film/TV music and sound-effects house; structure only).

## (a) Colour
| Role | Hex | Where | Share |
|---|---|---|---|
| Ground (deep) | #003C26 | intro + index bands | ~30% of the scroll |
| Ground (pale) | #F3E5DE | process / shape bands | ~35% |
| Photo ink | #1F211F, #A5ACAA, #57716A | hero photo grading (green-grey, desaturates on scroll) | rest |
| Text on dark | #FFFFFF | all copy | - |
| Text on pale | #003C26 | all copy | - |
| Line accent | rgba(255,255,255,.7) hairline scribble | hero overlay | <2% |
NSL: ink #291C16 text on white, panel #F4F3F1 (tinted grey) behind posters, mustard #E9B03E hero illustration (not used).
First screen saturated share (HSL s>0.35, 0.15<l<0.85, downsampled): Ondo 27%, once the blurred green video frame plays; after the scrub it is grey-green (<8%).
Our translation: deep aubergine-black #1D1A21 ground, mauve #95859C accent (S about 12%), pale #EFEBF0 band, ink #17141A. First-screen saturated share target <=12%.

## (b) Type
- Display: "Ondo" custom wide-tracked light caps / lowercase serif-ish display. H1 48px, ls -0.02em, lh 1.2; section sub-titles 59.7px, ls -0.02em, lh 1.2, weight 400, uppercase.
- Body Latin: Poppins 400, 14-16.5px, ls -0.03em, lh 1.2 (labels) ; JP body Gen Interface JP 14.4/16.5px lh 1.85-2.1, ls .03em.
- Micro labels: Poppins 11.3px, "01" numbers, tags row; main-title label 14.4px.
- Nav: Poppins 13.4px ls -0.03em uppercase, white.
NSL: Shippori Mincho 600 18px (ls -0.04em) body, 20px titles, 10.5px meta labels; Crimson Pro 20px for "VIEW MORE".
Our type: Instrument Sans (display) + Figtree (body); display 4.5-6rem weight 400-500, ls -0.03em; labels 0.75rem caps ls .12em.

## (c) Spacing
- Section padding: 100-165px top, 205-410px bottom (very loose); container = full width with 24px gutter; text columns start at x 142 or 260; copy column max ~420px.
- NSL rows: 2-col grid 660px each, row height ~205px, gap 30px, top rule 2px rough ink.

## (d) Radius, borders, shadow
- Radius 0 everywhere (photos are plain rectangles). No shadows. Hairlines only (1px white scribble). NSL row top rule 2px rough-edged ink; meta key/value rows with 1px underline.

## (e) Imagery - IMAGERY: photo
Main imagery is photography: blurred macro foliage hero (video loop), close product photos of a printed book (teal on grey), soft-focus botanical. Ratios: intro photo ~0.66:1 portrait-ish at 567x749 flush to the right viewport edge; slivers 184x295 (0.62:1) at screen centre; hero full-bleed 1.6:1. No radius, no masks, no cut-outs. Photos flush to viewport edges, next photo enters from the opposite bottom corner (offset 450px wide at left).
Style: low depth of field, desaturated green-grey grade, grain-free, shot under overcast light.

## (f) Decoration
- One continuous hand-drawn white scribble line (1px, SVG stroke) looping across the hero, with 8-10px solid white dot terminals that travel along it; also repeats faintly at the foot of the hero.
- Circular monogram "O" outline logo top-left (72px) and centred at hero (110px).
- Fixed "+ Sections" micro-nav bottom-right (12px, white), dot indicators.
- Right-aligned stacked tag list flush to the right gutter (12px) beside narrow centre slivers.
- NSL: dark "tab" card fixed bottom-right (dark #291C16, brush edge, 270x60, label + circle arrow); logo + nav fixed bottom bar.

## (g) Motion
- Ondo: Lenis smooth scroll + GSAP ScrollTrigger (scrub true, ease none; start "top top"/"top bottom", end "bottom top"); text enters power3.out 0.5-1s, stagger ~0.08, back.out(1.2) for the dots; CSS transitions cubic-bezier(.22,1,.36,1); mask-position transitions on images; text-roll translate on nav hover.
- NSL: Nuxt, IntersectionObserver adds `.appear` to `.sd` blocks; transition all .6s cubic-bezier(.4,.4,0,1); hover .3s same curve. Fade + short rise.
