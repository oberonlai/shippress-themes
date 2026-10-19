=== Tsunagu Systems ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Tsunagu Systems — a theme for an IT services company (managed IT for small offices), built around plan comparison: a formal white top header with the company name, a status line and the Book a consultation button, and under it a 200px wisteria side rail holding the numbered main menu. Wisteria (#BBBCDE) is the main colour: the side rail runs the full page height, the hero grid floor, the recommended plan column, the onboarding field, the consultation band and every page head are wisteria. The front page opens on a two-line headline over a centred tabletop model of an office network (a transparent cut-out photograph that overflows its grid floor) with five numbered callouts whose hairline leaders run to labels in a right-hand column; then a three-plan comparison table with a sticky header, the five parts explained row by row, four onboarding steps in one line, six questions in an accordion, one client case and a one-line consultation band where a cut-out laptop breaks over the band edge. Photographs are realistic high-key images (85mm, softbox light, near-white backgrounds, graded toward wisteria). IBM Plex Sans JP for headings and text, IBM Plex Mono for labels, numbers and prices. Sample content in English. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download tsunagu-systems.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tsunagu-systems.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsunagu Systems.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content is in English (demo-content.json); theme strings fall back to English on sites in other languages.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Tsunagu Systems: service status": help desk status, hours, the patch window, reply time and onboarding slots.
- "Tsunagu Systems: office details" (hours, assessments, address, phone, email): the footer and Contact.
- "Tsunagu Systems: monthly fees": Services and Contact.

The company, its people, address, telephone number and figures are fictional.

== Copyright ==

Tsunagu Systems is distributed under the terms of the GNU GPL v2 or later.
Fonts: IBM Plex Sans JP and IBM Plex Mono (OFL-1.1, Reserved Font Name "Plex"), IBM's own unmodified split WOFF2 files. License texts: assets/fonts/OFL-IBMPlexSansJP.txt, assets/fonts/OFL-IBMPlexMono.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic high-key photographs (85mm, softbox light, near-white backgrounds, graded toward wisteria), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/system-cutout.webp (front page hero: a tabletop model of an office network, transparent cut-out that overflows its grid floor)
- assets/images/laptop-cutout.webp (consultation band and page heads: transparent cut-out laptop and switch that break over the band edge)
- assets/images/server-room.webp (services and about pages: a server room aisle)
- assets/images/office-team.webp (front page case and services: an engineer with office staff)
- assets/images/desk-setup.webp (services, about and newsletter pages: plugging in a network cable)
- assets/images/demo/server-room.webp (sample post image)
- assets/images/demo/desk-setup.webp (sample post image)
- assets/images/demo/office-team.webp (sample post image)
