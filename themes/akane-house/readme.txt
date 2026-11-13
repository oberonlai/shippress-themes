=== Akane House ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Akane House is a block theme for a neighbourhood gastropub that keeps one room open from the lunchtime pie to last orders. The home page follows the sittings of a single day at 3 Tanner's Row, Eastbridge, the lodge Ruth Okafor and Tomas Brandt reopened in 2014. Pages cover the menu, the bar, the private room, a visit, and one way to book a table. Dark low-key photography on a quiet plum-grey paper (#DDD9DC), slash-numbered chapters with the text at 50%, ragged four-up photo tiles with captions above, a letterbox parallax band and a near-black reservation band. Cormorant Garamond for headings, Libre Baskerville for reading. Sample content in English, Traditional Chinese, Japanese, French and German. Works without WooCommerce. WCAG AA colours; scroll effects respect reduced motion.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See brand.md for the brand brief and brand/design-spec.md for the design notes.

== Installation ==

1. Download akane-house.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/akane-house.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Akane House.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three stories with two categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Forms: the newsletter section works without plugins (an email field and a submit button that opens your email app; the notice says the subscription is not complete until you send the message). With Contact Form 7 or WPForms the booking page shows your form; with MailPoet or Mailchimp for WP the newsletter shows theirs (inc/shippress-forms.php).

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (reveal, stagger and parallax; no libraries). They respect prefers-reduced-motion, and `?sp-static` shows the final state.

The pub, its people, address, telephone number and prices are fictional.

== Copyright ==

Akane House is distributed under the terms of the GNU GPL v2 or later.
Fonts: Cormorant Garamond (OFL-1.1), Latin variable, roman and italic; Libre Baskerville (OFL-1.1), Latin variable, normal and italic; Noto Serif TC and Noto Serif JP (OFL-1.1), subset to the characters of the Traditional Chinese and Japanese sample text; see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as photorealistic low-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the pub is fictional). No transparent cut-outs are used.
- assets/images/hero-tap.webp (home hero: a bartender pulls a pint at the tap, a cook plates behind)
- assets/images/lunch-pie.webp (home sittings: a pie with mash and greens at a window table)
- assets/images/afternoon.webp and assets/images/demo/afternoon.webp (home sittings and the story The Tuesday table: a man reading with a half pint; the demo/ copy is imported into the Media Library)
- assets/images/dinner-pass.webp (home sittings: two plated dinners on the pass)
- assets/images/last-orders.webp and assets/images/demo/last-orders.webp (home sittings and the story Last orders at 22:45: a bartender polishing a glass)
- assets/images/long-room.webp (home band: the long room with lamps and brick)
- assets/images/morning-prep.webp (home day: floured hands crimping pastry)
- assets/images/cellar.webp (a brick cellar with three casks and a torch beam; used on inner pages)
- assets/images/cook-pass.webp (home day: the head cook at the pass)
- assets/images/pie-macro.webp and assets/images/demo/pie-macro.webp (home menu and the story The pie that stayed: a split pie crust)
- assets/images/pint-macro.webp (home menu: a pint of bitter)
- assets/images/front-door.webp (home visit: the front door at dusk)
- assets/images/back-room.webp (Private Room band: a long table set for twelve in the panelled back room)
- assets/images/staff-meal.webp (People band: the staff meal at 17:30)
- assets/images/sunday-roast.webp (The Day and Menu: a roast carved for a family)
- assets/images/produce-door.webp (The House Letter band: a crate of produce at the kitchen door)
- assets/images/bar-talk.webp (About: a regular and the licensee talking across the bar)

== Changelog ==
= 1.0.0 =
* First release.
