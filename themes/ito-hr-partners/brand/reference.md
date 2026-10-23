# Ito HR Partners reference (stage A research; "Our mapping" filled at stage 1 spec, see design-spec.md)

## Reference sites (S5-Style, professional-service / law category)
| Role | Site | Why | Our mapping |
|---|---|---|---|
| Main (80% target) | TMG Law Office, https://tmg-law.jp/ | employment/corporate law firm, photographic, calm white/slate/accent system | T1 hero loop row, T2 slate pill, T3 approach cards over blurred parallax photo; colours, type scale, radius, motion per design-spec.md §11 |
Not used: naito-otsuka.com (used by Hoshi), stratefriends.com (illustration based).
Screens: ref/tmg-first.png, ref/scroll-tmg-*.png. Tokens: reference-tokens.md.

## Signature candidates (shape, composition, position)
| # | Candidate | Our mapping |
|---|---|---|
| 1 | Full-bleed photo loop row under a one-line headline: tall 480×497 rounded cards (10px), one cropped to a circle, auto-scrolling, with tick-tag services under the headline | **T1** home hero (`front-hero`): one-line 80 px PT Serif H1, 4 tick-disc service tags, `ih-loop.sp-marquee` P03·P01(circle)·P02·P04, 480×497 r10 gap 40, ≈63 px/s; inner page heads use a static 2-card row (circle card + wide card) |
| 2 | Floating slate topics pill (760×62, radius 10) overlapping the bottom of the first screen with a round arrow disc | **T2** `ih-pill` "Fixed fee · HR health check · €1,450" over the hero row (right 30 / bottom 48); same pill with each page's fee on every inner head; static below the row on mobile |
| 3 | Reason section: fixed blurred photograph with large white 10px feature cards, vertical rotated accent label ("Feature 01"), square photo right | **T3** home block 4 `front-approach` ("Approach 01–03", 540 squares P09/P11/P10) on `sp-parallax` P08 (`--sp-par` 12%, mobile 8%); also Services, Payroll, Investigations, Retainer, About |
| 4 | Circle-cropped portraits on a slate band with a white section title | home block 6 `front-people` (P12–P14) and Team page (P15, P12–P14) |
| 5 | Staggered two-photo intro (420×315 left, 630×473 right dropped 75px) | supporting move S-b: home block 3 (P06/P07), About (P02/P16) |

## Colour (ref → ours)
| Role | Ref | Ours (Ours) | Share |
|---|---|---|---|
| Ground | #FFFFFF 50% | #FFFFFF (kept) | ~60% page / ~50% first screen |
| Warm band | #F6EFE0 (+ seminar band #EFF2F4) | #EFF2F4 (R1's own cool band; no cream per rules) | ~18% |
| Slate band | #647582 | #647582 (kept) | ~7% / 3.5% first screen |
| Ink | #2A2C33 | #2A2C33 (kept); muted #585B63 | ~6% |
| Accent | #DC5310 (0.7% first screen) | #3F5E4A (row hex, Chitose green), tint #E3EAE5, hover #557A62 | ≤3% page / <1% first screen |
| Hairline | rgba(0,0,0,.15) | same | — |
First-screen saturated share in ref 3.44%; ours cap 15%, target ≤6%.

## Scroll candidates → chosen
| Ref effect | Our mapping |
|---|---|
| fade-up 30px, 0.6s ease, IO once | `sp-reveal sp-reveal--up` + `sp-stagger`, `--sp-dur .6s; --sp-ease ease; --sp-dist 30px`; blocks 2–8 (not hero, not fees list) |
| Splide AutoScroll hero row ≈63 px/s | `sp-marquee` on the hero loop row, 33 s per 2080 px set |
| Reason fixed blurred background | `sp-parallax` on `front-approach` and inner T3 sections |
| Count tags (static) | `sp-count` on About only |
| Hover zoom / underline | CSS hover only |
