=== Mori no Kai ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, editorial theme for forest-conservation nonprofits, land trusts and community woodland groups: generous whitespace, light serif titles, an asymmetric grid with a margin rail for field-note labels and large misty photographs, with restoration projects, volunteer work days and a sign-up form, explanatory giving tiers, a one-page impact report, the people, news, a newsletter and contact, in moss, cedar bark, morning mist and sumi ink, plus a night-forest dark variation.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download mori-no-kai.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/mori-no-kai.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Mori no Kai.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample news posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and the numbers and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The donate page explains giving and takes no payment. The volunteer sign-up, contact and newsletter forms are plain HTML: connect their action to your own form, email or donation service.

== Copyright ==

Mori no Kai WordPress Theme, Copyright 2026 ShipPress contributors.
Mori no Kai is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Newsreader
Files: assets/fonts/newsreader-variable-latin.woff2, assets/fonts/newsreader-italic-variable-latin.woff2
Copyright 2020 The Newsreader Project Authors (https://github.com/productiontype/Newsreader)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Newsreader.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

Instrument Sans
Files: assets/fonts/instrument-sans-variable-latin.woff2
Copyright 2022 The Instrument Sans Project Authors (https://github.com/Instrument/instrument-sans)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-InstrumentSans.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis), bundled so the theme makes no third-party requests.

DM Mono
Files: assets/fonts/dm-mono-400-latin.woff2, assets/fonts/dm-mono-500-latin.woff2
Copyright 2020 The DM Mono Project Authors (https://github.com/googlefonts/dm-mono)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-DMMono.txt, https://openfontlicense.org)
Latin subset (WOFF2, weights 400 and 500), bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, places, brands or organisations; every forest, trust and person they suggest is fictional).
- assets/images/birds-nest-box.jpg
- assets/images/field-notebook.jpg
- assets/images/forest-path-autumn.jpg
- assets/images/hero-cedar-forest.jpg
- assets/images/moss-detail.jpg
- assets/images/ranger-hut.jpg
- assets/images/satoyama-terraces.jpg
- assets/images/seedling-nursery.jpg
- assets/images/stream-valley.jpg
- assets/images/volunteers-planting.jpg
- assets/images/winter-forest.jpg
- assets/images/workshop-tools.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/birds-nest-box.jpg
- assets/images/demo/field-notebook.jpg
- assets/images/demo/forest-path-autumn.jpg
- assets/images/demo/hero-cedar-forest.jpg
- assets/images/demo/moss-detail.jpg
- assets/images/demo/ranger-hut.jpg
- assets/images/demo/satoyama-terraces.jpg
- assets/images/demo/seedling-nursery.jpg
- assets/images/demo/stream-valley.jpg
- assets/images/demo/volunteers-planting.jpg
- assets/images/demo/winter-forest.jpg
- assets/images/demo/workshop-tools.jpg

The brand mark (an outlined cedar drawn as an inline SVG in parts/header.html), the growth-ring separator, the stacked allocation bar and the monogram circles in style.css are original work written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and photographs, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
