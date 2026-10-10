# Kura Shizuku

A quiet-luxury block theme for **small sake breweries and tasting rooms** that sell bottles, gift sets and brewery goods online. A ShipPress **store** theme: WooCommerce templates styled to match, ten sample products, and a shop that still makes sense without WooCommerce.

A *kura* is a sake brewery's storehouse; *shizuku* is a single drop, and also the name for the most delicate way to press sake, letting it fall through cloth by its own weight. The demo brewery, **Amane Brewery**, is a fictional family brewery and tasting room in the snow country, brewing junmai sake every winter since 1868.

## Concept: every page is a bottle label

A good sake label is quiet, centred and exact: the name in the middle, a few small lines of text above and below, a fine border, perhaps one mark in gold. Kura Shizuku composes every page that way.

- **Symmetric compositions.** Section heads are centred stacks: a spaced-capital label flanked by two gold drops, the title, a gilded hairline, then a lead. The hero is a triptych: the bottle in the middle in a gilt frame, two arched pictures either side. Facts, polish grades, flights, principles and letters sit in even rows of three or four.
- **Gilt hairlines.** The *Bottle label* group style is paper with a gold hairline, a second paler hairline six pixels inside and a gold drop sitting on the top rule. Pictures can have the same double frame, an arch with a gold line following its curve at a small distance, or the shape of a single drop. The *Gilded* separator is a fine gold rule with a drop in the middle.
- **One mark.** A single drop is the brand mark, the label bullet, the separator ornament, the stock dot and the FAQ marker. The polish strip shows four drops that shrink as more of the rice is polished away.
- **Refined type.** EB Garamond for titles, prices and numerals, with an italic second voice in deep gold ("Sake, pressed one *drop* at a time."); Albert Sans for text and small spaced capitals.
- **Generous whitespace and a deliberate grid.** Twelve columns, wide gutters, sections up to 8 rem tall on wide screens, bands of paper, koji beige, pale sake lees and aged cedar to separate the rooms.
- **Phones first-class.** At 390 px the header becomes a centred brand above a single menu button, the hero bottle moves to the top with the two arches side by side below it, bottles and polish drops stay two to a row, pictures move above their words, and the open menu is a centred list of rooms in large serif.

Motion is slow and CSS-only, built around drips and ripples: on load a single gold drop falls onto the hero bottle, one ripple spreads out and the label brightens for a moment; while scrolling, labels, cards, steps and letters are revealed top-down and settle, and gilded rules spread from the centre. Under `prefers-reduced-motion` nothing moves. Whatever is visible on first load is never hidden, so print and full-page captures show the whole page.

## Palette

| Token | Hex | Use |
|---|---|---|
| rice | `#F4EFE4` | ground: rice polished to ivory |
| paper | `#FBF9F4` | label paper: frames, cards, panels, the paper band |
| koji | `#E6D9BF` | koji beige: bands, the 404 numeral |
| lees-pale | `#E4E1DA` | pale sake lees: the responsible-drinking band |
| lees | `#C8C4BA` | sake-lees grey: illustration tones |
| gold-light | `#D9BC7E` | pale gilt: polish drops, selection |
| gold | `#B8954F` | gilded gold: hairlines, frames, drops (ornament only, never text) |
| gold-deep | `#735720` | deep gold: links, the italic second voice, numerals |
| cedar | `#4B3326` | aged cedar: buttons, sale badges |
| hairline | `#DCD2BF` | hairline rules |
| mute | `#625950` | quiet text |
| ink | `#241D18` | text |

The cedar band and the footer use theme.json custom colours (`band`): cedar `#3A281E` and ink `#241D18`, with rice-white text, a warm grey for quiet text and pale gilt for accents.

Contrast (WCAG 2.x): ink on rice 14.5:1, on paper 15.8:1, on koji 11.9:1; mute on rice 6.0:1, on koji 4.9:1; deep gold on rice 5.9:1, on paper 6.4:1 and on koji 4.8:1; paper on cedar (buttons) 11.1:1; rice on the cedar band 12.2:1, pale gilt on it 7.6:1. Gilded gold is used only for lines and ornaments.

Style variation **Cedar Night** (`styles/cedar-night.json`): the storehouse after dark: a cedar-black ground, night labels, candle-gilt links and buttons and rice-white text (text on ground 14.8:1, links 10.0:1, quiet text 7.8:1, button text 9.7:1).

## Type

Both fonts are OFL-1.1, subset to Latin and bundled as WOFF2. Nothing is loaded from a CDN.

- **EB Garamond** (variable, weight 400–800, with italic): titles, prices, numerals, the footer wordmark, the tasting notes in the responsible note. Old-style figures in text, lining figures in prices and numerals.
- **Albert Sans** (variable, weight 100–900, with italic): body text, spaced-capital labels (0.24 em), navigation, forms and buttons.

Type scale (fluid between 390 and 1440 px): label 12 px (spaced capitals), small 15, body 16–18, lead 19–24, heading 28–40, section 40–68, display 52–120.

