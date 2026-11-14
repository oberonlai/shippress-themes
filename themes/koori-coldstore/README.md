# Koori Cold Stores

Koori Cold Stores is a regional cold-storage operator at Northmere Port. A shipper is given a numbered room in a chilled, frozen or deep-frozen band, and the room is held there with a reading every 10 minutes. The theme presents twelve rooms, 6,400 pallet positions and eight sealed dock doors on one long capacity-enquiry page.

## Structure
- `patterns/front-*.php`: hero (cross-fading dock photographs, ring pager, tilted line), room-log strip, held (counting facts), rooms (fading patina band with three fused cards), the dock (parallax band), booking, the day (sideways strip), rates, cases, enquiry and room alerts.
- `assets/kc-pager.js`: slideshow pause button only. `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll reveal, count and parallax (unchanged shared files).
- `assets/shippress-forms.css`, `inc/shippress-forms.php`: optional contact and newsletter forms (mailto fallback without plugins).
- `inc/i18n/<lang>.php`: theme strings; `demo-content.json`: sample content.

Navigation: one top menu (Rooms, Booking and Rates anchor to the front page; About and Journal are separate pages). Fonts: Schibsted Grotesk (display) and Onest (text), both OFL-1.1, listed in `theme-meta.json`. `screenshot.png` is the 1440x900 front page.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/koori-coldstore/home-desktop.webp" width="640" alt="Koori Cold Stores home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/koori-coldstore/home-mobile.webp" width="200" alt="Koori Cold Stores home page on mobile"></td>
</tr>
</table>

- About: [desktop](https://shots.codotx.com/koori-coldstore/about-desktop.webp) · [mobile](https://shots.codotx.com/koori-coldstore/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/koori-coldstore/news-desktop.webp) · [mobile](https://shots.codotx.com/koori-coldstore/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/koori-coldstore/article-desktop.webp) · [mobile](https://shots.codotx.com/koori-coldstore/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/koori-coldstore/category-desktop.webp) · [mobile](https://shots.codotx.com/koori-coldstore/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/koori-coldstore/tag-desktop.webp) · [mobile](https://shots.codotx.com/koori-coldstore/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/koori-coldstore/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/koori-coldstore/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/koori-coldstore/contact-desktop.webp) · [mobile](https://shots.codotx.com/koori-coldstore/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/koori-coldstore/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/koori-coldstore/ja/home-desktop.webp) · [fr](https://shots.codotx.com/koori-coldstore/fr/home-desktop.webp) · [de](https://shots.codotx.com/koori-coldstore/de/home-desktop.webp)
<!-- screenshots:end -->
