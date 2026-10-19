=== Tanba Law Office ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A law office theme in old purple: a formal white top header with an ink side rail; the first screen sets a tall old-purple banner with the firm line and a low-key office photograph beside a narrow centred column with a matter search, six filter chips and the first rows of a numbered practice index, with a cut-out desk lamp breaking over it; then the full eighteen-row index in four groups, three ways to engage, sectors, four partners and a contact strip. English sample content.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download tanba-law.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tanba-law.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tanba Law Office.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with four categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content is in English (demo-content.json); theme strings fall back to English on sites in other languages.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Tanba Law Office: reception": today, opening hours, new matters, replies and closures.
- "Tanba Law Office: office details" (hours, drop-in, address, phone, email): the footer and Contact.
- "Tanba Law Office: fees": Practice areas and Contact.

The firm, its people, address, telephone number, matters and fees are fictional.

== Copyright ==

Tanba Law Office is distributed under the terms of the GNU GPL v2 or later.
Fonts: Shippori Mincho (OFL-1.1, Latin subsets) and Hanken Grotesk (OFL-1.1, Latin subsets). License texts: assets/fonts/OFL-ShipporiMincho.txt, assets/fonts/OFL-HankenGrotesk.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic low-key photographs (50mm f/1.8, single warm window light, deep shadow, fine grain, graded toward old purple #895B8A), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/lamp-cutout.webp (first screen: transparent cut-out desk lamp breaking over the practice index)
- assets/images/partner-a-cutout.webp (partners: transparent cut-out portrait; also on inner page heads)
- assets/images/partner-b-cutout.webp (partners: transparent cut-out portrait; also on inner page heads)
- assets/images/partner-c-cutout.webp (partners: transparent cut-out portrait)
- assets/images/partner-d-cutout.webp (partners: transparent cut-out portrait)
- assets/images/office.webp (first screen banner and inner pages: a walnut desk in window light)
- assets/images/meeting.webp (sectors and inner pages: a dark meeting room)
- assets/images/demo/meeting.webp (sample post image)
- assets/images/demo/office.webp (sample post image)
