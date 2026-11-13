=== Noka Cheese ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Noka Cheese is an independent cheese shop founded in 2014 at Old Dairy Yard, Brookmere, with one counter and a small ageing cellar under it. This is its WordPress store theme: about sixty cheeses in six styles, boards for pickup and Saturday tastings, with the same people, prices and hours throughout. Boards are reserved by 18:00 the day before and collected from 11:00. Pickup only.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download noka-cheese.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/noka-cheese.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Noka Cheese.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, journal entries with a category and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Forms: the counter letter section uses a small dynamic block (inc/shippress-forms.php). With MailPoet or Mailchimp for WP configured it shows that form; without a plugin it shows a real email field and a button that opens your email app with the address (nothing is subscribed until the email is sent). Contact pages use Contact Form 7 or WPForms when present, else an email button.

The shop, its people, address, telephone number, makers and prices are fictional.

== Copyright ==

Noka Cheese is distributed under the terms of the GNU GPL v2 or later.
Fonts: Albert Sans (OFL-1.1), Latin variable; Instrument Sans (OFL-1.1), Latin variable; Noto Sans TC (OFL-1.1), zh-TW headings subset; all WOFF2, see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as high-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the shop is fictional). No transparent cut-outs are used. See assets/images/.
Photographs (assets/images/, with a copy in assets/images/demo/ that the importer uses for the Media Library):
- hero-wire-cut.webp (Monger draws a steel wire through an orange washed-rind wheel as a customer watches.)
- statement-wrap.webp (Two hands fold two-layer cheese paper around a wedge beside a pencil.)
- styles-arrangement.webp (Six different cheeses rest together on smooth pale plaster forms.)
- style-fresh.webp, style-bloomy.webp, style-washed.webp, style-alpine.webp, style-blue.webp, style-goat.webp (one photograph for each of the six cheese styles)
- counter-band.webp (Long pale stone counter with whole wheels on oak shelves in morning light.)
- choose-taste.webp (Monger offers a sliver of cheese on a knife tip to a customer's hand.)
- noa-cellar.webp (Woman in a pale cellar turns a washed-rind wheel on a wooden board.)
- board-two.webp, board-eight.webp (a board for two and a long board for eight, nobody in frame)
- board-four.webp (Five cheeses with bread, quince and pickles on a pale wooden board.)
- cellar-brushing.webp (Cellar keeper brushes orange rinds of small wheels lined on shelves.)
- farm-goats.webp (Goats in a bright pale barn while two adults talk by the gate.)
- tasting-table.webp (Six small cheeses in a row on a pale table as the host points.)

Files: assets/images/board-eight.webp, assets/images/board-four.webp, assets/images/board-two.webp, assets/images/cellar-brushing.webp, assets/images/choose-taste.webp, assets/images/counter-band.webp, assets/images/farm-goats.webp, assets/images/hero-wire-cut.webp, assets/images/noa-cellar.webp, assets/images/statement-wrap.webp, assets/images/style-alpine.webp, assets/images/style-bloomy.webp, assets/images/style-blue.webp, assets/images/style-fresh.webp, assets/images/style-goat.webp, assets/images/style-washed.webp, assets/images/styles-arrangement.webp, assets/images/tasting-table.webp (all under GPL-2.0-or-later / CC0 as above).
Demo copies: assets/images/demo/board-eight.webp, assets/images/demo/board-four.webp, assets/images/demo/board-two.webp, assets/images/demo/cellar-brushing.webp, assets/images/demo/choose-taste.webp, assets/images/demo/counter-band.webp, assets/images/demo/farm-goats.webp, assets/images/demo/hero-wire-cut.webp, assets/images/demo/noa-cellar.webp, assets/images/demo/statement-wrap.webp, assets/images/demo/style-alpine.webp, assets/images/demo/style-bloomy.webp, assets/images/demo/style-blue.webp, assets/images/demo/style-fresh.webp, assets/images/demo/style-goat.webp, assets/images/demo/style-washed.webp, assets/images/demo/styles-arrangement.webp, assets/images/demo/tasting-table.webp (same photographs, same license).

== Changelog ==
= 1.0.0 =
* First release: home, twelve inner pages, a journal article, WooCommerce styling, newsletter and contact form slots.
