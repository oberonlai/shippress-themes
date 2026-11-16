=== Futari Journeys ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Futari Journeys is a calm, bespoke travel planning WordPress theme designed for couples embarking on honeymoons, anniversaries, and slow escapes. Built around thoughtful question-led layouts, documentary photography frames, and an unhurried editorial rhythm, it presents routes, fixed fees, and planning steps with clarity. Each tailor-made journey begins with honest answers and personal guidance from the first consultation to the flight home. The home page opens on an inset photograph that dissolves into white over three question links, then continues with a square and wide photo pair across a pale band, the budget, timing and documents questions, itinerary cards, a parallax road band, the five steps of a trip, the planners and the single way to book a planning call. Manrope for headings, Public Sans for reading. Works without WooCommerce. Sample content in English; Traditional Chinese, Japanese, French and German follow.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download futari-journeys.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/futari-journeys.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Futari Journeys.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with their text and images, a journal entry with a category and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. Languages: the sample content is in demo-content.json (English); other languages use the `shippress_demo_lang` option.

Contact: the planning call page uses the same dynamic form block (kind contact). With Contact Form 7 or WPForms it shows the first published form (suggested fields: your names, email, phone, occasion, rough dates, nights, budget for two, preferred call times, your questions, consent); without a plugin it keeps a button that opens your email app addressed to the studio. The theme sends and stores nothing itself.

Forms: the Route Letter section uses a dynamic form block (inc/shippress-forms.php). Without a form plugin it shows an email field and a submit button that opens your mail program with the address filled in (the visitor is not subscribed until the message is sent). With MailPoet or Mailchimp for WP it shows that form.

The studio, its trips, couples, people, address and prices are fictional.

== Copyright ==

Futari Journeys is distributed under the terms of the GNU GPL v2 or later.
Fonts: Manrope (OFL-1.1), Latin variable; Public Sans (OFL-1.1), Latin variable; Noto Sans TC and Noto Sans JP (OFL-1.1), subset WOFF2 for zh-TW and ja headings; see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as high-key documentary photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands). No transparent cut-outs are used.
- assets/images/hero-map-table.webp (home first screen: a planner spreading a route map for a couple)
- assets/images/ferry-rail.webp (home photo pair: a couple at a ferry rail)
- assets/images/harbour-path.webp (home photo pair: a couple on a harbour path)
- assets/images/planning-hands.webp and assets/images/demo/planning-hands.webp (home budget question and journal entry; the demo/ copy is imported into the Media Library)
- assets/images/azores-crater.webp and assets/images/demo/azores-crater.webp (home itinerary card: Azores; the demo/ copy is imported into the Media Library)
- assets/images/train-window.webp (home itinerary card: Slovenia by train)
- assets/images/coral-coast.webp (home itinerary card: Zanzibar)
- assets/images/olive-table.webp and assets/images/demo/olive-table.webp (home itinerary card: Puglia; the demo/ copy is imported into the Media Library)
- assets/images/coast-road.webp (home parallax band: a coastal road)
- assets/images/video-call.webp (home steps: a planner on a video call)
- assets/images/studio-table.webp (home planners: three planners at the studio table)
- assets/images/vineyard-lane.webp (about page head, sample trips and destinations bands: an anniversary couple on a vineyard lane)
- assets/images/veranda-tea.webp (questions page head, how it works and planners pairs: a couple reading an itinerary on a veranda)
- assets/images/island-airstrip.webp (sample trips head, how it works and about pairs: a couple walking to a small plane)
- assets/images/canal-bikes.webp (destinations page head: a couple cycling beside a canal)
- assets/images/studio-door.webp (planning call head, about pair: a planner holding the studio door open)
- assets/images/travel-folder.webp (the Route Letter page head: a travel folder, keys, a leaf and a pencil)

== Changelog ==
= 1.0.0 =
* First release.
