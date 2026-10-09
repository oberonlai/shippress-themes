=== Hanabi Matsuri ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A kinetic, poster-like theme for summer fireworks and music festivals and town event organisers: enormous condensed capitals, oversized date numerals, slowly turning sunbursts, slanted orange bands, scrolling ribbons and notched ticket cards, with a three-night timetable, the fireworks running order, the lineup, pass tiers with a seat plan and a pre-registration form, and a map, transport and FAQ page, in summer-night indigo, fireworks orange, marigold, lantern cream and one magenta spark.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hanabi-matsuri.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hanabi-matsuri.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hanabi Matsuri.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample news posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text, the dates and the prices and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The pre-registration, contact and newsletter forms are plain HTML and take no payment: connect their action to your ticketing, form or email service.

== Copyright ==

Hanabi Matsuri WordPress Theme, Copyright 2026 ShipPress contributors.
Hanabi Matsuri is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Big Shoulders Display
Files: assets/fonts/big-shoulders-display-variable-latin.woff2
Copyright 2019 The Big Shoulders Project Authors (https://github.com/xotypeco/big_shoulders)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-BigShouldersDisplay.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

Unbounded
Files: assets/fonts/unbounded-variable-latin.woff2
Copyright 2022 The Unbounded Project Authors (https://github.com/googlefonts/unbounded)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Unbounded.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

Onest
Files: assets/fonts/onest-variable-latin.woff2
Copyright 2021 The Onest Project Authors (https://github.com/googlefonts/onest)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Onest.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

= Images =

All illustrations are original vector artwork drawn in code for this theme by the ShipPress contributors (shapes, gradients, Gaussian-blur glows and an SVG turbulence filter for grain; no photographs, stock images or third-party artwork), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/access-map.svg
- assets/images/crowd-yukata.svg
- assets/images/finale-starmine.svg
- assets/images/hero-night.svg
- assets/images/lantern-floats.svg
- assets/images/portrait-aoi.svg
- assets/images/portrait-kenta.svg
- assets/images/portrait-mina.svg
- assets/images/portrait-tetsuo.svg
- assets/images/poster-1958.svg
- assets/images/river-stage.svg
- assets/images/shell-workshop.svg
- assets/images/sparkler-hands.svg
- assets/images/taiko-drummers.svg
- assets/images/tatami-seats.svg
- assets/images/volunteers-dawn.svg
- assets/images/yatai-stalls.svg

Raster copies of the same artwork, imported into the Media Library by the demo import (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/access-map.jpg
- assets/images/demo/crowd-yukata.jpg
- assets/images/demo/finale-starmine.jpg
- assets/images/demo/hero-night.jpg
- assets/images/demo/lantern-floats.jpg
- assets/images/demo/portrait-aoi.jpg
- assets/images/demo/portrait-kenta.jpg
- assets/images/demo/portrait-mina.jpg
- assets/images/demo/portrait-tetsuo.jpg
- assets/images/demo/poster-1958.jpg
- assets/images/demo/river-stage.jpg
- assets/images/demo/shell-workshop.jpg
- assets/images/demo/sparkler-hands.jpg
- assets/images/demo/taiko-drummers.jpg
- assets/images/demo/tatami-seats.jpg
- assets/images/demo/volunteers-dawn.jpg
- assets/images/demo/yatai-stalls.jpg

The sunburst rays, the brand mark, the ticket notches and perforations, the diagonal bands, ribbons, sparks, the fuse and zigzag separators in style.css and theme.json are CSS written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and artwork, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
