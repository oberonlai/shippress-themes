# Kantei Valuers

Kantei Valuers is a long-form landing WordPress theme for commercial property valuers, surveyors and appraisal practices. One conversion page follows an instruction from a sixty-minute site hour to a signed report, with a full-bleed documentary photograph, two touching instruction panels, a stacking site-hour card deck, report rows, a fee table and a single Request an appraisal call to action.

## Structure
- `patterns/front-*.php`: the nine home sections (hero, practice, people, instructions, cases, site hour, report, fees, request band); `head-bar.php` and `foot-main.php` are the header and footer.
- `patterns/head-*.php`, `pair-*.php`, `inner-*.php`: inner-page photo heads, touching photo panels, scope, documents, recent, steps and the early-access form (builders in `inc/inner.php`).
- `templates/`: front page, page, single entry, news list, archive, category, tag, search and 404.
- `inc/i18n/<lang>.php`: the theme strings; `demo-content*.json`: sample content.
- Photos: `assets/images/` (AI-generated, GPL-2.0-or-later / CC0). See `readme.txt` for the list.
- Scroll effects: `assets/sp-scroll.css`, `assets/sp-scroll.js`.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.
