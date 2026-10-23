=== Urushi Nuri ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Urushi Nuri — a WooCommerce store theme for a small urushi lacquerware workshop, laid out like an app with a side rail. A white top header carries the workshop name, the account, the cart and a Shop the lacquerware button; on wide screens the main menu runs down a fixed seiheki side rail under it (numbered; a vertical line in Chinese and Japanese), and below 1100 px it opens as a seiheki panel. Seiheki blue-green (#478384) is the main colour: the hero, the side rail, the drying-room band, every page head and the footer strip are seiheki fields; the pages sit on pale celadon with white app panels. The hero is a scene map: an isometric drawing of the workshop with five numbered pins and a legend; a cut-out vermilion bowl (transparent WebP) breaks out of the map frame and a cut-out jubako breaks over the hero's bottom edge and out of the drying-cabinet frame into the band's top edge. Every picture is a 2.5D isometric illustration. Zen Maru Gothic for display, Manrope for reading. Sample content and products in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. Works without WooCommerce. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download urushi-nuri.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/urushi-nuri.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Urushi Nuri.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three workshop notes with three categories and three tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. With WooCommerce active it also adds eight sample products with four categories and three tags (inc/woo-import.php); without WooCommerce the theme works as a plain site and the shelves show product photos.

Languages: the sample content and products come in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language. Vertical labels appear only in Chinese and Japanese.

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Urushi Nuri: workshop board": on the bench, in the drying cabinet, repairs and the Saturday class (home page and Visit).
- "Urushi Nuri: shop details" (hours, address, phone, email): the footer and Visit.

The workshop, its products, people, address, telephone number and prices are fictional.

== Copyright ==

Urushi Nuri is distributed under the terms of the GNU GPL v2 or later.
Fonts: Zen Maru Gothic (OFL-1.1), Bold, subset to Latin and to the characters of the Japanese sample text; Manrope (OFL-1.1), Latin variable; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); all WOFF2 in assets/fonts with their OFL.txt files.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as 2.5D isometric illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the workshop is fictional). The bowl and jubako cut-outs have transparent backgrounds (rembg).
- assets/images/hero-map.webp (home hero: an isometric map of the workshop (coating room, drying racks, zelkova courtyard, shop counter, rinsing stream) with five numbered pins)
- assets/images/bowl-cutout.webp (home hero and page heads: a vermilion lidded soup bowl, transparent cut-out that breaks out of the map frame and over the page-head edges)
- assets/images/jubako-cutout.webp (home hero and drying-room band: a three-tier black and vermilion jubako, transparent cut-out that breaks over the hero bottom edge and out of the framed drying cabinet over the band top edge)
- assets/images/bench.webp (The workshop: the lacquer workbench with brushes, pots and bowl blanks)
- assets/images/layers.webp (home stages panel: an exploded bowl in its layers)
- assets/images/drying-room.webp (home drying-room band: the cedar drying cabinet full of bowls and trays)
- assets/images/demo/p-owan.webp (product: zelkova soup bowl)
- assets/images/demo/p-jubako.webp (product: two-tier jubako)
- assets/images/demo/p-hashi.webp (product: lacquered chopsticks)
- assets/images/demo/p-tray.webp (product: rounded serving tray)
- assets/images/demo/p-sakazuki.webp (product: three sake cups on a stand)
- assets/images/demo/p-natsume.webp (product: natsume tea caddy)
- assets/images/demo/p-plate.webp (product: three vermilion plates)
- assets/images/demo/p-spoon.webp (product: two lacquer spoons)
- assets/images/demo/j-grove.webp (workshop note: tapping urushi sap in a grove)
- assets/images/demo/j-repair.webp (workshop note: mending a cracked bowl)
- assets/images/demo/j-market.webp (workshop note and Newsletter: a craft fair stall)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
