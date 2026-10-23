# Ito HR Partners

Ito HR Partners is a business theme for a Dublin consultancy in HR and employment law, working with companies of 15 to 400 people. The sample copy publishes fixed fees for payroll compliance, handbooks and policies, workplace investigations and retainer support, and introduces the seven advisers and three anonymised client stories. Fees are in euro and exclude VAT at 23%.

## Structure
- `patterns/front-*.php`: the eight home sections (hero with photo loop and fee pill, services on a pale band, intro with staggered photos, approach cards over a parallax photograph, fee list, people band, client stories, FAQ and contact close).
- `templates/`: front page, page, wide page, single, archive, search and 404.
- `parts/`: split header (wordmark, menu, phone, Enquire button) and the pale footer.
- `demo-content.json`: sample content (English); `inc/demo-import.php` creates it on activation.
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: scroll reveals, the photo loop and the parallax layer (class names only; no dependencies).
- Photos: `assets/images/` (AI-generated, GPL-2.0-or-later / CC0). See `readme.txt` for the list.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.

## Notes (stage 2 fix)
- Menu: Services, Fees, Team, About, Stories, Contact, plus four service pages (payroll compliance, policies & handbooks, workplace investigations, retainer support), all created by the demo import.
- Story cards show topic categories (Handbooks, Payroll, Investigations).
- Portraits (p01, p12–p14) are studio shots against a plain wall, not crops of scene photos.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="Ito HR Partners home page on desktop"></td>
<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="Ito HR Partners home page on mobile"></td>
</tr>
</table>

- Services: [desktop](screenshots/services-desktop.webp) · [mobile](screenshots/services-mobile.webp)
- Fees: [desktop](screenshots/fees-desktop.webp) · [mobile](screenshots/fees-mobile.webp)
- Team: [desktop](screenshots/team-desktop.webp) · [mobile](screenshots/team-mobile.webp)
- About: [desktop](screenshots/about-desktop.webp) · [mobile](screenshots/about-mobile.webp)
- News: [desktop](screenshots/news-desktop.webp) · [mobile](screenshots/news-mobile.webp)
- Article: [desktop](screenshots/article-desktop.webp) · [mobile](screenshots/article-mobile.webp)
- Category: [desktop](screenshots/category-desktop.webp) · [mobile](screenshots/category-mobile.webp)
- Tag: [desktop](screenshots/tag-desktop.webp) · [mobile](screenshots/tag-mobile.webp)
- Newsletter: [desktop](screenshots/newsletter-desktop.webp) · [mobile](screenshots/newsletter-mobile.webp)
- Contact: [desktop](screenshots/contact-desktop.webp) · [mobile](screenshots/contact-mobile.webp)
- Other languages (home page): [zh-TW](screenshots/zh-TW/home-desktop.webp) · [ja](screenshots/ja/home-desktop.webp) · [fr](screenshots/fr/home-desktop.webp) · [de](screenshots/de/home-desktop.webp)
<!-- screenshots:end -->
