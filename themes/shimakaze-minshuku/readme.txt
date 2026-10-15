=== Shimakaze Minshuku ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A bright, woodblock-print hospitality theme for a six-room island guesthouse. Kobai plum pink (#E16B8C) fills the hero, every page head and the footer, with woodblock indigo bands, blush paper and plum ink text; Dela Gothic One for display over M PLUS 1p. The art is ukiyo-e woodblock raster illustration (the inn, the harbour, a tatami room, a dinner tray, the coast road), with the inn and the dinner tray as transparent cut-outs that break out of their frames. A full top header: a deep plum strip with a Book a room button, then the menu split into two halves either side of the centred inn name. The home page is a split screen: the plum field with the title and the cut-out inn crossing the split line beside a grid of rooms and plans with prices, then dinner on an indigo band, the synced rates card, the island and the journal. The rates card and the inn details are synced patterns edited in one place. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download shimakaze-minshuku.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/shimakaze-minshuku.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Shimakaze Minshuku.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, four journal posts with three categories and five tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php:
- "Shimakaze Minshuku: room rates": shown on the home page and the Rooms & rates page.
- "Shimakaze Minshuku: inn details" (check-in, address, phone, email): shown in the footer and on the Contact page.

The inn, the family, the island, address, telephone number and rates are fictional.

== Copyright ==

Shimakaze Minshuku is distributed under the terms of the GNU GPL v2 or later.
Fonts: Dela Gothic One (OFL-1.1) and M PLUS 1p (OFL-1.1), subset to Latin as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen, ukiyo-e woodblock print illustration style, released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the inn and the island are fictional). The two cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero-cutout.webp (home hero and The family: the inn as a transparent cut-out that breaks out of the plum field)
- assets/images/dinner-cutout.webp (home rooms grid and dinner band: the dinner tray as a transparent cut-out; journal)
- assets/images/sea-view.webp (home rooms grid and island section, Rooms, The island; journal)
- assets/images/room-tatami.webp (home rooms grid, Rooms, The island; journal)
- assets/images/cycling-path.webp (home rooms grid, Rooms, The island; journal)
- assets/images/demo/hero-cutout.webp (demo import copy of assets/images/hero-cutout.webp)
- assets/images/demo/dinner-cutout.webp (demo import copy of assets/images/dinner-cutout.webp)
- assets/images/demo/sea-view.webp (demo import copy of assets/images/sea-view.webp)
- assets/images/demo/room-tatami.webp (demo import copy of assets/images/room-tatami.webp)
- assets/images/demo/cycling-path.webp (demo import copy of assets/images/cycling-path.webp)
