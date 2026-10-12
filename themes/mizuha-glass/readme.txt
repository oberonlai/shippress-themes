=== Mizuha Glass ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A serene, sculptural store theme for a small glass studio making hand-blown and kiln-formed tableware in old bottle green: mist pages, sage glass panels, deep ink and a bottle-green accent, Cardo with Source Sans 3, a transparent header over a full-bleed photograph of backlit glass, long calm pauses between sections, soft refraction highlights on product cells drawn in CSS, a one-line footer, The studio and Shipping & care pages, and WooCommerce shop, product, cart, checkout and account templates styled to match.


== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product category and tag archives, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products in four categories (Drinking glass, Pouring, Bowls & plates, Vases). Each product's size line is its "Size" attribute, edited once in the product editor and shown under the price. Without WooCommerce, the Shop page and the home shelf show a static shelf of pieces and a note to order by email, and nothing store-specific is loaded.

The header lies transparent over the home photograph and turns solid as the page scrolls (CSS scroll timeline, with the small script assets/js/header.js for other browsers). Visitors who prefer reduced motion get a solid header and no hover drift. Without JavaScript the mobile menu is shown as a plain list.

The studio address, showroom hours, telephone and email, and the shipping, breakage and returns policy, are kept in ONE place each: two synced patterns (Appearance > Editor > Patterns). The footer line, The studio and Contact (studio details) and the home page, Shipping & care and every product page (policy) only reference them. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download mizuha-glass.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/mizuha-glass.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Mizuha Glass. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect its action to your form or email service.

== Copyright ==

Mizuha Glass WordPress Theme, Copyright 2026 ShipPress contributors.
Mizuha Glass is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Cardo
Files: assets/fonts/cardo-regular-latin.woff2, assets/fonts/cardo-italic-latin.woff2, assets/fonts/cardo-bold-latin.woff2
Copyright (c) 2002-2011, David J. Perry
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Cardo.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subsets (WOFF2) of the fonts in https://github.com/google/fonts/tree/main/ofl/cardo, bundled so the theme makes no third-party requests.

Source Sans 3
Files: assets/fonts/SourceSans3VF-Upright.ttf.woff2
Copyright 2010-2020 Adobe (http://www.adobe.com/), with Reserved Font Name 'Source'.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-SourceSans3.txt, https://openfontlicense.org).
Unmodified variable WOFF2 (weights 200-900) as published by Adobe in https://github.com/adobe-fonts/source-sans (because of the Reserved Font Name it is not subset or renamed), bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or studios; the studio, its makers and its glass are fictional). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero-glass.jpg (home: full-bleed photograph)
- assets/images/p01-tumbler.jpg (Usuzawa Tumbler)
- assets/images/p02-wine-stem.jpg (Reed Stem Wine Glass)
- assets/images/p03-carafe.jpg (River Carafe, journal)
- assets/images/p04-bowl.jpg (Shallow Tide Bowl)
- assets/images/p05-vase.jpg (Bottle Green Bud Vase)
- assets/images/p06-pitcher.jpg (Morning Pitcher)
- assets/images/p07-sake-pair.jpg (Sake Pair)
- assets/images/p08-plate.jpg (Kiln-formed Serving Plate)
- assets/images/studio-bench.jpg (how we make it: gather; The studio)
- assets/images/hands-glass.jpg (how we make it: blow; Contact; journal)
- assets/images/kiln-annealing.jpg (how we make it: anneal; The studio; journal)
- assets/images/window-shelf.jpg (home: second photograph; The studio; journal)
- assets/images/glassblower.jpg (The studio: the makers)
- assets/images/packing-crate.jpg (Shipping & care; journal)
- assets/images/detail-rim.jpg (The studio; Shipping & care)
- assets/images/detail-bubble.jpg (Shipping & care; journal)
- assets/images/demo/hero-glass.jpg (demo import copy of assets/images/hero-glass.jpg)
- assets/images/demo/p01-tumbler.jpg (demo import copy of assets/images/p01-tumbler.jpg)
- assets/images/demo/p02-wine-stem.jpg (demo import copy of assets/images/p02-wine-stem.jpg)
- assets/images/demo/p03-carafe.jpg (demo import copy of assets/images/p03-carafe.jpg)
- assets/images/demo/p04-bowl.jpg (demo import copy of assets/images/p04-bowl.jpg)
- assets/images/demo/p05-vase.jpg (demo import copy of assets/images/p05-vase.jpg)
- assets/images/demo/p06-pitcher.jpg (demo import copy of assets/images/p06-pitcher.jpg)
- assets/images/demo/p07-sake-pair.jpg (demo import copy of assets/images/p07-sake-pair.jpg)
- assets/images/demo/p08-plate.jpg (demo import copy of assets/images/p08-plate.jpg)
- assets/images/demo/studio-bench.jpg (demo import copy of assets/images/studio-bench.jpg)
- assets/images/demo/hands-glass.jpg (demo import copy of assets/images/hands-glass.jpg)
- assets/images/demo/kiln-annealing.jpg (demo import copy of assets/images/kiln-annealing.jpg)
- assets/images/demo/window-shelf.jpg (demo import copy of assets/images/window-shelf.jpg)
- assets/images/demo/glassblower.jpg (demo import copy of assets/images/glassblower.jpg)
- assets/images/demo/packing-crate.jpg (demo import copy of assets/images/packing-crate.jpg)
- assets/images/demo/detail-rim.jpg (demo import copy of assets/images/detail-rim.jpg)
- assets/images/demo/detail-bubble.jpg (demo import copy of assets/images/detail-bubble.jpg)

All other artwork (the refraction highlights and glass edges) is CSS, GPL-2.0-or-later.
