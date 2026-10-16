=== Hoshizora Camp ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hoshizora Camp — a glamping-site theme laid out like an app: under a full top header, a night-indigo sidebar holds the synced camp board (tonight's sky, free tents, the fire circle, quiet hours and a Book a site button) beside the scrolling page. Tsutsuji azalea pink (#E95295) is the main colour: the header, the hero, every page head and the azalea band are pink fields with night-indigo type. The header splits the menu around the centred camp name, with the Book a site button at its end. The hero is a scene map: a watercolour map of the camp in a white frame with numbered pins for the lodge, tents, domes, star deck, fire circle and creek, and a cut-out bell tent that steps out of the frame and over the hero edge; a cut-out camp lantern hangs over the night band. Every picture is a watercolour illustration. Klee One for display, Gothic A1 for reading. The sample content comes in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hoshizora-camp.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hoshizora-camp.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hoshizora Camp.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal posts with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical labels appear only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Hoshizora Camp: camp board": the sidebar on every page.
- "Hoshizora Camp: camp details" (season, check-in, address, phone, email): the footer and Book & find us.
- "Hoshizora Camp: rates per night": Tents & domes and Book & find us.

The camp, its staff, address, telephone number and prices are fictional.

== Copyright ==

Hoshizora Camp is distributed under the terms of the GNU GPL v2 or later.
Fonts: Klee One (OFL-1.1) and Gothic A1 (OFL-1.1), subset to Latin (and, for Klee One SemiBold, the kana and kanji of the Japanese sample text), and LXGW WenKai TC (OFL-1.1), subset to the characters of the Traditional Chinese sample text, as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as watercolour illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the camp is fictional). The tent and lantern cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/map.webp (home hero and The meadow: the watercolour site map with numbered pins)
- assets/images/tent-cutout.webp (home hero: a white bell tent as a transparent cut-out that steps out of the map frame and over the hero edge)
- assets/images/lantern-cutout.webp (home: a camp lantern as a transparent cut-out hanging over the night band's top edge)
- assets/images/belltent.webp (stays cards, Tents & domes)
- assets/images/dome.webp (stays cards, Tents & domes, Star letter, journal)
- assets/images/campfire.webp (stays cards, night band, Tents & domes)
- assets/images/meadow.webp (azalea band, stays cards, Tents & domes)
- assets/images/breakfast.webp (journal)
- assets/images/trail.webp (The meadow, journal)
- assets/images/demo/dome.webp (demo import copy of assets/images/dome.webp)
- assets/images/demo/breakfast.webp (demo import copy of assets/images/breakfast.webp)
- assets/images/demo/trail.webp (demo import copy of assets/images/trail.webp)
