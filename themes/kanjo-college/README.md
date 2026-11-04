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

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/kanjo-college/home-desktop.webp" width="640" alt="Kanjo College home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/kanjo-college/home-mobile.webp" width="200" alt="Kanjo College home page on mobile"></td>
</tr>
</table>

- About: [desktop](https://shots.codotx.com/kanjo-college/about-desktop.webp) · [mobile](https://shots.codotx.com/kanjo-college/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/kanjo-college/news-desktop.webp) · [mobile](https://shots.codotx.com/kanjo-college/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/kanjo-college/article-desktop.webp) · [mobile](https://shots.codotx.com/kanjo-college/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/kanjo-college/category-desktop.webp) · [mobile](https://shots.codotx.com/kanjo-college/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/kanjo-college/tag-desktop.webp) · [mobile](https://shots.codotx.com/kanjo-college/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/kanjo-college/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/kanjo-college/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/kanjo-college/contact-desktop.webp) · [mobile](https://shots.codotx.com/kanjo-college/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/kanjo-college/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/kanjo-college/ja/home-desktop.webp) · [fr](https://shots.codotx.com/kanjo-college/fr/home-desktop.webp) · [de](https://shots.codotx.com/kanjo-college/de/home-desktop.webp)
<!-- screenshots:end -->
