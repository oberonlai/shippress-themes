# Senbatsu Partners 1.0.2 — original diagonal restored, structured credibility band

Owner feedback: keep the original diagonal navy/photo edge; the plain centred "Seats we have filled since 2012" grid is too bare.

## Plan
1. RED: contracts in scripts/senbatsu-hero.test.mjs for the diagonal (home + inner photo heroes), copy-column clearance, structured seats band, localized labels and 1.0.2 version coherence.
2. GREEN: restore `clip-path: polygon(20% 0, 100% 0, 100% 100%, 0 100%)` (the 1.0.0 geometry, taken from tag senbatsu-partners-v1.0.0) on `.sb-hero__photo` and `.sb-seam__photo`; mobile (<=781px) stays straight and stacked. Rebuild the seats strip as literal blocks: heading with the 80x2 brick rule, three category cards (C-suite / board and legal / operations) holding the existing twelve role strings, and a legible privacy note.
3. Review, then run the normal theme gates; coordinator does real-WordPress five-language QA at 1440/390/360 and refreshes screenshot.png.

## Acceptance criteria
- Navy stays solid #1F2D3B, photo full strength: no wash, blur, overlay or role-brief card (1.0.1 protections kept).
- The hero copy column ends left of the photo box (48% vs 55%), so long French/German never meets the slanted edge.
- Seats band: #F3F3F3, left-aligned, three columns (one column on mobile), brick 2px accents, fine rules, all twelve roles and "Client names are never published" kept; no invented totals or client names.
- Three new labels (`sb_seats_exec|board|ops`) exist in en, zh-TW, ja, fr, de.
- Contact/newsletter files byte-identical; patterns remain literal block markup.

## Scope
Source: style.css, front-hero.php, five i18n tables, theme-meta.json, index.json, README/readme.txt, the test and this spec. No new dependencies.
