=== Manabi Juku ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Manabi Juku — a theme for an after-school tutoring school (cram school), laid out as split screens under a formal white top header with a suou rule: the school name and tagline on the left, the menu across the middle of the bar and a Book a free trial lesson button on the right (an overlay menu on phones). Suou crimson (#8E354A) is the main colour, textured with a fine white grid-paper pattern: the left half of the hero, the school-year half, the story band and every page head are crimson fields in white type. The hero is a product grid in a split screen: the title, lead, buttons and last spring's results on the crimson half, four course tiles (maths, English, science, exam preparation) on the paper half, and a cut-out stack of books (transparent WebP) sitting on the seam and breaking past the hero bottom edge; a cut-out desk lamp breaks over the story band and every page head. The courses run as ruled rows beside a sticky intro, and the school years as a grid beside a crimson heading half. Every picture is a realistic high-key photograph of a modern, international school setting. BIZ UDGothic for display, Barlow for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download manabi-juku.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/manabi-juku.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Manabi Juku.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Manabi Juku: timetable board" (this week): places left, class hours, the open day, reply time and closed days.
- "Manabi Juku: school details" (hours, Saturday hours, address, phone, email): the footer and Free trial lesson.
- "Manabi Juku: fee guide" (fees): Courses and Free trial lesson.

The school, its teachers, students, address, telephone number, results and fees are fictional.

== Copyright ==

Manabi Juku is distributed under the terms of the GNU GPL v2 or later.
Fonts: BIZ UDGothic (OFL-1.1), Bold, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Barlow (OFL-1.1), Regular and SemiBold, Latin subset. License texts: assets/fonts/OFL-BIZUDGothic.txt, assets/fonts/OFL-NotoSansTC.txt, assets/fonts/OFL-Barlow.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic high-key photographs (85mm f/2.8, large softbox fill, near-white background, very soft shadows, graded toward suou crimson), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/books-cutout.webp (home hero: a stack of plain books with a pencil, transparent cut-out that sits on the split-screen seam and breaks past the hero bottom edge)
- assets/images/lamp-cutout.webp (story band and page heads: a crimson desk lamp, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/classroom.webp (hero course tile: a small-group classroom)
- assets/images/tutor.webp (course rows, story band and About: a tutor pointing at a workbook)
- assets/images/study-desk.webp (hero course tile and course rows: a study desk)
- assets/images/lab.webp (hero course tile, course rows and story band: a science bench)
- assets/images/library.webp (hero course tile and course rows: a study room)
- assets/images/grade-primary.webp (school-year grid: counting blocks)
- assets/images/grade-junior.webp (school-year grid: a geometry set)
- assets/images/grade-senior.webp (school-year grid: a teenager's desk)
- assets/images/grade-exam.webp (school-year grid and page heads: an exam hall)
- assets/images/building.webp (course intro and page heads: the school entrance)
- assets/images/pattern.webp (grid-paper texture tile on the crimson fields, made with ImageMagick for this theme, CC0)
- assets/images/demo/grade-exam.webp (demo import copy of assets/images/grade-exam.webp)
- assets/images/demo/study-desk.webp (demo import copy of assets/images/study-desk.webp)
- assets/images/demo/classroom.webp (demo import copy of assets/images/classroom.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
