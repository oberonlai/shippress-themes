# Reference (draft) for Kamotsu Academy

Main reference: https://www.kobedenshi.ac.jp/ (an S5-Style listed vocational college). Screenshots in `ref/`: `kobedenshi-first.png`, `scroll-kobedenshi-900.png`, `-1800`, `-2700`, `-3600`.

## What is borrowed
1. Full-bleed documentary photo of people working at a table, with a very large white two-line caps word across its upper half and the people standing in front of the lower line. Our version: instructor at the cab step of an articulated lorry, trainee reading a walk-around card, word "WALK / AROUND" (the pre-drive check that every lesson starts with).
2. White docked info card at the hero's bottom-right with a small thumbnail and a round chevron ("Next intake" card with a two-point line: Today to Test day).
3. White header with a split menu and two filled pill buttons at the right (ink and navy).
4. Row of tall rounded cards on a pale grey ground, headline top-left, photo below, white round chevron bottom-left (three entry routes).
5. Motion: scroll class toggled near the viewport bottom, cards stagger by column x 200 ms; hero photo moves slower than the page (parallax, scrollTop/4).

## Palette (ours; relationship from the reference: neutral photo, white, near-black ink, very pale grey ground, one tiny bright accent)
- Primary navy #243044 (header pill, chips, footer band), about 12%
- Ground #F4F5F6 and white #FFFFFF, about 60%
- Ink #1A2130
- Secondary slate #5E6B80
- Accent hi-vis amber #D9A441, under 3%, small chips and one underline only
- First-screen saturated share: under 5%

## Mapping to our product (finished-theme counterpart; binding detail in `design-spec.md`)
| Reference element | Ours (finished theme) |
|---|---|
| Full-bleed 1440x790 workshop photo, four people at a table | Home KV: full-bleed P01, instructor on the cab step, trainee with a walk-round card, second trainee at the trailer wheels; `sp-parallax` 10% (phone 6%) |
| Giant white two-line caps word "LEARN BY / CREATION" spanning the content width | "WALK ROUND / THEN DRIVE", Hanken Grotesk 800, white, width-matched lines up to 13.3rem (T1); inner pages: one white word on a 460 px photo band (COURSES, FEES, TEST DAY...) |
| Small caps kicker + black italic tagline over line 1 | Kicker "KAMOTSU ACADEMY · HGV TRAINING SINCE 2009" + ink italic "Check first. Then drive." left-aligned over line 1 |
| Header over the photo, nav + two black pills | Split nav over the photo: six links left, wordmark centre, two navy #243044 pills right (Open yard, Book an assessment) |
| White docked card bottom-right, thumbnail + round chevron | "Next intake" card 400x136 r8 with P02 thumb, mini timeline line Enrol to Test day, 32 px chevron (T2); also on the home road band and every inner page head |
| "68th since1958" + lead + skyline strip | Block 2: "since 2009" numeral + narrative + 8:1 yard panorama strip P03, hi-vis highlighter on one phrase |
| Four tall promo cards (288x450, r6) on #F5F5F5, white 48 px chevron, yellow badge | Block 3: Class C+E, Class C, Refresher, Driver CPC cards (P04-P07), hi-vis 90 px badge "Next intake 12 Jan" (T3); Courses, C+E, Class C, Fees, Stories pages |
| Three square event cards + centred outline pill | Block 9: three story cards (P16-P18) + "All stories" outline pill |
| Fade + rise on scroll, 200 ms column stagger | `sp-reveal--up` (.6 s ease-in-out, 24 px) and `sp-stagger` on card rows and timeline stops |
| Dark particle band, 3D stickers, Slick carousel, slide-in menu | Not adopted |
