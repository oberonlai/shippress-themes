=== Kenban Piano School ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, typographic education theme for a small piano school in a wooden house. Paper white, ivory and ebony, with one muted brass accent used only for large type and small marks (the raised key's baseline, today's timetable bar, the free-first-lesson dot and the five staff lines before each label). The header is a row of ruled cells read like a keyboard: the wordmark in the first cell, each menu item a white key with short ebony black keys between them, the current page a raised paper-white key. The home page is oversized type only: one tempo marking, Andante, set very large on five faint staff lines with a short gloss and the term at a glance beneath, then the five lessons and fees as ruled rows, five tempo words from Largo to Allegro that tell how a pupil moves through the school, the next recital date in tall numerals, the journal as text rows and the free first lesson. The footer is the weekly lesson timetable on ebony, with today marked from the site's timezone, beside the school details. With Lessons, Teachers, Recitals, The school, Journal, Newsletter and Contact (a first-lesson enquiry that composes an email, no backend). The school details, the term, the lesson fees and the timetable are synced patterns, edited once. Linden Hill over Atkinson Hyperlegible. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kenban-piano.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kenban-piano.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kenban Piano School.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and seven tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Four things are kept in one place each, as synced patterns (Appearance > Editor > Patterns), created once by inc/shared-info.php:
- "Kenban Piano School: school details" (address, telephone, email, office hours). Shown in the footer and on The school and Contact pages. The enquiry form sends to the email address written here.
- "Kenban Piano School: the term at a glance" (term dates, lesson length, the free first lesson, the next terms). Shown under the tempo word on the home page, on Lessons and on Contact.
- "Kenban Piano School: lessons and fees" (five lessons with ages, length, monthly fee and the "Most chosen" badge, which is ordinary editable text). Shown on the home page and on Lessons.
- "Kenban Piano School: weekly lesson timetable" (Monday to Sunday, morning, afternoon and evening, numbered to match the fees, the free first lesson). Shown in the footer and on Lessons. Today's column is marked from the site's timezone (Settings > General), on the server, never from the visitor's clock.

A page that already shows the timetable or the school details does not repeat them in the footer. The Contact form needs no backend: assets/js/enquiry.js opens the visitor's email app with the enquiry written out; without JavaScript the form stays hidden and the school details do the job. The school, teachers, town, hall, address, telephone numbers and fees are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Kenban Piano School WordPress Theme, Copyright 2026 ShipPress contributors.
Kenban Piano School is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Linden Hill
Copyright (c) 2011, Barry Schwartz
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-LindenHill.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/lindenhill (no Reserved Font Name; Regular and Italic, subset to Latin as WOFF2)

Atkinson Hyperlegible
Copyright 2020 Braille Institute of America, Inc.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-AtkinsonHyperlegible.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/atkinsonhyperlegible (no Reserved Font Name; Regular and Bold, subset to Latin as WOFF2)

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/demo/hammers.jpg
- assets/images/demo/pedals.jpg
- assets/images/demo/recital-bow.jpg
- assets/images/demo/score-still.jpg
- assets/images/demo/sheet-hands.jpg
- assets/images/demo/upright-room.jpg
- assets/images/entrance.jpg
- assets/images/hammers.jpg
- assets/images/hands-lesson.jpg
- assets/images/keys-macro.jpg
- assets/images/metronome.jpg
- assets/images/pedals.jpg
- assets/images/recital-bow.jpg
- assets/images/recital-hall.jpg
- assets/images/score-still.jpg
- assets/images/sheet-hands.jpg
- assets/images/studio.jpg
- assets/images/teacher-01.jpg
- assets/images/teacher-02.jpg
- assets/images/teacher-03.jpg
- assets/images/upright-room.jpg

The staff lines, key cells and brass marks are drawn in CSS, self-made, GPL-2.0-or-later.
