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
<td valign="top"><img src="https://shots.codotx.com/shokutaku-dining/home-desktop.webp" width="640" alt="Shokutaku Dining home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/shokutaku-dining/home-mobile.webp" width="200" alt="Shokutaku Dining home page on mobile"></td>
</tr>
</table>

- Menus: [desktop](https://shots.codotx.com/shokutaku-dining/menus-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/menus-mobile.webp)
- Reservations: [desktop](https://shots.codotx.com/shokutaku-dining/reservations-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/reservations-mobile.webp)
- Private dining: [desktop](https://shots.codotx.com/shokutaku-dining/private-dining-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/private-dining-mobile.webp)
- About: [desktop](https://shots.codotx.com/shokutaku-dining/about-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/about-mobile.webp)
- People: [desktop](https://shots.codotx.com/shokutaku-dining/people-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/people-mobile.webp)
- Growers: [desktop](https://shots.codotx.com/shokutaku-dining/growers-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/growers-mobile.webp)
- Wine: [desktop](https://shots.codotx.com/shokutaku-dining/wine-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/wine-mobile.webp)
- Visit: [desktop](https://shots.codotx.com/shokutaku-dining/visit-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/visit-mobile.webp)
- Journal: [desktop](https://shots.codotx.com/shokutaku-dining/journal-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/journal-mobile.webp)
- News: [desktop](https://shots.codotx.com/shokutaku-dining/news-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/shokutaku-dining/article-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/shokutaku-dining/category-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/shokutaku-dining/tag-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/shokutaku-dining/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/shokutaku-dining/contact-desktop.webp) · [mobile](https://shots.codotx.com/shokutaku-dining/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/shokutaku-dining/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/shokutaku-dining/ja/home-desktop.webp) · [fr](https://shots.codotx.com/shokutaku-dining/fr/home-desktop.webp) · [de](https://shots.codotx.com/shokutaku-dining/de/home-desktop.webp)
<!-- screenshots:end -->
