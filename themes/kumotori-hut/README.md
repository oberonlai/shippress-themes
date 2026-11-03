# Kumotori Hut

An organic, serene and technical hospitality theme for a **mountain hut** at a 2,017 m saddle (batch 3 #10).

The demo hut is fictional: forty bunks at Kumotori Saddle on the fictional Okuyama ridge, open from late June to the end of October, reached by three marked routes. It is a hospitality theme, not a shop: no WooCommerce templates or products.

## Concept: the trail map first

- **Palette.** Alpine moss `#DDE2DA` ground, lichen `#C2CBBE` panels and footer, pine ink `#1F2A22` text (11.3:1 on moss). Deep pine `#34503D` for links and buttons (6.8:1 / 5.3:1); quiet moss `#48554B` for secondary text; hut paper `#ECEFE9` for cards. Muted pine `#5C7563` only for numerals, rules and marks.
- **Type.** Faustina (wordmark, headings, numerals, the summit stamp) over Readex Pro (text, header, labels). Both OFL-1.1, unmodified variable TTFs (Readex Pro carries the RFN "RevReading Lexend").
- **Visual style: 2.5D isometric.** Four raster WebP illustrations from Grok Build image_gen: the saddle as a trail map, the hut, a cutaway bunk room and the ridge routes. No SVG illustration.

## Header, footer, layout (ROADMAP codes)

- **H1 washi header** (1.0.1; 1.0.0 was the H7 bottom bar): hut-paper header with a faint contour grid and a double hairline, sticky below the WordPress toolbar. On the left the site logo (when set) and the site title under a small "Mountain hut" label on a pine rule; the menu (Home, Routes, Stay, Season, Journal, Contact) to the right, then the Reception open / Closed chip worked out on the server and a "Book a bunk" button to Stay & booking. Under 960 px the menu becomes a Menu button with a full-screen numbered trail card; under 600 px the chip and the button move to a slim strip at the bottom (no second menu or title).
- **F12 summit stamp + vertical text column**: a round, slightly rotated summit stamp (Kumotori · 2,017 m), the address card and a vertical altitude line from the trailhead to the saddle.
- **L10 map / locator first**: the isometric trail map beside the title with a numbered legend (the hut, three routes, water points) and today's reception line, then the season, weather and rates, the three routes and the journal.

## One source for shared details

- **Appearance > Hut details** (`inc/hut-info.php`): reception hours, closed season, weather note, address, trailhead, phone, email.
- **Rates and beds** synced pattern (`inc/shared-info.php`, `inc/info/prices.html`): Home and Stay.
- The demo import (`inc/demo-import.php`) is idempotent and never overwrites user content.

## Pages

Home, Routes, Stay & booking, Season, Journal, Newsletter, Contact; article, category, tag, search and 404 templates. Five journal posts in three categories with six tags.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`). Illustrations AI-generated for this theme, released under GPL-2.0-or-later / CC0. All names, places and rates are fictional.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/kumotori-hut/home-desktop.webp" width="640" alt="Kumotori Hut home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/kumotori-hut/home-mobile.webp" width="200" alt="Kumotori Hut home page on mobile"></td>
</tr>
</table>

- Routes: [desktop](https://shots.codotx.com/kumotori-hut/routes-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/routes-mobile.webp)
- Stay booking: [desktop](https://shots.codotx.com/kumotori-hut/stay-booking-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/stay-booking-mobile.webp)
- Season: [desktop](https://shots.codotx.com/kumotori-hut/season-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/season-mobile.webp)
- About: [desktop](https://shots.codotx.com/kumotori-hut/about-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/kumotori-hut/news-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/kumotori-hut/article-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/kumotori-hut/category-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/kumotori-hut/tag-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/kumotori-hut/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/kumotori-hut/contact-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/contact-mobile.webp)
- Search: [desktop](https://shots.codotx.com/kumotori-hut/search-desktop.webp) · [mobile](https://shots.codotx.com/kumotori-hut/search-mobile.webp)
<!-- screenshots:end -->
