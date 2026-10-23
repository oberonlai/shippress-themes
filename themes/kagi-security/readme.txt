=== Kagi Security ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, photograph-led block theme for a managed cybersecurity firm: cloud-white pages, night-navy text and one signal-indigo accent; Instrument Serif with Inter; plain-spoken sections on what is watched, how incidents are handled, the analysts, plans and fees. Sample content in English, Traditional Chinese, Japanese, French and German.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional managed security firm the sample content is written for.

The office details (address, office hours, telephone, incident line, email, finding us) are kept in ONE place: a synced pattern under Appearance > Editor > Patterns. The footer and Contact pages only reference it, so you edit them once.

== Installation ==

1. Download kagi-security.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kagi Security.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The message and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Kagi Security WordPress Theme, Copyright 2026 ShipPress contributors.
Kagi Security is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Instrument Serif
Files: assets/fonts/InstrumentSerif-Regular.woff2, assets/fonts/InstrumentSerif-Italic.woff2
Copyright 2022 The Instrument Serif Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-InstrumentSerif.txt, https://openfontlicense.org).
Unmodified Regular and Italic from https://github.com/google/fonts/tree/main/ofl/instrumentserif, converted to WOFF2, bundled so the theme makes no third-party requests.

Inter
Files: assets/fonts/Inter-VF.woff2
Copyright 2020 The Inter Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Inter.txt, https://openfontlicense.org).
Unmodified variable font from https://github.com/google/fonts/tree/main/ofl/inter, converted to WOFF2.

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

assets/images/hero-night-room.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/ch-watch.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/ch-triage.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/ch-respond.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/ch-report.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/client-visit.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/server-room.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/office-day.webp, assets/images/demo/office-day.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/meeting.webp, assets/images/demo/meeting.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/analyst-1.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/analyst-2.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/analyst-3.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/founder.webp, assets/images/demo/founder.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/laptop-hands.webp, assets/images/demo/laptop-hands.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/onsite-cabinet.webp, assets/images/demo/onsite-cabinet.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/coffee-handover.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/workshop-training.webp, assets/images/demo/workshop-training.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/desk-detail.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0

== Changelog ==

= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).

= 1.0.0 =
* First release: managed security firm, sample content in en, zh-TW, ja, fr and de.
