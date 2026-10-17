=== Kanna Komuten ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kanna Komuten — a machiya renovation carpenter theme built on split screens, with a formal top header: the workshop name and tagline on the left, the Request a survey button on the right, and on wide screens the menu as a fixed sumi-ink side rail of numbered entries down the left edge (an overlay menu on phones and tablets). Ukon turmeric yellow (#FABF14) is the main colour: the hero half, the workshop band, every page head and the overlay menu are solid turmeric fields set in sumi ink. The hero is a full-bleed 35mm film photograph of a machiya under renovation running edge to edge, with the left half covered by the turmeric text panel; a cut-out hand plane sits on the seam and breaks out over the photograph and the hero bottom edge. Split-screen layout throughout: recent work as a text half beside a tall photograph, the workshop band as a turmeric half with the founding year in giant type beside a half of three photographs, projects as split rows, and every page head as a turmeric half beside a full-height photograph. Every picture is a photorealistic film-grain photograph (50mm, natural side light, fine grain, faded colour graded toward turmeric). Zen Kaku Gothic Antique for display, Schibsted Grotesk for reading, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German; vertical labels only in Chinese and Japanese. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kanna-komuten.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kanna-komuten.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kanna Komuten.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three journal notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Kanna Komuten: workshop board": the job on site now, next free survey days, survey, estimate and booking (home page).
- "Kanna Komuten: workshop details" (opening hours, survey times, address, phone, email): the footer and Request a survey.
- "Kanna Komuten: price guide": Projects and Request a survey.

The workshop, its carpenters, the houses, address, telephone number and prices are fictional.

== Copyright ==

Kanna Komuten is distributed under the terms of the GNU GPL v2 or later.
Fonts: Zen Kaku Gothic Antique (OFL-1.1), Bold, subset to Latin and to the characters of the Japanese sample text; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never the Japanese subset); and Schibsted Grotesk (OFL-1.1), Latin variable, as WOFF2; see assets/fonts/OFL-ZenKakuGothicAntique.txt, OFL-NotoSansTC.txt and OFL-SchibstedGrotesk.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as photorealistic 35mm film-grain photographs colour graded toward turmeric yellow, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the houses are fictional). The hand plane cut-out has a transparent background (scripts/grok-image.sh --cutout).
- assets/images/plane-cutout.webp (home hero, workshop band and page heads: a Japanese hand plane, transparent cut-out that breaks over the split seams and the bottom edges)
- assets/images/hero-workshop.webp (home hero (full-bleed), The workshop and Request a survey page head: a machiya interior under renovation)
- assets/images/lattice.webp (home recent work and Projects: a restored lattice front)
- assets/images/tatami-room.webp (home recent work, steps and Projects: a renovated tatami room)
- assets/images/beam.webp (home recent work, steps and Projects: a spliced roof beam)
- assets/images/kitchen.webp (home recent work, workshop band and Projects: a renovated earthen-floor kitchen)
- assets/images/courtyard.webp (home recent work and Letters page head: an inner courtyard garden)
- assets/images/joinery.webp (workshop band, Projects page head and Letters: timber joinery)
- assets/images/shavings.webp (workshop band, steps and The workshop page head: hands pushing a plane)
- assets/images/tools.webp (steps and The workshop: carpentry tools on a bench)
- assets/images/demo/joinery.webp (demo import copy of assets/images/joinery.webp)
- assets/images/demo/tools.webp (demo import copy of assets/images/tools.webp)
- assets/images/demo/beam.webp (demo import copy of assets/images/beam.webp)
