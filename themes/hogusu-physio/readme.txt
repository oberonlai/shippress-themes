=== Hogusu Physio ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A clean, serene and modern theme for a small neighbourhood physiotherapy clinic: sea-glass mist pages, a pale wash for panels, deep sea ink for text and one muted deep teal for lines, dots and numerals; Wix Madefor Display over Wix Madefor Text. The hero and chapter pictures are continuous single-line drawings (raster WebP). A two-tier header puts today's hours and the phone number in a utility strip above the main bar with a 'Book an assessment' pill. The home page is a single-column long read that walks through one first appointment - assessment, hands-on, exercises, follow-up - then fees, the team and the journal. The footer is a quiet 'Book an assessment' band over the clinic details and a small sitemap. With treatments, your first visit, fees, team, contact, newsletter and journal. Hours, phone and address are edited once (Appearance > Clinic details); the locator card and the fees are synced patterns.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hogusu-physio.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hogusu-physio.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hogusu Physio.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The opening hours, phone number, email and address are kept in one place: Appearance > Clinic details (inc/clinic-info.php). The "Clinic details" block shows them in the utility strip (today's hours, in the site's own timezone, and the phone), in the locator card, on the Contact page and in the footer. The locator card (map, address, parking, station, today's hours) and the fees table are two synced patterns, "Hogusu Physio: locator card" and "Hogusu Physio: fees" (Appearance > Editor > Patterns), created once by inc/shared-info.php.

The booking request is a button that opens an email with the subject "Booking request"; change the address on the Contact page. The clinic, the physiotherapists, the town, the address, telephone numbers and prices are fictional.

== Changelog ==

= 1.0.1 =
* "One appointment, in four quiet chapters" (home) and the first-visit steps: the intro is centred and capped at about 40rem; every chapter is one row - the number circle on a vertical dotted rail, a fixed-ratio drawing (3:2, cropped to fit, so any replacement picture keeps the row tidy) and the text; one column on phones with the rail kept on the left. The dotted line no longer runs across the drawings.
* Chapter 4 (Follow-up) gets its own line drawing (assets/images/follow-up.webp); the drawings' alt text now describes what they show.

= 1.0.0 =
* Initial release.

== Copyright ==

Hogusu Physio WordPress Theme, Copyright 2026 ShipPress contributors.
Hogusu Physio is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Wix Madefor Display
Files: assets/fonts/WixMadeforDisplay[wght].ttf
Copyright 2023 The Wix Madefor Project Authors (https://github.com/wix/wixmadefor)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-WixMadeforDisplay.txt, https://openfontlicense.org); no Reserved Font Name.
The unmodified upstream variable font from https://github.com/google/fonts/tree/main/ofl/wixmadefordisplay (weights 400-800), bundled so the theme makes no third-party requests.

Wix Madefor Text
Files: assets/fonts/WixMadeforText[wght].ttf
Copyright 2023 The Wix Madefor Project Authors (https://github.com/wix/wixmadefor)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-WixMadeforText.txt, https://openfontlicense.org); no Reserved Font Name.
The unmodified upstream variable font from https://github.com/google/fonts/tree/main/ofl/wixmadefortext (weights 400-800), bundled so the theme makes no third-party requests.

= Images =

assets/images/hero.webp - continuous single-line drawing, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/hero.webp - continuous single-line drawing, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/assessment.webp - continuous single-line drawing, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/assessment.webp - continuous single-line drawing, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/hands-on.webp - continuous single-line drawing, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/hands-on.webp - continuous single-line drawing, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/exercises.webp - continuous single-line drawing, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/exercises.webp - continuous single-line drawing, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/follow-up.webp - continuous single-line drawing, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/follow-up.webp - continuous single-line drawing, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
