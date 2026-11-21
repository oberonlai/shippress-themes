# Reference tokens (measured, 1440 x 900, getComputedStyle)

Reference: https://www.baika-kindergarten.ed.jp/ (S5-Style entry, kindergarten; early-childhood education). Measured values only; no assets, copy or logo reused.

## (a) Colour (reference -> our translation)
| Role | Reference | Area | Our value |
|---|---|---|---|
| Accent (rail, buttons, top border) | #E62E8B / #F678B6 | ~7% of first screen | moss #6A7A52 (rail 4%, buttons only) |
| Wash ground (about band) | #FBE9E9 | 2547px tall band | mist #E8EDDF |
| Page ground | #FFFCEF | most of page | cool paper #F7F8F3 (not cream) |
| Header / panels | #FFFFFF | header 74px | #FFFFFF |
| Text | #4F4D4D | - | ink #2E3328 |
| Soft secondary heading | #F187BD | section h2 | sage #9AA784 |
Saturated share (HSL s>0.35) of reference first screen incl. skin tones in the photo: ~25%; UI chrome alone ~7%. Ours target <=8%, hard max 15%.

## (b) Type
Zen Maru Gothic (rounded gothic) 400/500. Body 16/28px. Hero line 40/56px ls 1.6px weight 500. Section H2 60/78px ls 7.2px (very wide tracking). Card H3 26/33.8px ls 2.6px. Nav 14px. Ours: Fraunces (display, light/regular) + Source Sans 3; CJK Noto Serif TC/JP.

## (c) Spacing
Header 74px (white, padding-right 128px for the rail). Fixed right rail 70px wide, 4 stacked tabs of 225px. Content container ~1240px (x 100-1340). Section padding ~160px top / 100px bottom. Card row height 274px, gap 44px.

## (d) Radius, borders, shadow
Cards radius ~20px; one corner scooped (inverse) 50px to hold a 70px round arrow disc. Buttons radius 100px, padding 20/35/20/25. Vertical heading tab: radius 0 0 50px. No shadows; flat colour fills.

## (e) Imagery
IMAGERY: photo. Documentary colour photographs of children at close range, high-key, soft daylight, shallow depth. Ratios: hero full-height window with one big rounded top-left corner; programme cards = flat coloured panel 1/3 + two abutting photos (each ~372x274, ~1.36:1); about cards ~580x435 (4:3) with a scooped lower-right corner; admissions photo a blob mask (organic) overlapping a white panel. Small hand-drawn colour stickers (shoes, slide, notebook) at card corners are illustration, minor.

## (f) Decoration
White hand-drawn chalk scribble (flowers) over the hero photo, ~520px wide at upper centre-right; pink 8px dot at left; scalloped cloud foot with petals under the hero; wavy green band edge before admissions; news card (white, r15) docked bottom-left of hero, 520x105, label left + three dated rows; speech-bubble pill label above section heads.

## (g) Motion
GSAP 3.13 (+ScrollTrigger style `js-scroll-active` class toggled per section) for section reveals: fade + ~30px rise, panels on cards fade after photos. CSS transitions 0.6s var(--ease-out-quint) = cubic-bezier(.22,1,.36,1) on transform; 1s ease-out-expo cubic-bezier(.16,1,.3,1) on hero; MoveTo smooth anchor scroll 800ms easeOutQuart; hero is a slider with cross-fade.
