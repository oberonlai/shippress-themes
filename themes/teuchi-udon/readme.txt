=== Teuchi Udon ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Teuchi Udon — a handmade udon shop theme laid out like an app: under a formal top header, a pine-ink sidebar holds the synced noodle board (today's flour, hours, seats, wait, closed days and a Reserve a table button) and stays beside the page while it scrolls. The header splits the menu around the centred shop name, with the Reserve a table button at its end. Chitose green (#316745), the deep pine green of traditional Japanese dyeing, is the main colour: the hero, the story band and every page head are chitose green fields set in rice-paper white, with wheat-gold labels. The hero is a diagonal split: the title, lead, buttons and today's bowls on the green field, the pencil sketch of the noodle kitchen cut on a slant beside it, and a cut-out bowl of udon (transparent WebP) sitting on the seam and breaking over the hero bottom edge; a cut-out flour sack breaks over the story band and every page head. Every picture is a full pencil-sketch illustration with a soft green and wheat wash. The menu is a card mosaic of four bowls. Kaisei Decol for display, Be Vietnam Pro for reading, Noto Serif TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download teuchi-udon.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/teuchi-udon.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Teuchi Udon.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Teuchi Udon: workshop board" (the noodle board): today's flour, hours, seats, wait and closed days (the sidebar on every page).
- "Teuchi Udon: workshop details" (the shop details: hours, reservations, address, phone, email): the footer and Reserve a table.
- "Teuchi Udon: price guide" (prices): The menu and Reserve a table.

The shop, its people, address, telephone number and prices are fictional.

== Copyright ==

Teuchi Udon is distributed under the terms of the GNU GPL v2 or later.
Fonts: Kaisei Decol (OFL-1.1), Medium, subset to Latin and to the characters of the Japanese sample text; Noto Serif TC (OFL-1.1), Medium, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Be Vietnam Pro (OFL-1.1), Regular, SemiBold and Bold, Latin, as WOFF2; licence texts in assets/fonts/OFL-*.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as pencil-sketch illustrations (graphite pencil on cream paper with a soft chitose green and wheat coloured-pencil wash), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text). The bowl and flour sack are transparent cut-outs.
- assets/images/bowl-cutout.webp (home hero: a deep bowl of udon in golden broth, transparent cut-out that sits on the diagonal seam and breaks over the hero bottom edge)
- assets/images/flour-cutout.webp (story band and page heads: a cloth flour sack with a wooden scoop and wheat ears, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/hero-kitchen.webp (home hero: the pencil sketch of the noodle kitchen on the diagonal split)
- assets/images/bowl-kake.webp (home menu mosaic and The menu: hot kake udon)
- assets/images/bowl-zaru.webp (home menu mosaic and The menu: cold zaru udon)
- assets/images/bowl-kitsune.webp (home menu mosaic, The menu and steps: kitsune udon)
- assets/images/bowl-curry.webp (home menu mosaic and The menu: curry udon)
- assets/images/shopfront.webp (About us and Reserve a table page heads: the shop front with a plain noren)
- assets/images/dough.webp (story band, steps and About us: hands kneading the dough)
- assets/images/flour.webp (steps and About us: a box of flour and salt water)
- assets/images/wheat-field.webp (story band, The menu page head and Letters: the wheat field)
- assets/images/broth.webp (home menu mosaic and Letters page head: the dashi pot)
- assets/images/demo/wheat-field.webp (demo import copy of assets/images/wheat-field.webp)
- assets/images/demo/broth.webp (demo import copy of assets/images/broth.webp)
- assets/images/demo/bowl-curry.webp (demo import copy of assets/images/bowl-curry.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
