=== Yose Rakugo ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Yose Rakugo — A rakugo theatre theme set as a typographic poster in kincha golden amber (#C47222), the main colour on the header, the tall vertical banner of the hero, the full-width bill band and every page head, against riso indigo ink (#121433) and programme paper; Shippori Antique B1 display over Inter Tight. The art is risograph raster illustration (two-colour kincha and indigo riso ink with grain and misregistration): a storyteller kneeling on his cushion and an open fan as transparent cut-outs that break out of the banner, the section edges and a card, plus the kōza stage, a laughing audience, the props and the street at dusk. A full top header with the hall name centred, the menu centred beneath it between ink rules, and a Book seats button. Vertical Japanese only on Japanese text; English always runs horizontally. The door prices and the theatre details are synced patterns edited in one place. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download yose-rakugo.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/yose-rakugo.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Yose Rakugo.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, four journal posts with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php:
- "Yose Rakugo: door prices": shown on the home page and the Programme page.
- "Yose Rakugo: theatre details" (show times, address, phone, email): shown in the footer and on the Contact page.

The theatre, the storytellers, address, telephone number and prices are fictional.

== Copyright ==

Yose Rakugo is distributed under the terms of the GNU GPL v2 or later.
Fonts: Shippori Antique B1 (OFL-1.1, subset to Latin, kana and the kanji used) and Inter Tight (OFL-1.1, Latin variable) as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen, risograph illustration style (two-colour kincha and indigo riso ink with grain and slight misregistration), released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the theatre is fictional). The two cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero-cutout.webp (home hero: the storyteller on his cushion as a transparent cut-out that breaks over the vertical banner and the section edge)
- assets/images/fan-cutout.webp (home bill band and The hall: an open fan as a transparent cut-out that breaks over the band edge and the kincha card)
- assets/images/stage.webp (home hall section)
- assets/images/audience.webp (home hall section)
- assets/images/props.webp (home door prices)
- assets/images/street.webp (The hall)
- assets/images/demo/stage.webp (demo import copy of assets/images/stage.webp)
- assets/images/demo/street.webp (demo import copy of assets/images/street.webp)
- assets/images/demo/props.webp (demo import copy of assets/images/props.webp)
- assets/images/demo/audience.webp (demo import copy of assets/images/audience.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
