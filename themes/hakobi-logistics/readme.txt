=== Hakobi Logistics ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hakobi Logistics — a theme for a logistics company (warehousing, line haul, last mile and customs), laid out as sticky media under a formal top header: the company name and tagline on the left, a Get a quote button and a menu button on the right, the menu always opening as a full bengara overlay. Bengara red (#9A3A33) is the main colour: the network section, the quote band, every page head and the overlay menu are bengara fields in white type. The front page is a locations network: one unframed full-bleed film-grain photograph of a loading dock at dusk with a two-line headline, a navy info bar with a tracking field, hub count, next-day coverage and a quote button; then a sticky line map of fourteen hubs beside the scrolling hub list, a lead-time table, four services as one-line rows, a wide depot photograph with a caption, four regional desks and a narrow quote band where a transparent cut-out pallet of boxes breaks above the band edge. Photographs are realistic film-grain images (35mm film, 50mm f/2, natural side light, fine grain, slightly faded, graded toward bengara). Zen Kaku Gothic New for headings, Archivo Narrow for text, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hakobi-logistics.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hakobi-logistics.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hakobi Logistics.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Hakobi Logistics: dispatch board": today's pickup cut-off, control-room hours, night line haul, quote reply time and no-delivery days.
- "Hakobi Logistics: company details" (hours, pickup cut-off, address, phone, email): the footer and Get a quote.
- "Hakobi Logistics: sample rates": Services and Get a quote.

The company, its people, address, telephone number and figures are fictional.

== Copyright ==

Hakobi Logistics is distributed under the terms of the GNU GPL v2 or later.
Fonts: Zen Kaku Gothic New (OFL-1.1), Bold Latin subset plus Regular and Bold subsets of the Japanese sample text; Archivo Narrow (OFL-1.1), Regular and Bold, Latin subsets; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never a Japanese font). License texts: assets/fonts/OFL-ZenKakuGothicNew.txt, assets/fonts/OFL-ArchivoNarrow.txt, assets/fonts/OFL-NotoSansTC.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic film-grain photographs (35mm film, 50mm f/2, natural side light, fine grain, graded toward bengara), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/dock.webp (front page: the full-bleed loading dock photograph)
- assets/images/depot.webp (front page depot band and page heads: the central depot interior)
- assets/images/pallet-cutout.webp (quote band and page heads: a wrapped pallet of boxes, transparent cut-out that breaks above the band edge)
- assets/images/sorting.webp (services and about: parcels on a sorting conveyor)
- assets/images/van.webp (about and contact: a delivery van on a city street)
- assets/images/yard.webp (news: trailers in a freight yard)
- assets/images/demo/yard.webp (sample post image)
- assets/images/demo/sorting.webp (sample post image)
- assets/images/demo/van.webp (sample post image)
