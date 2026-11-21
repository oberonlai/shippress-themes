# Hozue Food Festival

A block theme for regional food and wine festivals that sell early-bird tickets on one long page.

- Home: olive 68 px header strip with the dates and venue, a framed photo window (inset 20 px, r24) that cross-fades three moments with round dots, the title below the photo, a floating five-tile card-row ending in the early-bird tile, the weekend with four counting figures, a rounded panel feed of programme cells, a ticket price table, a parallax riverbank band, people as text rows, getting here, FAQ, journal and a closing waitlist.
- Inner pages: About, Contact (form slot with mailto fallback), Newsletter, Privacy and Terms, plus the Journal list; the one top menu holds the home anchors and the Journal, the footer links About, Contact, Privacy and Terms.
- Anchor links scroll smoothly through a small script (assets/hf-header.js) that accounts for the sticky header; the header hides on scroll down and returns on scroll up, both off for reduced motion.
- Fonts: Fraunces and Work Sans (bundled, OFL).
- Scroll effects: sp-reveal (up + stagger), sp-count and sp-parallax on the riverbank band. The hero cross-fade is plain CSS keyframes (800 ms fade, 3.6 s hold) and shows the first photograph with reduced motion.
- Forms: `shippress_form_slot` newsletter in the closing block and on the Newsletter page; works without plugins (mailto fallback with a visible notice).
- Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.
- Photography: AI-generated high-key documentary photographs (growers, cooks, winemakers and visitors of different ages and backgrounds).

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/hozue-foodfest/home-desktop.webp" width="640" alt="Hozue Food Festival home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/hozue-foodfest/home-mobile.webp" width="200" alt="Hozue Food Festival home page on mobile"></td>
</tr>
</table>

- About: [desktop](https://shots.codotx.com/hozue-foodfest/about-desktop.webp) · [mobile](https://shots.codotx.com/hozue-foodfest/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/hozue-foodfest/news-desktop.webp) · [mobile](https://shots.codotx.com/hozue-foodfest/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/hozue-foodfest/article-desktop.webp) · [mobile](https://shots.codotx.com/hozue-foodfest/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/hozue-foodfest/category-desktop.webp) · [mobile](https://shots.codotx.com/hozue-foodfest/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/hozue-foodfest/tag-desktop.webp) · [mobile](https://shots.codotx.com/hozue-foodfest/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/hozue-foodfest/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/hozue-foodfest/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/hozue-foodfest/contact-desktop.webp) · [mobile](https://shots.codotx.com/hozue-foodfest/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/hozue-foodfest/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/hozue-foodfest/ja/home-desktop.webp) · [fr](https://shots.codotx.com/hozue-foodfest/fr/home-desktop.webp) · [de](https://shots.codotx.com/hozue-foodfest/de/home-desktop.webp)
<!-- screenshots:end -->
