# Yuzu Chaya

A quiet, editorial block theme for **small Japanese tea and wagashi shops** that sell loose-leaf sencha, hojicha and matcha, teaware and seasonal sweets online. A ShipPress **store** theme: WooCommerce templates styled to match, twelve sample products, and a shop that still makes sense without WooCommerce.

*Yuzu* is the knobbly Japanese citrus; a *chaya* is a teahouse. The demo shop, **Kiiro Chaya** ("the yellow teahouse", after its painted door), is a fictional tea shop and tasting counter in Shizuoka with three old yuzu trees out back and a tiny sweets kitchen.

## Concept: a cup on washi paper

Version 2 drops the bento tiles and hand-drawn motifs for the calm of a tea counter in the morning: paper, ink, a green cup and one small yuzu.

- **Paper and ink.** Washi for the page, kinari for the quieter surfaces, sumi for text. Sections are told apart by the paper they sit on and by 1 px hairlines, never by boxes or shadows. Corners are square.
- **One green, one brown, one dot.** Sencha green carries buttons, links and emphasis; roasted hojicha brown is the hover and small detail colour. Yuzu appears only as a dot (the logo, the topbar news, "Most loved", this month in the tea box calendar), the sale tag and the outer focus halo, never as a fill.
- **Photographs first.** Large AI-generated still lifes (a celadon cup by a halved yuzu, hands whisking matcha, tea rows at dawn) run wide; products are shown tall (4:5) on pale paper.
- **Editorial type.** Shippori Mincho for titles, set large and light with an upright sencha-green word for emphasis ("Tea for a *quiet* table."); Hanken Grotesk for text, with small spaced capitals after a short hairline for labels.
- **A deliberate grid.** Twelve columns on wide screens with asymmetric splits (8/4, 7/5, 5/7, 4/8), sticky section titles beside long lists, and one calm column at 390 px where product grids stay two to a row and the brewing chart scrolls sideways.

Motion is slow and CSS-only: the first title fades up, the hero photograph settles, blocks rise gently as they scroll into view (they are fully visible before, so captures and print are never blank), photographs zoom by 3 % on hover, the sweets photograph drifts a little as you scroll, and a quiet line of shop news moves across the home page (it pauses on hover). Under `prefers-reduced-motion` nothing moves and the news line can be scrolled by hand.

## Palette

| Token | Hex | Use |
|---|---|---|
| washi | `#F5F0E6` | page ground |
| kinari | `#EAE3D4` | secondary surface: alternate sections, diagrams, image placeholders |
| sumi | `#2B2A26` | text, hairlines (16 %), footer |
| sencha | `#55673F` | primary: buttons, links, emphasis, the tea box band |
| sencha-pale | `#DDE2D0` | soft tint: selected options, the river on the map |
| hojicha | `#7B5A43` | secondary accent: link hover, small details, roasted teas on the chart |
| yuzu | `#D9A93A` | one sparing accent: a dot, the sale tag, the focus halo |

Contrast (WCAG 2.x): sumi on washi 12.6:1, on kinari 11.2:1; sencha on washi 5.4:1 and washi on sencha buttons 5.4:1; hojicha on washi 5.5:1; quiet text (sumi mixed 76 % into washi) about 6:1; sumi on the yuzu sale tag 6.6:1. Yuzu is never used for text on light paper (1.9:1).

Style variation **Yoru** (`styles/yoru.json`, "night"): the same design after dark — a near-black ground `#1D1C19`, lantern-shadow surface `#272622`, washi text `#EDE6D8`, moonlit sencha `#A9B98C`, roasted hojicha `#C9A285` and the same yuzu dot. All text pairs are above 7:1.

## Type

Both fonts are OFL-1.1, subset to Latin and bundled as WOFF2. Nothing is loaded from a CDN.

- **Shippori Mincho** (400, 500, 600): titles, prices, big numbers, the brewing chart's teas and the footer wordmark.
- **Hanken Grotesk** (variable, with italic): body text, labels, navigation, forms and buttons.

Type scale (fluid between 390 and 1440 px): label 12 px, small 15, body 16–18, lead 18–23, heading 23–34, section 32–54, display 42–92.

