# Hinata Market

Hinata Market is a gazette-inspired WordPress block theme designed for weekend farmers' markets, community food hubs and local grower collectives. Set within a crisp ruled frame, it presents weekly stall allocations, seasonal harvests and market notices through a printed-newspaper layout.

## Structure
- `patterns/front*.php`, `ticker.php`, `stalls-strip.php`, `season-band.php`, `apply.php`, `fees.php`, `foot-trio.php`: the home page, in that order.
- `parts/header.html`, `parts/footer.html` load the `header-main` and `footer-main` patterns (masthead strip, one menu, colophon).
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll reveal, marquee and parallax (unchanged shared files).
- `assets/shippress-forms.css`, `inc/shippress-forms.php`: optional contact and newsletter forms (mailto fallback without plugins).
- `inc/i18n/<lang>.php`: theme strings; `demo-content.json`: sample content.

Navigation: one top menu (About, Notices, Stalls, Visit, Apply, Contact). Fonts: Hanken Grotesk (display) and Albert Sans (text), both OFL-1.1, listed in `theme-meta.json`.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

## Notes
- Headings and notice titles use the deep russet (`#8A5638`) so the colour carries through the type; body copy stays in ink.
- Menu items link to real pages (About, Notices, Stalls, Visit, Apply, Contact) created by the demo import.
