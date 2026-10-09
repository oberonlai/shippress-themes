# Seiji Utsuwa

A sculptural, gallery-like block theme for **small online shops of handmade Japanese tableware**: celadon bowls, plates, cups, sake sets and vases from a few small kilns. A ShipPress **store** theme: WooCommerce templates styled to match, ten sample products, and a shop that still makes sense without WooCommerce.

*Seiji* is celadon, the pale blue-green glaze coloured by a trace of iron in a kiln starved of air; *utsuwa* are the vessels you eat and drink from. The demo shop, **Mizuiro Utsuwa** ("water-blue tableware"), is a fictional two-person shop with a viewing room in Kanazawa that sells the work of four fictional kilns.

## Concept: the shop as a museum room

A good ceramics gallery shows few things, with a lot of air around each one, on plinths at the right height and with a small, exact label. Seiji Utsuwa builds every page that way.

- **Objects on plinths.** Every product picture stands on a porcelain block with a soft shadow beneath it, and lifts a little when you point at it. Groups can be plinths too (porcelain, pale celadon or iron-black).
- **Arches and glaze pools.** Pictures sit in two sculptural frames: an arch (a rounded top, like a niche in a gallery wall) and a *glaze pool*, the soft irregular outline of glaze gathered in the well of a bowl, with a pale celadon shadow offset behind it. The glaze pool slowly changes shape on hover. The same outline shapes the swatches, the label dots and the brand mark (a celadon bowl seen from above).
- **Catalogue labels.** Each object carries a catalogue number, its price in the serif, its name, its kiln and its glaze, like the card beside a museum case. Tables are hairline catalogue rows; lists are numbered index rows.
- **A deliberate grid.** Twelve columns, wide gutters, large row gaps. The shop is an asymmetric gallery: a large object across six columns and two rows beside four small ones, and on the catalogue the last large object mirrors the first.
- **Generous whitespace.** Section padding grows to 7.5 rem on wide screens; bands of porcelain, pale clay and deep kiln teal separate the rooms.
- **Phones first-class.** At 390 px everything folds to one column, but small objects stay two to a row; pictures move above their text and keep their shapes; the menu becomes a numbered list of rooms in large serif.

Motion is slow and CSS-only: objects, steps, cards and letters fade and rise as they scroll into view; pictures in arches and glaze pools drift gently inside their frames (a subtle parallax, scroll-driven); the hero bowl settles into place on load; the footer wordmark slides in. Under `prefers-reduced-motion` nothing moves. Everything visible on first load is never hidden, so print and full-page captures show the whole page.

## Palette

| Token | Hex | Use |
|---|---|---|
| mist | `#EEF3F0` | ground: celadon mist |
| porcelain | `#F9FBFA` | plinths, cards, form fields, porcelain bands |
| seiji-pale | `#D7E7E1` | pale celadon: glaze-pool shadows, hovers, chips |
| seiji | `#A3C9BD` | celadon glaze: swatches, footer wordmark, accents |
| kiln | `#1E5A56` | deep kiln teal: links, buttons, the italic second voice of titles, the newsletter band |
| clay-pale | `#ECE7DF` | pale clay bands |
| clay | `#D8D0C4` | unglazed stoneware: illustration and shadow tones |
| clay-deep | `#6B5F52` | fired clay, small text on light grounds |
| hairline | `#D3DDD9` | hairline rules |
| mute | `#4D5C59` | quiet text |
| ink | `#182120` | iron-black ink: text, top bar, footer |

Contrast (WCAG 2.x): ink on mist 14.7:1, on porcelain 15.8:1, on celadon 9.1:1; kiln teal on mist 7.1:1 and on pale clay 6.4:1; mute on mist 6.3:1; clay-deep on mist 5.5:1; porcelain on kiln teal 7.6:1; mist on ink 14.7:1. Celadon (`seiji`) is never used for body text on light grounds.

Style variation **Tenmoku Night** (`styles/tenmoku-night.json`): the same rooms after dark, named after the iron-black tenmoku glaze: a near-black teal ground, night plinths, moonlit celadon links and buttons and porcelain-white text (text on ground 15.6:1, links 10.7:1).

## Type

Both fonts are OFL-1.1, subset to Latin and bundled as WOFF2. Nothing is loaded from a CDN.

- **Brygada 1918** (variable, weight 400–700, with italic): titles, prices, numerals, the address, the footer wordmark. Titles are set light and tight; the second voice of a title is the italic, glazed in kiln teal ("Quiet objects for *everyday* tables.").
- **Hanken Grotesk** (variable, weight 100–900, with italic): body text, spaced-capital labels, navigation, forms and buttons.

