=== Koma Manga ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Koma Manga — a manga artist portfolio theme set like a poster: a paper header with the studio name and a Request a commission button, whose menu runs down a fixed sumi side rail on wide screens (stacked vertical words in Chinese and Japanese). Wakatake young-bamboo green (#68BE8D) is the main colour: the hero, every page head and the serial band are bamboo-green fields with sumi-ink type. The hero is centred giant type over a collage of tilted clay-diorama panels taped onto screen-tone pieces; a cut-out clay artist leaps out of the collage and over the hero edge, a cut-out dip pen breaks out of the serial band's desk panel and over its top edge, and a clay cat peeks over every page head. Every picture is a 3D clay illustration. Selected works are laid out like a manga page, the process as a four-panel strip. Zen Old Mincho for display, Golos Text for reading. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download koma-manga.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/koma-manga.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Koma Manga.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three studio notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Koma Manga: studio board": what is on the desk, open commission places, the next fair and the reply time (home page).
- "Koma Manga: studio details" (hours, visits, address, phone, email): the footer and Commissions.
- "Koma Manga: commission prices": Works and Commissions.

The studio, its works, address, telephone number and prices are fictional.

== Copyright ==

Koma Manga is distributed under the terms of the GNU GPL v2 or later.
Fonts: Zen Old Mincho (OFL-1.1), Regular and Black, subset to Latin and to the characters of the Japanese sample text; LXGW WenKai TC (OFL-1.1), Regular and Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Golos Text (OFL-1.1), Latin variable, as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as 3D clay illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the studio is fictional). The artist, pen and cat cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/artist-cutout.webp (home hero: a clay manga artist leaping with a giant brush pen, transparent cut-out that breaks out of the collage and over the hero edge)
- assets/images/pen-cutout.webp (home serial band: a clay dip pen and ink bottle, transparent cut-out that breaks out of the desk panel and over the band's top edge)
- assets/images/cat-cutout.webp (page heads: a round clay cat with a topknot, transparent cut-out peeking over the bottom edge)
- assets/images/work-rooftop.webp (hero collage, works page and home works: a clay cat samurai on a tiled roof at dusk)
- assets/images/work-seaside.webp (hero collage, works: a clay girl cycling a seaside road towards a lighthouse)
- assets/images/work-ramen.webp (works: a clay robot eating noodles at a night counter)
- assets/images/work-forest.webp (hero collage, works: a clay white fox on a misty bamboo path)
- assets/images/desk.webp (serial band, process strip, The studio, notes: a clay manga desk)
- assets/images/artist-window.webp (process strip, The studio: a clay artist drawing by a bamboo window)
- assets/images/thumbnails.webp (process strip, Newsletter: clay storyboard sheets on a cutting mat)
- assets/images/inking.webp (process strip, notes: a clay hand inking a wave)
- assets/images/fair-table.webp (notes: a clay comic-fair table)
- assets/images/demo/desk.webp (demo import copy of assets/images/desk.webp)
- assets/images/demo/fair-table.webp (demo import copy of assets/images/fair-table.webp)
- assets/images/demo/inking.webp (demo import copy of assets/images/inking.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
