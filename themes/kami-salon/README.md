# Kami Salon

An edgy, fashion-led WordPress **block theme** for **hair salons**, barbers and colour studios. *Kami* means "hair". The theme is Japanese minimal turned up loud: an **ink-black ground**, chalk text and one **magenta** accent, **Syne** display type in capitals over **Inter**, and **scissor cuts** as the signature. Photographs, cards and light bands are cropped on clean diagonals, and the cut flips the other way when you point at it. The header is a **floating pill** (wordmark, menu and a magenta Book button) that stays at the top as you scroll. The home page is a **mosaic of cards**. The footer ends in a **giant wordmark sliced by a magenta cut line**.

All sample copy is in English and every name is fictional. The sample salon, **Kami Salon**, is a six-chair salon on the third floor of a building in Kirimachi, Shibuya, Tokyo. Its stylists are Mika Kirishima (founder; cuts and creative direction), Ren Aoki (short hair and bleach) and Noa Fujikawa (colour lead). The address, telephone number, email and prices are placeholders. Replace them with your own.

## Who it is for

- **Industry:** hair-salon: hair salons, barbers, colour studios, independent stylists.
- **Site type:** business. A price menu, the stylists and their looks, a booking request form, about the salon, a journal (news), a monthly newsletter and contact.
- **Mood:** edgy, fashion, editorial; bold type, hard edges, one loud colour.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (dark, pink) | **Ink** `#111111` ground, **graphite** `#1C1C1C` cards and form panels, **chalk** `#F2F2F2` text and light bands, **magenta** `#E5007E` buttons, big numbers, the display accent and the cut lines, **rose** `#FF5FAF` small accent text on black (labels, links), **deep magenta** `#B0006A` labels and links on the chalk bands, **smoke** `#A3A3A3` quiet text. AA throughout: chalk on ink 16.9:1; rose on ink 6.7:1 and on graphite 6.1:1; smoke on ink 7.4:1 and on graphite 6.7:1; white on magenta 4.5:1 (buttons, the magenta cards); ink on chalk 16.9:1; deep magenta on chalk 6.1:1. Magenta on ink (4.2:1) is used only for large type (the display word, numbers, menu numerals) and decoration, never for body text |
| Style | Bold + editorial + geometric (edgy, fashion) |
| Type | **Syne** (variable, 400–800, used at 700–800 in capitals) for headings, the wordmark, the giant footer wordmark, big numbers, prices and the open menu; **Inter** (variable, 100–900) for reading, labels, navigation, the price-list details, forms and buttons. Both bundled (Latin subsets, SIL OFL 1.1), no CDNs. Fluid type between 390 px and 1440 px |
| Header (H10, floating pill) | A rounded, frosted pill that floats at the top of every page and stays there as you scroll: a slanted magenta cut mark and the wordmark, the menu in the middle, a magenta **Book** pill on the right. Below 600 px the menu becomes a round button opening the core Navigation block's full-screen overlay: ink cut by a magenta diagonal, the pages as big numbered capitals, focus kept inside, Escape closes it, and `assets/js/menu.js` keeps `aria-expanded`/`aria-controls` on the button in step |
| Footer (F1, giant wordmark) | A row with a big "Sit down. We'll take it from here." and the booking buttons, the salon details (the synced pattern) and the menu as a list; then the site title as one **giant Syne wordmark** across the full width, sliced on a diagonal by a thin gap and a magenta hairline (the cut tilts a little when you point at the footer); then one line of small print |
| Home (L8, card mosaic) | A 12-column mosaic that packs itself (`grid-auto-flow: dense`): the big title "Cut sharp. Colour loud." with the booking buttons, a tall photograph of the signature look, a magenta number card, looks cut on different diagonals, a chalk client-quote card, an outlined menu card, a wide photograph of the room and a stylists card, with a magenta hairline cutting across behind it. Then a chalk band (diagonal top and bottom) with the four services as staggered cards, and the latest journal notes as a mosaic (the newest one larger) |
| Signature | Scissor cuts: `clip-path` diagonals on photographs (`ks-cut-a` slanted bottom, `ks-cut-b` slanted top, `ks-cut-c` two snipped corners), on cards, on the chalk bands and on page heads (a magenta diagonal hairline). Each cut has a mirrored twin and flips on hover. A "cut line" separator (scissors icon and dashes) and the sliced footer wordmark carry it further |
| Motion | CSS only and short: cuts flip on hover, photographs zoom slightly on hover, the brand mark leans, arrows slide, the footer's cut line tilts. Nothing is hidden before it moves (full-page captures and print show everything). Everything stops under `prefers-reduced-motion`, and the cuts stay put |
| Mobile | Designed at 390 px: the pill keeps the wordmark, Book and the menu button; the mosaic becomes two columns (text cards full width, photographs side by side); services, stylists, the menu and forms stack to one column; the footer wordmark stays on one line |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (small spaced capitals with a slanted dash), *Lead*, *Big number*
- Separator: *Cut line* (scissors and dashes)
- Button: *Text link with an arrow* (core *Outline* is styled too)
- Image: *Scissor cut* (diagonal edge)
- Group: *Cut card* (snipped corners)
- List: *Steps* (big numbers), *Dash list* (magenta dashes)
- Details: *Question* (plus sign)

