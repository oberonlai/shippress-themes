=== Yoru Chocolate ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Version: 1.1.1
Stable tag: 1.1.1
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A bold, quiet store theme for a small bean-to-bar chocolatier, written vertically (tategaki): iron-navy (tetsukon) pages on washi, yamabuki-yellow marks and bands, Kaisei Decol with BIZ UDPGothic, maki-e lacquer illustrations, a menu written down a rail on the right edge, an origins table, Origins and Gift boxes pages, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

The demo chocolatier is fictional: Yoru Chocolate, a small bean-to-bar kitchen working at night in a former print shop at 3-8 Kanzaki-dōri, Hoshikawa City, founded in 2014 by chocolatier Nao Fujisaki with roaster Ken Arima.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product category and tag archives, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products in three categories (Bonbons, Tablets, Gift boxes). Each product's details (origin, cacao, pieces or weight, keeps) are its attributes; cacao and origin are edited once in the product editor and shown under the price. Without WooCommerce, the Shop page and the home shelf show a static shelf of pieces and a note to order by email, and nothing store-specific is loaded.

Visitors who prefer reduced motion get no hover motion. Without JavaScript the mobile menu is shown as a plain list.

The chocolatier, shop address, shop hours, telephone and email; the warm-weather shipping and keeping note; and the origins table (bean, origin, cacao, notes) are kept in ONE place each: three synced patterns (Appearance > Editor > Patterns). Every page that shows them only references them. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download yoru-chocolate.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/yoru-chocolate.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Yoru Chocolate. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect its action to your form or email service.

== Copyright ==

