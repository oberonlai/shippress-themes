=== Shirayami Butoh ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Shirayami Butoh — a butoh dance company theme laid out as one long centred column, with a formal top header: the company name in the centre, the menu split in two around it (two entries left, two right) and the Book a seat button at the right end; an overlay menu on phones and tablets. Sumire violet (#7058A3) is the main colour: the hero, the company band, every page head and the overlay menu are solid violet fields set in white. The hero is centred giant type: the company line, then the title across the whole width, with a cut-out white-painted dancer standing in front of the letters and breaking out over the hero bottom edge into a white card with the lead, the buttons and this season. Everything below runs in one centred reading column: the studio board, the repertoire as pieces one below the other, the company band with the cut-out silk breaking over its top edge, the four class steps and the notebook. Every picture is a photorealistic high-key photograph (85mm, softbox light, near-white ground, faint shadows, fine grain, colour graded toward sumire). Yuji Mai for display, Sora for reading, Noto Serif TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download shirayami-butoh.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/shirayami-butoh.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Shirayami Butoh.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notebook entries with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Shirayami Butoh: workshop board" (the studio board): the piece on stage now, the next performances, seats, length and doors (home page).
- "Shirayami Butoh: workshop details" (the studio details: box office hours, open studio, address, phone, email): the footer and Book a seat.
- "Shirayami Butoh: price guide" (tickets and classes): Repertoire and Book a seat.

The company, its dancers, the pieces, address, telephone number and prices are fictional.

== Copyright ==

Shirayami Butoh is distributed under the terms of the GNU GPL v2 or later.
Fonts: Yuji Mai (OFL-1.1), Regular, subset to Latin and to the characters of the Japanese sample text; Noto Serif TC (OFL-1.1), Medium, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Sora (OFL-1.1), Latin variable, as WOFF2; see assets/fonts/OFL-YujiMai.txt, OFL-NotoSerifTC.txt and OFL-Sora.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as photorealistic high-key photographs (85mm f/2.8, softbox light, near-white ground, faint shadows, fine grain, colour graded toward sumire violet #7058A3), released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands). The dancer and silk cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout).
- assets/images/dancer-cutout.webp (home hero: a dancer in white body paint and a violet silk robe, transparent cut-out that stands in front of the giant title and breaks over the hero bottom edge)
- assets/images/silk-cutout.webp (company band and page heads: a floating violet silk cloth, transparent cut-out that breaks over the band top edge and the page-head bottom edges)
- assets/images/stage.webp (The company page head and the repertoire: a dancer crouching in a bright white space)
- assets/images/field.webp (home repertoire, steps and Repertoire: a white figure in a misty field at dawn)
- assets/images/rehearsal.webp (home repertoire, company band and Repertoire: five dancers rehearsing)
- assets/images/hands.webp (home repertoire, steps and Repertoire: two white-painted hands)
- assets/images/costume.webp (home repertoire, company band and Repertoire: violet costumes on a wooden rail)
- assets/images/cloth.webp (home repertoire wide picture and Letters page head: a floating violet silk cloth)
- assets/images/workshop.webp (company band, Repertoire page head and Letters: workshop participants on the floor)
- assets/images/profile.webp (company band, steps and The company: a white-painted dancer in profile)
- assets/images/feet.webp (steps and The company: white-painted feet stepping slowly)
- assets/images/demo/hands.webp (demo import copy of assets/images/hands.webp)
- assets/images/demo/workshop.webp (demo import copy of assets/images/workshop.webp)
- assets/images/demo/feet.webp (demo import copy of assets/images/feet.webp)
