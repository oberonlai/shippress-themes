# Kasumi Mortgage

A calm, photograph-led block theme for an **independent mortgage broker**: first homes, moving home, remortgages, self-employed and buy-to-let cases, later-life lending.

The demo firm is fictional: founded in 2011 by Naomi Hale, a former building-society underwriter, at her own kitchen table, and run today from a former bookshop at 9 Linden Row, Ashcombe, with Tom Ellery, Owen Marsh and Elif Demir. The whole brand (people, place, tone, a day at the office) is written down in [`brand.md`](brand.md); every page's copy comes from it. Type: business. Sample content in English, Traditional Chinese (zh-TW), Japanese, French and German. Built to the quality gate in ROADMAP §4 (rule 0) and `rules.quality_gate` in design-plan.json (row b6-4).

## Concept: from the first call to the keys

- **Palette.** Mist paper `#F3F1EC` ground, stone `#E6E3DC` panels, paper `#FAF9F6` fields, ink `#1F2529` text, quiet ink `#5A6166` secondary text, deep slate `#2E3B43` for the one dark band and the footer, and a single sabi slate blue `#536A77` for labels, links and rates. A faded brass `#A08A5E` appears only as short rules. The photographs carry the colour; the first screen stays well below 15 % saturated pixels.
- **Type.** Source Serif 4 (display, roman and italic) up to 4.5 rem over Inter (text). Both OFL-1.1 without a Reserved Font Name, subset to Latin WOFF2.
- **Photographs.** 17 documentary photographs generated with one shared style string (35 mm film, candid, available light, muted warm greys and faded slate blue). People appear as hands, backs and calm portraits. No cut-outs, no illustrations.

## Front page

1. **The kitchen table** (top and bottom halves): a wide photograph of a couple and an adviser at their kitchen table under a solid top header; below it the headline "A mortgage, explained *at your kitchen table.*" beside a short paragraph and two links; then a facts bar (since 2011, 90+ lenders, no fee in most cases, office telephone).
2. **An independent broker**: a letter from the founder (two narrative paragraphs) beside the office front room.
3. **How it works**: six photographed steps, from the first call to the keys.
4. **What we arrange, and what it costs**: a paragraph on fees and four plain lines beside a photograph.
5. **This week's rates**: one quiet ruled table and a worked monthly-payment example, well below the first screen.
6. **Advisers**: four portraits with one line each.
7. **First-time buyers**: a deep slate band with a photograph and a client's words.
8. **Journal** (latest three) and a **call to book**.

## Languages

The sample content and every word the theme itself shows come in **en, zh-TW, ja, fr and de**, using the mechanism of Hokuto Driving School 1.1.0: the shared importer picks the language (`shippress_demo_lang`, else the site language) and imports `demo-content.<lang>.json`; patterns print their words through `kasumi_mortgage_t( 'key' )` from `inc/i18n/<lang>.php` (English fallback, `inc/i18n.php`), and the synced office card starts from `inc/info/<lang>/office.html`.

The copy is localised, not translated: the firm and people keep the brand (Naomi, Tom, Owen, Elif, Linden Row, Ashcombe), while products, fees and the buying process follow each country (Taiwanese bank mortgages with loan-to-value ratios and grace periods; Japanese home loans with pre-screening, Flat 35 and group credit life cover; the French prêt immobilier through a courtier with the legal credit warning; the German Baufinanzierung through a Finanzierungsvermittler with Sollzinsbindung and Anschlussfinanzierung), in local currency.

- **Type.** zh-TW headings use a bundled subset of Noto Serif TC (Regular), ja headings a bundled subset of Noto Serif JP (Regular), built with fontTools from exactly the characters of that language's sample text; Latin letters and figures stay in Source Serif 4. CJK headings run at about three quarters of the English sizes, body line height 1.85, no italics.
- **German and French** paragraphs hyphenate (`hyphens: auto`).

## One source for shared details

The office details (address, office hours, telephone, email, getting here) are one synced pattern created on activation from `inc/info/<lang>/office.html`; the footer, Mortgages & fees and Contact only reference it.

## Pages and templates

Home, Mortgages & fees, How it works, Advisers, First-time buyers, Rates & costs, About, Journal, Newsletter, Contact; six posts in three categories (Buying, Remortgaging, Office news). Templates: front page, page, wide page, single, archive, category, tag, home (posts), search, 404.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`). Photographs AI-generated for this theme, released under GPL-2.0-or-later / CC0. All names, the city, the address, telephone numbers, rates and fees are fictional.

<!-- screenshots:start -->
<!-- screenshots:end -->
