=== Itomaki Yarn ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Itomaki Yarn — a WooCommerce store theme for a small yarn shop in an old merchant house, set like a poster. A formal white top header carries the shop name on the left, the main menu centred and the Shop the yarn button, account and cart on the right (a full-screen red menu on phones). Kankurenai red (#E95464) is the main colour: the hero field, every page head, the shop-board card, the farm card and the footer strip are red fields with plum-black ink type on rose-white paper. The hero is a diagonal split: a red field cut on a diagonal over a watercolour of the shop, the shop line set as a giant poster headline (a vertical line beside it in Chinese and Japanese), and a cut-out spool of red yarn (transparent WebP) sitting on the seam and breaking over the hero's bottom edge. Five steps from fleece to spool stand as giant red numerals; a full-bleed watercolour of the hill farm carries a red card that a cut-out skein breaks out of. Soft watercolour illustrations throughout. Hachi Maru Pop for display, Nunito for reading. Sample content and products in English, Traditional Chinese, Japanese, French and German; vertical lines only in Chinese and Japanese. Works without WooCommerce. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download itomaki-yarn.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/itomaki-yarn.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Itomaki Yarn.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three knitting notes with three categories and three tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. With WooCommerce active it also adds eight sample products with three categories and three tags (inc/woo-import.php); without WooCommerce the theme works as a plain site and the yarn grid shows product photos.

Languages: the sample content and products come in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language. Vertical labels appear only in Chinese and Japanese.

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Itomaki Yarn: shop board": the knitting table, the dye pot, the Saturday circle and pattern help (home page and Visit).
- "Itomaki Yarn: shop details" (hours, address, phone, email): the footer and Visit.

The shop, its products, people, address, telephone number and prices are fictional.

== Copyright ==

Itomaki Yarn is distributed under the terms of the GNU GPL v2 or later.
Fonts: Hachi Maru Pop (OFL-1.1), Regular, subset to Latin and to the characters of the Japanese sample text; Nunito (OFL-1.1), Latin variable; Noto Sans TC (OFL-1.1), Medium, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); all WOFF2 in assets/fonts with their OFL.txt files.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as soft watercolour illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the shop is fictional). The two cut-outs have transparent backgrounds (rembg).
- assets/images/shop.webp (home hero: the yarn shop interior with shelves of red, pink and cream skeins, under the diagonal red field)
- assets/images/yarn-cutout.webp (home hero and page heads: a spool of red yarn, transparent cut-out that breaks over the diagonal seam and the hero and page-head edges)
- assets/images/skein-cutout.webp (home band: a twisted red and cream skein, transparent cut-out that breaks out of the red card over the band top edge)
- assets/images/dyeing.webp (home steps: dyed skeins drying on a bamboo pole)
- assets/images/hills.webp (home band: sheep on a misty hillside, full-bleed)
- assets/images/hands.webp (The shop: hands knitting a red scarf on a tatami floor)
- assets/images/demo/p-madder.webp (product: madder red merino)
- assets/images/demo/p-cream.webp (product: undyed cream merino)
- assets/images/demo/p-indigo.webp (product: indigo night wool)
- assets/images/demo/p-mohair.webp (product: blush mohair lace)
- assets/images/demo/p-speckle.webp (product: speckled sock yarn)
- assets/images/demo/p-needles.webp (product: wooden knitting needles)
- assets/images/demo/p-kit.webp (product: first scarf kit)
- assets/images/demo/p-bowl.webp (product: cream yarn bowl)
- assets/images/demo/j-dye.webp (knitting note: a day at the red pot)
- assets/images/demo/j-swatch.webp (knitting note and Newsletter: why we knit a swatch first)
- assets/images/demo/j-winter.webp (knitting note: a scarf before the snow)