Yoru Chocolate WordPress Theme, Copyright 2026 ShipPress contributors.
Yoru Chocolate is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Kaisei Decol
Files: assets/fonts/KaiseiDecol-Regular.woff2, assets/fonts/KaiseiDecol-Bold.woff2
Copyright 2020 The Kaisei Project Authors (https://github.com/Font-Kai/Kaisei)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-KaiseiDecol.txt, https://openfontlicense.org). No Reserved Font Name.
Latin subset (WOFF2) of https://github.com/google/fonts/tree/main/ofl/kaiseidecol, bundled so the theme makes no third-party requests.

BIZ UDPGothic
Files: assets/fonts/BIZUDPGothic-Regular.woff2, assets/fonts/BIZUDPGothic-Bold.woff2
Copyright 2022 The BIZ UDGothic Project Authors (https://github.com/googlefonts/morisawa-biz-ud-gothic)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-BIZUDPGothic.txt, https://openfontlicense.org). No Reserved Font Name.
Latin subset (WOFF2) of https://github.com/google/fonts/tree/main/ofl/bizudpgothic, bundled so the theme makes no third-party requests.

= Images =

Images: AI-generated for this theme with Grok Build image_gen, maki-e lacquer illustration style (gold and yamabuki lacquer on navy), released under GPL-2.0-or-later (no stock images, no real people or brands; the chocolatier, its people and its products are fictional). Version 1.1.0 redrew the 1.0 pictures in place under the same file names. Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero.webp (home hero: a crescent moon over an open box of bonbons and a cacao branch)
- assets/images/night-window.webp (home: the print shop's window at night; Origins; journal)
- assets/images/step-roast.webp (home: roast; journal)
- assets/images/step-grind.webp (home: grind)
- assets/images/step-temper.webp (home: temper; journal)
- assets/images/bonbons-grid.webp (Origins: twelve bonbons in a box; journal)
- assets/images/cacao.webp (Origins: a cacao branch)
- assets/images/gift-box.webp (home and Gift boxes: a furoshiki-wrapped box; Contact; journal)
- assets/images/p01-rose-dome.webp (Rose Clay Dome)
- assets/images/p02-hojicha-square.webp (Hōjicha Square)
- assets/images/p03-sesame-swirl.webp (Black Sesame Swirl)
- assets/images/p04-hazelnut-dome.webp (Hazelnut Praline Dome)
- assets/images/p05-pistachio-square.webp (Pistachio Square)
- assets/images/p06-walnut-oval.webp (Walnut & Kuromitsu Oval)
- assets/images/p07-tablet.webp (Tanzania 70% Tablet)
- assets/images/p08-box-twelve.webp (Box of Twelve)
- assets/images/washi.webp (washi fibre texture under every surface: a greyscale, mirrored crop of one generated washi sheet)
- assets/images/demo/bonbons-grid.webp (demo import copy of assets/images/bonbons-grid.webp)
- assets/images/demo/cacao.webp (demo import copy of assets/images/cacao.webp)
- assets/images/demo/gift-box.webp (demo import copy of assets/images/gift-box.webp)
- assets/images/demo/hero.webp (demo import copy of assets/images/hero.webp)
- assets/images/demo/night-window.webp (demo import copy of assets/images/night-window.webp)
- assets/images/demo/p01-rose-dome.webp (demo import copy of assets/images/p01-rose-dome.webp)
- assets/images/demo/p02-hojicha-square.webp (demo import copy of assets/images/p02-hojicha-square.webp)
- assets/images/demo/p03-sesame-swirl.webp (demo import copy of assets/images/p03-sesame-swirl.webp)
- assets/images/demo/p04-hazelnut-dome.webp (demo import copy of assets/images/p04-hazelnut-dome.webp)
- assets/images/demo/p05-pistachio-square.webp (demo import copy of assets/images/p05-pistachio-square.webp)
- assets/images/demo/p06-walnut-oval.webp (demo import copy of assets/images/p06-walnut-oval.webp)
- assets/images/demo/p07-tablet.webp (demo import copy of assets/images/p07-tablet.webp)
- assets/images/demo/p08-box-twelve.webp (demo import copy of assets/images/p08-box-twelve.webp)
- assets/images/demo/step-grind.webp (demo import copy of assets/images/step-grind.webp)
- assets/images/demo/step-roast.webp (demo import copy of assets/images/step-roast.webp)
- assets/images/demo/step-temper.webp (demo import copy of assets/images/step-temper.webp)

All other artwork (rules and ornaments) is CSS, GPL-2.0-or-later.

== Changelog ==

= 1.1.2 =
* English is never set vertically any more (feedback: "the menu is still hard to read; don't set English vertically"). Everything is horizontal by default; vertical writing (tategaki) is used only when the content language is Chinese, Japanese or Korean (:lang(ja), :lang(zh), :lang(ko), taken from the site language or any block's lang attribute), so a CJK site still gets the vertical layout of 1.1.
* Menu rail (1100 px and wider): a clean stacked list of horizontal items in small spaced capitals with a small yamabuki numeral, hairline rules between items and a yamabuki dot on the current page. The rail width is fluid (about 13.5-17rem) so the longest item fits; longer labels wrap, never clip, and a long menu scrolls inside the rail. 600-1099 px keeps the wrapped menu row under the header; phones keep the Menu overlay with horizontal items.
* Home and page heads keep the Japanese feel through layout instead: asymmetric columns, navy and yamabuki blocks, washi fibres, section titles in large horizontal type in a right-hand column behind a hairline spine with a big 01/02 numeral and a small spaced label; staggered tall product strips with the name under the picture; origins in four ruled columns; roast-grind-temper stepping down left to right with 01-03; a horizontal caption beside the night window; the journal as three ruled columns; the footer wordmark set large and horizontal over the yamabuki moon. Sesame emphasis dots are kept for CJK; English emphasis on light grounds is a thin yamabuki underline.
* CSS only: no change to patterns, templates, demo content or the importer, so pages imported with 1.0/1.1 take the new look as they are.

= 1.1.1 =
* Roomier right-hand menu (feedback: the rail's menu items were too cramped). The rail now holds only the menu: wider (fluid, about 11-13rem), with fluid inner padding, a fluid gap between the vertical columns (about 1-1.4rem instead of 0.5rem), more line spacing and letter spacing, and no item touches the rail's edges. A longer menu wraps into a new tier below, aligned to the same right edge, instead of running out of the rail; if a menu is ever taller than the window, the rail scrolls.
* A real top header on every width: the wordmark and tagline, an "Order a box" button (to the shop page), the account link and the cart sit in a band across the top; from 1100 px the menu hangs down the rail on the right edge, below that band.
* 600-1099 px: wordmark and buttons on the first line, the menu on its own ruled line below, wrapping with even gaps. Phones keep the Menu overlay; a long site title wraps onto two lines and, under 480 px, the Menu button shows only its two lines, so the bar never overlaps.
* The "Order a box" button is saved with the site-relative link /shop/ and pointed at this site's shop page when shown (WooCommerce shop, else a page with the slug "shop", else the home page); change its text or link in the Site Editor (Patterns > Header).

= 1.1.0 =
* Redesign (tategaki vertical scroll): iron-navy (tetsukon #17184B) pages on washi with yamabuki (#F8B500) marks and one full yamabuki band, washi-light sections, Kaisei Decol + BIZ UDPGothic.
* Header H11: a fixed rail on the right edge with the wordmark and the menu written vertically (top bar below 1100 px, overlay menu on phones).
* Home L5: full-height vertical title beside a tall maki-e drawing; section titles down vertical spines; products as staggered tall strips with vertical names; origins as vertical columns; steps descending right to left; journal as vertical spines. Footer: Yoru written vertically beside a yamabuki moon.
* New maki-e lacquer illustrations; the 1.0 file names are kept so pages imported with 1.0 keep their pictures; 1.0 class names keep working.

= 1.0.0 =
* First release.
