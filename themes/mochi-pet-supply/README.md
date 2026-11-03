# Mochi Pet Supply

Mochi Pet Supply is a neighbourhood pet-food and supplies shop in Leith, Edinburgh, founded in 2017 and selling online across the UK in pounds. The site starts with three questions — species, age, and one thing to watch — then shows the food and a subscribe-and-save price at 10% off repeat deliveries. Shop, product, cart, checkout, account and order-received pages are set up for WooCommerce and still read as ordinary pages without it.

## Design
A white ground with ink and one muted mustard accent (#B8973F) on small areas only. Alegreya Sans for headings and prices, Alegreya for text (both OFL, bundled). Signature moves: a floating pill header with a mustard basket square and a "next dispatch" chip, a staggered two-column photo mosaic, and a rounded-top ink band with a scroll-snap strip of square product cards. Every photograph is generated from one style string; no cut-outs.

## Structure
- `patterns/front-*.php`: the nine home sections (hero, finder, concept, box, subscribe, interlude, desk, stories, visit); `patterns/head-cart.php`: the header cart square.
- `parts/`: floating pill header (collapses to a full-screen menu below 960px; the basket links to the WooCommerce cart, or to `/shop/` without it) and ink footer. `templates/`: front page, page, index, home, archive, search, tag, single, 404, plus WooCommerce archive-product and single-product.
- `assets/sp-scroll.css|js`: ShipPress scroll effects (fade-up, stagger, parallax). `assets/images/demo/`: AI-generated photographs (GPL-2.0-or-later / CC0).

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/mochi-pet-supply/home-desktop.webp" width="640" alt="Mochi Pet Supply home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/mochi-pet-supply/home-mobile.webp" width="200" alt="Mochi Pet Supply home page on mobile"></td>
</tr>
</table>

- Shop: [desktop](https://shots.codotx.com/mochi-pet-supply/shop-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/shop-mobile.webp)
- Product: [desktop](https://shots.codotx.com/mochi-pet-supply/product-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/product-mobile.webp)
- Food finder: [desktop](https://shots.codotx.com/mochi-pet-supply/food-finder-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/food-finder-mobile.webp)
- Subscribe and save: [desktop](https://shots.codotx.com/mochi-pet-supply/subscribe-and-save-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/subscribe-and-save-mobile.webp)
- About: [desktop](https://shots.codotx.com/mochi-pet-supply/about-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/about-mobile.webp)
- Nutrition desk: [desktop](https://shots.codotx.com/mochi-pet-supply/nutrition-desk-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/nutrition-desk-mobile.webp)
- Feeding guides: [desktop](https://shots.codotx.com/mochi-pet-supply/feeding-guides-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/feeding-guides-mobile.webp)
- Delivery returns: [desktop](https://shots.codotx.com/mochi-pet-supply/delivery-returns-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/delivery-returns-mobile.webp)
- Stories: [desktop](https://shots.codotx.com/mochi-pet-supply/stories-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/stories-mobile.webp)
- Visit: [desktop](https://shots.codotx.com/mochi-pet-supply/visit-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/visit-mobile.webp)
- News: [desktop](https://shots.codotx.com/mochi-pet-supply/news-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/mochi-pet-supply/article-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/mochi-pet-supply/category-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/mochi-pet-supply/tag-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/mochi-pet-supply/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/mochi-pet-supply/contact-desktop.webp) · [mobile](https://shots.codotx.com/mochi-pet-supply/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/mochi-pet-supply/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/mochi-pet-supply/ja/home-desktop.webp) · [fr](https://shots.codotx.com/mochi-pet-supply/fr/home-desktop.webp) · [de](https://shots.codotx.com/mochi-pet-supply/de/home-desktop.webp)
<!-- screenshots:end -->
