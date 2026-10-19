=== Kakehashi Association ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kakehashi Association — a theme for a community support association (home visits, a food and clothing bank, language help, an open table), built around a notice feed: a formal white top header with the association's name, the office hours and a Become a member button, the main menu in one row on the right. Nadeshiko pink (#DC9FB4) is the main colour: the full-height purpose banner on the left of the first screen, the take-part field, the page heads and the mobile menu are pink. The front page opens on a narrow vertical banner with the association's purpose in one Shippori Mincho sentence and a cut-out photograph of a paper-cut sculpture (two hands holding a small bridge) that breaks out over the banner edge; beside it, the notice board: category tabs (All, Events, Support, Volunteers, Reports) that filter seven dated notice rows without JavaScript, and Become a member / Donate links. Below: the pinned important notice in a pale box, six programmes as a two-column text index, this month's events as a date list with large day numbers, three ways to take part on a pink field where cut-out clasped hands break over the top edge, a documents download list and a short about with a collage of three overlapping photographs. Photographs are realistic film-grain images (35mm look, 50mm f/2, natural side light, graded toward nadeshiko pink). Shippori Mincho B1 for headings, Source Sans 3 for text. Sample content in English. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kakehashi-association.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kakehashi-association.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kakehashi Association.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notices with four categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content is in English (demo-content.json); theme strings fall back to English on sites in other languages.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Kakehashi Association: association board": office status, hours, food bank days, home visit replies and the next volunteer orientation.
- "Kakehashi Association: office details" (hours, drop-in, address, phone, email): the footer and Contact.
- "Kakehashi Association: membership": Programmes and Contact.

The association, its people, address, telephone number and figures are fictional.

== Copyright ==

Kakehashi Association is distributed under the terms of the GNU GPL v2 or later.
Fonts: Shippori Mincho B1 (OFL-1.1, Latin subset) and Source Sans 3 (OFL-1.1, Reserved Font Name "Source", Adobe's unmodified variable WOFF2). License texts: assets/fonts/OFL-ShipporiMinchoB1.txt, assets/fonts/OFL-SourceSans3.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic film-grain photographs (35mm look, 50mm f/2, natural side light, graded toward nadeshiko pink), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/bridge-cutout.webp (front page purpose banner and about collage: a paper-cut sculpture of two hands holding a bridge, transparent cut-out that breaks over the banner edge)
- assets/images/hands-cutout.webp (take-part field and page heads: transparent cut-out clasped hands that break over the field edge)
- assets/images/meeting.webp (about collage and inner pages: a residents meeting)
- assets/images/volunteers.webp (about collage and inner pages: volunteers sorting donations)
- assets/images/walk.webp (about collage and inner pages: a volunteer walking with an older neighbour)
- assets/images/demo/meeting.webp (sample post image)
- assets/images/demo/walk.webp (sample post image)
- assets/images/demo/volunteers.webp (sample post image)
