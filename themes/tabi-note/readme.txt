=== Tabi Note ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, refined theme for small walking-tour and slow-travel agencies: a mist-mint ground with paper cards, deep ink text, deep teal headings and dark bands, and tiny amber stamp marks; Klee One handwritten-feel headings used sparingly over Noto Sans text; a two-tier header (a quiet note strip above the wordmark and menu); a home page that opens on a stamped route map with the stops of every journey; journeys with days, difficulty and prices, a day-by-day sample itinerary, the guides, a journal, a seasonal letter and an enquiry form; a deep-teal footer with a small street-map card beside the office details. The office details and the journeys with their prices are each edited in one place.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download tabi-note.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tabi-note.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tabi Note.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample journal posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The office address, opening hours, phone number and email are kept in one place: the synced pattern "Tabi Note: office address, hours, phone and email" (Appearance > Editor > Patterns), shown in the footer of every page and on the Contact page. The six journeys with their days, difficulty and prices, including the "Most walked" and "New this autumn" badges, work the same way: the synced pattern "Tabi Note: journeys with days, difficulty and prices" is shown on the home page and the Journeys page (inc/shared-info.php creates both the first time the theme is activated, and never twice).

The sample agency, its guides, inns, address, telephone number and prices are fictional. The route map on the home page is a stylised drawing, not a real map. The enquiry and newsletter forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Tabi Note WordPress Theme, Copyright 2026 ShipPress contributors.
Tabi Note is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Klee One
Files: assets/fonts/klee-one-regular-latin.woff2, assets/fonts/klee-one-semibold-latin.woff2
Copyright 2020 The Klee Project Authors (https://github.com/fontworks-fonts/Klee)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-KleeOne.txt, https://openfontlicense.org)
Latin subset (WOFF2) of the official files in https://github.com/google/fonts/tree/main/ofl/kleeone (no Reserved Font Name), bundled so the theme makes no third-party requests.

Noto Sans
Files: assets/fonts/noto-sans-variable-latin.woff2
Copyright 2022 The Noto Project Authors (https://github.com/notofonts/latin-greek-cyrillic)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSans.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 300-700, normal width) of the official file in https://github.com/google/fonts/tree/main/ofl/notosans (no Reserved Font Name), bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, brands or organisations; the person shown is AI-generated and does not depict a real person, and every agency, guide and inn the theme names is fictional).
- assets/images/forest-trail.jpg
- assets/images/guide-walk.jpg
- assets/images/hero-coast.jpg
- assets/images/islands.jpg
- assets/images/local-train.jpg
- assets/images/old-inn.jpg
- assets/images/trail-lunch.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/forest-trail.jpg
- assets/images/demo/guide-walk.jpg
- assets/images/demo/hero-coast.jpg
- assets/images/demo/islands.jpg
- assets/images/demo/local-train.jpg
- assets/images/demo/old-inn.jpg
- assets/images/demo/trail-lunch.jpg

The route map, the footer street map and the stamp marks are simple SVG/CSS line drawings made for this theme (same license as the theme).

screenshot.png: made from the theme's own pages (same license as the theme).

== Changelog ==

= 1.0.1 =
* Home: the opening title and route map now line up exactly with the header on desktop (they ran about 56 px wider on each side).
* Journeys, Sample itinerary, Contact, Journal, archive, search and 404 pages: the page title block and the journal list now start at the same left edge as the header and the sections below, instead of sitting in a narrower centred column. Titles and intro text keep a comfortable reading width.

= 1.0.0 =
* First release.
