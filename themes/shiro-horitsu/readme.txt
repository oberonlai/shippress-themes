=== Shiro Horitsu ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, trustworthy editorial theme for boutique law firms and legal practices: washi-ivory pages, generous whitespace, serif titles with an indigo italic voice, an asymmetric grid drawn with hairline column rules, section marks and numbered indexes and large calm photographs, with practice areas, attorney profiles, a first-consultation flow with a fee ledger and FAQ, insights, a newsletter and contact with office hours, plus a night-office dark variation.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download shiro-horitsu.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/shiro-horitsu.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Shiro Horitsu.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample insight posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and the fees and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The sample firm, its people, address, telephone number and fees are fictional. The site content includes a short disclaimer that it is general information and not legal advice; keep or adapt it for your jurisdiction. The contact and newsletter forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Shiro Horitsu WordPress Theme, Copyright 2026 ShipPress contributors.
Shiro Horitsu is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

EB Garamond
Files: assets/fonts/eb-garamond-variable-latin.woff2, assets/fonts/eb-garamond-italic-variable-latin.woff2
Copyright 2017 The EB Garamond Project Authors (https://github.com/octaviopardo/EBGaramond12)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-EBGaramond.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 400-800, with italic), bundled so the theme makes no third-party requests.

Hanken Grotesk
Files: assets/fonts/hanken-grotesk-variable-latin.woff2, assets/fonts/hanken-grotesk-italic-variable-latin.woff2
Copyright 2021 The Hanken Grotesk Project Authors (https://github.com/marcologous/hanken-grotesk)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-HankenGrotesk.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 100-900, with italic), bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the two portraits are AI-generated and do not depict real people, and every firm and person the theme names is fictional).
- assets/images/desk.jpg
- assets/images/garden.jpg
- assets/images/hero.jpg
- assets/images/lawyer1.jpg
- assets/images/lawyer2.jpg
- assets/images/library.jpg
- assets/images/meeting.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/desk.jpg
- assets/images/demo/garden.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/lawyer1.jpg
- assets/images/demo/lawyer2.jpg
- assets/images/demo/library.jpg
- assets/images/demo/meeting.jpg

The brand mark (a square seal with a column, drawn as an inline SVG in parts/header.html), the hairline column rules, the section marks and the monogram seals in style.css are original work written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and photographs, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
