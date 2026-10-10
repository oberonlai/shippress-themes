=== Kiroku Studio ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A bold, kinetic theme for creative agencies, motion studios and brand designers: near-black, white and one neon green, Bricolage Grotesque over Figtree. The menu is a numbered index in the corner of every title card, the home page scrolls sideways through a case-study reel, and the footer ends in a giant wordmark. With a work index and four case studies, services with a process track, about, journal, a newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kiroku-studio.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kiroku-studio.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kiroku Studio.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images (Work with four case studies as its child pages, Services, About, Newsletter, Contact), sample journal posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and the pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The studio's address, studio hours, email addresses, phone number and social links are kept in one place: the synced pattern "Kiroku Studio: studio address, phone, email and social links" (Appearance > Editor > Patterns). The footer of every page and the Contact page both show that one pattern (inc/studio-info.php creates it the first time the theme is activated, and never twice), so you edit it once. No other page repeats them; buttons such as "Start a project" link to the Contact page. The social icons link to "#" until you add your own profile addresses.

The case-study reel, the process steps and the journal row on the home page are "Sideways track" groups: they scroll horizontally and snap item by item. Swipe them, scroll them sideways, drag the scrollbar, or press Tab to reach the track and use the arrow keys (inc/tracks.php adds the keyboard focus when the page is shown). On phones the journal row turns into a short stack. All motion (the stretching headline word, the marquee lines, hover reveals, the wordmark fill) is CSS and stops for visitors who prefer reduced motion. The theme loads no JavaScript of its own.

The sample studio, its clients, people, prizes, address, telephone number and prices are fictional. The contact and newsletter forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Kiroku Studio WordPress Theme, Copyright 2026 ShipPress contributors.
Kiroku Studio is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Bricolage Grotesque
Files: assets/fonts/bricolage-grotesque-variable-latin.woff2
Copyright 2022 The Bricolage Grotesque Project Authors (https://github.com/ateliertriay/bricolage)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-BricolageGrotesque.txt, https://openfontlicense.org)
The official variable BricolageGrotesque[opsz,wdth,wght].ttf from https://github.com/google/fonts/tree/main/ofl/bricolagegrotesque, subset to Latin (Basic Latin, Latin-1, general punctuation, arrows) with all three axes kept and repackaged as WOFF2, bundled so the theme makes no third-party requests.

Figtree
Files: assets/fonts/figtree-variable-latin.woff2, assets/fonts/figtree-italic-variable-latin.woff2
Copyright 2022 The Figtree Project Authors (https://github.com/erikdkennedy/figtree)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Figtree.txt, https://openfontlicense.org)
The official variable Figtree[wght].ttf and Figtree-Italic[wght].ttf from https://github.com/google/fonts/tree/main/ofl/figtree, subset to Latin with the weight axis kept and repackaged as WOFF2, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the people shown are AI-generated and do not depict real persons, and every studio, client and person the theme names is fictional). hero.jpg was cropped at the bottom; the lens markings in studio.jpg were softened.
- assets/images/case1.jpg
- assets/images/case2.jpg
- assets/images/case3.jpg
- assets/images/case4.jpg
- assets/images/hero.jpg
- assets/images/portrait.jpg
- assets/images/studio.jpg
- assets/images/team.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/case1.jpg
- assets/images/demo/case2.jpg
- assets/images/demo/case3.jpg
- assets/images/demo/case4.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/portrait.jpg
- assets/images/demo/studio.jpg
- assets/images/demo/team.jpg

The marquee bands, scan lines, wordmark bar and progress line drawn in style.css are original work written for this theme (same copyright and license).
