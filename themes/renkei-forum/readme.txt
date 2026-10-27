=== Renkei Forum ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Renkei Forum is a focused landing theme designed for regional procurement conferences, B2B supplier exhibitions, and structured commercial matchings. A flat electric-blue title band carries the event name and one ticket button; under it a dark field holds a single documentary photograph at the centre, overlapping the band, flanked by ghosted giant words, a thin blue ellipse and gliding sector marquees. Section headings sit on solid blue bars, the speakers open under a full-width ellipse, and the programme rises out of a dome into stacking session cards. Schibsted Grotesk for headings, Manrope for reading. Works without WooCommerce. The first screen has no entrance animation.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See brand.md for the content brief.

The opening animation is CSS only: the blue title band wipes in from the left on first load, the ghost words BUYERS and MAKERS drift at a different speed from the photo (sp-parallax), and nothing animates under prefers-reduced-motion.

== Installation ==

1. Download renkei-forum.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/renkei-forum.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Renkei Forum.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images and the menu, and sets the front page. It never changes or deletes anything you wrote, and running it again creates nothing twice. The sample content is in English (demo-content.json); the importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

The forum, its people, venue, prices and dates are fictional.

== Copyright ==

Renkei Forum is distributed under the terms of the GNU GPL v2 or later.
Fonts: Schibsted Grotesk (OFL-1.1), Latin variable; Manrope (OFL-1.1), Latin variable; Noto Sans TC (OFL-1.1), Traditional Chinese subset; Noto Sans JP (OFL-1.1), Japanese subset; all WOFF2, see assets/fonts/.
Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js, written for ShipPress, GPL-2.0-or-later, no third-party code.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as photorealistic high-key documentary photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands). No transparent cut-outs are used.
- assets/images/hero-badge-desk.webp (home hero: hands fastening a blank badge at a linen registration desk)
- assets/images/buyer-supplier-table.webp (home brief: a buyer and a supplier at a small table)
- assets/images/portrait-varga.webp, assets/images/portrait-ferreira.webp, assets/images/portrait-nwosu.webp, assets/images/portrait-chen.webp, assets/images/portrait-novak.webp, assets/images/portrait-duarte.webp, assets/images/portrait-brandt.webp, assets/images/portrait-mensah.webp (home speakers: eight head-and-shoulders portraits)
- assets/images/venue-foyer.webp (home venue: the wharf-hall foyer with empty supplier tables)
- assets/images/supplier-samples.webp (home stories: a supplier table with packaging, swatches and jars)
- assets/images/registration-queue.webp (home tickets: a short queue at registration)
- assets/images/auditorium-empty.webp (Programme header and the Venue parallax photo)
- assets/images/meeting-hall-tables.webp (Venue, and the Journal article: Hall B seen from above)
- assets/images/loading-bay.webp, assets/images/city-kitchen.webp (Stories cases 01 and 02)
- assets/images/lanyards-notebook.webp (Newsletter and Thanks: blank lanyards and a notebook on linen)
