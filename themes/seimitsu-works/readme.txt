=== Seimitsu Works ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Seimitsu Works — a theme for a precision metal parts manufacturer (CNC milling, turning, grinding and inspection), laid out as an asymmetric masonry under a formal white top header (company name, tagline, a Request a quote button and a menu button); the menu opens as a full-screen ai-nezumi blue-grey overlay with large numbered entries at every width. Ai-nezumi blue grey (#6C848D) is the main colour, textured with a fine white grid: the hero text field, the story band, the drawing-to-delivery heading block and every page head are blue-grey fields in steel-ink type. The hero puts the text on the left and a white-framed high-key photograph of the machining hall on the right, with a cut-out machined flange (transparent WebP) breaking over the frame corner, the field seam and the hero bottom edge; a cut-out turned shaft breaks over the story band and every page head. The four capabilities run as a two-column masonry of cards with photographs of different heights beside a sticky intro, and the four production steps as a staggered grid. Every picture is a realistic high-key photograph (85mm f/2.8, softbox fill, near-white background). M PLUS 1 for display, Saira for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download seimitsu-works.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/seimitsu-works.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Seimitsu Works.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Seimitsu Works: shop-floor board": free capacity, office hours, this week's open day, reply time and closed days.
- "Seimitsu Works: company details" (office hours, factory tours, address, phone, email): the footer and Request a quote.
- "Seimitsu Works: price guide" (typical lead times): Capabilities and Request a quote.

The company, its people, address, telephone number and figures are fictional.

== Copyright ==

Seimitsu Works is distributed under the terms of the GNU GPL v2 or later.
Fonts: M PLUS 1 (OFL-1.1), Bold, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Saira (OFL-1.1), Regular and SemiBold, Latin subset. License texts: assets/fonts/OFL-MPLUS1.txt, assets/fonts/OFL-NotoSansTC.txt, assets/fonts/OFL-Saira.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic high-key photographs (85mm f/2.8, large softbox fill, near-white background, very soft shadows, graded toward ai-nezumi blue grey), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/flange-cutout.webp (home hero: a machined aluminium flange, transparent cut-out that breaks over the photo frame corner, the field seam and the hero bottom edge)
- assets/images/shaft-cutout.webp (story band and page heads: a turned stainless shaft, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/hall.webp (home hero, capabilities and steps: the bright machining hall)
- assets/images/spindle.webp (capabilities and steps: a CNC spindle cutting aluminium)
- assets/images/tray.webp (capabilities and steps: a tray of turned parts)
- assets/images/inspect.webp (capabilities, story band and news: a CMM probe on a part)
- assets/images/hands.webp (story band, About and page heads: gloved hands with a micrometer)
- assets/images/pack.webp (steps and page heads: wrapped parts in a box)
- assets/images/building.webp (capabilities intro, About and Quote: the factory building)
- assets/images/pattern.webp (a 96 px fine white grid tile drawn with ImageMagick for this theme, laid over every ai-nezumi field; GPL-2.0-or-later / CC0)
- assets/images/demo/inspect.webp (demo import copy of assets/images/inspect.webp)
- assets/images/demo/spindle.webp (demo import copy of assets/images/spindle.webp)
- assets/images/demo/hands.webp (demo import copy of assets/images/hands.webp)
