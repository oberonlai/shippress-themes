# Susugi Wash

A calm WordPress landing theme for a one-product preorder: an undercounter commercial dishwasher for small kitchens. Palette: white and a cool grey band `#EBEBED`, black ink, sub ink `#30353D`, hairline `#CFCAC2`, and one grey-teal `#4A5C5E` for chapter numbers and hover. Type: Albert Sans and Manrope (Noto Sans TC / JP for Chinese and Japanese).

## Home page patterns
`front-hero` (exact 50/50 split: photograph left, white panel with tagline, wordmark, two machines and an info bar), `front-reason`, `front-cta-1` (corner-bracket Preorder CTA), `front-pass` (full-bleed parallax photograph and two columns), `front-rush` (hairline time rows beside a 4:5 photograph), `front-row` (five-photo staggered bottom-bleed row), `front-machine` (grey band, four figures), `front-fitting` (three numbered chapters), `front-kitchens` (three columns), `front-specs` (spec table, price list, CTA), `front-faq`, `front-cta-final`.

## Motion
sp-scroll: `sp-parallax` on the pass photograph, `sp-reveal--up` (with `sp-stagger`) on text, `sp-reveal--zoom` on photographs. The hero uses CSS load keyframes only (tagline rise and de-blur, photograph settles from 1.2 to 1), written for `prefers-reduced-motion: no-preference` and switched off by `?sp-static`.

## Header and footer
The header is a hand-written HTML block (split anchor menu, mini corner-bracket CTA, a round outline button with a CSS-only `<details>` overlay below 960px). Edit it in Appearance > Editor > Patterns > Header.

## Inner pages
Patterns `page-machine`, `page-fitting`, `page-kitchens`, `page-preorder`, `page-waitlist`, `page-about`, `page-support`, `page-contact`, `page-privacy`, `page-terms`, `page-thanks` and the shared `cta-end`. Each opens with the smaller 50/50 split head (`sw-phead`); Machine, Fitting day, Kitchens and About also carry the staggered bottom-bleed photo row, and every content page ends with the corner-bracket Preorder CTA. Kitchens uses `sp-parallax` on its head photograph. Templates: `home` / `index` (Notes list: newest post as a 50/50 block), `archive`, `single` (split head with the featured image), `search`, `404`. The waitlist form posts to /thanks/; connect a form plugin to store entries.

## Pages and menu
The demo import creates Home, the eleven inner pages, the Notes posts page, one post and a menu (The machine, Fitting day, Kitchens, Preorder, About, Support, Contact). The header uses its own anchor links on the home page (#machine, #last-hour, #fitting, #kitchens, #specs) and the Preorder buttons go to /preorder/. Side-label numbers match the chapter numbers.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="Susugi Wash home page on desktop"></td>
<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="Susugi Wash home page on mobile"></td>
</tr>
</table>

- About: [desktop](screenshots/about-desktop.webp) · [mobile](screenshots/about-mobile.webp)
- News: [desktop](screenshots/news-desktop.webp) · [mobile](screenshots/news-mobile.webp)
- Article: [desktop](screenshots/article-desktop.webp) · [mobile](screenshots/article-mobile.webp)
- Category: [desktop](screenshots/category-desktop.webp) · [mobile](screenshots/category-mobile.webp)
- Tag: [desktop](screenshots/tag-desktop.webp) · [mobile](screenshots/tag-mobile.webp)
- Newsletter: [desktop](screenshots/newsletter-desktop.webp) · [mobile](screenshots/newsletter-mobile.webp)
- Contact: [desktop](screenshots/contact-desktop.webp) · [mobile](screenshots/contact-mobile.webp)
- Other languages (home page): [zh-TW](screenshots/zh-TW/home-desktop.webp) · [ja](screenshots/ja/home-desktop.webp) · [fr](screenshots/fr/home-desktop.webp) · [de](screenshots/de/home-desktop.webp)
<!-- screenshots:end -->
