=== Yohaku Studio ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, editorial and geometric portfolio theme for a small graphic, advertising and web design studio taking client work. Cool paper white, light grey and ink, with muted ochre only for printer's crop marks and registration targets. A magazine masthead (a thin dateline with the studio's founding year, disciplines and availability, a large Hedvig Letters Serif wordmark and a ruled menu row) opens every page. The home page sets a short statement on a faint baseline grid, then the selected work as an asymmetric mosaic of project cards with crop marks and numbered figure captions, the packages, the four-stage process in one line, the team and the journal. The footer is a wide "Have a brief? Start a project" band over the studio details. With a filterable Work page (All, Graphic, Advertising, Web; every project shows without JavaScript), six case studies, Services and prices, Process, a Start a project brief form that composes an email (no backend), About, Journal, Newsletter and Contact. The studio details and the packages are synced patterns, edited once. Hedvig Letters Serif over Geist, Geist Mono for figure numbers. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download yohaku-studio.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/yohaku-studio.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Yohaku Studio.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images (Work with six case studies as child pages), six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns), created once by inc/shared-info.php:
- "Yohaku Studio: studio details and availability" (availability line, address, email, telephone, hours). The masthead dateline shows its availability line; the footer, the Start a project page and the Contact page show the full details. The brief form sends to the email address written here.
- "Yohaku Studio: packages and prices" (three packages with "from" prices, deliverables, timelines and the "Most chosen" badge, which is ordinary editable text). Shown on the home page and the Services page.

The Work page filter (All, Graphic, Advertising, Web) is a few lines of script (assets/js/filter.js); without JavaScript every project shows. The Start a project form needs no backend: assets/js/brief.js opens the visitor's email app with the brief written out. Without JavaScript the form stays hidden and the page shows the studio email and a "what to include" checklist instead. The studio, designers, clients, address, telephone numbers and prices are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Yohaku Studio WordPress Theme, Copyright 2026 ShipPress contributors.
Yohaku Studio is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Hedvig Letters Serif
Copyright 2023 The Hedvig Letters Project Authors (https://github.com/KanonFoundry/HedvigLetters)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-HedvigLettersSerif.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/hedviglettersserif (no Reserved Font Name; opsz pinned to 24, subset to Latin as WOFF2)

Geist
Copyright 2024 The Geist Project Authors (https://github.com/vercel/geist-font.git)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Geist.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/geist (no Reserved Font Name; weights 300-600, subset to Latin as WOFF2)

Geist Mono
Copyright 2024 The Geist Project Authors (https://github.com/vercel/geist-font.git)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-GeistMono.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/geistmono (no Reserved Font Name; weight 400, subset to Latin as WOFF2)

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/demo/hero-studio.jpg
- assets/images/demo/process-sketch.jpg
- assets/images/demo/studio-window.jpg
- assets/images/demo/swatches.jpg
- assets/images/demo/team-designer-a.jpg
- assets/images/demo/team-designer-b.jpg
- assets/images/demo/work-book.jpg
- assets/images/demo/work-campaign.jpg
- assets/images/demo/work-identity.jpg
- assets/images/demo/work-packaging.jpg
- assets/images/demo/work-poster.jpg
- assets/images/demo/work-web.jpg
- assets/images/hero-studio.jpg
- assets/images/process-sketch.jpg
- assets/images/studio-window.jpg
- assets/images/swatches.jpg
- assets/images/team-designer-a.jpg
- assets/images/team-designer-b.jpg
- assets/images/work-book.jpg
- assets/images/work-campaign.jpg
- assets/images/work-identity.jpg
- assets/images/work-packaging.jpg
- assets/images/work-poster.jpg
- assets/images/work-web.jpg

Crop marks and registration targets are drawn in CSS (inline SVG data URIs), self-made, GPL-2.0-or-later.
