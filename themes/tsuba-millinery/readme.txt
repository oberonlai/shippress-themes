=== Tsuba Millinery ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Version: 1.1.1
Stable tag: 1.1.1
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Tags: block-patterns, full-site-editing, e-commerce, blog, purple, blue, light, custom-colors, editor-style, translation-ready, wide-blocks

== Description ==

A bold, Japanese-minimal store theme for a small milliner's atelier: washi pages with a faint fibre texture, large fields of edo-murasaki purple, ai indigo and matcha, a koubai plum-blossom accent and sumi ink, Kaisei Opti with M PLUS 2, a formal top header with a horizontal numbered menu, an asymmetric 12-column home read left to right, hand-tinted copperplate etchings, a filter-first hat catalogue (shape, material, head size), a sizing guide, Fit & sizing and Made to order pages, and WooCommerce shop, product, cart, checkout and account templates styled to match.

The demo atelier is fictional: Tsuba Millinery, a small hat atelier at 2-11 Kasane-chō, Hoshikawa City, run by milliner Rin Tsubaki. All people, places and products are made up.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product category and tag archives, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample hats in four shape categories (Cloche, Boater, Bucket, Wide brim) with material tags (felt, straw, cotton). Each hat's details (shape, material, brim, sizes) are its attributes; material and brim are edited once in the product editor and shown under the price. Without WooCommerce, the Shop page and the home catalogue show a static catalogue and a note to order by email, and nothing store-specific is loaded.

The shop card (milliner, atelier address, hours, telephone and email), the sizing guide and the shapes table are kept in ONE place each: three synced patterns (Appearance > Editor > Patterns). Every page that shows them only references them. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download tsuba-millinery.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tsuba-millinery.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsuba Millinery. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect its action to your form or email service.

== Copyright ==

