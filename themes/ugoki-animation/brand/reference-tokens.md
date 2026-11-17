# Reference tokens (measured with getComputedStyle at 1440x900, 2026-11-17)

Primary reference: baqemono.jp (home + /creation/). Secondary: kaitamaki.com (home, wheel-driven zoom). Values only; no assets, text or logos are copied.

## (a) Colour
| Role | baqemono | kaitamaki | Share of first screen |
|---|---|---|---|
| Ground | #F9F7F4 warm paper | #FCFCFA | 55-70% |
| Text | #3D3935 | near-black mono | 3% |
| Photo window | dimmed ~#1F241F-#2F352E (darkened screenshot, 0.75 black overlay) | full-bleed photo | 30-100% |
| Accent | #A93432 red status dot, 5px, next to one nav item | #2B6CFF signal, tiny | <1% |
Saturated share (S>0.5, V>0.3) of the first screen: baqemono 0.0%, kaitamaki 1.9%. Ours must stay <=15% (brief: <=30%).

## (b) Type
- baqemono: Maax (geometric grotesque) 700 caps. H1 28.35px, lh 47px (1.67), letter-spacing 8.5px (0.3em), one word per line, colour #D6D1CA on the dark window. Nav/label 11px 700 ls 3.3px (0.3em) uppercase. Case title 20px 700 ls 1px caps. Body (JP) ~14px, lh ~2.6, 712px measure.
- kaitamaki: Source Code Pro mono 11-12px ls ~0.1em for captions/counters ("15/15", "x0.9", "1920 px"); Zen Kaku Gothic for text.
- Ours: Syne (display, large caps/lowercase mix) + Manrope (body); spec figures in tabular Manrope.

## (c) Spacing
- Header: logo left x80, y66; nav centred, 5 items, gap ~38px; page margin 80px (container-wide).
- Hero window: x91-1349 (1258px, 87% of width), y167-734 (567px, 2.22:1), 76px under header; copyright line 80px below.
- Case row (the signature): three columns - left rail x80 (date 11px caps), centre column x364-1076 (712px) holding 16:9 image then title row then body, right column x1120-1360 (240px) credit stack (CLIENT / MANAGEMENT / CREATIVE DIRECTION ...). Row pitch ~ 1 viewport (about 840px) incl. 160px gap.

## (d) Radius, border, shadow
Image corners ~4px; round 44px dark arrow button (#3D3935, white arrow) right-aligned on the title row; no shadows; no card borders. Short 24px hairline between credit groups and the award line.

## (e) Imagery
IMAGERY: photo (baqemono shows screenshots of finished work; kaitamaki is film-look photography). 16:9 case stills (712x400), full-bleed hero still, 4:3 contact-sheet plates (408x306). Corners 0-4px. Hero still is darkened so white tracked type sits on it. Film-look: cool-green cast, slight grain, window-grille foreground.

## (f) Decoration
- Red 5px status dot attached to one nav word (baqemono). 
- 1px vertical divider between the small logo and the crumb "CREATION" in the collapsed header.
- kaitamaki: mono HUD strip along the bottom: left "caption + date", centre "scroll - pull back", right tick scale "||||||||" with "x86" zoom readout, frame counter "15/15".

## (g) Motion
- baqemono: header morphs to a left crumb "logo | SECTION" after the first screen (opacity/translate, 0.2-0.4s); hover colour/opacity swaps linear 0.05s; list items get `is-in` / `is-inView` via IntersectionObserver (threshold 0, class toggled on enter and removed on leave); hero lines cycle over the dark window.
- kaitamaki: wheel/pinch scrubs a zoom from one full-bleed frame to a contact sheet of every plate (scale ease 2s, 0.5s delay); chrome fades 0.28s in / 0.18s out, ease var(--ease); mix-blend-mode: difference on the header text; panels slide with `translate` 0.42s.
