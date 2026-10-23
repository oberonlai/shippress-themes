=== Sukoyaka Family Clinic ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, photograph-led block theme for a family medical clinic: linen pages, stone panels, ink text and a single muted green accent; Literata with Source Sans 3; a calm waiting-room photograph beside one plain sentence and a slim opening-hours line, a welcome from the founder, a visit from reception to the dispensary, the doctors and nurses, care for every age, vaccinations and health checks as plain lists, the journal and how to find us.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional family clinic the sample content is written for.

The clinic details (address, opening hours, telephone, email, finding us) are kept in ONE place: a synced pattern under Appearance > Editor > Patterns. The footer and Contact pages only reference it, so a change made once shows everywhere. It is created on activation (inc/shared-info.php) from inc/info/office.html and never created twice.

== Installation ==

1. Download sukoyaka-family-clinic.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Sukoyaka Family Clinic.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The message and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Sukoyaka Family Clinic WordPress Theme, Copyright 2026 ShipPress contributors.
Sukoyaka Family Clinic is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Literata
Files: assets/fonts/literata-light-latin.woff2, assets/fonts/literata-regular-latin.woff2
Copyright 2017 The Literata Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Literata.txt, https://openfontlicense.org).
Latin WOFF2 from https://github.com/google/fonts/tree/main/ofl/literata, bundled so the theme makes no third-party requests.

Source Sans 3
Files: assets/fonts/SourceSans3VF-Upright.ttf.woff2
Copyright 2010-2020 Adobe (http://www.adobe.com/), with Reserved Font Name 'Source'
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-SourceSans3.txt, https://openfontlicense.org).
Unmodified variable WOFF2 from https://github.com/adobe-fonts/source-sans.

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

assets/images/blood-pressure.webp, assets/images/demo/blood-pressure.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/child-check.webp, assets/images/demo/child-check.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/clinic-exterior.webp, assets/images/demo/clinic-exterior.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/consult-room.webp, assets/images/demo/consult-room.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/doctor-ellen.webp, assets/images/demo/doctor-ellen.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/doctor-tomas.webp, assets/images/demo/doctor-tomas.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/exam-room.webp, assets/images/demo/exam-room.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/health-check.webp, assets/images/demo/health-check.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/home-visit.webp, assets/images/demo/home-visit.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/lab-sample.webp, assets/images/demo/lab-sample.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/nurse-team.webp, assets/images/demo/nurse-team.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/pharmacy-counter.webp, assets/images/demo/pharmacy-counter.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/reception.webp, assets/images/demo/reception.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/teen-consult.webp, assets/images/demo/teen-consult.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/vaccination.webp, assets/images/demo/vaccination.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/waiting-room.webp, assets/images/demo/waiting-room.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0

== Changelog ==

= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).

= 1.0.0 =
* First release: family medical clinic, sample content in en, zh-TW, ja, fr and de.
