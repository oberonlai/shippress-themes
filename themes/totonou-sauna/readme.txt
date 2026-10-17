=== Totonou Sauna ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Totonou Sauna — a neighbourhood public sauna theme built as a card mosaic: the rooms on the home page share one grid of rectangular cards (an intro card, a tall stove-room card, the plunge and roof cards, a wide löyly card and a water photograph). A formal top header: the sauna name and tagline on the left, the Book a slot button and a Menu button on the right; the menu always opens as a full-screen ouni orange overlay with large numbered entries. Ouni orange (#EE7948) is the main colour: the hero, the story band, every page head and the overlay menu are solid orange fields set in dark sauna ink. The hero is a vertical banner: a tall hanging banner photograph of the steam room on a rod, beside the giant title, lead, buttons and today's sauna list; the cut-out wooden sauna bucket (transparent WebP) hangs over the banner edge and breaks below the hero, and a cut-out felt sauna hat breaks over the story band and every page head. Every picture is a documentary-style photograph (35mm wide angle, available light, fine grain) graded toward ouni orange. Mochiy Pop P One for display, Red Hat Text for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download totonou-sauna.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/totonou-sauna.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Totonou Sauna.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Totonou Sauna: workshop board" (the sauna board): the wood in the stove, hours, places, wait and closed days (home page).
- "Totonou Sauna: workshop details" (the sauna details: hours, booking, address, phone, email): the footer and Book a slot.
- "Totonou Sauna: price guide" (prices): The rooms and Book a slot.

The sauna, its people, address, telephone number and prices are fictional.

== Copyright ==

Totonou Sauna is distributed under the terms of the GNU GPL v2 or later.
Fonts: Mochiy Pop P One (OFL-1.1), Regular, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Red Hat Text (OFL-1.1), Latin variable, as WOFF2; licence texts in assets/fonts/OFL-*.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as documentary-style photorealistic photographs (35mm wide angle, available natural light, handheld feel, fine grain, colour graded toward ouni orange #EE7948), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text). The bucket and hat are transparent cut-outs.
- assets/images/bucket-cutout.webp (home hero: a wooden hinoki sauna bucket with copper hoops and a ladle, transparent cut-out that hangs over the banner edge and breaks below the hero)
- assets/images/hat-cutout.webp (story band and page heads: a plain grey felted wool sauna hat, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/hero-steam.webp (home hero: the hanging banner photograph of the wooden steam room)
- assets/images/room-hot.webp (home rooms mosaic and The rooms: the tiered cedar benches)
- assets/images/room-plunge.webp (home rooms mosaic and The rooms: the tiled well-water cold plunge)
- assets/images/room-air.webp (home rooms mosaic, The rooms and steps: the rooftop resting deck)
- assets/images/room-loyly.webp (home rooms mosaic and The rooms: water ladled onto hot stones)
- assets/images/front-desk.webp (About us and Book a slot page heads: the entrance with a plain noren)
- assets/images/stove.webp (story band, steps and About us: the cast-iron wood stove)
- assets/images/towels.webp (steps and About us: folded orange and white towels)
- assets/images/garden.webp (story band, The rooms page head and Letters: the bathhouse courtyard)
- assets/images/water.webp (home rooms mosaic and Letters page head: cold barley tea by the window)
- assets/images/demo/stove.webp (demo import copy of assets/images/stove.webp)
- assets/images/demo/room-plunge.webp (demo import copy of assets/images/room-plunge.webp)
- assets/images/demo/room-loyly.webp (demo import copy of assets/images/room-loyly.webp)
