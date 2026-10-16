=== Tsuribito Tackle ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Tsuribito Tackle — a WooCommerce store theme for a small harbour tackle shop, built as horizontal strips. A white top header carries the shop name, a Shop the tackle button, the account and cart, and a Menu button that opens a full-screen crimson overlay menu (numbered; vertical words in Chinese and Japanese). Crimson red (#C9171E) is the main colour: the strip across the hero's foot, the synced tide board, the tested-on-the-breakwater band, every page head and the footer strip are crimson fields. The hero is a full-bleed high-key photograph of a misty shore; a cut-out reel (transparent WebP) breaks out over the crimson strip and the photo edge, a cut-out red float breaks out of the shop photo and over the band's top edge, and over every page head. The shelf, the three waters, the promises and the tide notes are sideways scroll-snap strips. Every picture is a photorealistic high-key photograph. Kiwi Maru for display, Onest for reading. Sample content and products in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. Works without WooCommerce. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download tsuribito-tackle.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tsuribito-tackle.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsuribito Tackle.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three tide notes with two categories and three tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. With WooCommerce active it also adds eight sample products with four categories and three tags (inc/woo-import.php); without WooCommerce the theme works as a plain site and the shelves show product photos.

Languages: the sample content and products come in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language. Vertical labels appear only in Chinese and Japanese.

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Tsuribito Tackle: tide board": what is biting, high tide, live bait and the Saturday class (home page and Visit).
- "Tsuribito Tackle: shop details" (hours, address, phone, email): the footer.

The shop, its products, address, telephone number and prices are fictional.

== Copyright ==

Tsuribito Tackle is distributed under the terms of the GNU GPL v2 or later.
Fonts: Kiwi Maru (OFL-1.1), Medium, subset to Latin and to the characters of the Japanese sample text; Onest (OFL-1.1), Latin variable; Noto Sans TC (OFL-1.1), Medium and Bold, subset to the characters of the Traditional Chinese sample text; all WOFF2, see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as photorealistic high-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the shop is fictional). The reel and float cut-outs have transparent backgrounds.
- assets/images/hero-shore.webp (home hero: a misty white shore at morning with a rod on a stand and a red float, full-bleed)
- assets/images/reel-cutout.webp (home hero: a spinning reel with a crimson spool, transparent cut-out that breaks out of the photo over the crimson strip)
- assets/images/float-cutout.webp (breakwater band and page heads: a red-and-white ball float, transparent cut-out that breaks over the band and page-head edges)
- assets/images/shop-counter.webp (breakwater band, The shop: rods standing in a pale wooden rack in the bright shop)
- assets/images/demo/p-reel.webp (product: spinning reel)
- assets/images/demo/p-rod.webp (product: two-piece rod)
- assets/images/demo/p-lures.webp (product: three painted minnows)
- assets/images/demo/p-floats.webp (product and shelf: five stick floats)
- assets/images/demo/p-box.webp (product: tackle box)
- assets/images/demo/p-line.webp (product: two line spools)
- assets/images/demo/p-net.webp (product: wooden landing net)
- assets/images/demo/p-cap.webp (product: canvas cap and crimson towel)
- assets/images/demo/j-knots.webp (tide note and Harbour panel: hands tying a knot)
- assets/images/demo/j-river.webp (tide note, River mouth panel, Newsletter: a jetty in mist)
- assets/images/demo/j-tide.webp (tide note and Rocks panel: a red bucket at low tide)
