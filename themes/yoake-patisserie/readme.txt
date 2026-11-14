=== Yoake Patisserie ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Yoake Patisserie is a serene, serif-driven WordPress block theme designed for artisanal patisseries, morning bakeries, and boutique tea salons. Organised around the quiet rhythm of the baking day, it features high-key documentary photography, soft blush dawn palettes, and precise schedule ledgers. With built-in WooCommerce compatibility, edge-flush layouts, and custom order workflows, it presents daily pastry offerings and table bookings with calm elegance.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See brand.md for the brand brief and brand/design-spec.md for the design notes.

== Installation ==

1. Download yoake-patisserie.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/yoake-patisserie.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Yoake Patisserie.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three stories with a category and five tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), and Traditional Chinese, Japanese, French and German files are added for the full release. The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Forms: the Morning Sheet section works without plugins (an email field and a submit button that opens your email app; the notice says the subscription is not complete until you send the message). With MailPoet or Mailchimp for WP the newsletter shows theirs; with Contact Form 7 or WPForms the booking and contact pages show your form (inc/shippress-forms.php).

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (slow fades, edge drift, stagger and parallax; no libraries). They respect prefers-reduced-motion, and `?sp-static` shows the final state.

The shop, its people, address, telephone number and prices are fictional.

== Copyright ==

Yoake Patisserie is distributed under the terms of the GNU GPL v2 or later.
Fonts: Instrument Serif (OFL-1.1), Latin, roman and italic; Karla (OFL-1.1), Latin variable; Noto Serif TC and Noto Serif JP (OFL-1.1), subset to the characters of the Traditional Chinese and Japanese sample text; see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as photorealistic high-key documentary photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the shop is fictional). No transparent cut-outs are used.
- assets/images/hero-glaze.webp (a pastry chef brushes apricot glaze on fruit tarts beside a copper pan)
- assets/images/morning-counter.webp (a baker sets fresh trays of golden croissants onto a sunlit marble counter)
- assets/images/first-trays.webp (hands pull a steaming metal tray of golden croissants from a deck oven)
- assets/images/cake-finish.webp (a palette knife smooths white cream around a strawberry cake on a turntable)
- assets/images/tea-stand.webp (porcelain stand with pastries and scones sits on linen beside a pouring teapot)
- assets/images/glaze-still.webp (a pastry brush lifts away from the glistening surface of a glazed tart)
- assets/images/order-box.webp (hands tie a pale ribbon around a white pastry box on the marble)
- assets/images/tart-square.webp (overhead view of a fresh fruit tart resting on a white porcelain plate)
- assets/images/choux-square.webp (three vanilla choux buns dusted with sugar sit beside a copper fork)
- assets/images/tea-square.webp (steaming tea pours into a pale cup beside a slice of lemon cake)
- assets/images/salon.webp (guests converse at linen tables with tea stands in a sunlit afternoon salon)
- assets/images/bench-portrait.webp (a pastry chef in a white jacket pipes cream at the marble bench)
- assets/images/salon-wide.webp (the empty tea salon before the sitting, with set linen tables and pale roses)
- assets/images/order-talk.webp (a baker shows two cake sizes on a marble board to a smiling customer)
- assets/images/dawn-bench.webp (a baker laminates dough on a marble bench beside a glowing oven)
- assets/images/shopfront.webp (a quiet plaster shopfront with glowing morning windows and an exterior wooden bench)
- assets/images/demo/order-box.webp (smaller copy of order-box.webp, used as the featured image of the story)
