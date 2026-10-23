=== Niko Kids Clinic ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Niko Kids Clinic — a theme for a paediatric clinic (illness visits, vaccinations, check-ups and an allergy clinic), laid out as an editorial magazine under a formal white top header: the clinic name and tagline centred on top, a Book a visit button at the right and the menu as a centred row underneath (an aqua numbered overlay on phones). Byakugun pale aqua (#78C2C4) is the main colour, with a fine film-grain texture: the hero field, the story band, the visit-steps heading block and every page head are aqua fields in deep-teal type, with coral as a second risograph-style ink. The hero is a diagonal split: text on the aqua field, the waiting-room photograph cut on a diagonal with a coral misregistered edge, and a photo collage across the seam — a tilted print of toy blocks, a cut-out stethoscope and a cut-out teddy bear (transparent WebP) that breaks across the diagonal and past the hero bottom edge. Sections read like a magazine: running rules over every label, a numbered two-column care index with column rules, staggered visit steps and a lead story beside two side stories. Every picture is a realistic film-grain photograph (35mm look, 50mm f/2, natural side light). Noto Sans JP for display, Lato for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download niko-kids-clinic.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/niko-kids-clinic.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Niko Kids Clinic.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Niko Kids Clinic: clinic board": this week's flu-vaccine slots, opening hours, the parents' talk, same-day slots and closed days.
- "Niko Kids Clinic: clinic details" (hours, evening clinic, address, phone, email): the footer and Book a visit.
- "Niko Kids Clinic: fee guide": Our care and Book a visit.

The clinic, its doctors, address, telephone number and figures are fictional.

== Copyright ==

Niko Kids Clinic is distributed under the terms of the GNU GPL v2 or later.
Fonts: Noto Sans JP (OFL-1.1), Bold, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Lato (OFL-1.1, Reserved Font Name "Lato"), Regular and Bold, the unmodified TTF files from google/fonts. License texts: assets/fonts/OFL-NotoSansJP.txt, assets/fonts/OFL-NotoSansTC.txt, assets/fonts/OFL-Lato.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic film-grain photographs (35mm film look, 50mm f/2, natural side light, fine grain, graded toward byakugun pale aqua), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/bear-cutout.webp (home hero: a plush teddy bear with a bandage, transparent cut-out that breaks across the diagonal seam and past the hero bottom edge)
- assets/images/scope-cutout.webp (home hero, story band and page heads: a pale aqua stethoscope, transparent cut-out that breaks over the diagonal and the band edges)
- assets/images/waiting.webp (home hero and care: the bright waiting room)
- assets/images/corridor.webp (care and steps: the sunny corridor)
- assets/images/blocks.webp (home hero collage print, care and steps: wooden toy blocks)
- assets/images/exam.webp (care, story band: the examination room)
- assets/images/hands.webp (story band, About and page heads: a doctor checking a teddy bear)
- assets/images/vaccine.webp (steps and page heads: a vaccination tray)
- assets/images/building.webp (care intro, About and booking: the clinic building)
- assets/images/pattern.webp (a fine grain texture tile for the aqua fields, made with ImageMagick)
- assets/images/demo/hands.webp (sample post image)
- assets/images/demo/vaccine.webp (sample post image)
- assets/images/demo/blocks.webp (sample post image)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
