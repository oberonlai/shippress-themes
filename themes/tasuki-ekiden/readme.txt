=== Tasuki Ekiden ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Tasuki Ekiden — a community ekiden relay race theme with a formal top header: the race name centred on the top row, the Enter a team button at its right end and the menu centred on its own row beneath. Konpeki blue (#007BBB) is the main colour: the hero text half, the course strip, the sash band, every page head and the overlay menu are konpeki fields with a sumi-ink wind-and-wave brush pattern multiplied in, set in white. The hero puts the text on the left and a framed sumi-ink painting of a sash handover on the right; a cut-out runner breaks out of the frame across the blue field and over the hero bottom edge. Horizontal strips: the five legs of the course scroll sideways as one strip of cards, race day runs as a four-step strip, and the race board is one long band. A cut-out blue sash breaks over the sash band. Every picture is a sumi-ink brush painting with cerulean washes. Rampart One for display, Archivo for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download tasuki-ekiden.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tasuki-ekiden.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tasuki Ekiden.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Tasuki Ekiden: race board": race day, places left, entry close, the course walk and the cut-off (home page).
- "Tasuki Ekiden: race office details" (hours, closed days, address, phone, email): the footer and Entries.
- "Tasuki Ekiden: entry fees": The course and Entries.

The race, its organisers, places, address, telephone number and fees are fictional.

== Copyright ==

Tasuki Ekiden is distributed under the terms of the GNU GPL v2 or later.
Fonts: Rampart One (OFL-1.1), Regular, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Archivo (OFL-1.1), Latin variable, as WOFF2; see assets/fonts/OFL-RampartOne.txt, OFL-NotoSansTC.txt and OFL-Archivo.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as sumi-ink brush paintings with cerulean washes, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the race is fictional). The runner and sash cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout).
- assets/images/hero.webp (home hero: two relay runners passing a blue sash on a coast road at dawn, framed on the right of the hero)
- assets/images/runner-cutout.webp (home hero and page heads: a relay runner with a blue sash, transparent cut-out that breaks out of the hero frame and over the hero and page-head bottom edges)
- assets/images/sash-cutout.webp (home sash band: a folded blue sash, transparent cut-out that breaks over the band top edge)
- assets/images/pattern.webp (home sash band: the wind-and-wave brush pattern)
- assets/images/pattern-soft.webp (texture multiplied into every konpeki field and behind the journal (a lightened greyscale copy of pattern.webp))
- assets/images/team.webp (home course band and About the race: a team stretching by a river before dawn)
- assets/images/relay-zone.webp (home course strip and The course: the relay zone on a town street)
- assets/images/course.webp (home course strip, The course and the race-day steps: a winding mountain pass road)
- assets/images/shoes.webp (home course strip, The course and the race-day steps: running shoes and a rolled sash on a bench)
- assets/images/training.webp (home course strip and The course: runners on a riverside path under cherry trees)
- assets/images/finish.webp (About the race and the race-day steps: a runner raising both arms at the finish)
- assets/images/water-station.webp (race-day steps and Newsletter: volunteers at a water table)
- assets/images/demo/water-station.webp (demo import copy of assets/images/water-station.webp)
- assets/images/demo/training.webp (demo import copy of assets/images/training.webp)
- assets/images/demo/finish.webp (demo import copy of assets/images/finish.webp)
