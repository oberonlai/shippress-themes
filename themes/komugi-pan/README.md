# Komugi Pan

A warm, playful block theme for **neighbourhood bakeries** that sell loaves, pastries and sweet buns online. A ShipPress **store** theme: WooCommerce templates styled to match, eight sample products, and a shop page that still works without WooCommerce.

*Komugi* means "wheat" and *pan* "bread". The demo bakery, **Komugi Pan**, is a fictional six-person bakery in a former rice shop in Kichijoji, run by Emi Nakano (head baker), Taro Ishida (pastry) and Saki Mori (counter, coffee and bicycle deliveries).

## Concept: a cooling rack in the morning

- **Flour, crust and rye.** Flour-cream pages with a faint **flour-dust texture** drawn only in CSS (four speckle layers on prime-sized tiles, so it never visibly repeats), white cards, golden crust as the one warm accent and rye brown for text.
- **Products first (L11).** The home page opens with a short greeting and then the bread itself: eight white cards with **loaf-topped (arched) photographs** and **round, slightly askew price stickers**, in a gentle zig-zag like loaves on a cooling rack. The same card is used in the WooCommerce shop and related products.
- **The daily bake board.** A dark oven-brown board lists what comes out of the oven at which time. A tiny script (`assets/js/bake-board.js`) reads the visitor's clock and marks the trays already **Out** and the **Next** one; without it the board reads the same.
- **Playful details.** A scalloped paper-bag edge under the header, a wheat badge that tilts on hover, round "bun" portraits, dotted rows, crumb separators, soft spring easing. Everything stops under `prefers-reduced-motion`.

## Header, footer, layout (ROADMAP codes)

- **Header H2: centred logo with the menu split left and right.** One navigation block (the imported menu); CSS puts items 1 to 3 left of the round wheat badge and the rest on the right. With WooCommerce, the account link and mini cart follow on the right (Block Hooks). On a phone: menu button left, badge and name centred, cart right.
- **Footer F8: photo-strip footer.** "From this week's ovens": six square photographs edge to edge, then an oven-brown colophon with the wordmark, the visit card (synced) and the menu.
- **Layout L11: product-first grid** (see above). Unlike the other L11 theme (Hamono Kaji: dark ruled spec-sheet grid), Komugi Pan is light, rounded and sticker-led.

## One source for shared details

The address, opening hours, phone number and email (**visit card**) and the **daily bake board** each live in ONE synced pattern (`wp_block`), created on activation by `inc/shared-info.php` from `inc/info/visit.html` and `inc/info/bake-board.html`, tagged `_komugi_pan_info` and never created twice. The footer, home, bake schedule, shop and contact pages only hold `<!-- wp:block {"ref":…} /-->` references (through the `komugi-pan/visit-info` and `komugi-pan/bake-board` patterns), so editing the synced pattern once (Appearance > Editor > Patterns) changes every place. No other copy repeats the hours, address, phone or bake times.

## Palette

| Token | Hex | Use |
|---|---|---|
| flour | `#F6E7D3` | page ground |
| white | `#FFFFFF` | cards, header |
| crumb | `#EFD9BD` | soft panels |
| crust | `#C9893F` | golden accent: stickers, dots, letter band (large or with dark text only) |
| crust-deep | `#8A5420` | links, title emphasis |
| rye | `#5A3A22` | text, buttons |
| oven | `#3A2416` | bake board, footer |

Contrast (WCAG 2.x): rye on flour 8.4:1, on white 10.2:1; crust-deep on flour 5.1:1, on white 6.2:1; muted text `#7A5A42` on flour 5.1:1; flour on oven 12.0:1; crust on oven 4.9:1; oven text on crust stickers 4.9:1; white on rye buttons 10.2:1.

Style variation **Night Bake** (`styles/night-bake.json`): a dark oven ground with flour text and a brighter crust.

## Type

Both fonts are OFL-1.1, Latin subsets of the official files in google/fonts, bundled as WOFF2. Nothing loads from a CDN.

- **Young Serif**: headings, the wordmark, prices on the stickers, bake-board times.
- **Outfit** (variable): body text, navigation, tags, buttons, tables and forms.

## Pages

| Page | Template | Patterns |
|---|---|---|
| Home (front page) | `front-page` | today's shelf (greeting + eight products), the bake board by the door, flour/water/salt steps, the bakers, latest journal, the Friday loaf letter |
| Shop | `page-wide` (WooCommerce: `archive-product`) | the bread shelf with prices, reserve by phone or email (visit card) |
| Bake schedule | `page-wide` | page head with the bake board, a day in the bakery (timeline), reserving questions, letter band |
| About | `page-wide` | intro, steps, the people, promises |
| Journal (posts page) | `home` | three-column cards with category chips |
| Newsletter | `page-wide` | sign-up, recent letters |
| Contact | `page-wide` | visit card + photograph, message form |

Plus six journal posts with featured photographs, three categories, six tags, the main menu, and the static front page and posts page. Single posts, categories, tags, archives, search and 404 have their own templates. The forms are plain HTML: connect them to your form or email service.

## WooCommerce (optional)

Templates: `archive-product`, `single-product`, `page-cart`, `page-checkout` (own `checkout-header` part), `page-my-account`, `order-confirmation`, `product-search-results`; shop styles in `assets/css/woocommerce.css` (loaded only with WooCommerce). `inc/woo-import.php` adds eight products (milk shokupan, country sourdough, morning baguette, stone-oven batard, butter croissant, cinnamon roll, melon pan, sesame anpan) with photographs, prices, SKUs, stock, categories, tags and details, only while WooCommerce is active, never twice.

**Without WooCommerce** nothing store-specific loads; the Shop page shows every bread with its photograph and price and how to reserve.

## Files

```
style.css               header + all theme CSS
theme.json              palette, fonts, sizes, spacing, element and block styles
functions.php           supports, styles + bake-board script, block styles, pattern category, header shop blocks
inc/demo-import.php     shared ShipPress importer (identical in every theme)
inc/woo-import.php      sample products, only with WooCommerce
inc/shared-info.php     synced patterns for the visit card and the bake board (+ inc/info/*.html)
demo-content.json       pages, posts, terms, menu, products, catalogue screens
templates/ parts/ patterns/ styles/night-bake.json
assets/css/woocommerce.css  assets/js/bake-board.js
assets/fonts/           Young Serif, Outfit (+ OFL texts)
assets/images/          AI-generated photographs (+ demo/ copies for the Media Library)
```
