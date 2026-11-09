# Reference — Kogarashi Inn (our counterparts filled in at the design step; binding details in design-spec.md)
Main: https://goten-resort.jp/kazenomori/ (Kazenomori, S5-Style listing; a forest ryokan with 11 private rooms). Secondary: https://hotel-uro.jp/ (URO, S5-Style listing; used only for the live local clock and numbered "(01)" fields).
Why: both are quiet lodging sites on a pale ground with dark photography; the first-screen saturated share is 9% (main) and 0% (secondary), well under the 30% cap.

## Palette (details in reference-tokens.md)
Ground misty near-white #FBFCFB 45% / charcoal photo ground #202020–#333 35% / ink #444 text / green mark ~#2F7A4D / brick label ~#B87463. Secondary: #EADDD5 pale rose-grey with black ink.

## Signature moves (candidates)
| # | Move | Source | Our counterpart |
|---|---|---|---|
| C1 | Fixed full-bleed photograph behind an intro band; short one-sentence-per-line copy scrolls over it in an offset narrow column | Kazenomori intro (`ref/scroll-kaze-900.jpg`) | Home block 2: dark `#1F2B2D` band with P02 under `sp-parallax` 10% (the still background), portrait P03 and six white one-sentence lines (T1) at x 760; small 0.6:1 P04 at the right edge overhanging the band foot, `sp-reveal--left`. T1 stamped lines continue on A Day, Getting Here and every inner page head |
| C2 | Photo bleeding to one viewport edge at ~60% width, opposite narrow text column with a tiny rotated Latin label and a "More ●" leader-line link; alternating sides | Kazenomori stay/cuisine rows (`ref/scroll-kaze-2700.jpg`, `ref/scroll-kaze-5400.jpg`) | Home block 5 only (no alternation): Window Room photo P06 bleeding left at 60% width, text column at x 985 with the rotated brick label (T2) and the leader-line "More ●" link (28px stub, 26px disc with a white dot); Rooms page repeats it four times on the same side |
| C3 | Cloud-texture misty ground between bands with a dashed rule closing a news row | Kazenomori news (`ref/scroll-kaze-2700.jpg`) | T2: `ki-mist` CSS cloud ground `#F3F5F3` on home blocks 3–6, 8, 9 and every inner page head; the notice row (block 3) and the rates block (9) close with a 1px dashed `#3A4446` rule |
| C4 | Live local-time status line + parenthesised numbered fields "(01)" | URO (`ref/uro-first.jpg`, `ref/scroll-uro-2700.jpg`) | T3: analogue house clock Ø120 on the first-screen seam (Europe/London time, static 06:40 when reduced/static) and "(01)–(03)" status fields in the top half; small clocks with "(01)–(04)" booking fields on home block 9 and in each inner page head |

## Key visual (our counterpart)
Kazenomori's full-bleed overhead dinner-table video with a turning play ring at the centre becomes our top/bottom-halves first screen: a misty top half with the H1, tagline and URO-style fields, and a full-bleed film-grain near-overhead **breakfast** table (P01: the innkeeper's hands setting a cup, a guest reading at the edge) in the bottom half under `sp-parallax` 8%, with the house clock on the seam where the ring was. Outline + solid header buttons and the dark Back-to-top disc are kept.

## Scroll effects seen
Fade-up on view (1.2s, translate 20%, easeOutCubic, once), Lenis smooth scroll, fixed-position video background in the intro band, header bar turning white after the first screen. Details in stage-a.md. Ours: `sp-reveal--up` (1.2s, cubic-bezier(.215,.61,.355,1), 30px), `sp-reveal--left` (edge photo), `sp-parallax` (hero 8%, dark band 10%, bath-house band 8%; mobile 6%).

## Imagery
IMAGERY: photo. Dark, warm, low-light documentary photography; we use film-grain, softer and higher-key (per the plan row), same subject types (table from above, window light, terrace, bath, bedroom).
