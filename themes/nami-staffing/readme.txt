=== Nami Staffing ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, photograph-led block theme for a people-first recruitment and staffing agency: white and pale grey bands, ink text, deep field green lines, labels and buttons and one terracotta corner label; Lora with Nunito Sans; two documentary photographs around a centre line, the placement from brief to day thirty, consultants and fees in one paragraph. Sample content in English, Traditional Chinese, Japanese, French and German.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional staffing agency the sample content is written for.

The office details (address, office hours, telephone, email, finding us) are kept in ONE place: a synced pattern under Appearance > Editor > Patterns. The footer and Contact pages only reference it, so you edit them once.

== Installation ==

1. Download nami-staffing.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Nami Staffing.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The message and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Nami Staffing WordPress Theme, Copyright 2026 ShipPress contributors.
Nami Staffing is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Lora
Files: assets/fonts/Lora-wght.ttf
Copyright 2011 The Lora Project Authors, with Reserved Font Name "Lora".
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Lora.txt, https://openfontlicense.org).
Unmodified variable font from https://github.com/google/fonts/tree/main/ofl/lora (Reserved Font Name, so it is not subset or converted).

Nunito Sans
Files: assets/fonts/nunitosans-variable-latin.woff2
Copyright 2016 The Nunito Sans Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NunitoSans.txt, https://openfontlicense.org).
Variable font from https://github.com/google/fonts/tree/main/ofl/nunitosans, Latin subset, WOFF2.

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

assets/images/client-brief.webp, assets/images/demo/client-brief.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/clinic-desk.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/cv-review.webp, assets/images/demo/cv-review.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/day-thirty.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/first-morning.webp, assets/images/demo/first-morning.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/induction.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/interview.webp, assets/images/demo/interview.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/kitchen.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/lobby.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/office-temp.webp, assets/images/demo/office-temp.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/office-wide.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/portrait-daniel.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/portrait-mei.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/portrait-sofia.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/site-visit.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/team-meeting.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/warehouse-shift.webp, assets/images/demo/warehouse-shift.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0

== Changelog ==

= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).

= 1.0.0 =
* First release: people-first recruitment and staffing agency, sample content in en, zh-TW, ja, fr and de.