## Pages

Demo content (`demo-content.json`, imported on activation) creates:

| Page | Template | Patterns |
|---|---|---|
| Home (front page) | `front-page` | hero (title over a triptych: drip pressing, the bottle in a gilt frame, the cedar ball; three facts), how far we polish (four drops), four bottles from the cellar, the brewery, the brewer's words, the tasting room (cedar band), latest news, The Pressing Letter |
| Shop | `page-wide` (WooCommerce: `archive-product`) | the cellar: ten bottles and brewery goods in gilt frames with orders by email, the responsible-drinking note |
| The Brewery | `page-brewery` | page head and the storehouse, seven steps of brewing, the brewing year (table in a label frame), tours with times, prices and visitor notes, a closing call |
| Tasting Room | `page-tasting-room` | page head and the counter, three flights as label cards (plus the non-alcoholic choice), hours and booking information, questions, the responsible-drinking note |
| About | `page-about` | page head and the rice fields, a short history in six dates, the people, four principles (cedar band), visit |
| News (posts page) | `home` | a centred head with category chips, then a three-column grid of posts |
| The Pressing Letter (newsletter) | `page-newsletter` | signup form in a label frame beside a sealed letter in a drop, past letters, the brewer's words |
| Contact | `page-contact` | page head, the form and other ways to write, how to find the brewery (map with numbered points), the responsible-drinking note |

It also creates seven news posts with featured images, four categories, nine tags, the main menu, and the static front page and posts page. Single posts, categories, tags, archives, search and 404 have their own templates. All copy lives in the pages and posts, so it is edited in the page editor. The tasting room page gives booking information only; there is no booking system.

**Responsible drinking.** The footer (an editable template part) carries a "please drink responsibly" note and the legal-drinking-age line, the top bar repeats it, the shop, tasting room and contact pages end with a small note pattern, the newsletter form asks readers to confirm their age, and the product template lists "sold only to adults of legal drinking age". Product and page copy recommends small pours, water and food, and offers a non-alcoholic rice drink to drivers.

## WooCommerce (optional)

The theme declares WooCommerce support and ships block templates in the theme's own style:

- `archive-product` (shop and product categories/tags): a centred head with category chips, a hairline results bar, and bottles in gilt frames in a four-column grid, the first two larger side by side, closed by the responsible-drinking note
- `single-product`: the gallery in a gilt frame (sticky on desktop) beside the summary set as a label (category, large serif title, gilded rule, price, excerpt, quantity and add to cart, the brewery's promises, SKU and tags), then centred tabs and "You may also like"
- `page-cart`, `page-checkout` (with its own `checkout-header` part), `page-my-account`, `order-confirmation`, `product-search-results`

The shop styles (`assets/css/woocommerce.css`) load only while WooCommerce is active. The account link and mini cart are added after the header menu through the Block Hooks API, only with WooCommerce and never twice.

**Sample products.** `inc/woo-import.php` adds ten products (Shizuku Junmai Daiginjo, Ivory Junmai Ginjo, Cedar Cask Taruzake, First Snow Nigori, Kimoto Three Winters, a tasting trio gift box on sale, a sake set, cedar masu cups, sake lees and a linen tasting cloth) with images, prices, SKUs, stock, product categories (Sake, Gift sets, Sake ware, From the brewery) and tags, and their details (style, rice and polish, alcohol, serving temperature, size, care) as attributes. They are created only while WooCommerce is active:

- right after each run of the shared demo import (activation, the wp-admin button, `wp shippress demo-import`);
- on the next wp-admin visit if WooCommerce is activated after the theme;
- with `wp shippress woo-import`.

Like the shared importer, every product is tagged (`_shippress_demo` = `kura-shizuku:product:<slug>`). A second run finds the products again (the trash included) and creates nothing. A product of the user's own with the same slug is never touched. Existing product categories and tags are reused as they are. The shared `inc/demo-import.php` is unchanged.

**Without WooCommerce** nothing store-specific loads. The Shop page shows every bottle in a gilt frame with its number, price and style, and "order by email" (its own content, editable). The header has no cart. The store templates are simply not used.

## Block styles

Paragraph: Label, Lead. Heading: Label. Group: Bottle label (double gilt frame), Paper panel, Koji panel, Drip reveal. Image: Gilt frame, Arch, Drop. Separator: Gilded. Button: Arrow link, Gilt outline. Table: Tasting notes. List: Index, Dash. Quote: Centred.

## Images

Twenty-four original illustrations drawn in code for this theme (`assets/images/*.svg`, raster copies in `assets/images/demo/` for the Media Library): ten product pictures, the hero bottle in its ripples, rice at four polish ratios, the koji room, drip pressing, the cedar ball, the storehouse in snow, the tasting room, a tasting flight, rice fields in winter, two people, the access map, a sealed letter and an autumn table. GPL-2.0-or-later, see `readme.txt`.
