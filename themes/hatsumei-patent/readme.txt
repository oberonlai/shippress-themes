=== Hatsumei Patent Attorneys ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, photograph-led block theme for a patent and trademark attorney firm: stone-white pages, ink text, one patent-blue band and olive-grey labels; EB Garamond with Schibsted Grotesk; practice areas, six photographed chapters from idea to patent, the attorneys and fixed fees in one table. Sample content in English, Traditional Chinese, Japanese, French and German.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional patent and trademark attorney firm the sample content is written for.

The office details (address, office hours, telephone, email, finding us) are kept in ONE place: a synced pattern under Appearance > Editor > Patterns. The footer and Contact pages only reference it, so you edit them once.

== Installation ==

1. Download hatsumei-patent.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hatsumei Patent Attorneys.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The message and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Hatsumei Patent Attorneys WordPress Theme, Copyright 2026 ShipPress contributors.
Hatsumei Patent Attorneys is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

EB Garamond
Files: assets/fonts/EBGaramond-VF.woff2, assets/fonts/EBGaramond-Italic-VF.woff2
Copyright 2017 The EB Garamond Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-EBGaramond.txt, https://openfontlicense.org).
Unmodified variable fonts from https://github.com/google/fonts/tree/main/ofl/ebgaramond, converted to WOFF2, bundled so the theme makes no third-party requests.

Schibsted Grotesk
Files: assets/fonts/SchibstedGrotesk-VF.woff2
Copyright 2022 The Schibsted Grotesk Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-SchibstedGrotesk.txt, https://openfontlicense.org).
Unmodified variable font from https://github.com/google/fonts/tree/main/ofl/schibstedgrotesk, converted to WOFF2.

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

assets/images/drawings-review.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/examination.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/filing.webp, assets/images/demo/onsite-cabinet.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/first-idea.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/granted.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/hero-prototype.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/library.webp, assets/images/demo/office-day.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/meeting.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/portrait-amara.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/portrait-ines.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/portrait-tomas.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/prototype-macro.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/reception.webp, assets/images/demo/founder.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/search-desk.webp, assets/images/demo/laptop-hands.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/studio-wide.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/trademark.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/whiteboard.webp, assets/images/demo/meeting.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0
assets/images/workshop.webp, assets/images/demo/workshop-training.webp: generated with Grok Build for this theme, fictional, GPL-2.0-or-later / CC0

== Changelog ==

= 1.0.2 =
* Updated theme files (functions.php, inc/editor-lang.php).

= 1.0.1 =
* Inner pages use the front page's chamfered polygon photographs with (001) numerals: page heads, the main photographs of About, Practice areas, From idea to patent, Attorneys, First meeting, Fees, Notes and Contact, the article photograph, and simpler chamfers on journal cards.

= 1.0.0 =
* First release: patent and trademark attorney firm, sample content in en, zh-TW, ja, fr and de.
