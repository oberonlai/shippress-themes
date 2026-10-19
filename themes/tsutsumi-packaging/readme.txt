=== Tsutsumi Packaging ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Tsutsumi Packaging — a theme for a packaging manufacturer (mailer boxes, shipping cartons, folding cartons, trays, sleeves and dividers), built around a spec catalogue: a formal header with the company name, the Request samples button and a menu button that opens a full-screen amber overlay. Amber (#CA7A2C) is the main colour: the lower half of the first screen, the sample request band, the menu overlay and the page heads are amber. The front page opens on a full-bleed kraft-board texture with a one-line Kosugi Maru headline and a solid amber Request samples button; below it a white spec table card straddles the amber field with six product rows (cut-out product photograph, type, size range, board grade, minimum lot, lead time). Below: five board swatches with grade codes and recycled content beside a photograph of the board edges, a four-step custom-order flow in one line (spec, sample, proof, run) with amber step numbers on an ink field, certifications and tests as a two-column table scrolling beside a sticky factory photograph, a die-line and spec-sheet download list and an amber sample request band where a cut-out stack of boxes breaks over the top edge. Photographs are realistic low-key images (50mm f/1.4, single hard window light, deep shadows, graded toward amber) and studio cut-outs. Kosugi Maru for headings, Epilogue for text and figures. Sample content in English. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download tsutsumi-packaging.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tsutsumi-packaging.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsutsumi Packaging.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three news posts with four categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content is in English (demo-content.json); theme strings fall back to English on sites in other languages.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Tsutsumi Packaging: plant status": plant shifts, sales desk hours, sample shipping, quote replies and standard lead times.
- "Tsutsumi Packaging: office details" (hours, drop-in, address, phone, email): the footer and Contact.
- "Tsutsumi Packaging: sample prices": Products and Contact.

The company, its people, address, telephone number, products, prices and figures are fictional.

== Copyright ==

Tsutsumi Packaging is distributed under the terms of the GNU GPL v2 or later.
Fonts: Kosugi Maru (Apache-2.0, Latin subset) and Epilogue (OFL-1.1, Latin subsets). License texts: assets/fonts/LICENSE-KosugiMaru-Apache-2.0.txt, assets/fonts/OFL-Epilogue.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic low-key photographs (50mm f/1.4, single hard window light, deep shadows, fine grain, graded toward amber #CA7A2C) and studio product cut-outs, released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/kraft-texture.webp (first screen and sample band: tiled kraft-board texture at low contrast)
- assets/images/stack-cutout.webp (sample band: transparent cut-out stack of boxes that breaks over the band's top edge)
- assets/images/mailer-cutout.webp (spec table: transparent cut-out kraft mailer box)
- assets/images/carton-cutout.webp (spec table: transparent cut-out shipping carton; also breaks over the page heads)
- assets/images/folding-cutout.webp (spec table: transparent cut-out white folding carton)
- assets/images/tray-cutout.webp (spec table: transparent cut-out kraft tray)
- assets/images/sleeve-cutout.webp (spec table: transparent cut-out sleeve over a kraft box)
- assets/images/divider-cutout.webp (spec table: transparent cut-out kraft cell divider)
- assets/images/factory.webp (quality and inner pages: a folding-carton gluing line)
- assets/images/boards.webp (materials and inner pages: corrugated board edges)
- assets/images/cartons-flat.webp (inner pages: flat folding carton blanks)
- assets/images/pallets.webp (inner pages: pallets of shipping cartons)
- assets/images/demo/factory.webp (sample post image)
- assets/images/demo/boards.webp (sample post image)
