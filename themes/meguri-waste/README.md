# Meguri Waste

A block theme for a scheduled commercial waste collection service. A watercolour dock panorama opens in a sideways scroll-snap strip with five paper day tags hanging from the bins; ruled h2s and teal-dash h3s run down the page; a flat pictogram line joined by slate arrows tells a collection day; wash bands dissolve their illustrations into white; weekly cover is a set of full-width price rows. Hanken Grotesk for headings, Instrument Sans for reading.

- Design notes: `brand/design-spec.md`, `brand/reference.md`, `brand/reference-tokens.md`
- Patterns: `patterns/front-*.php` (home), `patterns/foot-main.php`, `patterns/head-util.php`, `patterns/page-*.php`
- Sample pages: about, streams, a collection day, weekly cover, sites, set your schedule, collection notes, privacy, terms and thanks are imported from `demo-content.json`
- Menu: Streams, A collection day, Weekly cover, Sites, About and Set your schedule link to their own pages; the licence and missed-pickup boxes show above the bar on desktop and inside the menu drawer on small screens (`meguri_waste_nav_boxes` in `functions.php`).
- Images: ten watercolour illustrations (`assets/images/p01-p10.webp`), generated without any lettering; inner-page images are added with the inner pages.
- Scroll effects: `assets/sp-scroll.css`, `assets/sp-scroll.js` (reveal down, stagger, parallax)
- Forms: `inc/shippress-forms.php` (dynamic `shippress/form` block, no required plugin). Suggested Contact Form 7 fields: name*, company / site name*, email*, phone, site address, streams, bins per week, message.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/meguri-waste/home-desktop.webp" width="640" alt="Meguri Waste home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/meguri-waste/home-mobile.webp" width="200" alt="Meguri Waste home page on mobile"></td>
</tr>
</table>

- About: [desktop](https://shots.codotx.com/meguri-waste/about-desktop.webp) · [mobile](https://shots.codotx.com/meguri-waste/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/meguri-waste/news-desktop.webp) · [mobile](https://shots.codotx.com/meguri-waste/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/meguri-waste/article-desktop.webp) · [mobile](https://shots.codotx.com/meguri-waste/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/meguri-waste/category-desktop.webp) · [mobile](https://shots.codotx.com/meguri-waste/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/meguri-waste/tag-desktop.webp) · [mobile](https://shots.codotx.com/meguri-waste/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/meguri-waste/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/meguri-waste/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/meguri-waste/contact-desktop.webp) · [mobile](https://shots.codotx.com/meguri-waste/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/meguri-waste/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/meguri-waste/ja/home-desktop.webp) · [fr](https://shots.codotx.com/meguri-waste/fr/home-desktop.webp) · [de](https://shots.codotx.com/meguri-waste/de/home-desktop.webp)
<!-- screenshots:end -->
