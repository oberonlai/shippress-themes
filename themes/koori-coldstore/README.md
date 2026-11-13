# Koori Cold Stores

Koori Cold Stores is a regional cold-storage operator at Northmere Port. A shipper is given a numbered room in a chilled, frozen or deep-frozen band, and the room is held there with a reading every 10 minutes. The theme presents twelve rooms, 6,400 pallet positions and eight sealed dock doors on one long capacity-enquiry page.

## Structure
- `patterns/front-*.php`: hero (cross-fading dock photographs, ring pager, tilted line), room-log strip, held (counting facts), rooms (fading patina band with three fused cards), the dock (parallax band), booking, the day (sideways strip), rates, cases, enquiry and room alerts.
- `assets/kc-pager.js`: slideshow pause button only. `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll reveal, count and parallax (unchanged shared files).
- `assets/shippress-forms.css`, `inc/shippress-forms.php`: optional contact and newsletter forms (mailto fallback without plugins).
- `inc/i18n/<lang>.php`: theme strings; `demo-content.json`: sample content.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.
