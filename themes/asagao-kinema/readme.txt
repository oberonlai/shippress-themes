=== Asagao Kinema ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A cinematic, bold and Japanese-modern events theme for a one-screen independent cinema in a fictional town. Shu vermilion covers the hero, the page heads, the intertitle cards and the ticket stub (always with sumi ink text), a sumi film strip runs under it, tokiwa green carries the membership band, and washi paper is kept for reading; Antonio, a tall condensed display, over Chivo. The pictures are sumi-e ink paintings with vermilion washes (raster WebP); in the hero a cut-out ink projector wound with morning glories breaks out of the vermilion band onto the film strip. A fixed sumi top bar (H6) holds the name, the programme dateline in ruled cells, the menu and a ticket button, with a sprocket edge. The home page is a horizontal scroll strip (L4): a giant headline with a vertical (tategaki) label on the edge, then the week as a film strip that scrolls sideways (stills alternate with vermilion and green intertitle cards), the prices on a vermilion ticket stub, a green membership band and the journal. The Programme page lays the same week out as a contact sheet. The footer rolls like end credits (F9). Pages: Programme, Visit & tickets, Membership, About, Journal, Newsletter and Contact. The programme, the ticket prices and the dateline are synced patterns, edited once.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download asagao-kinema.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/asagao-kinema.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Asagao Kinema.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and eight tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

This week's programme, the ticket prices and the dateline in the top bar are kept in one place each: three synced patterns, "Asagao Kinema: this week's programme", "Asagao Kinema: ticket prices" and "Asagao Kinema: programme dateline" (Appearance > Editor > Patterns), created once by inc/shared-info.php. Edit the programme every Monday and the home and Programme pages change together; the prices appear on the home, Visit & tickets and Membership pages and in the footer credits (hidden there on pages that already show them).

The cinema, the films, the people, the address, telephone numbers and prices are fictional.

== Changelog ==

= 1.1.0 =
* Redesign (user feedback: looked the same as Yoru Chocolate and Tsuba Millinery, dull one-tone plum). New archetype: horizontal scroll strip. Fixed top bar with ruled cells (H6), end-credits footer (F9), home as a sideways film strip (L4); the Programme page shows the same synced programme as a contact sheet.
* New palette from Japanese traditional colours, used big: shu vermilion #EB6101 (hero, page heads, intertitles, ticket stub; sumi text on it 5.07:1), sumi #1C1C1C (bar, film strip, credits, text), tokiwa green #007B43 (membership band, intertitles; gofun text 5.27:1), washi #F7F3EA for reading, deep shu #A84200 links (5.51:1). The palette slugs keep their 1.0 names, so colours picked in existing content follow the new palette.
* New fonts: Antonio (display) and Chivo (text), replacing Piazzolla and Libre Franklin.
* New sumi-e ink illustrations with vermilion washes under the same file names (pages imported with 1.0 show them too), plus ferry.webp, facade.webp, four new journal pictures for new imports and a cut-out projector (projector-cutout.webp, transparent WebP) that breaks out of the hero band.
* Hero: giant headline, vertical (tategaki) label on the right edge, the cut-out projector overlapping the band edge and the film strip.
* Already-imported pages keep their content and get the new look from the stylesheet; the importer is unchanged and re-running it adds nothing.

= 1.0.1 =
* theme-meta.json: industry is the slug "independent-cinema" (the ShipPress catalogue only accepts slugs). No visual change.

= 1.0.0 =
* Initial release.

== Copyright ==

Asagao Kinema WordPress Theme, Copyright 2026 ShipPress contributors.
Asagao Kinema is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Antonio
Files: assets/fonts/Antonio[wght].ttf
Copyright 2013 The Antonio Project Authors (https://github.com/googlefonts/antonioFont)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Antonio.txt, https://openfontlicense.org); no Reserved Font Name.
The unmodified upstream variable font from https://github.com/google/fonts/tree/main/ofl/antonio, bundled so the theme makes no third-party requests.

Chivo
Files: assets/fonts/Chivo[wght].ttf
Copyright 2019 The Chivo Project Authors (https://github.com/Omnibus-Type/Chivo)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Chivo.txt, https://openfontlicense.org); no Reserved Font Name.
The unmodified upstream variable font from https://github.com/google/fonts/tree/main/ofl/chivo, bundled so the theme makes no third-party requests.

= Images =

assets/images/projector-cutout.webp - sumi-e ink illustration with vermilion washes, transparent cut-out (scripts/grok-image.sh --cutout), AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/hero.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/projector.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/foyer.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/reels.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/ferry.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/facade.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/hero.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/projector.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/foyer.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/reels.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/piano.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/lanterns.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/shadows.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
assets/images/demo/lightbox.webp - sumi-e ink illustration with vermilion washes, AI-generated for this theme with Grok Build (image_gen); License: GPL-2.0-or-later / CC0
