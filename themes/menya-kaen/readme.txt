=== Menya Kaen ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, crafted theme for a small ramen-ya with eight seats: washi-coloured pages, sumi ink type, dark wood and a single restrained vermilion, Shippori Mincho B1 headings over Zen Kaku Gothic New, a linen noren at the top of every page, the menu in vertical type on the right edge, a single-column long-read home page with the menu as a printed menu card, and an ink-dark footer with a stamped seal and the hours as a vertical column of text; with about, the menu, add-ons, an access page with the walk from the station, notes, a newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download menya-kaen.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/menya-kaen.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Menya Kaen.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample notes (posts) with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and prices and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The shop's opening hours, address, telephone, email and social links are kept in one place: the synced pattern "Menya Kaen: hours, address, telephone, email and social links" (Appearance > Editor > Patterns). The footer of every page (where it stands as a vertical column of text on wide screens), the home page, the Access page and the Contact page show that one pattern, so you edit it once. The prices work the same way: the synced pattern "Menya Kaen: menu card (bowls, small plates and drinks with prices)" is shown on the home page and the Menu page, and "Menya Kaen: add-ons card (toppings and extra noodles with prices)" on the Toppings page (inc/shop-info.php creates all three the first time the theme is activated, and never twice). The social icons link to "#" until you add your own profile addresses in that pattern.

The menu runs down the right edge of the screen in vertical type from 600px up. On phones it becomes a menu button that opens the core Navigation block's full-screen menu: focus stays inside it while it is open, Escape closes it and returns focus to the button, and a small script (assets/js/menu.js) keeps the button's aria-expanded state in step. The noren at the top is drawn in CSS and does not move.

The sample shop, its cook and staff, the street, the station, the address, telephone number and prices are fictional. The contact and newsletter forms are plain HTML: connect their action to your own form or email service.

== Upgrading from 1.x ==

Version 2.0.0 is a new design (the yellow street-poster look, the docked bar, the ticket machine and the footer tickers are gone). Updating changes the header, footer, templates and patterns. Pages, posts, menus and synced patterns already on your site are your content and are never changed or duplicated: pages created by 1.x keep their 1.x text and blocks, and your synced price list keeps your prices (it now reads as a plain priced list). To use the new layouts on an existing page, insert the "Menya Kaen" patterns from the block inserter.

== Changelog ==

= 2.0.0 =
* New design: quiet and refined. Washi ground, sumi ink, dark wood and one vermilion accent; Shippori Mincho B1 and Zen Kaku Gothic New replace Anton and Lato.
* Header: a linen noren with the shop's name at the top, the menu in vertical type on the right edge (a menu button on phones).
* Home: a single-column long read with new photographs (the broth, the counter, the cook's hands, a quiet note on the hours).
* The menu and the add-ons are printed menu cards with dotted leaders and prices, still each edited in one synced pattern; the hours and address stay one synced pattern.
* Footer: a stamped vermilion seal and the hours and address as a vertical column of text.
* New sample copy, notes and photographs. Removed the footer tickers and their script.

= 1.0.0 =
* Initial release.

== Copyright ==

Menya Kaen WordPress Theme, Copyright 2026 ShipPress contributors.
Menya Kaen is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Shippori Mincho B1
Files: assets/fonts/shippori-mincho-b1-regular-latin.woff2, assets/fonts/shippori-mincho-b1-medium-latin.woff2
Copyright 2021 The Shippori Mincho Project Authors (https://github.com/fontdasu/ShipporiMincho)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-ShipporiMinchoB1.txt, https://openfontlicense.org)
The official ShipporiMinchoB1-Regular.ttf and ShipporiMinchoB1-Medium.ttf from https://github.com/google/fonts/tree/main/ofl/shipporiminchob1, subset to Latin and punctuation plus three decorative kanji used by the seals, and repackaged as WOFF2, bundled so the theme makes no third-party requests.

Zen Kaku Gothic New
Files: assets/fonts/zen-kaku-gothic-new-regular-latin.woff2, assets/fonts/zen-kaku-gothic-new-medium-latin.woff2
Copyright 2022 The Zen Kaku Gothic Project Authors (https://github.com/googlefonts/zen-kakugothic)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-ZenKakuGothicNew.txt, https://openfontlicense.org)
The official ZenKakuGothicNew-Regular.ttf and ZenKakuGothicNew-Medium.ttf from https://github.com/google/fonts/tree/main/ofl/zenkakugothicnew, subset to Latin and punctuation and repackaged as WOFF2, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the hands shown are AI-generated and do not depict a real person, and every shop and person the theme names is fictional). broth.jpg was cropped to remove a wall plate and a hanging scroll.
- assets/images/broth.jpg
- assets/images/counter.jpg
- assets/images/hands.jpg
- assets/images/hero.jpg
- assets/images/noren.jpg
- assets/images/shio.jpg
- assets/images/tare.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/broth.jpg
- assets/images/demo/counter.jpg
- assets/images/demo/hands.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/noren.jpg
- assets/images/demo/shio.jpg
- assets/images/demo/tare.jpg

The noren, the seals, the menu card's leaders and the route line drawn in style.css are original work written for this theme (same copyright and license).
