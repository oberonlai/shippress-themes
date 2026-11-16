=== Komorebi Cabins ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Komorebi Cabins is a calm, serene WordPress block theme designed for a self-catering forest cabin retreat of twelve timber cabins nestled among cedar and beech trees. Featuring a split header, gutter tagline hero, overlapping canopy mosaics, and plan comparison layouts, it provides a quiet documentary aesthetic inspired by forest hospitality. Built for full site editing with refined typography, muted woodland tones, and streamlined reservation request templates.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See brand.md for the brand brief and brand/design-spec.md for the design notes.

== Installation ==

1. Download komorebi-cabins.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/komorebi-cabins.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Komorebi Cabins.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three stories with a category and three tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), and Traditional Chinese, Japanese, French and German files are added for the full release. The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Forms: the Woodshed Letter section works without plugins (an email field and a submit button that opens your email app; the notice says the subscription is not complete until you send the message). With MailPoet or Mailchimp for WP the newsletter shows theirs; with Contact Form 7 or WPForms the reserve and contact pages show your form (inc/shippress-forms.php).

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (line fades, zoom-in photographs, stagger and parallax; no libraries). They respect prefers-reduced-motion, and `?sp-static` shows the final state.

The village, its people, address, telephone number and prices are fictional.

== Copyright ==

Komorebi Cabins is distributed under the terms of the GNU GPL v2 or later.
Fonts: Lora (OFL-1.1), Latin variable, roman and italic; Work Sans (OFL-1.1), Latin variable; Noto Serif TC and Noto Serif JP (OFL-1.1), subset to the characters of the Traditional Chinese and Japanese sample text; see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as dark documentary film photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the village is fictional). No transparent cut-outs are used.
- assets/images/hero-porch.webp (host stacking firewood on a cabin porch while a family unloads their car)
- assets/images/canopy-blur.webp (dense green beech canopy viewed from below with soft natural light filtering through leaves)
- assets/images/cabin-fern.webp (interior of a small cabin with a double bed under a sloped timber ceiling)
- assets/images/cabin-beech.webp (timber cabin living area with a dining table, wooden staircase, and tall forest window)
- assets/images/cabin-cedar.webp (exterior of a timber cabin among cedar trees with chairs on the front porch)
- assets/images/cabin-hollow.webp (large timber cabin in a woodland clearing with a stone fire pit at dusk)
- assets/images/inside-stove.webp (lit black wood stove inside a timber cabin living room beside a comfortable sofa)
- assets/images/inside-kitchen.webp (cabin kitchen corner with an induction hob, open wooden shelves, and plain ceramic tableware)
- assets/images/wood-stack.webp (hands carefully stacking split cedar and beech firewood logs against an outdoor cabin wall)
- assets/images/bath-window.webp (deep bathtub beside a large forest window with clean towels folded on a stool)
- assets/images/porch-coffee.webp (guest holding a hot coffee mug while sitting on a cabin porch in morning mist)
- assets/images/keys-office.webp (host handing a wooden cabin key tag to a guest across a timber office counter)
- assets/images/arrival-path.webp (family walking with travel bags along a gravel path towards a warmly lit cabin)
- assets/images/forest-floor.webp (timber boardwalk crossing a mossy forest floor covered in beech leaves with low sunlight)
- assets/images/host-portrait.webp (host in a wool jacket sitting on a cabin porch step beside an axe)
- assets/images/gravel-lane.webp (gravel lane leading through a small timber gate into dense cedar and beech woods)
- assets/images/autumn-beech.webp (autumn beech woodland with copper foliage and a cabin roof visible among tree trunks)
- assets/images/cabins-clearing.webp (three timber cabins spaced among cedar trees in a woodland clearing with chimney smoke)
- assets/images/demo/wood-stack.webp (smaller copy of wood-stack.webp, featured image of a story)
- assets/images/demo/arrival-path.webp (smaller copy of arrival-path.webp, featured image of a story)
- assets/images/demo/autumn-beech.webp (smaller copy of autumn-beech.webp, featured image of a story)
