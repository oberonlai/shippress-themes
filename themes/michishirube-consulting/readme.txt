=== Michishirube Consulting ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Michishirube Consulting — a management consulting firm theme set as a vertical scroll: under a formal top header (firm name, tagline and a Book a first call button), the menu leaves the bar on wide screens and becomes a fixed midnight-navy side rail down the left edge with numbered entries set horizontally in every language, hairline dividers and a brass marker on the current page; phones get a full-screen navy overlay menu with large entries. Deep navy (#1E3A5F) is the main colour, chosen for trust: the hero, the story band and every page head are navy fields set in white, with mist blue-grey panels, cloud-white grounds and a muted brass accent kept to small rules and markers; in Chinese and Japanese a short vertical line beside the hero title is the only tategaki touch. The hero is a cut-out object breaking its frame: the title, lead and buttons on the left, a framed low-key photograph of an empty boardroom at dusk on the right, and a cut-out consultant (transparent WebP) standing over the frame's corner and dropping past the hero bottom edge; a cut-out brass compass breaks over the story band and every page head. Every picture is a realistic low-key photograph (50mm f/1.4, one hard window light, deep shadows) of a modern, international office. BIZ UDMincho for display, Crimson Pro for reading, Noto Serif TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download michishirube-consulting.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/michishirube-consulting.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Michishirube Consulting.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Michishirube Consulting: office board": consultants in today, hours, reply time, first call and closed days.
- "Michishirube Consulting: office details" (hours, address, phone, email): the footer and Book a first call.
- "Michishirube Consulting: price guide" (fixed fees): Services and Book a first call.

The firm, its people, clients, address, telephone number and fees are fictional.

== Copyright ==

Michishirube Consulting is distributed under the terms of the GNU GPL v2 or later.
Fonts: BIZ UDMincho (OFL-1.1, Copyright 2022 The BIZ UDMincho Project Authors), Bold, subset to Latin and to the characters of the Japanese sample text; Crimson Pro (OFL-1.1, Copyright 2018 The Crimson Pro Project Authors), Regular and SemiBold, Latin subset; Noto Serif TC (OFL-1.1, Copyright 2017 Google Inc.), Bold, subset to the characters of the Traditional Chinese sample text. Licence texts in assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic low-key photographs (50mm f/1.4, one hard window light, deep shadows, fine grain, graded toward navy #1E3A5F; re-graded from violet to navy with a masked hue shift in 1.0.1), released under GPL-2.0-or-later / CC0. No real people, brands or text.
- assets/images/consultant-cutout.webp (home hero: a consultant holding a leather folio, transparent cut-out that breaks out of the framed hero photo and the hero bottom edge)
- assets/images/compass-cutout.webp (story band and page heads: a brass pocket compass, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/boardroom.webp (home hero (framed), services mosaic and Briefing page head: an empty boardroom at dusk)
- assets/images/meeting.webp (services and About: two people in conversation by a window)
- assets/images/cards.webp (services: hands arranging blank index cards)
- assets/images/workshop.webp (services and steps: a small team around a table)
- assets/images/desk.webp (services: a desk with a notebook, pen and coffee under a lamp)
- assets/images/city.webp (story band, Services, About and contact page heads: office towers at blue hour)
- assets/images/demo/boardroom.webp (demo import copy of boardroom.webp)
- assets/images/demo/desk.webp (demo posts: a desk with an open notebook, pen and coffee under a lamp; regenerated in 1.0.1 without lettering on the glass)
- assets/images/demo/city.webp (demo import copy of city.webp)

== Changelog ==

= 1.0.2 =
* Updated theme files (functions.php, inc/editor-lang.php).

= 1.0.1 =
* Deep navy #1E3A5F replaces shikon violet as the main colour, with mist blue-grey, cloud white and a small muted brass accent; photos re-graded to navy.
* The Chinese and Japanese side menu is now horizontal like the other languages (it was set top to bottom in narrow columns); current-page marker, clearer hover and focus states, wider rail for long French and German entries.
* Phone overlay menu: large horizontal entries, 48px touch targets and a framed close button.
* Chinese and Japanese section titles are horizontal.

= 1.0.0 =
* First release.
