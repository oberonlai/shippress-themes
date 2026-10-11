=== Hikari App ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, restrained theme for a small software product or SaaS: washi off-white ground, deep ink-indigo type and bands, pale lavender-grey panels and one desaturated dusk violet for small marks; Sora over Inter; lantern-light glows drawn in CSS; a floating pill navigation; a bento home page of features; a sitemap footer; features, pricing, changelog, about, journal, newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hikari-app.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hikari-app.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hikari App.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The company address, email and support hours are kept in one place: the synced pattern "Hikari App: company address, email and support hours" (Appearance > Editor > Patterns), shown in the footer and on the Contact page. The three plans with their prices and the "Most chosen" badge are the synced pattern "Hikari App: plans, prices and the Most chosen badge", shown on the home and Pricing pages (inc/app-info.php creates both the first time the theme is activated, and never twice). The changelog entries are ordinary content in the Changelog page: duplicate the first entry to add a release.

The newsletter form is plain HTML: connect its action to your own email service. Hikari Labs, its people, customers, address and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Hikari App WordPress Theme, Copyright 2026 ShipPress contributors.
Hikari App is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Sora
Copyright 2019 The Sora Project Authors (https://github.com/sora-xor/sora-font)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Sora.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/sora

Inter
Copyright 2020 The Inter Project Authors (https://github.com/rsms/inter)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Inter.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/inter

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/demo/founder.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/lantern.jpg
- assets/images/demo/laptop.jpg
- assets/images/demo/team.jpg
- assets/images/demo/workspace.jpg
- assets/images/founder.jpg
- assets/images/hero.jpg
- assets/images/lantern.jpg
- assets/images/laptop.jpg
- assets/images/team.jpg
- assets/images/workspace.jpg

The lantern-light glows, the daily-page mock-up and the label dots are drawn in CSS.
