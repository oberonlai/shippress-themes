=== Minato Business Hotel ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, photograph-led block theme for an independent business hotel near a station: linen-white pages, stone panels, ink text, one warm charcoal band and a single suo rose accent; Cormorant with Jost; a full-height photograph of a quiet room at first light with the headline on a paper card, an arrival strip (check-in, breakfast, the walk from the station), one night at the hotel as a masonry of timed photographs, four room cards with their specifications, the walk from the station with walking minutes, an essay on long stays and company accounts, guests' words, the journal and a plain closing to book direct.

== Description ==

A WordPress block theme from ShipPress. See README.md for the design notes, templates and patterns, and brand.md for the fictional hotel the sample content is written for.

The hotel details (address, front desk, telephone, email, getting here) are kept in ONE place: a synced pattern under Appearance > Editor > Patterns. The footer, Rooms & rates and Contact pages only reference it, so a change made once shows everywhere. It is created on activation (inc/shared-info.php) from inc/info/office.html and never created twice.

== Installation ==

1. Download minato-business-hotel.zip from the theme's release.
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Minato Business Hotel.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The enquiry and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Minato Business Hotel WordPress Theme, Copyright 2026 ShipPress contributors.
Minato Business Hotel is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Cormorant
Files: assets/fonts/cormorant-variable-latin.woff2, assets/fonts/cormorant-italic-variable-latin.woff2
Copyright 2015 The Cormorant Project Authors (github.com/CatharsisFonts/Cormorant)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Cormorant.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subsets (WOFF2) of the variable fonts in https://github.com/google/fonts/tree/main/ofl/cormorant, bundled so the theme makes no third-party requests.

Jost
Files: assets/fonts/jost-variable-latin.woff2
Copyright 2020 The Jost Project Authors (https://github.com/indestructible-type/Jost)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Jost.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (WOFF2) of the variable font in https://github.com/google/fonts/tree/main/ofl/jost.

Noto Serif TC
Files: assets/fonts/noto-serif-tc-zh-tw-400.woff2
Copyright 2012 Google Inc. All Rights Reserved.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifTC.txt, https://openfontlicense.org).
Regular 400 from https://github.com/google/fonts/tree/main/ofl/notoseriftc, subset with fontTools (WOFF2) to the characters of the Traditional Chinese sample text; never a Japanese font.

Noto Serif JP
Files: assets/fonts/noto-serif-jp-400-ja.woff2
Copyright 2012 Google Inc. All Rights Reserved.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifJP.txt, https://openfontlicense.org).
Regular 400 from https://github.com/google/fonts/tree/main/ofl/notoserifjp, subset with fontTools (WOFF2) to the characters of the Japanese sample text.

= Images =

All photographs were AI-generated for this theme with one shared photographic style (high-key documentary photograph, 28mm lens, bright soft natural daylight, white linen, pale oak and warm stone greys with faint muted dusty rose) and are released under GPL-2.0-or-later / CC0. They show no real people, places or brands. The demo/ copies are imported into the Media Library as featured images.

assets/images/bathroom.webp, assets/images/demo/bathroom.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/breakfast-plate.webp, assets/images/demo/breakfast-plate.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/breakfast-room.webp, assets/images/demo/breakfast-room.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/corner-studio.webp, assets/images/demo/corner-studio.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/harbour-evening.webp, assets/images/demo/harbour-evening.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/hero-room-morning.webp, assets/images/demo/hero-room-morning.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/key-card-hand.webp, assets/images/demo/key-card-hand.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/laundry-shelves.webp, assets/images/demo/laundry-shelves.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/lobby-front-desk.webp, assets/images/demo/lobby-front-desk.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/lounge-work.webp, assets/images/demo/lounge-work.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/luggage-corridor.webp, assets/images/demo/luggage-corridor.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/portrait-breakfast.webp, assets/images/demo/portrait-breakfast.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/portrait-manager.webp, assets/images/demo/portrait-manager.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/portrait-night.webp, assets/images/demo/portrait-night.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/room-desk.webp, assets/images/demo/room-desk.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/room-twin.webp, assets/images/demo/room-twin.webp: AI-generated for this theme, GPL-2.0-or-later / CC0
assets/images/station-walk.webp, assets/images/demo/station-walk.webp: AI-generated for this theme, GPL-2.0-or-later / CC0

== Changelog ==

= 1.1.1 =
* Updated theme files (functions.php, inc/editor-lang.php).

= 1.1.0 =
* Front page layout redone: photograph with a paper card, arrival strip, one night as a photo masonry, four room cards, the walk from the station, a long-stay essay, guests' words, journal and book direct. Same palette, fonts and photographs.

= 1.0.0 =
* First release.
