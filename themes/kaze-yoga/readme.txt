=== Kaze Yoga ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, airy theme for small yoga studios: a pale mist ground with sage and pine-ink, Gowun Batang headings and Lexend text, a slow "breath line" wave as the signature, a header with only a Menu button that opens a full-screen menu, a home page in four chapters where each photograph stays while its words scroll past, and a footer that is one big "book a trial class" band; with about, a weekly timetable, the teachers, a trial class with a booking form, a journal, a newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kaze-yoga.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kaze-yoga.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kaze Yoga.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample journal posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The studio's address, opening hours, phone number and email are kept in one place: the synced pattern "Kaze Yoga: studio address, hours, phone and email" (Appearance > Editor > Patterns). The footer of every page, the Contact page and the Trial class page show that one pattern, so you edit it once. The weekly timetable works the same way: the synced pattern "Kaze Yoga: weekly timetable" is shown on the home page, the Timetable page and the Trial class page (inc/studio-info.php creates both the first time the theme is activated, and never twice).

The header's Menu button opens the core Navigation block's full-screen menu: focus stays inside it while it is open, Escape closes it and returns focus to the button, and a small script (assets/js/menu.js) keeps the button's aria-expanded state in step.

The sample studio, its teachers, address, telephone number and prices are fictional. Classes are general wellbeing practice, not medical advice. The trial class, contact and newsletter forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Kaze Yoga WordPress Theme, Copyright 2026 ShipPress contributors.
Kaze Yoga is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Gowun Batang
Files: assets/fonts/gowun-batang-regular-latin.woff2, assets/fonts/gowun-batang-bold-latin.woff2
Copyright 2021 The Gowun Batang Project Authors (https://github.com/yangheeryu/Gowun-Batang)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-GowunBatang.txt, https://openfontlicense.org)
Latin subset (WOFF2, Regular and Bold) of the official files in https://github.com/google/fonts/tree/main/ofl/gowunbatang, bundled so the theme makes no third-party requests.

Lexend
Files: assets/fonts/lexend-variable-latin.woff2
Copyright 2018 The Lexend Project Authors (https://github.com/googlefonts/lexend)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Lexend.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 100-900) of the official file in https://github.com/google/fonts/tree/main/ofl/lexend, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the people shown are AI-generated and do not depict real people, and every studio and person the theme names is fictional).
- assets/images/bamboo.jpg
- assets/images/class-breath.jpg
- assets/images/class-flow.jpg
- assets/images/class-restore.jpg
- assets/images/garden.jpg
- assets/images/hands.jpg
- assets/images/hero.jpg
- assets/images/props.jpg
- assets/images/tea.jpg
- assets/images/teacher-naomi.jpg
- assets/images/teacher-ren.jpg
- assets/images/teacher-setsuko.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/bamboo.jpg
- assets/images/demo/class-breath.jpg
- assets/images/demo/class-flow.jpg
- assets/images/demo/class-restore.jpg
- assets/images/demo/garden.jpg
- assets/images/demo/hands.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/props.jpg
- assets/images/demo/tea.jpg
- assets/images/demo/teacher-naomi.jpg
- assets/images/demo/teacher-ren.jpg
- assets/images/demo/teacher-setsuko.jpg

The brand mark (a breath wave drawn as one inline SVG path in parts/header.html) and the breath line, list dashes and menu icon in style.css (one SVG wave used as a CSS mask) are original work written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and photographs, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
