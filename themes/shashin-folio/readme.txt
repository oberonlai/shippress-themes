=== Shashin Folio ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A minimal, cinematic portfolio theme for photographers: large photographs on a near-black ground separated by long pauses of empty space, letterboxed stills, film-strip sequences and mono captions like the edge markings on a roll of film, in silver and cool grey with a single muted cyanotype accent.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download shashin-folio.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/shashin-folio.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Shashin Folio.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own photographs. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

== Copyright ==

Shashin Folio WordPress Theme, Copyright 2026 ShipPress contributors.
Shashin Folio is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Instrument Serif
Files: assets/fonts/instrument-serif-latin.woff2, assets/fonts/instrument-serif-italic-latin.woff2
Copyright 2022 The Instrument Serif Project Authors (https://github.com/Instrument/instrument-serif)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-InstrumentSerif.txt, https://openfontlicense.org)
Latin subset (WOFF2), bundled so the theme makes no third-party requests.

Instrument Sans
Files: assets/fonts/instrument-sans-variable-latin.woff2
Copyright 2022 The Instrument Sans Project Authors (https://github.com/Instrument/instrument-sans)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-InstrumentSans.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

DM Mono
Files: assets/fonts/dm-mono-latin.woff2
Copyright 2020 The DM Mono Project Authors (https://github.com/googlefonts/dm-mono)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-DMMono.txt, https://openfontlicense.org)
Latin subset (WOFF2), bundled so the theme makes no third-party requests.

= Images =

All "photographs" are original procedural vector artwork drawn in code for this theme by the ShipPress contributors (gradients, shapes and an SVG film-grain filter; no real photographs, stock images or third-party artwork), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/cedar-fog.svg
- assets/images/contact-sheet.svg
- assets/images/crossing-rain.svg
- assets/images/ferry-wake.svg
- assets/images/film-canisters.svg
- assets/images/harbour-night.svg
- assets/images/low-tide.svg
- assets/images/night-platform.svg
- assets/images/portrait.svg
- assets/images/rain-glass.svg
- assets/images/snow-plain.svg
- assets/images/stairwell.svg
- assets/images/studio-map.svg
- assets/images/window-dawn.svg

Raster copies of the same artwork, imported into the Media Library by the demo import (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/cedar-fog.jpg
- assets/images/demo/contact-sheet.jpg
- assets/images/demo/crossing-rain.jpg
- assets/images/demo/ferry-wake.jpg
- assets/images/demo/film-canisters.jpg
- assets/images/demo/harbour-night.jpg
- assets/images/demo/low-tide.jpg
- assets/images/demo/night-platform.jpg
- assets/images/demo/portrait.jpg
- assets/images/demo/rain-glass.jpg
- assets/images/demo/snow-plain.jpg
- assets/images/demo/stairwell.jpg
- assets/images/demo/studio-map.jpg
- assets/images/demo/window-dawn.jpg

The film-grain overlay in style.css is an inline SVG noise filter written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and artwork, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
