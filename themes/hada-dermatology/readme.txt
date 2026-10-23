=== Hada Dermatology ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm block theme for a community dermatology clinic: an inset hero photograph on a pale band with a thin line across it, hairline arcs, a signed letter, a numbered conditions index, doctors as rows, fees and booking. Crimson Pro with Figtree.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional family clinic the sample content is written for.

== Installation ==

1. Download hada-dermatology.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hada Dermatology.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The clinic letter form is plain HTML: connect its action to your email service. Booking is by phone or email; no plugin is needed.

== Copyright ==

Hada Dermatology WordPress Theme, Copyright 2026 ShipPress contributors.
Hada Dermatology is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Crimson Pro
Files: assets/fonts/crimsonpro-variable-latin.woff2, assets/fonts/crimsonpro-italic-variable-latin.woff2
Copyright 2018 The Crimson Pro Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-CrimsonPro.txt, https://openfontlicense.org).
Latin variable WOFF2 from https://github.com/google/fonts/tree/main/ofl/crimsonpro, bundled so the theme makes no third-party requests.

Figtree
Files: assets/fonts/figtree-variable-latin.woff2
Copyright 2022 The Figtree Project Authors
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Figtree.txt, https://openfontlicense.org).
Latin variable WOFF2 from https://github.com/google/fonts/tree/main/ofl/figtree.

Noto Serif TC
Files: assets/fonts/noto-serif-tc-zh-tw-400.woff2
Copyright 2012 Google Inc. All Rights Reserved.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifTC.txt, https://openfontlicense.org).
Regular 400 from https://github.com/google/fonts/tree/main/ofl/notoseriftc, subset to the characters of the Traditional Chinese sample text; never a Japanese font.

Noto Serif JP
Files: assets/fonts/noto-serif-jp-400-ja.woff2
Copyright 2012 Google Inc. All Rights Reserved.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifJP.txt, https://openfontlicense.org).
Regular 400 from https://github.com/google/fonts/tree/main/ofl/notoserifjp, subset to the characters of the Japanese sample text.

= Images =

All photographs were generated with Grok for this theme and are released under GPL-2.0-or-later / CC0. They show no real people, places or brands.

assets/images/demo/p03-skincheck.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/demo/p04-moisturiser.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/demo/p05-child.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/demo/p11-cosmetic.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/demo/p14-sunscreen.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/demo/p15-teen.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p01-consult.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p03-skincheck.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p04-moisturiser.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p05-child.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p06-reyes.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p07-odum.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p08-castellano.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p09-reception.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p10-waiting.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p11-cosmetic.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p12-raman.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p14-sunscreen.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0
assets/images/p15-teen.webp: generated with Grok for this theme, GPL-2.0-or-later / CC0

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
