# Reference tokens (measured with getComputedStyle at 1440x900, headless Chromium)

Primary: https://trippin.world/ (editorial travel magazine). Secondary: https://studyinshizuoka.jp/ (study-travel destination site, audience gateways).
Only values and descriptions are recorded; no assets, text or logos are copied.

## (a) Colour and area share (first screen)
| Role | Primary (trippin) | Secondary (shizuoka) | Share |
|---|---|---|---|
| Ground | #FFFFFF | #FFFFFF / sky wash #D8EEFF | trippin 55%, shizuoka 45% |
| Text / ink | #0A0A0A | #4C4948 | 8-10% |
| Photo (dark, low-key) | hero photo #000-#503000 | framed window | trippin 62% of screen is photo |
| Tints | none | #FAF6C8 yellow, #EAF6DB green, #FFEAEB pink, #F7F7F7 grey | 4-6% |
| Accent | black pill button #000 (r60) | yellow #FFF57F button and disc | <3% |
Saturated share (HSL s>0.5, l 0.2-0.8) of the first screen: trippin 33% (all inside the photo), shizuoka 13%. Our build keeps flat saturated UI colour at 0 and photo saturation low (<=15%).

## (b) Type
- trippin: "ABC Marfa" (grotesque; Regular/Light). Body 16/24. Lead 21/30 (t-md). H2 "Explore the World" 24/35, ls -0.5px. Section title "Discover Seoul" 48/55 Light, ls -1px. Chip label 14/20, caption 14/20, footer label 12/15.5 caps. Hero title 48px/55 white over photo.
- shizuoka: Noto Sans JP 700. Logo 32px. H2 24/32 bold with Latin title above, JA sub-label below. Body 16/28, text 14/21 ls .06em. Hero word "Why Shizuoka?" display ~64px white tracked.

## (c) Spacing
- trippin: page gutter 20px, container full width 1440, hero grid = 1045px photo + 20 gap + 335px rail (5 rows 117px portrait thumbs, 20px between). Section gap ~64px. 4-up cards 335px wide with 20px gap.
- shizuoka: container 1200 (x120-1320), hero window 1200x530 (x120,y145), gateway cards 372x~300 with 42px gap, section padding 100-140px.

## (d) Radius, border, shadow
- trippin: photos r8; button pill r60 (28px high, 1px border); tag chips: 1px #0A0A0A outline, r2-4 for place chip, r60 pill for topic chip, a 20px outlined circle "..." chip; no shadow; cookie bar black r12.
- shizuoka: cards r8 with 1px #4C4948 border and tinted fill; arrow disc 40px circle filled #FFF57F with 1px ink border and a long thin arrow; speech bubble 1px ink border, r24 with tail; no shadow.

## (e) IMAGERY = photo
Documentary photography throughout (people, food, streets; flash/natural light, grainy, real). Ratios: hero 1.56:1 (1045x669); rail thumbs 0.77:1 (90x117) r2; carousel cards 0.75:1 (335x449) r8, chips overlaid bottom-left 12px inset; large lead photo with white serif-less headline on bottom-left 40px inset with a soft dark gradient. Shizuoka: framed 2.26:1 window with flat doodles around (not adopted; our imagery is photography only).

## (f) Decoration
- Tag chip pair (place square + topic pill) 28px high, 14px text, 1px outline, 8px gap, overlaid on photos or above titles.
- Round search/"nearby" pill top-right; header nav 3 links + count superscript box "137" (1px outline, 11px).
- shizuoka: "LIVE" tab on a framed mini card docked at the photo's lower-left; speech bubble with tail anchored on the photo; yellow arrow disc; wave section edges; sparkle ticks.

## (g) Motion
- trippin: image fade-in (opacity .25s ease-in-out), hover transitions .15s ease-in-out, ticker/carousel keyframe `scroll var(--duration) linear` (CSS marquee). No scroll-linked parallax.
- shizuoka: Splide slider (peeking neighbours, loop with clones), opacity transitions 1000ms cubic-bezier(.25,1,.5,1) for hero/section fade. No GSAP.
