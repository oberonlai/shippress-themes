# Yoru Chocolate

A luxe, quiet block theme for a **small bean-to-bar chocolatier** and its online shop. A ShipPress **store** theme: WooCommerce templates styled to match, eight sample products in three categories, and a shop that still works without WooCommerce.

Version 1.1.0 (redesign, tategaki vertical scroll).

The demo chocolatier is fictional: Yoru Chocolate, working at night in a former print shop at 3-8 Kanzaki-dōri, Hoshikawa City, founded in 2014 by chocolatier Nao Fujisaki with roaster Ken Arima. Shop hours Wednesday to Sunday, 12:00 – 19:00; closed Monday and Tuesday.

## Concept: a page written vertically at night

- **Archetype.** Tategaki vertical scroll: titles are written top to bottom and read right to left, with wide empty space (ma), asymmetric placement and washi fibres under every surface.
- **Palette.** Iron navy (tetsukon) `#17184B` over most of the page, yoru night `#0F1035` for the rail and night bands, kinari `#F4EFE3` text (14.4:1), yamabuki `#F8B500` for marks, buttons and one full band (9.1:1 against tetsukon both ways), washi `#EDE6D3` light sections with tetsukon text (13.3:1) and usuzumi `#5A5878` quiet text (5.4:1). On washi, yamabuki never carries text; emphasis becomes sesame dots (bōten).
- **Type.** Kaisei Decol (display, vertical titles, menu, prices) and BIZ UDPGothic (text, labels, forms), both OFL, Latin subsets.
- **Illustrations.** Maki-e lacquer drawings in gold and yamabuki on navy (Grok Build image_gen), one picture per use.
- **Details as product attributes.** Origin, cacao, pieces or weight and keeping time are attributes of each product; cacao and origin print under every price ("Cacao 70% · Tanzania"), from that one source.

## Header, footer, layout (ROADMAP codes)

- **H11 header.** A fixed rail on the right edge: the wordmark and tagline written vertically, the whole menu as vertical columns, account and mini cart below. Under 1100 px a slim top bar; on phones the overlay menu.
- **F1 footer.** On washi: Yoru written huge and vertically beside a yamabuki moon, the shop line, links and the synced shop card.
- **L5 home layout.** A full-height vertical title beside a tall maki-e drawing of a moon over a box of bonbons; every section title down a vertical spine with a Japanese numeral; eight pieces as staggered tall strips with vertical names (washi); the four origins as vertical columns (yamabuki band); the shop window at night; roast, grind, temper stepping down from right to left; gift boxes (washi); the journal as vertical spines.

## One source for shared details

| What | Source | Shown on |
| --- | --- | --- |
| Chocolatier, shop address, hours, telephone, email | `inc/info/` shop card (synced pattern) | Footer, Origins, Contact |
| Warm-weather shipping and keeping note | `inc/info/care.html` (synced pattern) | Home, Gift boxes, every product page |
| Origins: Tanzania Kokoa Kamili 70%, Peru Marañón 66%, Vietnam Tiền Giang 72%, Belize Toledo 75% | `inc/info/lines.html` (synced pattern) | Footer, Origins |
| Cacao and origin line | each product's `Cacao` and `Origin` attributes | Product cards and product page |

## Pages and templates

Demo pages: Home, Shop, Origins (the chocolatier and roaster, the four beans, the shop), Gift boxes (the box of twelve, keeping, the shipping season), Journal (posts page), Newsletter and Contact. Six sample posts in three categories (In the kitchen, Beans and roasting, Notes from Kanzaki-dōri) with six tags.

Templates: front page, page, wide page, single post, journal, archive, category, tag, search, 404, plus WooCommerce shop, product category and tag archives, product, cart, checkout, my account, order confirmation and product search.

## WooCommerce

Optional. With it active, `inc/woo-import.php` adds three product categories (Bonbons, Tablets, Gift boxes), five tags (rose, tea, nut, seasonal, gift) and eight products with images, prices and attributes; run twice it creates nothing new. Without it the home shelf and the Shop page show a static shelf that links to Contact, and orders go by email.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`): Kaisei Decol and BIZ UDPGothic, Latin WOFF2 subsets (no Reserved Font Names). Images AI-generated for this theme with Grok Build image_gen, maki-e lacquer illustration style, released under GPL-2.0-or-later.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="Yoru Chocolate home page on desktop"></td>
<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="Yoru Chocolate home page on mobile"></td>
</tr>
</table>

- Shop: [desktop](screenshots/shop-desktop.webp) · [mobile](screenshots/shop-mobile.webp)
- Product: [desktop](screenshots/product-desktop.webp) · [mobile](screenshots/product-mobile.webp)
- About: [desktop](screenshots/about-desktop.webp) · [mobile](screenshots/about-mobile.webp)
- Gift boxes: [desktop](screenshots/gift-boxes-desktop.webp) · [mobile](screenshots/gift-boxes-mobile.webp)
- Contact: [desktop](screenshots/contact-desktop.webp) · [mobile](screenshots/contact-mobile.webp)
- News: [desktop](screenshots/news-desktop.webp) · [mobile](screenshots/news-mobile.webp)
- Article: [desktop](screenshots/article-desktop.webp) · [mobile](screenshots/article-mobile.webp)
- Category: [desktop](screenshots/category-desktop.webp) · [mobile](screenshots/category-mobile.webp)
- Tag: [desktop](screenshots/tag-desktop.webp) · [mobile](screenshots/tag-mobile.webp)
- Newsletter: [desktop](screenshots/newsletter-desktop.webp) · [mobile](screenshots/newsletter-mobile.webp)
- Search: [desktop](screenshots/search-desktop.webp) · [mobile](screenshots/search-mobile.webp)
<!-- screenshots:end -->
