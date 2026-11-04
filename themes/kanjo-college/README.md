# Kanjo College

Kanjo College is an accountancy training college WordPress theme designed for adult education and professional studies. Built around structured process timelines, framed hero windows, and ledger-inspired editorial typography, it presents course papers, schedules, and tuition fees with clarity and restraint. It supports day and evening term timetables, full-width pricing ledgers, and responsive course progression bars.

## Structure
- `patterns/front-*.php`: the ten home sections (framed window cover, intro, four papers, twelve-week row, evening pause, lecturers, fees, stories, taking a place, news); `route-bar.php` and `foot-main.php` are in the footer part.
- `templates/`: front page, page, single, archive, category, tag, search, 404.
- `assets/sp-scroll.*`: reveal, stagger, count and parallax effects; `assets/line/`: line-art SVG.
- Photos: `assets/images/` (AI-generated, GPL-2.0-or-later / CC0). See `readme.txt` for the list.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

## Editor notes
- Block editor check: all home blocks and templates parse without invalid or missing blocks (the fee table keeps `hasFixedLayout` and styles the price column with `:last-child`, since the editor drops classes on table cells).
- Navigation: the demo import builds the main menu from real pages (Papers, Term calendar, Lecturers, Fees & funding, Stories).
