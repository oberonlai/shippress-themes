# Asagao Kinema

A cinematic, editorial and elegant block theme for a **one-screen independent cinema**.

*Asagao* (morning glory). The demo cinema, its films, staff, the town, the address, phone numbers and prices are all fictional.

## Concept: this week's programme, day by day

- **Dusk plum and lilac.** Night plum `#1E1A22` ground, dusk plum `#2C2731` for bands, pale house light `#E8E3E6` for text (13.9:1). One muted lilac `#8C7896` for rules, day numerals and large type only (4.2:1); small links use soft lilac `#B9A8C2` (7.6:1), quiet text ash `#A69FA8`.
- **Type.** Piazzolla (headings, masthead, numerals, prices) over Libre Franklin. Both OFL-1.1 without a Reserved Font Name, shipped as the upstream variable TTFs.
- **Illustration style: risograph duotone.** The hero and the stills are raster WebP prints in two inks with grain and slight misregistration, generated with Grok Build's image_gen through `scripts/grok-image.sh`.
- No entrance animations.

## Header, footer, layout (ROADMAP codes)

- **H5 masthead.** The cinema's name set large and centred, a dateline row "Programme 14 · Oct 13 to 19 · One screen · 64 seats" (synced), then the menu and a Tickets button.
- **F10 split two-tone footer.** Dusk-plum Tickets half with the synced prices, pale Visit half with the address, box-office hours and the sitemap.
- **L12 chaptered scroll.** The home page reads the week Monday to Sunday: each day a chapter with a sticky date numeral, a risograph still (four of seven days), the film, a note and the screening times. The combination H5 + F10 + L12 is not used by any other theme.

## One source for shared details

| Source | Edited in | Shown on |
|---|---|---|
| This week's programme | synced pattern, `inc/info/programme.html` | home, Programme |
| Ticket prices | synced pattern, `inc/info/prices.html` | home, Visit & tickets, Membership, footer |
| Programme dateline | synced pattern, `inc/info/week.html` | masthead on every page |

The synced patterns are created on activation by `inc/shared-info.php`, tagged `_asagao_kinema_info` and never created twice.

## Pages and templates

Demo pages: Home, Programme, Visit & tickets, Membership, About, Journal (posts page), Newsletter and Contact. Six sample posts in three categories with eight tags.

Templates: front-page, page, page-wide, home, index, single, archive, category, tag, search and 404.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`). Illustrations AI-generated for this theme, released under GPL-2.0-or-later / CC0. All names, the address, phone numbers and prices are fictional.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="Asagao Kinema home page on desktop"></td>
<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="Asagao Kinema home page on mobile"></td>
</tr>
</table>

- Programme: [desktop](screenshots/programme-desktop.webp) · [mobile](screenshots/programme-mobile.webp)
- Visit: [desktop](screenshots/visit-desktop.webp) · [mobile](screenshots/visit-mobile.webp)
- Membership: [desktop](screenshots/membership-desktop.webp) · [mobile](screenshots/membership-mobile.webp)
- About: [desktop](screenshots/about-desktop.webp) · [mobile](screenshots/about-mobile.webp)
- News: [desktop](screenshots/news-desktop.webp) · [mobile](screenshots/news-mobile.webp)
- Article: [desktop](screenshots/article-desktop.webp) · [mobile](screenshots/article-mobile.webp)
- Category: [desktop](screenshots/category-desktop.webp) · [mobile](screenshots/category-mobile.webp)
- Tag: [desktop](screenshots/tag-desktop.webp) · [mobile](screenshots/tag-mobile.webp)
- Newsletter: [desktop](screenshots/newsletter-desktop.webp) · [mobile](screenshots/newsletter-mobile.webp)
- Contact: [desktop](screenshots/contact-desktop.webp) · [mobile](screenshots/contact-mobile.webp)
- Search: [desktop](screenshots/search-desktop.webp) · [mobile](screenshots/search-mobile.webp)
<!-- screenshots:end -->
