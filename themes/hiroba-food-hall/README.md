# Hiroba Food Hall

A quiet block theme (type hospitality) for a city food hall that runs several kitchens under one roof, built around the weekday lunch. It works without WooCommerce or any plugin; a table is held with a plain contact form.

## Signature
- Framed window: a rounded window on a pale ground holding a sideways strip of film-grain photographs, with previous/next buttons, an hours chip and a short line cue. The next frame peeks in at the edge.
- Today's-hours strip: a vertical hairline between the opening hours and three icon links, closed by a convex arc into the white page.
- Kitchen cards: a 16:9 cover, a round medallion straddling the cover edge, a gold-flanked "Today's plates" line and three square thumbnails.
- Caps title lockups (caps title, sub-label, short gold rule, statement with gold words) on every section.
- A horizontal lunch-hour ruler with a gold peak bar, and a parallax hall photograph.

## Pages
Home, Kitchens, Lunch hour, Tables, Visit, About, Journal (guest notes), Contact.

## Patterns
- `header-bar`, `footer-body`
- `front-hero`, `front-hours`, `front-kitchens`, `front-lunch`, `front-hall`, `front-tables`, `front-notes`, `front-pause`, `front-visit`
- `tpl-page`, `tpl-journal`, `tpl-single`, `tpl-archive`, `tpl-search`, `tpl-404`

## Fonts
Fraunces (headings, figures) and Literata (reading), both SIL OFL 1.1, Latin variable WOFF2; licences in assets/fonts.

## Images
AI-generated for this theme as film-grain photographs with no text or logos (assets/images/); see readme.txt for the list. No transparent cut-outs.

## Motion
assets/sp-scroll.css and assets/sp-scroll.js give gentle reveal, stagger, count and parallax effects; assets/hb-strip.js scrolls the window strip from its buttons. All of it stops under prefers-reduced-motion and content stays visible without JavaScript.
