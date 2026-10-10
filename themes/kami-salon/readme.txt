=== Kami Salon ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

An edgy, fashion-led theme for hair salons: an ink-black ground with chalk text and one magenta accent, Syne capitals over Inter text, scissor cuts (photographs, cards and bands cropped on clean diagonals) as the signature, a floating pill header with a Book button, a home page built as a mosaic of cards, and a footer that ends in a giant wordmark sliced by a magenta cut line; with about, the stylists, the price menu, a booking request form, a journal, a newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kami-salon.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kami-salon.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kami Salon.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample journal posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and prices and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The salon's address, opening hours, phone number, email and social links are kept in one place: the synced pattern "Kami Salon: address, hours, phone, email and social links" (Appearance > Editor > Patterns). The footer of every page, the Booking page and the Contact page show that one pattern, so you edit it once. The price menu works the same way: the synced pattern "Kami Salon: price menu" is shown on the Menu page and the Booking page (inc/salon-info.php creates both the first time the theme is activated, and never twice). The social icons link to "#" until you add your own profile addresses in that pattern.

On small screens the header's navigation becomes a menu button that opens the core Navigation block's full-screen menu: focus stays inside it while it is open, Escape closes it and returns focus to the button, and a small script (assets/js/menu.js) keeps the button's aria-expanded state in step.

The sample salon, its stylists, clients, address, telephone number and prices are fictional. The booking, contact and newsletter forms are plain HTML: connect their action to your own booking, form or email service.

== Copyright ==

Kami Salon WordPress Theme, Copyright 2026 ShipPress contributors.
Kami Salon is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Syne
Files: assets/fonts/syne-variable-latin.woff2
Copyright 2017 The Syne Project Authors (https://gitlab.com/bonjour-monde/fonderie/syne-typeface)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Syne.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 400-800) of the official file in https://github.com/google/fonts/tree/main/ofl/syne, bundled so the theme makes no third-party requests.

Inter
Files: assets/fonts/inter-variable-latin.woff2
Copyright 2020 The Inter Project Authors (https://github.com/rsms/inter)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Inter.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 100-900, optical size 14-32) of the official file in https://github.com/google/fonts/tree/main/ofl/inter, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the people shown are AI-generated and do not depict real people, and every salon and person the theme names is fictional).
- assets/images/colour.jpg
- assets/images/cut-detail.jpg
- assets/images/hero.jpg
- assets/images/look-curl.jpg
- assets/images/look-line.jpg
- assets/images/salon.jpg
- assets/images/stylist-mika.jpg
- assets/images/stylist-ren.jpg
- assets/images/tools.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/colour.jpg
- assets/images/demo/cut-detail.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/look-curl.jpg
- assets/images/demo/look-line.jpg
- assets/images/demo/salon.jpg
- assets/images/demo/stylist-mika.jpg
- assets/images/demo/stylist-ren.jpg
- assets/images/demo/tools.jpg

The brand mark (a slanted magenta cut drawn as one inline SVG path in parts/header.html), the scissors icon of the "Cut line" separator (one SVG used as a CSS mask in style.css) and the diagonal cut shapes in style.css are original work written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and photographs, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
