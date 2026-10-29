# Kairo Supply

Kairo Supply is a photographic block theme designed for electrical wholesalers and trade counters. Built around a hairline grid, documentary photography, and structured trade account onboarding, it presents stocked ranges, cutting bay services, and contractor accounts with calm precision. Engineered for clarity and fast navigation, the theme delivers responsive tables, accessible typography, and purpose-built block patterns.

## Design
- White 176 px hairline grid with plus ticks, a giant ink wordmark cut by both viewport edges, a stadium-shaped documentary photograph with parallax, and one tagline spread across the full width.
- Egg-shaped story photograph, a blurred dark stage with a big list, outlined pills with a 5 px dot as the one repeated call to action.
- Fonts: Inter Tight (headings) and Hanken Grotesk (text), bundled as Latin variable subsets (OFL-1.1, see `assets/fonts/`).
- 13 documentary photographs in `assets/images/`; none contain text or logos.

## Structure
- `patterns/front-*.php`: the nine home sections (key visual, counter story, dark stage, how an account opens, range, prices, stories, team, apply).
- `templates/`: front page, page, index, single, archive, search, 404.
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll effects (parallax, reveal).
- `demo-content.json`: sample content (English); the header menu uses the home page anchors.
- Scroll effects respect `prefers-reduced-motion`; content is fully visible without JavaScript.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="Kairo Supply home page on desktop"></td>
<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="Kairo Supply home page on mobile"></td>
</tr>
</table>

- Apply: [desktop](screenshots/apply-desktop.webp) · [mobile](screenshots/apply-mobile.webp)
- Counter: [desktop](screenshots/counter-desktop.webp) · [mobile](screenshots/counter-mobile.webp)
- Range: [desktop](screenshots/range-desktop.webp) · [mobile](screenshots/range-mobile.webp)
- Prices: [desktop](screenshots/prices-desktop.webp) · [mobile](screenshots/prices-mobile.webp)
- Stories: [desktop](screenshots/stories-desktop.webp) · [mobile](screenshots/stories-mobile.webp)
- Team: [desktop](screenshots/team-desktop.webp) · [mobile](screenshots/team-mobile.webp)
- Visit: [desktop](screenshots/visit-desktop.webp) · [mobile](screenshots/visit-mobile.webp)
- Early access: [desktop](screenshots/early-access-desktop.webp) · [mobile](screenshots/early-access-mobile.webp)
- News: [desktop](screenshots/news-desktop.webp) · [mobile](screenshots/news-mobile.webp)
- Article: [desktop](screenshots/article-desktop.webp) · [mobile](screenshots/article-mobile.webp)
- Category: [desktop](screenshots/category-desktop.webp) · [mobile](screenshots/category-mobile.webp)
- Tag: [desktop](screenshots/tag-desktop.webp) · [mobile](screenshots/tag-mobile.webp)
- Privacy: [desktop](screenshots/privacy-desktop.webp) · [mobile](screenshots/privacy-mobile.webp)
- Terms: [desktop](screenshots/terms-desktop.webp) · [mobile](screenshots/terms-mobile.webp)
- Thanks: [desktop](screenshots/thanks-desktop.webp) · [mobile](screenshots/thanks-mobile.webp)
- About: [desktop](screenshots/about-desktop.webp) · [mobile](screenshots/about-mobile.webp)
- Newsletter: [desktop](screenshots/newsletter-desktop.webp) · [mobile](screenshots/newsletter-mobile.webp)
- Contact: [desktop](screenshots/contact-desktop.webp) · [mobile](screenshots/contact-mobile.webp)
- Other languages (home page): [zh-TW](screenshots/zh-TW/home-desktop.webp) · [ja](screenshots/ja/home-desktop.webp) · [fr](screenshots/fr/home-desktop.webp) · [de](screenshots/de/home-desktop.webp)
<!-- screenshots:end -->