Helper classes used by the patterns: `ks-mosaic` with `ks-tile` (`--title`, `--photo`, `--magenta`, `--chalk`, `--line`, `--graphite`) and the size classes `ks-w3`–`ks-w12`, `ks-h1`–`ks-h4`; `ks-cut-a`, `ks-cut-b`, `ks-cut-c`; `ks-band`, `ks-section` (`--flush`), `ks-head`, `ks-split`, `ks-intro`, `ks-services`, `ks-posts`, `ks-story`, `ks-room`, `ks-rules`, `ks-stylists`/`ks-stylist`, `ks-menu` and `ks-prices`, `ks-notes`, `ks-form-grid`/`ks-form`, `ks-info`, `ks-faq`, `ks-issues`.

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: the card mosaic, services, journal) |
| `templates/page-wide.html` | "Page without title": the demo pages (About, Stylists, Menu, Booking, Newsletter, Contact) hold their own heading in their content |
| `templates/page.html` | Any other page: the title above a magenta cut line, then the content |
| `templates/home.html` | Journal (posts page): topic chips and a staggered three-column card mosaic |
| `templates/single.html` | Article: topic and date, a big title in capitals, the summary, a wide featured photograph cut on a diagonal, the text, tags and previous/next |
| `templates/category.html`, `tag.html`, `archive.html`, `index.html`, `search.html`, `404.html` | Archives, search and not found ("This page got cut.") |

Every page template renders the page's own content (`wp:post-content`); all copy lives in the pages, editable in the page editor.

### One place for shared details

- **Salon details** (address, opening hours, phone, email, social links): the synced pattern "Kami Salon: address, hours, phone, email and social links", shown in the footer of every page, on the Booking page and on the Contact page.
- **Price menu** (cut, colour, care, extras, with a note): the synced pattern "Kami Salon: price menu", shown on the Menu page and the Booking page.

Both are created once from `inc/info/salon.html` and `inc/info/menu.html` by `inc/salon-info.php` (tagged, so they are never created twice and a trashed one is respected), and every place shows a reference to them (`<!-- wp:block {"ref":…} /-->`). Edit them in Appearance → Editor → Patterns, or open one on any page and choose "Edit original". The social icons link to `#` until you add your profile addresses.

## Demo content

`demo-content.json` + `inc/demo-import.php` (the shared ShipPress importer): on activation the theme creates eight pages (Home, About, Stylists, Menu, Booking, Journal, Newsletter, Contact), six posts in four categories with six tags and featured photographs, the main menu, and sets the static front page and the posts page. It is idempotent and never overwrites or deletes content you wrote.

The hours, prices, address and telephone number are examples. The forms are plain HTML: connect them to your own booking, form or email service.

## Images

Nine photographs in `assets/images/` (copies in `assets/images/demo/` for the Media Library), AI-generated for this theme and released under GPL-2.0-or-later / CC0. No real people, places, brands or organisations; the people shown are AI-generated and do not depict real people.
