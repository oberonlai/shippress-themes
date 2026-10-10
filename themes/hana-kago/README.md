# Hana Kago

A romantic, lush block theme for **florists** who sell bouquets, baskets, dried flowers, wreaths and flower subscriptions online. A ShipPress **store** theme: WooCommerce templates styled to match, nine sample products, and a shop page that still works without WooCommerce.

*Hana kago* means "flower basket". The demo shop, **Hana Kago**, is a fictional four-person florist on Petal Row in the fictional town of Ashcombe, run by Mina Hart (founder, florist), Jun Okada (dried flowers and wreaths), Tess Arden (deliveries by bicycle) and Ravi Linde (counter, orders and subscriptions).

## Concept: flowers pressed into an album

- **Blush paper, coral, leaf green.** Blush-paper pages with a faint paper grain drawn only in CSS (three speck layers on prime-sized tiles), coral as the petal accent (shapes and large type only), deep coral for links and small accents, leaf green for headings and the footer, a green-black ink for text.
- **Pressed-flower masonry (L8).** The home page's "flower table" is a masonry of cards in CSS columns. Every card is a sheet of pressed-flower paper with **soft, deckled edges** (a CSS mask: an inset rectangle plus two rows of bumps of different sizes on each side, so the edge looks torn rather than scalloped), a drop shadow that follows the torn edge, and a slight tilt that straightens on hover. Bouquet cards carry a specimen number, the name, a field-note line in italic and the price; between them sit a quote, the subscription card (leaf green), a pressed specimen, same-day delivery and a care card. On phones the bouquets go two by two and each text card spans both columns between the pairs. The journal, the shop, the WooCommerce product grid, the people and the past letters use the same masonry.
- **Album details.** Photographs on an "album mount" with four photo corners, deckled photographs, a stem-and-bud label before every section label, petal bullets, a stem separator, DM Serif Display italic in deep coral for the tender words in a title. Motion stops under `prefers-reduced-motion`.

## Header, footer, layout (ROADMAP codes)

- **Header H8: transparent over the hero, solid on scroll.** The header is fixed and transparent over the top of every page (on the home page over the photograph, under a blush veil). Over the first 160 px of scrolling it turns into blush paper with a hairline and a soft shadow: a CSS scroll-driven animation where supported, otherwise `assets/js/header.js` adds `is-solid`. Wordmark with a four-petal CSS mark on the left, the menu on the right; with WooCommerce the account link and mini cart follow (Block Hooks).
- **Footer F4: newsletter-led block.** The footer opens with the Monday stem letter in large type: what it brings, an email form and a dried posy on deckled paper, above a slim colophon with the wordmark, the shop details (synced) and the menu. The green starts with a deckled top edge.
- **Layout L8: card mosaic / masonry** (see above). Unlike the other L8 themes (Kami Salon: black and magenta, diagonal scissor-cut crops; Aizome Shoten: book-cover mosaic under index tabs) Hana Kago is light, soft-edged and tilted, with photographs at their own proportions.

## One source for shared details

The shop's address, hours, phone, email and social links (**shop card**) and the **delivery table** (areas, same-day cut-off times, fees) each live in ONE synced pattern (`wp_block`), created on activation by `inc/shared-info.php` from `inc/info/shop.html` and `inc/info/delivery.html`, tagged `_hana_kago_info` and never created twice. The footer, Delivery, Subscriptions, Shop and Contact pages and the product template only hold `<!-- wp:block {"ref":…} /-->` references (through the `hana-kago/shop-info` and `hana-kago/delivery-info` patterns). No other copy repeats the hours, address, phone, cut-off times or fees.

The bouquet cards on the home page and the no-WooCommerce shop page are built from one list (`hana_kago_specimens()` in `functions.php`).

## Palette

