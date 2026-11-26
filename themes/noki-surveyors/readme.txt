=== Noki Surveyors ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Noki Surveyors is a block theme for a small building surveying practice that reports on houses and small commercial buildings before a buyer commits. The home page is one long landing page: a diagonal two-pane photo hero, a numbered condition report, visit times and a fixed EUR price list, with a single call to action, Request a survey. Copy and photography are the practice's own; the visual language is a quiet grey ground with an Edo purple accent.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns. Fonts: Barlow, IBM Plex Sans, Noto Sans TC and Noto Sans JP (all SIL Open Font License 1.1).

== Installation ==

1. Download noki-surveyors.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/noki-surveyors.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Noki Surveyors.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, a note with category and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), with Traditional Chinese, Japanese, French and German following. The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Optional forms: the request, contact and slot alerts pages use a dynamic form block (inc/shippress-forms.php). Without a form plugin they keep an email button; slot alerts shows an email field with a submit button that opens the visitor's email app with the request ready to send (the theme sends nothing itself). With Contact Form 7 or WPForms (contact), or MailPoet (explicit form ID) or Mailchimp for WP (newsletter), that plugin's form is shown instead.

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (reveal, stagger, count and parallax). They respect prefers-reduced-motion and show everything without JavaScript.

WooCommerce: support is declared; the theme works fully without it.
