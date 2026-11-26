=== Shikii Mats ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Shikii Mats is a landing theme for entrance-mat hire serving offices, shops, clinics and showrooms. A fitter lays a clean mat inside the door and swaps it every four weeks from the depot at Unit 4, Canal Yard, Easton. The home page is one long booking page: site cards, the four-week round, trial month and prices, with a single call to book a trial install.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download shikii-mats.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/shikii-mats.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Shikii Mats.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, a news entry with a category and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Optional forms: the Round notes subscribe slot in the footer always shows an email field and a submit button; without a form plugin it opens the visitor's email app with the request ready to send (the theme sends nothing itself). With MailPoet (explicit form ID) or Mailchimp for WP active, that plugin's form is shown instead (inc/shippress-forms.php).

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (stagger and reveal on the site cards, the round track and the figures, and parallax on one hero tile and the doorway band). They respect prefers-reduced-motion and show everything without JavaScript.

The business, its address, telephone number, people and prices are fictional.

== Copyright ==

Shikii Mats is distributed under the terms of the GNU GPL v2 or later.
Fonts: Manrope (OFL-1.1), Latin variable; Public Sans (OFL-1.1), Latin variable; Noto Sans TC and Noto Sans JP (OFL-1.1), Regular, subset to the characters of the Traditional Chinese and Japanese sample text; all WOFF2, see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as low-key documentary photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the business is fictional). No transparent cut-outs are used. All are in assets/images/.
- assets/images/hero-fitter-door.webp (home hero tile B: fitter unrolling a charcoal mat inside a glass door)
- assets/images/hero-wet-pavement.webp (home hero tile A: wet pavement with shoe-prints)
- assets/images/hero-glass-door-rain.webp (home hero tile C: glass door with rain beads)
- assets/images/hero-mat-pile.webp (home hero tile D: dry charcoal mat pile)
- assets/images/site-office.webp (home site card: office lobby)
- assets/images/site-shop.webp (home site card: shop doorway)
- assets/images/site-clinic.webp (home site card: clinic reception)
- assets/images/site-showroom.webp (home site card: showroom entrance)
- assets/images/why-grit-step.webp (home: a shoe stepping onto a mat)
- assets/images/fitter-van-swap.webp (home round section: fitter rolling a used mat into a van)
- assets/images/band-shop-dusk.webp (home doorway band, parallax)
- assets/images/story-bakery.webp (home notes: bakery entrance)
- assets/images/book-fitter-reception.webp (home closing band: fitter at a reception desk)
- assets/images/depot-wash.webp (about band with parallax and the round page: depot wash room with mats on rails)
- assets/images/mat-rolls.webp (mats and sizes: four rolled mats)
- assets/images/measure-doorway.webp (prices and booking pages: tape measure across a doorway)
- assets/images/depot-front.webp (about and contact pages: the depot loading door)
- assets/images/demo/post-wet-round.webp (sample news entry: fitter walking a wet street with a rolled mat)
