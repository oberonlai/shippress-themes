# Kami no Ne

A quiet, editorial block theme for **small washi paper and stationery shops** that sell handmade paper, thread-bound notebooks, brush pens, inkstones, letter sets, seals and gift sets online. A ShipPress **store** theme: WooCommerce templates styled to match, twelve sample products, and a shop that still makes sense without WooCommerce.

*Kami no ne* means "the sound of paper". The demo shop, **Kami no Ne — Paper & Ink Atelier**, is a fictional paper atelier in the river town of Asakawa, run by three makers: Sayo Kurata (paper), Ren Ishida (binding) and Tomoe Yagi (ink and seals). All people, places and workshops in the demo are fictional.

## Concept: a sheet of paper on a quiet desk

- **Paper and ink.** Paper white for the page, kozo for the quieter surfaces, sumi for text, ai indigo for everything you can press. Sections are told apart by the paper they sit on and by 1 px hairlines, never by shadows. Corners are square.
- **One persimmon dot.** Pale persimmon (kaki) appears only as a dot (beside the logo seal, the season's note in the rail, the hero index, "Most booked", this month in the workshop calendar), the sale tag, the outer focus halo and the stamped seal in the footer — never as text colour.
- **A paper side rail (H3).** On wide screens the header is a paper column fixed on the left: the seal mark and name, the tagline in italics, the menu (a short ink stroke before each item lengthens on the current page), account and cart, and the season's note set top to bottom like a spine label. Below 1024 px it folds into a top bar; on phones the menu opens as a full-screen sheet.
- **A shelf mosaic (L8).** Twelve columns on wide screens. The home page is laid out like a type case: hairline compartments hold the title, a tall desk photograph, the introduction and three facts; the shelf shows one large piece and three smaller ones (the last lying on its side); the making and the fibres follow in the same compartments, and the journal shows one large post with two beside it. Each section opens with a ruled label ("01 The shelf"). Inner pages keep their 7/5, 5/7 and 6/5 splits.
- **Signed like a letter (F12).** The indigo footer ends with the atelier's name written as a vertical line, and a persimmon seal pressed beneath it, beside the statement, the address and the links.
- **Mounted prints.** The process photographs sit on a kozo mat with a hairline edge, like prints in a portfolio (block style "Mounted print" on the Image block).
- **Editorial type.** Cormorant, set large and light, with indigo italics for emphasis ("Paper that *remembers* the hand."); Zen Kaku Gothic New for text, with small spaced capitals for labels.
- **390 px first.** One calm column; the shelf stays two to a row; the menu opens as a full-screen sheet with large serif links.

Motion is slow and CSS-only: the first title rises a few pixels, the hero photograph settles, blocks rise as they scroll into view (they are fully visible before, so captures and print are never blank), photographs zoom 3 % on hover, link underlines draw themselves, and a line of materials drifts across the home page (it pauses on hover). Under `prefers-reduced-motion` nothing moves and the line can be scrolled by hand.

## Palette

| Token | Hex | Use |
|---|---|---|
| paper | `#F7F5F0` | page ground |
| kozo | `#ECE7DD` | secondary surface: alternate sections, mats, image placeholders |
| sumi | `#1F2026` | text, hairlines (15 %) |
| ai | `#2E3A63` | primary: buttons, links, italics, the workshop band; footer `#1D2647` |
| ai-pale | `#DDE1EA` | soft tint: the newsletter section, selected options, text selection |
| kaki | `#E8A07A` | one sparing accent: a dot, the sale tag, the focus halo |

Contrast (WCAG 2.x): sumi on paper 14.9:1, on kozo 13.2:1; ai on paper 10.1:1 and paper on ai buttons 10.1:1; quiet text (sumi mixed 74 % into paper) 6.6:1; footer text 12.9:1, footer quiet text 7.7:1; sumi on the kaki sale tag 7.5:1. Kaki is never used for text.

Style variation **Sumi-yo** (`styles/sumi-yo.json`, "ink night"): ground `#16181F`, surface `#1F222C`, paper text `#ECE8DF`, moonlit indigo `#AEBAE0`, deep indigo tint `#283049`, the same persimmon dot. Every text pair is above 7:1.

## Type

Both fonts are OFL-1.1, subset to Latin and bundled as WOFF2 (identical copies of the files in Hinoki Yado and Ma Vertical). Nothing is loaded from a CDN.

- **Cormorant** (variable 300–700, with italic): titles, italics, prices, big numbers, years and the footer signature and seal.
- **Zen Kaku Gothic New** (400, 500): body text, labels, navigation, forms and buttons.

## Pages

Demo content (`demo-content.json`, imported on activation) creates:

| Page | Template | Patterns |
|---|---|---|
| Home (front page) | `front-page` | shelf mosaic: opening (title, tall photograph, introduction, three facts), materials line, the paper shelf (one large piece, three smaller), the making (mounted print, essay, steps), three fibres, workshops band, latest journal (one large, two beside), The Deckle Edge |
| Shop | `page-wide` (WooCommerce: `archive-product`) | the paper list with orders by email, The Deckle Edge |
| Workshops | `page-workshops` | page head with details, four workshops with prices, the next four months, questions, booking form |
| About | `page-about` | three people at one long table, the story in four years, the makers, four things we keep, visit |
| Journal (posts page) | `home` | the newest post wide, then a three-column grid, with category links |
| The Deckle Edge (newsletter) | `page-newsletter` | signup, past letters, workshops band |
| Contact | `page-contact` | intro, form with direct lines and hours, finding us |

It also creates seven journal posts with featured photographs, four categories, eight tags, the main menu, and the static front page and posts page. Single posts, categories, tags, archives, search and 404 have their own templates. All copy lives in the pages and posts, so it is edited in the page editor.

## WooCommerce (optional)

The theme declares WooCommerce support and ships block templates in its own style: `archive-product`, `single-product`, `page-cart`, `page-checkout` (with its own `checkout-header` part), `page-my-account`, `order-confirmation` and `product-search-results`. The shop styles (`assets/css/woocommerce.css`) load only while WooCommerce is active. The account link and mini cart are added after the header menu through the Block Hooks API, only with WooCommerce and never twice.

**Sample products.** `inc/woo-import.php` adds twelve products (two papers, two notebooks, three ink and brush pieces, a letter set, two seal pieces and two gift sets; the persimmon ink pad is on sale) with photographs, prices, SKUs, stock, six product categories, five tags and their details as attributes. They are created only while WooCommerce is active: right after each run of the shared demo import, on the next wp-admin visit if WooCommerce is activated later, or with `wp shippress woo-import`. Every product is tagged (`_shippress_demo` = `kami-no-ne:product:<slug>`), so a second run creates nothing; a product of your own with the same slug is never touched.

**Without WooCommerce** nothing store-specific loads. The Shop page shows every paper, notebook, ink, seal and gift set with its photograph and price and "order by email" (its own content, editable). The store templates are simply not used.

## Files

```
style.css               header + all theme CSS (tokens, layout, header/footer, sections, motion)
theme.json              palette, fonts, sizes, spacing, element and block styles, custom templates
functions.php           supports, styles, block styles, pattern category, header shop blocks
inc/demo-import.php     shared ShipPress importer (identical in every theme)
inc/woo-import.php      sample products, only with WooCommerce
demo-content.json       pages, posts, terms, menu, products, catalogue screens
templates/ parts/ patterns/ styles/sumi-yo.json
assets/css/woocommerce.css
assets/fonts/           Cormorant, Zen Kaku Gothic New (+ OFL texts)
assets/images/          AI-generated photographs (+ demo/ copies for the Media Library)
```

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="Kami no Ne home page on desktop"></td>
<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="Kami no Ne home page on mobile"></td>
</tr>
</table>

- About: [desktop](screenshots/about-desktop.webp) · [mobile](screenshots/about-mobile.webp)
- News: [desktop](screenshots/news-desktop.webp) · [mobile](screenshots/news-mobile.webp)
- Article: [desktop](screenshots/article-desktop.webp) · [mobile](screenshots/article-mobile.webp)
- Category: [desktop](screenshots/category-desktop.webp) · [mobile](screenshots/category-mobile.webp)
- Tag: [desktop](screenshots/tag-desktop.webp) · [mobile](screenshots/tag-mobile.webp)
- Newsletter: [desktop](screenshots/newsletter-desktop.webp) · [mobile](screenshots/newsletter-mobile.webp)
- Contact: [desktop](screenshots/contact-desktop.webp) · [mobile](screenshots/contact-mobile.webp)
- Workshops: [desktop](screenshots/workshops-desktop.webp) · [mobile](screenshots/workshops-mobile.webp)
- Shop: [desktop](screenshots/shop-desktop.webp) · [mobile](screenshots/shop-mobile.webp)
- Product: [desktop](screenshots/product-desktop.webp) · [mobile](screenshots/product-mobile.webp)
- Search: [desktop](screenshots/search-desktop.webp) · [mobile](screenshots/search-mobile.webp)
<!-- screenshots:end -->
