=== Hidamari Care ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hidamari Care — a theme for a small senior care residence, laid out split-screen under a formal white top-bar header: the residence name and tagline on the left, the menu in one line and an Arrange a visit button on the right. Celadon (#7EBEAB) is the main colour: the rooms-and-care section, the contact section, every page head and the time marks are celadon fields in ink type. The front page is a day schedule: a white first screen with the headline top left and one edge-to-edge celadon day line with five time marks (7:00 to 19:00), each carrying a small stacked collage of a high-key photograph over an offset celadon card, alternating above and below the line; then the day hour by hour (time, what happens, who helps, a small photo), rooms and care on a celadon field where a transparent cut-out armchair breaks out of the framed room photograph, a monthly fees table, a two-week visiting calendar, two family quotes and contact and access. Photographs are realistic high-key images (85mm f/2.8, large softbox fill, near-white backgrounds, pale shadows, graded toward celadon). Zen Maru Gothic for headings, Lora for text, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download hidamari-care.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hidamari-care.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hidamari Care.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Hidamari Care: residence board": today's visiting slots, nurse hours, this week's event, enquiry reply time and available rooms.
- "Hidamari Care: residence details" (hours, tours, address, phone, email): the footer and Arrange a visit.
- "Hidamari Care: sample fees": Our care and Arrange a visit.

The residence, its people, address, telephone number and figures are fictional.

== Copyright ==

Hidamari Care is distributed under the terms of the GNU GPL v2 or later.
Fonts: Zen Maru Gothic (OFL-1.1), Medium and Bold Latin subsets plus subsets of the Japanese sample text; Lora (OFL-1.1, Reserved Font Name "Lora"), the unmodified variable font file; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never a Japanese font). License texts: assets/fonts/OFL-ZenMaruGothic.txt, assets/fonts/OFL-Lora.txt, assets/fonts/OFL-NotoSansTC.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic high-key photographs (85mm f/2.8, large softbox fill, near-white backgrounds, graded toward celadon), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/breakfast.webp (front page day line and schedule: a breakfast tray)
- assets/images/garden.webp (day line, schedule, about and page heads: a garden walk)
- assets/images/lunch.webp (day line and schedule: lunch)
- assets/images/tea.webp (day line, schedule and page heads: afternoon tea)
- assets/images/evening.webp (day line and schedule: a quiet room at dusk)
- assets/images/room.webp (rooms and care: a private room)
- assets/images/armchair-cutout.webp (rooms and care: a celadon armchair, transparent cut-out that breaks out of the room photo frame)
- assets/images/demo/garden.webp (sample post image)
- assets/images/demo/tea.webp (sample post image)
- assets/images/demo/evening.webp (sample post image)
