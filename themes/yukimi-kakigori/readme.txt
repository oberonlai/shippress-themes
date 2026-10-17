=== Yukimi Kakigori ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Yukimi Kakigori — a kakigori shaved-ice parlour theme built on sticky media: on wide screens the picture column holds still while the text column scrolls past it (the menu, the four bowl rows, the story band and the parlour page). A formal top header, centred: the parlour name and tagline in the middle of the first row, the menu centred on the second row and the Reserve a seat button at the right end; an overlay menu on phones and tablets. Rikyū-nezumi, the quiet grey sage-green of traditional Japanese dyeing (#8F9B84), is the main colour: the hero, the story band, every page head and the overlay menu are solid sage fields set in deep green ink, on a cream ground with pale matcha-mist panels and deep matcha links; the red of the strawberry bowl is the only bright note. The hero is a product grid: the title, lead, buttons and today's ice on the left, four paper-cut bowls as a taped, slightly tilted 2 x 2 collage on the right, and a cut-out bowl of strawberry ice (transparent WebP) standing in front of the grid and breaking over the hero bottom edge; a cut-out plover flag breaks over the story band and every page head. Every picture is a layered paper-cut illustration in a torn, taped paper collage. Darumadrop One for display, Rubik for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download yukimi-kakigori.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/yukimi-kakigori.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Yukimi Kakigori.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Yukimi Kakigori: workshop board" (the ice board): the ice in the shaver, hours, seats, wait and closed days (home page).
- "Yukimi Kakigori: workshop details" (the parlour details: hours, reservations, address, phone, email): the footer and Reserve a seat.
- "Yukimi Kakigori: price guide" (prices): The menu and Reserve a seat.

The parlour, its people, the bowls, address, telephone number and prices are fictional.

== Copyright ==

Yukimi Kakigori is distributed under the terms of the GNU GPL v2 or later.
Fonts: Darumadrop One (OFL-1.1), Regular, subset to Latin and to the kana of the Japanese sample text; Zen Maru Gothic (OFL-1.1), Bold, subset to the kanji of the Japanese sample text (Japanese headings only); Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Rubik (OFL-1.1), Latin variable, as WOFF2; see assets/fonts/OFL-DarumadropOne.txt, OFL-ZenMaruGothic.txt, OFL-NotoSansTC.txt and OFL-Rubik.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as layered paper-cut illustrations (cut coloured paper with soft shadows, rikyū-nezumi sage #8F9B84 and cream with white, pale ice blue and small matcha green accents; eight pictures were regenerated in this palette for the v1.0.1 recolour), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands). The bowl and flag cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout).
- assets/images/bowl-cutout.webp (home hero: a tall bowl of strawberry shaved ice, transparent cut-out that stands in front of the product grid and breaks over the hero bottom edge)
- assets/images/flag-cutout.webp (story band and page heads: a plain summer flag with waves and a plover, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/bowl-ichigo.webp (hero grid, The menu and home menu: strawberry shaved ice)
- assets/images/bowl-matcha.webp (hero grid, The menu and home menu: matcha and red bean shaved ice)
- assets/images/bowl-momo.webp (hero grid, The menu, home menu and steps: peach shaved ice)
- assets/images/bowl-yuzu.webp (hero grid, The menu and home menu: yuzu shaved ice)
- assets/images/counter.webp (The parlour and Reserve a seat page heads: the counter with a plain noren)
- assets/images/machine.webp (story band, steps and The parlour: a hand-cranked ice shaver)
- assets/images/syrup.webp (steps and The parlour: homemade syrup bottles)
- assets/images/garden.webp (story band, The menu page head and Letters: the tea-bush garden with the beehives)
- assets/images/ice-block.webp (home menu sticky picture and Letters page head: natural ice from a mountain pond)
- assets/images/demo/syrup.webp (demo import copy of assets/images/syrup.webp)
- assets/images/demo/bowl-matcha.webp (demo import copy of assets/images/bowl-matcha.webp)
- assets/images/demo/garden.webp (demo import copy of assets/images/garden.webp)
