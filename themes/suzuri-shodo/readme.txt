=== Suzuri Shodo ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, vertical-type education theme for a small calligraphy (shodo) school in an old timber house with a moss-garden veranda. Washi, felt grey and sumi ink, with a muted seal red used only for small marks (the active menu numeral, the free trial slot, today's timetable marker and the stopping dot after vertical titles). The wordmark sits top-left in Sawarabi Mincho; on the home page the menu is a numbered list with hairline leaders in the hero's lower-right corner, on inner pages a compact numbered row top-right. The home page is a sequence of chapters with long pauses: the hero brush-stroke photograph as a wide pale sheet with the school's idea set vertically, four chapters (ink, brush, paper, the stroke) each with one photograph, a vertical title and a short paragraph on alternating sides, the five class levels as tall vertical columns read right to left like hanging scrolls (weekly hours and monthly fees), a note from the teacher, the free trial lesson and the journal. The footer is the weekly class timetable drawn as a folded practice sheet on felt grey, with today marked from the site's timezone, beside the school details. With Classes, Timetable, Materials (the starter kit with prices and care notes), About, Journal, Newsletter and Contact (a trial-lesson enquiry that composes an email, no backend). The school details, the timetable and the class levels are synced patterns, edited once. Sawarabi Mincho over Zen Kaku Gothic Antique. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download suzuri-shodo.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/suzuri-shodo.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Suzuri Shodo.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns), created once by inc/shared-info.php:
- "Suzuri Shodo: school details and term dates" (address, telephone, email, office hours, term dates). Shown in the footer and on the Timetable and Contact pages. The enquiry form sends to the email address written here.
- "Suzuri Shodo: weekly class timetable" (Monday to Sunday, morning, afternoon and evening, the free trial slot and a legend). Shown in the footer and on the Timetable and Classes pages. Today's column is marked from the site's timezone (Settings > General), on the server, never from the visitor's clock.
- "Suzuri Shodo: class levels, hours and fees" (five levels with weekly hours, monthly fees and the "Most chosen" badge, which is ordinary editable text). Shown on the home page and the Classes page.

A page that already shows the timetable or the school details does not repeat them in the footer. The Contact form needs no backend: assets/js/enquiry.js opens the visitor's email app with the enquiry written out; without JavaScript the form stays hidden and the school details do the job. The school, teacher, assistant, town, address, telephone numbers and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Suzuri Shodo WordPress Theme, Copyright 2026 ShipPress contributors.
Suzuri Shodo is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Sawarabi Mincho
Copyright 2024 The Sawarabi Mincho Project Authors (https://github.com/googlefonts/sawarabi-mincho/)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-SawarabiMincho.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/sawarabimincho (no Reserved Font Name; Regular, subset to Latin as WOFF2)

Zen Kaku Gothic Antique
Copyright 2022 The Zen Kaku Gothic Project Authors (https://github.com/googlefonts/zen-kakugothic)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-ZenKakuGothicAntique.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/zenkakugothicantique (no Reserved Font Name; Regular and Medium, subset to Latin as WOFF2)

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/brush-washing.jpg
- assets/images/brushes.jpg
- assets/images/classroom.jpg
- assets/images/demo/brush-washing.jpg
- assets/images/demo/brushes.jpg
- assets/images/demo/classroom.jpg
- assets/images/demo/engawa.jpg
- assets/images/demo/hand-brush.jpg
- assets/images/demo/hero-stroke.jpg
- assets/images/demo/ink-grinding.jpg
- assets/images/demo/inkstone.jpg
- assets/images/demo/paper-stack.jpg
- assets/images/demo/seal-stone.jpg
- assets/images/demo/stroke-01.jpg
- assets/images/demo/stroke-02.jpg
- assets/images/demo/stroke-03.jpg
- assets/images/demo/stroke-04.jpg
- assets/images/demo/students.jpg
- assets/images/demo/teacher.jpg
- assets/images/demo/water-dropper.jpg
- assets/images/engawa.jpg
- assets/images/felt.jpg (cropped from paper-stack.jpg)
- assets/images/hand-brush.jpg
- assets/images/hero-stroke.jpg
- assets/images/ink-grinding.jpg
- assets/images/inkstone.jpg
- assets/images/paper-stack.jpg
- assets/images/paperweight.jpg (cropped from paper-stack.jpg)
- assets/images/seal-stone.jpg
- assets/images/stroke-01.jpg
- assets/images/stroke-02.jpg
- assets/images/stroke-03.jpg
- assets/images/stroke-04.jpg
- assets/images/students.jpg
- assets/images/teacher.jpg
- assets/images/water-dropper.jpg

The five-tones-of-ink marks, fold lines and seal-red dots are drawn in CSS, self-made, GPL-2.0-or-later.
