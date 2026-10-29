# Sekisan Partners

Sekisan Partners is an independent building cost consultancy WordPress theme crafted for precise commercial presentation and clear project budgeting. Designed around an architectural split-screen layout with an ink framing rail and bold index typography, it guides prospective clients smoothly from early concept estimates to formal proposal requests. Built for longform clarity, the theme delivers dependable performance across all screen sizes.

## Design
- A fixed 84 px solid ink-green rail frames every page (round "up" button, language codes, vertical wordmark); a 56 px top bar replaces it below 1024 px.
- Numbered caps index rows with blue and teal numerals, and section headings with a coloured first letter.
- Square buttons with a 3 px border and an arrow, one repeated call to action; a coral tile and a coral first letter as the only warm spot.
- Fonts: Albert Sans (headings) and Onest (text), bundled as Latin variable subsets (OFL-1.1, see `assets/fonts/`).
- 16 documentary high-key photographs in `assets/images/`; none contain text or logos.

## Structure
- `patterns/front-*.php`: the nine home sections (hero, gap, index, estimate, handover, fees, cases, people, request).
- `templates/`: front page, page, page-inner (each inner page carries its own coloured-first-letter heading), index, home and archive (notes as hairline rows), single, search, 404.
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll effects (parallax, reveal).
- `demo-content.json`: sample content (English): home plus About, How we estimate, Fees & scope, Cases, Cost letter, Notes, Privacy, Terms, Thanks and Request pages, plus one note (Method category); the header menu links to the inner pages.
- Scroll effects respect `prefers-reduced-motion`; content is fully visible without JavaScript.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="Sekisan Partners home page on desktop"></td>
<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="Sekisan Partners home page on mobile"></td>
</tr>
</table>

- About: [desktop](screenshots/about-desktop.webp) · [mobile](screenshots/about-mobile.webp)
- How we estimate: [desktop](screenshots/how-we-estimate-desktop.webp) · [mobile](screenshots/how-we-estimate-mobile.webp)
- Fees and scope: [desktop](screenshots/fees-and-scope-desktop.webp) · [mobile](screenshots/fees-and-scope-mobile.webp)
- Cases: [desktop](screenshots/cases-desktop.webp) · [mobile](screenshots/cases-mobile.webp)
- Cost letter: [desktop](screenshots/cost-letter-desktop.webp) · [mobile](screenshots/cost-letter-mobile.webp)
- Notes: [desktop](screenshots/notes-desktop.webp) · [mobile](screenshots/notes-mobile.webp)
- Request a proposal: [desktop](screenshots/request-a-proposal-desktop.webp) · [mobile](screenshots/request-a-proposal-mobile.webp)
- Privacy notice: [desktop](screenshots/privacy-notice-desktop.webp) · [mobile](screenshots/privacy-notice-mobile.webp)
- Terms: [desktop](screenshots/terms-desktop.webp) · [mobile](screenshots/terms-mobile.webp)
- Thanks: [desktop](screenshots/thanks-desktop.webp) · [mobile](screenshots/thanks-mobile.webp)
- News: [desktop](screenshots/news-desktop.webp) · [mobile](screenshots/news-mobile.webp)
- Article: [desktop](screenshots/article-desktop.webp) · [mobile](screenshots/article-mobile.webp)
- Category: [desktop](screenshots/category-desktop.webp) · [mobile](screenshots/category-mobile.webp)
- Tag: [desktop](screenshots/tag-desktop.webp) · [mobile](screenshots/tag-mobile.webp)
- Newsletter: [desktop](screenshots/newsletter-desktop.webp) · [mobile](screenshots/newsletter-mobile.webp)
- Contact: [desktop](screenshots/contact-desktop.webp) · [mobile](screenshots/contact-mobile.webp)
- Other languages (home page): [zh-TW](screenshots/zh-TW/home-desktop.webp) · [ja](screenshots/ja/home-desktop.webp) · [fr](screenshots/fr/home-desktop.webp) · [de](screenshots/de/home-desktop.webp)
<!-- screenshots:end -->
