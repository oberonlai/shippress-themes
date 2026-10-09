=== Fuji Shinkyu ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, geometric and airy theme for small acupuncture, moxibustion and bodywork clinics, drawn like a quiet pulse-point chart: fine rings, gold points and hairline meridians, circle portraits and a breathing ring, plus a treatment menu with times and prices, a first-visit guide, opening hours and an appointment request form, in wisteria lavender and deep murasaki plum on pale washi white with one muted gold accent.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download fuji-shinkyu.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/fuji-shinkyu.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Fuji Shinkyu.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own photographs. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The appointment request, contact and newsletter forms are plain HTML: connect their action to your booking, form or email service.

The sample copy describes treatments for relaxation and general wellbeing only. Review it, and any claims you add, against the rules that apply to health services where you practise.

== Copyright ==

Fuji Shinkyu WordPress Theme, Copyright 2026 ShipPress contributors.
Fuji Shinkyu is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Urbanist
Files: assets/fonts/urbanist-variable-latin.woff2, assets/fonts/urbanist-italic-variable-latin.woff2
Copyright 2021 The Urbanist Project Authors (https://github.com/coreyhu/Urbanist)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Urbanist.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

Manrope
Files: assets/fonts/manrope-variable-latin.woff2
Copyright 2018 The Manrope Project Authors (https://github.com/googlefonts/manrope)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Manrope.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

= Images =

All illustrations are original geometric vector artwork drawn in code for this theme by the ShipPress contributors (circles, fine lines, gradients and an SVG turbulence filter for paper grain; no photographs, stock images or third-party artwork), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/area-map.svg
- assets/images/breath-circles.svg
- assets/images/hero-wisteria.svg
- assets/images/meridian-figure.svg
- assets/images/moxa-cones.svg
- assets/images/mugwort.svg
- assets/images/needle-tray.svg
- assets/images/practitioner-aoi.svg
- assets/images/practitioner-kei.svg
- assets/images/practitioner-mio.svg
- assets/images/pulse-wrist.svg
- assets/images/shiatsu-palms.svg
- assets/images/tea-after.svg
- assets/images/treatment-room.svg
- assets/images/wisteria-trellis.svg

Raster copies of the same artwork, imported into the Media Library by the demo import (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/area-map.jpg
- assets/images/demo/breath-circles.jpg
- assets/images/demo/hero-wisteria.jpg
- assets/images/demo/meridian-figure.jpg
- assets/images/demo/moxa-cones.jpg
- assets/images/demo/mugwort.jpg
- assets/images/demo/needle-tray.jpg
- assets/images/demo/practitioner-aoi.jpg
- assets/images/demo/practitioner-kei.jpg
- assets/images/demo/practitioner-mio.jpg
- assets/images/demo/pulse-wrist.jpg
- assets/images/demo/shiatsu-palms.jpg
- assets/images/demo/tea-after.jpg
- assets/images/demo/treatment-room.jpg
- assets/images/demo/wisteria-trellis.jpg

The dot grid, rings, points, meridian lines, the brand mark and the halo gradients in style.css and theme.json are CSS written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and artwork, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
