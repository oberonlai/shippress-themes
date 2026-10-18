=== Mamori Hoken ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Mamori Hoken — an independent insurance agency theme laid out like an app: under a formal top header, a night-ink sidebar holds the synced office board (advisers in today, hours, claims line, reply time, closed days and a Book a consultation button) and stays beside the page while it scrolls. The header splits the menu around the centred agency name, with the Book a consultation button at its end. Hanada (#2792C3), the clear indigo-washed blue of traditional Japanese dyeing, is the main colour: the hero, the story band and every page head are hanada fields set in night ink, textured with a faint linen texture. The hero is text left, art right: the title, lead, buttons and this month's questions on the field, a framed photograph of a young family on a sofa on the right, and a cut-out document folder with pen and glasses (transparent WebP) that breaks out over the frame and the hero bottom edge; a cut-out house model breaks over the story band and every page head. Every picture is a realistic, neutral photograph. LINE Seed JP for display, Public Sans for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download mamori-hoken.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/mamori-hoken.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Mamori Hoken.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Mamori Hoken: workshop board" (the office board): advisers in today, hours, claims line, reply time and closed days (the sidebar on every page).
- "Mamori Hoken: workshop details" (the agency details: hours, home visits, address, phone, email): the footer and Book a consultation.
- "Mamori Hoken: price guide" (fees): Cover and Book a consultation.

The agency, its people, address, telephone number and fees are fictional.

== Copyright ==

Mamori Hoken is distributed under the terms of the GNU GPL v2 or later.
Fonts: LINE Seed JP (OFL-1.1), Bold, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Public Sans (OFL-1.1), Regular, SemiBold and Bold, Latin subset. License texts: assets/fonts/OFL-LINESeedJP.txt, assets/fonts/OFL-NotoSansTC.txt, assets/fonts/OFL-PublicSans.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic photographs (neutral international modern business style, no Japanese elements), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/folder-cutout.webp (home hero: a closed dark-blue document folder with a silver pen and reading glasses, transparent cut-out that breaks out over the framed hero photo and the hero bottom edge)
- assets/images/house-cutout.webp (story band and page heads: a small light-wood house model, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/hero-life.webp (home hero: a young family on a sofa in a bright living room, framed on the right)
- assets/images/pattern.webp (texture: a faint linen texture, lightened, behind every hanada field and the sidebar)
- assets/images/cover-home.webp (home cover mosaic and Cover: home and fire)
- assets/images/cover-car.webp (home cover mosaic and Cover: car and bicycle)
- assets/images/cover-health.webp (home cover mosaic, Cover and steps: health and life)
- assets/images/cover-business.webp (home cover mosaic and Cover: small business)
- assets/images/office.webp (The agency and Book a consultation page heads: the bright agency office)
- assets/images/hands-papers.webp (story band, steps and The agency: adviser's and client's hands over a table with a folder)
- assets/images/town.webp (story band, Cover page head and Letters: a quiet tree-lined neighbourhood)
- assets/images/desk.webp (home cover mosaic and Letters page head: a desk by the window)
- assets/images/demo/town.webp (demo import copy of assets/images/town.webp)
- assets/images/demo/desk.webp (demo import copy of assets/images/desk.webp)
- assets/images/demo/cover-business.webp (demo import copy of assets/images/cover-business.webp)
