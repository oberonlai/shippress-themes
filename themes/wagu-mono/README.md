# Wagu Mono

A crafted, warm block theme for **furniture workshops and furniture stores** that sell chairs, tables, benches, shelves and small wooden things online. A ShipPress **store** theme: WooCommerce templates styled to match, eight sample products, and a shop page that still works without WooCommerce.

*Wagu mono* means roughly "Japanese-style things". The demo shop, **Wagu Mono**, is a fictional furniture workshop and showroom at 3 Joiner's Yard in the fictional town of Alderwick, run by four makers: Aiko Mori (chairmaker, founder), Tomas Wren (tables and casework), Hal Ito (finishing and the repair bench) and Noor Callis (showroom, orders and deliveries).

## Concept: a book about how a piece is made

- **Oak-beige, walnut, oak.** Oak-beige pages with a faint wood grain drawn only in CSS (three repeating gradients at slightly different angles, so the lines drift in and out of each other like real grain), walnut ink for text and the rail, oak as the accent (rules, numerals, diagram details: shapes and large type only), and a deep oak for links, prices and small accent text.
- **Joinery diagrams.** Five plain line drawings (`assets/images/joints/*.svg`: quarter-sawn end grain, a wedged through-tenon, dovetails, an oil finish in section, a pegged joint) on drawing paper with a faint 12 px grid. They sit on the home page's plates, the maker cards, the care page, the product page and the 404.
- **Drawing plates.** Photographs sit on a paper mount with oak registration marks in two corners; sections end in ruled parts lists (key / value rows with dashed rules), and drawing sheets have a ruled border with a second hairline inside.
- Libre Caslon Display for page titles and big numerals, Libre Caslon Text (with its italic in deep oak for the second voice of a title) for headings, Karla for text. Motion stops under `prefers-reduced-motion`.

## Header, footer, layout (ROADMAP codes)

- **Header H3: vertical side rail.** From 1024 px the header is a walnut column down the left of every page (CSS grid: the header part runs the full height, the rail inside it is sticky): the half-lap mark, the wordmark, an italic tagline, the menu as a numbered list (I, II, III… in Caslon), and a vertical spine line at the bottom. With WooCommerce the account link and mini cart follow the menu (Block Hooks). Below 1024 px it becomes a compact walnut top bar; below 600 px the menu opens from WordPress's accessible overlay button (a walnut panel with large Caslon items); between 600 and 1023 px the menu is one scrollable row under the brand. No horizontal overflow at 390 px.
- **Footer F9: colophon.** The footer is set like the last page of a book: an ornament, "Colophon", the wordmark, an italic note, then centred credits (made by, woods, joints, finish, typefaces, photographs), the showroom card (synced) as an imprint block, the menu as "Contents" and a one-line imprint.
- **Layout L13: sticky media with scrolling text.** After a title page with a ruled contents line, four chapters (I Wood, II Joint, III Finish, IV Living with it) scroll on the right while a drawing plate sticks on the left: a photograph with a joint diagram and a plate caption pinned to its corner. `assets/js/chapters.js` (IntersectionObserver) shows the plate of the chapter being read and cross-fades between them; without the script the first plate stays. On phones the plate sticks to the top of the screen and the chapters scroll up under it. Then the pieces (V) as numbered cards, a maker at the bench, and the journal as a numbered contents list. Unlike Kaze Yoga (also L13: one sticky photo per scene, sage, hamburger overlay header, booking-band footer) Wagu Mono has one plate that changes, a walnut side rail and a colophon footer.

## One source for shared details

The showroom's address, hours, phone, email and social links live in ONE synced pattern (`wp_block`), created on activation by `inc/shared-info.php` from `inc/info/showroom.html`, tagged `_wagu_mono_info` and never created twice. The colophon footer and the Contact, Makers, Care and Shop pages only hold `<!-- wp:block {"ref":…} /-->` references (through the `wagu-mono/showroom-info` pattern). No other copy repeats them.

The piece cards on the home page and the no-WooCommerce shop page are built from one list (`wagu_mono_pieces()` in `functions.php`).

## Palette

| Token | Hex | Use |
|---|---|---|
| beige | `#E9E2D6` | page ground (oak-beige) |
| paper | `#F4EFE6` | mounts, sheets, the colophon page |
| shaving | `#DDD3C3` | soft panels |
| oak | `#A7774A` | rules, numerals, diagram details (shapes and large type only) |
| oak-deep | `#7A5230` | links, prices, labels, title emphasis |
| walnut | `#2B2420` | text, headings, buttons, the rail |
| bark | `#3A302A` | dark hover |

Contrast (WCAG 2.x): walnut on beige 11.9:1, on paper 13.3:1; oak-deep on beige 5.3:1, on paper 6.0:1, on shaving 4.6:1; muted text `#5E5148` on beige 5.9:1; beige on walnut 11.9:1 (rail, buttons); oak-light `#D9B48A` on walnut for the rail's small labels. Oak itself (3.0:1 on beige) is never used for small text.

## Type

Libre Caslon Display, Libre Caslon Text (roman and italic, variable weight) and Karla (variable weight), all SIL OFL 1.1, Latin subsets bundled as WOFF2 from the google/fonts repository (no font CDN). In the Caslon italic the historical long-s "st" ligature is removed from the default ligatures.

## Pages and templates

Home, Shop, Makers, Care (re-oiling, everyday cleaning, repair service with prices), About, Journal (posts page), Newsletter, Contact; single post, category, tag, archive, search and 404 templates; WooCommerce: `archive-product`, `single-product` (gallery, sticky summary, ruled specification table, "Joined, not screwed" sheet, related pieces), `product-search-results`, `page-cart`, `page-checkout` (with a slim checkout header), `page-my-account`, `order-confirmation`. Every page template renders the page's own content (`wp:post-content`), so all copy is editable in the page editor.

## Patterns

`home-title`, `home-chapters`, `home-pieces`, `home-makers`, `home-journal`, `shop-catalogue`, `makers-head`, `makers-list`, `makers-bench`, `makers-visit`, `care-head`, `care-oil`, `care-cleaning`, `care-repair`, `about-head`, `about-rules`, `about-process`, `newsletter-signup`, `newsletter-past`, `contact-main`, `showroom-info` (synced), `product-made`, `not-found`.

Block styles: paragraph *Drawing label*, *Lead*, *Fine print*; image *Drawing plate*, *Joint diagram*; group *Drawing sheet*, *Oak grain panel*; separator *Rule with a half-lap joint*; button *Underlined link with an arrow*; list *Ruled rows*.

## Demo content

`demo-content.json`: eight pages, five posts in three categories (Workshop notes, Wood & care, Showroom news) with seven tags, the main menu, and, only while WooCommerce is active (`inc/woo-import.php`), eight products in five categories with six tags, prices, SKUs, stock, photographs and a specification table each. All people, places and businesses are fictional; email addresses use example.com. The import is idempotent: running it again creates nothing new and never changes what the user wrote.

## Photographs

AI-generated for this theme (no text, logos or real people), released under GPL-2.0-or-later / CC0; see readme.txt.
