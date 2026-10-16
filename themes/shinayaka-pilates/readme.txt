=== Shinayaka Pilates ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Shinayaka Pilates — a pilates studio theme with a formal header (studio name, menu and a Book a trial class button) whose menu runs down a fixed indigo side rail on wide screens (stacked vertical words in Chinese and Japanese). Yamabuki golden yellow (#F8B500) is the main colour: the hero field, every page head and the method band are yamabuki fields with a fan-and-wave pattern texture multiplied in, set with indigo type. The hero is split on a diagonal: the yamabuki field beside a flat illustration of the studio, with a cut-out figure stretching across the seam and over the hero edge; a cut-out ring and mat break over the method band, and the figure stretches over every page head. Classes sit in an asymmetric masonry. Every picture is a 2D flat illustration. Yomogi for display, DM Sans for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download shinayaka-pilates.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/shinayaka-pilates.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Shinayaka Pilates.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Shinayaka Pilates: studio board": the next free place, trial classes, the new class, group size and the closing day (home page).
- "Shinayaka Pilates: studio details" (hours, closing day, address, phone, email): the footer and Book a trial.
- "Shinayaka Pilates: class prices": Classes and Book a trial.

The studio, its teacher, address, telephone number and prices are fictional.

== Copyright ==

Shinayaka Pilates is distributed under the terms of the GNU GPL v2 or later.
Fonts: Yomogi (OFL-1.1), Regular, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Regular, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and DM Sans (OFL-1.1), Latin variable, as WOFF2; see assets/fonts/.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as 2D flat illustrations, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the studio is fictional). The figure and ring cut-outs have transparent backgrounds (scripts/grok-image.sh --cutout). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero.webp (home hero: a quiet studio with a wooden reformer by a sunny window, the right half of the diagonal split)
- assets/images/pose-cutout.webp (home hero and page heads: a woman in an indigo leotard in a side-leg stretch, transparent cut-out that stretches across the diagonal seam and over the hero and page-head edges)
- assets/images/ring-cutout.webp (home method band: a pilates ring and a rolled mat, transparent cut-out that breaks over the band top edge)
- assets/images/pattern.webp (home method band: the fan-and-wave pattern tile in yamabuki and indigo)
- assets/images/pattern-soft.webp (pattern texture multiplied into every yamabuki and pale yamabuki field (a lightened greyscale copy of pattern.webp))
- assets/images/class-reformer.webp (home classes and Classes: a woman on a reformer with the teacher beside her)
- assets/images/class-mat.webp (home classes, Classes and the first-visit steps: three women doing mat pilates)
- assets/images/class-private.webp (home classes, Classes and the first-visit steps: a teacher correcting a client posture)
- assets/images/spine.webp (home classes and Classes: a woman rolling up into a bridge)
- assets/images/teacher.webp (The studio: the teacher)
- assets/images/studio-door.webp (The studio and the first-visit steps: the studio entrance with a plain curtain and a bicycle)
- assets/images/breath.webp (first-visit steps and Newsletter: a seated woman breathing with her hands on her ribs)
- assets/images/demo/breath.webp (demo import copy of assets/images/breath.webp)
- assets/images/demo/spine.webp (demo import copy of assets/images/spine.webp)
- assets/images/demo/class-mat.webp (demo import copy of assets/images/class-mat.webp)
