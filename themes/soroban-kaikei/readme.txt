=== Soroban Kaikei ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Soroban Kaikei — a small-business tax accountant theme with a formal top header whose menu is split either side of the centred office name, with a Book a free first talk button. Keshizumi charcoal (#524748) is the main colour: the hero field, every page head, the services column, the calendar band and the overlay menu are charcoal fields with a 2D flat abacus-bead and ledger-line pattern multiplied in, set in white and light ochre. The hero is a diagonal split: the charcoal field cut on a slant beside the office illustration, with a cut-out abacus on a ledger lying across the seam and breaking over the hero edge. Sticky media: the services column with the adviser picture stays in view while four service cards scroll, and each Services picture stays beside its notes. A cut-out seal stamp breaks over the calendar band. Every picture is a 2D flat illustration. Zen Kaku Gothic New for display, Plus Jakarta Sans for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download soroban-kaikei.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/soroban-kaikei.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Soroban Kaikei.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Soroban Kaikei: office board": what we are working on, places for new clients, the next deadline, reply time and closing days (home page).
- "Soroban Kaikei: office details" (hours, closing day, address, phone, email): the footer and Free first talk.
- "Soroban Kaikei: fees": Services and Free first talk.

The office, its advisers, address, telephone number and fees are fictional.

== Copyright ==

Soroban Kaikei is distributed under the terms of the GNU GPL v2 or later.
Fonts: Zen Kaku Gothic New (OFL-1.1), Medium, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Medium, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Plus Jakarta Sans (OFL-1.1), Latin variable, as WOFF2; see assets/fonts/OFL-ZenKakuGothicNew.txt, OFL-NotoSansTC.txt and OFL-PlusJakartaSans.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as 2D flat illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the office is fictional). The abacus and seal-stamp cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout).
- assets/images/hero.webp (home hero: a quiet office with a desk, an abacus, folders and a tall window, on the right of the diagonal split)
- assets/images/soroban-cutout.webp (home hero and page heads: an abacus on an open ledger, transparent cut-out that lies across the diagonal seam and breaks over the hero and page-head edges)
- assets/images/seal-cutout.webp (home calendar band: a seal stamp and ink pad, transparent cut-out that breaks over the band top edge)
- assets/images/pattern.webp (home calendar band: the abacus-bead and ledger-line pattern)
- assets/images/pattern-soft.webp (texture multiplied into every charcoal field and behind the journal (a lightened greyscale copy of pattern.webp))
- assets/images/advisor.webp (home services (the sticky picture): an adviser going through papers with two clients; The office)
- assets/images/service-returns.webp (home services and Services: blank tax forms, a pen and a seal)
- assets/images/service-books.webp (home services, Services and the steps: bookkeeping binders, a calculator and receipts)
- assets/images/service-startup.webp (home services, Services and the steps: a small new shop opening in the morning)
- assets/images/desk-receipts.webp (home services and Services: a box of receipts sorted into envelopes)
- assets/images/office-door.webp (The office and the steps: the office entrance with a sliding door and a plain curtain)
- assets/images/consult-table.webp (the steps and Newsletter: a quiet table for two with tea and a folder)
- assets/images/demo/consult-table.webp (demo import copy of assets/images/consult-table.webp)
- assets/images/demo/desk-receipts.webp (demo import copy of assets/images/desk-receipts.webp)
- assets/images/demo/office-door.webp (demo import copy of assets/images/office-door.webp)

== Changelog ==
= 1.0.1 =
* Updated theme files (functions.php, inc/editor-lang.php).
