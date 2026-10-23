=== Hibi Wear ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hibi Wear — a WooCommerce store theme for a small everyday-clothing label. A white ground with a warm stone band (#EDEAE2) that cuts through rounded 8 px photographs, gold-dot labels above big two-line Playfair Display headings, an outline circle arrow beside short statements, and a before and after wash photograph with two flat tabs and a big serif number. The home page opens on a hazy full-bleed morning street photograph with tiny captions at the left and right thirds and a vertical scroll rule; it continues with a four-piece line-up with category pills, the idea, the wash split, an aligned fabric masonry, a commute photograph, the store promise on the band, the journal and a mirrored contact block. The same three techniques run through the shop, single product, cart, About, Makers and Fabrics, Sizing, Shipping and Returns, Contact and the journal. Playfair Display for headings, Karla for reading. Sample content and products in English, Traditional Chinese, Japanese, French and German. Works without WooCommerce. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hibi-wear.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hibi-wear.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hibi Wear.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, six journal entries with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. With WooCommerce active it also adds nine sample products with five categories and six tags (inc/woo-import.php); without WooCommerce the theme works as a plain site and the line-up shows product photos.

Languages: the sample content and products come in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

The studio details (hours, address, phone, email) are kept in one place as a synced pattern (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language.

The label, its products, address, telephone number and prices are fictional.

== Copyright ==

Hibi Wear is distributed under the terms of the GNU GPL v2 or later.
Fonts: Playfair Display (OFL-1.1), Latin variable, regular and italic; Karla (OFL-1.1), Latin variable; Noto Serif TC and Noto Serif JP (OFL-1.1), Regular, subset to the characters of the Traditional Chinese and Japanese sample text; all WOFF2, see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as photorealistic high-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the label is fictional). No transparent cut-outs are used.
- assets/images/s1-cover.webp and assets/images/demo/s1-cover.webp (home cover and Contact: two people walking along a misty morning street; the demo/ copy is the one imported into the Media Library)
- assets/images/s2-portrait.webp and assets/images/demo/s2-portrait.webp (home idea and Sizing: a person in a sage loopback sweatshirt; the demo/ copy is the one imported into the Media Library)
- assets/images/s3-wash.webp and assets/images/demo/s3-wash.webp (home care, Makers and Fabrics and the product care panel: two tees side by side before and after washing; the demo/ copy is the one imported into the Media Library)
- assets/images/s4-jersey.webp and assets/images/demo/s4-jersey.webp (home fabrics and Makers and Fabrics: close-up of cotton jersey knit; the demo/ copy is the one imported into the Media Library)
- assets/images/s5-linen.webp and assets/images/demo/s5-linen.webp (home fabrics, Makers and Fabrics and a journal entry: close-up of washed pale teal linen; the demo/ copy is the one imported into the Media Library)
- assets/images/s6-merino.webp and assets/images/demo/s6-merino.webp (home fabrics and Makers and Fabrics head: close-up of charcoal merino rib; the demo/ copy is the one imported into the Media Library)
- assets/images/s7-tram.webp and assets/images/demo/s7-tram.webp (home in use, About and a journal entry: a person at a tram stop; the demo/ copy is the one imported into the Media Library)
- assets/images/s8-packing.webp and assets/images/demo/s8-packing.webp (home close, Shipping and Returns and a journal entry: hands folding a tee into a paper mailer; the demo/ copy is the one imported into the Media Library)
- assets/images/s9-rail.webp and assets/images/demo/s9-rail.webp (Shop and About heads: a clothing rail; the demo/ copy is the one imported into the Media Library)
- assets/images/p1-crew-tee.webp and assets/images/demo/p1-crew-tee.webp (product and home line-up: Daily Crew Tee; the demo/ copy is the one imported into the Media Library)
- assets/images/p2-pocket-tee.webp and assets/images/demo/p2-pocket-tee.webp (product and journal entry: Weekend Pocket Tee; the demo/ copy is the one imported into the Media Library)
- assets/images/p3-loopback.webp and assets/images/demo/p3-loopback.webp (product: Loopback Sweatshirt; the demo/ copy is the one imported into the Media Library)
- assets/images/demo/j1-charcoal.webp (journal entry The loopback sweatshirt, two winters in: a person in a charcoal sweatshirt walking past a white wall; imported into the Media Library)
- assets/images/demo/j2-stack.webp (journal entry The case for a little unevenness: a stack of folded tees on a shelf; imported into the Media Library)
- assets/images/p4-oxford.webp and assets/images/demo/p4-oxford.webp (product and home line-up: Easy Oxford Shirt; the demo/ copy is the one imported into the Media Library)
- assets/images/p5-linen-shirt.webp and assets/images/demo/p5-linen-shirt.webp (product: Linen Camp Shirt; the demo/ copy is the one imported into the Media Library)
- assets/images/p6-chino.webp and assets/images/demo/p6-chino.webp (product: Straight Chino; the demo/ copy is the one imported into the Media Library)
- assets/images/p7-trouser.webp and assets/images/demo/p7-trouser.webp (product and home line-up: Drawstring Wide Trouser; the demo/ copy is the one imported into the Media Library)
- assets/images/p8-cardigan.webp and assets/images/demo/p8-cardigan.webp (product, home line-up and Makers and Fabrics: Merino Rib Cardigan; the demo/ copy is the one imported into the Media Library)
- assets/images/p9-chore.webp and assets/images/demo/p9-chore.webp (product and journal entry: Chore Jacket; the demo/ copy is the one imported into the Media Library)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
