=== Koshi Machiya ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Koshi Machiya — a machiya townhouse stay theme laid out like a seasonal magazine, with a formal top header: the house name and tagline on the left, the Book a stay button on the right, and on wide screens the menu as a fixed sumi-ink side rail of numbered entries down the left edge (an overlay menu on phones and tablets). Kaki persimmon (#ED6D3D) is the main colour: the cover hero, the story band, every page head and the overlay menu are persimmon fields with a faint koshi-lattice texture, set in sumi ink. The hero is a stacked collage: three torn pencil sketches of the lane, the tatami room and the courtyard, taped and overlapped, with a cut-out townhouse breaking out of the collage and over the hero bottom edge. Editorial layout: an issue line and contents list on the cover, a feature spread with a two-column drop-cap lead and a pull quote, the rooms on a staggered numbered grid, the year 1910 in giant type on the story band, where a cut-out persimmon branch breaks over the top edge. Every picture is a graphite pencil sketch with persimmon coloured-pencil accents. Shippori Mincho B1 for display, Instrument Sans for reading, Noto Serif TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download koshi-machiya.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/koshi-machiya.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Koshi Machiya.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Koshi Machiya: house board": check-in, next free nights, guests, minimum stay and the price (home page).
- "Koshi Machiya: house details" (reply hours, check-in times, address, phone, email): the footer and Book a stay.
- "Koshi Machiya: rates": The house and Book a stay.

The house, its host, the street, address, telephone number and prices are fictional.

== Copyright ==

Koshi Machiya is distributed under the terms of the GNU GPL v2 or later.
Fonts: Shippori Mincho B1 (OFL-1.1), Bold, subset to Latin and to the characters of the Japanese sample text; Noto Serif TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Instrument Sans (OFL-1.1), Latin variable, as WOFF2; see assets/fonts/OFL-ShipporiMinchoB1.txt, OFL-NotoSerifTC.txt and OFL-InstrumentSans.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as graphite pencil sketches with persimmon coloured-pencil accents, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the house is fictional). The townhouse and persimmon cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout).
- assets/images/house-cutout.webp (home hero: a two-storey machiya townhouse with a persimmon noren, transparent cut-out that stands in front of the collage and breaks over the hero bottom edge)
- assets/images/persimmon-cutout.webp (home story band and page heads: a persimmon branch, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/street.webp (home hero collage, stay steps and The house page head: a lane of wooden townhouses)
- assets/images/tatami-room.webp (home hero collage, rooms and The house: the upstairs tatami room)
- assets/images/courtyard.webp (home hero collage, rooms and The house: the courtyard garden)
- assets/images/bath.webp (home rooms and The house: the hinoki bathtub)
- assets/images/kitchen.webp (home rooms, story collage and The house: the earthen-floor kitchen)
- assets/images/lattice.webp (home feature spread and Letters page head: a lattice window with a sleeping cat)
- assets/images/canal.webp (home story collage, stay steps and Letters: the canal and bridge)
- assets/images/host.webp (home story collage and The host page head: hands arranging a persimmon branch)
- assets/images/breakfast.webp (home stay steps and The host: the breakfast tray)
- assets/images/dusk.webp (home stay steps, The host and Book a stay page head: the lane at dusk)
- assets/images/demo/canal.webp (demo import copy of assets/images/canal.webp)
- assets/images/demo/breakfast.webp (demo import copy of assets/images/breakfast.webp)
- assets/images/demo/bath.webp (demo import copy of assets/images/bath.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
