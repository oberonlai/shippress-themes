# Tsumugi Trading

A quiet, photograph-led block theme for a **mid-sized international trading company**: textiles and yarn, tableware and homeware, industrial materials, and logistics and warehousing, sixty years on the quay.

The demo company is fictional: Tsumugi Trading Co., founded in 1964 by Martin Hale and Sumi Aoki at 4 Quay Street, Port Ellery, led today by Margaret Hale, Daniel Reyes and Ines Varga. The whole brand (people, place, tone, a day at Quay Street) is written down in [`brand.md`](brand.md); every page's copy comes from it. Type: business. Sample content in English, Traditional Chinese (zh-TW), Japanese, French and German. Built to the quality gate in ROADMAP §4 (rule 0) and `rules.quality_gate` in design-plan.json (row b6-8).

## Concept: a trading company that says what it buys, ships and checks

- **Palette.** Harbour `#F5F3F0` ground, stone `#EAE5E0` panels, paper `#FBFAF8` fields, ink `#24262A` text, quiet ink `#615C59` secondary text, and a single muted walnut brown, kurumi `#947A6D`, for links, rules, labels, year numerals and one button. Pale kurumi `#E3D9D3` and mist `#BDB6B1` appear only as quiet fills and hairlines. The photographs carry the colour.
- **Type.** Spectral (display) up to 5 rem over Hanken Grotesk (text, labels and lists).
- **Photographs.** 17 documentary photographs of one company: the port at dawn, the quay crane, warehouse aisles and checks, a textile mill, a ceramic factory, the quality lab, the head office and meeting room, two director portraits, two archive photographs, the solar roof, packing, a trainee desk and the truck dock. No cut-outs, no illustrations.

## Front page

An inset full-bleed container-port photograph under a soft rounded corner, with a milestone-year line and a floating news card; who we are with two photographs; four business lines beside a sticky photograph; sixty years as a horizontal row of photographed milestones with large year numerals; three directors; sustainability; careers; news; and contact.

## Languages

The sample content and every word the theme itself shows come in **en, zh-TW, ja, fr and de**, using the mechanism of Hokuto Driving School 1.1.0: the shared importer picks the language (`shippress_demo_lang`, else the site language) and imports `demo-content.<lang>.json`; patterns print their words through `tsumugi_trading_t( 'key' )` from `inc/i18n/<lang>.php` (English fallback, `inc/i18n.php`), and the synced company card starts from `inc/info/<lang>/office.html`.

The copy is localised, not translated: the company and people keep the brand (Margaret Hale, Daniel Reyes, Ines Varga, Quay Street, Port Ellery), while the corporate wording follows each market (a Taiwanese import-export company with a company registration number, a Japanese trading house with a company profile page, a French international trading company, a German trading house in foreign trade).

- **Type.** zh-TW headings use a bundled subset of Noto Serif TC (Regular), ja headings a bundled subset of Noto Serif JP (Regular), built with fontTools from exactly the characters of that language's sample text; Latin letters and figures stay in Spectral. CJK headings run at about three quarters of the English sizes, body line height 1.85, no italics.
- **German and French** paragraphs hyphenate (`hyphens: auto`).

## One source for shared details

The company details (address, office hours, telephone, email, finding us) are one synced pattern created on activation from `inc/info/<lang>/office.html`; the footer and Contact only reference it.

## Pages and templates

Home, Business, How we trade, Leadership, Sustainability, Careers, Company, News, Newsletter, Contact; six posts in three categories (Company news, Sourcing, Careers). Templates: front page, page, wide page, single, archive, category, tag, home (posts), search, 404.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`). Photographs generated with Grok for this theme, released under GPL-2.0-or-later / CC0. All names, the city, the address, telephone numbers and figures are fictional.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/tsumugi-trading/home-desktop.webp" width="640" alt="Tsumugi Trading home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/tsumugi-trading/home-mobile.webp" width="200" alt="Tsumugi Trading home page on mobile"></td>
</tr>
</table>

- Business lines: [desktop](https://shots.codotx.com/tsumugi-trading/business-lines-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/business-lines-mobile.webp)
- How we trade: [desktop](https://shots.codotx.com/tsumugi-trading/how-we-trade-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/how-we-trade-mobile.webp)
- Leadership: [desktop](https://shots.codotx.com/tsumugi-trading/leadership-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/leadership-mobile.webp)
- Sustainability: [desktop](https://shots.codotx.com/tsumugi-trading/sustainability-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/sustainability-mobile.webp)
- Careers: [desktop](https://shots.codotx.com/tsumugi-trading/careers-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/careers-mobile.webp)
- About: [desktop](https://shots.codotx.com/tsumugi-trading/about-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/tsumugi-trading/news-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/tsumugi-trading/article-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/tsumugi-trading/category-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/tsumugi-trading/tag-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/tsumugi-trading/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/tsumugi-trading/contact-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/contact-mobile.webp)
- Search: [desktop](https://shots.codotx.com/tsumugi-trading/search-desktop.webp) · [mobile](https://shots.codotx.com/tsumugi-trading/search-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/tsumugi-trading/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/tsumugi-trading/ja/home-desktop.webp) · [fr](https://shots.codotx.com/tsumugi-trading/fr/home-desktop.webp) · [de](https://shots.codotx.com/tsumugi-trading/de/home-desktop.webp)
<!-- screenshots:end -->
