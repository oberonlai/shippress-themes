# Shokutaku Dining

Shokutaku Dining is a hospitality theme for a neighbourhood restaurant on Havenstraat in Rotterdam, open since 2014 for weekday lunch and unhurried dinner. Forty seats surround an open kitchen; the sample copy publishes three sittings, six priced menus in euro and a private room for eight to twelve guests.

## Structure
- `patterns/front-*.php`: the ten home sections (arch hero with info bar, TABLE ghost with scattered arches, sittings, parallax room band, price list, pill dish strip, people, visit, notes, booking close).
- `templates/`: front page, page, wide page, single, archive, search and 404.
- `parts/`: header (wordmark, centred menu, fixed reservation tab, Book pill on mobile) and the deep footer.
- `demo-content.json`: sample content (English); `inc/demo-import.php` creates it on activation.
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll reveals and the parallax layer (class names only; no dependencies).
- Photos: `assets/images/` (AI-generated, GPL-2.0-or-later / CC0). See `readme.txt` for the list.

## Status
Version 1.0.0, English home page complete. Inner pages (menus, reservations, private dining, about, people, growers, wine, visit, journal, contact, newsletter) are one-heading pages until the inner-page and five-language pass. The `screenshot.png` is the first screen of the home page. Both hero and room band use `sp-parallax`; the hero arch frame uses `overflow: clip` so the view timeline follows the page scroll.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="Shokutaku Dining home page on desktop"></td>
<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="Shokutaku Dining home page on mobile"></td>
</tr>
</table>

- Menus: [desktop](screenshots/menus-desktop.webp) · [mobile](screenshots/menus-mobile.webp)
- Reservations: [desktop](screenshots/reservations-desktop.webp) · [mobile](screenshots/reservations-mobile.webp)
- Private dining: [desktop](screenshots/private-dining-desktop.webp) · [mobile](screenshots/private-dining-mobile.webp)
- About: [desktop](screenshots/about-desktop.webp) · [mobile](screenshots/about-mobile.webp)
- People: [desktop](screenshots/people-desktop.webp) · [mobile](screenshots/people-mobile.webp)
- Growers: [desktop](screenshots/growers-desktop.webp) · [mobile](screenshots/growers-mobile.webp)
- Wine: [desktop](screenshots/wine-desktop.webp) · [mobile](screenshots/wine-mobile.webp)
- Visit: [desktop](screenshots/visit-desktop.webp) · [mobile](screenshots/visit-mobile.webp)
- Journal: [desktop](screenshots/journal-desktop.webp) · [mobile](screenshots/journal-mobile.webp)
- News: [desktop](screenshots/news-desktop.webp) · [mobile](screenshots/news-mobile.webp)
- Article: [desktop](screenshots/article-desktop.webp) · [mobile](screenshots/article-mobile.webp)
- Category: [desktop](screenshots/category-desktop.webp) · [mobile](screenshots/category-mobile.webp)
- Tag: [desktop](screenshots/tag-desktop.webp) · [mobile](screenshots/tag-mobile.webp)
- Newsletter: [desktop](screenshots/newsletter-desktop.webp) · [mobile](screenshots/newsletter-mobile.webp)
- Contact: [desktop](screenshots/contact-desktop.webp) · [mobile](screenshots/contact-mobile.webp)
- Other languages (home page): [zh-TW](screenshots/zh-TW/home-desktop.webp) · [ja](screenshots/ja/home-desktop.webp) · [fr](screenshots/fr/home-desktop.webp) · [de](screenshots/de/home-desktop.webp)
<!-- screenshots:end -->
