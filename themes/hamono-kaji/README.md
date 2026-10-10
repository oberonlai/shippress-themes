# Hamono Kaji

A dark, precise block theme for **knife forges and kitchen-tool shops** that sell chef knives, whetstones, hinoki boards, knife wraps and a sharpening service online. A ShipPress **store** theme: WooCommerce templates styled to match, eight sample products, and a shop that still makes sense without WooCommerce.

*Hamono kaji* means "blade smith". The demo shop, **Hamono Kaji — Kitchen Knives from the Tanabe Forge**, is a fictional family workshop on a back street of Sakai, run by three people: Isamu Tanabe (forge), Mio Tanabe (edge and care service) and Kenji Arata (grinding wheel and boards). All people, places, addresses and the shop itself are fictional.

## Concept: a spec sheet on a forge bench

- **Slate, steel, wood, one ember.** Charcoal slate for the page, forge iron for the quieter surfaces, kasumi white for text, tamahagane steel grey for quiet text and labels, warm hinoki wood for everything you can press. One restrained ember appears only as a short rule, the current tab's top edge, the in-stock square and the dots in the ticker.
- **A precise grid with thin rules.** Twelve columns with faint column guides behind the page heads; products, facts, steps and the footer colophon sit in ruled cells (1 px hairlines, square corners, no shadows). Specification sheets (blade, steel, hardness, weight, handle) are set as mono tables.
- **Large product photography.** Tall product photographs in the rack and the shop; a wide hero photograph that "cools like steel after the quench" as the page loads.
- **Condensed, heavy titles.** Archivo at a narrow width and heavy weight for titles in capitals, with the second half of each title in hinoki ("Forged slow. *Sharp for life.*"); Instrument Sans for text; JetBrains Mono for index numbers, labels, prices and buttons.
- **390 px first.** One column; the index tabs scroll sideways; the rack goes two to a row; the colophon cells stack.

Motion is slow and CSS-only: titles rise a few pixels, the hero photograph settles, sections rise as they scroll into view (fully visible before, so captures and print are never blank), product photographs zoom slightly on hover, and the footer ticker of knife-care tips drifts across the page (it pauses on hover and focus). Under `prefers-reduced-motion` nothing moves and the ticker can be scrolled by hand.

## Header and footer

- **Header — index tabs** (`"header": "index-tabs"` in `theme-meta.json`): the wordmark in a cell on the left, the menu as numbered folder tabs in ruled cells (the current page gets an ember top edge and a lighter fill), and a utility cell on the right (insured shipping note, link to the sharpening service). With WooCommerce the account link and mini cart are added as two more cells. On a phone the tab strip scrolls sideways under the wordmark.
- **Footer — marquee colophon** (`"footer": "marquee-colophon"`): a slow ticker of knife-care tips set large in Archivo, over a ruled spec-sheet colophon (maker, forge address, hours, write) and a compact one-line sitemap.

## Palette

| Token | Hex | Use |
|---|---|---|
| base | `#121415` | slate: page ground |
| surface | `#1B1E20` | forge iron: alternate sections, cards |
| contrast | `#ECEAE5` | kasumi white: text |
| steel | `#A3A8AB` | tamahagane steel: quiet text, labels |
| hinoki | `#D8B98E` | hinoki wood: buttons, links, title emphasis |
| ember | `#E0693C` | one sparing accent: rules, current tab, ticker dots |

Contrast (WCAG 2.x): text on base 15.4:1, on surface 13.9:1; steel on base 7.7:1, on surface 7.0:1; hinoki on base 9.9:1 and base text on hinoki buttons 9.9:1; ember on base 5.5:1.

Style variation **Washi** (`styles/washi.json`, light): ground `#F2EFE9`, surface `#E7E2D8`, charcoal text `#17191A`, steel `#5B6064`, smoked hinoki `#7A4E24`, rust `#A13F1B`; the footer stays charcoal. Lowest text pair: steel on surface 4.9:1; buttons 6.2:1.

## Type

All three fonts are OFL-1.1, subset to Latin and bundled as variable WOFF2 (identical copies of the files in Aizome Shoten, Mori no Kai / Shashin Folio and Kenchiku Grid). Nothing is loaded from a CDN.

- **Archivo** (variable weight and width): titles, product names, years and the ticker.
- **Instrument Sans** (variable): body text, leads, questions and forms.
- **JetBrains Mono** (variable): index labels, specification sheets, prices, buttons and tab numbers.

## Pages

Demo content (`demo-content.json`, imported on activation) creates:

| Page | Template | Patterns |
|---|---|---|
| Home (front page) | `front-page` | hero (title, lead, wide photograph, four facts), the rack (four knives), blade spec sheet, the forge in three steps, care service band, latest journal, The Whetstone Letter |
| Shop | `page-wide` (WooCommerce: `archive-product`) | the rack: every knife, stone, board and the service with photographs and prices, order by email; care service band |
| Knife care | `page-wide` | page head with section index, daily care, sharpening at home (stones and angles), the care service with prices, questions |
| The forge (about) | `page-wide` | intro with workshop photograph, the story in four years, the makers, four rules of the forge, letter band |
| Journal (posts page) | `home` | the newest post wide, then a three-column grid |
| The Whetstone Letter | `page-wide` | signup, past letters |
| Contact | `page-wide` | intro, form with direct lines and workshop hours, visiting the workshop (fictional address) |

It also creates six journal posts with featured photographs, four categories, six tags, the main menu, and the static front page and posts page. Single posts, categories, tags, archives, search and 404 have their own templates. All copy lives in the pages and posts, so it is edited in the page editor.

## WooCommerce (optional)

The theme declares WooCommerce support and ships block templates in its own style: `archive-product`, `single-product`, `page-cart`, `page-checkout` (with its own `checkout-header` part), `page-my-account`, `order-confirmation` and `product-search-results`. The shop styles (`assets/css/woocommerce.css`) load only while WooCommerce is active. The account link and mini cart are added after the index tabs through the Block Hooks API, only with WooCommerce and never twice.

**Sample products.** `inc/woo-import.php` adds eight products (gyuto, santoku, petty and nakiri, a 1000/6000 whetstone set, a hinoki board, a linen knife wrap and a hand-sharpening service) with photographs, prices, SKUs, stock, five product categories and five tags. They are created only while WooCommerce is active: right after each run of the shared demo import, on the next wp-admin visit if WooCommerce is activated later, or with `wp shippress woo-import`. Every product is tagged (`_shippress_demo` = `hamono-kaji:product:<slug>`), so a second run creates nothing; a product of your own with the same slug is never touched.

**Without WooCommerce** nothing store-specific loads. The Shop page shows every knife, stone, board and the service with its photograph and price and "order by email" (its own content, editable). The store templates are simply not used.

## Files

```
style.css               header + all theme CSS (tokens, grid, header/footer, sections, motion)
theme.json              palette, fonts, sizes, spacing, element and block styles, custom templates
functions.php           supports, styles, block styles, pattern category, header shop blocks
inc/demo-import.php     shared ShipPress importer (identical in every theme)
inc/woo-import.php      sample products, only with WooCommerce
demo-content.json       pages, posts, terms, menu, products, catalogue screens
templates/ parts/ patterns/ styles/washi.json
assets/css/woocommerce.css
assets/fonts/           Archivo, Instrument Sans, JetBrains Mono (+ OFL texts)
assets/images/          AI-generated photographs (+ demo/ copies for the Media Library)
```
