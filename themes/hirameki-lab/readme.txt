=== Hirameki Lab ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hirameki Lab — a theme for an after-school STEM academy (robotics, coding, science and making for ages 7 to 15), laid out as a card mosaic under a formal white top header: the lab name and tagline centred on top, a Book a trial lab button at the right and the menu as a centred row underneath (a kouji-orange numbered overlay on phones). Kouji orange (#F6AD49) is the main colour: the project tiles, the featured-project band, every page head and the overlay menu are kouji fields in graphite type. The front page leads with results: a one-line headline with a text link, then a horizontal scroll strip of five student-project cards that bleeds off the right edge, a twelve-card project wall with filter chips, one featured project read in three columns, a courses-by-age table, three lab figures and a trial band. Every project object is a transparent high-key photographic cut-out (WebP) that breaks over the top edge of its tile; a large cut-out robot arm breaks above the featured band and a bottle rocket rises out of the trial band. Photographs are realistic high-key studio images (85mm f/2.8, softbox light, near-white grounds). Space Grotesk for Latin text, Kosugi for Japanese, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hirameki-lab.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hirameki-lab.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hirameki Lab.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Hirameki Lab: lab board": this week's trial labs, opening hours, the open lab, reply time and closed days.
- "Hirameki Lab: lab details" (hours, trial labs, address, phone, email): the footer and Trial lab.
- "Hirameki Lab: fee guide": Courses and Trial lab.

The lab, its instructors, address, telephone number and figures are fictional.

== Copyright ==

Hirameki Lab is distributed under the terms of the GNU GPL v2 or later.
Fonts: Space Grotesk (OFL-1.1), Regular and Bold, Latin subsets; Kosugi (Apache-2.0), Regular, subset to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never a Japanese font). License texts: assets/fonts/OFL-SpaceGrotesk.txt, assets/fonts/LICENSE-Kosugi.txt, assets/fonts/OFL-NotoSansTC.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic high-key photographs (85mm f/2.8, softbox light, near-white grounds, kouji orange accents), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/arm-cutout.webp (home strip, project wall and featured band: a student-built robot arm, transparent cut-out that breaks over its tile and above the featured band)
- assets/images/bridge-cutout.webp (strip and wall: a stick truss bridge model, transparent cut-out)
- assets/images/sensor-cutout.webp (strip, wall and page heads: a seedling with a soil sensor, transparent cut-out)
- assets/images/car-cutout.webp (strip and wall: a solar model car, transparent cut-out)
- assets/images/rocket-cutout.webp (strip, wall and trial band: a bottle rocket, transparent cut-out rising out of the band)
- assets/images/lab.webp (courses, about and page heads: the bright lab classroom)
- assets/images/hands.webp (about and page heads: a child wiring a breadboard)
- assets/images/bench.webp (courses and steps: kit parts laid out on a workbench)
- assets/images/pattern.webp (a small dot tile for the kouji fields, made with ImageMagick)
- assets/images/demo/hands.webp (sample post image)
- assets/images/demo/bench.webp (sample post image)
- assets/images/demo/lab.webp (sample post image)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
