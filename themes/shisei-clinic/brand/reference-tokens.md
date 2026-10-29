# Reference tokens: sakurano-megumi.com (S5-Style; measured with getComputedStyle at 1440x900, 2026-10-29)
Only values and descriptions; no assets, text or logo copied.

## (a) Colour
| Role | Hex | Area |
|---|---|---|
| Text | #504742 (warm dark brown) | body |
| Heading / title | #75645A (mid brown) | h2/h3 on light |
| Accent red | #B8615E / #C0716A (text) | bottom pill nav, hours card |
| Accent pink | #E4A491 | gradient stop, tags |
| Ground | animated 4-stop gradient hsl(21,53%,93%) -> hsl(18,53%,74%) -> hsl(12,65%,63%) -> hsl(1,38%,54%), body::before fixed, 10 s alternate; sections lay white at 0.6 alpha over it | ~75% of first screen |
| White | #FFFFFF | wordmark, overlay type | ~8% |
First-screen pixel sample: pastel pink/peach ~45%, light grey-white ~17%, brown/photo shadow ~10%; strongly saturated (S>0.5, V>0.3) only ~1.2%. Saturated share is tiny; the feel comes from one pastel hue field.

## (b) Type
- Body: Zen Kaku Gothic New 16px / 400 / lh 28px (1.75), normal tracking (14px on mobile).
- Headings: Zen Old Mincho 600. H2 lead 32px lh 56px ls 5.12px (0.16em). Section H2 20px ls 3.2px (0.16em). H3 24px lh 36px ls 1.92px (0.08em). Menu hero H2 64px/500 white.
- Latin display: Aboreto (caps, 400). Hero wordmark "SOFTLY ALIGNED" ~11vw (~158px) lh 1, ls 0.04em, white, caps. Mobile 10vw.
- Heading colour #75645A, lead #504742.

## (c) Spacing
- Container 1280px (max), `calc(100% - 160px)` desktop, 92% tablet, 89.6% mobile.
- Section padding-bottom 240-380px; sections stacked with no top padding (gaps via margins).
- Feature row 3 columns, ~40px gaps.

## (d) Radius, border, shadow
- Pill radius 9999px (bottom fixed nav, buttons, ovals); arch = 9999px 9999px 0 0.
- Hairline border rgba(117,100,90,.2) 1px. Shadows none.

## (e) Imagery
- IMAGERY = photo. Real photography, soft daylight, pale low-contrast, skin tones warm, plain walls, shallow depth; a watercolour cherry-blossom PNG overlay is decoration only.
- Hero main: video/photo, 700x809 (0.87:1), arch top (radius 9999px 9999px 0 0), right half x 700-1400 (49% width), bleeds from y64 to hero bottom, partly covered by the wordmark.
- Hero sub: 208x260 oval (0.8:1, radius 9999px) top-left at x70 y126, with two blurred oval ghosts (130x196, 130x163) offset right/down.
- Concept: tall arch photo (~480 wide, 0.7:1) at left, text column at right (560px); a small round photo overlaps its bottom-right corner.
- Feature: three arch/oval portraits 3-up above columns of 24px mincho titles.
- Menu: two full-bleed 1440x800 dark-toned photos with 64px white vertical-ish title at right, view-details pill at bottom-right.
- Beginners: tall photo right half (~45%) cut into an arch with huge faded caps text running down its edge.

## (f) Decoration
- Hero English wordmark white caps straddling the arch photo's lower part.
- Fixed bottom pill bar (width 560, h 58, radius full, 3 items: hours / access / menu, fill #B8615E-ish).
- Floating LINE pill bottom-right (white, h 50).
- Small circular arrow icons 10px, "FEATURE" Aboreto caps small label with hairline rule across.
- Watercolour blossoms top-right and left edges of hero.

## (g) Motion
- `.anime-fade-in` + IntersectionObserver (`.js-show`, rootMargin -20% 0, threshold 0, fires once, unobserve): opacity 0 -> 1 with a mask-image gradient wiped upward (mask-size 100% 300%, mask-position 0 100% -> 0 0), `transition: all 1.2s ease-out`, no translate.
- Hero stagger by delay: video 0s, catch copy 0.8s, English wordmark 1.5s.
- Hover transitions 0.3s; menu pop 0.4s cubic-bezier(0.22,1,0.36,1) translateY(20px).
- Page ground gradient animates 10 s linear alternate (CSS @property). Swiper for gallery. No parallax.