## Pages

Demo content (`demo-content.json`, imported on activation) creates:

| Page | Template | Patterns |
|---|---|---|
| Home (front page) | `front-page` | hero with a wide photograph and three facts, the news line, four teas on the shelf, brewing temperatures, sweets of the season, the tea box band, latest journal, The Steep |
| Shop | `page-wide` (WooCommerce: `archive-product`) | the tea list with orders by email, The Steep |
| Brewing Guide | `page-brewing-guide` | page head with the temperature diagram and the basic numbers, the chart of every tea, sencha in five steps, whisking matcha, questions, the tea box |
| Tea Box (subscription) | `page-tea-subscription` | page head, what's inside, three plans, a year in twelve boxes, questions, signup form |
| About | `page-about` | a small shop on a green hill, the story in four years, behind the counter, four small rules, visit |
| Journal (posts page) | `home` | the newest post wide, then a three-column grid, with shelf links |
| The Steep (newsletter) | `page-newsletter` | signup, past letters, the tea box |
| Contact | `page-contact` | hours, write to the counter (form), from the station (map) |

It also creates seven journal posts with featured photographs, four categories, eight tags, the main menu, and the static front page and posts page. Single posts, categories, tags, archives, search and 404 have their own templates. All copy lives in the pages and posts, so it is edited in the page editor.

## WooCommerce (optional)

The theme declares WooCommerce support and ships block templates in the theme's own style:

- `archive-product` (shop and product categories/tags): a page head with category links, a hairline results bar and tall product photographs with serif names and prices
- `single-product`: the gallery on the left, the summary beside it (sticky on desktop), square quantity and add-to-cart, shop promises in hairline rows, underlined tabs and "Good with this" on kinari
- `page-cart`, `page-checkout` (with its own `checkout-header` part), `page-my-account`, `order-confirmation`, `product-search-results`

The shop styles (`assets/css/woocommerce.css`) load only while WooCommerce is active. The account link and mini cart are added after the header menu through the Block Hooks API, only with WooCommerce and never twice.

**Sample products.** `inc/woo-import.php` adds twelve products (six teas, three pieces of teaware, two boxes of wagashi and a one-off tea box; the genmaicha is on sale) with photographs, prices, SKUs, stock, product categories (Loose-leaf tea › Sencha / Hojicha / Matcha, Teaware, Wagashi, Boxes & gifts) and tags, and their details as attributes. They are created only while WooCommerce is active:

- right after each run of the shared demo import (activation, the wp-admin button, `wp shippress demo-import`);
- on the next wp-admin visit if WooCommerce is activated after the theme;
- with `wp shippress woo-import`.

Like the shared importer, every product is tagged (`_shippress_demo` = `yuzu-chaya:product:<slug>`). A second run finds the products again (the trash included) and creates nothing. A product of the user's own with the same slug is never touched. Existing product categories and tags are reused as they are. The shared `inc/demo-import.php` is unchanged.

**Without WooCommerce** nothing store-specific loads. The Shop page shows every tea, pot and sweet with its photograph and price and "order by email" (its own content, editable). The header has no cart. The store templates are simply not used.

## Upgrading from 1.x

Sites that imported the 1.x demo keep their pages, posts, media and products exactly as they are: the import finds them by their tags and adds nothing twice. The 1.x layout classes (tiles, notes, stickers) keep a small compatibility section in `style.css`, so those pages stay tidy in the new colours. To get the 2.0 layouts, insert the theme's patterns into a page or start from a fresh site.

## Block styles

Paragraph: Label, Lead, Fine print, Yuzu dot. Heading: Label. Group: Gentle fade on scroll. Separator: Short sencha rule. Button: Text link with an arrow. Table: Brewing chart, Info. List: Steps, Hairline rows.

## Images

Twenty-five AI-generated photographs made for this theme (`assets/images/*.jpg`, the same files in `assets/images/demo/` for the Media Library), released under GPL-2.0-or-later / CC0, and two line diagrams drawn in code (`area-map.svg`, `brewing-temperatures.svg`, raster copies in `assets/images/demo/`). See `readme.txt`.
