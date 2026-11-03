# Aya Paper

Aya Paper is a block theme for a stationery shop in Ghent, with WooCommerce shop templates and eight sample products. The same pages still read clearly when WooCommerce is not active, using the paper list as plain text. The home page is a quiet catalogue: a hairline frame of three photographs, six ruled paper rows with prices in EUR, and a text list of what each weight suits.

## Structure
- `patterns/front-*.php`: the ten home sections (hero frame, shop, papers, counter, weights, wrap, pair, visit, journal, close).
- `patterns/inner-*.php`, `shop-frame.php`, `shop-cats.php`: the inner pages (shop, papers, weights, counter, envelopes and notebooks, prices, about, contact, newsletter) and the shop head pieces.
- `inc/woo-import.php`, `assets/css/woocommerce.css`, `templates/archive-product.html` and the other store templates: the WooCommerce shop, active only with the plugin.
- `templates/`: block templates (front page, page, index/journal, single, archive, tag, category, search, 404).
- `demo-content.json`: sample content (en); the importer is `inc/demo-import.php`.
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll effects (shared component).
- Photos: `assets/images/` (AI-generated, GPL-2.0-or-later).

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/aya-paper/home-desktop.webp" width="640" alt="Aya Paper home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/aya-paper/home-mobile.webp" width="200" alt="Aya Paper home page on mobile"></td>
</tr>
</table>

- Shop: [desktop](https://shots.codotx.com/aya-paper/shop-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/shop-mobile.webp)
- Product: [desktop](https://shots.codotx.com/aya-paper/product-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/product-mobile.webp)
- Papers: [desktop](https://shots.codotx.com/aya-paper/papers-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/papers-mobile.webp)
- Weights: [desktop](https://shots.codotx.com/aya-paper/weights-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/weights-mobile.webp)
- Counter: [desktop](https://shots.codotx.com/aya-paper/counter-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/counter-mobile.webp)
- Envelopes notebooks: [desktop](https://shots.codotx.com/aya-paper/envelopes-notebooks-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/envelopes-notebooks-mobile.webp)
- Prices: [desktop](https://shots.codotx.com/aya-paper/prices-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/prices-mobile.webp)
- About: [desktop](https://shots.codotx.com/aya-paper/about-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/aya-paper/news-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/aya-paper/article-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/aya-paper/category-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/aya-paper/tag-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/aya-paper/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/aya-paper/contact-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/contact-mobile.webp)
- Search: [desktop](https://shots.codotx.com/aya-paper/search-desktop.webp) · [mobile](https://shots.codotx.com/aya-paper/search-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/aya-paper/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/aya-paper/ja/home-desktop.webp) · [fr](https://shots.codotx.com/aya-paper/fr/home-desktop.webp) · [de](https://shots.codotx.com/aya-paper/de/home-desktop.webp)
<!-- screenshots:end -->
