# Himuro Gelato

A block theme for a small-batch gelato cafe. A full-bleed film-grain photograph melts into paper under a pale full-width wordmark; a pinned flavour viewer pairs an index, two thumbnails and a tall photograph with a bordered spec box; a dark grain band lights one of three pacing rows and parks a small photograph beside it; the footer is a grain wave. Fraunces for headings, Literata for reading.

- Design notes: `brand/design-spec.md`, `brand/reference.md`, `brand/reference-tokens.md`
- Patterns: `patterns/front-*.php` (home), `patterns/foot-main.php`, `patterns/page-*.php`
- Sample pages: about, flavours, batches, tubs, people, visit, newsletter and contact are imported from `demo-content.json`; the menu links to them
- Scroll effects: `assets/sp-scroll.css`, `assets/sp-scroll.js`
- Forms: `inc/shippress-forms.php` (dynamic `shippress/form` block, no required plugin)

## Stage 2 notes

- The hero keeps the maker's hands and the tin above the paper melt; on phones the hero shows the hand-over-the-glass photograph so both people stay in frame.
- The footer links to the newsletter page instead of repeating the subscription form from the home page.
- Fonts: Fraunces and Literata (Latin), Noto Serif TC and Noto Serif JP (CJK headings), all listed in `theme-meta.json` with their OFL licences.
