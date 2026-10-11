# Menya Kaen

A quiet, crafted WordPress **block theme** for a **small ramen-ya**: a counter of eight seats, one pot of broth a day and a menu that fits on a card. The theme is Japanese minimal in its restrained form: **washi**-coloured pages, **sumi** ink type, **dark wood** and a single **vermilion** used only for the seal and small marks; **Shippori Mincho B1** headings over **Zen Kaku Gothic New** and a great deal of white space. A **linen noren** carries the shop's name at the top of every page, the menu runs down the right edge in **vertical type**, and the home page is a **single-column long read**. The menu itself is a **printed menu card** with dotted leaders and prices.

Version 2.0.0 is a full redesign of the 1.x street-poster look (yellow ground, Anton capitals, ticket-machine keys, docked bar, ticker footer), which is gone.

All sample copy is in English and every name is fictional. The sample shop, **Menya Kaen**, sits behind a linen noren on Kaede-dori (a fictional street in a fictional Nishi-Kawabe, six minutes from the equally fictional Kawabe station). Its cook is Tomoe Hayase; Ren Okabe makes the noodles and Mio Sakuma looks after the room. The address, telephone number, email and prices are placeholders. Replace them with your own.

## Who it is for

- **Industry:** ramen-shop: ramen-ya, noodle counters, small restaurants with a short menu.
- **Site type:** food-drink. The menu card with prices, the bowls in detail, add-ons, the walk from the station, about and the people, notes (news), a seasonal newsletter and contact. Not a web shop: no WooCommerce.
- **Mood:** elegant, minimal, editorial; quiet and premium.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (dark, warm, neutral) | **Washi** `#F3EEE5` ground, **sumi** `#1E1B18` text and the footer, **paper** `#FAF7F1` the menu card and the contact panel, **linen** `#E6DCCB` the noren, **dark wood** `#4A3426` the noren's rod, **vermilion** `#A63A24` the seals, hairline marks, labels and Roman numerals, **stone** `#6B635B` quiet text, **ash** `#8A8178` hairlines and dotted leaders only, **mist** `#B5ACA2` quiet text on sumi. AA throughout: sumi on washi 14.8:1; vermilion on washi 5.6:1 and on paper 6.0:1 (small labels, prices' section titles, numerals); stone on washi 5.1:1; washi on sumi 14.8:1; mist on sumi 7.7:1; washi on vermilion 5.6:1 (the seals). Ash (3.3:1 on washi) is never used for text; vermilion is never used for text on sumi |
| Style | Elegant + minimal + editorial |
| Type | **Shippori Mincho B1** (400, 500) for headings, the name on the noren, the vertical menu, dish names and prices, the seal; **Zen Kaku Gothic New** (400, 500) for reading, spaced-capital labels, notes, forms and buttons. Both bundled as Latin subsets (WOFF2, SIL OFL 1.1; the Mincho subset also carries the three kanji drawn on the seals), no CDNs. Sizes are explicit `clamp()` values between 390 px and 1440 px |
| Header (H11, vertical Japanese-type nav on the right edge) | At the top of every page hangs a **noren**: a short linen curtain drawn in CSS on a dark wooden rod, with the shop's name across its joined top and two slits dividing it into three panels below (a small vermilion "Ramen" sits in the middle panel). The navigation block is fixed to the **right edge** from 600 px up: a hairline-ruled washi strip with the pages set in **vertical type** (`writing-mode: vertical-rl`), a vermilion dot marking the current page and a small vermilion seal at its foot. Keyboard focus shows a vermilion ring. Below 600 px it becomes a plain menu button opening the core Navigation overlay (washi, a hairline-ruled list); focus stays inside, Escape closes it, and `assets/js/menu.js` keeps `aria-expanded`/`aria-controls` in step |
| Footer (F12, stamped seal + vertical text column) | Ink-dark. On the left a **stamped vermilion seal** with the shop's name (a slightly turned square with an inner rule, as if pressed by hand) and two lines in Mincho; in the middle the **hours and address set as a vertical column of text**, read from right to left (the synced shop details, `writing-mode: vertical-rl` from 900 px up, horizontal below); on the right the pages and the newsletter link; then one line of small print |
| Home (L7, single-column long read) | A wide photograph of a steaming bowl, then the opening lines centred in one column. Six chapters, each opened by a Roman numeral between hairlines: **I** the broth (a short essay with a drop cap and a wide photograph of the pot), **II** the menu (the printed menu card), **III** the counter (photograph and two paragraphs), **IV** the cook's hands (a tall photograph and a quotation), **V** a quiet note on the hours (the synced shop details), **VI** the three latest notes as a ruled list |
| Signature | **The printed menu card.** A paper card with a fine double rule, a small vermilion seal on its corner, "The menu" centred in Mincho, section titles between hairlines, and every dish as a row of name, **dotted leader** and price, with a one-line note below. Dish names link to the bowl they name on the Menu page. The add-ons card works the same way |
| Motion | Almost none: links and buttons change colour, the question sign turns, the text-link arrow moves 4 px. Transitions stop under `prefers-reduced-motion` |
| Mobile | Designed at 390 px: a smaller noren with the menu button beside it, the hero photograph in 4:5, wide photographs in 4:3, the menu card full width with its leaders kept, one-column lists and forms, the footer stacked |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (small spaced capitals after a vermilion hairline), *Lead*
- Separator: *Three quiet dots*
- Button: *Text link with a hairline* (the default button is a hairline outline)
- List: *Ruled list (hairlines between items)*, *Route with numbered stops*
- Details: *Question (hairline and a plus sign)*

