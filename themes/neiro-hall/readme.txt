=== Neiro Hall ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

An elegant, restrained and cinematic theme for an intimate 180-seat listening hall: smoke-stone ground, paper ticket stubs, charcoal "hall lights down" bands and one muted rust accent; Space Grotesk, Inter and IBM Plex Mono; a slim bar docked to the bottom of the screen; the programme as ticket stubs filtered by genre and month; a programme-booklet colophon footer; with calendar, artists, venue, tickets, about, journal, newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download neiro-hall.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/neiro-hall.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Neiro Hall.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Three things are kept in one place, as synced patterns (Appearance > Editor > Patterns), created by inc/hall-info.php the first time the theme is activated (never twice):
- "Neiro Hall: box office hours, address, telephone and email", shown in the footer colophon and on the Venue, Tickets and Contact pages.
- "Neiro Hall: ticket prices" (the tiers, the "Best listening" badge and the prices), shown on the home and Tickets pages.
- "Neiro Hall: programme (ticket stubs)", shown on the home and Calendar pages.

The genre and month filters (assets/js/programme.js, no build step) are built from the stubs: the genre line and the month on each stub. Edit a stub and the filters follow. Without JavaScript no filter bar is drawn and every concert shows.

The newsletter form is plain HTML: connect its action to your own email service. The hall, artists, concerts, people, address, telephone number and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Neiro Hall WordPress Theme, Copyright 2026 ShipPress contributors.
Neiro Hall is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Space Grotesk
Copyright 2020 The Space Grotesk Project Authors (https://github.com/floriankarsten/space-grotesk)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-SpaceGrotesk.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/spacegrotesk

Inter
Copyright 2020 The Inter Project Authors (https://github.com/rsms/inter)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Inter.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/inter

IBM Plex Mono
Files: assets/fonts/ibm-plex-mono-regular-latin1.woff2 (IBM's own Latin-1 split WOFF2, not modified)
Copyright 2017 IBM Corp. with Reserved Font Name "Plex"
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-IBMPlexMono.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/ibmplexmono

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/artist1.jpg
- assets/images/artist2.jpg
- assets/images/demo/artist1.jpg
- assets/images/demo/artist2.jpg
- assets/images/demo/foyer.jpg
- assets/images/demo/hall.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/strings.jpg
- assets/images/demo/vinyl.jpg
- assets/images/foyer.jpg
- assets/images/hall.jpg
- assets/images/hero.jpg
- assets/images/strings.jpg
- assets/images/vinyl.jpg

The ticket-stub perforations and notches are drawn in CSS.
