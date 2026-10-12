=== Yuge Sento ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A serene, airy hospitality theme for a family-run neighbourhood bathhouse (sento), told as one single-column long read through an evening at the bath. Pale tile, misty blue and blue ink with a slate blue used only for numerals, rules and marks; a deeper blue for links and buttons. A slim bar docked at the bottom of the screen holds the Zen Antique Soft wordmark, the menu and today's hours with an Open now / Closed · opens 15:00 / Closed today chip worked out on the server from the site's timezone; on phones it is the wordmark, the chip and a Menu button that opens a full-screen menu read from the bottom up. The home page is a centred reading column: the opening with this evening's hours, five chapters (the curtain, the tiles, the mural, the water, cold milk after) each a short essay and one photograph, a word from the keeper, tonight's prices and the journal, divided by a small three-tile mark. The footer is a tiled waterline over a quiet street plan with the bathhouse marked by its steaming chimney, beside the address card. A faint bath-tile grid texture runs through the bar, the price card and the menu. With An evening, Bath guide (five customs, what to bring), Prices (passes, bring your own), Journal, Newsletter and Visit (a message form that composes an email, no backend). Hours, closed day, address, phone and email are edited once in Appearance > Bath details; the price list is one synced pattern. Zen Antique Soft over Be Vietnam Pro. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download yuge-sento.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/yuge-sento.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Yuge Sento.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each:
- Appearance > Bath details (inc/bath-info.php): opening hours for each weekday, the closed day, a note, address, how to get there, telephone, email and an optional map link. The "Bath details" block (yuge-sento/bath-info) shows them in the bottom bar (today's hours and the Open now / Closed · opens 15:00 / Closed today chip), in the home page's opening line, in the footer address card and on the Prices and Visit pages. "Now" is worked out on the server in the site's timezone (Settings > General), never from the visitor's clock.
- The synced pattern "Yuge Sento: prices" (Appearance > Editor > Patterns), created once by inc/shared-info.php: admission, extras and the Evening set (its badge is ordinary editable text). Shown on the home page, the Prices page and the Bath guide (compact).

The Visit form needs no backend: assets/js/visit.js opens the visitor's email app with the message written out, addressed to the email in Bath details; without JavaScript the form stays hidden and the address card does the job. The bathhouse, family, painter, district, city, address, telephone numbers and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Yuge Sento WordPress Theme, Copyright 2026 ShipPress contributors.
Yuge Sento is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Zen Antique Soft
Copyright 2021 The Zen Antique Project Authors (https://github.com/googlefonts/zen-antique)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-ZenAntiqueSoft.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/zenantiquesoft (no Reserved Font Name; Regular, subset to Latin as WOFF2)

Be Vietnam Pro
Copyright 2021 The Be Vietnam Pro Project Authors (https://github.com/bettergui/BeVietnamPro)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-BeVietnamPro.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/bevietnampro (no Reserved Font Name; Regular, Medium and SemiBold, subset to Latin as WOFF2)

Images

All photographs in assets/images/ (and their copies in assets/images/demo/) were AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/hero-bath.jpg
- assets/images/noren-entrance.jpg
- assets/images/tiles-detail.jpg
- assets/images/buckets-stools.jpg
- assets/images/mural-wall.jpg
- assets/images/tub-steam.jpg
- assets/images/cold-milk.jpg
- assets/images/keeper.jpg
- assets/images/changing-room.jpg
- assets/images/street-dusk.jpg
- assets/images/chimney.jpg
- assets/images/garden-rest.jpg
- assets/images/towel-soap.jpg
- assets/images/hands-water.jpg
- assets/images/demo/hero-bath.jpg
- assets/images/demo/noren-entrance.jpg
- assets/images/demo/tiles-detail.jpg
- assets/images/demo/buckets-stools.jpg
- assets/images/demo/mural-wall.jpg
- assets/images/demo/tub-steam.jpg
- assets/images/demo/cold-milk.jpg
- assets/images/demo/keeper.jpg
- assets/images/demo/changing-room.jpg
- assets/images/demo/street-dusk.jpg
- assets/images/demo/chimney.jpg
- assets/images/demo/garden-rest.jpg
- assets/images/demo/towel-soap.jpg
- assets/images/demo/hands-water.jpg

The street plan in the footer is inline SVG made for this theme (GPL-2.0-or-later).