Helper classes used by the patterns: `mk-noren`, `mk-rail`; `mk-section` (`--hero`, `--flush`, `--card`, `--last`), `mk-head`, `mk-chapter` (`__no`, `__title`), `mk-intro`, `mk-dropcap`, `mk-figure` (`--portrait`), `mk-quote`, `mk-note`; `mk-card` (`__kicker`, `__title`, `__note`, `__group`, `__foot`) with `mk-dish` (`__name`, `__price`, `__note`); `mk-bowl`, `mk-people`/`mk-person`, `mk-letters`/`mk-letter`, `mk-form`/`mk-field`, `mk-contact`, `mk-info`, `mk-notes`, `mk-posts`, `mk-chips`; `mk-foot`, `mk-seal`.

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: the long read) |
| `templates/page-wide.html` | "Page without title": the demo pages (Menu, Toppings, Access, About, Newsletter, Contact) hold their own heading in their content |
| `templates/page.html` | Any other page: a centred title, then the content |
| `templates/home.html` | Notes (posts page): topic links and a ruled list of notes with a small photograph each |
| `templates/single.html` | Article: date and topic, a centred title and summary, a wide featured photograph, the text, tags and earlier/later |
| `templates/category.html`, `tag.html`, `archive.html`, `index.html`, `search.html`, `404.html` | Archives, search and not found ("This page has gone cold.") |

Every page template renders the page's own content (`wp:post-content`); all copy lives in the pages, editable in the page editor.

### One place for shared details

- **Shop details** (opening hours, address, telephone, email, social links): the synced pattern "Menya Kaen: hours, address, telephone, email and social links", shown in the footer of every page (as its vertical column), on the home page, the Access page and the Contact page.
- **Menu card** (every bowl, small plate and drink with its price): the synced pattern "Menya Kaen: menu card (bowls, small plates and drinks with prices)", shown on the home page and the Menu page.
- **Add-ons card** (every topping and extra noodles with its price): the synced pattern "Menya Kaen: add-ons card (toppings and extra noodles with prices)", shown on the Toppings page.

All three are created once from `inc/info/shop.html`, `inc/info/menu.html` and `inc/info/toppings.html` by `inc/shop-info.php` (tagged, so they are never created twice and a trashed one is respected; site-relative links get the site's address), and every place shows a reference to them (`<!-- wp:block {"ref":…} /-->`). Edit them in Appearance → Editor → Patterns, or open one on any page and choose "Edit original". Prices and hours appear nowhere else. The social icons link to `#` until you add your profile addresses.

### Updating from 1.x

Updating replaces the header, footer, templates, patterns and styles. Everything already on the site is the owner's content and is never changed or duplicated: pages created by 1.x keep their 1.x text and blocks (they read calmly in the new styles; the old ticket-machine price list shows as a plain priced list), the synced patterns keep their edited prices and hours, and the menu keeps its items. Photographs that 1.x pages showed straight from the theme folder and that 2.0.0 retired are pointed at the new photographs by a small `render_block` filter in `functions.php`, so no image breaks. Running the demo import again on such a site only adds what is missing (the six new sample notes, their photographs and terms); it never adds a second Home page or a second synced pattern.

## Pages and demo content

`demo-content.json` + `inc/demo-import.php` (the shared ShipPress importer) create on activation: Home (front page), Menu, Toppings (titled "Add-ons" in the menu), Access (`/map/`), About, Notes (posts page), Newsletter and Contact; six notes with photographs in four categories (Seasonal bowls, From the kitchen, At the counter, Notices) and eight tags; the seven photographs in the Media Library; and the main menu (Menu, Add-ons, Access, About, Notes, Contact). Running the import again adds only what is missing and never changes or deletes what you edited.

Catalogue pages (`screens`): home, about, menu, toppings, access (`/map/`), news, article, category, tag, newsletter, contact, search.

## Files

```
menya-kaen/
├── style.css            theme header + all CSS
├── theme.json           palette, fonts, sizes, element and block styles
├── theme-meta.json      catalogue metadata (industry, type, colours, style, header/footer/layout codes, fonts, pages)
├── functions.php        supports, the menu script, block styles, pattern category, retired 1.x image names
├── demo-content.json    pages, posts, terms, menu, catalogue screens
├── inc/demo-import.php  shared ShipPress importer (identical copy)
├── inc/shop-info.php    the three synced patterns
├── inc/info/*.html      their first content
├── parts/               header (noren + vertical menu), footer (seal + vertical column)
├── templates/           see above
├── patterns/            30 patterns (home chapters, page heads, menu, add-ons, access, about, newsletter, contact, 404, synced wrappers)
├── assets/fonts/        Shippori Mincho B1, Zen Kaku Gothic New (WOFF2 Latin subsets) + OFL texts
├── assets/images/       AI-generated photographs (+ demo/ copies for the Media Library)
└── assets/js/           menu.js
```

## License

GPL-2.0-or-later. Fonts: SIL OFL 1.1. Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0. See `readme.txt`.
