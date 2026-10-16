=== Taiko Juku ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Taiko Juku — a taiko drumming school theme that scrolls like a vertical scroll: a sumi header with the school name and a Try a class button, whose menu runs down a fixed side rail on wide screens (top to bottom in Chinese and Japanese). Edo purple (#745399) is the main colour: the hero, every page head and the festival band are purple fields with white type. The hero is a framed window: a low-key photograph of a drummer in a dark timber dojo inside a deep sumi frame, with a cut-out drum breaking out of the window and over the hero edge; a second cut-out drum breaks over the class band. Every picture is a low-key photograph (50mm f/1.4, hard window light, dark ground, graded toward Edo purple). Yusei Magic for display, Karla for reading. Sample content in English, Traditional Chinese, Japanese, French and German; vertical section labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download taiko-juku.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/taiko-juku.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Taiko Juku.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Taiko Juku: dojo board": this week's trial class, free places, open practice and rest day (home page).
- "Taiko Juku: dojo details" (class days, times, address, phone, email): the footer and Join.
- "Taiko Juku: class fees": Classes and Join.

The school, its teachers, address, telephone number and fees are fictional.

== Copyright ==

Taiko Juku is distributed under the terms of the GNU GPL v2 or later.
Fonts: Yusei Magic (OFL-1.1), subset to Latin and to the characters of the Chinese and Japanese sample text, and Karla (OFL-1.1), Latin variable, and Huninn (OFL-1.1), subset to the characters of the Traditional Chinese sample text, as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as low-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the school is fictional). The drum cut-out has a transparent background (scripts/grok-image.sh --cutout). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero.webp (home hero window, Classes, The dojo, notes: low-key photograph of a drummer in a dark timber dojo)
- assets/images/drum-cutout.webp (home hero and class band: a barrel drum as a transparent cut-out that breaks out of the window frame and over the band edges)
- assets/images/class.webp (class cards, festival band, Classes, Newsletter, notes: students' hands with sticks over drumheads)
- assets/images/bachi.webp (class cards, class band, Classes, The dojo, notes: sticks and an indigo cloth on the dojo floor)
- assets/images/demo/hero.webp (demo import copy of assets/images/hero.webp)
- assets/images/demo/class.webp (demo import copy of assets/images/class.webp)
- assets/images/demo/bachi.webp (demo import copy of assets/images/bachi.webp)
