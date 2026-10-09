=== Kenchiku Grid ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A monochrome, editorial business theme for architecture studios: a visible modular grid with hairline gutters, numbered project modules and large concrete-and-light imagery in charcoal and concrete grey, with a single pale blueprint-blue accent.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kenchiku-grid.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kenchiku-grid.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kenchiku Grid.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

== Copyright ==

Kenchiku Grid WordPress Theme, Copyright 2026 ShipPress contributors.
Kenchiku Grid is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Inter Tight
Files: assets/fonts/inter-tight-variable-latin.woff2
Copyright 2022 The Inter Project Authors (https://github.com/rsms/inter-tight)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-InterTight.txt, https://openfontlicense.org)
Latin subset (WOFF2) as served by Google Fonts, bundled so the theme makes no third-party requests.

JetBrains Mono
Files: assets/fonts/jetbrains-mono-variable-latin.woff2
Copyright 2020 The JetBrains Mono Project Authors (https://github.com/JetBrains/JetBrainsMono)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-JetBrainsMono.txt, https://openfontlicense.org)
Latin subset (WOFF2) as served by Google Fonts, bundled so the theme makes no third-party requests.

= Images =

All illustrations are original vector artwork drawn in code for this theme by the ShipPress contributors (no photographs, stock images or third-party artwork), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/board-concrete.svg
- assets/images/cantilever.svg
- assets/images/corridor.svg
- assets/images/light-slit.svg
- assets/images/louvers.svg
- assets/images/map-kyoto.svg
- assets/images/map-tokyo.svg
- assets/images/model.svg
- assets/images/oculus.svg
- assets/images/pilotis.svg
- assets/images/plan.svg
- assets/images/section.svg
- assets/images/stair.svg
- assets/images/window-void.svg

Raster copies of the same illustrations, imported into the Media Library by the demo import (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/board-concrete.jpg
- assets/images/demo/cantilever.jpg
- assets/images/demo/corridor.png
- assets/images/demo/light-slit.jpg
- assets/images/demo/louvers.jpg
- assets/images/demo/map-kyoto.jpg
- assets/images/demo/map-tokyo.jpg
- assets/images/demo/model.jpg
- assets/images/demo/oculus.jpg
- assets/images/demo/pilotis.jpg
- assets/images/demo/plan.jpg
- assets/images/demo/section.jpg
- assets/images/demo/stair.jpg
- assets/images/demo/window-void.jpg

screenshot.png: a screenshot of this theme's home page rendered on WordPress with its own demo content, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
