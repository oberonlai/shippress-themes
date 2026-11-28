=== Hakuji Laboratory ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet landing theme for a small dental laboratory that makes crowns and bridges for local practices. The home page opens on a collage: the headline, lead and a four-figure stats row beside a pair of photographs (42 and 58 percent, one large top-right radius) that cross-fade to a second pair, over a grey-violet slab with a three-line tagline. It continues with rounded white sheets lying over a parallax photo band, a shade-room sheet, a band of three title-over-photo case cards with dot links, four ruled upload steps, a full-width fee table, a ruled list of the people at the bench, a pick-up and hours band and a closing account sheet. Libre Baskerville and Literata with Noto Serif for Chinese and Japanese, a white ground and one grey-violet accent. Sample content in English, Traditional Chinese, Japanese, French and German. WCAG AA colours.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hakuji-laboratory.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hakuji-laboratory.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hakuji Laboratory.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, notices (posts) with a category and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), with Traditional Chinese, Japanese, French and German following. The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Optional forms: the contact (open an account) and early-access pages use a dynamic form block (inc/shippress-forms.php). Without a form plugin the contact page keeps an email button and the early-access page and the footer show an email field with a submit button that opens the visitor's email app with the request ready to send (the theme sends nothing itself). With Contact Form 7 or WPForms (contact), or MailPoet (explicit form ID) or Mailchimp for WP (newsletter), that plugin's form is shown instead. Suggested contact fields: practice name, contact name, email, phone, practice address, registration number, request type, expected cases per month, scanner used, message, consent.

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (reveal, stagger and parallax). They respect prefers-reduced-motion and show everything without JavaScript.

The laboratory, its people, address, telephone number and prices are fictional.

== Copyright ==

Hakuji Laboratory is distributed under the terms of the GNU GPL v2 or later.
Fonts: Libre Baskerville (OFL-1.1), Latin variable, upright and italic, TTF; Literata (OFL-1.1), Latin variable, WOFF2; Noto Serif TC and Noto Serif JP (OFL-1.1), subset to the Traditional Chinese and Japanese sample text; see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as documentary high-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the laboratory is fictional). No transparent cut-outs are used. All are in assets/images/ (the ones imported into the Media Library are copied in assets/images/demo/).
- assets/images/img-01.webp (hero pair A left: a technician seating a ceramic crown beside shade tabs)
- assets/images/img-02.webp (hero pair A right: a dentist and a smiling patient checking a new crown in a hand mirror)
- assets/images/img-03.webp (hero pair B left: a three-unit bridge on an articulator)
- assets/images/img-04.webp (hero pair B right: a dentist holding a shade tab beside a patient's teeth)
- assets/images/img-05.webp (home From the bench band (parallax): layering porcelain at a window bench)
- assets/images/img-06.webp (home shade room sheet)
- assets/images/img-07.webp (home case card Crowns)
- assets/images/img-08.webp (home case card Implant work)
- assets/images/img-09.webp (home case card Guards)
- assets/images/img-10.webp (home upload section: an intraoral scan)
- assets/images/img-11.webp (home team sheet: two technicians at a shared bench)
- assets/images/img-12.webp (home pick-up band: a courier receives a case box at the lab door)
- assets/images/img-13.webp (home account sheet and journal entry: a top-down bench with tools and crowns)
- assets/images/img-14.webp (inner pages: a technician loads a zirconia disc into a milling unit)
- assets/images/img-15.webp (inner page heads: a wide calm laboratory)
- assets/images/img-16.webp (early access and thanks pages: a packed case box on a bench)
- assets/images/img-17.webp (inner pages: a CAD designer at a monitor)
- assets/images/demo/img-10.webp, assets/images/demo/img-12.webp, assets/images/demo/img-13.webp, assets/images/demo/img-14.webp and assets/images/demo/img-17.webp (copies of five photos used as notice featured images in the Media Library)

== Changelog ==
= 1.0.1 =
* Fix the desktop header: the centred wordmark sat underneath the navigation bar, so the logo link could not be clicked. It now sits above the navigation.

= 1.0.0 =
* First release.
