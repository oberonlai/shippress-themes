=== Sushi Ginza ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A crisp, precise and quietly elegant theme for an eight-seat omakase sushi counter: paper ground, deep navy type, pale hinoki panels and one muted salmon for hairlines and plate rings; DM Serif Display over Inter; a magazine masthead on every page; a home page set like a journal's contents page; the omakase in five movements with a plate legend; a two-tone split footer; with the chef, counter booking, journal, newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download sushi-ginza.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/sushi-ginza.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Sushi Ginza.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The seatings, address, telephone and email are kept in one place: the synced pattern "Sushi Ginza: seatings, address, telephone and email" (Appearance > Editor > Patterns), shown in the footer and on the home, Booking and Contact pages. The courses with their prices, the "Chef's choice" badge and the plate legend are the synced pattern "Sushi Ginza: courses, prices and plate legend", shown on the home, Omakase and Booking pages (inc/shop-info.php creates both the first time the theme is activated, and never twice).

The booking request is a button that opens an email with the subject "Booking request"; change the address in the Booking page. The newsletter form is plain HTML: connect its action to your own email service. The counter, the chef, the suppliers, the address, telephone number and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Sushi Ginza WordPress Theme, Copyright 2026 ShipPress contributors.
Sushi Ginza is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

DM Serif Display
Copyright 2014-2018 Adobe (http://www.adobe.com/), with Reserved Font Name 'Source'. Copyright 2019 Google LLC.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-DMSerifDisplay.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/dmserifdisplay

Inter
Copyright 2020 The Inter Project Authors (https://github.com/rsms/inter)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Inter.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/inter

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/demo/fish.jpg
- assets/images/demo/hands.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/interior.jpg
- assets/images/demo/nigiri.jpg
- assets/images/demo/rice.jpg
- assets/images/demo/sake.jpg
- assets/images/demo/tea.jpg
- assets/images/fish.jpg
- assets/images/hands.jpg
- assets/images/hero.jpg
- assets/images/interior.jpg
- assets/images/nigiri.jpg
- assets/images/rice.jpg
- assets/images/sake.jpg
- assets/images/tea.jpg

The plate legend's ringed plates are drawn in CSS.
