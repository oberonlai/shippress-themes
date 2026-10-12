# Mimi Veterinary

A clean, serene and minimal block theme for a **calm neighbourhood veterinary clinic** for dogs, cats and small animals.

*Mimi* (ears). The demo clinic is a fictional practice on Lantern Lane in Kitamachi, Willowbrook, run by Dr. Aiko Mimura, Dr. Tomas Halden and nurse Rin Okada, with the fictional Willowbrook Night Animal Hospital as its night-emergency partner.

## Concept: find us first

- **Mist, sage, deep teal.** Ground `#F2F5F4`, sage mist `#D4E2DE` for panels and bands, deep teal ink `#24403C` for text and the dark band (10.2:1). One muted teal `#5E8C84` only for paw dots, map pins and hairlines (3.4:1, never small text); links use `#3D6A63` (5.6:1), quiet text `#4A615D` (5.0:1 on sage).
- **Type.** Lora (display) over Be Vietnam Pro (text, light 300 for a soft rhythm). Both OFL-1.1. Be Vietnam Pro is subset to Latin WOFF2; Lora has a Reserved Font Name, so the authors' own `Lora[wght].woff2` is shipped unmodified.
- **Signature: the locator card.** The home page opens map first: the title beside a paper card with a quiet abstract street grid (streets, the park, a river, the railway, one pin), then address, parking, nearest station, today's hours and the night-emergency partner. Paw-print dot dividers (CSS dots) mark the page headings and labels. Soft 22 px corners and pill buttons; no bento, no stamped route map.
- No entrance animations, no hand-drawn illustrations.

## Header, footer, layout (ROADMAP codes)

- **H9 two-tier header.** A sage utility strip with today's opening hours (worked out in the site's timezone), the phone number and a link to the night-emergency partner, over the main bar with a paw mark, the site title, the menu and a "Book a visit" pill.
- **F7 CTA band footer.** A deep teal "Book a visit" band with a large Lora line, over a sage band with the clinic details (address, phone and email, hours table, emergency partner) and a small sitemap.
- **L10 map first.** See above. The combination H9 + F7 + L10 is not used by any other theme.

## One source for shared details

| Source | Edited in | Shown on |
|---|---|---|
| Opening hours, phone, email, address, night-emergency partner | Appearance > Clinic details (`inc/clinic-info.php`, block `mimi-veterinary/clinic-info`) | utility strip, locator card, contact, footer |
| Locator card (map, parking, station + the details above) | synced pattern, `inc/info/locator.html` | home, contact |
| Fees table | synced pattern, `inc/info/fees.html` | home, fees |

The synced patterns are created on activation by `inc/shared-info.php`, tagged `_mimi_veterinary_info` and never created twice.

## Pages and templates

Demo pages: Home, Services, First visit, Fees, About, Journal (posts page) and Contact. Six sample posts in three categories (Everyday care, Seasons, Small animals) with six tags.

Templates: front-page, page, page-wide, home, index, single, archive, category, tag, search and 404.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`). Photographs AI-generated for this theme, released under GPL-2.0-or-later / CC0. All names, the address, phone numbers and prices are fictional.
