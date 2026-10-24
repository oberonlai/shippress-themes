=== Kakei Advisors ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kakei Advisors — a theme for an independent, fee-only financial planner, laid out in horizontal strips under a formal white top header (office name, tagline, a Book a first meeting button and a menu button); the menu opens as a full-screen pine-green overlay with large numbered entries at every width. Matsuba pine green (#42602D) is the main colour: the hero, the office band, every page head and the overlay are green fields in white type with a soft wash. The hero is a framed window: the title, lead, buttons and the questions of the month on the left, the meeting room seen through a white window frame with glazing bars on the right, and a cut-out olive tree (transparent WebP) standing over the frame's lower corner and breaking past the hero bottom edge; a cut-out green notebook breaks over the office band and every page head. The services run as ruled horizontal strips (number, photo, title, facts, line) and the life stages as one long sideways-scrolling strip. Every picture is a realistic 35mm film-grain photograph of a modern, international setting. Noto Serif JP for display, Inter for reading, Noto Serif TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kakei-advisors.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kakei-advisors.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kakei Advisors.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Kakei Advisors: workshop board" (the office board): open slots, hours, this week's workshop, reply time and closed days.
- "Kakei Advisors: workshop details" (the office details: hours, Saturday meetings, address, phone, email): the footer and Book a first meeting.
- "Kakei Advisors: price guide" (fees): Services and Book a first meeting.

The office, its people, address, telephone number and fees are fictional; nothing in the sample content is financial advice.

== Copyright ==

Kakei Advisors is distributed under the terms of the GNU GPL v2 or later.
Fonts: Noto Serif JP (OFL-1.1), SemiBold, subset to Latin and to the characters of the Japanese sample text; Noto Serif TC (OFL-1.1), SemiBold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Inter (OFL-1.1), Regular and SemiBold, Latin subset. License texts: assets/fonts/OFL-NotoSerifJP.txt, assets/fonts/OFL-NotoSerifTC.txt, assets/fonts/OFL-Inter.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic 35mm film-grain photographs (50mm f/2, natural side light, fine grain, slightly faded like a watercolour wash, graded toward matsuba pine green), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/plant-cutout.webp (home hero: a small olive tree in a green pot, transparent cut-out that breaks out over the window frame and the hero bottom edge)
- assets/images/notebook-cutout.webp (office band and page heads: a green notebook with a brass pen, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/hero-room.webp (home hero: the meeting room through the window frame)
- assets/images/advisor.webp (services strip, office band and About: two people reviewing charts)
- assets/images/desk.webp (services strip: a tidy desk with folders)
- assets/images/stage-business.webp (services strip and office band: a small design studio)
- assets/images/review.webp (services strip: a kitchen table with tea and a folder)
- assets/images/stage-start.webp (life-stage strip: a first apartment desk)
- assets/images/stage-family.webp (life-stage strip: a family entryway)
- assets/images/stage-home.webp (life-stage strip: house keys and a floor plan)
- assets/images/stage-retire.webp (life-stage strip, office band and page heads: a garden terrace)
- assets/images/office.webp (services intro and page heads: the office building)
- assets/images/demo/stage-home.webp (demo import copy of assets/images/stage-home.webp)
- assets/images/demo/desk.webp (demo import copy of assets/images/desk.webp)
- assets/images/demo/stage-business.webp (demo import copy of assets/images/stage-business.webp)

== Changelog ==
= 1.0.2 =
* Updated theme files (theme-meta.json).

= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
