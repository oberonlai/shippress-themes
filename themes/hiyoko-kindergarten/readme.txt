=== Hiyoko Kindergarten ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hiyoko Kindergarten — a kindergarten and nursery theme laid out as a card mosaic: under a formal top header (kindergarten name, tagline and a Book a visit button), the menu leaves the bar on wide screens and becomes a fixed bark-ink side rail down the left edge with numbered entries (in Japanese the entries run top to bottom). Dandelion yellow (#FFD900) is the main colour: the hero, the story band and every page head are yellow fields set in bark ink, with a faint paper grain. The hero is a cut-out object breaking its frame: the title, lead and buttons on the left, an ink-framed photograph of a bright classroom on the right, and a cut-out yellow backpack (transparent WebP) sitting over the frame's corner, half inside and half out, dropping past the hero bottom edge; cut-out wooden blocks break over the story band and every page head. The four classes sit in a rounded card mosaic. Every picture is a realistic 35mm film-grain photograph of a modern, international kindergarten. M PLUS Rounded 1c for display, Fredoka for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hiyoko-kindergarten.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hiyoko-kindergarten.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hiyoko Kindergarten.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Hiyoko Kindergarten: workshop board" (the kindergarten board): who is outside, hours, today's lunch, visit times and closed days.
- "Hiyoko Kindergarten: workshop details" (the kindergarten details: hours, visits, address, phone, email): the footer and Book a visit.
- "Hiyoko Kindergarten: price guide" (fees): Classes and Book a visit.

The kindergarten, its people, address, telephone number and fees are fictional.

== Copyright ==

Hiyoko Kindergarten is distributed under the terms of the GNU GPL v2 or later.
Fonts: M PLUS Rounded 1c (OFL-1.1), Bold, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Fredoka (OFL-1.1), Regular and SemiBold, Latin subset. License texts: assets/fonts/OFL-MPLUSRounded1c.txt, assets/fonts/OFL-NotoSansTC.txt, assets/fonts/OFL-Fredoka.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic 35mm film-grain photographs (50mm f/2, natural side light, fine grain, graded toward dandelion yellow), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/bag-cutout.webp (home hero: a yellow child's backpack, transparent cut-out that breaks out of the framed hero photo and the hero bottom edge)
- assets/images/blocks-cutout.webp (story band and page heads: a tower of wooden toy blocks, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/hero-room.webp (home hero: a bright kindergarten classroom, framed on the right)
- assets/images/pattern.webp (texture: a faint cream paper grain behind every dandelion field)
- assets/images/class-toddler.webp (home class mosaic and Classes: Sprouts)
- assets/images/class-play.webp (home class mosaic and Classes: Garden class)
- assets/images/class-art.webp (home class mosaic, Classes and steps: Studio class)
- assets/images/class-after.webp (home class mosaic and Classes: After-school club)
- assets/images/building.webp (About and Book a visit page heads: the kindergarten building)
- assets/images/hands-clay.webp (story band, steps and About: a child's hands shaping clay)
- assets/images/garden.webp (story band, Classes page head and Letters: the vegetable garden)
- assets/images/art-table.webp (home class mosaic and Letters page head: the lunch table)
- assets/images/demo/garden.webp (demo import copy of assets/images/garden.webp)
- assets/images/demo/art-table.webp (demo import copy of assets/images/art-table.webp)
- assets/images/demo/class-after.webp (demo import copy of assets/images/class-after.webp)

== Changelog ==

= 1.0.1 =
* Traditional Chinese (zh-TW): the side menu is now a horizontal numbered list instead of vertical columns. Japanese keeps its vertical menu; other languages are unchanged.

= 1.0.0 =
* First release.
