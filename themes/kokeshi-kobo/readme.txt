=== Kokeshi Kobo ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.1
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kokeshi Kobo — a store theme for a kokeshi doll maker, with WooCommerce templates styled to match. Matcha green (#C5C56A) is the main colour: the header, the hero, every page head, the bands, the pull quotes and the footer are matcha fields with sumi-green type, deep-moss labels and lacquer-red numbers; Stick for display and Murecho for reading. The hero puts the headline on the left and, on the right, a 2.5D isometric workshop in a frame on a kokeshi pattern panel, with a cut-out kokeshi that steps out over the frame and the hero edge; the menu sits centred on its own ruled row under the shop name. Below, the making story runs as one single-column long read in four numbered chapters, then the dolls, the journal and the shop letter. The kokeshi pattern texture backs the page heads, bands and footer edge. All illustrations are generated in one 2.5D isometric style. The shop details and the wood-and-care notes each live in one synced pattern (WooCommerce optional: without it the dolls show as static cells and orders go by email).

== Description ==

A block theme for a kokeshi doll maker. Pages: Home, Shop (WooCommerce, optional), The workshop, Journal, Newsletter and Contact, with sample posts, four sample products and a main menu created by the demo import (inc/demo-import.php, idempotent; products only while WooCommerce is active).

Synced patterns (edit once, change everywhere):
- "Kokeshi Kobo: shop details" (address, hours, telephone, email): footer and Contact.
- "Kokeshi Kobo: wood and care": every product page and Contact.

Each product's "Wood" and "Height" attributes are the single source of the small line printed above its price.

The shop, the turners, address, telephone number and prices are fictional.

== Copyright ==

Kokeshi Kobo, (C) 2026 ShipPress, GPL-2.0-or-later.

Fonts: Stick and Murecho (both OFL-1.1, no Reserved Font Name), subset to Latin as WOFF2; licences in assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as raster illustrations in one 2.5D isometric style on matcha green, released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the shop is fictional). The hero kokeshi is a transparent cut-out (scripts/grok-image.sh --cutout).
- assets/images/kokeshi-cutout.webp (home hero: transparent cut-out kokeshi that breaks out of the framed picture and the hero; also a product illustration)
- assets/images/p-blank.webp (product illustration, home long-read plate and a journal post)
- assets/images/p-naruko.webp (product illustration and a journal post)
- assets/images/p-togatta.webp (product illustration and a journal post)
- assets/images/pattern.webp (kokeshi pattern texture behind the hero art, page heads, bands and the footer edge)
- assets/images/workshop.webp (home hero frame, The workshop long read, a journal post and the 404 page)
- assets/images/demo/kokeshi-cutout.webp (home hero: transparent cut-out kokeshi that breaks out of the framed picture and the hero; also a product illustration, demo import copy)
- assets/images/demo/p-blank.webp (product illustration, home long-read plate and a journal post, demo import copy)
- assets/images/demo/p-naruko.webp (product illustration and a journal post, demo import copy)
- assets/images/demo/p-togatta.webp (product illustration and a journal post, demo import copy)
- assets/images/demo/workshop.webp (home hero frame, The workshop long read, a journal post and the 404 page, demo import copy)

== Changelog ==

= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).

= 1.0.0 =
* First release (design plan b3-20).
