# Denki Components

Denki Components — a business theme for a passive-components maker, built as a ledger of numbers. A cool pale ground with blue-grey hairlines, indexed product rows with 3:2 photographs at 54 percent and a text column from 63 percent, outline pills with a filled round arrow disc, and a fixed navy badge with a rotating ring of tracked text. The home page opens on a headline over a band of four figures and a framed reel-line photograph with scroll parallax; it continues with a right-hand company introduction, four ruled product families, a monthly ledger beside a sticky photograph, a staggered plant photo field with hash tags, three case rows beside an offset portrait, a sample-kit price list and a request-and-visit block. IBM Plex Serif for headings, IBM Plex Sans for reading. Works without WooCommerce. WCAG AA colours; scroll effects respect reduced motion.

## Structure
- `patterns/front-*.php`: the eight home sections (hero, intro, families, ledger, plant, cases, kits, close).
- `templates/`: front-page, page, single, index/archive/search and 404 (page-wide template for the inner pages, news rows on the blog page, a framed single post).
- `parts/`: header (top bar, nav, language links) and footer (with the fixed samples badge).
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: ShipPress scroll effects (reveal, wipe, parallax); `assets/fonts/`: IBM Plex.
- Photos: `assets/images/` (16 AI-generated photographs from one style prompt, GPL-2.0-or-later / CC0; no people in the product macros). See `readme.txt`.
- Demo content: `demo-content.json` (home, ten inner pages: products, three family pages, quality, samples and services, plant, cases, about, contact; the News posts page and one article; the importer can be re-run without duplicates).

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/denki-components/home-desktop.webp" width="640" alt="Denki Components home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/denki-components/home-mobile.webp" width="200" alt="Denki Components home page on mobile"></td>
</tr>
</table>

- Products: [desktop](https://shots.codotx.com/denki-components/products-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/products-mobile.webp)
- Ceramic capacitors: [desktop](https://shots.codotx.com/denki-components/ceramic-capacitors-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/ceramic-capacitors-mobile.webp)
- Chip resistors: [desktop](https://shots.codotx.com/denki-components/chip-resistors-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/chip-resistors-mobile.webp)
- Inductors beads: [desktop](https://shots.codotx.com/denki-components/inductors-beads-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/inductors-beads-mobile.webp)
- Quality: [desktop](https://shots.codotx.com/denki-components/quality-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/quality-mobile.webp)
- Samples: [desktop](https://shots.codotx.com/denki-components/samples-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/samples-mobile.webp)
- Plant: [desktop](https://shots.codotx.com/denki-components/plant-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/plant-mobile.webp)
- Cases: [desktop](https://shots.codotx.com/denki-components/cases-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/cases-mobile.webp)
- About: [desktop](https://shots.codotx.com/denki-components/about-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/about-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/denki-components/contact-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/contact-mobile.webp)
- News: [desktop](https://shots.codotx.com/denki-components/news-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/denki-components/article-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/denki-components/category-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/denki-components/tag-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/denki-components/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/denki-components/newsletter-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/denki-components/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/denki-components/ja/home-desktop.webp) · [fr](https://shots.codotx.com/denki-components/fr/home-desktop.webp) · [de](https://shots.codotx.com/denki-components/de/home-desktop.webp)
<!-- screenshots:end -->
