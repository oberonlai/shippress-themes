# Aizome Shoten

A typographic, retro block theme for **independent bookshops and small presses** that sell books, zines and stationery, and the first ShipPress **store** theme: WooCommerce templates styled to match, ten sample products, and a shop that still makes sense without WooCommerce.

*Aizome* is indigo dyeing; a *shoten* is a bookshop. The demo shop, **Shiori-do** ("bookmark hall"), is a narrow fictional bookshop in Kanda, Tokyo, with its own small press, Shiori Press, in the back room.

## Concept: a pocket paperback, set as a website

Mid-century Japanese pocket paperbacks (*bunko*) were designed under tight limits: one or two inks on kinari board, a framed title box, a series number, a colour band on the spine, and a paper *obi* wrapped around new titles. Aizome Shoten builds the whole site from those parts.

- **Spine labels.** Every page head starts with an indigo strip printed top to bottom in mono capitals, with a persimmon band at its head, like a row of spines on a shelf. On a phone the spine lies down and becomes a horizontal label.
- **Condensed cover type.** Titles are set in Archivo condensed to 62–68% width, in capitals, with a pale asagi shadow a hair off register, like a two-colour print. Their second voice is Newsreader italic, lower case, in persimmon ("Books for *slow* afternoons.").
- **Catalogue mono.** Series numbers, dates, prices, counts and labels are set in DM Mono: "No. 014 — Essays", "2026.10.07", "8 chairs left".
- **Editorial grid and rules.** A strict twelve-column grid with thick-and-thin double rules over every section head. Rules draw in from the left as a section scrolls into view. The shelves, the events and the journal are ruled ledgers.
- **Books as objects.** Covers sit face-out on the table with a spine shadow and lift a little on hover. The shop's grid staggers like a display table.
- **The obi.** The newsletter band is a persimmon paper wrap, perforated at the edges. The persimmon is used for that band, the stamp, numbers and links, and nowhere else.
- **Letterpress paper.** A faint grain over kinari paper. Bunko cards (indigo band, persimmon rule) hold house rules and event series. A halftone screen sits over the press-room pictures.

Motion is gentle and CSS-only: the new-arrivals ticker runs like a departures board (it pauses on hover), the hero stamp is pressed onto the page, rules draw in, and sections rise softly. Under `prefers-reduced-motion` nothing moves, and the ticker can be scrolled by hand instead.

## Palette

| Token | Hex | Use |
|---|---|---|
| kinari | `#F3EDE0` | ground: unbleached paper |
| paper | `#FAF6EC` | cards, alternate sections |
| kami | `#E6DAC0` | aged page, card shadows |
| asagi | `#C9DCE3` | pale blue: off-register shadow, map, selection |
| hairline | `#D8CFBD` | rules and borders |
| ai | `#1F3A5F` | aizome indigo: titles, spines, buttons |
| kon | `#13233A` | deep indigo: press section, footer |
| mute | `#5C6470` | quiet text |
| sumi | `#1B1B1F` | body text |
| kaki | `#D9622B` | persimmon accent: obi, stamp, numbers |

Style variation **Indigo Night** (`styles/indigo-night.json`): the same layout printed in kinari ink on night indigo, with a brighter lantern persimmon.

## Type

All fonts are OFL-1.1, subset to Latin and bundled as WOFF2. Nothing is loaded from a CDN.

- **Archivo** (variable: width 62–100%, weight 400–900): titles, numbers, the wordmark.
- **Newsreader** (variable, with italic): body text, leads, the italic second voice.
- **DM Mono** (400, 500): labels, catalogue numbers, prices, navigation, buttons.

## Pages

Demo content (`demo-content.json`, imported on activation) creates:

| Page | Template | Patterns |
|---|---|---|
| Home (front page) | `front-page` | hero, new-arrivals ticker, staff picks, index of shelves, Shiori Press, readings at the counter, latest journal posts, The Slip obi |
| Shop | `page-wide` (WooCommerce: `archive-product`) | the shelf catalogue with reservations by email, The Slip |
| Readings & Events | `page-events` | intro, the season's ledger, three series, chair reservation form, visit |
| About | `page-about` | a shop of narrow shelves, the story in four years, behind the counter, house rules, visit |
| Journal (posts page) | `home` | numbered ledger of posts with shelf filters |
| The Slip (newsletter) | `page-newsletter` | signup form, back issues, visit |
| Contact | `page-contact` | hours, write to the counter (form), finding the shop (map) |

It also creates seven journal posts with featured images, four categories, eight tags, the main menu, and the static front page and posts page. Single posts, categories, tags, archives, search and 404 have their own templates.

## WooCommerce (optional)

The theme declares WooCommerce support and ships block templates in the theme's own style:

- `archive-product` (shop and product categories/tags), with shelf chips, results bar and a staggered grid of covers
- `single-product`, with a sticky cover gallery, a condensed title, the price on a ruled line, a numbered list of shop promises, tabbed details and "Shelved nearby"
- `page-cart`, `page-checkout` (with its own `checkout-header` part), `page-my-account`, `order-confirmation`, `product-search-results`

The shop styles (`assets/css/woocommerce.css`) load only while WooCommerce is active. Product thumbnails use the 5:7 proportion of a book cover while the store's thumbnail cropping is still the default 1:1. The account link and mini cart are added after the header menu through the Block Hooks API, only with WooCommerce and never twice.

**Sample products.** `inc/woo-import.php` adds ten products (five books, a zine, the press almanac on sale, and three paper goods) with cover images, prices, SKUs, stock, product categories (Books › Fiction / Essays / Poetry, Zines, Paper goods, Shiori Press) and tags, and their details (author, format, pages) as attributes. They are created only while WooCommerce is active:

- right after each run of the shared demo import (activation, the wp-admin button, `wp shippress demo-import`);
- on the next wp-admin visit if WooCommerce is activated after the theme;
- with `wp shippress woo-import`.

Like the shared importer, every product is tagged (`_shippress_demo` = `aizome-shoten:product:<slug>`). A second run finds the products again (the trash included) and creates nothing. A product of the user's own with the same slug is never touched. Existing product categories and tags are reused as they are. The shared `inc/demo-import.php` is unchanged.

**Without WooCommerce** nothing store-specific loads. The Shop page shows a catalogue of covers with "reserve by email" (its own content, editable). The header has no cart. The store templates are simply not used. Install and activate WooCommerce later and the Shop page becomes the WooCommerce shop: WooCommerce adopts the existing `shop` page, or the demo import fills WooCommerce's empty one.

## Block styles

Paragraph: Label, Spine, Lead, Catalogue number, Stamp. Heading: Label, Condensed capitals, Title box. Group: Bunko card, Ruled, Obi band, Reveal. Image: Book, Paper mat, Halftone. Separator: Double rule, Dotted. Button: Arrow link, Outline. Table: Ledger. List: Index, Leaders. Quote: Obi.

## Images

Twenty original illustrations drawn in code for this theme (`assets/images/*.svg`, raster copies in `assets/images/demo/` for the Media Library): ten covers and product pictures, the shopfront, the shop interior, the press room, an evening reading, a zine table, a type case, a proof sheet, a neighbourhood map and two portraits. Every title, author, publisher and place on them is fictional. GPL-2.0-or-later, see `readme.txt`.
