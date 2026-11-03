# Noboru Lifts

A landing-page block theme for an office lift inspection contractor. Reference: a Japanese renewal landing page (see brand/reference.md). The home page is a one-page conversion flow with an anchor CTA; the header menu links to the inner pages (each opens with a compact head: eyebrow, H1 cut by a hairline, notice card) (The visit, Buildings, Fees, About). Below 960 px the header becomes a 56 px bar with an overlay menu.

## Techniques
1. **Open paper first screen** (front-hero): hairline frame, boxed header that shrinks after the hero (CSS scroll-driven, no script), a photo row drifting left, a headline cut by the fold, a notice card with a sideways tab.
2. **Ink strip headings** (`.nl-h2` with one `.nl-strip` per line).
3. **Sticky visit cards** (front-visit): 1200x528 split cards pinned at the top, each slides over the previous one.

## Patterns
front-hero, front-intro, front-visit, front-buildings, front-quiet (parallax), front-sheet, front-fees, front-crew, front-stories, front-book.

## Scroll effects
`assets/sp-scroll.css` and `assets/sp-scroll.js` (shared ShipPress component): reveal, stagger, parallax, marquee.

## Sample content
Pages: home, the-visit, buildings, fees, about, news (posts page), slot-list, contact, privacy, terms, thanks. Fonts: Instrument Sans and Albert Sans (Noto Sans TC and Noto Sans JP for zh-TW and ja display), all OFL-1.1, listed in theme-meta.json.

## Inner pages
The Visit, Buildings, Fees, About, Slot List and Contact use the visit-card (T1) shape with hanging tabs; every H2 is an ink strip; About carries a parallax photo band. Pages use the `page-head` template (the head is page content). News is the posts page; one sample article (Field notes).

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/noboru-lifts/home-desktop.webp" width="640" alt="Noboru Lifts home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/noboru-lifts/home-mobile.webp" width="200" alt="Noboru Lifts home page on mobile"></td>
</tr>
</table>

- About: [desktop](https://shots.codotx.com/noboru-lifts/about-desktop.webp) · [mobile](https://shots.codotx.com/noboru-lifts/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/noboru-lifts/news-desktop.webp) · [mobile](https://shots.codotx.com/noboru-lifts/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/noboru-lifts/article-desktop.webp) · [mobile](https://shots.codotx.com/noboru-lifts/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/noboru-lifts/category-desktop.webp) · [mobile](https://shots.codotx.com/noboru-lifts/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/noboru-lifts/tag-desktop.webp) · [mobile](https://shots.codotx.com/noboru-lifts/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/noboru-lifts/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/noboru-lifts/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/noboru-lifts/contact-desktop.webp) · [mobile](https://shots.codotx.com/noboru-lifts/contact-mobile.webp)
- Search: [desktop](https://shots.codotx.com/noboru-lifts/search-desktop.webp) · [mobile](https://shots.codotx.com/noboru-lifts/search-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/noboru-lifts/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/noboru-lifts/ja/home-desktop.webp) · [fr](https://shots.codotx.com/noboru-lifts/fr/home-desktop.webp) · [de](https://shots.codotx.com/noboru-lifts/de/home-desktop.webp)
<!-- screenshots:end -->