Type scale (fluid between 390 and 1440 px): label 12 px (spaced capitals), small 15, body 16–18, lead 18–23, heading 26–38, section 38–72, display 50–128; the hero title runs from 52 to 124 px.

## Pages

Demo content (`demo-content.json`, imported on activation) creates:

| Page | Template | Patterns |
|---|---|---|
| Home (front page) | `front-page` | hero (title, arched bowl with a museum label, three facts), six glazes, new from the kilns (five objects), four kilns, a potter's words, three care rules, latest journal, the Kiln Letter |
| Shop | `page-wide` (WooCommerce: `archive-product`) | the catalogue: ten objects on plinths with orders by email, the Kiln Letter |
| The Kilns (the makers) | `page-kilns` | page head, map with a numbered legend, the four kilns (picture, story, catalogue table of potter, clay, glaze and firing), from clay to table in five steps, shop by maker |
| Care Guide | `page-care-guide` | page head, four habits for first use and every day, a chart by material (dishwasher, microwave, oven), crackle, golden repair with prices, questions |
| About | `page-about` | a small room for quiet things, how it began, the two keepers, four principles, the viewing room |
| Journal (posts page) | `home` | the newest post across the full width, then a three-column gallery of posts, with category chips |
| The Kiln Letter (newsletter) | `page-newsletter` | signup form on a plinth, past letters, a potter's words |
| Contact | `page-contact` | page head, the form and other ways to write, finding the viewing room |

It also creates seven journal posts with featured images, four categories, seven tags, the main menu, and the static front page and posts page. Single posts, categories, tags, archives, search and 404 have their own templates. All copy lives in the pages and posts, so it is edited in the page editor.

## WooCommerce (optional)

The theme declares WooCommerce support and ships block templates in the theme's own style:

- `archive-product` (shop and product categories/tags): a page head with category chips, a hairline results bar, and products on plinths in a four-column gallery with the first product larger across two columns and two rows
- `single-product`: the gallery on a plinth (sticky on desktop), the summary with a large serif title and price, a pill quantity and add-to-cart, a list of shop promises, spaced-capital tabs and "From the same shelf"
- `page-cart`, `page-checkout` (with its own `checkout-header` part), `page-my-account`, `order-confirmation`, `product-search-results`

The shop styles (`assets/css/woocommerce.css`) load only while WooCommerce is active. The account link and mini cart are added after the header menu through the Block Hooks API, only with WooCommerce and never twice.

**Sample products.** `inc/woo-import.php` adds ten products (rice and noodle bowls, a dinner plate and a platter, a teacup, a sake set on sale, small dishes, chopstick rests, a vase and a lidded jar) with images, prices, SKUs, stock, product categories (Bowls, Plates & platters, Cups & sake, Vases & jars, Small things) and tags, and their details (kiln, size, glaze, care) as attributes. They are created only while WooCommerce is active:

- right after each run of the shared demo import (activation, the wp-admin button, `wp shippress demo-import`);
- on the next wp-admin visit if WooCommerce is activated after the theme;
- with `wp shippress woo-import`.

Like the shared importer, every product is tagged (`_shippress_demo` = `seiji-utsuwa:product:<slug>`). A second run finds the products again (the trash included) and creates nothing. A product of the user's own with the same slug is never touched. Existing product categories and tags are reused as they are. The shared `inc/demo-import.php` is unchanged.

**Without WooCommerce** nothing store-specific loads. The Shop page shows every piece on a plinth with its number, price, kiln and glaze, and "order by email" (its own content, editable). The header has no cart. The store templates are simply not used.

## Block styles

Paragraph: Label, Lead. Heading: Label. Group: Plinth, Plinth (pale celadon), Plinth (iron-black ink), Slow reveal. Image: On a plinth, Arch, Glaze pool. Separator: Rim. Button: Arrow link (plus WordPress's Outline). Table: Catalogue. List: Index, Dash, Glaze swatches. Quote: Gallery.

## Images

Twenty-eight original illustrations drawn in code for this theme (`assets/images/*.svg`, raster copies in `assets/images/demo/` for the Media Library): ten product pictures, the hero bowl, the four kilns, the map, the viewing room, two keepers, glaze test tiles, the wood kiln at night, a parcel being wrapped, a golden repair, an autumn table, centring on the wheel, celadon crackle, a bowl in a basin and a letter. GPL-2.0-or-later, see `readme.txt`.