| Token | Hex | Use |
|---|---|---|
| paper | `#FDF2EF` | page ground (blush paper) |
| card | `#FFFAF8` | paper cards, mounts |
| petal | `#F8E1DA` | soft panels |
| coral | `#E26D5A` | petals, the mark, bullets, large italic numerals (shapes and large text only) |
| coral-deep | `#A63F2C` | links, prices, title emphasis, small accent text |
| leaf | `#3E5C3A` | headings, buttons, footer |
| moss | `#2A3F27` | dark hover |
| ink | `#24301F` | body text |

Contrast (WCAG 2.x): ink on paper 12.6:1; leaf on paper 6.8:1, on petal 6.0:1; coral-deep on paper 5.7:1, on petal 5.0:1; muted text `#6E5752` on paper 6.1:1, on petal 5.3:1; paper on leaf 6.8:1 (footer and green cards); white-ish card on coral-deep buttons 6.2:1. Coral itself (2.9:1 on paper) is never used for small text; the blush `#F4B6A8` on leaf (4.3:1) only for large italic headings.

## Type

Both fonts are OFL-1.1, Latin subsets of the official files in google/fonts, bundled as WOFF2. Nothing loads from a CDN.

- **DM Serif Display** (regular + italic): headings, the wordmark, prices, quotes, the italic tender words, step numerals.
- **DM Sans** (variable): body text, navigation, labels, buttons, tables and forms.

## Pages

| Page | Template | Patterns |
|---|---|---|
| Home (front page) | `front-page` | photograph under the transparent header, this week's flower table (masonry), pressed not thrown away, latest journal (masonry) |
| Shop | `page-wide` (WooCommerce: `archive-product`) | the flower table with every bouquet and price, order by phone or email (shop card) |
| Subscriptions | `page-wide` | head with the flower box, weekly / fortnightly / monthly plans, a year of deliveries (masonry) + delivery table, questions |
| Delivery | `page-wide` | head with the cargo bike, areas + cut-off times + fees (synced) beside collecting from the shop (synced), how a bouquet reaches you, questions |
| About | `page-wide` | story with the florist at the counter, the four people (masonry), promises |
| Journal (posts page) | `home` | masonry of pressed-paper post cards with category chips |
| Newsletter | `page-wide` | sign-up, recent letters (masonry) |
| Contact | `page-wide` | shop card, photograph, message form |

Plus six journal posts with featured photographs, three categories, seven tags, the main menu, and the static front page and posts page. Single posts, categories, tags, archives, search and 404 have their own templates. The forms are plain HTML: connect them to your form or email service.

## WooCommerce (optional)

Templates: `archive-product`, `single-product` (with the delivery table), `page-cart`, `page-checkout` (own `checkout-header` part), `page-my-account`, `order-confirmation`, `product-search-results`; shop styles in `assets/css/woocommerce.css` (loaded only with WooCommerce). Product cards are pressed paper in masonry columns, with the photograph at its own proportions. `inc/woo-import.php` adds nine products in six categories (bouquets, baskets, dried & pressed, wreaths, gifts & vases, subscriptions) with photographs, prices, SKUs, stock, tags and details, only while WooCommerce is active, never twice.

**Without WooCommerce** nothing store-specific loads; the Shop page shows every bouquet with its photograph and price and how to order.

## Files

```
style.css               header + all theme CSS
theme.json              palette, fonts, sizes, spacing, element and block styles
functions.php           supports, styles + header script, block styles, pattern category, header shop blocks, bouquet list
inc/demo-import.php     shared ShipPress importer (identical in every theme)
inc/woo-import.php      sample products, only with WooCommerce
inc/shared-info.php     synced patterns for the shop card and the delivery table (+ inc/info/*.html)
demo-content.json       pages, posts, terms, menu, products, catalogue screens
templates/ parts/ patterns/
assets/css/woocommerce.css  assets/js/header.js
assets/fonts/           DM Serif Display, DM Sans (+ OFL texts)
assets/images/          AI-generated photographs (+ demo/ copies for the Media Library)
```
