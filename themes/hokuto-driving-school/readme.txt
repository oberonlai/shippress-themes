=== Hokuto Driving School ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, photograph-led block theme for a family driving school: pale concrete pages, kerb-stone panels, asphalt ink, one deep slate-green band and a faded road-sign sage; Newsreader with Instrument Sans; a transparent top header over a full-bleed photograph of an empty early-morning road; the route from the yard to test day as six photographed stages; plain prices, instructors, a band for nervous drivers and a booking call.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional school the sample content is written for.

The school details (address, booking desk hours, telephone, email, getting here) are kept in ONE place: a synced pattern under Appearance > Editor > Patterns. The footer, Courses & fees and Contact pages only reference it, so a change made once shows everywhere. It is created on activation (inc/shared-info.php) from inc/info/school.html and never created twice.

== Installation ==

1. Download hokuto-driving-school.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hokuto Driving School.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The enquiry and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Hokuto Driving School WordPress Theme, Copyright 2026 ShipPress contributors.
Hokuto Driving School is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Newsreader
Files: assets/fonts/newsreader-variable-latin.woff2, assets/fonts/newsreader-italic-variable-latin.woff2
Copyright 2020 The Newsreader Project Authors (http://github.com/productiontype/Newsreader)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Newsreader.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subsets (WOFF2; roman weights 300-600, italic 300-500, optical size axis kept) of the variable fonts in https://github.com/google/fonts/tree/main/ofl/newsreader, bundled so the theme makes no third-party requests.

Instrument Sans
Files: assets/fonts/instrument-sans-variable-latin.woff2
Copyright 2022 The Instrument Sans Project Authors (https://github.com/Instrument/instrument-sans)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-InstrumentSans.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (WOFF2; width 100, weights 400-600) of the variable font in https://github.com/google/fonts/tree/main/ofl/instrumentsans, bundled so the theme makes no third-party requests.

Noto Serif TC
Files: assets/fonts/noto-serif-tc-zh-tw-400.woff2
Copyright 2012 Google Inc. All Rights Reserved.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifTC.txt, https://openfontlicense.org).
Regular 400 from https://github.com/google/fonts/tree/main/ofl/notoseriftc, subset (WOFF2) to the characters of the Traditional Chinese sample text: the headings of the zh-TW pages, never a Japanese font (scripts/subset-zh-fonts.mjs).

Noto Serif JP
Files: assets/fonts/noto-serif-jp-400-ja.woff2
Copyright 2012 Google Inc. All Rights Reserved.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifJP.txt, https://openfontlicense.org).
Regular 400 from https://github.com/google/fonts/tree/main/ofl/notoserifjp, subset (WOFF2) to the characters of the Japanese sample text: the headings of the ja pages.

Body text on the zh-TW and ja pages uses the visitor's system Traditional Chinese / Japanese sans-serif (PingFang TC, Microsoft JhengHei, Noto Sans CJK TC; Hiragino Sans, Yu Gothic, Noto Sans CJK JP); no font is downloaded for it.

= Images =

All photographs were AI-generated for this theme with one shared photographic style (quiet editorial photography, soft overcast daylight, muted stone and grey-green tones, subtle film grain) and are released under GPL-2.0-or-later / CC0. They show no real people, places or brands. The demo/ copies are imported into the Media Library as featured images.

assets/images/booking-office.webp, assets/images/demo/booking-office.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/frost.webp, assets/images/demo/frost.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/hands-wheel.webp, assets/images/demo/hands-wheel.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/hero-road.webp, assets/images/demo/hero-road.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/instructor-seat.webp, assets/images/demo/instructor-seat.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/keys-logbook.webp, assets/images/demo/keys-logbook.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/mirror.webp, assets/images/demo/mirror.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/moor-road.webp, assets/images/demo/moor-road.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/night-road.webp, assets/images/demo/night-road.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/parking.webp, assets/images/demo/parking.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/portrait-daniel.webp, assets/images/demo/portrait-daniel.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/portrait-mara.webp, assets/images/demo/portrait-mara.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/portrait-priya.webp, assets/images/demo/portrait-priya.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/portrait-sam.webp, assets/images/demo/portrait-sam.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/rain-wipers.webp, assets/images/demo/rain-wipers.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/roundabout.webp, assets/images/demo/roundabout.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/test-morning.webp, assets/images/demo/test-morning.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/theory-room.webp, assets/images/demo/theory-room.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/town-street.webp, assets/images/demo/town-street.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/yard.webp, assets/images/demo/yard.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
