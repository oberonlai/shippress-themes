# Reference tokens (measured, main reference: Zen & Bed first screen + scroll, https://zenandbed.com/)
Only values and descriptions. No assets, text or logos are copied. Source files read: bundle.css, bundle.js (GSAP 1.x + ScrollMagic + Slick + textillate).

## (a) Colour (first-screen share measured on ref/zb-first.png, 144x90 sample)
| Role | Hex | Share |
|---|---|---|
| Ink / dark photo ground (hero, deep teal-black) | #0B1512 .. #26352F | ~57% of first screen |
| Mist mid-tone of the photograph | #6F8782 | ~35% |
| Paper (every section after the hero) | #FFFFFF | 100% of the scrolled page ground |
| Hairline grey | #E4E4E4, #BFBFBF | rules only |
| Accent: single yellow reserve disc | #E8DA39 | 0.2% of first screen (saturated share 0.2%) |
| Text | #000 on paper, #FFF on photo (with 0 0 10px rgba(0,0,0,.4) shadow) | |
Saturated share: 0.2% first screen, 0.5-2.1% on scrolled screens. The one saturated colour is a tiny disc.

## (b) Type
Latin: EB Garamond (letter-spaced caps for the title, wide tracking ~0.3em on the light lines). JP: Hannari (light Mincho). Lead 20px / lh 2 (15px on small), body 14-16px, headings 28px, one display 90px. All text centred or short stacked lines of 3 on the lower right of the hero, wide tracking, lh ~2.2. Weight 400 only.

## (c) Spacing
Sections 80px between activity blocks; activity column 76% wide centred; room blocks padding 5.33% side; headline margin-bottom 40px (70px on stay); reserve band padding 50px 0. Fixed header 100% wide.

## (d) Radius, border, shadow
Radius 0 on photos; one round photo (circle) and round buttons. Borders: double hairline 1px #E4E4E4 top and bottom of a 4px-high band behind section headings (`.headline:before`). No box shadow except text-shadow on photo copy.

## (e) Imagery - IMAGERY = photo
Documentary photographs, dark and desaturated teal, slightly underexposed, film feel. First screen: full-bleed two-photo double exposure (tea bowl held in two hands overlaid with a misty mountain and a roof) cross-fading. Later: 4:3 landscape photos at ~46% width with a left text column of 3-4 short lines; one circle-masked small photo (about 150px, ~11% width) under the lines; tall 3:4 room photos; 1.5:1 gallery strip (Slick) with arrows and dots. A thin yellow line drawing of the temple gate sits under the story as an illustration device (own drawing to be made, not copied).

## (f) Decoration
Fixed header slides in after the hero (white, 100% width, translateY(-100%)->0, opacity .75s). Round yellow reserve disc 60px at top-right. Hamburger of two 30x1px lines. Vertical "SCROLL" label bottom-right with a 1px line and a small arrow. Section heads on the double hairline band. Small round black back-to-top disc bottom-right (40px).

## (g) Motion
- Header: class toggle show-header at hero bottom +400px; opacity .75s cubic-bezier(.455,.03,.515,.955), transform .7s; Scene triggerHook onLeave.
- Text blocks (logo, lead, note): opacity 0 -> 1, scale 1.05 -> 1, 1s cubic-bezier(.42,0,.58,1); class is-fire added when element reaches triggerHook (.9 for concept), reverse:false (once).
- Stacked lines: opacity 0 -> 1 and translate(10px,10px) -> 0, 1s, delay .2s .4s per line; activity photo blocks the same with delay .5s.
- Hero title lines: textillate fadeInLeftUp, initialDelay 1300/1500/1700ms, delayScale 1.
- Anchor scroll: GSAP scrollTo 1s Power2.easeInOut.
- Slideshow: Slick speed 700ms, autoplaySpeed 4500, ease cubic-bezier(.25,.1,.25,1), dots and arrows.
- Colour flip of the menu lines (white / black) via is-overHeros / is-enterAbout classes.
