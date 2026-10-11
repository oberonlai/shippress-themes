# Ginrin Cycle

A restrained, technical block theme for a **small workshop that builds steel bicycles by hand** and sells frames, wheels and quiet accessories, plus a repair service. A ShipPress **store** theme: WooCommerce templates styled to match, eight sample products, and a shop page that still works without WooCommerce.

*Ginrin* (silver wheel) is an old word for the bicycle. The demo workshop, **Ginrin Cycle**, is a fictional three-bench workshop in Kuramae, Tokyo, run by Haru Kiyose (framebuilder, founder), Mio Tanabe (wheels) and Ren Ogata (repairs).

## Concept: a drawing sheet on the bench

- **Steel, paper, graphite.** Steel-mist pages, paper panels and graphite text. One burnt-orange accent, kept to small marks: the tick before a label, the 2 px marker on the current menu cell, step numbers, the sale tag, list markers and focus rings. No bright colours, no sporty or poster look.
- **Products first (L11).** The home page opens with a short title block and then the products themselves: eight cells that share their hairlines like a drawing sheet, each with a photograph, an index number ("01 / Frame"), the name, a **spec line in IBM Plex Mono** and a monospace price. The WooCommerce shop and related products use the same ruled cells.
- **Engineering-drawing details.** Monospace labels with a short tick, figure captions ("Fig. 02 — Lacing a front wheel"), corner ticks around photographs (the "Drawing frame" image style), sheet-head rows above grids, spec sheets with monospace keys.
- **Signature: the spoke wheel.** A simple line icon (SVG mask, so it takes the text colour) used as the brand mark, as the divider (the "Spoke wheel on a hairline" separator style) and as the **loading indicator** in WooCommerce (it replaces the default spinners). The header wheel turns once on load and while hovered; everything stops under `prefers-reduced-motion`. No entrance animations.

## Header, footer, layout (ROADMAP codes)

- **Header H6: index tabs / ruled cells.** The header reads like the title block of an engineering drawing: the wheel mark and the site name with a monospace sub-line, then the menu as a row of hairline-ruled cells, each with a monospace index number ("01", "02", …) above its label and a burnt-orange marker on the current page. With WooCommerce the account link and the mini cart become the last cells (Block Hooks). On a phone: the menu button is its own ruled cell and opens a graphite overlay with large numbered rows (the core navigation overlay, keyboard accessible).
- **Footer F10: split two-tone panel.** Left, a graphite half with "Come by the bench." and the synced workshop card (address, hours, phone, email). Right, a steel half with the monthly letter sign-up and the menu in two columns. A thin mist row underneath with the wheel, the name and the colophon.
- **Layout L11: product-first grid** (see above). The other L11 themes are Hamono Kaji (dark, knife spec sheets) and Komugi Pan (warm, rounded stickers); Ginrin Cycle is light, cool and ruled.

## Deviation from the plan

