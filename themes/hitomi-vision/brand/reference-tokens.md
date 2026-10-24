# Reference tokens: sumire-totalbeauty.jp (main reference, S5-Style, measured 2026-10-24, 1440×900, headless Chrome getComputedStyle + pixel sampling)
Only values and descriptions. No assets, copy or logo taken. Source language is Japanese (Shippori Mincho); values below are as measured, the theme maps them to Newsreader / Figtree.

## (a) Colour (share = share of page area, first screen after intro excluded unless stated)
| Role | Hex | Share | Where |
|---|---|---|---|
| Ground (texture bg.jpg, sage grey, film grain) | `#C9D0C9` (measured avg of tile; screenshots 75% of pixels `#C8D0C8`) | ~75% | whole page |
| Arc band fill (`.bg-round`) | `#D0D6D0` (≈ ground +2% L) | ~12% | big dome behind each section head |
| Photo card surface (polaroid-like) | `#CFD6D0` + soft shadow | ~3% | photo-plan cards |
| Text | `rgb(62,77,67)` = `#3E4D43` | ~3% | body, headings |
| Sub text | `rgb(81,98,88)` = `#516258` | <1% | Latin sub-title under each heading |
| Nav / button text | `#65736B`; on dark `#B2BBB7` | <1% | header |
| Button border | `#8A938E` 1px (on dark `rgba(178,187,183,.5)`) | <1% | "reserve / consult" outline button |
| Hero photo (dark teal grey) | `#384848` 25%, `#304040` 12%, `#405050` 11% | first screen ≈ 95% | full-bleed hero photo |
Accent: none (the whole palette is one sage hue family). Saturated-pixel share (HSV s>.35, v>.2) of first screen and scrolled screens: 0.0%–0.1%.

## (b) Type
| Role | Family | Size | Weight | Line-height | Letter-spacing | Case |
|---|---|---|---|---|---|---|
| Body | Shippori Mincho (JP serif) | 13.87px (0.867rem) | 400 | 31.9px (2.3) | 1.39px (0.1em); some blocks 0.05em / 0.115em | none |
| Section title h3 `.c-title__primary` | same | 21.47px (1.34rem) | 400 | 34.3px (1.6) | normal | none, centred |
| Sub title (Latin, under title) | same | 21.47px box, rendered ~14px | 400 | – | 3.2px (0.15em) | lower-case |
| Concept lead h2 | same | 15.87px | 400 | 25.4px | 1.6px | none |
| Nav items | Latin sans (geometric, light) | 14px | 400 | 22.4px | ~0.06em | lower-case |
| Button | same serif | 14px | 400 | 22.4px | normal | none |
| Logo | custom thin-line wordmark | 115×18px | – | – | – | lower-case |
| Hero catch-phrase | italic Latin sans, 15px, with SVG hand-drawn underline path | – | 400 | – | – | – |
Observation: type is small and light on a huge ground; hierarchy comes from space, not size.

## (c) Spacing
- Hero 900px (100vh). Concept section: padding-top 136.6px, bottom 100px, height 1199px.
- Costume / dress / hair-make sections: padding 166.6px top and bottom, each 1149px tall (image 651px + heading block).
- Photo-plan section: top 184px; salon: 184px top and bottom. Interlude (full-bleed photo): 0 padding, 900px window.
- Header 90px, logo at x=40, CTA right edge at x=1400 (40px gutters). Container 1360 (x 40–1400); headings box x 75–1365.
- Two-column rows: image col 427px at x=293 (left rows) or x=770 (mirrored rows); vertical text 67×246px at x≈996 (≈ 276px gap from image).

## (d) Radius, border, shadow
- Images: radius 0, no border. Button: 1px border, radius 1px, padding 6px 12px (header) / 10px 20px (large). Polaroid card: radius 0, padding ≈18px, shadow ≈ `0 2px 10px rgba(0,0,0,.08)` (visual estimate), no border.
- Arc band: no border; edge is the arc itself.

## (e) Images
| Image | Aspect | Size at 1440 | Position | Treatment |
|---|---|---|---|---|
| Hero | full-bleed 16:10 | 1440×900 | fills screen, subject left third, branch right | dark teal low-key grade; header overlays it |
| Section portraits (×3) | 0.66 (2:3) | 427×651 | left col x=293 / right col x=770 / left, alternating | no radius; heading centred above; vertical text beside |
| Interlude | 0.9 tall source | 1440×1600 in 900 window | full-bleed | scrub parallax yPercent 0→-6 |
| Photo-plan cards ×2 | 0.82 | 305×370 card incl. mat; photo ≈257×262 | x=135 (top 6833) and x=500 (top 6723), offset 110px vertically | polaroid card (even mat, thicker bottom) |
| Salon slider | thumbs 1.7 (340×200), large 0.76 (645×846) | thumbs left x=75, large right x=720 | cross-fade slider | – |

## (f) Decoration
- **Dome / arc band `.bg-round`**: full-width pale circle segment (1440×1149 box, huge border-radius = ellipse) whose top edge crests above the section; one per section; fill = ground +2% L. Section heading sits centred inside it.
- Vertical text columns (`writing-mode: vertical-rl`, 67×246px, 13.9px) beside portraits.
- Thin hand-drawn SVG underline path under the hero phrase, quote marks around it.
- Outline "+" markers on nav items with sub-menus (12px).
- Circular outline marker (28px, 1px) at hero right middle (x=1242,y=450).

## (g) Motion (all measured in JS/CSS; GSAP 3 + ScrollTrigger + Lenis + barba page transitions)
| Effect | Type | Trigger | Duration | Delay / stagger | Easing | Distance |
|---|---|---|---|---|---|---|
| Fade (`data-scroll-trigger=fade`) | IntersectionObserver adds class | rootMargin `0 0 -20% 0`, threshold 0 | 1.2s | `data-delay` ms | cubic-bezier(.165,.84,.44,1) | translateY .05% (≈0) |
| Rise (`=top`) | IO class | same | 1.0s | `data-delay` | same | translateY 8% → 0 |
| Blur-in (`=blur`) | IO class | same | 1.3s | – | same | filter blur(1em) brightness(1.85) → none |
| Mask reveal (`=mask`, images) | IO class, CSS keyframes `mask-animation` | same | 1.8s | – | cubic-bezier(0,.4,.48,1) | mask-size auto 200%, position center bottom (soft brush wipe upward) |
| Per-character text | IO + GSAP fromTo | same | 0.5s per char | each 0.03s | power1.out | y 100% → 0 inside overflow:hidden line |
| Dome scrub | ScrollTrigger scrub:true | start `top bottom` end `bottom bottom` | linked to scroll | – | none (linear) | scaleX 1→1.15, yPercent 0→-10, origin 50% 0 (measured matrix 1.1437/-110px mid-section, 1.15/-114.9px end) |
| Interlude parallax | scrub | start `top bottom` end `bottom top` | linked | – | none | image yPercent 0 → -6 |
| Letter tilt (concept) | scrub | `top bottom`→`bottom bottom` | linked | – | none | rotate 6° / 8° / 10° for 3 layers, origin 100% 50% |
| Hero | GSAP timeline loop | page load | fade 1.8s, hold 2.2s, SVG path draw (len/200 s) | – | power2.out | cross-fade slides |
| Hover / link | CSS | hover | 0.3s (0.4s link text roll y 105%→0) | – | cubic-bezier(.215,.61,.355,1) | – |
