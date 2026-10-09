=== Ikebana Kyoshitsu ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A pastel, botanical theme for flower schools and ikebana studios, laid out like an arrangement: every page follows the asymmetric triangle of shin, soe and hikae, with off-axis titles, cards that climb a diagonal, images placed high and low around empty space and brush lines that draw themselves in, plus classes and levels, a weekly timetable with a trial-lesson booking form and the teachers, in washi white, sakura pink and stem green with sumi ink and one beni-rouge accent.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download ikebana-kyoshitsu.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/ikebana-kyoshitsu.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Ikebana Kyoshitsu.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own photographs. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The trial-lesson booking, contact and newsletter forms are plain HTML: connect their action to your form, booking or email service.

== Copyright ==

Ikebana Kyoshitsu WordPress Theme, Copyright 2026 ShipPress contributors.
Ikebana Kyoshitsu is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Bodoni Moda
Files: assets/fonts/bodoni-moda-variable-latin.woff2, assets/fonts/bodoni-moda-italic-variable-latin.woff2
Copyright 2020 The Bodoni Moda Project Authors (https://github.com/indestructible-type/Bodoni)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-BodoniModa.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

Jost
Files: assets/fonts/jost-variable-latin.woff2
Copyright 2020 The Jost Project Authors (https://github.com/indestructible-type/Jost)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Jost.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

= Images =

All illustrations are original procedural vector artwork drawn in code for this theme by the ShipPress contributors (gradients, shapes and SVG turbulence filters for paper grain and soft light; no photographs, stock images or third-party artwork), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/area-map.svg
- assets/images/camellia-bamboo.svg
- assets/images/hero-moribana.svg
- assets/images/iris-suiban.svg
- assets/images/lesson-table.svg
- assets/images/nageire-maple.svg
- assets/images/sakura-branch.svg
- assets/images/studio-room.svg
- assets/images/summer-grasses.svg
- assets/images/teacher-hana.svg
- assets/images/teacher-ren.svg
- assets/images/teacher-sayo.svg
- assets/images/teacher-yui.svg
- assets/images/tools-flatlay.svg
- assets/images/triangle-diagram.svg
- assets/images/winter-pine-plum.svg

Raster copies of the same artwork, imported into the Media Library by the demo import (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/area-map.jpg
- assets/images/demo/camellia-bamboo.jpg
- assets/images/demo/hero-moribana.jpg
- assets/images/demo/iris-suiban.jpg
- assets/images/demo/lesson-table.jpg
- assets/images/demo/nageire-maple.jpg
- assets/images/demo/sakura-branch.jpg
- assets/images/demo/studio-room.jpg
- assets/images/demo/summer-grasses.jpg
- assets/images/demo/teacher-hana.jpg
- assets/images/demo/teacher-ren.jpg
- assets/images/demo/teacher-sayo.jpg
- assets/images/demo/teacher-yui.jpg
- assets/images/demo/tools-flatlay.jpg
- assets/images/demo/triangle-diagram.jpg
- assets/images/demo/winter-pine-plum.jpg

The washi fibre texture, the brush-line and three-line marks and the petal-light gradients in style.css and theme.json are inline SVG and CSS written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and artwork, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
