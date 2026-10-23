=== Shinai Dojo ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Shinai Dojo — a neighbourhood kendo dojo theme set like a magazine. A formal top header carries the dojo name and tagline, a Book a trial class button and a menu button that opens a full-screen madder red overlay with large numbered entries. Akane (#B7282E), the deep madder red of traditional Japanese dyeing, is the main colour: the cover, the dojo band and every page head are madder fields with a faint asanoha hemp-leaf pattern texture multiplied in, set in plaster white with hinoki-gold labels. The cover is a stacked collage: the issue line, title, lead, buttons and the contents of this issue on the left, three numbered 2.5D isometric plates of the dojo stacked and offset on the right, and a cut-out kendo helmet (transparent WebP) breaking out of the stack and over the cover bottom edge; a cut-out dojo drum breaks over the top edge of the dojo band and the bottom edge of every page head. The home page reads as three features: the classes as a magazine spread with a drop cap and a pull quote, the dojo story with the founding year in giant type, and a practice in four plates on pale madder with the light pattern; a synced practice board and the fees are kept in one place each. Every picture is a 2.5D isometric illustration. Shippori Antique for display, Libre Franklin for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download shinai-dojo.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/shinai-dojo.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Shinai Dojo.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Shinai Dojo: practice board" (the practice board): the term, tonight's classes, the floor, the trial class and closed days (home page).
- "Shinai Dojo: dojo details" (the dojo details: practice times, visitors, address, phone, email): the footer and Trial class.
- "Shinai Dojo: fees" (fees): Classes and Trial class.

The dojo, its people, address, telephone number and fees are fictional.

== Copyright ==

Shinai Dojo is distributed under the terms of the GNU GPL v2 or later.
Fonts: Shippori Antique (OFL-1.1), Regular, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Medium, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Libre Franklin (OFL-1.1), Regular, SemiBold and Bold, Latin, as WOFF2; licence texts in assets/fonts/OFL-*.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as 2.5D isometric illustrations (clean isometric dioramas with soft matte shading in madder red, plaster white, hinoki wood and charcoal), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text). The helmet and drum are transparent cut-outs; the asanoha tiles are made from one generated pattern.
- assets/images/men-cutout.webp (home cover: a kendo helmet with a metal grille and madder cords, transparent cut-out that breaks out of the stacked plates and over the cover bottom edge)
- assets/images/drum-cutout.webp (dojo band and page heads: a dojo drum on a low stand, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/asanoha.webp (pattern texture: an asanoha hemp-leaf tile multiplied into every madder field and the overlay menu)
- assets/images/asanoha-light.webp (pattern texture: a light madder asanoha tile on the pale madder practice band)
- assets/images/hero-hall.webp (home cover plate 01 and Classes: a cutaway of the dojo hall)
- assets/images/keiko.webp (home cover plate 02 and Classes: two practitioners in armour)
- assets/images/entrance.webp (home cover plate 03, The dojo and Trial class: the dojo building)
- assets/images/rack.webp (classes spread and Letters page head: the sword rack)
- assets/images/kids-play.webp (classes spread and Classes page head: children at the padded post)
- assets/images/gear.webp (classes spread and The dojo: hakama and jacket on a shelf)
- assets/images/strike.webp (classes spread: a leaping strike)
- assets/images/tea-step.webp (classes spread: tea on the dojo step)
- assets/images/grading.webp (dojo band and journal: a grading day)
- assets/images/dawn.webp (dojo band, Classes and Letters: wiping the floor at dawn)
- assets/images/bogu.webp (dojo band, The dojo page head and journal: a set of armour)
- assets/images/children.webp (a practice and Classes: children kneeling in a row)
- assets/images/footwork.webp (a practice and Classes: sliding footwork)
- assets/images/basics.webp (a practice: wrist strikes in pairs)
- assets/images/mokuso.webp (a practice: the last bow in seiza)
- assets/images/demo/grading.webp (demo import copy of assets/images/grading.webp)
- assets/images/demo/bogu.webp (demo import copy of assets/images/bogu.webp)
- assets/images/demo/dawn.webp (demo import copy of assets/images/dawn.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
