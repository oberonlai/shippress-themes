=== Menya Kaen ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A loud, street-style theme for ramen shops and late-night noodle counters: a vivid yellow ground, ink-black type and one hot red, Anton capitals at poster size over Lato, a menu and toppings built as chunky ticket-machine buttons with the price on every key, a header docked to the bottom of the screen, a home page of oversized typography only, and a footer that opens with two ticker bands; with about, the menu, toppings, a map page with the walk from the station, news, a newsletter and contact.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download menya-kaen.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/menya-kaen.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Menya Kaen.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample news posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and prices and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The shop's address, opening hours, phone number, email and social links are kept in one place: the synced pattern "Menya Kaen: address, hours, phone, email and social links" (Appearance > Editor > Patterns). The footer of every page, the Map page and the Contact page show that one pattern, so you edit it once. The prices work the same way: the synced pattern "Menya Kaen: ticket machine (bowls, sides and drinks with prices)" is shown on the home page and the Menu page, and "Menya Kaen: toppings machine (toppings with prices)" on the Menu page and the Toppings page (inc/shop-info.php creates all three the first time the theme is activated, and never twice). The social icons link to "#" until you add your own profile addresses in that pattern.

The header is a bar docked to the bottom of the screen. On small screens its navigation becomes a menu button that opens the core Navigation block's full-screen menu: focus stays inside it while it is open, Escape closes it and returns focus to the button, and a small script (assets/js/menu.js) keeps the button's aria-expanded state in step. The footer tickers (assets/js/ticker.js) move only when the visitor has not asked for reduced motion; they stop while pointed at or focused, and a "Pause ticker" button stops them for the visit. Without the script, or under reduced motion, the text stands still.

The sample shop, its cooks, address, telephone number and prices are fictional. The contact and newsletter forms are plain HTML: connect their action to your own form or email service.

== Copyright ==

Menya Kaen WordPress Theme, Copyright 2026 ShipPress contributors.
Menya Kaen is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Anton
Files: assets/fonts/anton-regular.woff2
Copyright 2020 The Anton Project Authors (https://github.com/googlefonts/AntonFont.git)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Anton.txt, https://openfontlicense.org)
The official Anton-Regular.ttf from https://github.com/google/fonts/tree/main/ofl/anton, repackaged as WOFF2 (all glyphs kept), bundled so the theme makes no third-party requests.

Lato
Files: assets/fonts/lato-regular.woff2, assets/fonts/lato-italic.woff2, assets/fonts/lato-bold.woff2
Copyright (c) 2010-2014 by tyPoland Lukasz Dziedzic, with Reserved Font Name "Lato"
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Lato.txt, https://openfontlicense.org)
The official Lato-Regular.ttf, Lato-Italic.ttf and Lato-Bold.ttf from https://github.com/google/fonts/tree/main/ofl/lato, repackaged as WOFF2 with every glyph kept (not subset, as Lato has a Reserved Font Name), bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images; no real people, places, brands or organisations; the cook shown is AI-generated and does not depict a real person, and every shop and person the theme names is fictional). shoyu.jpg and counter.jpg were cropped to remove lettering.
- assets/images/chef.jpg
- assets/images/counter.jpg
- assets/images/gyoza.jpg
- assets/images/hero.jpg
- assets/images/miso.jpg
- assets/images/noodles.jpg
- assets/images/shoyu.jpg
- assets/images/street.jpg
- assets/images/toppings-flatlay.jpg

The same photographs, imported into the Media Library by the demo import and used as featured images (identical files; same license):
- assets/images/demo/chef.jpg
- assets/images/demo/counter.jpg
- assets/images/demo/gyoza.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/miso.jpg
- assets/images/demo/noodles.jpg
- assets/images/demo/shoyu.jpg
- assets/images/demo/street.jpg
- assets/images/demo/toppings-flatlay.jpg

The flame mark (one inline SVG path in parts/header.html) and the ticket-machine keys, stamps, route line and ticket stubs drawn in style.css are original work written for this theme (same copyright and license).
