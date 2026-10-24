# Shokutaku Dining

Shokutaku Dining is a hospitality theme for a neighbourhood restaurant on Havenstraat in Rotterdam, open since 2014 for weekday lunch and unhurried dinner. Forty seats surround an open kitchen; the sample copy publishes three sittings, six priced menus in euro and a private room for eight to twelve guests.

## Structure
- `patterns/front-*.php`: the ten home sections (arch hero with info bar, TABLE ghost with scattered arches, sittings, parallax room band, price list, pill dish strip, people, visit, notes, booking close).
- `templates/`: front page, page, wide page, single, archive, search and 404.
- `parts/`: header (wordmark, centred menu, fixed reservation tab, Book pill on mobile) and the deep footer.
- `demo-content.json`: sample content (English); `inc/demo-import.php` creates it on activation.
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll reveals and the parallax layer (class names only; no dependencies).
- Photos: `assets/images/` (AI-generated, GPL-2.0-or-later / CC0). See `readme.txt` for the list.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.