Planned (ROADMAP batch 1 #12) as Rubik Mono One + Rubik with `#FF6A13` in a "sporty, technical" look. At the user's request (elegant, restrained, refined Japanese minimal; no bright colours, no sporty or street-poster look) the accent is toned down to burnt orange **`#B4532A`** and kept to small marks, **Rubik Mono One is replaced** by Rubik in light and medium weights plus **IBM Plex Mono** for spec lines and prices, and the style tags are **minimal + technical** instead of sporty + technical. Header, footer and layout are as planned (H6, F10, L11). Also recorded in `theme-meta.json` ("deviation").

## One source for shared details

Three things appear in more than one place, and each lives in ONE synced pattern (`wp_block`), created on activation by `inc/shared-info.php` from `inc/info/*.html`, tagged `_ginrin_cycle_info` and never created twice:

| Synced pattern | Source | Shown on |
|---|---|---|
| Workshop address, hours and phone | `inc/info/workshop.html` | footer (every page), contact |
| Repair price list | `inc/info/prices.html` | home (repair band), repair service |
| Product grid with spec lines and prices | `inc/info/catalogue.html` | home, shop (without WooCommerce) |

Pages and the footer only hold `<!-- wp:block {"ref":…} /-->` references (through the `ginrin-cycle/workshop-info`, `ginrin-cycle/price-list` and `ginrin-cycle/catalogue-grid` patterns), so editing a synced pattern once (Appearance > Editor > Patterns) changes every place. No other copy repeats the hours, address, phone or repair prices. With WooCommerce, the shop, product and search templates show the real product data instead.

## Palette

| Token | Hex | Use |
|---|---|---|
| mist | `#DDE3E8` | page ground, header |
| paper | `#F5F6F4` | panels, hover cells, inputs |
| steel | `#C9D1D8` | the steel half of the footer |
| slate | `#5C6670` | quiet text on mist and paper only |
| graphite | `#22282E` | text, buttons, dark panels |
| ember | `#B4532A` | burnt-orange accent: small marks, rules, sale tag, loader |

Contrast (WCAG 2.x): graphite on mist 11.5:1, on paper 13.7:1, on steel 9.6:1; slate on mist 4.5:1, on paper 5.4:1 (never on steel); mist on graphite 11.5:1; `#9AA5AF` quiet text on graphite 5.9:1; paper text on the ember sale tag 4.6:1. Ember is never used for body text on mist.

Style variation **Night Shift** (`styles/night-shift.json`): a graphite ground with mist text and the same burnt orange for the small marks.

## Type

Both fonts are OFL-1.1 and bundled as WOFF2; nothing loads from a CDN.

- **Rubik** (variable, weights 300–600, Latin subset of the google/fonts file): headings at weight 300 with tight tracking, body text, navigation and buttons.
- **IBM Plex Mono** (Regular + Medium): spec lines, prices, labels, index numbers, captions and the workshop card. "Plex" is a Reserved Font Name, so the theme ships IBM's own unmodified Latin-1 WOFF2 files instead of making its own subset.

## Pages

| Page | Template | Patterns |
|---|---|---|
| Home (front page) | `front-page` | title block + product grid (synced), the build in four steps, repair service with the price list (synced), latest journal, letter band |
| Shop | `page-wide` (WooCommerce: `archive-product`) | title block, product grid (synced), letter band |
| Builds | `page-wide` | head with facts row and wide photograph, five-step schedule, what a build includes (spec sheet), gallery of six figures, "start with a fitting" panel |
| Repair service | `page-wide` | head, price list (synced) with a photograph, how it works, questions |
| About | `page-wide` | intro + wide photograph, the three benches, four rules + the workshop in numbers, letter band |
| Journal (posts page) | `home` | ruled three-column cells with category chips |
| Newsletter | `page-wide` | sign-up, index of past letters |
| Contact | `page-wide` | workshop card (synced) + photograph, message form |

Plus six journal posts with featured photographs, three categories, six tags, the main menu, and the static front page and posts page. Single posts, categories, tags, archives, search and 404 have their own templates. The forms are plain HTML: connect them to your form or email service.

## WooCommerce (optional)

Templates: `archive-product`, `single-product`, `page-cart`, `page-checkout` (own `checkout-header` part), `page-my-account`, `order-confirmation`, `product-search-results`; shop styles in `assets/css/woocommerce.css` (loaded only with WooCommerce). `inc/woo-import.php` adds eight products (Kuramae Road Frameset, Handbuilt Front Wheel, Silver Hub Wheelset, Touring Saddle, Waxed Canvas Bar Bag on sale, Brass Bell, Bike Fit Session, Workshop Gift Card) with photographs, prices, SKUs, stock, four categories, tags and spec attributes, only while WooCommerce is active, never twice.

**Without WooCommerce** nothing store-specific loads; the Shop page shows every product with its photograph, spec line and price, and how to order by phone or email.

## Files

```
style.css               header + all theme CSS
theme.json              palette, fonts, sizes, spacing, element and block styles
functions.php           supports, styles, block styles, pattern category, header shop blocks
inc/demo-import.php     shared ShipPress importer (identical in every theme)
inc/woo-import.php      sample products, only with WooCommerce
inc/shared-info.php     synced patterns: workshop card, repair prices, product grid (+ inc/info/*.html)
demo-content.json       pages, posts, terms, menu, products, catalogue screens
templates/ parts/ patterns/ styles/night-shift.json
assets/css/woocommerce.css
assets/fonts/           Rubik, IBM Plex Mono (+ OFL texts)
assets/images/          AI-generated photographs (+ demo/ copies for the Media Library)
```
