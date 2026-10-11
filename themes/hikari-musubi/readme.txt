=== Hikari Musubi ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, elegant theme for small wedding planners: an ivory ground with blush bands, champagne hairlines and one mauve-brown accent, Gloock headings and Public Sans text, a mizuhiki knot divider, a header with only a Menu button that opens a full-screen menu, a single-column long-read home page and a one-line footer; with about, plans and prices, a gallery, venues, a journal, a newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hikari-musubi.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hikari-musubi.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hikari Musubi.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample journal posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The studio's address, hours, phone number and email are kept in one place: the synced pattern "Hikari Musubi: studio address, hours, phone and email" (Appearance > Editor > Patterns). The footer of every page, the Contact page and the Venues page show that one pattern, so you edit it once. The three plans with their prices work the same way: the synced pattern "Hikari Musubi: plans and prices" is shown on the home page and the Plans page (inc/shared-info.php creates both the first time the theme is activated, and never twice).

The header's Menu button opens the core Navigation block's full-screen menu: focus stays inside it while it is open, Escape closes it and returns focus to the button, and a small script (assets/js/menu.js) keeps the button's aria-expanded state in step.

The sample studio, its planners, venues, address, telephone number and prices are fictional. The contact and newsletter forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Hikari Musubi WordPress Theme, Copyright 2026 ShipPress contributors.
Hikari Musubi is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Gloock
Files: assets/fonts/gloock-regular-latin.woff2
Copyright 2022 The Gloock Project Authors (https://github.com/duartp/gloock)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Gloock.txt, https://openfontlicense.org)
Latin subset (WOFF2) of the official file in https://github.com/google/fonts/tree/main/ofl/gloock, bundled so the theme makes no third-party requests.

Public Sans
Files: assets/fonts/public-sans-variable-latin.woff2
Copyright 2015 The Public Sans Project Authors (https://github.com/uswds/public-sans)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-PublicSans.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 100-900) of the official file in https://github.com/google/fonts/tree/main/ofl/publicsans, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the people shown are AI-generated, seen from behind, and do not depict real people, and every studio, venue and person the theme names is fictional).
- assets/images/bouquet.jpg
- assets/images/couple.jpg
- assets/images/garden.jpg
- assets/images/hall.jpg
- assets/images/hero.jpg
- assets/images/mizuhiki.jpg
- assets/images/rings.jpg
- assets/images/table.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/bouquet.jpg
- assets/images/demo/couple.jpg
- assets/images/demo/garden.jpg
- assets/images/demo/hall.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/mizuhiki.jpg
- assets/images/demo/rings.jpg
- assets/images/demo/table.jpg

The mizuhiki knot divider is a simple CSS/SVG line drawing made for this theme (GPL-2.0-or-later).
