=== Koke Garden ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, organic and editorial business theme for a small Japanese garden design studio (two garden designers and a stone setter) that designs and keeps moss, stone and gravel gardens. Pale moss paper, sage stone, moss and deep moss ink, with raked-gravel line textures and line-drawn plan sketches. A quiet bar with only the wordmark and a Menu button opens a full-screen menu on pale moss paper. The home page sets a short statement over a garden photo, then the projects as a mosaic of photo and plan cards, the seasonal care plans, the approach and the journal. The footer is a book colophon with garden credits. Alegreya over Alegreya Sans. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download koke-garden.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/koke-garden.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Koke Garden.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images (Projects with six garden projects as child pages, Seasonal care, About, Newsletter, Contact), six journal posts with three categories (Moss, Stone, Seasons) and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns), created once by inc/shared-info.php:
- "Koke Garden: studio details and visiting hours" (booking line, address, email, telephone, visiting hours). Shown in the full-screen menu, the footer colophon and the Contact page.
- "Koke Garden: seasonal care plans and prices" (three plans with "from" prices and the "Most chosen" badge, which is ordinary editable text). Shown on the home page and the Seasonal care page.

The full-screen menu is the core Navigation block's overlay (focus trap, Escape closes it). A small script (assets/js/menu.js) moves the studio details into it and keeps the Menu button's aria-expanded in step. The Contact page enquiry opens the visitor's email app; nothing is sent from the site. The studio, gardeners, gardens, address, telephone numbers and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Koke Garden WordPress Theme, Copyright 2026 ShipPress contributors.
Koke Garden is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Alegreya
Copyright 2011 The Alegreya Project Authors (https://github.com/huertatipografica/Alegreya)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Alegreya.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/alegreya (no Reserved Font Name; weights 400-700, roman and italic, subset to Latin as WOFF2)

Alegreya Sans
Copyright 2013 The Alegreya Sans Project Authors (https://github.com/huertatipografica/Alegreya-Sans)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-AlegreyaSans.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/alegreyasans (no Reserved Font Name; Regular and Medium, subset to Latin as WOFF2)

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/demo/gravel-rake.jpg
- assets/images/demo/hero-moss-garden.jpg
- assets/images/demo/moss-closeup.jpg
- assets/images/demo/project-courtyard.jpg
- assets/images/demo/project-entry-gate.jpg
- assets/images/demo/project-riverside.jpg
- assets/images/demo/project-rooftop.jpg
- assets/images/demo/project-tea-garden.jpg
- assets/images/demo/seasonal-autumn.jpg
- assets/images/demo/seasonal-spring.jpg
- assets/images/demo/stone-detail.jpg
- assets/images/demo/studio-bench.jpg
- assets/images/demo/team-hands.jpg
- assets/images/gravel-rake.jpg
- assets/images/hero-moss-garden.jpg
- assets/images/moss-closeup.jpg
- assets/images/project-courtyard.jpg
- assets/images/project-entry-gate.jpg
- assets/images/project-riverside.jpg
- assets/images/project-rooftop.jpg
- assets/images/project-tea-garden.jpg
- assets/images/seasonal-autumn.jpg
- assets/images/seasonal-spring.jpg
- assets/images/stone-detail.jpg
- assets/images/studio-bench.jpg
- assets/images/team-hands.jpg

Plan sketches (inline SVG drawn by inc/projects.php), raked-gravel textures and stone-dot bullets (CSS gradients) are self-made, GPL-2.0-or-later.
