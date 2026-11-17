# Kosame Hot Pot

A quiet block theme for hot pot, shabu-shabu and sukiyaki restaurants that take table and private-room bookings.

- **Photo stage**: the left half of every page is a sticky low-key photo stage (five photographs cross-fading on a timer in CSS, five dots, two vertical phrases); the right half is a narrow paper column.
- **Vertical section headers**: label, 1px rule and heading, centred in the column (horizontal below 782px).
- **Booking frame**: one azuki "Book a table" button inside four 3px lines that draw around it.
- **Link boxes, corner-bracket buttons, price and info tables**.
- **Parallax**: a full-width photograph band and the column photographs (sp-scroll `sp-parallax`).
- **Forms**: the shippress form slot for contact and newsletter (works without a plugin).

Patterns are in `patterns/` (prefix `kosame-hotpot/`), the home page is the `front` pattern. Design notes: `brand/design-spec.md`.

## Notes

- Fonts: Bricolage Grotesque (display) and DM Sans (text), both OFL-1.1, bundled as Latin variable subsets in `assets/fonts/`. Traditional Chinese headings use Noto Sans TC and Japanese headings use Noto Sans JP (OFL-1.1 subsets). Body text in those languages uses the system face.
- Demo content is a fictional UK-style restaurant: prices in pounds (£) and a +44 1632 number.
- Photographs are generated low-key images; replace them from the editor.
