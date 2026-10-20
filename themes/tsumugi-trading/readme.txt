=== Tsumugi Trading ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, photograph-led block theme for a mid-sized trading company: harbour pages, stone panels, ink text and a single walnut-brown accent; Spectral with Hanken Grotesk; an inset container-port photograph with a milestone-year line, who we are, four business lines, sixty years in photographed milestones, three directors, sustainability, careers, news and contact.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional trading company the sample content is written for.

The company details (address, office hours, telephone, email, finding us) are kept in ONE place: a synced pattern under Appearance > Editor > Patterns. The footer and Contact pages only reference it, so a change made once shows everywhere. It is created on activation (inc/shared-info.php) from inc/info/office.html and never created twice.

== Installation ==

1. Download tsumugi-trading.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsumugi Trading.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The message and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Tsumugi Trading WordPress Theme, Copyright 2026 ShipPress contributors.
Tsumugi Trading is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Spectral
Files: assets/fonts/spectral-light.woff2, assets/fonts/spectral-regular.woff2
Copyright 2017 The Spectral Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Spectral.txt, https://openfontlicense.org).
Unmodified Light and Regular from https://github.com/google/fonts/tree/main/ofl/spectral, converted to WOFF2, bundled so the theme makes no third-party requests.

Hanken Grotesk
Files: assets/fonts/HankenGrotesk-VF.woff2
Copyright 2021 The Hanken Grotesk Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-HankenGrotesk.txt, https://openfontlicense.org).
Unmodified variable font from https://github.com/google/fonts/tree/main/ofl/hankengrotesk, converted to WOFF2.

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

assets/images/port-dawn.webp, assets/images/demo/port-dawn.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/quay-crane.webp, assets/images/demo/quay-crane.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/warehouse-aisle.webp, assets/images/demo/warehouse-aisle.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/warehouse-check.webp, assets/images/demo/warehouse-check.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/textile-mill.webp, assets/images/demo/textile-mill.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/ceramic-factory.webp, assets/images/demo/ceramic-factory.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/quality-lab.webp, assets/images/demo/quality-lab.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/head-office.webp, assets/images/demo/head-office.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/meeting-room.webp, assets/images/demo/meeting-room.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/director-portrait-1.webp, assets/images/demo/director-portrait-1.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/director-portrait-2.webp, assets/images/demo/director-portrait-2.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/archive-1960s.webp, assets/images/demo/archive-1960s.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/archive-1980s.webp, assets/images/demo/archive-1980s.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/solar-roof.webp, assets/images/demo/solar-roof.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/cartons-packing.webp, assets/images/demo/cartons-packing.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/trainee-desk.webp, assets/images/demo/trainee-desk.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/truck-dock.webp, assets/images/demo/truck-dock.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/reception-lobby.webp, assets/images/demo/reception-lobby.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/pier-walk.webp, assets/images/demo/pier-walk.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/customs-desk.webp, assets/images/demo/customs-desk.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/sample-room.webp, assets/images/demo/sample-room.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0

== Changelog ==

= 1.0.0 =
* First release: mid-sized trading company, sample content in en, zh-TW, ja, fr and de.
