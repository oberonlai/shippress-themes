=== Butai Playhouse ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Butai Playhouse is a documentary, photo-led WordPress theme designed for repertory theatres and performing arts venues selling five-play seasons. Built around Playfair Display and Source Sans 3 with a quiet ink and plum palette, it features full-bleed stage photography, horizontal season rails, flat colour-flood booking tiles, and fixed-price seat selection. It offers complete WooCommerce compatibility while operating cleanly as a standalone event and repertory ticketing site.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See brand.md for the brand brief and brand/design-spec.md for the design notes.

== Installation ==

1. Download butai-playhouse.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/butai-playhouse.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Butai Playhouse.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three stories with a category and three tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

Languages: the sample content comes in English (demo-content.json), and Traditional Chinese, Japanese, French and German files are added for the full release. The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Forms: the Call Sheet newsletter section works without plugins (an email field and a submit button that opens your email app; the notice says the subscription is not complete until you send the message). With MailPoet or Mailchimp for WP the newsletter shows theirs; with Contact Form 7 or WPForms the contact and seat request pages show your form (inc/shippress-forms.php).

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (caps marquees, rise-into-place reveals, stagger and parallax; no libraries). They respect prefers-reduced-motion, and `?sp-static` shows the final state.

The playhouse, its people, address, telephone number and prices are fictional.

== Copyright ==

Butai Playhouse is distributed under the terms of the GNU GPL v2 or later.
Fonts: Playfair Display (OFL-1.1), variable, roman and italic; Source Sans 3 (OFL-1.1), variable; Noto Serif TC and Noto Serif JP (OFL-1.1), subset for the Chinese and Japanese sample text; see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as low-key documentary theatre photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the playhouse is fictional). No transparent cut-outs are used.
- assets/images/auditorium.webp (empty steeply raked two-hundred-seat auditorium with a single work light glowing on the stage)
- assets/images/audience-dark.webp (audience watching from darkened seats with faces softly illuminated by spill from the stage)
- assets/images/box-office.webp (box office staff member points to a printed dot seat plan for a visitor)
- assets/images/cue-light.webp (stage manager hand resting over an open prompt book beside a glowing cue box)
- assets/images/dressing-room.webp (actor fastening a period costume in a narrow dressing room beside a costume rail)
- assets/images/exterior-night.webp (exterior view of brick playhouse at night with illuminated doorway open to wet street)
- assets/images/hero-stage.webp (actor stands alone in a pool of light on a bare black stage)
- assets/images/hero-wings.webp (stage manager with headset raises her index finger at a dark wings prompt desk)
- assets/images/lighting-focus.webp (lighting technician on a tall ladder focusing a lantern with the beam cutting through haze)
- assets/images/play-lamp-room.webp (older woman holding an illuminated oil lantern inside a dark timber stage room set)
- assets/images/play-nine-doors.webp (woman pausing inside an open doorway of a theatre set beside a warm lamp)
- assets/images/play-salt-thunder.webp (two actors in wet coats standing under stage rain illuminated by sharp sidelight)
- assets/images/play-understudy.webp (young actor sitting before illuminated dressing room mirror bulbs with costume partially put on)
- assets/images/play-winter-ferry.webp (two actors standing at a ship rail set amidst stage haze and blue backlight)
- assets/images/production-desk.webp (artistic director and designer seated at a production desk in the dark auditorium stalls)
- assets/images/rehearsal-room.webp (cast of six reading scripts around a table in a rehearsal room at dusk)
- assets/images/workshop-ferry.webp (two workshop builders sanding a curved timber ship rail in a shaft of sunlight)
- assets/images/demo/audience-dark.webp (smaller copy, featured image of a story)
- assets/images/demo/cue-light.webp (smaller copy, featured image of a story)
- assets/images/demo/workshop-ferry.webp (smaller copy, featured image of a story)
