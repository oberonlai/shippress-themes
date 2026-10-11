=== Sakura Juku ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A friendly, rounded theme for language schools: white pages with sakura-pink and clear-blue cards, Zen Maru Gothic over Nunito. A centred header with the menu split left and right, a home page built as one bento grid of rounded cells with hiragana stickers, and a footer centred on the opening-hours table. With Courses, Levels, a weekly Schedule, About, a school journal, a newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download sakura-juku.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/sakura-juku.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Sakura Juku.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images (Courses, Levels, Schedule, About, Newsletter, Contact), seven sample school journal posts with categories and tags, the menu, and sets the front page and the posts page (Journal). Then you only change the text and the pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The opening hours, the weekly class timetable and the school details are each kept in one place, as synced patterns (Appearance > Editor > Patterns): "Sakura Juku: opening hours" (shown in the footer of every page and on the Contact page), "Sakura Juku: weekly class timetable" (shown on the Schedule page) and "Sakura Juku: address, email and social links" (shown in the footer of every page and on the Contact page). inc/school-info.php creates them the first time the theme is activated, and never twice. No other page repeats them. The social icons link to "#" until you add your own.

The hiragana stickers are drawn by CSS: add the classes "sj-sticker sj-kana-a" (or -i, -u, -ne, -sa, -ra, -hi, -go) to a Group or Image block under Advanced > Additional CSS class(es). The kana is decorative and hidden from screen readers. The theme loads no JavaScript of its own, and motion stops for visitors who prefer reduced motion.

The sample school, its teachers, students, levels, streets and email addresses are fictional. The five levels (Seed, Sprout, Bud, Bloom, Canopy) are the school's own and are not the official levels of any national language test. The newsletter and contact forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Sakura Juku WordPress Theme, Copyright 2026 ShipPress contributors.
Sakura Juku is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Zen Maru Gothic
Files: assets/fonts/zen-maru-gothic-medium-latin-kana.woff2, assets/fonts/zen-maru-gothic-bold-latin-kana.woff2
Copyright 2021 The Zen Maru Gothic Project Authors (https://github.com/googlefonts/zen-marugothic)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-ZenMaruGothic.txt, https://openfontlicense.org)
The official ZenMaruGothic-Medium.ttf and ZenMaruGothic-Bold.ttf from https://github.com/google/fonts/tree/main/ofl/zenmarugothic, subset to Latin (Basic Latin, Latin-1, general punctuation, arrows) plus the eight hiragana used by the stickers (a, i, u, ne, sa, ra, hi, go), repackaged as WOFF2 and bundled so the theme makes no third-party requests.

Nunito
Files: assets/fonts/nunito-variable-latin.woff2, assets/fonts/nunito-italic-variable-latin.woff2
Copyright 2014 The Nunito Project Authors (https://github.com/googlefonts/nunito)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Nunito.txt, https://openfontlicense.org)
The official variable Nunito[wght].ttf and Nunito-Italic[wght].ttf from https://github.com/google/fonts/tree/main/ofl/nunito, subset to Latin with the weight axis kept and repackaged as WOFF2, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, brands or organisations; the people shown are AI-generated and do not depict real persons, and every school, teacher and student the theme names is fictional).
- assets/images/group.jpg
- assets/images/hero.jpg
- assets/images/online.jpg
- assets/images/spring.jpg
- assets/images/study.jpg
- assets/images/teacher1.jpg
- assets/images/teacher2.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/group.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/online.jpg
- assets/images/demo/spring.jpg
- assets/images/demo/study.jpg
- assets/images/demo/teacher1.jpg
- assets/images/demo/teacher2.jpg

The hiragana stickers, petal dots and petal bullets drawn in style.css are original work written for this theme (same copyright and license).
