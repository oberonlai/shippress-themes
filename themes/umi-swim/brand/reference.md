# Reference (draft) — umi-swim
Main reference: https://welfit-sapporo.com/ (S5-Style listed, private fitness/wellness studio, WordPress). Not previously used. Also checked and rejected: duck-kids.com (full-saturation navy/yellow, violates quiet palette).
Screenshots: brand/ref/welfit-first.png, welfit-mid1.png, welfit-mid2.png, scroll-about-*.png, scroll-concept02-*.png, scroll-mv-*.png. Measurements: reference-tokens.md.
## Signature techniques
1. Layered organic blobs (pale teal-blue gradient) behind photos and sections, partly off-canvas.
2. Photos shaped into soft blobs / ovals (hero blob bleeding left; 280×360 oval portraits).
3. Horizontal pinned card track with diagonal hairline + italic number in each card's corner.
4. Vertical type (JP lead column; huge rotated section title) and pill tab list.
5. Hero entrance: blur-to-sharp crossfading photos.
## Palette
ground #EBF3F3 ~65% · white ~20% · pale blob #C2DBDD ~15–20% · saturated #78B6D6 <5% · ink #3C465A. | Ours: row hex #6E8CA0.
## Product mapping (成品對應) — see design-spec.md
| reference element | our implementation |
|---|---|
| Hero blob photo bleeding off left (blurred interior) | Hero blob-a mask, 54% wide, left −4%: H1 coach at pool edge + child holding rail; crossfade H1→H2→H3 (T1, KV #1–2) |
| Translucent teal→sky blob overlapping photo | "Water" blob #D8E8EC→#C2DBDD, 0.92 opacity, over photo's right ~35%, sp-parallax layer 8% (KV #3) |
| Italic overline + wordmark centred | "Swim School" overline + h1 "Umi" Figtree italic 4.5rem (KV #4) |
| Vertical 4-line JP lead top right | Vertical 3-line lead "Hold the rail. / Float. / Then swim." (desktop); horizontal in flow on mobile (KV #5) |
| Pill CTA / tab language | Hero info pill: ages · 32 °C teaching pool · next term · Book a trial (KV #6) |
| Pinned horizontal card track, diagonal hairline + italic number, oval 280×360 portraits | Home "A day at Umi" scroll-snap strip, 6 white cards 680×440, oval 220×283, numbers 01–06 (T2); also Programmes, Timetable, Coaches, First lesson, Stories |
| Vertical 120px "Service" title + pill tab list + arc-top panel | Home Programmes (Kids / Adults / Private) (T3); also Programmes, Timetable, Fees, FAQ, Pool pages |
| Concept02 wide photo ±5% parallax | Home concept C1 16:9 sp-parallax 6% beside a white card bleeding left |
| Section fade y30 0.9s stagger 0.2; copy clip wipe | sp-reveal--up (--sp-dist 30px, 0.9s) + sp-stagger; sp-reveal--mask on leads |
| Palette #EBF3F3 / #C2DBDD / #78B6D6 / #3C465A | same values; row hex #6E8CA0 for labels/hairlines |
| Shippori Mincho + Red Hat Display italic | Inter Tight body + Figtree (italic labels/numbers), CJK Noto Sans TC/JP (row: sans) |
