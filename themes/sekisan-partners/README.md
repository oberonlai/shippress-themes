# Sekisan Partners

Sekisan Partners is an independent building cost consultancy WordPress theme crafted for precise commercial presentation and clear project budgeting. Designed around an architectural split-screen layout with an ink framing rail and bold index typography, it guides prospective clients smoothly from early concept estimates to formal proposal requests. Built for longform clarity, the theme delivers dependable performance across all screen sizes.

## Design
- A fixed 84 px solid ink-green rail frames every page (round "up" button, language codes, vertical wordmark); a 56 px top bar replaces it below 1024 px.
- Numbered caps index rows with blue and teal numerals, and section headings with a coloured first letter.
- Square buttons with a 3 px border and an arrow, one repeated call to action; a coral tile and a coral first letter as the only warm spot.
- Fonts: Albert Sans (headings) and Onest (text), bundled as Latin variable subsets (OFL-1.1, see `assets/fonts/`).
- 16 documentary high-key photographs in `assets/images/`; none contain text or logos.

## Structure
- `patterns/front-*.php`: the nine home sections (hero, gap, index, estimate, handover, fees, cases, people, request).
- `templates/`: front page, page, page-inner (each inner page carries its own coloured-first-letter heading), index/home/archive (notes as hairline rows), single, search, 404.
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll effects (parallax, reveal).
- `demo-content.json`: sample content (English): home plus About, How we estimate, Fees & scope, Cases, Cost letter, Notes, Privacy, Terms, Thanks and Request pages, plus one note (Method category); the header menu links to the inner pages.
- Scroll effects respect `prefers-reduced-motion`; content is fully visible without JavaScript.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.
