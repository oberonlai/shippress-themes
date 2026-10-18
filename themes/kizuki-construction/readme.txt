=== Kizuki Construction ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kizuki Construction — a theme for a general construction contractor, set as one clean reading column under a formal white split header: the company name in the centre, the menu split two left and two right, and a Request a site survey button at the far right. Konjo navy (#113285) is the main colour: the metrics ledger, the survey call, every page head and the buttons are navy fields in white type. The front page is a metrics ledger: a white first screen on a 12-column grid with a giant handover count (1,284) in bengara Roboto Condensed on the left, the headline, one paragraph and one button on the right and a thin documentary photo strip of a concrete pour along the bottom; then a ledger of six published figures on a navy field, a ten-year safety trend chart, a register of eight recent projects with photo thumbnails, one wide site photograph, report downloads and a navy survey call where a transparent cut-out safety helmet breaks out over the band edge. Photographs are realistic documentary images (35mm wide, available light, handheld, fine grain, graded toward navy). Zen Kaku Gothic Antique for headings, Roboto Condensed for text and figures, Noto Sans TC for Traditional Chinese headings. Sample content in English, Traditional Chinese, Japanese, French and German. WCAG AA colours; no entrance animations.
== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download kizuki-construction.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kizuki-construction.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kizuki Construction.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, three notes with three categories and four tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language) or else the site language. The theme's own words (header button, footer lines, template headings) follow the same language (inc/i18n/<lang>.php). Vertical text appears only in Chinese and Japanese.

Three things are kept in one place each, as synced patterns (Appearance > Editor > Patterns) created once by inc/shared-info.php in the content language:
- "Kizuki Construction: site board": this week's survey slots, office hours, open site days, enquiry reply time and recruiting.
- "Kizuki Construction: company details" (hours, site surveys, address, phone, email): the footer and Request a site survey.
- "Kizuki Construction: typical programmes": Services and Request a site survey.

The company, its people, address, telephone number and figures are fictional.

== Copyright ==

Kizuki Construction is distributed under the terms of the GNU GPL v2 or later.
Fonts: Zen Kaku Gothic Antique (OFL-1.1), Medium and Bold Latin subsets plus subsets of the Japanese sample text; Roboto Condensed (OFL-1.1), the unmodified variable font file; Noto Sans TC (OFL-1.1), Bold, subset to the characters of the Traditional Chinese sample text (zh-TW pages use it, never a Japanese font). License texts: assets/fonts/OFL-ZenKakuGothicAntique.txt, assets/fonts/OFL-RobotoCondensed.txt, assets/fonts/OFL-NotoSansTC.txt.
= Images =

Images: AI-generated for this theme with Grok Build image_gen as realistic documentary photographs (35mm wide-angle, available daylight, handheld, fine grain, graded toward navy), released under GPL-2.0-or-later / CC0 (no stock images, no real people, no brands, no text).
- assets/images/pour.webp (front page photo strip and schedule: a concrete pour from above)
- assets/images/site.webp (site photograph, project register and page heads: a building under construction)
- assets/images/frame.webp (services and project register: a steel connection)
- assets/images/handover.webp (about and project register: a finished office lobby)
- assets/images/survey.webp (survey page and project register: a surveying level on a plot)
- assets/images/helmet-cutout.webp (survey call and page heads: a safety helmet, transparent cut-out that breaks out over the band edge)
- assets/images/demo/handover.webp (sample post image)
- assets/images/demo/frame.webp (sample post image)
- assets/images/demo/survey.webp (sample post image)
