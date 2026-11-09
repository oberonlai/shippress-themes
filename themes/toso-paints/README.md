# Toso Paints

A calm, low-key block theme for a **paint and wallpaper shop with a mixing counter**. A ShipPress **store** theme: WooCommerce templates styled to match, six sample products in two categories, and a Ranges page that still works without WooCommerce.

The demo shop is fictional: a mixing counter in Rotterdam, open since 2009, run by Ines Valk with Lena, Yusuf, Mei and Tomás.

## Concept: a colour is chosen against the room

- **Moss ink and chalk.** Ground `#1A211C`, raised panels `#232B25`, footer moss `#3A4A3E`, one pale band `#E8ECE8`, chalk text `#F2F4F0` and a single brass accent `#D9A66A` for the dot, the chip rule and focus rings. First-screen saturation is about 0.1%.
- **Type.** Instrument Sans (wordmark, headings, labels, menu) and Onest (text, tables, buttons), both OFL-1.1, Latin variable WOFF2 subsets bundled, no CDN.
- **Low-key photography.** One window-lit photo style, no repeats on the home page.

## Signature techniques

1. **Three equal photo columns** with 6px seams, a hairline room-elevation drawing crossing two seams, the menu stacked in capitals at the top left and a centred wordmark on a narrow frosted band.
2. **Ruled statement band**: a two-line headline, a full rule, then the paragraph starting at 50% of the width above a half-width photo.
3. **Three sticky full-bleed chapters** (Paint, Paper, Mix) with a tick pager and a 01 | 03 counter.
4. **Round-thumbnail range strip** with outline circle arrows and a giant capitals marquee.

Scroll effects use the bundled `sp-scroll` set: reveal, stagger and parallax on the hero columns and chapters. All of it is off under `prefers-reduced-motion`.

## Pages and templates

Home, Ranges, Colour Mixing, Wallpaper, Order & Collection, About, Journal (posts page), Newsletter and Contact; six sample posts in three categories. Templates: front-page, page, page-wide, home, index, single, archive, category, tag, search, 404, and for WooCommerce archive-product and single-product.

## WooCommerce

Optional. With it active, `inc/woo-import.php` adds two product categories, five tags and six products with photographs and prices; run twice it creates nothing new. Without it, the Ranges page lists the same lines with prices and orders go by email.
