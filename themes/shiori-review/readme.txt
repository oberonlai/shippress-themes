=== Shiori Review ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, typographic media theme for an independent literary quarterly of essays and poems. Oat paper, warm stone and sumi ink, with a faded red pencil used for thin bookmark ribbons and rules and a deeper red-brown for links. The masthead sets a huge Source Serif 4 wordmark over a dateline (issue number, season, place and cadence) and a ruled menu row; on phones the wordmark and a Menu button share one line. The home page is a contents page: the issue title and cover beside a numbered index of essays and poems, each with its author, an Essay or Poem chip and a page-like folio in Azeret Mono, with a bookmark ribbon hanging over each part; then a note from the editor, a short subscribe-and-submit note and the journal. The footer is a calm strip of issue covers over the colophon. With Issues (an archive with covers), Submissions, Subscribe, Editors, Journal, Newsletter and Contact. The magazine details and the subscription + submissions rates are each one synced pattern. WCAG AA colours; no entrance animations.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download shiori-review.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/shiori-review.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Shiori Review.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Two things are kept in one place each, as synced patterns (Appearance > Editor > Patterns), created once by inc/shared-info.php:
- "Shiori Review: magazine details": the current issue line (Issue 12 · Autumn 2026), the place, the cadence, the editorial office address, the email and social links. Shown in the masthead dateline (the issue, place and cadence line only), the footer colophon, Contact and Subscribe. Change the issue line here once a quarter.
- "Shiori Review: subscription and submissions": subscription rates with the editable "Most chosen" badge, and the reading windows, next deadline, lengths, payment and the submissions address. Shown on Subscribe (subscription first), Submissions (submissions first) and, without the longer rows, on the home page.

The contents index on the home page, the issues archive and the editors are ordinary editable blocks in those pages. The magazine, its editors, contributors, district, city, address, rates and the arts fund are fictional.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Shiori Review WordPress Theme, Copyright 2026 ShipPress contributors.
Shiori Review is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Source Serif 4
Copyright 2014 The Source Serif 4 Project Authors (https://github.com/adobe-fonts/source-serif)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-SourceSerif4.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/sourceserif4 (no Reserved Font Name; variable, instanced to weights 400-600 / italic 400-500, optical sizes 8-60, subset to Latin as WOFF2)

Azeret Mono
Copyright 2021 The Azeret Project Authors (https://github.com/displaay/azeret)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-AzeretMono.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/azeretmono (no Reserved Font Name; variable, instanced to weights 400-500, subset to Latin as WOFF2)

Images

All photographs in assets/images/ (and their copies in assets/images/demo/) were AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/binder.jpg
- assets/images/contributor.jpg
- assets/images/cover-01.jpg
- assets/images/cover-02.jpg
- assets/images/cover-03.jpg
- assets/images/cover-04.jpg
- assets/images/cover-current.jpg
- assets/images/editor.jpg
- assets/images/essay-desk.jpg
- assets/images/folio-detail.jpg
- assets/images/poem-window.jpg
- assets/images/poet.jpg
- assets/images/reading-room.jpg
- assets/images/street.jpg
- assets/images/subscription.jpg
- assets/images/demo/binder.jpg
- assets/images/demo/contributor.jpg
- assets/images/demo/cover-01.jpg
- assets/images/demo/cover-02.jpg
- assets/images/demo/cover-03.jpg
- assets/images/demo/cover-04.jpg
- assets/images/demo/cover-current.jpg
- assets/images/demo/editor.jpg
- assets/images/demo/essay-desk.jpg
- assets/images/demo/folio-detail.jpg
- assets/images/demo/poem-window.jpg
- assets/images/demo/poet.jpg
- assets/images/demo/reading-room.jpg
- assets/images/demo/street.jpg
- assets/images/demo/subscription.jpg

The bookmark ribbons, folios and rules are CSS made for this theme (GPL-2.0-or-later).
