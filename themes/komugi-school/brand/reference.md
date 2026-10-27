# Reference (draft) — komugi-school
Main: Japan Typography Association https://typography.or.jp/ (S5-Style entry; not used by earlier themes; closest quiet "association/school" category with a photo-led hero). One reference only. Tokens: reference-tokens.md. Screens: ref/jta-first.png, jta-full.png, scroll-jta-*.png.
IMAGERY: photo (greyscale documentary top-down bench photograph).
## Signature techniques (candidates)
1. Full-bleed greyscale bench photograph under a plain header, flush to the right/bottom edge with a 82px left rail (vertical rotated credit text, social icons).
2. Paper cards scattered at slight angles on the bench = information carried by the photo itself (recipe cards, schedule slips).
3. Outline + filled grey category chips, 1px hairline list rows.
4. Two opposite-direction name tickers (members → our instructors/alumni kitchens).
5. Multi-column header menu, tiny three-line org name, 54px black mark top-right.
## Colour
ground #FAFAFA ~85% · ink #000 · chip grey #5A5A5A · hairline #DADADA · accent none. Ours: swap ink for 媚茶-based #3B342B, chip #716454, ground #F7F5F2-ish (not cream), no saturated area.
## Scroll effects
rise-fade (−30px, 0.5s ease, body class), clip-reveal (inset 100%→0, .24s cubic-bezier(.165,.84,.44,1)), ticker marquee, direction hover clip-path. Maps: sp-reveal--up, sp-reveal--wipe, sp-marquee, sp-parallax on hero.
## 成品對應 (our counterpart, see design-spec.md)
| Reference element | Komugi School counterpart | Where |
|---|---|---|
| Top-down greyscale table photo with paper cards, bleeds right/bottom (1358×763) | P01 film-grain top-down floured bench, instructor + two students shaping dough, blank schedule slips; x=82→edge, 16:9, radius 0, `sp-parallax` 8% | Home `front-bench` (T1, KV #1–2); inner heads use 21:9 bleeding photos |
| 82px left rail, rotated credit, social icons | Same rail, "© Komugi School — professional bakery school, Rotterdam" | All pages ≥960px; hidden on mobile |
| Chip bar (outline/filled) + news line above the photo | Info bar: Next cohort / 6 weeks / 12 seats / Mon–Fri 06:00–14:00, filled chip 媚茶 #716454 | Home first screen; every inner page head |
| News list: 1px #DADADA hairline rows, 204px pitch, 4:3 289×217 thumbs | Day-schedule rows Mon–Fri (T2); week rows, hour rows, course rows, instructor rows, journal rows | Home `front-week`, `front-journal`; Programme, Training Day, Short Courses, Instructors, Admissions, Careers, Facilities, Contact, Journal, FAQ |
| Two opposite-direction member tickers | Instructors ← / partner kitchens → (T3), `sp-marquee` 40s | Home `front-people`; Instructors; Careers |
| 54px black leaf mark top-right | 54px ink wheat-grain mark (own drawing) | Header all pages; footer |
| Three-line org name, multi-column menu | Three-line wordmark block + centred 3×3 menu | Header |
| Pill buttons radius 9999px 1px black | Same, ink #14110E | Home people/visit, footer |
| Colours #FAFAFA / #000 / #5A5A5A / #DADADA | #FAFAFA / #14110E / #716454 / #DADADA (+ wheat #A8845A ≤1%) | Global |
| rise-fade −30px 0.5s ease; clip-reveal .24s cubic-bezier(.165,.84,.44,1) | `sp-reveal--up` 24px 0.5s ease (+`sp-stagger`); `sp-reveal--wipe` 0.6s same easing | Rows, KV card, headings |
