# Sukoyaka Family Clinic

A quiet, photograph-led block theme for a **family medical clinic**: a general practice with two doctors, four nurses and a dispensary, caring for every age from newborns to older patients.

The demo clinic is fictional: Sukoyaka Family Clinic, founded in 1998 by Dr Ellen Hart at 18 Linden Row, Ashford Green, with Dr Tomas Lindqvist (family doctor), Ruth Okafor (lead nurse) and Grace Whitfield (reception). The whole brand (people, place, tone, a day at Linden Row) is written down in [`brand.md`](brand.md); every page's copy comes from it. Type: health. Sample content in English, Traditional Chinese (zh-TW), Japanese, French and German. Built to the quality gate in ROADMAP §4 (rule 0) and `rules.quality_gate` in design-plan.json (row b6-7).

## Concept: a calm clinic that tells you how long

- **Palette.** Linen `#F6F4EF` ground, stone `#ECE8E0` panels, paper `#FBFAF7` fields, ink `#23292A` text, quiet ink `#5E6763` secondary text, and a single muted green, oitake `#6A8372`, for links, rules, labels and one button. Pale oitake `#D9E1DB` and mist `#B7BFBA` appear only as quiet fills and hairlines. The photographs carry the colour.
- **Type.** Literata (display) up to 4.5 rem over Source Sans 3 (text, labels and lists).
- **Photographs.** 16 soft daylight photographs of one clinic: the waiting room, reception, the two doctors, the nursing team, consulting and treatment rooms, a baby check, vaccination, blood pressure, the dispensary and a home visit. No cut-outs, no illustrations.

## Front page

A quiet first screen with the sentence on the left and a waiting-room photograph on the right, over a slim opening-hours line; a welcome from the founder with two photographs; a visit from reception to the dispensary as one vertical path with four photographed stops; the two doctors and the nursing team; care for every age; opening hours, vaccinations and health checks as plain lists; the journal; and how to find us.

## Languages

The sample content and every word the theme itself shows come in **en, zh-TW, ja, fr and de**, using the mechanism of Hokuto Driving School 1.1.0: the shared importer picks the language (`shippress_demo_lang`, else the site language) and imports `demo-content.<lang>.json`; patterns print their words through `sukoyaka_family_clinic_t( 'key' )` from `inc/i18n/<lang>.php` (English fallback, `inc/i18n.php`), and the synced company card starts from `inc/info/<lang>/office.html`.

The copy is localised, not translated: the clinic and people keep the brand (Dr Hart, Dr Lindqvist, Ruth, Linden Row, Ashford Green), while the wording of appointments, insurance and opening hours follows each market (a Taiwanese family-medicine clinic with registration and National Health Insurance cards, a Japanese neighbourhood internal-medicine clinic, a French cabinet de medecine generale, a German Hausarztpraxis).

- **Type.** zh-TW headings use a bundled subset of Noto Serif TC (Regular), ja headings a bundled subset of Noto Serif JP (Regular), built with fontTools from exactly the characters of that language's sample text; Latin letters and figures stay in Literata. CJK headings run at about three quarters of the English sizes, body line height 1.85, no italics.
- **German and French** paragraphs hyphenate (`hyphens: auto`).

## One source for shared details

The clinic details (address, opening hours, telephone, email, finding us) are one synced pattern created on activation from `inc/info/<lang>/office.html`; the footer and Contact only reference it.

## Pages and templates

Home, Care, Your visit, Doctors and nurses, Families, Vaccinations and checks, About, Journal, Newsletter, Contact; six posts in three categories (Clinic news, Health notes, Families). Templates: front page, page, wide page, single, archive, category, tag, home (posts), search, 404.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`). Photographs generated with Grok for this theme, released under GPL-2.0-or-later / CC0. All names, the city, the address, telephone numbers and figures are fictional.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/sukoyaka-family-clinic/home-desktop.webp" width="640" alt="Sukoyaka Family Clinic home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/sukoyaka-family-clinic/home-mobile.webp" width="200" alt="Sukoyaka Family Clinic home page on mobile"></td>
</tr>
</table>

- Care: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/care-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/care-mobile.webp)
- Your visit: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/your-visit-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/your-visit-mobile.webp)
- Team: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/team-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/team-mobile.webp)
- Families: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/families-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/families-mobile.webp)
- Vaccinations and checks: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/vaccinations-and-checks-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/vaccinations-and-checks-mobile.webp)
- About: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/about-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/news-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/article-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/category-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/tag-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/contact-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/contact-mobile.webp)
- Search: [desktop](https://shots.codotx.com/sukoyaka-family-clinic/search-desktop.webp) · [mobile](https://shots.codotx.com/sukoyaka-family-clinic/search-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/sukoyaka-family-clinic/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/sukoyaka-family-clinic/ja/home-desktop.webp) · [fr](https://shots.codotx.com/sukoyaka-family-clinic/fr/home-desktop.webp) · [de](https://shots.codotx.com/sukoyaka-family-clinic/de/home-desktop.webp)
<!-- screenshots:end -->
