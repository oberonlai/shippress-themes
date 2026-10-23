=== Amime Takezaiku ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Amime Takezaiku — a WooCommerce store theme for a bamboo basket workshop in a mountain valley, laid out as horizontal strips you read from left to right. A formal white top header carries the shop name, the Shop the baskets button, account and cart; from 1100 px the main menu stands as a fixed sumi side rail on the left (vertical entries in Chinese and Japanese), below that it opens from a Menu button as a full-screen kariyasu overlay. Kariyasu yellow (#F5E56B) is the main colour: the hero field, the shelf band, the grove card, every page head and the footer strip are kariyasu fields with sumi olive-black text, and woven bamboo textures (ajiro twill and kagome hexagon, raster watercolour) run through them. The hero sets the shop line on the left and a framed watercolour of the bamboo grove on the right; a cut-out round basket (transparent WebP) breaks out over the frame and the hero's bottom edge. The workshop board is one horizontal strip, the five steps from grove to basket stand side by side on one long bamboo strip, the baskets line up on a shelf that scrolls sideways, and a full-bleed grove panorama carries a kariyasu card that a cut-out flower basket breaks out of. Every picture is a soft watercolour illustration. Sawarabi Mincho for display, Urbanist for reading. Sample content and products in English, Traditional Chinese, Japanese, French and German; vertical lines only in Chinese and Japanese. Works without WooCommerce. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download amime-takezaiku.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/amime-takezaiku.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Amime Takezaiku.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three workshop notes with three categories and three tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. With WooCommerce active it also adds eight sample products with three categories and three tags (inc/woo-import.php); without WooCommerce the theme works as a plain site and the shelves show product photos.

Languages: the sample content and products come in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language. Vertical labels appear only in Chinese and Japanese.

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Amime Takezaiku: workshop board": the workshop door, what is on the bench, the weaving class and repairs (home page and Visit).
- "Amime Takezaiku: shop details" (hours, address, phone, email): the footer and Visit.

The workshop, its products, people, address, telephone number and prices are fictional.

== Copyright ==

Amime Takezaiku is distributed under the terms of the GNU GPL v2 or later.
Fonts: Sawarabi Mincho (OFL-1.1, no Reserved Font Name), Regular, subset to Latin and to the characters of the Japanese sample text; Urbanist (OFL-1.1, no Reserved Font Name), Latin variable; Noto Serif TC (OFL-1.1), Medium, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); all WOFF2 in assets/fonts with their OFL.txt files.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as soft watercolour illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the workshop is fictional). The two basket cut-outs have transparent backgrounds (rembg).
- assets/images/hero-art.webp (home hero: a bamboo grove with finished baskets drying on a low bench, framed on the right)
- assets/images/basket-cutout.webp (home hero and page heads: a round open-weave basket with a tall handle, transparent cut-out that breaks over the hero frame, the hero edge and the page-head edges)
- assets/images/hanakago-cutout.webp (home grove band: a tall flower basket with dried grasses, transparent cut-out that breaks out of the card over the band top edge)
- assets/images/weave.webp (texture: ajiro twill bamboo weave, used in the hero, side rail edge, step strip, page heads and footer strip)
- assets/images/kagome.webp (texture: kagome hexagon bamboo weave, used on the shelf band and the brand mark)
- assets/images/workshop.webp (home steps: hands splitting a bamboo pole into strips)
- assets/images/grove.webp (home band: a bamboo forest on a hillside, full-bleed panorama)
- assets/images/shopfront.webp (The workshop: the small wooden workshop with baskets under the eaves)
- assets/images/demo/p-zaru.webp (product: flat sieve tray)
- assets/images/demo/p-hanakago.webp (product: slim flower basket)
- assets/images/demo/p-bento.webp (product: lidded lunch basket)
- assets/images/demo/p-tote.webp (product: woven handbag)
- assets/images/demo/p-fruit.webp (product: wide fruit bowl)
- assets/images/demo/p-bread.webp (product: oval bread basket)
- assets/images/demo/p-kagome.webp (product: hexagon lidded box)
- assets/images/demo/p-coaster.webp (product: coaster set of four)
- assets/images/demo/j-harvest.webp (workshop note: why we cut bamboo in winter)
- assets/images/demo/j-strips.webp (workshop note and Newsletter: bamboo strips drying on a rack)
- assets/images/demo/j-care.webp (workshop note: caring for a bamboo basket)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
