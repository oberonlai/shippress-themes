=== Sumai Realty ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A trustworthy, data-first theme for estate agents and letting offices, drawn like an architect's sheet: cool paper white, slate and one brass line, Space Grotesk over IBM Plex Sans and floor-plan linework. The home page opens straight into a filter-first listings directory (Buy, Rent and New builds tabs, area and floor-area chips); every listing has its own sheet with a spec table and a floor plan; with about, journal, a newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download sumai-realty.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/sumai-realty.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Sumai Realty.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images (Listings with nine listing sheets as its child pages), sample journal posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text, the numbers and the pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The office's address, opening hours, phone number, email and social links are kept in one place: the synced pattern "Sumai Realty: office address, hours, phone, email and social links" (Appearance > Editor > Patterns). The utility strip at the top of every page, the footer's address card and the Contact page all show that one pattern (the strip shows it as one line and leaves the address out), so you edit it once. The listings directory works the same way: the synced pattern "Sumai Realty: listings directory (tabs, filters and every listing row)" is shown on the home page and the Listings page (inc/office-info.php creates both the first time the theme is activated, and never twice). Each row in the directory links to its listing sheet; when a price changes, change it in the directory and on the sheet. The social icons link to "#" until you add your own profile addresses.

The directory works without JavaScript: the tabs are links to the three lists, and the area and size chips are links (?area=kitamachi, ?size=m) that the server filters by (inc/directory.php). A row is filtered by its classes: sr-area-<area> and sr-size-<s|m|l> (s under 50 m², m 50 to 80 m², l over 80 m²); add a chip with the same value to filter by a new area. With JavaScript (assets/js/directory.js) the tabs become an accessible tab list (arrow keys, Home and End) that shows one list at a time with the number of homes on each tab, the chips filter in place and a status line says how many homes are shown.

The sample agency, its agents, areas, buildings, address, telephone number, licence number and prices are fictional. The contact and newsletter forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Sumai Realty WordPress Theme, Copyright 2026 ShipPress contributors.
Sumai Realty is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Space Grotesk
Files: assets/fonts/space-grotesk-variable.woff2
Copyright 2020 The Space Grotesk Project Authors (https://github.com/floriankarsten/space-grotesk)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-SpaceGrotesk.txt, https://openfontlicense.org)
The official variable SpaceGrotesk[wght].ttf from https://github.com/google/fonts/tree/main/ofl/spacegrotesk, repackaged as WOFF2 (all glyphs and the weight axis kept), bundled so the theme makes no third-party requests.

IBM Plex Sans
Files: assets/fonts/ibm-plex-sans-variable.woff2, assets/fonts/ibm-plex-sans-italic-variable.woff2
Copyright © 2017 IBM Corp. with Reserved Font Name "Plex"
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-IBMPlexSans.txt, https://openfontlicense.org)
The official variable IBMPlexSans[wdth,wght].ttf and IBMPlexSans-Italic[wdth,wght].ttf from https://github.com/google/fonts/tree/main/ofl/ibmplexsans, repackaged as WOFF2 with every glyph and both axes kept (not subset, as IBM Plex has a Reserved Font Name), bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the agent shown is AI-generated and does not depict a real person, and every agency, person and building the theme names is fictional). townhouse.jpg was cropped to its sharp centre.
- assets/images/agent.jpg
- assets/images/bedroom.jpg
- assets/images/hero.jpg
- assets/images/kitchen.jpg
- assets/images/living.jpg
- assets/images/tower.jpg
- assets/images/townhouse.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/agent.jpg
- assets/images/demo/bedroom.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/kitchen.jpg
- assets/images/demo/living.jpg
- assets/images/demo/tower.jpg
- assets/images/demo/townhouse.jpg

The plan mark (inline SVG paths in parts/header.html), the floor plans, plan frames, dimension lines and the footer's blueprint map drawn in style.css are original work written for this theme (same copyright and license).
