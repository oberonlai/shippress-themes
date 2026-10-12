=== Hari Tailor ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

An elegant, precise and traditional theme for a bespoke tailor's atelier making made-to-measure suits, jackets and overcoats: navy wool, chalk paper and muted brass only, Libre Bodoni over Geologica. A navy side rail holds the wordmark, the menu and a booking link beside a brass tape-measure tick scale (a navy top bar with the same scale on phones). The home page opens on the atelier photograph framed by the tape scale, then the five fittings (measure, cut, baste, first fitting, finish) as a numbered tailor's-chalk timeline on a navy wool band with dashed chalk line and chalk crosses, swatch cards from the cloth book with CSS-woven herringbone, chalk stripe, birdseye and flannel, the atelier story with a quote, an appointment call and the journal. The footer is the appointment hours table beside the atelier address on navy. With The Process (the full timeline with photographs), Cloth Book (eight swatch cards and a weight guide), Appointments, About, Contact, Newsletter and Journal. The atelier details and appointment hours are one synced pattern, edited once.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hari-tailor.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hari-tailor.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hari Tailor.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The atelier details (address, telephone, email, station) and the appointment hours table are one synced pattern, "Hari Tailor: atelier details and appointment hours" (Appearance > Editor > Patterns), created once by inc/shared-info.php. The footer, the Appointments page and the Contact page show the same pattern; edit it once and every place changes. On pages that already show it, the footer copy is hidden so it is not repeated.

The cloth book swatches are drawn in CSS (no images); the "House cloth" badge and every cloth name, weight and price are ordinary editable text. Appointments are booked by email or telephone; there is no booking backend. The atelier, the cutters, the town, the address, telephone numbers, cloths and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Hari Tailor WordPress Theme, Copyright 2026 ShipPress contributors.
Hari Tailor is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Libre Bodoni
Copyright 2012 The Libre Bodoni Project Authors (https://github.com/googlefonts/Libre-Bodoni/)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-LibreBodoni.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/librebodoni (no Reserved Font Name; roman instanced to 400-600 and italic 400, subset to Latin as WOFF2)

Geologica
Copyright 2020 The Geologisk Project Authors (https://github.com/monokromskriftforlag/geologisk)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Geologica.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/geologica (no Reserved Font Name; pinned to CRSV 0, SHRP 0, slnt 0, weights 300-500, subset to Latin as WOFF2)

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/demo/atelier-table.jpg
- assets/images/demo/baste-fitting.jpg
- assets/images/demo/chalk-marks.jpg
- assets/images/demo/cloth-swatches.jpg
- assets/images/demo/cut-cloth.jpg
- assets/images/demo/finish-suit.jpg
- assets/images/demo/hero-atelier.jpg
- assets/images/demo/measure-tape.jpg
- assets/images/demo/navy-wool.jpg
- assets/images/demo/window-light.jpg
- assets/images/atelier-table.jpg
- assets/images/baste-fitting.jpg
- assets/images/chalk-marks.jpg
- assets/images/cloth-swatches.jpg
- assets/images/cut-cloth.jpg
- assets/images/finish-suit.jpg
- assets/images/hero-atelier.jpg
- assets/images/measure-tape.jpg
- assets/images/navy-wool.jpg
- assets/images/window-light.jpg

The tape-measure tick scales, chalk crosses, dashed chalk lines and cloth weaves are simple shapes drawn in CSS.
