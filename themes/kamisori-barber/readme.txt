=== Kamisori Barber ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kamisori Barber — a barbershop theme read as one long column: under a formal top header (shop name, menu and the Book a chair button in one bar, a full-screen kyo-murasaki overlay on phones and tablets) every section keeps its text in a single centred reading column, and the pictures hang out into the margins as torn, taped paper-cut pieces. Kyo-murasaki (#9D5B8B), the old Kyoto purple, is the main colour: the hero, the story band and every page head are murasaki fields set in white. The hero breaks the frame: a paper-cut picture of the shop in a white window frame, with a cut-out barber chair (transparent WebP) breaking out of the frame and over the hero bottom edge; a cut-out shaving mug and brush breaks over the story band and every page head. Every picture is a layered paper-cut illustration in murasaki, lilac, sumi and muted gold. Chokokutai for display (with a Zen Maru Gothic kanji subset in Japanese), Epilogue for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kamisori-barber.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kamisori-barber.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kamisori Barber.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Kamisori Barber: shop board": chairs, opening hours, time, booking and closed days (the home page).
- "Kamisori Barber: shop details" (hours, visits, address, phone, email): the footer and Book a chair.
- "Kamisori Barber: prices": Services and Book a chair.

The shop, its people, address, telephone number and prices are fictional.

== Copyright ==

Kamisori Barber is distributed under the terms of the GNU GPL v2 or later.
Fonts: Chokokutai (OFL-1.1), Regular, subset to Latin and to the kana of the Japanese sample text; Zen Maru Gothic (OFL-1.1), Bold, subset to the kanji of the Japanese sample text that Chokokutai lacks; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never a Japanese font); and Epilogue (OFL-1.1), Regular, SemiBold and Bold, Latin, as WOFF2; licence texts in assets/fonts/OFL-*.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as layered paper-cut illustrations (kyo-murasaki purple, lilac, sumi and muted gold), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text). The barber chair and the shaving mug are transparent cut-outs.
- assets/images/chair-cutout.webp (home hero: a vintage barber chair, transparent cut-out that breaks out of the window frame and over the hero bottom edge)
- assets/images/brush-cutout.webp (story band and page heads: a shaving mug with a brush, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/hero-room.webp (home hero: the inside of the shop in the white window frame)
- assets/images/svc-cut.webp (home services and Services: scissors and comb)
- assets/images/svc-shave.webp (home services, steps and Services: the hot towel)
- assets/images/svc-razor.webp (home services and Services: the straight razor on its strop)
- assets/images/svc-wash.webp (home services, story collage and Services: the wash basin)
- assets/images/shopfront.webp (steps and page heads: the corner shop with its striped pole)
- assets/images/hands-comb.webp (story collage, steps and The shop: hands cutting hair)
- assets/images/tools.webp (The shop: the tools on a tray)
- assets/images/street.webp (story collage, Services page head and Letters: the lane at dusk)
- assets/images/towels.webp (home services intro, steps and Letters: towels on the shelves)
- assets/images/demo/svc-shave.webp (demo import copy of assets/images/svc-shave.webp)
- assets/images/demo/svc-razor.webp (demo import copy of assets/images/svc-razor.webp)
- assets/images/demo/hands-comb.webp (demo import copy of assets/images/hands-comb.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
