# Kairo Supply

Kairo Supply is a photographic block theme designed for electrical wholesalers and trade counters. Built around a hairline grid, documentary photography, and structured trade account onboarding, it presents stocked ranges, cutting bay services, and contractor accounts with calm precision. Engineered for clarity and fast navigation, the theme delivers responsive tables, accessible typography, and purpose-built block patterns.

## Design
- White 176 px hairline grid with plus ticks, a giant ink wordmark cut by both viewport edges, a stadium-shaped documentary photograph with parallax, and one tagline spread across the full width.
- Egg-shaped story photograph, a blurred dark stage with a big list, outlined pills with a 5 px dot as the one repeated call to action.
- Fonts: Inter Tight (headings) and Hanken Grotesk (text), bundled as Latin variable subsets (OFL-1.1, see `assets/fonts/`).
- 13 documentary photographs in `assets/images/`; none contain text or logos.

## Structure
- `patterns/front-*.php`: the nine home sections (key visual, counter story, dark stage, how an account opens, range, prices, stories, team, apply).
- `templates/`: front page, page, index, single, archive, search, 404.
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll effects (parallax, reveal).
- `demo-content.json`: sample content (English); the header menu uses the home page anchors.
- Scroll effects respect `prefers-reduced-motion`; content is fully visible without JavaScript.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.
