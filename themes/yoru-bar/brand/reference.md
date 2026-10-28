# Reference (draft, stage 1 research) — Yoru Bar
Main reference: **Karuizawa Whisky** https://karuizawa-whisky.co.jp/ (S5-Style #11029, ; closest category to a cocktail bar: spirits). Not used by any earlier theme (checked against themes-repo reference.md files). Measurements: `reference-tokens.md`. Screenshots: `ref/kw-first.png`, `kw-s1…s11.png`, `scroll-quality-*.png`, `scroll-gallery-*.png`.
IMAGERY: photo (documentary, low-key, copper/teal highlights).

## Signature techniques (candidates)
1. Full-bleed low-key documentary photo, huge foreground objects on both sides framing a central emblem that fades in after 2s; photo slowly settles (scale-down 10–16s).
2. Full-viewport 50/50 panels: full-height 4:5 photo flush-left, dark text column right with tan Playfair sub-head over a huge thin Italiana word struck by a 1px hairline.
3. Circle-clipped photo overlapped by a tan gradient disc, text column right; link with ghost disc under its first letters and a long thin arrow.
4. White "Quality" section: macro liquid photo washed to white at the edges, narrow left text, 4-tile photo strip bleeding off the bottom.
5. Header: logo left, "JP / EN", vertical "menu" between two hairlines.

## Colours
base `#0D0D0D` ≈55% · text `#FFFFFF` · accent tan `#B1A28B` · light `#FFFFFF` ≈12% · age-gate panel `#EAE9E7`. First-screen saturated share 17% (copper stills).

## Scroll effects
blur+rise 32px 0.6s (IntersectionObserver queue, 200ms), clip-path wipe L→R 0.3s / U→D 0.6s, circle clip, slow zoom-out 10–16s, scrollify panel snap 800ms easeOutQuint (not adopted). See `ref/scroll-*.png`.

## Our mapping () — planned in design-spec.md (stage 1 spec); file paths are the patterns stage 1/2 must create
| ref technique | our implementation | files |
|---|---|---|
| 1. Full-bleed KV, two huge copper stills framing a centre emblem, emblem fade 2s/.5s, slow settle 10s, vertical SCROLL cue | T1 framed KV: Y1 (back-bar shelf + copper shaker left, coupe stack + cloche right, bartender stirring small in the centre), own moon-ring mark + "YORU BAR" H1 centred, fade 2s/.5s, settle 1.08→1 10s + `sp-parallax` 8%, vertical "Reserve below" cue (desktop), info bar; inner pages use a small framed head | `patterns/yb-kv.php`, `patterns/yb-pagehead.php`, `assets/img/y1.webp` |
| 2. Full-viewport 50/50 panel: 4:5 photo flush left, tan Playfair sub-head over Italiana word struck by a 1px hairline, centred 540px body (incl. three-strip variant) | T2: `yb-service` (Y2, "On service / Tonight") and mirrored three-strip `yb-list` (Y3/Y4/Y5, "After dark / The List"); EB Garamond 70px struck word, tan 32px sub-head; on 9 inner pages | `patterns/yb-service.php`, `patterns/yb-list.php`, `patterns/yb-panel.php`, `style.css` (.yb-struck, .yb-sub) |
| 3. Circle photo Ø≈485 + tan gradient disc offset ≈110px down; ghost-disc link Ø50 + 65px arrow | T3: `yb-story` (Y6 basement steps, "Since 2017 / Maanstraat") on `#2A2C33` grain; ghost-disc link on every "more" link; circles on 7 inner pages | `patterns/yb-story.php`, `patterns/yb-circle.php`, `style.css` (.yb-circle, .yb-ghost) |
| 4. White Quality section: macro liquid washed to white, narrow left text, 4-tile strip bleeding off both edges | `yb-build` (Y7 wash, "The Build", tiles Y8–Y11) on home and The Build page | `patterns/yb-build.php` |
| 5. Header: logo left, JP/EN, vertical "menu" between two hairlines | overlay header: moon ring + two-line wordmark, "Reserve", 5-language switch, vertical "Menu" between 1px×60px lines (horizontal under 782px) | `parts/header.html`, `style.css` |
| Gallery photo straddling white/dark; news rows with round chevrons; centred tan footer | `yb-seats` (Y12 72% straddling, seat arc, seating rows), `yb-notes` rows, centred tan footer | `patterns/yb-seats.php`, `patterns/yb-notes.php`, `parts/footer.html` |
| Scroll: blur+rise 32px .6s, photo wipe, slow zoom | `sp-reveal--up`+`sp-stagger` (30px, .6s, cubic-bezier(.47,0,.745,.715)), `sp-reveal--wipe` on panel photos/strips/Y12, `sp-parallax` on KV, Y12 and page heads | `assets/sp-scroll.css`, `assets/sp-scroll.js` |
