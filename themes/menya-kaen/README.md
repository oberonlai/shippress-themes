# Menya Kaen

A loud, street-style WordPress **block theme** for **ramen shops**, noodle bars and late-night counters. *Menya Kaen* means "noodle house, blaze". The theme is Japanese minimal turned all the way up: a **vivid yellow ground**, ink-black type and bars, one hot **red**, **Anton** capitals at poster size over **Lato**. The signature is the **ticket machine**: the menu and the toppings are chunky shop-ticket-machine buttons with the price on every key. The header is a **bar docked to the bottom of the screen**. The home page is **oversized typography only**. The footer opens with **two ticker bands** running in opposite directions.

All sample copy is in English and every name is fictional. The sample shop, **Menya Kaen**, is an eight-stool ramen counter at the back of a lantern alley (the fictional Kaen-yokocho) in Nakano, Tokyo. Its cooks are Kenta Morioka (founder; broth) and Yui Nanase (noodles; night shift). The address, telephone number, email and prices are placeholders. Replace them with your own.

## Who it is for

- **Industry:** ramen-shop: ramen shops, noodle bars, late-night counters, street-food stalls.
- **Site type:** food-drink. The ticket machine (menu with prices), the bowls, toppings, how to find the shop, about and the house rules, news, a monthly newsletter and contact. Not a web shop: no WooCommerce.
- **Mood:** loud, street, poster; big type, hard shadows, one hot colour.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (yellow, vivid) | **Yellow** `#FFD400` ground, **ink** `#1A1A1A` text, the docked bar, the ticket machine and dark bands, **red** `#D7261E` buttons, hot keys, the statement band, the first ticker and big numbers, **deep red** `#A3140E` small red text and links on yellow, **white** `#FFFFFF` key faces, cards and text on red, **smoke** `#4A4436` quiet text on yellow and white, **ash** `#B8B2A0` quiet text on ink. AA throughout: ink on yellow 12.2:1; deep red on yellow 5.5:1; smoke on yellow 6.8:1; white on red 5.0:1 (buttons, hot keys, the statement); white on ink 17.4:1; ash on ink 8.2:1; yellow on ink 12.2:1. Red on yellow (3.5:1), yellow on red (3.5:1, the first ticker) and red on ink (3.5:1) are used only for large type (Anton at 2.25 rem and up) and decoration, never for body text |
| Style | Bold + poster + playful (loud, street) |
| Type | **Anton** (400) in capitals for headings, the wordmark, the oversized home type, the ticket-machine keys, the tickers and the open menu; **Lato** (400, italic, 700) for reading, labels, navigation, prices on the keys, forms and buttons. Both bundled (WOFF2, SIL OFL 1.1; Lato kept whole because of its Reserved Font Name), no CDNs. Fluid type between 390 px and 1440 px |
| Header (H7, bottom-docked bar) | An ink bar with a red top edge, fixed to the bottom of the screen on every page: a red flame mark and the wordmark, the menu in the middle (the current page underlined in red) and a yellow **Tickets** key. Below 600 px the menu becomes a button opening the core Navigation block's full-screen overlay (yellow, the pages in giant Anton capitals); focus stays inside, Escape closes it, and `assets/js/menu.js` keeps `aria-expanded`/`aria-controls` in step. The page's end has room for the bar, so nothing is hidden under it |
| Footer (F5, marquee) | Two tickers: the bowls in yellow Anton on a red band, and "Push a button · Take a stool · Slurp out loud…" in ink on yellow running the other way, then a "Pause ticker" button (`aria-pressed`); then "The pot is on." with two buttons, the shop details (the synced pattern) and the menu as a list, then one line of small print. The tickers move only under `prefers-reduced-motion: no-preference`, stop while pointed at or focused, and stand still (the text wraps, the copies are hidden) under reduced motion or without JavaScript. Copies made by `assets/js/ticker.js` are `aria-hidden`, so screen readers read the text once |
| Home (L9, oversized typography only) | No photographs. "Ramen, LOUD and late." in three giant lines (the middle one outlined) with a red rotated stamp and one line of copy with two buttons, sized to end at the docked bar; "Push a button." beside the **ticket machine**; a red band with "Eighteen hours of broth. Four minutes to the bowl."; giant 1-2-3 steps on ink (Buy. Hand over. Slurp.); the latest news as giant headlines and the newsletter in one line |
| Signature | **Ticket-machine buttons.** The machine is an ink cabinet with a lamp ("Push a button"), rows of keys and a ticket slot. Each key is a real link (`core/button`, style *Ticket machine button*): a chunky plastic face (white, red for hot bowls, yellow for sides) with an automatic number, the name in Anton and the price on an ink tag. Keys lift on hover and press down on click, and show a thick yellow focus ring on the keyboard. Every key jumps to the bowl or topping it names on the Menu or Toppings page. Ticket-stub cards (punched notches and a perforated line), a ticket-stub page label and a train-line route on the Map page carry it further |
| Motion | CSS only and short, plus the tickers: buttons and keys press, the stamp turns, cards lift, headline underlines draw. Nothing is hidden before it moves. Everything stops under `prefers-reduced-motion` |
| Mobile | Designed at 390 px: the docked bar keeps the mark, the wordmark, the menu button and Tickets; the ticket machine becomes two keys per row; photographs and text stack; forms become one column |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (small capitals with a red tab), *Lead*
- Heading: *Outlined letters*
- Separator: *Ticket tear line*
- Button: *Ticket machine button*, *Text link with an arrow* (core *Outline* is styled too)
- Group: *Ticket stub card*
- List: *Route with stops*, *Steps (big numbers)*, *Dash list (red dashes)*
- Details: *Question (plus sign)*

