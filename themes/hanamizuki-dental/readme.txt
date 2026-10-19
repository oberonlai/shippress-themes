=== Hanamizuki Dental ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A dental clinic theme in jade green: a split first screen with a two-line headline and trust marks beside a booking card (7-day date strip, time-slot chips, treatment select) over stacked high-key clinic photographs, with a cut-out instrument tray breaking over its corner; then treatments with from-prices, dentists with cut-out portraits, the first visit, insurance and fees, and clinic hours. English sample content.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hanamizuki-dental.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hanamizuki-dental.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hanamizuki Dental.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three news posts with four categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content is in English (demo-content.json); theme strings fall back to English on sites in other languages.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Hanamizuki Dental: front desk": today, opening hours, new patients, replies and closures.
- "Hanamizuki Dental: office details" (hours, drop-in, address, phone, email): the footer and Contact.
- "Hanamizuki Dental: fees": Treatments and Contact.

The clinic, its people, address, telephone number, prices and times are fictional.

== Copyright ==

Hanamizuki Dental is distributed under the terms of the GNU GPL v2 or later.
Fonts: Zen Kaku Gothic New (OFL-1.1, Latin subsets) and Newsreader (OFL-1.1, Latin subsets). License texts: assets/fonts/OFL-ZenKakuGothicNew.txt, assets/fonts/OFL-Newsreader.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic high-key photographs (85mm f/2.8, softbox and window light, near-white ground, graded toward jade #38B48B), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/tray-cutout.webp (first screen: transparent cut-out instrument tray breaking over the booking card)
- assets/images/dentist-a-cutout.webp (dentists: transparent cut-out portrait; also on inner page heads)
- assets/images/dentist-b-cutout.webp (dentists: transparent cut-out portrait; also on inner page heads)
- assets/images/dentist-c-cutout.webp (dentists: transparent cut-out portrait)
- assets/images/waiting.webp (first screen and inner pages: a bright waiting room)
- assets/images/treatment.webp (first screen, first visit and inner pages: a bright treatment room)
- assets/images/demo/waiting.webp (sample post image)
- assets/images/demo/treatment.webp (sample post image)
