# Hinata Market

Hinata Market is a gazette-inspired WordPress block theme designed for weekend farmers' markets, community food hubs and local grower collectives. Set within a crisp ruled frame, it presents weekly stall allocations, seasonal harvests and market notices through a printed-newspaper layout.

## Structure
- `patterns/front*.php`, `ticker.php`, `stalls-strip.php`, `season-band.php`, `apply.php`, `fees.php`, `foot-trio.php`: the home page, in that order.
- `parts/header.html`, `parts/footer.html` load the `header-main` and `footer-main` patterns (masthead strip, one menu, colophon).
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll reveal, marquee and parallax (unchanged shared files).
- `assets/shippress-forms.css`, `inc/shippress-forms.php`: optional contact and newsletter forms (mailto fallback without plugins).
- `inc/i18n/<lang>.php`: theme strings; `demo-content.json`: sample content.

Navigation: one top menu (About, Notices, Stalls, Visit, Apply, Contact). Fonts: Hanken Grotesk (display) and Albert Sans (text), both OFL-1.1, listed in `theme-meta.json`.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

## Notes
- Headings and notice titles use the deep russet (`#8A5638`) so the colour carries through the type; body copy stays in ink.
- Menu items link to real pages (About, Notices, Stalls, Visit, Apply, Contact) created by the demo import.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/hinata-market/home-desktop.webp" width="640" alt="Hinata Market home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/hinata-market/home-mobile.webp" width="200" alt="Hinata Market home page on mobile"></td>
</tr>
</table>

- About: [desktop](https://shots.codotx.com/hinata-market/about-desktop.webp) · [mobile](https://shots.codotx.com/hinata-market/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/hinata-market/news-desktop.webp) · [mobile](https://shots.codotx.com/hinata-market/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/hinata-market/article-desktop.webp) · [mobile](https://shots.codotx.com/hinata-market/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/hinata-market/category-desktop.webp) · [mobile](https://shots.codotx.com/hinata-market/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/hinata-market/tag-desktop.webp) · [mobile](https://shots.codotx.com/hinata-market/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/hinata-market/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/hinata-market/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/hinata-market/contact-desktop.webp) · [mobile](https://shots.codotx.com/hinata-market/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/hinata-market/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/hinata-market/ja/home-desktop.webp) · [fr](https://shots.codotx.com/hinata-market/fr/home-desktop.webp) · [de](https://shots.codotx.com/hinata-market/de/home-desktop.webp)
<!-- screenshots:end -->
