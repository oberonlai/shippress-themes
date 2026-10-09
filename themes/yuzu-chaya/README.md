# Yuzu Chaya

A playful, modular block theme for **small Japanese tea and wagashi shops** that sell loose-leaf sencha, hojicha and matcha, teaware and seasonal sweets online. A ShipPress **store** theme: WooCommerce templates styled to match, twelve sample products, and a shop that still makes sense without WooCommerce.

*Yuzu* is the knobbly Japanese citrus; a *chaya* is a teahouse. The demo shop, **Kiiro Chaya** ("the yellow teahouse"), is a fictional tea shop and tasting counter in Shizuoka with three old yuzu trees out back and a tiny sweets kitchen.

## Concept: the shop as a bento box

A bento is a box of small compartments, each with something different in it, packed so the whole thing looks generous and tidy at once. Yuzu Chaya builds every page that way.

- **Tiles on a grid.** Each section is a bento of rounded tiles (28 px corners) on a twelve-column grid: a big yuzu tile for the title, a picture tile, small tiles for a number, a temperature or a note. Tiles take four colours (yuzu, pale yuzu, pale matcha, washi) plus a charcoal-ink tile for emphasis, and the colours alternate so no two neighbours match.
- **Hand-drawn motifs.** All artwork is drawn in code with wobbly ink outlines over flat fills a few pixels off register, like a two-colour riso print: tea pouches, a yellow kyusu, cups, a matcha bowl, wagashi, a map, the farm on the hill. Small tea leaves, yuzu and curls of steam sit in tile corners and wiggle when the tile is hovered.
- **Stickers and notes.** Brewing temperatures are round stickers (70° for sencha, 95° for hojicha), notes are handwritten in Patrick Hand and tilted a little, and the second word of a title is set lighter and narrower with a squiggle drawn under it ("Tea for a *sunny* table.").
- **Cheerful but restrained.** One ink colour for text, generous space, a strict grid. The yellow is loud; everything else stays quiet.
- **Phones first-class.** At 390 px the bento folds to one column, but the small tiles (numbers, temperatures, products) stay two to a row, so pages stay short and still read as boxes. The brewing chart turns into one card per tea.

Motion is gentle and CSS-only: tiles pop up softly as they scroll into view, linked tiles lift and tip with a springy settle, the hero sticker is slapped on, the hero picture floats, the yuzu mark bobs, and a dark ticker of what just arrived scrolls slowly (it pauses on hover). Under `prefers-reduced-motion` nothing moves and the ticker can be scrolled by hand.

## Palette

| Token | Hex | Use |
|---|---|---|
| kinari | `#FBF5E4` | ground: pale unbleached paper |
| washi | `#FFFCF3` | tiles, cards, form fields |
| yuzu-pale | `#FCEBA6` | page-head tiles, alternate tiles |
| yuzu | `#F5C518` | yuzu yellow: hero, highlights, current menu item |
| kihada | `#E3A008` | deep kihada yellow: illustration shadows only |
| matcha-pale | `#E3EDC4` | alternate tiles, top bar |
| matcha | `#9CC04A` | fresh matcha: the tea box tile, sale badges |
| matcha-deep | `#46661A` | links on light grounds |
| hairline | `#EADFC0` | dotted rules |
| mute | `#5A6150` | quiet text, light grounds only |
| ink | `#1F2B24` | charcoal-green text, buttons, footer |

Contrast (WCAG 2.x): ink on kinari 13.5:1, on yuzu 9.0:1, on matcha 7.0:1; mute on kinari 5.9:1; matcha-deep links on kinari 6.1:1; kinari on ink 13.5:1. Text on yellow and green tiles is always ink, never the quiet grey.

Style variation **Matcha Latte** (`styles/matcha-latte.json`): the same bento with the colours swapped, matcha-latte green where the yuzu was and yuzu as the accent, on milk-foam paper.

## Type

All fonts are OFL-1.1, subset to Latin and bundled as WOFF2. Nothing is loaded from a CDN.

- **Bricolage Grotesque** (variable: optical size, width 75–100%, weight 200–800): titles, prices, big numbers, the footer wordmark. The narrow, light cut is the "second voice" of titles.
- **Nunito** (variable, with italic): body text, labels, navigation and buttons; its rounded ends match the rounded tiles.
- **Patrick Hand**: handwritten notes, captions and the temperature stickers' small print.

