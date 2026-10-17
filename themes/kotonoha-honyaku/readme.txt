=== Kotonoha Honyaku ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kotonoha Honyaku — a translation studio theme read like an unrolled vertical scroll: under a formal top header the page runs top to bottom, the services hang from one long ruri thread as numbered rows, and in Chinese and Japanese every section head becomes a vertical title slip down the right edge (Latin text always stays horizontal). The header splits the menu around the centred studio name, with the Ask for a quote button at its end; phones and tablets get a full-screen ruri overlay. Ruri (#1E50A2), the deep lapis blue of traditional Japanese dyeing, is the main colour: the hero, the story band and every page head are ruri fields set in paper white, with pale shell-pink labels. The hero is a scene map: the title, lead and buttons beside a risograph map of the harbour town in a paper frame, with this week's three jobs pinned on it as numbered labels, and a cut-out fountain pen (transparent WebP) breaking over the frame and the hero bottom edge; a cut-out desk globe breaks over the story band and every page head. Every picture is a two-colour risograph illustration in ruri and soft vermilion. BIZ UDPMincho for display, Bricolage Grotesque for reading, Noto Serif TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kotonoha-honyaku.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kotonoha-honyaku.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kotonoha Honyaku.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Kotonoha Honyaku: studio desk": this week's languages, hours, pace, reply time and closed days (the home page).
- "Kotonoha Honyaku: studio details" (hours, visits, address, phone, email): the footer and Ask for a quote.
- "Kotonoha Honyaku: rates": Services and Ask for a quote.

The studio, its people, address, telephone number and prices are fictional.

== Copyright ==

Kotonoha Honyaku is distributed under the terms of the GNU GPL v2 or later.
Fonts: BIZ UDPMincho (OFL-1.1), Regular, subset to Latin and to the characters of the Japanese sample text; Noto Serif TC (OFL-1.1), Regular, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Bricolage Grotesque (OFL-1.1), Regular, SemiBold and Bold, Latin, as WOFF2; licence texts in assets/fonts/OFL-*.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as two-colour risograph illustrations (ruri lapis blue and soft vermilion with ink grain and halftone), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text). The fountain pen and the desk globe are transparent cut-outs.
- assets/images/pen-cutout.webp (home hero: a fountain pen across a folded blank letter, transparent cut-out that breaks over the map frame and the hero bottom edge)
- assets/images/globe-cutout.webp (story band and page heads: a small antique desk globe, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/hero-map.webp (home hero: the scene map of the harbour town with canals, bridges and a lighthouse)
- assets/images/svc-legal.webp (home services and Services: contracts and law)
- assets/images/svc-literary.webp (home services and Services: books and publishing)
- assets/images/svc-interpret.webp (home services, Services and steps: interpreting)
- assets/images/svc-web.webp (home services and Services: websites and software)
- assets/images/office.webp (The studio and Ask for a quote page heads: the brick office on the canal)
- assets/images/hands-writing.webp (story band, steps and The studio: a hand with a pencil over manuscript paper)
- assets/images/glossary.webp (steps and The studio: a card index of glossary cards)
- assets/images/harbour.webp (story band, Services page head and Letters: the harbour at dawn)
- assets/images/shelf.webp (home services and Letters page head: the dictionary shelf)
- assets/images/demo/harbour.webp (demo import copy of assets/images/harbour.webp)
- assets/images/demo/shelf.webp (demo import copy of assets/images/shelf.webp)
- assets/images/demo/svc-web.webp (demo import copy of assets/images/svc-web.webp)
