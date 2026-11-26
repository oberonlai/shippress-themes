# Reference — Ito Hospital
Source: https://www.ito-hospital.jp/ (first screen, whole home, first-visit page). Screens in `ref/`; measurements in `reference-tokens.md`; binding spec in `design-spec.md`.
Why: the clinic's plain, calm account of "where to start", with a split first screen (info card + two entry boxes beside one rounded documentary photo), a five-icon sheet, and a ruled hours ledger.

| Idea borrowed | Reference element | Our equivalent | Built as (final mapping) |
|---|---|---|---|
| Split hero with entry boxes (T1) | Green info card + "first visit" / "returning" outline boxes stacked beside a 990 × 480 r8 photo | Photo left (mirrored), right column: celadon card + H1 + two outline boxes | Home `.tc-hero`: photo `hero-shoulder.webp` 790 × 520 r8; card `#5B7762`; boxes "Your first visit" (celadon) → /first-visit/, "Returning patients" (ochre) → /book/, 30 px "+" discs. T1 head on About, First visit, Conditions, Clinicians, Prices, Stories, Book, Contact, Clinic letter |
| Icon card-row (T2) | Five icons in one shadowed r8 sheet with dotted dividers | Five link cells under the hero | Home sheet 1296 × 106 (First visit, Three complaints, Clinicians, Hours, Find us); anchor sheet on First visit, Conditions, Prices, Contact |
| Hours ledger (T3) | Green bold label + bold value on 1 px green rules; dotted news rows | Hours and first-hour minutes ledger | Home #hours and #first-hour (sp-count minutes); First visit, Conditions (#refer), Clinicians (days), Prices, Book, Contact, About (the day) |
| News / hours pair | News panel 628 \| hours 636, gutter 28 | Notices \| hours, same widths | Home block 2 |
| Tile grid | 12 green link tiles | 8 celadon tiles | Home #ways |
| Decoration | Top green stripe, round menu disc, back-to-top tab, green footer | Same roles in celadon / deep green | 6 px header stripe, 48 px mobile menu disc, 40 px back-to-top (≥ 782 px), `#3F5A47` footer |
| Palette | Saturated green on white, orange accent | Celadon #6E8B74 / #5B7762 on white, ochre #C69A5B, deep #3F5A47 | theme.json palette (design-spec §5) |
| Motion | none (hover 0.3–0.7 s ease) | Hover 0.3 s ease; sp-reveal/stagger/count/parallax added below the first screen | Room band parallax 10 % (mobile 6 %), reveals 0.7 s, count 1.2 s; hero still |
