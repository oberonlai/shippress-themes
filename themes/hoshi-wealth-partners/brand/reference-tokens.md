# Reference tokens (measured 2026-10-23, 1440x900, getComputedStyle / CSS / screenshots; values only)
Main reference R1 = https://naito-otsuka.com/ (law office, S5-Style). Secondary R2 = https://crea-lp.com/ (financial planning).

## (a) Colour (R1)
| Role | Value | Area (first screen / whole page) |
| Ground | #F2F2E9 / #EEEEE2 (surface-100/200) with fine film-grain + faint horizontal scan-line noise | first screen ~61% (#E8E8D8 bucket) / ~45% |
| Ink / text | #212836 (grayscale-900) | ~8% |
| Dark band | #40403D (surface-800), full-bleed, 1105px tall; service sections sit on it in #B7B7B1 | ~15% of page |
| Mid stone | #B7B7B1 (surface-500): rules, band text, buttons | ~5% |
| Accent | #D3030F (primary-500) tiny: 8px dot before labels, 02|02 slide counter chip 174x74, name-initial highlight, one red photo tile | first screen 0.3%; first-screen saturated pixels 1.5% |
| Photos | all monochrome / desaturated with heavy grain | ~20% |
R2 first screen saturated 16.3% (lime #E2E600 panel, olive #2B3B0F nav tab): rejected for ground, only the idea of one flat colour panel over a full-bleed photo.
## (b) Type (R1)
| Body | Zen Kaku Gothic New 400/500, 16px/24px (1.5), letter-spacing 0.04em (0.64px), colour #212836 |
| EN section title | Heebo 500, 35.28px, lh 1.1 (38.8px), ls 0.02em, UPPERCASE ("SERVICE", "LAW OFFICE") |
| JP sub-head | 19.88px / 29.8px, 500, ls 0.04em, colour #B7B7B1 on dark |
| Display headline | huge mixed pairing: Cormorant Garamond 600 serif words alternating with Heebo 500 sans words, ~110-130px cap height, uppercase, English sentence in 3 lines, words with a blurred/noisy edge on some (DECIPHERING, NOISE, TRUTH serif; DEFINING, THE sans); sizes fluid clamp(3.4rem, 2.2vw+1.7rem, 10.5rem) |
| Micro / caption | Heebo 12px uppercase, ls 0.04em; date 14px |
| Button label | 18px/500, ls 0.32px |
| Nav | Heebo 16px 500 uppercase, ls 0.08em, 80px fixed bar, items right, logo left (JP wordmark 20px) |
## (c) Spacing
| Container | content x 98 -> 1342 (1244px), header gutters 30px; hero headline x 86 -> 1350 |
| Section padding | service block 90px top; each service row 611px tall incl. 1px top rule; dark band 1105px; epilogue 120px bottom; lawyer section 1103px |
| Grid | service row 3 columns: title 292px | square photo 405px at x=518 | link list 292px at x=1050; gaps ~125px |
## (d) Radius / border / shadow
| Radius | 0 everywhere (photos, buttons, chips) |
| Borders | 1px #212836 rules between topics; button = 2px top + 1px bottom border #B7B7B1 (or #212836 on light), no side borders |
| Shadow | none |
## (e) Images
| Hero A | landscape 2:1 (450x225) hands-on-table, x182 y351 (13% of width), caption 12px uppercase under it, grayscale+grain |
| Hero B | square 450x450 portrait at the right edge, x990->1440 (bleeds off right), y351->801 (31% of width); headline text overlaps its top edge by ~60px |
| Service photo | square 405x405 centred (28% of width), building facade, grain, radius 0 |
| Gallery tiles | row of 225x? tiles + 450 wide photo, gap 15px, one tile flat red (#D6000F) with torn texture |
| Lawyer portrait | cut-in photo inside a frame of thin rules + red block 116x? overlapping, film-sprocket dots (3 white squares) on the red block |
| Treatment | everything monochrome + coarse grain; full-bleed 1440x335 strip with 02|02 red counter at bottom right |
## (f) Decoration
| Red dot | 8px circle, before section labels ("TOPICS", "SERVICE 01") |
| Rules | 1px full-width rule above each service row, label "SERVICE 01" 12px uppercase at left |
| Arrow link | 26px long hairline arrow right-aligned in rows; "MORE" button with 66x24 stone chip holding arrow |
| Counter chip | red 174x74 at bottom right of strip, "02 | 02" 14px white |
| Vertical word | "LAWYER" rotated 90deg, 80px, ink, left edge of section with 1px vertical rule at x187 |
| Tags | category tabs 61x24 filled ink / text-only others, 12px |
## (g) Motion (R1, from CSS + JS: custom IntersectionObserver adds .is-animated; GSAP ships in bundle for hero/lines)
| fadein-up | opacity 0->1 + translateY(30px)->0, 0.6s ease, observer rootMargin 0 0 -100px 0, threshold 0, once |
| fadein-left/right | translateX(-/+30px), 0.6s ease |
| fadein-up02 (children) | translateY(20px), .6s cubic-bezier(0,.55,.45,1) |
| delay/stagger | data-anime-delay 0.1s steps (0.1-2s) |
| slide-up (text lines) | line wrapper overflow:hidden, child translateY(115%)->0, 1s ease |
| Hero headline | lines slide up in sequence on load, ~1s each |
| Section chapter card | sticky title card (CHAPTER 01) over the dark band while rows scroll |
| Hover | category button ::before scaleX 0->1 from left, 0.6s ease |