Helper classes used by the patterns: `mk-machine` (`__top`, `__brand`, `__lamp`, `__row`, `__keys`, `--small`, `--four`, `__foot`, `__slot`, `__note`) with the key colours `mk-key--hot` and `mk-key--side`; `mk-hero`, `mk-giant`, `mk-outline`, `mk-stamp`; `mk-huge`, `mk-statement`, `mk-steps`, `mk-headlines`, `mk-oneline`; `mk-section` (`--ink`, `--red`, `--white`, `--flush`), `mk-head`, `mk-split` (`--machine`, `--photo`, `--route`, `--details`), `mk-photo` (`--tall`, `--wide`, `--band`), `mk-bowl`, `mk-minis`/`mk-mini`, `mk-firm`, `mk-rules`, `mk-people`, `mk-card` (`--white`, `--ink`, `--yellow`), `mk-form-grid`/`mk-form`, `mk-info`, `mk-issues`, `mk-chips`, `mk-posts`, `mk-ticker`.

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: hero, ticket machine, statement, steps, news) |
| `templates/page-wide.html` | "Page without title": the demo pages (Menu, Toppings, Map, About, Newsletter, Contact) hold their own heading in their content |
| `templates/page.html` | Any other page: a big title, then the content |
| `templates/home.html` | News (posts page): topic chips and ticket-stub cards in three columns |
| `templates/single.html` | Article: topic and date, a giant title, the summary, a wide featured photograph with a hard shadow, the text, tags and previous/next |
| `templates/category.html`, `tag.html`, `archive.html`, `index.html`, `search.html`, `404.html` | Archives, search and not found ("Sold out.") |

Every page template renders the page's own content (`wp:post-content`); all copy lives in the pages, editable in the page editor.

### One place for shared details

- **Shop details** (address, opening hours, phone, email, social links): the synced pattern "Menya Kaen: address, hours, phone, email and social links", shown in the footer of every page, on the Map page and on the Contact page.
- **Ticket machine** (every bowl, side and drink with its price): the synced pattern "Menya Kaen: ticket machine (bowls, sides and drinks with prices)", shown on the home page and the Menu page.
- **Toppings machine** (every topping with its price): the synced pattern "Menya Kaen: toppings machine (toppings with prices)", shown on the Menu page and the Toppings page.

All three are created once from `inc/info/shop.html`, `inc/info/menu.html` and `inc/info/toppings.html` by `inc/shop-info.php` (tagged, so they are never created twice and a trashed one is respected; site-relative key links get the site's address), and every place shows a reference to them (`<!-- wp:block {"ref":…} /-->`). Edit them in Appearance → Editor → Patterns, or open one on any page and choose "Edit original". Prices appear nowhere else. The social icons link to `#` until you add your profile addresses.

## Pages and demo content

`demo-content.json` + `inc/demo-import.php` (the shared ShipPress importer) create on activation: Home (front page), Menu, Toppings, Map, About, News (posts page), Newsletter and Contact; six news posts with photographs in four categories (New bowls, Behind the counter, Slurp guide, Shop news) and nine tags; the nine photographs in the Media Library; and the main menu (Menu, Toppings, Map, About, News, Contact). Running the import again adds only what is missing and never changes or deletes what you edited.

Catalogue pages (`screens`): home, about, menu, toppings, access (the Map page, `/map/`), news, article, category, tag, newsletter, contact, search.

## Files

```
menya-kaen/
├── style.css            theme header + all CSS
├── theme.json           palette, fonts, sizes, element and block styles
├── theme-meta.json      catalogue metadata (industry, type, colours, style, header/footer/layout codes, fonts, pages)
├── functions.php        supports, scripts, block styles, pattern category
├── demo-content.json    pages, posts, terms, menu, catalogue screens
├── inc/demo-import.php  shared ShipPress importer (identical copy)
├── inc/shop-info.php    the three synced patterns
├── inc/info/*.html      their first content
├── parts/               header (bottom-docked bar), footer (tickers)
├── templates/           see above
├── patterns/            30 patterns (home, menu, toppings, map, about, contact, newsletter, 404, synced wrappers)
├── assets/fonts/        Anton, Lato (WOFF2) + OFL texts
├── assets/images/       AI-generated photographs (+ demo/ copies for the Media Library)
└── assets/js/           menu.js, ticker.js
```

## License

GPL-2.0-or-later. Fonts: SIL OFL 1.1. Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0. See `readme.txt`.
