=== Katsuji Press ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Katsuji Press — A letterpress print shop theme laid out as horizontal strips in asagi light blue-green (#00A3AF), the main colour on the header bar, the hero, the process band and every page head, with sumi ink black, cool cotton paper and deep asagi links; Potta One display over Noto Sans JP. The art is sumi-ink raster illustration (black brush strokes and grey washes with asagi accents) used as collage: torn-edged pieces of paper taped and overlapped, a sideways-scrolling strip of print-menu cards, and a 1952 platen press and an ink brayer as transparent cut-outs that break out of the hero frame, the section edge and a card. A full top header: a sumi strip with an Order a quote button, then the menu split into two halves either side of the centred press name. Vertical Japanese only on Japanese text; English always runs horizontally. The print menu and the press details are synced patterns edited in one place. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download katsuji-press.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/katsuji-press.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Katsuji Press.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, four journal posts with two categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php:
- "Katsuji Press: print menu": shown on the home page and the Printing page.
- "Katsuji Press: press details" (opening hours, address, phone, email): shown in the footer and on the Contact page.

The print shop, the printers, address, telephone number and prices are fictional.

== Copyright ==

Katsuji Press is distributed under the terms of the GNU GPL v2 or later.
Fonts: Potta One (OFL-1.1) and Noto Sans JP (OFL-1.1, regular and bold instances of the variable font), subset to Latin and the kanji used, as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen, sumi-ink illustration style (black brush strokes and grey ink washes with asagi accents), released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the print shop is fictional). The press and the brayer cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout). The other pictures are used as torn-edge collage pieces (CSS clip-path). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/press-cutout.webp (home hero: a 1952 platen press as a transparent cut-out that breaks over the frame and the bottom edge of the hero)
- assets/images/roller-cutout.webp (print-menu strip, process collage and The press room: an ink brayer and wood type as a transparent cut-out that breaks out of its card)
- assets/images/workshop.webp (home hero frame, print-menu strip, The press room)
- assets/images/paper.webp (print-menu strip, process collage)
- assets/images/hands.webp (print-menu strip, process collage)
- assets/images/demo/paper.webp (demo import copy of assets/images/paper.webp)
- assets/images/demo/hands.webp (demo import copy of assets/images/hands.webp)
- assets/images/demo/workshop.webp (demo import copy of assets/images/workshop.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
