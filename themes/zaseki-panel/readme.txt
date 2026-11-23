=== Zaseki Panel ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A calm, single-column landing theme for Zaseki Panel, a small maker of matte lobby wall panels that show which desks are free in shared offices and coworking spaces. The home page opens on three equal columns (a lobby photograph, a solid clay panel with a tilted russet desk grid and the one pre-order button, and a second photograph) with an information bar, then the floor story, three numbered rows, a parallax photo band, a coloured tile directory, an install table, a grey price band, dated lists, question rows and a closing russet band with wide diagonal stripes. Outfit and Nunito Sans, a cool white ground, russet lines and flat sage, clay and sand tiles. Sample content in English, Traditional Chinese, Japanese, French and German. WCAG AA colours.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download zaseki-panel.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/zaseki-panel.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Zaseki Panel.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, journal entries with categories and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), with Traditional Chinese, Japanese, French and German following. The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Optional forms: the contact, pre-order and waitlist pages use a dynamic form block (inc/shippress-forms.php). Without a form plugin the contact and pre-order pages keep an email button and the waitlist shows an email field with a submit button that opens the visitor's email app with the request ready to send (the theme sends nothing itself). With Contact Form 7 or WPForms (contact), or MailPoet (explicit form ID) or Mailchimp for WP (newsletter), that plugin's form is shown instead.

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (reveal, stagger and parallax). They respect prefers-reduced-motion and show everything without JavaScript.

The company, its people, buildings, address, telephone number and prices are fictional.

== Copyright ==

Zaseki Panel is distributed under the terms of the GNU GPL v2 or later.
Fonts: Outfit (OFL-1.1), Latin variable; Nunito Sans (OFL-1.1), Latin variable; both WOFF2, see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as documentary high-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the company is fictional). No transparent cut-outs are used. All are in assets/images/ (the ones imported into the Media Library are copied in assets/images/demo/).
- assets/images/hero-reception-panel.webp (home hero column 1: a receptionist touching the lobby wall panel)
- assets/images/hero-visitor-bench.webp (home hero column 3: a visitor with a laptop bag on a lobby bench)
- assets/images/floor-walk.webp (home floor story: a person with a laptop walking between desk rows)
- assets/images/hold-panel-tap.webp (home hold row 1: a fingertip on the panel grid)
- assets/images/hold-desk-tag.webp (home hold row 2: a hand tapping a desk tag)
- assets/images/hold-release.webp (home hold row 3 and journal entry: an empty desk with a glowing tag)
- assets/images/floor-in-use.webp (home parallax band: an open-plan floor at 08:40)
- assets/images/box-contents.webp (home tile directory, wide tile: the crate contents laid out on a table)
- assets/images/tag-fit.webp (home tile directory, card: hands pressing a desk tag on)
- assets/images/install-mount.webp (home install: levelling the panel on a lobby wall)
- assets/images/pilot-quayside.webp (home pilot notes and journal entry: a bright lobby front desk)
- assets/images/pilot-lindenhof.webp (home pilot notes: a coworking lobby by a bike store)
- assets/images/pilot-oriel.webp (home pilot notes: one floor shared by three studios)
- assets/images/demo/hold-release.webp and assets/images/demo/pilot-quayside.webp (copies of the two photos used as journal featured images in the Media Library)
