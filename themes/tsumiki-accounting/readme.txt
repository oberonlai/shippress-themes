=== Tsumiki Accounting ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A precise, editorial and minimal theme for a small accounting practice: a cool paper ground, mist bands, ink-navy type and one slate accent for links and the tsumiki marks (three small stacked squares, like wooden blocks, opening every section label); Spectral over Commissioner, fees and dates in tabular figures. The header puts the wordmark top-left and the menu as a numbered list in the corner. The home page is an editorial masthead (dateline row, a large headline, one wide photograph) over a numbered service index with fees (tax returns, bookkeeping, payroll, company set-up), the method, the next tax dates, the four accountants and the journal. The footer is a quiet static street plan beside the office address card. With services, fees, a month-by-month tax calendar, about, contact, newsletter and journal. The office details and the fee schedule are synced patterns, edited once.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download tsumiki-accounting.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tsumiki-accounting.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsumiki Accounting.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The office details (address, hours, telephone, email, nearest station) and the fee schedule (the numbered service index with fees) are two synced patterns, "Tsumiki Accounting: office details" and "Tsumiki Accounting: fee schedule" (Appearance > Editor > Patterns), created once by inc/shared-info.php. The footer and the Contact page show the same office pattern; the home, Services and Fees pages show the same fee schedule. Edit either once and every page changes.

The footer map is a static styled plan drawn in CSS with an "Open in a map" link; there are no map embeds or API keys. The practice, the accountants, the town, the address, telephone numbers, dates and fees are fictional, and the tax calendar is sample content, not tax advice.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Tsumiki Accounting WordPress Theme, Copyright 2026 ShipPress contributors.
Tsumiki Accounting is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Spectral
Copyright 2017 The Spectral Project Authors (https://github.com/productiontype/Spectral)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Spectral.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/spectral (Light, Regular and Italic, subset to Latin as WOFF2)

Commissioner
Copyright 2019 The Commissioner Project Authors (https://github.com/kosbarts/Commissioner)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Commissioner.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/commissioner (variable font instanced to Light, Regular and Medium, subset to Latin as WOFF2)

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/demo/blocks.jpg
- assets/images/demo/desk.jpg
- assets/images/demo/folders.jpg
- assets/images/demo/meeting.jpg
- assets/images/demo/street.jpg
- assets/images/demo/window.jpg
- assets/images/blocks.jpg
- assets/images/desk.jpg
- assets/images/folders.jpg
- assets/images/hero.jpg
- assets/images/meeting.jpg
- assets/images/street.jpg
- assets/images/team.jpg
- assets/images/window.jpg

The stacked-block marks, the tsumiki logo and the footer street plan are simple shapes drawn in CSS.
