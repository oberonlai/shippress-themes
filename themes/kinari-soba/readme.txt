=== Kinari Soba ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, serene food-and-drink theme for a small hand-cut soba house. Buckwheat grey, pale grey-green and ink, with one muted husk-green accent used only for large type and small marks. The name and the menu run in vertical type down a pale grey-green rail on the right edge (a compact bar with a menu button on phones). The home page is a bento of square tiles in hairline seiro-tray frames: a soft watercolour of a tray of soba, the name and a short line, today's note (what is sold out for today), the hours with today's row marked from the site's timezone, a watercolour buckwheat sprig and the stone mill; then the menu as four square trays (cold, warm, the season, sake and small plates) with tabular prices, a wide watercolour of the buckwheat field with the morning's three steps, and the journal as square cards. The footer is a watercolour street map beside the address card with the noren line. With Menu, The mill, Journal, Newsletter and Visit. The hours, today's note and the menu are synced patterns, edited once. Hero and decoration are vector watercolours; the dish photographs are raster. Kaisei HarunoUmi over Murecho. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kinari-soba.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kinari-soba.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kinari Soba.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, five journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns), created once by inc/shared-info.php:
- "Kinari Soba: hours and address" (the noren line, the week from Monday to Sunday, address, telephone, email). Shown in the footer, in the home page bento, on Menu, The mill and Visit. Today's row is marked from the site's timezone (Settings > General), on the server, never from the visitor's clock.
- "Kinari Soba: today's note (sold out for today)" (a short note and what is sold out today). Shown in the home page bento, on Menu and in the footer (not repeated in the footer of the home page). Edit it once each morning.
- "Kinari Soba: the menu (four seiro trays)" (cold, warm, the season, sake and small plates, with names, notes and prices). Shown on the home page and on Menu.

The soba house, the people, the town, the address, telephone numbers and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Kinari Soba WordPress Theme, Copyright 2026 ShipPress contributors.
Kinari Soba is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Kaisei HarunoUmi
Copyright 2020 The Kaisei Project Authors (https://github.com/Font-Kai/Kaisei)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-KaiseiHarunoUmi.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/kaiseiharunoumi (no Reserved Font Name; Regular and Medium, subset to Latin as WOFF2)

Murecho
Copyright 2021 The Murecho Project Authors (https://github.com/positype/Murecho-Project)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Murecho.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/murecho (no Reserved Font Name; variable weight, subset to Latin as WOFF2)

Images

Vector watercolour illustrations (SVG) and their raster copies for the Media Library, AI-generated for this theme with Grok Build, released under GPL-2.0-or-later / CC0:
- assets/images/buckwheat-sprig.svg
- assets/images/field-wash.svg
- assets/images/hero-seiro.svg
- assets/images/map-street.svg
- assets/images/millstone.svg

Photographs, AI-generated for this theme with Grok Build, released under GPL-2.0-or-later / CC0:
- assets/images/counter-room.jpg
- assets/images/demo/buckwheat-sprig.jpg
- assets/images/demo/dough-kneading.jpg
- assets/images/demo/field-wash.jpg
- assets/images/demo/hero-seiro.jpg
- assets/images/demo/kamo-soba.jpg
- assets/images/demo/map-street.jpg
- assets/images/demo/millstone.jpg
- assets/images/demo/noodle-cutting.jpg
- assets/images/demo/soba-yu.jpg
- assets/images/dough-kneading.jpg
- assets/images/kake-soba.jpg
- assets/images/kamo-soba.jpg
- assets/images/kinoko-soba.jpg
- assets/images/noodle-cutting.jpg
- assets/images/sake-cup.jpg
- assets/images/soba-master.jpg
- assets/images/soba-yu.jpg
- assets/images/tororo-soba.jpg
- assets/images/zaru-soba.jpg

screenshot.png is made from the theme itself (GPL-2.0-or-later).
