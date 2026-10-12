=== Mimi Veterinary ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A clean, serene and minimal theme for a calm neighbourhood veterinary clinic for dogs, cats and small animals: a mist ground, sage-mist panels, deep teal ink for text and bands, and one muted teal used only for paw dots, map pins and hairlines; Lora over Be Vietnam Pro. A two-tier header puts today's hours and the phone number in a utility strip above the main bar. The home page is map first: the title beside a paper locator card with a quiet abstract street map, the address, parking, nearest station, today's hours and the night-emergency partner; then three care promises, services, the vets, first-visit steps, a fees teaser and the journal, separated by quiet paw-print dots. The footer is a deep teal 'Book a visit' band over the clinic details and a small sitemap. With services, first visit, fees, about, contact and journal. Hours, phone, address and emergency partner are edited once (Appearance > Clinic details); the locator card and the fees are synced patterns.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download mimi-veterinary.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/mimi-veterinary.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Mimi Veterinary.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and six tags, the menu, and sets the front page and posts page. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

The opening hours, phone number, email, address and night-emergency partner are kept in one place: Appearance > Clinic details (inc/clinic-info.php). The "Clinic details" block shows them in the utility strip (today's hours, in the site's own timezone, and the phone), in the locator card, on the Contact page and in the footer. The locator card (map, address, parking, station, today's hours, emergency partner) and the fees table are two synced patterns, "Mimi Veterinary: locator card" and "Mimi Veterinary: fees" (Appearance > Editor > Patterns), created once by inc/shared-info.php.

The booking request is a button that opens an email with the subject "Booking request"; change the address on the Contact page. The clinic, the vets, the partner hospital, the town, the address, telephone numbers and prices are fictional.

== Changelog ==

= 1.0.1 =
* Phones (360–599px): the wordmark and the "Book a visit" button each stay on one line in the header.

= 1.0.0 =
* Initial release.

== Copyright ==

Mimi Veterinary WordPress Theme, Copyright 2026 ShipPress contributors.
Mimi Veterinary is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Fonts

Lora
Copyright 2011 The Lora Project Authors (https://github.com/cyrealtype/Lora-Cyrillic), with Reserved Font Name "Lora".
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Lora.txt, https://openfontlicense.org)
Source: https://github.com/cyrealtype/Lora-Cyrillic (fonts/webfonts/Lora[wght].woff2, the authors' own web font, unmodified; listed in https://github.com/google/fonts/tree/main/ofl/lora)

Be Vietnam Pro
Copyright 2021 The Be Vietnam Pro Project Authors (https://github.com/bettergui/BeVietnamPro)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-BeVietnamPro.txt, https://openfontlicense.org)
Source: https://github.com/google/fonts/tree/main/ofl/bevietnampro (Light, Regular, Medium and SemiBold, subset to Latin as WOFF2)

Images

AI-generated for this theme, released under GPL-2.0-or-later / CC0:
- assets/images/demo/cat.jpg
- assets/images/demo/exterior.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/puppy.jpg
- assets/images/demo/vet.jpg
- assets/images/demo/waiting.jpg
- assets/images/demo/walk.jpg
- assets/images/cat.jpg
- assets/images/exterior.jpg
- assets/images/hero.jpg
- assets/images/puppy.jpg
- assets/images/vet.jpg
- assets/images/waiting.jpg
- assets/images/walk.jpg

The paw mark, the paw-dot dividers and the abstract street map are simple shapes drawn in SVG and CSS.
