# Reference tokens (measured with Chrome 1440×900; values only, no assets copied)

Main reference: https://the-tawaraya.jp/ (S5-Style category "hotel / ryokan"). Secondary (frame only): https://www.gorakadan.com/fuji/ (same category).
IMAGERY: **photo** (low-key documentary stills; both references are photographic). Style: dim, warm, 35 mm-like grain, deep blacks, one warm light source, matt surfaces; no illustration.

## (a) Colour (Tawaraya)
| Role | Hex | Area on first screen / page |
|---|---|---|
| Stage / ground (first screen) | #000000 | ~33% of first screen (letterbox bars), black footer |
| Photo shadows (warm black) | #1C120C, #100C09, #0A0808 | ~56% (inside photo) |
| Photo mid (umber, gold-leaf) | #392B24 → ~#8C7042 highlights | ~11% |
| Page ground after the flip | #FFFFFF | 51% of the second screen |
| Text | #333333 (essay), #B2B2B2 (footer, logo on black), #666 tracked wordmark | – |
| Accent | none; only the photo carries colour (maple red ≈8% at the second screen) | – |
First-screen saturated share (S>0.5, V>0.25): **1.0%**. Second screen 8.5% (red leaves, photo only). Gora Kadan: ground #E5E5E1 (67%), text #000, photo brown #75685B; its first screen is a dark video (frame-dependent, 10–45% saturated), so we do not take its share.
Our mapping: stage #0E0B08 (warm black), paper #F4F1EA → decided in design-spec; umber accent #8C7042 used only for 1px rules, the tiny reserve label and focus rings (≤3% area).

## (b) Type
- Body family: Tsukushi-style old mincho (FOT Tsukushi C Old Mincho) with Yu Mincho fallback; Latin/labels: Univers LT 45 Light. Gora: Noto Serif JP, 10 px root, ls .7px, lh 16.5px.
- Wordmark "THE TAWARAYA": ~17px, weight 500, letter-spacing ≈ .35em, colour #666 on white (#B2B2B2 on black), centred, fixed at the top.
- Nav (Latin): 12–13px, ls .1em, uppercase, #000 / #B2B2B2 on photo; three items stacked, row pitch 30px, at x=141.
- Vertical JA nav: 17–18px, vertical-rl, three columns at x≈1190/1240/1290, column pitch 50px.
- Essay title: 40px, ls 4.8px (.12em), vertical-rl, #333, centred (x=700, h=134 for three characters).
- Essay body: ≈16px, lh ≈35px (≈2.2), ls .08em, #333, three columns each ≈345px wide at x=141 / 548 / 955 (gap ≈62px), 7 lines each.
- Small caption "Essay on November": 12px, #B2B2B2, centred, ls .1em.
- CSS letter-spacing tokens used across the site: .035em, .065em, .08em, .1em.

## (c) Spacing
- Page side margin 90px (photo block x=90–1350, 1260 wide, 560 tall at 1440); nav column x=141; header 70px tall.
- Section gap: essay block starts ≈ 0.9 viewport after the photo; essay block 951px tall; footer 470px.
- Photo stage (first screen): 1440×600 centred vertically (black bars of 150px above and below).

## (d) Corners, borders, shadow
- Radius 0 everywhere; no shadows; reserve/cookie box = 1px #000 outline, white fill, 730×90 centred bottom.
- Buttons: 1px outline boxes 120×44, label JA 17px + tiny Latin 10px under it.

## (e) Imagery (photo)
- First screen: one dim film still, 2.4:1 (1440×600), letterboxed in black; no rounded corners; slow scale 1.3 → 1 on arrival.
- Second block: same ratio photo inset 90px each side (1260×525–560), ratio 2.25–2.4:1.
- Footer: the same photo returns full-bleed under the black footer text (1440×~900 crop).
- No cut-outs, no masks, no overlays except a faint dark gradient on the nav side.

## (f) Decoration
- Line-drawn seal/mark (≈95×135px, 1px #888 outline, centred) shown on the black splash only.
- Fixed edge labels: left-edge rotated "RESERVATION" (x≈41, y 400–500, 11px, ls .2em), right-edge vertical JA label (x≈1396, y 410–490). Both are the only booking entry.
- Mark in footer top-left (≈60×60 outline seal, #888).

## (g) Motion (Tawaraya; GSAP + ScrollTrigger)
- Splash: black, seal draws and holds, then the still fades in; arrival scale 1.3 → 1, 2s, cubic-bezier(.19,1,.22,1).
- Headings (lead h3): opacity 0→1 1.8s cubic-bezier(.42,0,.15,1), translateY 60px → 0 1.8s cubic-bezier(.19,1,.22,1), letter-spacing tightens 1.8s same expo-out; stagger .1s.
- Hover: opacity/transform .25–.5s cubic-bezier(.445,.05,.55,.95).
- Scroll: ground colour flips black → white as the photo scrolls out of the stage; footer flips back to black and the same photo is revealed beneath it.
- Gora Kadan: Lenis smooth scroll + GSAP ScrollTrigger; text/images blur-in: opacity + filter blur + translateY over 0.95s, easing cubic-bezier(.67,.31,.15,1); per-character reveals at 1.6s; clip-path reveal 1s; ground #E5E5E1.
