=== Tsuya Jewellers ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Tsuya Jewellers is an independent jeweller store theme designed for quiet craftsmanship, bespoke commissions, and everyday ready pieces. Featuring a low-key aesthetic inspired by bench craft, it integrates WooCommerce checkout, scroll-driven storytelling, transparent commission pricing, and full responsive styling. Crafted specifically for independent benches, it pairs Instrument Sans and Manrope typography with calm, image-focused presentation.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See brand/design-spec.md for the design notes.

== Installation ==

1. Download tsuya-jewellers.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tsuya-jewellers.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsuya Jewellers.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, journal entries, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. With WooCommerce active it also adds six sample products with four categories and three tags (inc/woo-import.php); without WooCommerce the theme works as a plain site and the home page shows the product photographs as links.

The shop, its products, address and prices are fictional.

== Copyright ==

Tsuya Jewellers is distributed under the terms of the GNU GPL v2 or later.
Fonts: Instrument Sans (OFL-1.1), Latin variable; Manrope (OFL-1.1), Latin variable; Noto Sans TC and Noto Sans JP (OFL-1.1), Regular, subset to the characters of the Traditional Chinese and Japanese sample text; all WOFF2, see assets/fonts/.
Scripts and styles: assets/sp-scroll.css and assets/sp-scroll.js are ShipPress's own small scroll-effects files (GPL-2.0-or-later); no third-party library.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as low-key studio photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the shop is fictional). No transparent cut-outs are used.
- assets/images/h1-ring-tray.webp and assets/images/demo/h1-ring-tray.webp (home hero: a gold band on a linen tray under one lamp; the demo/ copy is the one imported into the Media Library)
- assets/images/p1-filing.webp and assets/images/demo/p1-filing.webp (home pair: a hand filing a ring shank; the demo/ copy is the one imported into the Media Library)
- assets/images/p2-palm.webp and assets/images/demo/p2-palm.webp (home pair: a band in an open palm; the demo/ copy is the one imported into the Media Library)
- assets/images/j1-band.webp and assets/images/demo/j1-band.webp (home tile and product; the demo/ copy is the one imported into the Media Library)
- assets/images/j2-signet.webp and assets/images/demo/j2-signet.webp (home tile and product; the demo/ copy is the one imported into the Media Library)
- assets/images/j3-studs.webp and assets/images/demo/j3-studs.webp (home tile and product; the demo/ copy is the one imported into the Media Library)
- assets/images/j4-chain.webp and assets/images/demo/j4-chain.webp (home tile and product; the demo/ copy is the one imported into the Media Library)
- assets/images/j5-pendant.webp and assets/images/demo/j5-pendant.webp (product; the demo/ copy is the one imported into the Media Library)
- assets/images/j6-silver.webp and assets/images/demo/j6-silver.webp (product; the demo/ copy is the one imported into the Media Library)
- assets/images/s1-two-bands.webp and assets/images/demo/s1-two-bands.webp (home strip and story; the demo/ copy is the one imported into the Media Library)
- assets/images/s2-signet.webp and assets/images/demo/s2-signet.webp (home strip and story; the demo/ copy is the one imported into the Media Library)
- assets/images/s3-pendant.webp and assets/images/demo/s3-pendant.webp (home strip and story; the demo/ copy is the one imported into the Media Library)
- assets/images/c1-drawing.webp and assets/images/demo/c1-drawing.webp (home process: a pencil drawing beside a wax model; the demo/ copy is the one imported into the Media Library)
- assets/images/c2-wax.webp and assets/images/demo/c2-wax.webp (Commissions: hands carving a ring wax; the demo/ copy is the one imported into the Media Library)
- assets/images/b1-bench.webp and assets/images/demo/b1-bench.webp (home band: the bench at dusk; the demo/ copy is the one imported into the Media Library)
- assets/images/r1-goldsmith.webp and assets/images/demo/r1-goldsmith.webp (home people: a goldsmith at the bench; the demo/ copy is the one imported into the Media Library)
- assets/images/r2-setter.webp and assets/images/demo/r2-setter.webp (home people: a setter with a loupe; the demo/ copy is the one imported into the Media Library)
- assets/images/v1-front-room.webp and assets/images/demo/v1-front-room.webp (home visit: the front room; the demo/ copy is the one imported into the Media Library)

== Notes ==
Header: on the home page at 782px and wider the split header stays hidden on the first screen and slides in after about 55% of the viewport height (CSS scroll-driven; always visible with reduced motion, on mobile and on inner pages). On mobile the header shows the wordmark, Cart (0) and a text Menu button.
