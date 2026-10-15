# Tsuba Millinery

A bold, Japanese-minimal block theme for a **small milliner's atelier** and its online shop. A ShipPress **store** theme: WooCommerce templates styled to match, eight sample hats in four shape categories, and a shop that still works without WooCommerce.

The demo atelier is fictional: Tsuba Millinery, 2-11 Kasane-chō, Hoshikawa City, run by milliner Rin Tsubaki.

## Concept: washi, Edo purple and the vermilion seal (1.1.0)

- **Palette.** Washi `#F4EFE3` with a faint fibre texture; large fields of edo-murasaki `#745399` (the opening and the letter band; also links and labels, 5.3:1 on washi), ai indigo `#165E83` (fit band, menu overlay) and matcha `#C5C56A` (shapes band); shu vermilion `#EB6101` for the seal, numerals and marks; shikon `#2B1E3A` footer; sumi `#1C1C1C` for text. Gofun `#FBF8F1` on purple 5.8:1 and on indigo 6.7:1.
- **Type.** Kaisei Opti (display, vertical titles, numerals, a few kanji marks drawn from CSS escapes) and M PLUS 2 (text, labels, filters), on a larger scale.
- **Vertical type and ma.** The home title, the shelf title, the shape names and the journal title are set vertically (tategaki); sections sit asymmetrically on a 12-column grid with wide empty margins.
- **Visual style.** Fine-line copperplate etchings hand-tinted with indigo and vermilion, one picture per hat; a cut-out hat (transparent WebP) breaks over the edge of the matcha band.
- **Details as product attributes.** Shape, material, brim and sizes; material and brim print under every price.

## Codes

- **H11 header.** A vertical signboard in the top-left corner: a vermilion seal with the wordmark set vertically, the menu as vertical columns read from the right (numbered one to six), account and mini cart below. On the home page it stands on washi beside the purple field; on phones a seal and a Menu button open an indigo overlay with the menu still vertical.
- **F4 footer.** Letter-led: the seasonal letter on an Edo purple band, then a deep shikon `#2B1E3A` base with the wordmark set vertically, the synced atelier card and two link columns.
- **L5 home layout.** Vertical type: the title beside an etching laid over an Edo purple field, Find your shape (vertical title in the margin, shape / material / head size as a ruled filter table, the hats in a staggered three-column grid), four shapes as vertical strips on matcha, three steps with large numerals, fit and sizing on indigo, the journal as a ruled index.

## One source for shared details

| What | Source | Shown on |
| --- | --- | --- |
| Milliner, atelier address, hours, telephone, email | `inc/info/foundry.html` (synced pattern) | Footer, Atelier, Contact |
| Sizing guide | `inc/info/care.html` (synced pattern) | Fit & sizing, product pages |
| Shapes table | `inc/info/lines.html` (synced pattern) | Made to order, Atelier |
| Material and brim line | each product's `Material` and `Brim` attributes | Product cards and product page |

## Pages and templates

Demo pages: Home, Shop, Fit & sizing, Made to order, Atelier, Journal (posts page), Newsletter and Contact, with sample posts, categories and tags.

Templates: front page, page, wide page, single post, journal, archive, category, tag, search, 404, plus WooCommerce shop, product category and tag archives, product, cart, checkout, my account, order confirmation and product search.

## WooCommerce

Optional. With it active, `inc/woo-import.php` adds four shape categories (Cloche, Boater, Bucket, Wide brim), material tags and eight hats with images, prices and attributes; run twice it creates nothing new. Without it the home catalogue and the Shop page show a static catalogue whose shape and material chips filter it with plain links (no JavaScript), and orders go by email.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`): Kaisei Opti and M PLUS 2 (no Reserved Font Name), subset to Latin WOFF2. Images AI-generated for this theme with Grok Build image_gen, hand-tinted copperplate etching style, released under GPL-2.0-or-later; the washi texture is drawn procedurally.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="Tsuba Millinery home page on desktop"></td>
<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="Tsuba Millinery home page on mobile"></td>
</tr>
</table>

- Shop: [desktop](screenshots/shop-desktop.webp) · [mobile](screenshots/shop-mobile.webp)
- Product: [desktop](screenshots/product-desktop.webp) · [mobile](screenshots/product-mobile.webp)
- About: [desktop](screenshots/about-desktop.webp) · [mobile](screenshots/about-mobile.webp)
- Fit sizing: [desktop](screenshots/fit-sizing-desktop.webp) · [mobile](screenshots/fit-sizing-mobile.webp)
- Made to order: [desktop](screenshots/made-to-order-desktop.webp) · [mobile](screenshots/made-to-order-mobile.webp)
- Contact: [desktop](screenshots/contact-desktop.webp) · [mobile](screenshots/contact-mobile.webp)
- News: [desktop](screenshots/news-desktop.webp) · [mobile](screenshots/news-mobile.webp)
- Article: [desktop](screenshots/article-desktop.webp) · [mobile](screenshots/article-mobile.webp)
- Category: [desktop](screenshots/category-desktop.webp) · [mobile](screenshots/category-mobile.webp)
- Tag: [desktop](screenshots/tag-desktop.webp) · [mobile](screenshots/tag-mobile.webp)
- Newsletter: [desktop](screenshots/newsletter-desktop.webp) · [mobile](screenshots/newsletter-mobile.webp)
- Search: [desktop](screenshots/search-desktop.webp) · [mobile](screenshots/search-mobile.webp)
<!-- screenshots:end -->
