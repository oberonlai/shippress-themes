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
<td valign="top"><img src="https://shots.codotx.com/sekisan-partners/home-desktop.webp" width="640" alt="Sekisan Partners home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/sekisan-partners/home-mobile.webp" width="200" alt="Sekisan Partners home page on mobile"></td>
</tr>
</table>

- About: [desktop](https://shots.codotx.com/sekisan-partners/about-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/about-mobile.webp)
- How we estimate: [desktop](https://shots.codotx.com/sekisan-partners/how-we-estimate-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/how-we-estimate-mobile.webp)
- Fees and scope: [desktop](https://shots.codotx.com/sekisan-partners/fees-and-scope-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/fees-and-scope-mobile.webp)
- Cases: [desktop](https://shots.codotx.com/sekisan-partners/cases-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/cases-mobile.webp)
- Cost letter: [desktop](https://shots.codotx.com/sekisan-partners/cost-letter-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/cost-letter-mobile.webp)
- Notes: [desktop](https://shots.codotx.com/sekisan-partners/notes-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/notes-mobile.webp)
- Request a proposal: [desktop](https://shots.codotx.com/sekisan-partners/request-a-proposal-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/request-a-proposal-mobile.webp)
- Privacy notice: [desktop](https://shots.codotx.com/sekisan-partners/privacy-notice-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/privacy-notice-mobile.webp)
- Terms: [desktop](https://shots.codotx.com/sekisan-partners/terms-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/terms-mobile.webp)
- Thanks: [desktop](https://shots.codotx.com/sekisan-partners/thanks-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/thanks-mobile.webp)
- News: [desktop](https://shots.codotx.com/sekisan-partners/news-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/sekisan-partners/article-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/sekisan-partners/category-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/sekisan-partners/tag-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/sekisan-partners/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/sekisan-partners/contact-desktop.webp) · [mobile](https://shots.codotx.com/sekisan-partners/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/sekisan-partners/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/sekisan-partners/ja/home-desktop.webp) · [fr](https://shots.codotx.com/sekisan-partners/fr/home-desktop.webp) · [de](https://shots.codotx.com/sekisan-partners/de/home-desktop.webp)
<!-- screenshots:end -->
