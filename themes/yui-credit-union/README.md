# Yui Credit Union

A WordPress block theme (type business) for a member-owned credit union. Home page (English) reviewed and polished in stage 2; inner pages and languages follow.

- Signature techniques: floating pill header bar, ruled ledger heads, uniform pickup row (see brand.md and brand/design-spec.md).
- Patterns: `patterns/front-*.php` (11 home sections). Demo content: `demo-content.json`, imported on activation by `inc/demo-import.php`.
- Calculator: static default result in the markup, `assets/js/calc.js` makes it live.
- Fonts: Merriweather and Public Sans (OFL, Latin subset woff2 in `assets/fonts`).
- Photographs: `assets/images/*.webp`, 12 photographs generated for this theme (hero is 2000 px wide); no readable text, logos or banknotes.
- Services row links: Savings → `/savings/`, auto, home and personal loans → `/loans/#auto`, `#home`, `#personal`.
- Header navigation targets (`/savings/`, `/loans/`, `/rates/`, `/about/`, `/branches/`, `/calculator/`, `/membership/`) are created with the inner pages.
