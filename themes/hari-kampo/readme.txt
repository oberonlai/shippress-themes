=== Hari Kampo ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hari Kampo — A kampo pharmacy theme set as an asymmetric masonry in hiwa siskin yellow-green (#D7CF3A), the main colour on the header, the stacked-collage hero, the consultation band and every page head, over a pencil-sketched herb pattern texture, with graphite green ink and herb paper; RocknRoll One display over IBM Plex Sans JP. The art is pencil-sketch raster illustration (graphite cross-hatching with a hiwa wash): three sketches of the herbs, the drawer wall and the decoction pot stacked as a collage, a ginseng root as a transparent cut-out that breaks over the collage, the section edge and a card, and a seamless herb pattern used as texture on the hiwa fields and masonry tiles. A full top header with the pharmacy name centred, the menu centred beneath it between ink rules, and a Book a consultation button. Vertical Japanese only on Japanese text; English always runs horizontally. The consultation fees and the pharmacy details are synced patterns edited in one place. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hari-kampo.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hari-kampo.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hari Kampo.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, four journal posts with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php:
- "Hari Kampo: consultation fees": shown on the home page and the Consultation page.
- "Hari Kampo: pharmacy details" (opening hours, address, phone, email): shown in the footer and on the Contact page.

The pharmacy, the pharmacists, address, telephone number and prices are fictional; nothing in the demo content is medical advice.

== Copyright ==

Hari Kampo is distributed under the terms of the GNU GPL v2 or later.
Fonts: RocknRoll One (OFL-1.1) and IBM Plex Sans JP (OFL-1.1, regular and semibold), subset to Latin and the kanji used, as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen, pencil-sketch illustration style (graphite cross-hatching with a hiwa yellow-green wash), released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the pharmacy is fictional). The ginseng cut-out has a transparent background (scripts/grok-image.sh --cutout). The herb pattern is lightened to greyscale and tiled as a multiplied texture. Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/ginseng-cutout.webp (home hero and The pharmacy: a ginseng root as a transparent cut-out that breaks over the collage, the section edge and the hiwa card)
- assets/images/hero-shop.webp (home hero collage, The pharmacy)
- assets/images/hero-herbs.webp (home hero collage, herb masonry)
- assets/images/hero-pot.webp (home hero collage)
- assets/images/weighing.webp (herb masonry)
- assets/images/pattern.webp (seamless herb pattern used as texture on the hiwa fields and tiles)
- assets/images/demo/hero-pot.webp (demo import copy of assets/images/hero-pot.webp)
- assets/images/demo/weighing.webp (demo import copy of assets/images/weighing.webp)
- assets/images/demo/hero-herbs.webp (demo import copy of assets/images/hero-herbs.webp)
- assets/images/demo/hero-shop.webp (demo import copy of assets/images/hero-shop.webp)
