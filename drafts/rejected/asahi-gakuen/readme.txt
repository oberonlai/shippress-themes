=== Asahi Gakuen ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A private high school theme in forget-me-not blue: a giant type-poster motto on a pale blue field with three facts and the admissions date, then a collage index of high-key cut-out portraits of students and teachers, a long interview, the school year, people in figures, admissions dates and the latest notices. English sample content.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download asahi-gakuen.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/asahi-gakuen.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Asahi Gakuen.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notices with four categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content is in English (demo-content.json); theme strings fall back to English on sites in other languages.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Asahi Gakuen: school office": term, office hours, campus tours, replies and closures.
- "Asahi Gakuen: office details" (hours, drop-in, address, phone, email): the footer and Contact.
- "Asahi Gakuen: fees": Academics and Contact.

The school, its people, address, telephone number, fees and figures are fictional.

== Copyright ==

Asahi Gakuen is distributed under the terms of the GNU GPL v2 or later.
Fonts: Zen Old Mincho (OFL-1.1, Latin subsets) and Figtree (OFL-1.1, Latin subset). License texts: assets/fonts/OFL-ZenOldMincho.txt, assets/fonts/OFL-Figtree.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic high-key photographs (85mm f/2.8, softbox fill, near-white ground, graded toward forget-me-not #7DB9DE), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/student-a-cutout.webp (portrait index: transparent cut-out portrait of a student; also on inner page heads)
- assets/images/teacher-a-cutout.webp (portrait index and interview: transparent cut-out portrait of a literature teacher)
- assets/images/student-b-cutout.webp (portrait index: transparent cut-out portrait of a student with a football)
- assets/images/teacher-b-cutout.webp (portrait index: transparent cut-out portrait of a science teacher)
- assets/images/campus.webp (inner pages: a bright school atrium)
- assets/images/classroom.webp (school year and inner pages: a bright classroom)
- assets/images/demo/campus.webp (sample post image)
- assets/images/demo/classroom.webp (sample post image)
