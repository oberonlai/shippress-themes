=== Hagane Machinery ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, photograph-led block theme for an industrial machinery maker: steel-white pages, light steel panels, graphite ink, a dark graphite footer and a single iron blue-grey accent; IBM Plex Serif with IBM Plex Sans; the machining hall at dawn over one plain sentence and three figures, the four product lines as a numbered index, the flagship machine explained, a timeline from 1961, an interview with the chief engineer, delivered machines by industry, the service network, news and a quiet request-a-quotation close.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional machinery maker the sample content is written for.

The company details (address, sales office, telephone, email, finding us) are kept in ONE place: a synced pattern under Appearance > Editor > Patterns. The footer and Contact pages only reference it, so a change made once shows everywhere. It is created on activation (inc/shared-info.php) from inc/info/office.html and never created twice.

== Installation ==

1. Download hagane-machinery.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hagane Machinery.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The quotation request and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Hagane Machinery WordPress Theme, Copyright 2026 ShipPress contributors.
Hagane Machinery is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

IBM Plex Serif
Files: assets/fonts/IBMPlexSerif-Regular.ttf, assets/fonts/IBMPlexSerif-Medium.ttf
Copyright 2017 IBM Corp. with Reserved Font Name "Plex"
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-IBMPlexSerif.txt, https://openfontlicense.org).
Unmodified TTF files from https://github.com/google/fonts/tree/main/ofl/ibmplexserif (the Reserved Font Name means the fonts are shipped as released, not subset), bundled so the theme makes no third-party requests.

IBM Plex Sans
Files: assets/fonts/IBMPlexSans-Variable.ttf
Copyright 2017 IBM Corp. with Reserved Font Name "Plex"
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-IBMPlexSans.txt, https://openfontlicense.org).
Unmodified variable TTF from https://github.com/google/fonts/tree/main/ofl/ibmplexsans.

Noto Serif TC
Files: assets/fonts/noto-serif-tc-zh-tw-400.woff2
Copyright 2012 Google Inc. All Rights Reserved.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifTC.txt, https://openfontlicense.org).
Regular 400 from https://github.com/google/fonts/tree/main/ofl/notoseriftc, subset with fontTools (WOFF2) to the characters of the Traditional Chinese sample text; never a Japanese font.

Noto Serif JP
Files: assets/fonts/noto-serif-jp-400-ja.woff2
Copyright 2012 Google Inc. All Rights Reserved.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifJP.txt, https://openfontlicense.org).
Regular 400 from https://github.com/google/fonts/tree/main/ofl/notoserifjp, subset with fontTools (WOFF2) to the characters of the Japanese sample text.

= Images =

All photographs were generated with Grok for this theme and are released under GPL-2.0-or-later / CC0. They show no real people, places or brands.

assets/images/assembly-bay.webp, assets/images/demo/assembly-bay.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/cast-iron.webp, assets/images/demo/cast-iron.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/customer-line.webp, assets/images/demo/customer-line.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/design-office.webp, assets/images/demo/design-office.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/engineer-portrait.webp, assets/images/demo/engineer-portrait.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/grinder.webp, assets/images/demo/grinder.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/hero-plant.webp, assets/images/demo/hero-plant.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/hmc-flagship.webp, assets/images/demo/hmc-flagship.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/inspection-room.webp, assets/images/demo/inspection-room.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/machinist-lathe.webp, assets/images/demo/machinist-lathe.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/parts-tray.webp, assets/images/demo/parts-tray.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/press-brake.webp, assets/images/demo/press-brake.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/service-engineer.webp, assets/images/demo/service-engineer.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/service-van.webp, assets/images/demo/service-van.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/spindle-detail.webp, assets/images/demo/spindle-detail.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/training-room.webp, assets/images/demo/training-room.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0

== Changelog ==

= 1.0.0 =
* First release: industrial machinery maker, sample content in en, zh-TW, ja, fr and de.
