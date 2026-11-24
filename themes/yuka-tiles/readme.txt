=== Yuka Tiles ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Yuka Tiles is a calm, photographic WordPress theme designed for tile and stone showrooms, material libraries, and surface merchants. Built with a card-mosaic archetype and clean sans-serif typography, it presents materials in natural daylight using flush photo ledgers, spec-sheet definition tables, and sample-borrowing workflows. Fully responsive and WooCommerce compatible, the theme features subtle parallax movement and a shrinking two-weight wordmark.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download yuka-tiles.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/yuka-tiles.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Yuka Tiles.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, journal entries with categories and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), with Traditional Chinese, Japanese, French and German following. The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Optional forms: the contact and borrow pages use a dynamic form block (inc/shippress-forms.php). Without a form plugin they keep an email button; the new-arrivals letter shows an email field with a submit button that opens the visitor's email app with the request ready to send (the theme sends nothing itself). With Contact Form 7 or WPForms (contact), or MailPoet (explicit form ID) or Mailchimp for WP (newsletter), that plugin's form is shown instead.

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (reveal, stagger, count and parallax). They respect prefers-reduced-motion and show everything without JavaScript.

WooCommerce: support is declared; the theme works fully without it.

The showroom, its people, buildings, address, telephone number and prices are fictional.

== Copyright ==

Yuka Tiles is distributed under the terms of the GNU GPL v2 or later.
Fonts: Schibsted Grotesk (OFL-1.1), Latin variable; Albert Sans (OFL-1.1), Latin variable; both WOFF2; Noto Sans TC and Noto Sans JP (OFL-1.1), subset to the Traditional Chinese and Japanese sample text; see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as documentary high-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the showroom is fictional). No transparent cut-outs are used. All are in assets/images/.
- assets/images/hero-porcelain-sun.webp (home hero column 1)
- assets/images/hero-bench-client.webp (home hero column 2, post 1)
- assets/images/hero-glazed-corner.webp (home hero column 3)
- assets/images/range-porcelain.webp (home ledger row A)
- assets/images/range-stone.webp (home ledger row B left, post 2)
- assets/images/range-glazed.webp (home ledger row B right)
- assets/images/range-terrazzo.webp (home ledger row C left)
- assets/images/range-grout.webp (home ledger row C right)
- assets/images/daylight-window-wall.webp (home daylight story)
- assets/images/borrow-sample-bag.webp (home borrowing a sample)
- assets/images/showroom-band.webp (home parallax showroom band)
- assets/images/spec-sheet-board.webp (home spec sheet block)
- assets/images/project-kitchen.webp (home project card 1)
- assets/images/project-stair.webp (home project card 2)
- assets/images/project-bakery.webp (home project card 3)
- assets/images/visit-entrance.webp (home visit block)
