=== Engawa Works ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, geometric business theme for a small neighbourhood coworking space in an old timber house with a veranda (engawa) over a courtyard. Pale concrete, soft grey and ink, with a muted ochre used only for rules and registration marks and a deeper ochre for links and buttons. A two-tier header: a slim utility strip with today's opening hours and an Open now / Opens 8:00 / Closed today chip worked out on the server from the site's timezone, the address and a Book a tour link; below it the Geologica wordmark and the menu (on phones the wordmark, the chip and a Menu button on one line). The home page is a bento grid of the space right under a short title: desks, quiet room, veranda, kitchen, events and plans as concrete cards on one hairline grid with ochre corner marks; then a word from the host, the synced membership plans with an editable Most chosen badge and the journal. The footer opens with a slow, pauseable "today at the space" ticker in Fragment Mono (static for reduced motion), then the space details and links. A thin ochre engawa rail with joints divides sections. With The space, Plans, Events, Tour booking (a request form that composes an email), Journal, Newsletter and Contact. Hours, address, phone and email are edited once in Appearance > Space details; the plans are one synced pattern. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download engawa-works.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/engawa-works.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Engawa Works.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each:
- Appearance > Space details (inc/space-info.php): opening hours for each weekday, the closed day, a note, address, how to get there, telephone, email and an optional map link. The "Space details" block (engawa-works/space-info) shows them in the header's utility strip (today's hours and the Open now / Opens 8:00 / Closed today chip), as the first item of the footer's "today at the space" ticker, in the line under the home title, in the footer address card and on the Plans, Tour booking and Contact pages. "Now" is worked out on the server in the site's timezone (Settings > General), never from the visitor's clock.
- The synced pattern "Engawa Works: membership plans" (Appearance > Editor > Patterns), created once by inc/shared-info.php: Day pass, Desk, Studio desk and Team table with prices and what each includes; the "Most chosen" badge is ordinary editable text. Shown on the home page, the Plans page and (short, without the lists) on Tour booking.

The other ticker items are a plain list in the footer template part (Appearance > Editor > Patterns > Footer). The ticker moves slowly only with JavaScript and when the visitor has not asked for reduced motion; it pauses on hover or focus and has a Pause button. Otherwise it is a still one-line list.

The Tour booking and Contact forms need no backend: assets/js/forms.js opens the visitor's email app with the request written out, addressed to the email in Space details; without JavaScript the forms stay hidden and the address card does the job. The space, hosts, members, district, city, address, telephone numbers, events and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Engawa Works WordPress Theme, Copyright 2026 ShipPress contributors.
Engawa Works is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Geologica
Copyright 2020 The Geologisk Project Authors (https://github.com/monokromskriftforlag/geologisk)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Geologica.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/geologica (no Reserved Font Name; variable, pinned CRSV/SHRP/slnt 0, weights 300-500, subset to Latin as WOFF2)

Fragment Mono
Copyright 2022 The Fragment-Mono Project Authors (https://github.com/weiweihuanghuang/fragment-mono)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-FragmentMono.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/fragmentmono (no Reserved Font Name; Regular, subset to Latin as WOFF2)

Images

All photographs in assets/images/ (and their copies in assets/images/demo/) were AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/bulletin.jpg
- assets/images/courtyard.jpg
- assets/images/desk-row.jpg
- assets/images/detail-wood.jpg
- assets/images/event-hall.jpg
- assets/images/hero-space.jpg
- assets/images/host.jpg
- assets/images/kitchen.jpg
- assets/images/lounge.jpg
- assets/images/member.jpg
- assets/images/plans-desk.jpg
- assets/images/quiet-room.jpg
- assets/images/street.jpg
- assets/images/veranda.jpg
- assets/images/demo/bulletin.jpg
- assets/images/demo/courtyard.jpg
- assets/images/demo/desk-row.jpg
- assets/images/demo/detail-wood.jpg
- assets/images/demo/event-hall.jpg
- assets/images/demo/hero-space.jpg
- assets/images/demo/host.jpg
- assets/images/demo/kitchen.jpg
- assets/images/demo/lounge.jpg
- assets/images/demo/member.jpg
- assets/images/demo/plans-desk.jpg
- assets/images/demo/quiet-room.jpg
- assets/images/demo/street.jpg
- assets/images/demo/veranda.jpg

The engawa rail, the corner marks and the ticker dots are CSS made for this theme (GPL-2.0-or-later).
