# Reference
Reference: https://andpad.jp/ - construction-management cloud app: one calm account of how a crew is added to the site diary, what a working day records and one way to ask for a rollout.
Tokens: see `reference-tokens.md`. Screenshots: `ref/andpad-first.png`, `ref/andpad-scroll-900.png`, `ref/andpad-scroll-1800.png`, `ref/andpad-scroll-2700.png`.

| Reference technique | Where seen | Our counterpart |
|---|---|---|
| Three vertical photo slices, middle one stepped lower, round badge + small square + banner strip crossing them | first screen | Home hero: hoist-gate photo G01 in three slanted slices (middle +50 px), Ø175 #EF3340 "Today's diary" badge + offset ring, 40 px square on the seam, white italic strip "06:40 Morning board · Gate 2"; mini triptych on inner page heads (design-spec T1) |
| Solid rectangle that wipes across a sub-heading and uncovers it | section sub-headings | Every section label: sp-reveal--wipe + #EF3340 bar scaleX 0→1→0, 0.4 s cubic-bezier(.8,0,.5,1); 32 px accent rule under each H2 (T2) |
| Logo tile + two-cell flush CTA block header that slides in after the first screen | header | 84 px steel logo tile flush top-left, centred anchor menu with dividers, two flush cells "Request a rollout" (#C8102E) + "Call 06:30–18:00" (steel); sticky, no slide-in (T3) |
| Case cards: micro-label, title, photo, line, dash link | USE CASE slider | Static 3-card rows (283 px, 72 gutter, CREW 01 label, title above 3:2 photo, VIEW MORE + 20 px dash) on Home #crews, Crews, Field notes; feature cards with 68 px icon tiles on Home #day and A diary day; 56 × 38 edge tab |
| Fade-in-up 0.5s on nearly every block | whole page | sp-reveal--up (0.5 s, ease, 28 px) + sp-stagger on card rows; hero uses load keyframes only; sp-parallax on the gate photo band (G12, --sp-par 10%) |
