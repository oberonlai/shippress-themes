=== Kasumi Mortgage ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, photograph-led block theme for an independent mortgage broker: mist-paper pages, stone panels, ink text, one deep slate band and a single slate-blue accent; Source Serif 4 with Inter; a kitchen-table photograph above the headline; six photographed steps from the first call to the keys; plain fees, one quiet rates table below the first screen, four advisers, a first-time buyers band and a call to book.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional firm the sample content is written for.

The office details (address, office hours, telephone, email, getting here) are kept in ONE place: a synced pattern under Appearance > Editor > Patterns. The footer, Mortgages & fees and Contact pages only reference it, so a change made once shows everywhere. It is created on activation (inc/shared-info.php) from inc/info/office.html and never created twice.

== Installation ==

1. Download kasumi-mortgage.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kasumi Mortgage.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The enquiry and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Kasumi Mortgage WordPress Theme, Copyright 2026 ShipPress contributors.
Kasumi Mortgage is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Source Serif 4
Files: assets/fonts/source-serif-4-variable-latin.woff2, assets/fonts/source-serif-4-italic-variable-latin.woff2
Copyright 2014 The Source Serif 4 Project Authors (https://github.com/adobe-fonts/source-serif)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-SourceSerif4.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subsets (WOFF2) of the variable fonts in https://github.com/google/fonts/tree/main/ofl/sourceserif4, bundled so the theme makes no third-party requests.

Inter
Files: assets/fonts/inter-variable-latin.woff2
Copyright 2020 The Inter Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Inter.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (WOFF2) of the variable font in https://github.com/google/fonts/tree/main/ofl/inter.

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

All photographs were AI-generated for this theme with one shared photographic style (documentary 35mm film photograph, candid, available natural light, muted warm greys, oatmeal and faded slate blue, fine grain) and are released under GPL-2.0-or-later / CC0. They show no real people, places or brands. The demo/ copies are imported into the Media Library as featured images.

assets/images/adviser-desk.webp, assets/images/demo/adviser-desk.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/adviser-naomi.webp, assets/images/demo/adviser-naomi.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/adviser-tom.webp, assets/images/demo/adviser-tom.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/documents-folder.webp, assets/images/demo/documents-folder.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/empty-living-room.webp, assets/images/demo/empty-living-room.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/first-call.webp, assets/images/demo/first-call.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/hero-kitchen-table.webp, assets/images/demo/hero-kitchen-table.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/keys-hand-over.webp, assets/images/demo/keys-hand-over.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/moving-boxes.webp, assets/images/demo/moving-boxes.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/new-kitchen-evening.webp, assets/images/demo/new-kitchen-evening.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/office-interior.webp, assets/images/demo/office-interior.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/older-couple-garden.webp, assets/images/demo/older-couple-garden.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/portrait-elif.webp, assets/images/demo/portrait-elif.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/portrait-owen.webp, assets/images/demo/portrait-owen.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/quiet-street.webp, assets/images/demo/quiet-street.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/self-employed.webp, assets/images/demo/self-employed.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/signing-papers.webp, assets/images/demo/signing-papers.webp: AI-generated for this theme, GPL-2.0-or-later / CC0

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
