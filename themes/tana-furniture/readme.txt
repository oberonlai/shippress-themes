=== Tana Furniture ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Tana Furniture is a block WordPress theme crafted for independent furniture makers, custom interior workshops, and design-led stores. Styled for calm domestic aesthetics and WooCommerce integration, it features a signature low-key three-pane photographic stage, responsive offset story rows, and bespoke room measurement layouts. Built with clean semantic markup and full multilingual support, the theme lets craftspeople present made-to-order furniture with clarity and quiet restraint.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download tana-furniture.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tana-furniture.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tana Furniture.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal entries with three categories and five tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. The theme works as a plain site without WooCommerce.

Forms: the contact, visit and newsletter pages and the footer use a small dynamic block (inc/shippress-forms.php). With Contact Form 7 or WPForms active, the contact and visit pages show your form; with MailPoet or Mailchimp for WP active, the newsletter slots show theirs. Without a plugin the contact pages keep a plain email button and the newsletter slots show an email field and a Subscribe button that opens your email app with the address filled in (you are not subscribed until you send that email). The theme sends nothing itself.

The shop, its people, its address, telephone number and prices are fictional.

== Copyright ==

Tana Furniture is distributed under the terms of the GNU GPL v2 or later.
Fonts: Albert Sans (OFL-1.1), Latin variable; Onest (OFL-1.1), Latin variable; Noto Sans TC (OFL-1.1), Traditional Chinese heading subset; Noto Sans JP (OFL-1.1), Japanese heading subset; all WOFF2, see assets/fonts/.
Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (ShipPress, GPL-2.0-or-later), no third-party library.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as documentary low-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the shop is fictional). No transparent cut-outs are used. The demo/ copies are the ones imported into the Media Library.
- assets/images/p01-tape-sofa.webp (home stage and How we measure: a woman kneeling with a tape measure at the arm of a grey wool sofa)
- assets/images/p02-swatch.webp (home stage: a hand holding an oatmeal wool swatch to the window)
- assets/images/p03-living-room.webp (home stage: the finished living room with the grey sofa by a window)
- assets/images/p04-table-tape.webp and assets/images/demo/p04-table-tape.webp (home stage, second set: two hands running a tape along an oak table)
- assets/images/p05-chair-leg.webp (home stage, second set: an oak chair leg on a floorboard)
- assets/images/p06-delivery-door.webp (home stage, second set: two people carrying a wrapped sideboard through a door)
- assets/images/p07-couple-sofa.webp and assets/images/demo/p07-couple-sofa.webp (home card: a couple reading on a made-to-order sofa)
- assets/images/p08-table-laying.webp (home card: a family laying a long oak table)
- assets/images/p09-woods.webp (home card: twelve wood samples from above)
- assets/images/p10-swatch-book.webp (home card: an open swatch book of wools and linens)
- assets/images/p11-room-plan.webp and assets/images/demo/p11-room-plan.webp (home row and journal entry: a room plan with a scale ruler and tape)
- assets/images/p12-upholstery.webp and assets/images/demo/p12-upholstery.webp (home row and journal entry: an upholsterer at a sofa frame)
- assets/images/p13-showroom.webp (home parallax band: a bright showroom floor with sofas, a dining table and two customers browsing)
- assets/images/p14-stair-carry.webp and assets/images/demo/p14-stair-carry.webp (home row and journal entry: two people carrying a sideboard up a stair)
- assets/images/p15-loft-bed.webp and assets/images/demo/p15-loft-bed.webp (home rooms: a loft bedroom with a low ash bed)
- assets/images/p16-study.webp and assets/images/demo/p16-study.webp (home rooms: a box-room study with a fitted desk)
- assets/images/p17-kitchen-corner.webp and assets/images/demo/p17-kitchen-corner.webp (home rooms: a kitchen corner set for six)
- assets/images/p18-shop-front.webp (home visit: the shop front at dusk)

== Changelog ==
= 1.0.1 =
* Replace stepped hero headlines with a heavier, left-aligned editorial block on home and inner pages in all five languages. Keep the pentagon CTA separate, improve photo contrast without blur, and respect reduced motion. Fix the mobile info bar animation offset and stack its content without clipping.
= 1.0.0 =
* First release.
