# Akiha College

Akiha College is an editorial WordPress theme built for an electrical apprenticeship college, featuring a framed hero window and docked navigation. Grounded in quiet monochrome tones and robust serif typography, it structures apprentice portfolio cases, practical assessment milestones, and employer routes with calm clarity. Designed for rigorous vocational presentation, it reflects authentic workshop standards and documented craftsmanship established in Calder Quay since 1998.

## Structure
- `templates/front-page.html`: the framed hero window (`patterns/front-hero.php`), the docked header, then the home page content.
- `patterns/front-*.php`: case wall, what the instructor watches, assessment rows, the on-site curtain, employers, fees, journal and the apply band with the newsletter slot.
- `inc/i18n/<lang>.php`: theme strings; `demo-content.json`: sample content (English for now).
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll reveal, count and parallax (unchanged shared files).
- `assets/shippress-forms.css`, `inc/shippress-forms.php`: optional contact and newsletter forms.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.
