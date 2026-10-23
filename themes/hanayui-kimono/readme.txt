=== Hanayui Kimono ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hanayui Kimono — a WooCommerce store theme for a kimono rental and dressing shop in an old town, laid out as a hanging scroll you read from top to bottom. A formal white top header carries the shop name in the centre, the Book a fitting button, and the main menu centred on a second row with the account and the cart. Enji crimson (#B94047) is the main colour: the hero panel, the scroll spine, the collage band, every page head and the footer strip are crimson fields on plum-washi paper. The hero is a full-bleed woodblock illustration of a stone lane at dusk with a crimson panel standing on it (a vertical line in Chinese and Japanese); a cut-out kimono on its stand (transparent WebP) breaks over the panel and the hero's bottom edge. The day hangs on a crimson spine in five scenes, and a collage of pasted woodblock prints sits on a crimson band with a cut-out umbrella breaking out of it. Every picture is a woodblock-print illustration. Shippori Mincho for display, Figtree for reading. Sample content and products in English, Traditional Chinese, Japanese, French and German; vertical lines only in Chinese and Japanese. Works without WooCommerce. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hanayui-kimono.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hanayui-kimono.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hanayui Kimono.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three lane notes with three categories and three tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. With WooCommerce active it also adds eight sample products with four categories and three tags (inc/woo-import.php); without WooCommerce the theme works as a plain site and the shelves show product photos.

Languages: the sample content and products come in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language. Vertical labels appear only in Chinese and Japanese.

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Hanayui Kimono: shop board": open fitting times, what is blooming, rain and evening return (home page and Visit).
- "Hanayui Kimono: shop details" (hours, address, phone, email): the footer and Visit.

The shop, its plans, people, address, telephone number and prices are fictional.

== Copyright ==

Hanayui Kimono is distributed under the terms of the GNU GPL v2 or later.
Fonts: Shippori Mincho (OFL-1.1), Bold, subset to Latin and to the characters of the Japanese sample text; Figtree (OFL-1.1), Latin variable; Noto Serif TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); all WOFF2 in assets/fonts with their OFL.txt files.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as woodblock-print illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the shop is fictional). The kimono and umbrella cut-outs have transparent backgrounds (rembg).
- assets/images/hero-lane.webp (home hero: a stone lane in the old town at dusk with lanterns, a plum tree and two women in kimono, full-bleed)
- assets/images/kimono-cutout.webp (home hero: a crimson kimono on its stand, transparent cut-out that breaks over the hero panel and the hero bottom edge)
- assets/images/wagasa-cutout.webp (collage band and page heads: a crimson paper umbrella, transparent cut-out that breaks out of the collage and over the page-head edges)
- assets/images/dressing.webp (home scroll: a dresser tying a crimson obi bow)
- assets/images/fabrics.webp (collage: folded kimono silks on tatami)
- assets/images/shopfront.webp (collage and The shop: the shop front with a plain crimson curtain)
- assets/images/bridge.webp (collage: a couple in kimono on an arched canal bridge)
- assets/images/demo/p-houmongi.webp (product: houmongi day plan)
- assets/images/demo/p-yukata.webp (product: cotton yukata plan)
- assets/images/demo/p-couple.webp (product: couple plan)
- assets/images/demo/p-obi.webp (product: brocade obi upgrade)
- assets/images/demo/p-kanzashi.webp (product: kanzashi hair set)
- assets/images/demo/p-kinchaku.webp (product: silk kinchaku bag)
- assets/images/demo/p-geta.webp (product: velvet strap geta)
- assets/images/demo/p-haori.webp (product: haori jacket add-on)
- assets/images/demo/j-plum.webp (lane note: a plum blossom walk)
- assets/images/demo/j-rain.webp (lane note: kimono in the rain)
- assets/images/demo/j-tea.webp (lane note and Newsletter: an afternoon at the tea house)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
