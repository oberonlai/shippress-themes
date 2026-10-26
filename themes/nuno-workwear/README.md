# Nuno Workwear

A documentary, sans-serif block theme for a **workwear and safety-clothing shop with its own repair workshop**: trousers, jackets, aprons and boots chosen by trade, fitted on the crew, embroidered and mended in-house. It is a business theme, not a shop: no WooCommerce templates or products (and nothing breaks if WooCommerce is active).

The demo shop is fictional: Nuno Workwear, Rijnhaven Works, Rotterdam, open since 2009. All names, addresses, phone numbers, fabrics and prices are made up.

## Concept: ground, ink and one rust accent

- **Palette.** Ground `#F3F2EF`, ink `#1F1D1B` (text, bands, footer), charcoal `#524E4A`, stone `#E4E2DD`, rust accent `#A9521D` on ground and `#E39A62` on ink. First-screen saturation stays under 10%.
- **Type.** Albert Sans (display, headings, navigation, buttons) over Manrope (text). Both OFL-1.1, Latin WOFF2 subsets in `assets/fonts/`.
- **Photography.** Sixteen AI-generated documentary photographs (`assets/images/p01-p16.webp`), none repeated on the home page, released under GPL-2.0-or-later / CC0.

## Signature techniques

- **S-A**: the two-line headline "MADE / FOR SHIFTS" crossing the seam between the paper band and a half-height photograph, with a line-mask rise, a 21 s cross-fade of three photographs and a parallax layer.
- **S-B**: five dashed column guides behind the page; the trade card mosaic, order steps and footer columns snap to them.
- **S-C**: ink bands with cream text ("Mended, not replaced", the four-step order sheet, the footer).
- **Scroll effects** (`assets/sp-scroll.*`): wipe, mask, stagger, reveal and parallax; all switch off under `prefers-reduced-motion`, in the editor and with `?sp-static`.

## Layout

Split-navigation header (links either side of the wordmark, round contact button); ink footer with four columns. Home sections are the patterns `patterns/front-*.php` (hero, shop, trades, floor, fit, prices, crews, order, visit). Templates: front page, page, wide page, index, archive, category, tag, single, search, 404.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`).
