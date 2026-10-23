=== Aozora Primary School ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, photograph-led block theme for a small independent primary school: morning-white pages, chalk-stone bands, ink text and a single wisteria-grey accent; Alegreya with Alegreya Sans; a notched morning-classroom photograph with stacked headline lines and three gateways, a welcome from the head, a school day in photographs, teachers by name, learning, admissions, fees and open days, the journal and a visit invitation.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional primary school the sample content is written for.

The school office details (address, office hours, telephone, email, finding us) are kept in ONE place: a synced pattern under Appearance > Editor > Patterns. The footer and Contact pages only reference it, so a change made once shows everywhere. It is created on activation (inc/shared-info.php) from inc/info/office.html and never created twice.

== Installation ==

1. Download aozora-primary-school.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Aozora Primary School.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The message and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Aozora Primary School WordPress Theme, Copyright 2026 ShipPress contributors.
Aozora Primary School is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Alegreya
Files: assets/fonts/Alegreya-VF.woff2
Copyright 2011 The Alegreya Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Alegreya.txt, https://openfontlicense.org).
Unmodified variable font from https://github.com/google/fonts/tree/main/ofl/alegreya, converted to WOFF2, bundled so the theme makes no third-party requests.

Alegreya Sans
Files: assets/fonts/AlegreyaSans-Regular.woff2, assets/fonts/AlegreyaSans-Italic.woff2, assets/fonts/AlegreyaSans-Medium.woff2
Copyright 2013 The Alegreya Sans Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-AlegreyaSans.txt, https://openfontlicense.org).
Unmodified Regular, Italic and Medium from https://github.com/google/fonts/tree/main/ofl/alegreyasans, converted to WOFF2.

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

assets/images/building.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/corridor.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/day-arrival.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/day-art.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/day-lunch.webp, assets/images/demo/day-lunch.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/day-maths.webp, assets/images/demo/day-maths.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/day-music.webp, assets/images/demo/day-music.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/day-playground.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/day-reading.webp, assets/images/demo/day-reading.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/garden.webp, assets/images/demo/garden.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/hero-classroom.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/library.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/openday.webp, assets/images/demo/openday.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/science.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/teacher-1.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/teacher-2.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/teacher-3.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/teacher-4.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/woods-walk.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0

== Changelog ==

= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).

= 1.0.0 =
* First release: small independent primary school, sample content in en, zh-TW, ja, fr and de.
