# Reference
- Main reference: https://www.figaro-vis.jp/ (S5-Style entry "FIGARO | 空間・インテリアデザインスタジオ"). Category near our shops-hobbies/lighting showroom; not used by earlier themes (grep checked).
- IMAGERY: photo (monochrome interior photography; low-key dark rooms with a lit window).
- Colours: ground #F2F2F2, ink #0E0E0E, dark #0F0F0F, white; accent none. Saturated share of first screen 0%.
- Signature candidates: (1) dark curtain intro with an oversized stencil-cut wordmark that flips to light ground; (2) huge thin-caps statement running as a marquee under a mono caption; (3) dark perspective "room box" with a single lit photo window and a vertical word at the left edge; (4) mono-type nav with bracketed current item and tiny superscript count.
- Screenshots: ref/figaro-fold.png, ref/figaro-after-intro.png, ref/scroll-h0.png, ref/scroll-h1.png, ref/figaro-s0.png.
- Secondary: none (time box).
| Reference element | Our implementation (成品對應; details in design-spec.md) |
|---|---|
| Black intro curtain `#0F0F0F`, then flip to light ground `#F2F2F2` | T1: warm-black curtain `#1A1512` lifts on load over low-key photo hl-01 ("lights on", 1.2s `cubic-bezier(.23,1,.32,1)`); solid `#F2F2F2` info bar slides up; inner pages open with the same dark head and a hard flip to `#F2F2F2` |
| Stencil wordmark 1000×165 at x40 y260 | Own stencil SVG "HIKARI" 1000×165 at x40 y260 on the KV; inverted (ink) in the footer; small 120×20 in the header |
| Two-line mono caption + caps studio line + "Studio ↗" | IBM Plex Mono caption "An independent lighting showroom / for homes and small dining rooms." + caps H1 (Outfit 600 1.25rem) + "Showroom ↗" at x1040 |
| Thin-caps statement marquee (~80px, 200–300) | T2: `sp-marquee` Outfit 200 5rem caps, 40s linear, on the KV, every inner page head and the footer |
| "WE WORK WITH :" logo strip | KV info bar "OPEN TODAY :" (hours, address, 6 pieces, Book a visit) + text-only fictional workshop row "WE STOCK WORK FROM :" in Home block 2 (no logos) |
| Dark perspective room box, one lit photo window, vertical stencil word left | T3: `hl-roombox` (ceiling `#5A4C43→#3F332C`, front wall `#1A1512`, side wall `#2B231F→#3F332C`), 4:3 window with `sp-parallax` 10%; Home ×2 (standard + mirrored), Lamps, Fitting, Visit, About, Contact |
| Mono nav, "[ Home ]" brackets, 8px superscript count | Header IBM Plex Mono 1rem, bracketed current item, "Lamps⁶", "Projects⁴" |
| Project rows: 14px title + 2:1 image | Home "Which room" rows, Rooms page, Projects, Journal index: mono title + 2:1 image 1360×680 with `sp-reveal--wipe` |
| Palette ground/ink/dark, no accent, radius 0 | `#F2F2F2` / `#0E0E0E` / `#1A1512` + `#3F332C`, brass `#C9A063` ≤1%, radius 0, no borders/shadows |
