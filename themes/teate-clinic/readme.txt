=== Teate Clinic ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Teate Clinic is a WordPress theme for a two-clinician osteopathy practice in Halbrook, opened in 2014 by Maren Holt and Kofi Mensah. It sets out hands-on care for desk workers and amateur athletes: the first hour, the three usual complaints, the clinicians’ days and a six-line price list in euros. The voice stays calm and specific, and the clinic makes no promise about an outcome.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns. Fonts: Outfit, Figtree, Noto Sans TC and Noto Sans JP (all SIL Open Font License 1.1).

== Installation ==

1. Download teate-clinic.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/teate-clinic.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Teate Clinic.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, two notes with category and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), with Traditional Chinese, Japanese, French and German following. The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Optional forms: the booking, contact and clinic letter pages use a dynamic form block (inc/shippress-forms.php). Without a form plugin they keep an email button; the clinic letter page shows an email field with a submit button that opens the visitor's email app with the request ready to send (the theme sends nothing itself). With Contact Form 7 or WPForms (contact), or MailPoet (explicit form ID) or Mailchimp for WP (newsletter), that plugin's form is shown instead.

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (reveal, stagger, count and parallax). They respect prefers-reduced-motion and show everything without JavaScript.

WooCommerce: support is declared; the theme works fully without it.

== Images ==

Photographs are original images generated for this theme and released under GPL-2.0-or-later with the theme:
- assets/images/band-room.webp (GPL-2.0-or-later)
- assets/images/clinician-kofi.webp (GPL-2.0-or-later)
- assets/images/clinician-maren.webp (GPL-2.0-or-later)
- assets/images/complaint-back.webp (GPL-2.0-or-later)
- assets/images/complaint-neck.webp (GPL-2.0-or-later)
- assets/images/complaint-sport.webp (GPL-2.0-or-later)
- assets/images/hero-shoulder.webp (GPL-2.0-or-later)
- assets/images/letter-band.webp (GPL-2.0-or-later)
- assets/images/method-movement.webp (GPL-2.0-or-later)
- assets/images/story-daniel.webp (GPL-2.0-or-later)
- assets/images/story-sofia.webp (GPL-2.0-or-later)
- assets/images/story-tomas.webp (GPL-2.0-or-later)
- assets/images/why-hands.webp (GPL-2.0-or-later)
