=== Tsukuri Design Office ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Tsukuri Design Office is a calm, portfolio-focused WordPress theme designed for industrial and product design studios taking consumer goods and medical devices from foam model to factory floor. Rooted in high-key documentary photography and subtle mauve-grey tonal surfaces, the design highlights physical prototypes through balanced twin-image proof pairs and structured specification rows. Clean sans typography in Inter Tight and IBM Plex Sans frames real ergonomic observations and factory tooling narratives without decorative distraction.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). The home page opens on a flat pale mauve-grey title strip with a large title, a short lede, two buttons, a stacked collage of three overlapping photographs (foam model, tool sample, production part) that crosses the seam and a ruled row of four studio figures, then a foam-model row, the problem and the method as caption rows, a full-bleed model shop band, twin proof photographs, product rows, a dark statement band, one way to start a project and the journal. Inner pages: Work (four cases as twin photographs), Method (four stages), Medical devices, Consumer products, Model shop, Studio (eight people as ruled rows), Fees (a six-line fee table that stacks on phones), Start a project, Contact and Newsletter, each opening with a short title strip and a photograph that crosses the seam; single posts open with a twin photograph pair. See README.md for the design notes.

== Installation ==

1. Download tsukuri-design.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tsukuri-design.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsukuri Design Office.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, journal entries with categories and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice.

The scroll effects (assets/sp-scroll.css and sp-scroll.js) respect prefers-reduced-motion and show the final state without JavaScript. The newsletter and contact slots use Contact Form 7, WPForms, MailPoet or Mailchimp for WP when active; without a plugin they fall back to an email link.

The studio, its people, address, telephone number, email and prices are fictional.

== Copyright ==

Tsukuri Design Office is distributed under the terms of the GNU GPL v2 or later.
Fonts: Inter Tight (OFL-1.1), Latin variable; IBM Plex Sans (OFL-1.1), Latin variable; Noto Sans TC and Noto Sans JP (OFL-1.1), subsets for the zh-TW and ja sample text; all WOFF2, see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as photorealistic high-key studio photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the studio is fictional). No transparent cut-outs are used.
- assets/images/demo/p13-research-notes.webp (demo/ copy imported into the Media Library as a post featured image; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/demo/p14-sanding-foam.webp (demo/ copy imported into the Media Library as a post featured image; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/demo/p15-first-off.webp (demo/ copy imported into the Media Library as a post featured image; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p01-foam-handset.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p02-handset-row.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p03-flawed-sample.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p04-cutaway-handset.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p05-model-shop.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p06-case-a-before.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p07-case-a-after.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p08-case-b-before.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p09-case-b-after.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p10-dose-pen.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p11-speaker.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p12-handset-bed-rail.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p13-research-notes.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p14-sanding-foam.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p15-first-off.webp (home page photograph; AI-generated, GPL-2.0-or-later / CC0)
- assets/images/p16-pen-parts.webp (inner page photograph; AI-generated, GPL-2.0-or-later / CC0)

== Changelog ==
= 1.0.1 =
* Redesigned the home hero: a larger title with a short lede and two buttons (Start a project, See the work), a stacked collage of three overlapping photographs labelled Foam 08, Tool sample and Production that crosses the strip seam, and a ruled row of four studio figures. The grey strip no longer stops in the middle of the hero. New hero text added to all five languages.

= 1.0.0 =
* First release.
