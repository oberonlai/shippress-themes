=== Fukusa Chado ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Fukusa Chado — a tea ceremony school theme laid out as a mosaic of soft rounded cards, with a formal top header: the school name and tagline on the left, the menu in the bar and the Book a trial lesson button on the right (an overlay menu on phones and tablets). Tokiwa evergreen (#007B43) is the main colour: the cover hero, the tea room band, every page head and the overlay menu are full green fields with a faint tatami weave, set in cream. The hero is centred giant type — the lesson days, the title in very large display type, the lead and the buttons on one axis — with a cut-out clay tea bowl that breaks out over the hero bottom edge and a cut-out whisk leaning out of the right edge. The four classes and a pull quote sit in a card mosaic of different sizes and colours; the tea room band sets four and a half in giant type beside rounded picture cards, with the cut-out whisk breaking over its top edge. Every picture is a soft matte 3D clay illustration. Kaisei Opti for display, Mulish for reading, Noto Serif TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download fukusa-chado.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/fukusa-chado.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Fukusa Chado.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Fukusa Chado: term board": lesson days, next trial lesson, class size, length and the monthly fee (home page).
- "Fukusa Chado: school details" (reply hours, lesson days, address, phone, email): the footer and Trial lesson.
- "Fukusa Chado: fees": Classes and Trial lesson.

The school, its teacher, the street, address, telephone number and fees are fictional.

== Copyright ==

Fukusa Chado is distributed under the terms of the GNU GPL v2 or later.
Fonts: Kaisei Opti (OFL-1.1), Bold, subset to Latin and to the characters of the Japanese sample text; Noto Serif TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Mulish (OFL-1.1), Latin variable, as WOFF2; see assets/fonts/OFL-KaiseiOpti.txt, OFL-NotoSerifTC.txt and OFL-Mulish.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as soft matte 3D clay illustrations in tokiwa green and cream, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the school is fictional). The tea bowl and whisk cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout).
- assets/images/chawan-cutout.webp (home hero: a clay matcha bowl with a whisk, transparent cut-out that breaks out over the hero bottom edge into the term board)
- assets/images/whisk-cutout.webp (home hero, tea room band and page heads: a clay bamboo whisk, transparent cut-out that leans out of the hero edge and breaks over the band top edge and the page-head bottom edges)
- assets/images/tearoom.webp (tea room band, Classes page head and The teacher: the four-and-a-half-mat tea room)
- assets/images/lesson.webp (class mosaic, Classes and The teacher page head: a teacher showing a student how to fold the silk cloth)
- assets/images/garden.webp (tea room band, first-lesson steps and Trial lesson page head: the garden path with the stone basin)
- assets/images/kettle.webp (class mosaic and Classes: the iron kettle over charcoal)
- assets/images/utensils.webp (first-lesson steps and Classes: tea utensils on tatami)
- assets/images/sweets.webp (class mosaic, first-lesson steps, Classes and Letters: seasonal sweets on a black tray)
- assets/images/flower.webp (first-lesson steps and The teacher: a camellia in a bamboo vase)
- assets/images/gate.webp (tea room band: the garden gate under a thatched roof)
- assets/images/seasons.webp (class mosaic, Letters page head and The teacher: four small scenes of the seasons)
- assets/images/demo/sweets.webp (demo import copy of assets/images/sweets.webp)
- assets/images/demo/kettle.webp (demo import copy of assets/images/kettle.webp)
- assets/images/demo/flower.webp (demo import copy of assets/images/flower.webp)