Tsuba Millinery WordPress Theme, Copyright 2026 ShipPress contributors.
Tsuba Millinery is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Kaisei Opti
Files: assets/fonts/KaiseiOpti-Regular.woff2, assets/fonts/KaiseiOpti-Bold.woff2
Copyright 2020 The Kaisei Project Authors (https://github.com/Font-Kai/Kaisei)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-KaiseiOpti.txt, https://openfontlicense.org).
No Reserved Font Name; subset to Latin plus a few kanji used as decorative marks (WOFF2) from https://github.com/google/fonts/tree/main/ofl/kaiseiopti, bundled so the theme makes no third-party requests.

M PLUS 2
Files: assets/fonts/MPLUS2-wght.woff2
Copyright 2021 The M+ FONTS Project Authors (https://github.com/coz-m/MPLUS_FONTS)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-MPLUS2.txt, https://openfontlicense.org).
No Reserved Font Name; the variable font subset to Latin (WOFF2) from https://github.com/google/fonts/tree/main/ofl/mplus2.

= Images =

Images: AI-generated for this theme with Grok Build image_gen, fine-line copperplate etching hand-tinted with indigo and koubai washes, released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the atelier, its people and its hats are fictional). The cut-out hat was generated on a plain ground and its background removed. Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero.webp (home opening: an indigo felt hat on a turned hat block)
- assets/images/collection.webp (eight hats in two rows (kept for pages imported with 1.0.0))
- assets/images/atelier.webp (home, Atelier: the workbench with hat blocks)
- assets/images/fit.webp (home, Fit & sizing: a tape measure round a hat crown)
- assets/images/blocks.webp (Atelier: four wooden hat blocks on a shelf)
- assets/images/brim-cutout.webp (home: a cut-out hat with a tape measure, transparent background, set over the matcha band edge)
- assets/images/milliner.webp (Atelier: the milliner at her bench)
- assets/images/fitting.webp (Made to order; journal: a hat on a head form with swatches)
- assets/images/shopfront.webp (Contact: the atelier front with an indigo noren)
- assets/images/care.webp (Fit & sizing: a hat brush beside a felt brim)
- assets/images/j-felt.webp (Atelier; journal: felt steamed over a block)
- assets/images/j-straw.webp (journal: straw braid and koubai ribbon)
- assets/images/j-ribbon.webp (journal: grosgrain ribbons and shears)
- assets/images/p01-hana-cloche.webp (product picture)
- assets/images/p02-natsu-boater.webp (product picture)
- assets/images/p03-ame-bucket.webp (product picture)
- assets/images/p04-kaze-wide-brim.webp (product picture)
- assets/images/p05-fuyu-beret.webp (product picture)
- assets/images/p06-hiyori-sun-hat.webp (product picture)
- assets/images/p07-kiri-trilby.webp (product picture)
- assets/images/p08-tsubomi-pillbox.webp (product picture)
- assets/images/washi.webp (page background: a washi paper texture drawn procedurally for this theme, GPL-2.0-or-later / CC0)
- assets/images/demo/fit.webp (demo import copy of assets/images/fit.webp)
- assets/images/demo/fitting.webp (demo import copy of assets/images/fitting.webp)
- assets/images/demo/j-felt.webp (demo import copy of assets/images/j-felt.webp)
- assets/images/demo/j-ribbon.webp (demo import copy of assets/images/j-ribbon.webp)
- assets/images/demo/j-straw.webp (demo import copy of assets/images/j-straw.webp)
- assets/images/demo/p01-hana-cloche.webp (demo import copy of assets/images/p01-hana-cloche.webp)
- assets/images/demo/p02-natsu-boater.webp (demo import copy of assets/images/p02-natsu-boater.webp)
- assets/images/demo/p03-ame-bucket.webp (demo import copy of assets/images/p03-ame-bucket.webp)
- assets/images/demo/p04-kaze-wide-brim.webp (demo import copy of assets/images/p04-kaze-wide-brim.webp)
- assets/images/demo/p05-fuyu-beret.webp (demo import copy of assets/images/p05-fuyu-beret.webp)
- assets/images/demo/p06-hiyori-sun-hat.webp (demo import copy of assets/images/p06-hiyori-sun-hat.webp)
- assets/images/demo/p07-kiri-trilby.webp (demo import copy of assets/images/p07-kiri-trilby.webp)
- assets/images/demo/p08-tsubomi-pillbox.webp (demo import copy of assets/images/p08-tsubomi-pillbox.webp)

All other artwork (rules, seals, chips and numerals) is CSS, GPL-2.0-or-later.

== Changelog ==

= 1.1.1 =
* Release housekeeping: 1.1.0 was published from the first redesign (purple signboard layout, vermilion accent); 1.1.1 is the corrected design below. Nothing else differs from the 1.1.0 notes that follow.

= 1.1.0 =
* Redesign: washi, edo-murasaki purple, ai indigo, matcha, a koubai accent and sumi replace the single blush tone; Kaisei Opti and M PLUS 2 replace Della Respira and Sen, with a larger type scale.
* New header: a formal top header with a horizontal numbered menu and a small hanging koubai tag beside the wordmark (H11).
* New home: an asymmetric 12-column page read left to right with a blank left margin for section numbers; a large headline beside an etching on an Edo purple field, Find your shape as a ruled filter table with the hats in an asymmetric masonry, four shapes as a ruled list on a matcha band with a cut-out hat breaking over its edge, three steps with large numerals, fit and sizing on indigo, the journal as a ruled index (L5).
* New footer: the seasonal letter on an Edo purple band over a deep shikon base with the wordmark set vertically in koubai (F4).
* New hand-tinted etching illustrations: one picture per hat, separate journal and page pictures (no more crops of one picture).
* Without WooCommerce the static shelf filters by shape and material with plain links (no JavaScript) and points orders to Made to order.
* The Shop, category, tag and search templates use the same staggered grid and shape / material chips (the material chips pointed at missing categories).
* Fix: the Media Library copy of atelier.webp took the slug "atelier", so the Atelier page was created as atelier-2.
* Image files from 1.0.0 keep their names, so pages imported earlier still show pictures.

= 1.0.0 =
* First release.
