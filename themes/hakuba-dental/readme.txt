=== Hakuba Dental ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A clean, calm theme for family dental clinics: white pages and pale mist-blue cells, Sora headings and Inter text, a bento-grid home page with tooth-shaped cells, a two-tier header with today's opening hours and a Book a visit pill, and a footer built around the week's opening-hours table; with treatments, an example fee table, the first visit step by step, the clinic and team, a journal, a newsletter and contact, plus an after-hours dark variation.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hakuba-dental.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hakuba-dental.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hakuba Dental.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample journal posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text, the hours and the fees and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Your opening hours, phone number, email and address are kept in one place: Appearance > Clinic details. Change them there once and the header strip, the home page's "today" cell, the footer and the Contact page all update (they show the theme's "Clinic details" block, inc/clinic-info.php). Each weekday's hours are worked out from the hours table, and the visitor's weekday is picked by a one-line inline script, assets/js/today.js.

The sample clinic, its people, address, telephone number and fees are fictional. The site content is general information, not medical advice. The contact and newsletter forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Hakuba Dental WordPress Theme, Copyright 2026 ShipPress contributors.
Hakuba Dental is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Sora
Files: assets/fonts/sora-variable-latin.woff2
Copyright 2019 The Sora Project Authors (https://github.com/sora-xor/sora-font)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Sora.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 100-800) of the official google/fonts release, bundled so the theme makes no third-party requests.

Inter
Files: assets/fonts/inter-variable-latin.woff2
Copyright 2020 The Inter Project Authors (https://github.com/rsms/inter)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Inter.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 100-900, optical size 14-32, with the check mark) of the official google/fonts release, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the people shown are AI-generated and do not depict real people, and every clinic and person the theme names is fictional).
- assets/images/dentist.jpg
- assets/images/hero.jpg
- assets/images/hygienist.jpg
- assets/images/kids.jpg
- assets/images/reception.jpg
- assets/images/smile.jpg
- assets/images/tools.jpg
- assets/images/toothbrush.jpg
- assets/images/waiting.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/dentist.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/hygienist.jpg
- assets/images/demo/kids.jpg
- assets/images/demo/reception.jpg
- assets/images/demo/smile.jpg
- assets/images/demo/tools.jpg
- assets/images/demo/toothbrush.jpg
- assets/images/demo/waiting.jpg

The brand mark (a tooth drawn as one inline SVG path in parts/header.html), the tooth-silhouette mask, the line icons and the check marks in style.css are original work written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and photographs, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.1 =
* Opening hours, phone, email and address now live in one place, Appearance > Clinic details, instead of being typed separately into the header, footer, home page and Contact page. A new "Clinic details" block shows them in each place; the header's "Open today" line, the closed-day dot and the hours tables are all worked out from the same hours.
* Sites set up with 1.0.0 keep their sample details until the form is saved. If you had already edited the header or footer in the Site Editor, your edited copy is kept: replace its hours, phone and address with the Clinic details block to use the single source.

= 1.0.0 =
* Initial release.
