=== Kumo Eyewear ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A technical, restrained store theme for a small titanium eyewear atelier: mist and cool greys, ink charcoal and one titanium accent, Red Hat Display with Red Hat Mono, an engineering title-block header, a filter-first frame directory (shape, material and fit pills over hairline cells) with a monospace measurement line on every frame, thin line drawings of frame shapes, Fitting guide and Lens options pages, a newsletter-led footer, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample frames in shape and material categories (Round, Rectangle, Oval, Square; Titanium, Acetate) with fit tags. Each frame's measurement line (lens □ bridge – temple) is its "Measurements" attribute, edited once in the product editor and shown under the price in the shop and on the product page. Without WooCommerce, the Shop page shows the frame directory with its prices, orders go by email, and nothing store-specific is loaded.

The frame directory filter (shape / material / fit pills) is a few lines of script; without JavaScript every frame shows. Without JavaScript the mobile menu shows as a plain list.

The atelier address, opening days, fitting appointments, phone and email, and the frame directory with its measurements, prices and the "Most fitted" badge are kept in ONE place each: two synced patterns (under Appearance > Editor > Patterns). The footer, home, fitting guide, contact and shop pages only reference them, so a change made once shows everywhere. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==


1. Download kumo-eyewear.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kumo-eyewear.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kumo Eyewear. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect their action to your form or email service.

== Copyright ==

Kumo Eyewear WordPress Theme, Copyright 2026 ShipPress contributors.
Kumo Eyewear is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Red Hat Display
Files: assets/fonts/redhatdisplay-variable-latin.woff2
Copyright 2024 The Red Hat Project Authors (https://github.com/RedHatOfficial/RedHatFont)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-RedHatDisplay.txt, https://openfontlicense.org)
Latin subset (WOFF2, weights 300-600) of the variable font in https://github.com/google/fonts/tree/main/ofl/redhatdisplay, bundled so the theme makes no third-party requests.

Red Hat Mono
Files: assets/fonts/redhatmono-variable-latin.woff2
Copyright 2024 The Red Hat Project Authors (https://github.com/RedHatOfficial/RedHatFont)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-RedHatMono.txt, https://openfontlicense.org)
Latin subset (WOFF2, weights 400-500) of the variable font in https://github.com/google/fonts/tree/main/ofl/redhatmono, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or products; the atelier, its makers and its frames are fictional).
- assets/images/atelier-hands.jpg (atelier page, journal)
- assets/images/display-wall.jpg (atelier page)
- assets/images/fitting-counter.jpg (home fitting band, fitting guide, journal)
- assets/images/fitting-portrait.jpg (home, fitting guide, journal)
- assets/images/frame-acetate.jpg (product photograph source, journal)
- assets/images/frame-halfrim.jpg (product photograph source, journal)
- assets/images/frame-oval.jpg (product photograph source, journal)
- assets/images/frame-rect.jpg (product photograph source, journal)
- assets/images/frame-round.jpg (product photograph source, journal)
- assets/images/frame-square.jpg (product photograph source, journal)
- assets/images/hero-shop.jpg (home opening, contact)
- assets/images/lens-detail.jpg (lens options, journal)
- assets/images/product-brow.jpg (product photograph, 4:3 crop of a frame photograph above)
- assets/images/product-drift.jpg (product photograph, 4:3 crop of a frame photograph above)
- assets/images/product-haze-petite.jpg (product photograph, 4:3 crop of a frame photograph above)
- assets/images/product-haze.jpg (product photograph, 4:3 crop of a frame photograph above)
- assets/images/product-ledge.jpg (product photograph, 4:3 crop of a frame photograph above)
- assets/images/product-mist.jpg (product photograph, 4:3 crop of a frame photograph above)
- assets/images/product-ridge.jpg (product photograph, 4:3 crop of a frame photograph above)
- assets/images/product-slate.jpg (product photograph, 4:3 crop of a frame photograph above)
- assets/images/demo/atelier-hands.jpg (copy of assets/images/atelier-hands.jpg for the Media Library)
- assets/images/demo/display-wall.jpg (copy of assets/images/display-wall.jpg for the Media Library)
- assets/images/demo/fitting-counter.jpg (copy of assets/images/fitting-counter.jpg for the Media Library)
- assets/images/demo/fitting-portrait.jpg (copy of assets/images/fitting-portrait.jpg for the Media Library)
- assets/images/demo/frame-acetate.jpg (copy of assets/images/frame-acetate.jpg for the Media Library)
- assets/images/demo/frame-halfrim.jpg (copy of assets/images/frame-halfrim.jpg for the Media Library)
- assets/images/demo/frame-oval.jpg (copy of assets/images/frame-oval.jpg for the Media Library)
- assets/images/demo/frame-rect.jpg (copy of assets/images/frame-rect.jpg for the Media Library)
- assets/images/demo/frame-round.jpg (copy of assets/images/frame-round.jpg for the Media Library)
- assets/images/demo/frame-square.jpg (copy of assets/images/frame-square.jpg for the Media Library)
- assets/images/demo/hero-shop.jpg (copy of assets/images/hero-shop.jpg for the Media Library)
- assets/images/demo/lens-detail.jpg (copy of assets/images/lens-detail.jpg for the Media Library)
- assets/images/demo/product-brow.jpg (copy of assets/images/product-brow.jpg for the Media Library)
- assets/images/demo/product-drift.jpg (copy of assets/images/product-drift.jpg for the Media Library)
- assets/images/demo/product-haze-petite.jpg (copy of assets/images/product-haze-petite.jpg for the Media Library)
- assets/images/demo/product-haze.jpg (copy of assets/images/product-haze.jpg for the Media Library)
- assets/images/demo/product-ledge.jpg (copy of assets/images/product-ledge.jpg for the Media Library)
- assets/images/demo/product-mist.jpg (copy of assets/images/product-mist.jpg for the Media Library)
- assets/images/demo/product-ridge.jpg (copy of assets/images/product-ridge.jpg for the Media Library)
- assets/images/demo/product-slate.jpg (copy of assets/images/product-slate.jpg for the Media Library)

Frame-shape line drawings: inline SVG drawn for this theme, GPL-2.0-or-later.

Screenshot: screenshot.png, made from the theme itself, GPL-2.0-or-later.
