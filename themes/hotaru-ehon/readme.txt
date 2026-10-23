=== Hotaru Ehon ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hotaru Ehon — a picture-book illustrator theme set like a poster: under a formal top header (studio name, menu and the Commission a book button in one bar, a full-screen imayo overlay on phones and tablets) the home page opens with the title in giant type across the whole width, and a picture-book map of the riverside village overlapping it with three glowing firefly pins, the places where books began. Imayo (#D0576B), the old Japanese "fashionable" pink, is the main colour: the hero, the story band and every page head are imayo fields set in dark ink. The hero breaks the frame: a cut-out firefly jar (transparent WebP) breaks out of the map frame over its top edge and into the giant title; a cut-out fox with a picture book breaks over the story band and every page head. Every picture is a flat 2D illustration in imayo pink, indigo night, cream and firefly yellow. Cherry Bomb One for display (with a Zen Maru Gothic kanji subset in Japanese), Quicksand for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hotaru-ehon.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hotaru-ehon.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hotaru Ehon.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Hotaru Ehon: studio board": what is on the drawing table, commissions, time, letters and time away (the home page).
- "Hotaru Ehon: studio details" (hours, visits, address, phone, email): the footer and Commissions.
- "Hotaru Ehon: fees": Work and Commissions.

The studio, its people, address, telephone number, books and fees are fictional.

== Copyright ==

Hotaru Ehon is distributed under the terms of the GNU GPL v2 or later.
Fonts: Cherry Bomb One (OFL-1.1), Regular, subset to Latin and to the kana of the Japanese sample text; Zen Maru Gothic (OFL-1.1), Bold, subset to the kanji of the Japanese sample text that Cherry Bomb One lacks; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never a Japanese font); and Quicksand (OFL-1.1, Reserved Font Name "Quicksand"), the unmodified variable TTF; licence texts in assets/fonts/OFL-*.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as flat 2D illustrations (imayo pink, indigo night, cream and firefly yellow), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text). The firefly jar and the fox are transparent cut-outs.
- assets/images/jar-cutout.webp (home hero: a glass jar of fireflies, transparent cut-out that breaks out of the map frame and into the giant title)
- assets/images/fox-cutout.webp (story band and page heads: a small fox with a picture book, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/hero-map.webp (home hero: the picture-book map of the riverside village under the firefly pins)
- assets/images/svc-books.webp (home work and Work: an open picture book)
- assets/images/svc-cover.webp (home work, steps and Work: three book covers)
- assets/images/svc-workshop.webp (home work and Work: the workshop table)
- assets/images/svc-editorial.webp (home work, story collage and Work: a paper boat under the moon)
- assets/images/studio.webp (steps and page heads: the studio with the round window)
- assets/images/hands-drawing.webp (story collage, steps and The studio: a hand painting a firefly)
- assets/images/tools.webp (The studio: the drawing tools)
- assets/images/river.webp (story collage, Work page head and Letters: the river at night)
- assets/images/shelf.webp (home work intro, steps and Letters: the book shelf)
- assets/images/demo/river.webp (demo import copy of assets/images/river.webp)
- assets/images/demo/studio.webp (demo import copy of assets/images/studio.webp)
- assets/images/demo/svc-books.webp (demo import copy of assets/images/svc-books.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
