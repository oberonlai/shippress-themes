# Hashira Partners

Hashira Partners is a small-warehouse leasing brokerage in Port Merrin, founded in 2014. The site presents six buildings and 50 bays from 90 to 420 m², and takes viewing requests for Eastgate, Riverside and Mill Cross. Office hours are Mon–Fri 08:30–17:30, and viewing hours are Tue–Sat 09:00–15:00.

## Structure
- `patterns/front-*.php`: the seven home sections (hero, vision, marquee, cases, buildings, viewing, request).
- `parts/`: transparent overlay header, black footer. `templates/`: front page and plain templates.
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: ShipPress scroll effects (reveal, stagger, marquee, parallax).
- `demo-content.json`: sample content (English; the other languages follow with the inner pages).
- Photos: `assets/images/` (AI-generated, GPL-2.0-or-later / CC0). See `readme.txt` for the list.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

## Status
Home page (English) is complete: gates pass at 390 px and 1280 px, 13 block documents validate, editor and front fonts match. The inner pages (Buildings, Cases, Viewings, Fees, Team), the language switch, the privacy, terms and thanks pages and the zh-TW, ja, fr and de versions come in the next step; the menu and "View More" links point to those pages.
