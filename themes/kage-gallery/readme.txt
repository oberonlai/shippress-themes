=== Kage Gallery ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, typographic portfolio theme for a small contemporary art gallery showing painting, works on paper and small sculpture. Wall white and stone grey, charcoal text and a muted bronze kept to frames and hairlines. A white-cube bar with only the wordmark and a Menu button opens a full-screen menu on the pale wall. The home page sets the current exhibition title very large over white space, then the dates and artist, the wall text, a calm row of works with wall labels, the next exhibitions, the visit details and the journal. The footer is one quiet hairline row. Gelasio and Inter Tight. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kage-gallery.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kage-gallery.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kage Gallery.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images (Exhibitions, Artists, Visit, About, Newsletter, Contact), six journal posts with three categories (Exhibition notes, Studio visits, Gallery diary) and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns), created once by inc/shared-info.php:
- "Kage Gallery: visit details" (address, opening hours, closing days, telephone, email, social handle). Shown in the full-screen menu, the one-line footer, the home page, Visit and Contact.
- "Kage Gallery: current exhibition" (the "Now on view" badge, which is ordinary editable text, the title, dates, artist and wall text). The oversized title on the home page and the head of Exhibitions.
- "Kage Gallery: upcoming exhibitions" (dates, titles, artists and a short note). Short on the home page, in full on Exhibitions.

The full-screen menu is the core Navigation block's overlay (focus trap, Escape closes it). A small script (assets/js/kage.js) moves the visit details into it, keeps the Menu button's aria-expanded in step and turns the Contact form into an email draft in the visitor's own email app; nothing is sent from the site. The gallery, curator, artists, works, streets, city, address and telephone number are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Kage Gallery WordPress Theme, Copyright 2026 ShipPress contributors.
Kage Gallery is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Gelasio
Copyright 2022 The Gelasio Project Authors (https://github.com/SorkinType/Gelasio)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Gelasio.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/gelasio (no Reserved Font Name; weights 400-600 roman and 400-500 italic, subset to Latin as WOFF2)

Inter Tight
Copyright 2022 The Inter Project Authors (https://github.com/rsms/inter)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-InterTight.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/intertight (no Reserved Font Name; variable weight, subset to Latin as WOFF2)

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/artist.jpg
- assets/images/artists-studio.jpg
- assets/images/artwork-01.jpg
- assets/images/artwork-02.jpg
- assets/images/artwork-03.jpg
- assets/images/artwork-04.jpg
- assets/images/artwork-05.jpg
- assets/images/artwork-06.jpg
- assets/images/curator.jpg
- assets/images/detail-texture.jpg
- assets/images/gallery-interior.jpg
- assets/images/hero-wall.jpg
- assets/images/opening-night.jpg
- assets/images/street.jpg
- assets/images/visit-desk.jpg
- assets/images/visit-map.jpg
- assets/images/demo/artist.jpg
- assets/images/demo/artists-studio.jpg
- assets/images/demo/artwork-01.jpg
- assets/images/demo/artwork-02.jpg
- assets/images/demo/artwork-03.jpg
- assets/images/demo/artwork-04.jpg
- assets/images/demo/artwork-05.jpg
- assets/images/demo/artwork-06.jpg
- assets/images/demo/curator.jpg
- assets/images/demo/detail-texture.jpg
- assets/images/demo/gallery-interior.jpg
- assets/images/demo/hero-wall.jpg
- assets/images/demo/opening-night.jpg
- assets/images/demo/street.jpg
- assets/images/demo/visit-desk.jpg
- assets/images/demo/visit-map.jpg

The shadow edges, hairlines and the Menu mark are CSS, self-made, GPL-2.0-or-later.
