=== Hōchō Kyōshitsu ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hōchō Kyōshitsu — A washoku cooking school theme built as a card mosaic in gunjō ultramarine (#4C6CB3), the main colour on the hero card, every page head, the header bar and the footer, over washi-textured pale paper with sumi indigo ink; Yuji Syuku brush display over Albert Sans. The art is pencil-sketch raster illustration (graphite hatching with ultramarine pencil accents): a yanagiba knife on a hinoki board and a whole sea bream as transparent cut-outs that break out of their cards, plus a dashi pot, a katsuramuki lesson, a bento and the school kitchen. A full top header: one ultramarine bar with the school name, the menu and a Book a class button. The home page is a mosaic of cards: the large ultramarine title card with a vertical Japanese spine and the cut-out knife crossing its edge, class cards, the sea bream swimming over the four-week course card, the synced fees card and the journal. The fees card and the school details are synced patterns edited in one place. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hocho-kyoshitsu.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hocho-kyoshitsu.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hōchō Kyōshitsu.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, four journal posts with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php:
- "Hōchō Kyōshitsu: class fees": shown on the home page and the Classes & fees page.
- "Hōchō Kyōshitsu: school details" (class times, address, phone, email): shown in the footer and on the Contact page.

The school, the teacher, address, telephone number and fees are fictional.

== Copyright ==

Hōchō Kyōshitsu is distributed under the terms of the GNU GPL v2 or later.
Fonts: Yuji Syuku (OFL-1.1, subset to Latin, kana and the kanji used) and Albert Sans (OFL-1.1, Latin variable) as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen, pencil-sketch illustration style (graphite hatching on washi with ultramarine pencil accents), released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the school is fictional). The two cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero-cutout.webp (home hero and The school: the knife and hinoki board as a transparent cut-out that breaks out of the ultramarine card)
- assets/images/fish-cutout.webp (home: a whole sea bream as a transparent cut-out that swims out of its card)
- assets/images/class-knife.webp (home mosaic, Classes; journal)
- assets/images/class-dashi.webp (home mosaic, Classes; journal)
- assets/images/studio.webp (home fees row, Classes, The school; journal)
- assets/images/bento.webp (Classes; journal)
- assets/images/demo/class-knife.webp (demo import copy of assets/images/class-knife.webp)
- assets/images/demo/class-dashi.webp (demo import copy of assets/images/class-dashi.webp)
- assets/images/demo/studio.webp (demo import copy of assets/images/studio.webp)
- assets/images/demo/bento.webp (demo import copy of assets/images/bento.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
