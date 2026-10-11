=== Undo Ba ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A restrained, elegant theme for small strength and conditioning studios: a stone ground with paper bands, charcoal text and dark bands, warm-grey hairlines and one deep oxblood accent, Bellefair headings and Inter text; a transparent header over the home photograph; a home page that reads as a fine numbered timeline of the training week (01 to 06 in thin serif numerals, the rep counter); a charcoal footer band inviting a free trial; with about, programs (one session in six phases), coaches, memberships and prices, a journal, a newsletter and trial booking. The studio details and the memberships with their prices are each edited in one place.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download undo-ba.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/undo-ba.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Undo Ba.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample journal posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The studio's address, opening hours, phone number and email are kept in one place: the synced pattern "Undo Ba: studio address, hours, phone and email" (Appearance > Editor > Patterns), shown in the footer of every page and on the Contact page. The memberships with their prices, including the "Most chosen" badge, work the same way: the synced pattern "Undo Ba: memberships and prices" is shown on the home page and the Pricing page (inc/shared-info.php creates both the first time the theme is activated, and never twice).

The sample studio, its coaches, address, telephone number and prices are fictional. The trial booking and newsletter forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Undo Ba WordPress Theme, Copyright 2026 ShipPress contributors.
Undo Ba is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Bellefair
Files: assets/fonts/bellefair-regular-latin.woff2
Copyright 2015 The Bellefair Project Authors (https://github.com/shinntype/bellefair)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Bellefair.txt, https://openfontlicense.org)
Latin subset (WOFF2) of the official file in https://github.com/google/fonts/tree/main/ofl/bellefair (no Reserved Font Name), bundled so the theme makes no third-party requests.

Inter
Files: assets/fonts/inter-variable-latin.woff2
Copyright 2020 The Inter Project Authors (https://github.com/rsms/inter)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Inter.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 100-900) of the official file in https://github.com/google/fonts/tree/main/ofl/inter, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the people shown are AI-generated and do not depict real people, and every studio and person the theme names is fictional).
- assets/images/coach.jpg
- assets/images/hero.jpg
- assets/images/kettlebell.jpg
- assets/images/lifter.jpg
- assets/images/recovery.jpg
- assets/images/rope.jpg
- assets/images/rower.jpg
- assets/images/stretch.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/coach.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/kettlebell.jpg
- assets/images/demo/lifter.jpg
- assets/images/demo/recovery.jpg
- assets/images/demo/rope.jpg
- assets/images/demo/rower.jpg
- assets/images/demo/stretch.jpg

screenshot.png: made from the theme's own pages (same license as the theme).
