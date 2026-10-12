=== Kasumi Bar ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, night-dark theme for a small reservation-first cocktail bar: a green-black ground, deep bottle-green panels, parchment type and fine antique-gold hairlines; Noto Serif Display over Josefin Sans. The bar's name and every chapter title are set in vertical type, and the menu runs down the right edge in vertical type (a compact menu button on phones). The home page is one sparse column: the name beside a candle-lit counter, tonight's seasonal drinks, the bar, the visit details and the journal. The menu card has fine gold dotted leaders, and the footer is a single hairline-gold line with the name, address, hours and a reservations link. With a menu, reservations, about, journal, newsletter and contact. The seasonal drinks, the menu card and the visit details (address, hours, reservation policy) are synced patterns, edited once.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kasumi-bar.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kasumi-bar.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kasumi Bar.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages (Home, Menu, Reservations, About, Journal, Newsletter, Contact) with all their text and images, six journal posts with three categories and six tags, the main menu, and sets the static front page and posts page. Running it again (or through WP-CLI) never creates duplicates and never changes content you have edited.

The visit details (address, hours, reservation policy, email), the seasonal drinks and the menu card are three synced patterns, "Kasumi Bar: visit details", "Kasumi Bar: seasonal drinks and prices" and "Kasumi Bar: menu card and prices" (Appearance > Editor > Patterns). Edit one once and every page that shows it changes, including the one-line footer. Reservations use a plain email link; there is no booking backend. The bar, the bartenders, the alley, the town, the address, prices and dates are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Kasumi Bar WordPress Theme, Copyright 2026 ShipPress contributors.
Kasumi Bar is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Noto Serif Display
Copyright 2012 Google Inc. All Rights Reserved.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifDisplay.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/notoserifdisplay (variable font instanced to Light, Regular and Light Italic, subset to Latin as WOFF2; no Reserved Font Name)

Josefin Sans
Copyright 2010 The Josefin Sans Project Authors (https://github.com/ThomasJockin/JosefinSansFont-master), with Reserved Font Name "Josefin Sans".
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-JosefinSans.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/josefinsans (JosefinSans[wght].ttf, shipped unmodified)

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/demo/back-bar.jpg
- assets/images/demo/bartender-stir.jpg
- assets/images/demo/entrance-noren.jpg
- assets/images/demo/garnish-tray.jpg
- assets/images/demo/guest-silhouette.jpg
- assets/images/demo/hero-counter.jpg
- assets/images/demo/highball.jpg
- assets/images/demo/ice-carving.jpg
- assets/images/demo/seasonal-plum.jpg
- assets/images/demo/tea-cocktail.jpg
- assets/images/back-bar.jpg
- assets/images/bartender-stir.jpg
- assets/images/entrance-noren.jpg
- assets/images/garnish-tray.jpg
- assets/images/guest-silhouette.jpg
- assets/images/hero-counter.jpg
- assets/images/highball.jpg
- assets/images/ice-carving.jpg
- assets/images/seasonal-plum.jpg
- assets/images/tea-cocktail.jpg

The gold hairlines, leaders and dots are drawn in CSS.