Type scale (fluid between 390 and 1440 px): label 13 px, small 15, body 17–19, lead 19–24, heading 24–36, section 36–64, display 48–112.

## Pages

Demo content (`demo-content.json`, imported on activation) creates:

| Page | Template | Patterns |
|---|---|---|
| Home (front page) | `front-page` | hero bento, new-at-the-counter ticker, this week's shelf, brewing temperatures, sweets of the season, the tea box, latest journal, The Steep |
| Shop | `page-wide` (WooCommerce: `archive-product`) | the tea list with orders by email, The Steep |
| Brewing Guide | `page-brewing-guide` | page head with the basic numbers, the chart of every tea (leaf, water, temperature, first cup, again), sencha in five steps, whisking matcha, questions, the tea box |
| Tea Box (subscription) | `page-tea-subscription` | page head, what's inside, three plans, a year in twelve boxes, questions, signup form |
| About | `page-about` | a yellow shop on a green hill, the story in four years, behind the counter, four small rules, visit |
| Journal (posts page) | `home` | bento of post tiles (the newest one wide) with shelf chips |
| The Steep (newsletter) | `page-newsletter` | signup form, past letters, the tea box |
| Contact | `page-contact` | hours, write to the counter (form), from the station (map) |

It also creates seven journal posts with featured images, four categories, eight tags, the main menu, and the static front page and posts page. Single posts, categories, tags, archives, search and 404 have their own templates. All copy lives in the pages and posts, so it is edited in the page editor.

## WooCommerce (optional)

The theme declares WooCommerce support and ships block templates in the theme's own style:

- `archive-product` (shop and product categories/tags): a page-head bento with category chips, a pill results bar, and product tiles in alternating colours with the first product as a big 2×2 yuzu tile
- `single-product`: the gallery on a pale tile (sticky on desktop), the summary on a washi tile with pill quantity and add-to-cart, a leaf list of shop promises, pill tabs over a washi panel and "Good with this"
- `page-cart`, `page-checkout` (with its own `checkout-header` part), `page-my-account`, `order-confirmation`, `product-search-results`

The shop styles (`assets/css/woocommerce.css`) load only while WooCommerce is active. The account link and mini cart are added after the header menu through the Block Hooks API, only with WooCommerce and never twice.

**Sample products.** `inc/woo-import.php` adds twelve products (six teas, three pieces of teaware, two boxes of wagashi and a one-off tea box; the genmaicha is on sale) with images, prices, SKUs, stock, product categories (Loose-leaf tea › Sencha / Hojicha / Matcha, Teaware, Wagashi, Boxes & gifts) and tags, and their details (origin, weight, brewing) as attributes. They are created only while WooCommerce is active:

- right after each run of the shared demo import (activation, the wp-admin button, `wp shippress demo-import`);
- on the next wp-admin visit if WooCommerce is activated after the theme;
- with `wp shippress woo-import`.

Like the shared importer, every product is tagged (`_shippress_demo` = `yuzu-chaya:product:<slug>`). A second run finds the products again (the trash included) and creates nothing. A product of the user's own with the same slug is never touched. Existing product categories and tags are reused as they are. The shared `inc/demo-import.php` is unchanged.

**Without WooCommerce** nothing store-specific loads. The Shop page shows every tea, pot and sweet as a tile with its price and "order by email" (its own content, editable). The header has no cart. The store templates are simply not used.

## Block styles

Paragraph: Label, Handwritten note, Lead, Temperature sticker. Heading: Label. Group: Tile, Tile (yuzu), Tile (matcha), Tile (ink), Reveal. Image: Sticker, Blob. Separator: Squiggle. Button: Yuzu, Arrow link. Table: Brewing chart, Info. List: Steps, Leaves. Quote: Speech bubble.

## Images

Twenty-seven original illustrations drawn in code for this theme (`assets/images/*.svg`, raster copies in `assets/images/demo/` for the Media Library): twelve product pictures, the hero yuzu and cup, the shop counter, the farm on the hill, the roasting pan, whisking matcha, cold brew, winter sweets, a small tea table, cooling cups, a teapot pouring, a tea box from above, a letter, a map and two portraits. GPL-2.0-or-later, see `readme.txt`.
