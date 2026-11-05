# Misora Links

A block theme for a members' golf club (fictional: 18 holes, par 70, founded 1961, 640 members, Westerby Point).

## Signature techniques
1. **Ticket-notch photo frame** (`.ml-ticket`): quarter-circle bites at the corners plus a semicircle in the middle of each long edge, a broken 1 px inner line; made with CSS mask gradients, no SVG.
2. **Cropped display word + vertical column** (`.ml-word`, `.ml-vert`): "Misora" in Cormorant Garamond light italic cut by the top edge, beside a vertical serif column.
3. **Morning sheet** (`.ml-sheet` + `.ml-rail`): rounded stone sheet on pine with a native horizontal rail of tee-time cards and photographs, a two-tone progress bar driven by a CSS scroll timeline.

Scroll effects: sp-scroll (reveal, stagger, count, parallax). Parallax on the hero photograph, the course cover and the visit photograph.

## Patterns
`front-hero`, `front-sheet`, `front-rounds`, `front-course`, `front-season`, `front-people`, `front-fees`, `front-stories`, `front-journal`, `front-visit`, `head-*` / `body-*` page patterns, footer patterns.

## Notes (stage 2, home fixes)
- Hero photograph P01 regraded warmer so it is the only coloured area on the first screen (about 4.7% saturated pixels, limit 15%).
- The course cover now validates in the block editor (image before the overlay span, alt stored in the block comment).
- Fees panel carries the work-mornings line so it matches the plan cards in height.
- Menu entries point at real pages: rounds, morning-sheet, season, membership, course, contact.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/misora-links/home-desktop.webp" width="640" alt="Misora Links home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/misora-links/home-mobile.webp" width="200" alt="Misora Links home page on mobile"></td>
</tr>
</table>

- About: [desktop](https://shots.codotx.com/misora-links/about-desktop.webp) · [mobile](https://shots.codotx.com/misora-links/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/misora-links/news-desktop.webp) · [mobile](https://shots.codotx.com/misora-links/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/misora-links/article-desktop.webp) · [mobile](https://shots.codotx.com/misora-links/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/misora-links/category-desktop.webp) · [mobile](https://shots.codotx.com/misora-links/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/misora-links/tag-desktop.webp) · [mobile](https://shots.codotx.com/misora-links/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/misora-links/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/misora-links/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/misora-links/contact-desktop.webp) · [mobile](https://shots.codotx.com/misora-links/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/misora-links/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/misora-links/ja/home-desktop.webp) · [fr](https://shots.codotx.com/misora-links/fr/home-desktop.webp) · [de](https://shots.codotx.com/misora-links/de/home-desktop.webp)
<!-- screenshots:end -->
