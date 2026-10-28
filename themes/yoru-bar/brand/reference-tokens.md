# Reference tokens — Karuizawa Whisky (https://karuizawa-whisky.co.jp/, S5-Style #11029, )
Measured with Chrome headless 1440×900, getComputedStyle + style.css/script.js read, 2026-10-29. Values and descriptions only; no assets, text or logo copied. Screenshots: `ref/kw-*.png`, `ref/scroll-*.png`. A 20+ age gate (light `#EAE9E7` panel on black, tan buttons) precedes the page.

## (a) Colour
| role | hex | area (home) |
|---|---|---|
| base (dark) | `#0D0D0D` | ≈55% of the page; intro panels, news, gallery band |
| text on dark | `#FFFFFF` | body copy |
| accent / sub-heading tan | `#B1A28B` | headings "Since 1653", buttons, circle disc (gradient to transparent) |
| light section | `#FFFFFF` with grey photo wash | Quality block ≈12% |
| ink on light | `#0D0D0D` | |
| logo gold (age gate only) | ≈`#6B5B2A` | <1% |
| photo colour (hero) | copper `#B8651F`–`#7A3510`, teal-grey wall `#1F4047` | hero saturated share ≈17% (copper stills) |
First-screen saturated share (S>0.5, V>0.35) measured on `kw-first.png`: **17%**; dark (V<0.25) 53%. Ours must stay ≤15%.

## (b) Type
- Families: Playfair (sub-heads, light 300), **Italiana** (huge display titles), Shippori Mincho B1 (JP body, serif).
- Display title `el_heading_main`: Italiana 400, 60px (section intros) / 70px (list sections), lh 1.0, ls 0.8px, a 1px hairline strikes through the middle of the word (550px wide, extends beyond the word).
- Sub-head `el_heading_sub`: Playfair 300 32px/56px, tan, sits above the display word. On light sections: Shippori Mincho 600 18px, ls 5.4px (0.3em), below the word.
- Body: Shippori Mincho 400 16px, lh 33.6px (2.1), ls 0.8px (0.05em), white, centred in the dark panel (width ≈ 540).
- Nav: "JP / EN" 14px serif, vertical "menu" label (writing-mode vertical) between two 1px vertical lines at right.
- Dates: serif 14px, ls .05em.

## (c) Spacing
- Intro panels are exactly 100vh (900px) each, stacked and snapped (scrollify, desktop >1023px).
- Text column 540px, centred in its half (50/50 split: photo 0–720, panel 720–1440).
- List sections: heading block 110px, link cards 822×550 and 592×495 centred; news rows 826×74, padding 24px 30px, 1px bottom rule.
- Gallery photo 1030×640 centred (margin 205px each side).
- Header: logo at x25 y20 (196×51); right cluster at x1304 y30 (111×62).

## (d) Radius / border / shadow
Radius 0 on all rectangles; circles via clip-path `circle(50% at 50% 50%)`. 1px hairlines (white 100% on dark / ink on light). No shadows.

## (e) Imagery — IMAGERY: photo
Main imagery is **photography** (documentary, low-key, high-contrast; copper still close-ups, aerial landscape, shopfront, craftsman at work, soft macro of liquid ripples). Not illustration.
| image | ratio | shape / mask | placement | width share |
|---|---|---|---|---|
| hero KV (two copper stills framing a central emblem) | 1440×900 (1.6:1) | none, full-bleed; slow scale-down 10–16s | whole first screen | 100% |
| Authentic: aerial landscape | 720×900 (4:5) | none, flush left, full height | left half | 50% |
| History: shopfront | circle Ø≈485 | `clip-path: circle(50%)`, overlapped by a tan disc (gradient tan→transparent, Ø≈485) offset down ≈110px | left half, x175–660 | 34% |
| Quality: macro liquid ripple | full-bleed | grey-white wash fading to white by edges (radial mask) | section background | 100% |
| Gallery: craftsman at still | 1030×640 (1.6:1) | none | centred | 72% |
| gallery strip below Quality | 4 tiles ≈373×(cropped) | none, horizontal row bleeding off both edges | bottom of Quality | 100% |

## (f) Decoration
- Hairline through display word (1px, 550px, colour = text).
- Round "ghost" disc behind link label: Ø50px, tan/grey 60% opacity, sits on the first letters of the link ("HISTORY" + 65px arrow line).
- Header vertical double hairline (two 1px × 60px lines, 8px apart) around the "menu" label.
- "SCROLL" vertical label with 1px × 90px line, bottom-centre-left of hero (x≈735).
- Round chevron button on news rows (Ø20, white fill).

## (g) Motion
| item | type | duration | delay / stagger | easing | distance |
|---|---|---|---|---|---|
| hero emblem | fade | 2s | 0.5s | ease-out | none |
| hero image wrap | fade | 0.3s | 0.3s | — | none |
| hero/panel photos | slow zoom-out (`scaleDown`) | 10s / 16s | 0–0.5s | ease-out | scale ≈1.1→1 |
| headings, text (`js_appeared`) | blur+rise (`appearedIn`) | 0.6s | queue 200ms between items | cubic-bezier(.47,0,.745,.715) | translateY 32px, blur 32→0 |
| photo wipe | clip-path L→R / U→D | 0.3s / 0.6s | 0 / 0.3 | ease-out | clip |
| circle photo | clip-path circle 0%→50% | — | — | — | — |
| panel snapping | jQuery scrollify | 800ms | — | easeOutQuint | full viewport |
| links | opacity/transform | 0.3s / 0.5s | — | ease | — |
