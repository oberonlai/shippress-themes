=== Waza College ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Waza College — a theme for a vocational training college, built as an audience gateway under a formal centred white header: the college name in the centre, the Apply button at the right and the menu centred on a second row. Rust asagi (#6699A1) is the main colour: the path detail section, the apply steps, every page head and the mobile menu are rust-asagi fields in ink type. The front page opens on white with one centred headline and three equal framed panels (from high school, changing career, for employers), each with a transparent cut-out photograph (toolbox, laptop, hard hat) breaking out of the frame top edge; then one short two-column section per path, twelve courses in an asymmetric masonry with a field filter, outcomes with three large figures and partner employers, a dated list of open days and three application steps in one row. Photographs are realistic high-key images (85mm, softbox light, near-white backgrounds, graded toward rust asagi). BIZ UDPGothic for headings, Manrope for text and figures. Sample content in English. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download waza-college.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/waza-college.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Waza College.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content is in English (demo-content.json); theme strings fall back to English on sites in other languages.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Waza College: college board": this week's survey slots, office hours, open site days, enquiry reply time and recruiting.
- "Waza College: college details" (hours, site surveys, address, phone, email): the footer and Apply now.
- "Waza College: course fees": Services and Apply now.

The company, its people, address, telephone number and figures are fictional.

== Copyright ==

Waza College is distributed under the terms of the GNU GPL v2 or later.
Fonts: BIZ UDPGothic (OFL-1.1), Regular and Bold Latin subsets; Manrope (OFL-1.1), the unmodified variable font file. License texts: assets/fonts/OFL-BIZUDPGothic.txt, assets/fonts/OFL-Manrope.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic high-key photographs (85mm, softbox light, near-white backgrounds, graded toward rust asagi), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/campus.webp (about page: the college building)
- assets/images/workshop.webp (course pages and course masonry: an electrical workshop)
- assets/images/bench.webp (course masonry: measuring timber)
- assets/images/lab.webp (course masonry and pages: a computer lab)
- assets/images/openday.webp (open days: visitors in the atrium)
- assets/images/toolbox-cutout.webp (hero panel and course masonry: transparent cut-out that breaks out of the frame)
- assets/images/laptop-cutout.webp (hero panel and course masonry: transparent cut-out that breaks out of the frame)
- assets/images/helmet-cutout.webp (hero panel, page heads and course masonry: transparent cut-out that breaks out of the frame)
- assets/images/demo/workshop.webp (sample post image)
- assets/images/demo/bench.webp (sample post image)
- assets/images/demo/openday.webp (sample post image)
