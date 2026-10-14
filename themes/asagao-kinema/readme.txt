=== Asagao Kinema ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A cinematic, editorial and elegant events theme for a one-screen independent cinema in a fictional town. Night-plum pages, dusk-plum bands, pale house-light text and one muted lilac for rules, numerals and dates; Piazzolla for headings over Libre Franklin. The hero and the stills are risograph duotone illustrations (raster WebP; two inks, grain, slight misregistration). Every page opens with a masthead (H5): the cinema's name large, a dateline row 'Programme 14 · Oct 13 to 19' and the menu below. The home page is a chaptered scroll of the week (L12): Monday to Sunday, each day a date numeral, a still, the film, a note and screening times, then tickets beside the foyer, membership and the journal. The footer is split in two tones (F10): tickets and prices on one side, the visit details and sitemap on the other. Pages: Programme, Visit & tickets, Membership, About, Journal, Newsletter and Contact. The programme, the ticket prices and the dateline are synced patterns, edited once.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download asagao-kinema.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/asagao-kinema.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Asagao Kinema.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and eight tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

This week's programme, the ticket prices and the masthead dateline are kept in one place each: three synced patterns, "Asagao Kinema: this week's programme", "Asagao Kinema: ticket prices" and "Asagao Kinema: programme dateline" (Appearance > Editor > Patterns), created once by inc/shared-info.php. Edit the programme every Monday and the home and Programme pages change together; the prices appear on the home, Visit & tickets and Membership pages and in the footer.

The cinema, the films, the people, the address, telephone numbers and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Asagao Kinema WordPress Theme, Copyright 2026 ShipPress contributors.
Asagao Kinema is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Piazzolla
Files: assets/fonts/Piazzolla[opsz,wght].ttf
Copyright 2018 The Piazzolla Project Authors (https://github.com/huertatipografica/piazzolla)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Piazzolla.txt, https://openfontlicense.org); no Reserved Font Name.
The unmodified upstream variable font from https://github.com/google/fonts/tree/main/ofl/piazzolla, bundled so the theme makes no third-party requests.

Libre Franklin
Files: assets/fonts/LibreFranklin[wght].ttf
Copyright 2020 The Libre Franklin Project Authors (https://github.com/googlefonts/Libre-Franklin)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-LibreFranklin.txt, https://openfontlicense.org); no Reserved Font Name.
The unmodified upstream variable font from https://github.com/google/fonts/tree/main/ofl/librefranklin, bundled so the theme makes no third-party requests.

= Images =

assets/images/hero.webp - risograph duotone illustration, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/hero.webp - risograph duotone illustration, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/projector.webp - risograph duotone illustration, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/projector.webp - risograph duotone illustration, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/foyer.webp - risograph duotone illustration, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/foyer.webp - risograph duotone illustration, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/reels.webp - risograph duotone illustration, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/reels.webp - risograph duotone illustration, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
