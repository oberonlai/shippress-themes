=== Hinoki Yado ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A serene, organic theme for small hot-spring inns that take bookings by enquiry: a slow scroll like walking an inn's corridor, rooms measured in tatami mats with spec sheets, the baths in numbers and a kaiseki menu that follows the small seasons, in hinoki cream, moss green and sumi ink with steam-grey gradients, washi texture and a single persimmon accent.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hinoki-yado.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hinoki-yado.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hinoki Yado.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own photographs. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The enquiry and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Hinoki Yado WordPress Theme, Copyright 2026 ShipPress contributors.
Hinoki Yado is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Cormorant
Files: assets/fonts/cormorant-variable-latin.woff2, assets/fonts/cormorant-italic-variable-latin.woff2
Copyright 2015 The Cormorant Project Authors (https://github.com/CatharsisFonts/Cormorant)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Cormorant.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

Cormorant SC
Files: assets/fonts/cormorant-sc-500-latin.woff2, assets/fonts/cormorant-sc-600-latin.woff2
Copyright 2015 The Cormorant Project Authors (https://github.com/CatharsisFonts/Cormorant)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-CormorantSC.txt, https://openfontlicense.org)
Latin subset (WOFF2), bundled so the theme makes no third-party requests.

Figtree
Files: assets/fonts/figtree-variable-latin.woff2
Copyright 2022 The Figtree Project Authors (https://github.com/erikdkennedy/figtree)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Figtree.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

= Images =

All illustrations are original procedural vector artwork drawn in code for this theme by the ShipPress contributors (gradients, shapes and SVG turbulence filters for steam and grain; no photographs, stock images or third-party artwork), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/area-map.svg
- assets/images/breakfast.svg
- assets/images/cedar-forest.svg
- assets/images/engawa-rain.svg
- assets/images/kaiseki-autumn.svg
- assets/images/kettle.svg
- assets/images/lantern-path.svg
- assets/images/room-hinoki.svg
- assets/images/room-kaede.svg
- assets/images/room-sugi.svg
- assets/images/room-yuki.svg
- assets/images/rotenburo.svg
- assets/images/snow-roof.svg
- assets/images/valley-steam.svg
- assets/images/yukata.svg

Raster copies of the same artwork, imported into the Media Library by the demo import (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/area-map.jpg
- assets/images/demo/breakfast.jpg
- assets/images/demo/cedar-forest.jpg
- assets/images/demo/engawa-rain.jpg
- assets/images/demo/kaiseki-autumn.jpg
- assets/images/demo/kettle.jpg
- assets/images/demo/lantern-path.jpg
- assets/images/demo/room-hinoki.jpg
- assets/images/demo/room-kaede.jpg
- assets/images/demo/room-sugi.jpg
- assets/images/demo/room-yuki.jpg
- assets/images/demo/rotenburo.jpg
- assets/images/demo/snow-roof.jpg
- assets/images/demo/valley-steam.jpg
- assets/images/demo/yukata.jpg

The washi fibre texture and the steam gradients in style.css are inline SVG filters and CSS gradients written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and artwork, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
