=== Makiba Farmstay ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Makiba Farmstay is a tranquil WordPress theme designed for working dairy farms, countryside guesthouses, and agritourism retreats. Featuring a distinctive fixed hill-ridge timeline, elegant serif typography, and unhurried editorial layouts, it brings daily agrarian rhythms and family hospitality to life. Built with block-first architecture, clean responsive patterns, and dedicated accommodation templates.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See brand.md for the brand brief and brand/design-spec.md for the design notes.

== Installation ==

1. Download makiba-farmstay.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/makiba-farmstay.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Makiba Farmstay.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with a category and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json); Traditional Chinese, Japanese, French and German files are added for the full release. The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Forms: the farm letter section works without plugins (an email field and a submit button that opens your email app; the notice says the subscription is not complete until you send the message). With MailPoet or Mailchimp for WP the newsletter shows theirs; with Contact Form 7 or WPForms the contact and booking pages show your form (inc/shippress-forms.php).

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (rise-into-place reveals, stagger, count-up figures and parallax; no libraries). They respect prefers-reduced-motion, and `?sp-static` shows the final state. The hero slide fade and the swallow on the ridge strip are plain CSS animations.

The farm, its people, address, telephone number and prices are fictional.

== Copyright ==

Makiba Farmstay is distributed under the terms of the GNU GPL v2 or later.
Fonts: Fraunces (OFL-1.1), variable; Mulish (OFL-1.1), variable; see assets/fonts/.
Noto Serif TC: Copyright 2012 Google Inc. License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifTC.txt, https://openfontlicense.org). File: assets/fonts/noto-serif-tc-zh-tw-400.woff2.
Noto Serif JP: Copyright 2012 Google Inc. License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NotoSerifJP.txt, https://openfontlicense.org). File: assets/fonts/noto-serif-jp-400-ja.woff2.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as high-key documentary farm photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the farm is fictional). No transparent cut-outs are used. The paper grain, leaf canopy, swallows, ridge and icons are original SVG/PNG made for this theme.
- assets/images/hero-dawn-milking.webp (a farmer leads a cow through the parlour door as a child holds the gate)
- assets/images/hero-mist-pasture.webp (a family of four walks across misty green pasture toward grazing dairy cows)
- assets/images/hero-evening-yard.webp (string lights in a walnut tree above a long dining table at dusk)
- assets/images/farm-panorama.webp (timber barn and green hillside pasture with dairy cows)
- assets/images/milking-parlour.webp (an adult guides a child's hands attaching a milking cup in the parlour)
- assets/images/barn-breakfast.webp (farm breakfast table with milk, butter, eggs and bread)
- assets/images/calf-feeding.webp (a teenager and a child bottle-feed two calves in a straw pen)
- assets/images/butter-jars.webp (children shake jars of cream into butter beside a smiling dairy worker)
- assets/images/evening-barbecue.webp (a cook turns vegetables and sausages beside a long family table)
- assets/images/hayloft-room.webp (family guest room under exposed roof beams with a bunk alcove)
- assets/images/pasture-herd.webp (dairy herd grazing across wide green hill pastures)
- assets/images/egg-basket.webp (a child carries a basket of eggs across the yard among hens)
- assets/images/about-family.webp (three generations of a farm family by the open barn door)
- assets/images/herd-care.webp (a herd manager checks a cow in the bright milking parlour)
- assets/images/rafters-suite.webp (a large loft room with two double beds and a reading nook)
- assets/images/orchard-room.webp (a bright room under a sloped timber ceiling with a window onto the orchard)
- assets/images/swallow-room.webp (a loft family room with a double bed, two single beds and a bird nest on a beam)
- assets/images/country-lane.webp (a tree-lined gravel lane to the farm gate)
- assets/images/grain.png (paper grain texture, generated for this theme)
- assets/images/demo/calf-feeding.webp (smaller copy, featured image of a note)
- assets/images/demo/hero-mist-pasture.webp (smaller copy, featured image of a note)
- assets/images/demo/butter-jars.webp (smaller copy, featured image of a note)
