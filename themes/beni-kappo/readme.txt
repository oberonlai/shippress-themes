=== Beni Kappo ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A bold, layered theme for small counter restaurants (kappo, izakaya and omakase counters): red noren panels with slit hems overlapping full-bleed, lantern-lit pictures, lacquer cards edged in gold leaf and huge vermilion brush numerals for the course order, with three courses and prices, a sake list, the counter seating plan and a reservation request form, in sumi lacquer black, beni vermilion and shu red with gold-leaf highlights and off-white washi text.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download beni-kappo.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/beni-kappo.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Beni Kappo.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text, the prices and swap in your own photographs. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The reservation request, contact and newsletter forms are plain HTML: connect their action to your booking, form or email service.

== Copyright ==

Beni Kappo WordPress Theme, Copyright 2026 ShipPress contributors.
Beni Kappo is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Playfair Display
Files: assets/fonts/playfair-display-variable-latin.woff2, assets/fonts/playfair-display-italic-variable-latin.woff2
Copyright 2017 The Playfair Display Project Authors (https://github.com/clauseggers/Playfair-Display)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-PlayfairDisplay.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

Schibsted Grotesk
Files: assets/fonts/schibsted-grotesk-variable-latin.woff2
Copyright 2023 The Schibsted-Grotesk Project Authors (https://github.com/schibsted/schibsted-grotesk)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-SchibstedGrotesk.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

Kaushan Script
Files: assets/fonts/kaushan-script-400-latin.woff2
Copyright 2011 Pablo Impallari and Igino Marini (https://github.com/google/fonts/tree/main/ofl/kaushanscript)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-KaushanScript.txt, https://openfontlicense.org)
Latin subset (WOFF2), bundled so the theme makes no third-party requests. Used only for the brush numerals.

= Images =

All illustrations are original vector artwork drawn in code for this theme by the ShipPress contributors (shapes, gradients, Gaussian-blur glows and an SVG turbulence filter for film grain; no photographs, stock images or third-party artwork), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/area-map.svg
- assets/images/chef-ren.svg
- assets/images/cook-daichi.svg
- assets/images/counter-plan.svg
- assets/images/grill-embers.svg
- assets/images/hero-counter.svg
- assets/images/lantern-alley.svg
- assets/images/matsutake-basket.svg
- assets/images/noren-door.svg
- assets/images/okami-sayo.svg
- assets/images/owan-soup.svg
- assets/images/rice-donabe.svg
- assets/images/sake-pour.svg
- assets/images/sashimi-plate.svg
- assets/images/sugidama-cedar.svg

Raster copies of the same artwork, imported into the Media Library by the demo import (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/area-map.jpg
- assets/images/demo/chef-ren.jpg
- assets/images/demo/cook-daichi.jpg
- assets/images/demo/counter-plan.jpg
- assets/images/demo/grill-embers.jpg
- assets/images/demo/hero-counter.jpg
- assets/images/demo/lantern-alley.jpg
- assets/images/demo/matsutake-basket.jpg
- assets/images/demo/noren-door.jpg
- assets/images/demo/okami-sayo.jpg
- assets/images/demo/owan-soup.jpg
- assets/images/demo/rice-donabe.jpg
- assets/images/demo/sake-pour.jpg
- assets/images/demo/sashimi-plate.jpg
- assets/images/demo/sugidama-cedar.jpg

The noren panels and slit hems, lacquer panels, gold-leaf flecks, lantern glows, the seal-like brand mark and the brushstroke separator in style.css and theme.json are CSS written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and artwork, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
