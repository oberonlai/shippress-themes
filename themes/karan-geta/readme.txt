=== Karan Geta ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Karan Geta — a WooCommerce store theme for a geta (wooden sandal) workshop on a hot-spring street, laid out as a hanging scroll you read from top to bottom. A formal white top header carries the shop name, the Book a fitting button, account and cart; the main menu always opens from a Menu button as a full-screen shinbashi turquoise overlay (set vertically in Chinese and Japanese). Shinbashi turquoise (#59B9C6) is the main colour: the hero field, the menu overlay, the scroll spine, every page head and the footer strip are turquoise fields with sumi blue-black text on pale turquoise washi. The hero is a vertical banner: a tall woodblock print of the hot-spring street hangs like a shop banner from a wooden rod, beside the shop line (a vertical line in Chinese and Japanese); a cut-out pair of geta (transparent WebP) steps off the banner and over the hero's bottom edge. Five workshop steps hang on a turquoise spine, and a full-bleed woodblock band of the paulownia yard carries a turquoise card that a second pair of geta breaks out of. Every picture is a full woodblock-print illustration. Yuji Boku for display, Jost for reading. Sample content and products in English, Traditional Chinese, Japanese, French and German; vertical lines only in Chinese and Japanese. Works without WooCommerce. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download karan-geta.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/karan-geta.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Karan Geta.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three workshop notes with three categories and three tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. With WooCommerce active it also adds eight sample products with four categories and three tags (inc/woo-import.php); without WooCommerce the theme works as a plain site and the shelves show product photos.

Languages: the sample content and products come in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language. Vertical labels appear only in Chinese and Japanese.

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Karan Geta: workshop board": fittings, what is on the bench, rain covers and repairs (home page and Visit).
- "Karan Geta: shop details" (hours, address, phone, email): the footer and Visit.

The workshop, its products, people, address, telephone number and prices are fictional.

== Copyright ==

Karan Geta is distributed under the terms of the GNU GPL v2 or later.
Fonts: Yuji Boku (OFL-1.1), Regular, subset to Latin and to the characters of the Japanese sample text; Jost (OFL-1.1), Latin variable; Noto Serif TC (OFL-1.1), SemiBold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); all WOFF2 in assets/fonts with their OFL.txt files.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as full woodblock-print illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the workshop is fictional). The geta cut-out has transparent backgrounds (rembg).
- assets/images/hero-street.webp (home hero: a hot-spring street in light rain with turquoise curtains and a woman in a yukata on geta, hung as a vertical banner)
- assets/images/geta-cutout.webp (home hero, band and page heads: a pair of paulownia geta with turquoise straps, transparent cut-out that breaks over the banner, band and page-head edges)
- assets/images/workshop.webp (home scroll and The workshop: a craftsman planing a paulownia block)
- assets/images/paulownia.webp (home band: a paulownia tree in blossom and drying planks, full-bleed)
- assets/images/hanao.webp (The workshop: rolls of strap cloth and braided cords)
- assets/images/shopfront.webp (The workshop and Visit: the shop front with rows of geta and a turquoise curtain)
- assets/images/demo/p-classic.webp (product: classic two-tooth geta)
- assets/images/demo/p-ukon.webp (product: low round bath geta)
- assets/images/demo/p-tengu.webp (product: tall rain geta)
- assets/images/demo/p-lacquer.webp (product: black lacquer geta)
- assets/images/demo/p-kids.webp (product: children's first geta)
- assets/images/demo/p-zori.webp (product: woven rush sandals)
- assets/images/demo/p-hanao.webp (product: spare strap set)
- assets/images/demo/p-tabi.webp (product: ivory tabi socks)
- assets/images/demo/j-onsen.webp (workshop note: geta for the evening bath walk)
- assets/images/demo/j-rain.webp (workshop note: geta in the rain)
- assets/images/demo/j-fit.webp (workshop note and Newsletter: setting a strap)
