=== Enkai Rooms ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Enkai Rooms is a block theme for a restaurant that keeps three private rooms for company dinners, family celebrations and wedding parties, on the harbour at 14 Harbour Steps, Calder. The home page opens on a diagonal seam between two low-key photographs under a hanging paper tag, then moves through a wide room photograph, four abutting photo tiles, a dark ledger of the rooms, per-head price rows, a parallax band and one repeated way to ask about a date. Warm black and pale grey with russet and gold accents; Cormorant Garamond for headings, Source Sans 3 for reading. Sample content in English, Traditional Chinese, Japanese, French and German. Works without WooCommerce. WCAG AA colours; scroll effects respect reduced motion.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See brand.md for the brand brief and brand/design-spec.md for the design notes.

== Installation ==

1. Download enkai-rooms.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/enkai-rooms.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Enkai Rooms.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three posts with a category and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Forms: the dates-list section in the footer works without plugins (an email field and a submit button that opens your email app; the notice says the subscription is not complete until you send the message). With Contact Form 7 or WPForms the enquiry page shows your form; with MailPoet or Mailchimp for WP the dates list shows theirs (inc/shippress-forms.php).

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (reveal, stagger and parallax; no libraries). They respect prefers-reduced-motion, and `?sp-static` shows the final state.

The restaurant, its people, address, telephone number and prices are fictional.

== Copyright ==

Enkai Rooms is distributed under the terms of the GNU GPL v2 or later.
Fonts: Cormorant Garamond (OFL-1.1), Latin variable, roman and italic; Source Sans 3 (OFL-1.1), Latin variable; Noto Serif TC and Noto Serif JP (OFL-1.1), subset to the characters of the Traditional Chinese and Japanese sample text; see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as photorealistic low-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the restaurant is fictional). No transparent cut-outs are used.
