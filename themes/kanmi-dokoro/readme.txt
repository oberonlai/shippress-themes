=== Kanmi Dokoro ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kanmi Dokoro — a wagashi tea house theme with a formal top bar (tea house name, a one-row menu and a Reserve a window seat button). Kikyo bellflower purple (#5654A2) is the main colour: the hero half, every page head, the menu panel and the calendar band are kikyo fields with a bellflower watercolour multiplied in, set in white. The site is built as split screens: the hero sets the kikyo field beside a paper wall where the garden is framed as an open window, and a cut-out bellflower sweet breaks out of the window frame across the seam; a cut-out matcha bowl breaks over the calendar band and the sweet sits across the seam of every page head. Every picture is a soft watercolour illustration. Hina Mincho for display, Outfit for reading, Noto Serif TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kanmi-dokoro.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kanmi-dokoro.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kanmi Dokoro.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Kanmi Dokoro: tea house board": the sweet of the month, window seats, the next sweet, seats and the closing day (home page).
- "Kanmi Dokoro: tea house details" (hours, closing day, address, phone, email): the footer and Reserve.
- "Kanmi Dokoro: menu prices": Menu and Reserve.

The tea house, its confectioner, address, telephone number and prices are fictional.

== Copyright ==

Kanmi Dokoro is distributed under the terms of the GNU GPL v2 or later.
Fonts: Hina Mincho (OFL-1.1), Regular, subset to Latin and to the characters of the Japanese sample text; Noto Serif TC (OFL-1.1), Regular, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Outfit (OFL-1.1), Latin variable, as WOFF2; see assets/fonts/OFL-HinaMincho.txt, OFL-NotoSerifTC.txt and OFL-Outfit.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as soft watercolour illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the tea house is fictional). The sweet and matcha bowl cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout).
- assets/images/hero.webp (home hero: a tea garden with bellflowers, a stone lantern and maple branches seen through an open paper window, framed as the window on the right half of the split screen)
- assets/images/wagashi-cutout.webp (home hero and page heads: a bellflower-shaped nerikiri sweet on a lacquer plate, transparent cut-out that breaks out of the window frame across the split-screen seam and over the hero and page-head edges)
- assets/images/chawan-cutout.webp (home calendar band: a matcha bowl and bamboo whisk, transparent cut-out that breaks over the band top edge)
- assets/images/pattern.webp (home calendar band: the bellflower watercolour pattern)
- assets/images/pattern-soft.webp (texture multiplied into every kikyo and pale wisteria field (a lightened greyscale copy of pattern.webp))
- assets/images/sweet-kakigori.webp (home menu and Menu: shaved ice with purple sweet potato syrup)
- assets/images/sweet-seasonal.webp (home menu, Menu and the first-visit steps: four seasonal nerikiri on a wooden tray)
- assets/images/sweet-anmitsu.webp (home menu, Menu and the first-visit steps: anmitsu in a lacquer bowl)
- assets/images/garden-path.webp (home menu and Menu: a mossy stepping-stone path with bellflowers to the veranda)
- assets/images/confectioner.webp (The tea house: the confectioner shaping a sweet)
- assets/images/shop-front.webp (The tea house and the first-visit steps: the wooden front with a plain purple curtain)
- assets/images/tea-room.webp (first-visit steps and Newsletter: a quiet tatami room)
- assets/images/demo/tea-room.webp (demo import copy of assets/images/tea-room.webp)
- assets/images/demo/garden-path.webp (demo import copy of assets/images/garden-path.webp)
- assets/images/demo/sweet-seasonal.webp (demo import copy of assets/images/sweet-seasonal.webp)
