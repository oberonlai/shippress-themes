=== Kissaten Counter ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A dark, warm theme for coffee shops and small cafes after the Japanese kissaten: an intimate twelve-seat counter, espresso rooms in soft window light, cream paper menu cards with dotted price leaders, hand-lettered notes and a soft serif.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kissaten-counter.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kissaten-counter.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kissaten Counter.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The newsletter and contact forms are plain HTML (Custom HTML blocks). Point their action at your mail or form provider, or replace them with your form plugin's block.

== Copyright ==

Kissaten Counter WordPress Theme, Copyright 2026 ShipPress contributors.
Kissaten Counter is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Fraunces
Files: assets/fonts/fraunces-variable-latin.woff2, assets/fonts/fraunces-italic-variable-latin.woff2
Copyright 2020 The Fraunces Project Authors (https://github.com/undercasetype/Fraunces)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Fraunces.txt, https://openfontlicense.org)
Variable font (opsz, wght, SOFT, WONK axes), Latin subset in WOFF2 as packaged by Fontsource (@fontsource-variable/fraunces), bundled so the theme makes no third-party requests.

DM Sans
Files: assets/fonts/dm-sans-variable-latin.woff2
Copyright 2014 The DM Sans Project Authors (https://github.com/googlefonts/dm-fonts)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-DMSans.txt, https://openfontlicense.org)
Variable font (opsz, wght axes), Latin subset in WOFF2 as packaged by Fontsource (@fontsource-variable/dm-sans), bundled so the theme makes no third-party requests.

Caveat
Files: assets/fonts/caveat-variable-latin.woff2
Copyright 2014 The Caveat Project Authors (https://github.com/googlefonts/caveat)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Caveat.txt, https://openfontlicense.org)
Variable font (wght axis), Latin subset in WOFF2 as packaged by Fontsource (@fontsource-variable/caveat), bundled so the theme makes no third-party requests.

= Images =

All illustrations are original vector artwork drawn in code for this theme by the ShipPress contributors (no photographs, stock images or third-party artwork), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/beans.svg
- assets/images/counter.svg
- assets/images/cup-top.svg
- assets/images/cups-shelf.svg
- assets/images/map.svg
- assets/images/pour-over.svg
- assets/images/purin.svg
- assets/images/seal.svg
- assets/images/siphon.svg
- assets/images/storefront.svg
- assets/images/toast.svg
- assets/images/window-light.svg

Raster copies of the same illustrations, imported into the Media Library by the demo import (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/beans.jpg
- assets/images/demo/counter.jpg
- assets/images/demo/cup-top.jpg
- assets/images/demo/cups-shelf.jpg
- assets/images/demo/map.jpg
- assets/images/demo/pour-over.jpg
- assets/images/demo/purin.jpg
- assets/images/demo/seal.png
- assets/images/demo/siphon.jpg
- assets/images/demo/storefront.jpg
- assets/images/demo/toast.jpg
- assets/images/demo/window-light.jpg

screenshot.png: a screenshot of this theme's home page rendered on WordPress with its own demo content, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
