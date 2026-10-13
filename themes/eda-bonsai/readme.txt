=== Eda Bonsai ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, organic store theme for a small family bonsai nursery: pale moss pages, lichen panels, deep moss ink and a muted olive accent, Rosarivo with Red Hat Text, a slim pale-moss rail on the right edge with the wordmark set vertically and a fine branch line, four chapters (age, styling, watering, repotting) scrolling beside one sticky tree photograph that changes with each chapter, a seasonal care calendar, a newsletter-led footer for the seasonal care letter, Care calendar, Workshops and The nursery pages, and WooCommerce shop, product, cart, checkout and account templates styled to match.


== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product category and tag archives, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products in three categories (Trees, Pots, Tools & soil). Each product's age · height · care level line comes from its "Age", "Height" and "Care level" attributes (pots, tools and soil: "Size" and "Made from"), edited once in the product editor and shown under the price. Without WooCommerce, the Shop page and the home page show static cells and a note to order by email, and nothing store-specific is loaded.

The sticky photograph beside the home chapters changes with a few lines of script (assets/js/chapters.js), loaded only where the chapters are. Without JavaScript the first photograph stays and the chapter index still jumps to each chapter; with reduced motion the photographs change without a fade. Without JavaScript the mobile menu is shown as a plain list.

The nursery address, opening days, telephone and email, the care + delivery policy and the care calendar are kept in ONE place each: three synced patterns (Appearance > Editor > Patterns). The footer, Workshops, The nursery and Contact (nursery details), the home page, every product page, Care calendar and Contact (care + delivery) and the Care calendar page and the home page (calendar; the home page shows only the current season, by the site's date) only reference them. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download eda-bonsai.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/eda-bonsai.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Eda Bonsai. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect its action to your form or email service.

== Copyright ==

Eda Bonsai WordPress Theme, Copyright 2026 ShipPress contributors.
Eda Bonsai is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Rosarivo
Files: assets/fonts/Rosarivo-Regular.ttf, assets/fonts/Rosarivo-Italic.ttf
Copyright (c) 2011, UGR Design (www.ugrdesign.com.ar), with Reserved Font Names "Rosarivo", "Rosarivo Pro", "Rosarivo UGR".
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Rosarivo.txt, https://openfontlicense.org).
Unmodified fonts from https://github.com/google/fonts/tree/main/ofl/rosarivo (because of the Reserved Font Names they are not subset or renamed), bundled so the theme makes no third-party requests.

Red Hat Text
Files: assets/fonts/redhattext-variable-latin.woff2
Copyright 2024 The Red Hat Project Authors (https://github.com/RedHatOfficial/RedHatFont)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-RedHatText.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (variable WOFF2, weights 300-700) of the font in https://github.com/google/fonts/tree/main/ofl/redhattext, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or nurseries; the nursery, its keeper, apprentice and trees are fictional). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero-tree.jpg (home: the first photograph beside the chapters)
- assets/images/ch-age.jpg (home: chapter I, Age; journal)
- assets/images/ch-styling.jpg (home: chapter II, Styling; journal)
- assets/images/ch-watering.jpg (home: chapter III, Watering; journal)
- assets/images/ch-repotting.jpg (home: chapter IV, Repotting; journal)
- assets/images/p01-juniper.jpg (Shimpaku Juniper)
- assets/images/p02-maple.jpg (Japanese Maple)
- assets/images/p03-pine.jpg (Black Pine)
- assets/images/p04-azalea.jpg (Satsuki Azalea)
- assets/images/p05-ficus.jpg (Beginner Ficus)
- assets/images/p06-pot.jpg (Handmade Unglazed Pot)
- assets/images/p07-shears.jpg (Pruning Shears Set)
- assets/images/p08-soil.jpg (Bonsai Soil Mix)
- assets/images/nursery.jpg (The nursery)
- assets/images/workshop.jpg (Workshops)
- assets/images/season.jpg (Care calendar; journal)
- assets/images/keeper.jpg (The nursery: the keeper)
- assets/images/apprentice.jpg (The nursery: the apprentice)
- assets/images/moss-detail.jpg (Care calendar; The nursery; journal)
- assets/images/gate.jpg (The nursery; Contact)
- assets/images/demo/hero-tree.jpg (demo import copy of assets/images/hero-tree.jpg)
- assets/images/demo/ch-age.jpg (demo import copy of assets/images/ch-age.jpg)
- assets/images/demo/ch-styling.jpg (demo import copy of assets/images/ch-styling.jpg)
- assets/images/demo/ch-watering.jpg (demo import copy of assets/images/ch-watering.jpg)
- assets/images/demo/ch-repotting.jpg (demo import copy of assets/images/ch-repotting.jpg)
- assets/images/demo/p01-juniper.jpg (demo import copy of assets/images/p01-juniper.jpg)
- assets/images/demo/p02-maple.jpg (demo import copy of assets/images/p02-maple.jpg)
- assets/images/demo/p03-pine.jpg (demo import copy of assets/images/p03-pine.jpg)
- assets/images/demo/p04-azalea.jpg (demo import copy of assets/images/p04-azalea.jpg)
- assets/images/demo/p05-ficus.jpg (demo import copy of assets/images/p05-ficus.jpg)
- assets/images/demo/p06-pot.jpg (demo import copy of assets/images/p06-pot.jpg)
- assets/images/demo/p07-shears.jpg (demo import copy of assets/images/p07-shears.jpg)
- assets/images/demo/p08-soil.jpg (demo import copy of assets/images/p08-soil.jpg)
- assets/images/demo/nursery.jpg (demo import copy of assets/images/nursery.jpg)
- assets/images/demo/workshop.jpg (demo import copy of assets/images/workshop.jpg)
- assets/images/demo/season.jpg (demo import copy of assets/images/season.jpg)
- assets/images/demo/keeper.jpg (demo import copy of assets/images/keeper.jpg)
- assets/images/demo/apprentice.jpg (demo import copy of assets/images/apprentice.jpg)
- assets/images/demo/moss-detail.jpg (demo import copy of assets/images/moss-detail.jpg)
- assets/images/demo/gate.jpg (demo import copy of assets/images/gate.jpg)

All other artwork (the growth-ring marks, the branch line and dividers) is CSS or simple inline SVG, GPL-2.0-or-later.
