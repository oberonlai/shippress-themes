# Reference notes ("our mapping" filled in by the design step; details in design-spec.md)

Main reference: https://silotheatre.co.nz/ (S5-Style category "Museum / event", contemporary theatre company site; photo-led, white/black page with flat colour floods).
Secondary reference: https://syuzgen.com/ (S5-Style, performing-arts production company; sticky left index nav, vertical section labels at the right edge, a horizontal strip of poster tiles; grey/black geometry with one pale accent).
Both domains are absent from the used-reference list. Style source: https://www.s5-style.com/ (categories museum-event, art, music).

IMAGERY: photo (low-key documentary theatre photography). Neither reference is illustrated where it matters: Silo's hero and cards are photographs.

## Signature candidates (shape, composition, position)
| # | Candidate | Source | Our mapping |
|---|---|---|---|
| T1 | Edge-to-edge twin photo stage, full viewport, with four corner micro-links and a bold caps ticker bar docked under the photos (ref/silo-first.png) | Silo hero | S1 home §1 KV: P01 stage manager in the wings + P02 actor in a pool of light, 720×792 each, gap 0; fixed blend header + 2 bottom corner links; 14px plum cue dot on the seam; white 108px ticker, Playfair 800 caps 74px, sp-marquee. Inner: mini twin heads on Season, Season Tickets, Visit, The House, Company, About (design-spec §1, Key visual) |
| T2 | Black season board: full-bleed black band, grey giant marquee line, row of narrow 0.70 poster cards with bullet-dot label + bold caps title (ref/scroll-silo-2700.png, ref/scroll-silo-3600.png) | Silo season announcement | S2 home §4: full-bleed ink #130E15 band, dim #8F8A93 74px marquee line, five 258×368 poster cards P03–P07 with 10px dot labels + caps titles, 96px gaps, horizontal scroller, 70px arrow. Inner: Season board, Company (text cards), About milestones, Journal archive |
| T3 | Colour-flood tall tiles: three abutting 480x706 panels, text at the top, outline pill at the foot (Silo e-news / super pass / support tiles, no screenshot of full tiles; measured) | Silo footer tiles | S3 home §6: three abutting 480×706 tiles plum #824880 / aubergine #3C1F3D / lilac #E3D8E4 (floods re-coloured to the plum family, quiet palette), title 50/53 top, outline pill 52px radius foot. Inner: Season Tickets, Seats, Visit, Contact, The Call Sheet |
| T4 | Vertical section label at the right edge, English caps + sub-label with a dash, pale pill arrow button (ref/scroll-syuz-2700.png) | syuz'gen | Supporting: vertical caps label + dash + sub-label at the right edge on home §5/§8/§9 and inner first sections, ≥1024 only (horizontal below); #EEECEF 56×28 pill arrows |
| T5 | Scattered-letter wordmark (letters on staggered baselines) beside a centred short intro (ref/scroll-silo-900.png) | Silo intro | Supporting: home §2 BUTAI in Playfair 900 caps 80px, letters offset 0/44/−12/60/20px, left-aligned over a 950px column; sp-stagger + sp-reveal--up per letter |

## Scroll behaviour observed (record only)
- Silo: marquee strips (~88px/s, JS transform, GSAP), header colour inversion over black sections, Swiper rows, 2.5s fade-in of hero, wordmark letters displaced vertically and resolving while scrolling (ScrollTrigger scrub). Screens: ref/scroll-silo-900.png -> 1300 -> 1800 -> 2700 -> 3600.
- syuz'gen: left nav stays sticky and its colour inverts over dark tiles; tiles slide into place as a horizontal strip (ref/syuz-first.png is the loading blur state, ref/scroll-syuz-900.png and 2700 after).
