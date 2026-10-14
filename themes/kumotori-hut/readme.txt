=== Kumotori Hut ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

An organic, serene and technical hospitality theme for a mountain hut at a 2,017 m saddle. Alpine moss pages, lichen panels, pine ink text and one muted pine accent; Faustina for display over Readex Pro. The hero and decorations are 2.5D isometric raster illustrations (the saddle and its trails, the hut, a cutaway bunk room, the ridge). A slim bar docked at the bottom of the screen (H7) holds the wordmark, the menu and a Reception open / Closed chip worked out on the server from the site's timezone, like a trail signpost. The home page is map first (L10): the isometric trail map beside the title with a numbered legend for the hut, the three routes and the water points, then this season's dates, reception hours and weather note, the synced rates card, the routes and the journal. The footer (F12) is the hut's summit stamp, the address card and a vertical altitude line from trailhead to saddle. Routes, Stay & booking, Season, Journal, Newsletter and Contact. Season dates, reception hours, weather note, address and phone are edited once in Appearance > Hut details; the rates and beds card is one synced pattern. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kumotori-hut.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kumotori-hut.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kumotori Hut.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, five journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each:
- Appearance > Hut details (inc/hut-info.php): reception hours for each weekday, the closed season, the weather note, address, trailhead, telephone, email and an optional map link. The "Hut details" block (kumotori-hut/hut-info) shows them in the bottom bar (Reception open / Closed chip), on the home page, in the footer address card and on the Stay, Season and Contact pages. "Now" is worked out on the server in the site's timezone (Settings > General), never from the visitor's clock.
- The synced pattern "Kumotori Hut: rates and beds" (Appearance > Editor > Patterns), created once by inc/shared-info.php: nightly rates, beds and extras. Shown on the home page and the Stay page.

The Contact form needs no backend: assets/js/visit.js opens the visitor's email app with the message written out, addressed to the email in Hut details. The hut, keepers, ridge, trailheads, address, telephone numbers and rates are fictional.

== Copyright ==

Kumotori Hut is distributed under the terms of the GNU GPL v2 or later.
Fonts: Faustina (OFL-1.1) and Readex Pro (OFL-1.1, Reserved Font Name "RevReading Lexend", shipped unmodified); see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen, 2.5D isometric illustration style, released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the hut and its places are fictional). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero.webp (home: the saddle as an isometric trail map; journal)
- assets/images/hut.webp (Season, The hut; journal)
- assets/images/bunkroom.webp (Stay & booking; journal)
- assets/images/ridge.webp (home, Routes; journal)
- assets/images/demo/hero.webp (demo import copy of assets/images/hero.webp)
- assets/images/demo/hut.webp (demo import copy of assets/images/hut.webp)
- assets/images/demo/bunkroom.webp (demo import copy of assets/images/bunkroom.webp)
- assets/images/demo/ridge.webp (demo import copy of assets/images/ridge.webp)

== Changelog ==

= 1.0.0 =
* First release.
