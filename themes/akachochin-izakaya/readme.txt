=== Akachōchin ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Akachōchin — An izakaya theme laid out as a card mosaic in shu vermilion (#EB6101), the main colour on the full hero field, the page heads, the menu overlay and the mosaic cards, with sumi brown-black, warm paper and deep vermilion links; Reggae One display over Sawarabi Gothic. The pictures are documentary-style photographs (35 mm, available light, handheld, fine grain, graded toward vermilion): the hero is a pair of tall vertical banners, a sumi nobori with the shop name set vertically beside a tall photograph of the lantern alley, with a red paper lantern as a transparent cut-out hanging over both; a cut-out sake flask breaks out of its vermilion card in the mosaic. A full top header: the shop name, a Reserve a seat button and a menu button that opens a full-screen vermilion overlay. Vertical Japanese only on Japanese text; English always runs horizontally. Tonight's board and the shop details are synced patterns edited in one place. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download akachochin-izakaya.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/akachochin-izakaya.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Akachōchin.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, four journal posts with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php:
- "Akachōchin: tonight's board": shown on the home page and the Menu page.
- "Akachōchin: shop details" (opening hours, address, phone, email): shown in the footer and on the Contact page.

The izakaya, its staff, address, telephone number and prices are fictional.

== Copyright ==

Akachōchin is distributed under the terms of the GNU GPL v2 or later.
Fonts: Reggae One (OFL-1.1) and Sawarabi Gothic (OFL-1.1), subset to Latin and the kanji used, as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as documentary-style photographs (35 mm wide angle, available light, handheld, fine grain, graded toward vermilion #EB6101), released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the izakaya is fictional). The lantern and the sake flask cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/lantern-cutout.webp (home hero: a red paper lantern as a transparent cut-out hanging over the nobori banner and the photo banner; The counter: breaks out of the vermilion card)
- assets/images/tokkuri-cutout.webp (home mosaic and Menu: a sake flask and cups as a transparent cut-out that breaks out of its vermilion card)
- assets/images/alley.webp (home hero photo banner)
- assets/images/grill.webp (home mosaic, Menu)
- assets/images/counter.webp (home mosaic, The counter)
- assets/images/plates.webp (home mosaic, Menu)
- assets/images/demo/grill.webp (demo import copy of assets/images/grill.webp)
- assets/images/demo/plates.webp (demo import copy of assets/images/plates.webp)
- assets/images/demo/alley.webp (demo import copy of assets/images/alley.webp)
- assets/images/demo/counter.webp (demo import copy of assets/images/counter.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
