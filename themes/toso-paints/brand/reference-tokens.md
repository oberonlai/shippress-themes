# Reference tokens (English only; measured with getComputedStyle at 1440x900, 2026-11-10)
Main reference: https://open-rise.jp/ (S5-Style gallery, category buildings). Secondary: https://ffpfredrik.com/ja-jp/ (gallery, category goods / shops). Only values and descriptions are recorded; no assets, copy or logos are reused.

## (a) Colour (Open Rise, first screen sampled)
| Role | Hex | Share |
|---|---|---|
| Ground (all sections after the hero) | #121418 | ~100% of the scroll area, dark ink-blue |
| Raised panel (concept chapters) | #20222A | chapter left panels |
| Text | #FFFFFF (body at ~80% alpha) | type only |
| Photo mid-tones (dusk sky, concrete) | #D0D0D0 / #B0B0B0 / #404040 | first screen ~90% photo |
| Accent: warm window light | ~#D9A66A | <2% (inside photo only) |
First-screen saturated share (s>0.5, v>0.35): 1.3%. Fredrik (secondary) is the opposite, ~85% saturated coral/mint, so only its structure is borrowed, never its colour.

## (b) Type
- Display Latin: Optima-like humanist sans (optima-lt-pro) 400; h3 chapter words 80px/80px, letter-spacing -0.4px; labels 16px uppercase.
- Display JP: Zen Old Mincho 400, h2 64px / 102.4px (lh 1.6). Body 18px / 32.4px (lh 1.8), white.
- Tiny captions 10px. Nav 16px uppercase, stacked, 25px pitch.
- Fredrik: wide-tracked caps wordmark, grotesque 700 marquee line ~90px caps, product captions 17px / 13px italic / 14px.

## (c) Spacing
Section padding 80-144px top; container full-bleed with 40px side margin; statement block: headline, 1px rule at y+~60 below, then two columns (label at 40px, paragraph from 50% width = 720px). Chapter panels 50/50 with 6px dark frame around the viewport.

## (d) Radius, borders, shadow
Radius 0 everywhere. 1px hairline rgba(255,255,255,.2) rules and a 240x50 outline button with 1px border at rgba(255,255,255,.3). No shadows.

## (e) Imagery  — IMAGERY = photo
Photographic render/photos, low-key dusk and night tones, tall 3:4 chapter photos right half; hero photo full bleed (1.6:1). Fredrik: product on flat ground, clean packshots 1:1 and mixed editorial 3:4 / 4:3 offset rows.

## (f) Decoration
Thin white line drawing (utility pole and wires, ~1px, 50% alpha) laid over the top-left of the hero photo; label with a short slanted 1px underline (about 55px, -3deg) under "ABOUT"; pager "03 | 03" with three tick marks; stacked left nav list with 25px pitch; fixed bottom-centre outline button on every screen.
Fredrik: category strip of round thumbnails with outline circle arrow; two-line giant caps marquee; date + notice chip bottom-left of the hero (outline box, 1px).

## (g) Motion
Open Rise: GSAP + ScrollTrigger + Lenis smooth scroll. Eases expo.out, power2.out, "none" for scrubbed items; CSS cubic-bezier(.16,1,.3,1) for hover/open; durations 0.4 / 0.5 / 0.7 / 1.2 / 1.5 s; stagger 0.03-0.1 s on split text; start "top bottom-=25%" for reveals; pin + scrub 1 for the concept chapters; flex-grow transition .8 s; image scale-in 1 s. Loading counter 0 to 100% before the hero. Fredrik: CSS marquee ticker, Swiper strips.
