# Kamotsu Academy

A block theme for a heavy-goods vehicle training centre. Documentary photography, a split header (one menu at the left, wordmark in the centre, two pills at the right) and a road-style timeline of the weeks in the yard.

Version 1.0.0 · GPL-2.0-or-later · Fonts: Hanken Grotesk (display), Work Sans (text), both OFL-1.1.

## Design notes

- **Palette**: ground #F5F5F5 and white, ink #222222, navy #243044 for pills and the road, slate #5E6B80 for meta text, hi-vis #E8F52C as a rare accent, footer #111111.
- **Key visual**: a full-bleed yard photograph with a giant two-line white caps word, the kicker and italic tagline in a row above it, and a docked white "Next intake" card at the bottom right.
- **Signature**: tall rounded promo cards with a round chevron, the docked info card (also on the parallax road band) and the seven-week road timeline.
- **Motion** (sp-scroll): parallax on the key visual and the road band, reveal and stagger on sections and cards. Everything is final-state with reduced motion, without JavaScript and in the editor.

## Layout notes

- The one menu collapses into the overlay toggle below 1180 px (six links plus the wordmark do not fit the split header any lower). Between 1180 and 1279 px the bar is compacted so the wordmark stays on the centre line.
- On phones the week chips of the road timeline sit beside the vertical road, not on it.

## Files

- `templates/`: front page, posts page, page, single, archive, category, tag, search, 404.
- `patterns/`: the home sections (`front-*`), header and footer parts, and the template patterns.
- `inc/`: demo import (pages, menu, stories), language helpers.
- `assets/images/`: AI-generated photographs, CC0. `assets/fonts/`: the two font families with their licence.
- `brand.md` and `brand/`: brand notes, design spec and reference mapping.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/kamotsu-academy/home-desktop.webp" width="640" alt="Kamotsu Academy home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/kamotsu-academy/home-mobile.webp" width="200" alt="Kamotsu Academy home page on mobile"></td>
</tr>
</table>

- About: [desktop](https://shots.codotx.com/kamotsu-academy/about-desktop.webp) · [mobile](https://shots.codotx.com/kamotsu-academy/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/kamotsu-academy/news-desktop.webp) · [mobile](https://shots.codotx.com/kamotsu-academy/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/kamotsu-academy/article-desktop.webp) · [mobile](https://shots.codotx.com/kamotsu-academy/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/kamotsu-academy/category-desktop.webp) · [mobile](https://shots.codotx.com/kamotsu-academy/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/kamotsu-academy/tag-desktop.webp) · [mobile](https://shots.codotx.com/kamotsu-academy/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/kamotsu-academy/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/kamotsu-academy/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/kamotsu-academy/contact-desktop.webp) · [mobile](https://shots.codotx.com/kamotsu-academy/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/kamotsu-academy/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/kamotsu-academy/ja/home-desktop.webp) · [fr](https://shots.codotx.com/kamotsu-academy/fr/home-desktop.webp) · [de](https://shots.codotx.com/kamotsu-academy/de/home-desktop.webp)
<!-- screenshots:end -->
