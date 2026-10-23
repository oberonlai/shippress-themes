=== Shirokuro Camera ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Shirokuro Camera — a WooCommerce store theme for a small film camera shop on a hillside street, laid out as an asymmetric masonry. A formal centred top header carries the Shop cameras button on the left, the shop name in the middle, account and cart on the right and the main menu centred on its own row below, under a strip of clay sprocket holes; below 1100 px a Menu button opens it as a full-screen mikan overlay. Mikan orange (#F08300) is the main colour: the hero field, the counter board lead tile, the camera shelf band, the darkroom card, every page head and the footer strip are mikan fields with camera-black text, and raster clay textures (film sprocket holes and a halftone of clay dots) run through them. The hero shows the clay shop interior through a black viewfinder window with rounded corners and frame marks; a cream card with the lead overlaps the window and a cut-out clay camera (transparent WebP) breaks out over the window frame and the hero's bottom edge. The counter board, the five checks, the camera shelf, the darkroom collage and the counter notes are all uneven masonry tiles and columns, and a cut-out film roll breaks out of the darkroom card. Every picture is a soft 3D clay illustration. DotGothic16 for display, Lexend Deca for reading. Sample content and products in English, Traditional Chinese, Japanese, French and German; vertical lines only in Chinese and Japanese. Works without WooCommerce. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download shirokuro-camera.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/shirokuro-camera.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Shirokuro Camera.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three counter notes with three categories and three tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. With WooCommerce active it also adds eight sample products with three categories and three tags (inc/woo-import.php); without WooCommerce the theme works as a plain site and the shelves show product pictures.

Languages: the sample content and products come in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language. Vertical labels appear only in Chinese and Japanese.

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Shirokuro Camera: counter board": the free check, what was just tested, the film lab and repairs (home page and Visit).
- "Shirokuro Camera: shop details" (hours, address, phone, email): the footer and Visit.

The shop, its products, people, address, telephone number and prices are fictional.

== Copyright ==

Shirokuro Camera is distributed under the terms of the GNU GPL v2 or later.
Fonts: DotGothic16 (OFL-1.1, no Reserved Font Name), Regular, subset to Latin and to the characters of the Japanese sample text; Lexend Deca (OFL-1.1, Reserved Font Name "RevReading Lexend"), the google/fonts variable TTF shipped unmodified; Noto Sans TC (OFL-1.1), Medium, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); all in assets/fonts with their OFL.txt files.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as soft 3D clay illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the shop is fictional). The two cut-outs have transparent backgrounds (rembg).
- assets/images/hero-art.webp (home hero: a clay film camera shop interior with shelves of cameras and a glass counter, seen through the viewfinder window)
- assets/images/camera-cutout.webp (home hero and page heads: a clay 35mm rangefinder camera with a strap, transparent cut-out that breaks out over the window frame and the page-head edges)
- assets/images/roll-cutout.webp (home darkroom collage: a clay film canister with curling film, transparent cut-out that breaks out of the top edge of the mikan card)
- assets/images/sprocket.webp (texture: clay sheet with film sprocket holes, used on the header strip, the shelf band, page heads and the footer strip)
- assets/images/dots.webp (texture: clay halftone dots, used on the hero field and the board lead tile)
- assets/images/repair.webp (home five checks: clay hands opening a film camera on a workbench)
- assets/images/darkroom.webp (home darkroom collage: developed film hanging to dry, a developing tank and a timer)
- assets/images/shopfront.webp (Our story: the corner shop with an orange awning and cameras in the window)
- assets/images/demo/p-rangefinder.webp (product: compact rangefinder)
- assets/images/demo/p-slr.webp (product: 35mm SLR with 50mm lens)
- assets/images/demo/p-tlr.webp (product: twin-lens reflex)
- assets/images/demo/p-halfframe.webp (product: half-frame compact)
- assets/images/demo/p-lens.webp (product: standard 50mm f/2 lens)
- assets/images/demo/p-film.webp (product: colour film, pack of three)
- assets/images/demo/p-strap.webp (product: woven camera strap)
- assets/images/demo/p-meter.webp (product: pocket light meter)
- assets/images/demo/j-roll.webp (counter note: loading film without fear)
- assets/images/demo/j-walk.webp (counter note: the persimmon walk)
- assets/images/demo/j-lab.webp (counter note and Newsletter: contact sheets and prints with a loupe)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
