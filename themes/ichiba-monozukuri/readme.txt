=== Ichiba Monozukuri ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Ichiba Monozukuri — a monthly craft market theme laid out like a printed market magazine: a masthead top bar with the market name, a horizontal menu and a Visit button. Ai indigo (#165E83) is the main colour: the hero, every page head and the season band are indigo fields with white type. The hero is a stacked collage of two risograph prints (stalls under awnings, hands carving a spoon) with a cut-out still life of a teapot, basket and indigo cloth breaking out of the collage and over the hero edge; a cut-out bowl breaks over the market-day band. Every picture is a two-ink risograph illustration (indigo and vermilion, halftone grain, slight misregistration). Train One for display, Hanken Grotesk for reading. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download ichiba-monozukuri.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/ichiba-monozukuri.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Ichiba Monozukuri.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Ichiba Monozukuri: market board": the next market day, free stalls, the workshop and the rain plan (home page).
- "Ichiba Monozukuri: market details" (market days, hours, address, phone, email): the footer and Visit & exhibit.
- "Ichiba Monozukuri: stall fees": Makers and Visit & exhibit.

The market, its makers, shrine, address, telephone number and fees are fictional.

== Copyright ==

Ichiba Monozukuri is distributed under the terms of the GNU GPL v2 or later.
Fonts: Train One (OFL-1.1), subset to Latin and to the characters of the Chinese and Japanese sample text, and Hanken Grotesk (OFL-1.1), Latin variable, and Noto Sans TC (OFL-1.1), subset to the characters of the Traditional Chinese sample text, as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as two-ink risograph illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the market is fictional). The two cut-outs have a transparent background (scripts/grok-image.sh --cutout). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/market.webp (hero collage, Pottery cards, The market, notes: risograph print of maker stalls under fabric awnings)
- assets/images/hands.webp (hero collage, Woodwork cards, notes: risograph print of hands carving a wooden spoon)
- assets/images/hero-cutout.webp (home hero: a teapot, basket and indigo cloth as a transparent cut-out that breaks out of the collage and over the hero edge)
- assets/images/maker-cutout.webp (market-day band: a bowl and wooden spoon as a transparent cut-out over the band's top edge)
- assets/images/indigo.webp (Indigo cards, market-day band, The market: risograph print of indigo cloths drying on bamboo poles)
- assets/images/baskets.webp (Bamboo cards, season band, Newsletter, notes: risograph print of bamboo baskets and cups on a table)
- assets/images/demo/market.webp (demo import copy of assets/images/market.webp)
- assets/images/demo/hands.webp (demo import copy of assets/images/hands.webp)
- assets/images/demo/indigo.webp (demo import copy of assets/images/indigo.webp)
- assets/images/demo/baskets.webp (demo import copy of assets/images/baskets.webp)
