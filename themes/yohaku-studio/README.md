# Yohaku Studio

A quiet, editorial and geometric portfolio theme for a **small graphic, advertising and web design studio** taking client work.

*Yohaku* is the white space, the margin, of a Japanese page layout. The demo studio is a fictional three-person design office in Saginomiya, founded in 2014 by Mio Arai and Ren Okabe, with Saki Tanabe on web. It is a portfolio theme, not a shop: no WooCommerce templates or products (and nothing breaks if WooCommerce is active).

## Concept: the margin, crop marks and a baseline grid

- **Palette.** Paper white `#FAFAF8` ground, light grey `#E6E5E1` bands and footer, ink `#161616` text (17.3:1 on paper, 14.4:1 on grey), graphite `#5C5B57` secondary text (6.5:1 / 5.4:1). Muted ochre `#B08A2E` is used only for marks (crop marks, registration targets, the availability dot); it is 3.1:1, so never text. Deep ochre `#7A5F1E` carries small accent text such as roles and the "Most chosen" badge (5.8:1 on paper, 4.8:1 on grey). No bright colour, no neon.
- **Type.** Hedvig Letters Serif (display) over Geist (text), Geist Mono for figure and section numbers. All OFL-1.1 without a Reserved Font Name, subset to Latin WOFF2 (~67 KB total).
- **Marks.** Printer's crop marks at the corners of every project photo and the footer band, ochre registration targets beside section numbers, numbered figure captions ("Fig. 03 — Advertising"), and a faint baseline grid behind the home statement. All CSS. No entrance animations, no marquee, no kinetic type.

## Header, footer, layout (ROADMAP codes)

- **H5 magazine masthead**: a thin dateline (est. 2014, the three disciplines, and the availability line from the synced studio details), a large quiet Hedvig wordmark with a short descriptor, and a ruled menu row with "Start a project". Smaller wordmark on inner pages; on phones the dateline keeps only the availability, the descriptor hides and the menu becomes an overlay, all on single lines at 390 px.
- **F7 big-CTA band**: a wide paper band with crop marks on light grey, "Have a brief? Start a project." linking to the brief form, over a compact row of the synced studio details, a small page list and copyright.
- **L8 card mosaic**: the selected work as an asymmetric 12-column mosaic of six project cards in four sizes and three aspect ratios, deliberately offset, each with photo, figure number, discipline, client, title and year.

## One source for shared details

- **Studio details and availability** (synced pattern) appear in the masthead dateline, the footer, Start a project and Contact. The brief form reads the studio email from it.
- **Packages and prices** (synced pattern): Identity from $6,800, Campaign from $9,500 ("Most chosen", editable text), Website from $12,000, with deliverables and timelines; on Home and Services.
- Created once by `inc/shared-info.php` from `inc/info/*.html`; the demo import (`inc/demo-import.php`) is idempotent and never overwrites user content.

## Pages and templates

Home; Work (filterable: All / Graphic / Advertising / Web pills, progressive script, everything shows without JavaScript) with six case studies as child pages (brief, approach, outcome, credits, photographs, next project); Services; Process (brief, proposal, design, launch, with what the client gets at each stage); Start a project (labelled, keyboard-accessible brief form that composes an email, with an email link and a "what to include" checklist as the no-JavaScript fallback); About (team of three); Journal (posts page); Newsletter; Contact; article, category, tag, search and 404 templates. Six journal posts in three categories (Identity, Campaigns, Web) with six tags.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`). Photographs AI-generated for this theme, released under GPL-2.0-or-later / CC0. All names, clients, the address, phone numbers and prices are fictional.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="Yohaku Studio home page on desktop"></td>
<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="Yohaku Studio home page on mobile"></td>
</tr>
</table>

- Work: [desktop](screenshots/work-desktop.webp) · [mobile](screenshots/work-mobile.webp)
- Case study: [desktop](screenshots/case-study-desktop.webp) · [mobile](screenshots/case-study-mobile.webp)
- Services: [desktop](screenshots/services-desktop.webp) · [mobile](screenshots/services-mobile.webp)
- Process: [desktop](screenshots/process-desktop.webp) · [mobile](screenshots/process-mobile.webp)
- Start a project: [desktop](screenshots/start-a-project-desktop.webp) · [mobile](screenshots/start-a-project-mobile.webp)
- About: [desktop](screenshots/about-desktop.webp) · [mobile](screenshots/about-mobile.webp)
- News: [desktop](screenshots/news-desktop.webp) · [mobile](screenshots/news-mobile.webp)
- Article: [desktop](screenshots/article-desktop.webp) · [mobile](screenshots/article-mobile.webp)
- Category: [desktop](screenshots/category-desktop.webp) · [mobile](screenshots/category-mobile.webp)
- Tag: [desktop](screenshots/tag-desktop.webp) · [mobile](screenshots/tag-mobile.webp)
- Newsletter: [desktop](screenshots/newsletter-desktop.webp) · [mobile](screenshots/newsletter-mobile.webp)
- Contact: [desktop](screenshots/contact-desktop.webp) · [mobile](screenshots/contact-mobile.webp)
- Search: [desktop](screenshots/search-desktop.webp) · [mobile](screenshots/search-mobile.webp)
<!-- screenshots:end -->
