# Sumai Realty

A trustworthy, data-first WordPress **block theme** for **estate agents**, letting offices and small property developers. *Sumai* means "a home, a place to live". The theme is Japanese minimal drawn like an architect's sheet: **cool paper white**, **slate** and one **brass** line, **Space Grotesk** over **IBM Plex Sans**, square corners and hairline rules. The signature is **floor-plan linework**: dimension lines with end ticks, plan frames with a wall line and a door swing, listing rows that draw their walls in brass on hover, and a real **floor plan** on every listing built from editable blocks. The home page opens straight into a **filter-first listings directory**. The header has **two tiers** (an office strip and the main bar). The footer is a **blueprint map** of the walk from the station beside the office's **address card**.

All sample copy is in English and every name is fictional. The sample agency, **Sumai Realty**, is a four-person office in the fictional Kitamachi, on the fictional Hanamizu line, covering three neighbourhoods: Kitamachi, Sakuragaoka and Minato-dai. Its agents are Emi Takase (managing agent), Daisuke Oda (sales), Nao Fujimura (lettings) and Ren Ishiguro (new builds and plans). The address, telephone number, licence number, buildings and prices are placeholders. Replace them with your own.

## Who it is for

- **Industry:** real-estate: estate agents, letting and rental offices, property managers, small developers selling from the plan.
- **Site type:** business. A listings directory (buy, rent, new builds) with a sheet for every home, the market in numbers, how the office works, the team, a journal, a weekly listings newsletter and a viewing-request form. Not a property portal: listings are pages, no plugin needed.
- **Mood:** trustworthy, data, calm; numbers first, square and ruled.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (blue, cool) | **Paper** `#F4F5F7` ground, **white** `#FFFFFF` sheets and tables, **mist** `#E4E8ED` tinted bands, **line** `#C3CAD3` hairlines and the plan grid (decoration only), **slate** `#3A4A5C` headings, buttons and plan walls, **deep slate** `#26313E` the utility strip and the footer, **ink** `#1E2733` body text, **muted** `#5A6675` quiet text, **fog** `#A9B4C2` quiet text on deep slate, **brass** `#C6A15B` lines, markers and the door swings, **deep brass** `#7F5F22` small brass text on paper. AA throughout: ink on paper 13.8:1; slate on paper 8.3:1 and white on slate 9.1:1 (buttons); muted on paper 5.4:1; deep brass on paper 5.4:1; paper on deep slate 12.1:1; brass on deep slate 5.4:1 (small labels in the strip and the footer); fog on deep slate 6.3:1. Brass on paper (2.2:1) is used only for lines, ticks and door swings, never for text |
| Style | Minimal + geometric (trustworthy, data). Not washi-ivory: a cool grey-white ground with a faint plan grid |
| Type | **Space Grotesk** (variable 300–700) for headings, the wordmark, navigation, tabs, prices and every number in the rows and spec tables; **IBM Plex Sans** (variable, with italic) for reading, labels, chips, forms and table labels. Tabular figures everywhere, so prices line up. Both bundled (WOFF2, SIL OFL 1.1; Plex kept whole because of its Reserved Font Name), no CDNs. Fluid type between 390 px and 1440 px |
| Header (H9, two-tier) | A **deep-slate utility strip**: the synced office details shown as one line (hours, phone, email, social icons; the address is left out by CSS) and a "free valuation" link; then the **main bar** on paper: a plan-square mark with a brass door swing, the wordmark and "Real estate · Hanamizu line", the menu in ruled cells (Buy, Rent and New builds go straight to the directory tabs; a brass wall line draws under the hovered or current item) and a slate **Book a viewing** button. The bar's bottom line ends in two dimension ticks. Unlike Hakuba Dental's H9 (rounded, soft blue, white bar), everything here is square, ruled and drawn. On phones the strip keeps the hours and the phone number, and the menu becomes the core overlay (numbered rows) |
| Footer (F6, map + address card) | A **blueprint map** on deep slate: plan grid, the railway with sleepers, Kitamachi Station as a square on the line, Hanamizu-dori and two side streets, the river, a scale bar and the walk from the north exit to the office as a brass dashed line ending at a brass "Sumai Realty" tag (CSS only; the labels are editable paragraphs). Beside it, the **address card**: "Come and see the plans.", the synced office details as a ruled list and two buttons (Book a viewing, Directions). Then the menu, the newsletter link and one line of small print |
| Home (L14, tabbed / filter-first directory) | No hero photograph: a compact title block ("Find a home by the numbers." with three figures) sits on the plan grid and the **listings directory** starts right under it. Drawing-set **tabs** (Buy / Rent / New builds, each with its count), **area chips** and **floor-area chips**, then one ruled **row per home**: photo (or a drawn plan for homes not built yet), sheet number, area and kind, name, one line, and four ruled numbers: price, floor area, rooms, station walk. Then the market in a spec table, four steps measured in weeks on a dimension line, the managing agent, and the latest journal notes as index rows |
| Signature | **Floor-plan linework.** Dimension lines with slanted end ticks (separator style, the steps, the bar's edge), plan frames (a wall line, an inner hairline and a brass door swing) round cards and the form, corner ticks round photographs, listing rows that draw brass walls along their edges and swing their door on hover, and on every listing sheet a **floor plan**: rooms are Group blocks on a CSS grid (walls are their borders), each with an editable name and size in m², balconies dashed and hatched with a window line, brass door swings and a north arrow. Plain CSS lines, no illustrations |
| Motion | Short and CSS only: wall lines draw, door swings move, tabs open, underlines grow. Nothing is hidden before it moves. Everything stops under `prefers-reduced-motion` |
| Mobile | Designed at 390 px: the strip keeps hours and phone, the tabs stay in one row with counts underneath, rows stack photo and name over a two-by-two grid of numbers, the market table scrolls sideways, the plans turn square, forms become one column |

### The directory: filter-first, with or without JavaScript

- **Without JavaScript** the tabs are links to the three lists (`#buy`, `#rent`, `#new-builds`); all three lists show one under another, and following a tab link shows only that list (CSS `:target`). The chips are plain links (`?area=kitamachi#directory`, `?size=m#directory`); `inc/directory.php` leaves out the rows that do not match, marks the current chip with `aria-current="true"` and keeps the other row's choice in every chip link. A list with no match says so, with a link to show every home.
- **With JavaScript** (`assets/js/directory.js`, 6 KB, no dependencies) the tabs become an ARIA tab list: one list at a time, Left/Right/Home/End move between tabs (automatic activation, roving `tabindex`), each tab shows how many homes match, and the address keeps the tab (`#rent`) so links from the menu and reloads open the right one. The chips filter in place (the address keeps `?area=…&size=…`), and a polite status line says how many homes are shown.
- A row is filtered by its classes: `sr-area-<area>` and `sr-size-<s|m|l>` (s under 50 m², m 50 to 80 m², l over 80 m²). To add an area, add a chip with the same value.

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (small capitals with a dimension tick), *Lead*
- Separator: *Dimension line (with end ticks)*
- Button: *Text link with an arrow* (core *Outline* is styled too)
- Group: *Plan frame (wall lines and a door swing)*
- Image: *Plan frame (corner ticks)*
- Table: *Spec sheet (ruled rows)*
- List: *Measured steps (numbered ticks)*, *Dash list (brass dashes)*
- Details: *Question (plus sign)*

Helper classes used by the patterns: `sr-directory`, `sr-dir-bar`, `sr-tabs`, `sr-filters`/`sr-filter`, `sr-chips` (`--area`, `--size`), `sr-panels`/`sr-panel`, `sr-listing` (`__photo`, `__main`, `__ref`, `__title`, `__note`, `__facts`), `sr-fact` (`--price`), `sr-planthumb`, `sr-empty`; `sr-sheet` (`__head`, `__row`, `__title`, `__name`, `__price`, `__photo`, `__planfig`, `__body`, `__specs`, `__about`), `sr-price`, `sr-plan` (`--1ldk`, `--2ldk`, `--3ldk`) with `sr-room` (`--balc`, `--bed1`, `--bed2`, `--bed3`, `--ldk`, `--bath`, `--wc`, `--entry`); `sr-intro`, `sr-stats`, `sr-section` (`--mist`, `--white`, `--flush`, `--tight`), `sr-head`, `sr-split` (`--photo`, `--data`, `--form`), `sr-agent`, `sr-index`, `sr-rules`, `sr-team`/`sr-people`/`sr-person`, `sr-issues`, `sr-card` (`--deep`), `sr-form`/`sr-field`, `sr-office`, `sr-map`, `sr-posts`, `sr-topics`.

## Pages and templates

| Page | Content |
|------|---------|
| Home | Title block + the directory (synced), the market table, four steps, the managing agent, latest journal notes |
| Listings | Title block with a legend + the directory (synced), "Five words on every listing" (questions) |
| Nine listing sheets (child pages of Listings) | Breadcrumb, sheet number, name, lead, price block with buttons; a wide photograph (or, for new builds, the floor plan); the spec table (price, floor area, rooms, floor, built, station walk, fees or lease, status) beside "About this home"; the floor plan (or, for new builds, the timeline from plan to keys); the viewing call |
| About | Title block, the story with a photograph, three rules on dimension lines, the team (the managing agent with a portrait, three colleagues with initials in plan frames), the office's own spec table |
| Journal | Posts page: topic chips and ruled rows with a framed photograph |
| Newsletter | "New listings, every Friday." with a sign-up form (email, area, rentals) in a plan frame, then three past issues |
| Contact | Title block, the viewing-request form beside the synced office details, the walk from the station as measured steps |

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content) |
| `templates/page-wide.html` | "Page without title": the demo pages hold their own heading in their content |
| `templates/page.html` | Any other page: a title, then the content |
| `templates/home.html` | Journal (posts page) |
| `templates/single.html` | Article: date and topic, title, summary, a wide framed photograph, the text (headings ruled in slate and brass), tags and previous/next |
| `templates/category.html`, `tag.html`, `archive.html`, `index.html`, `search.html`, `404.html` | Archives, search and not found ("This room is not on the plan.") |

Every page template renders the page's own content (`wp:post-content`); all copy lives in the pages, editable in the page editor.

### One place for shared details

- **Office details** (address, opening hours, phone, email, social links): the synced pattern "Sumai Realty: office address, hours, phone, email and social links", shown in the utility strip of every page (as one line, without the address), in the footer's address card and on the Contact page. The licence number appears only in the About page's spec table.
- **Listings directory** (tabs, chips, every listing row): the synced pattern "Sumai Realty: listings directory (tabs, filters and every listing row)", shown on the home page and the Listings page.

Both are created once from `inc/info/office.html` and `inc/info/directory.html` by `inc/office-info.php` (tagged, so they are never created twice and a trashed one is respected; site-relative links get the site's address), and every place shows a reference to them (`<!-- wp:block {"ref":…} /-->`). Edit them in Appearance → Editor → Patterns, or open one on any page and choose "Edit original". Each listing's own sheet repeats its row's four numbers in its spec table: when a price changes, change the row and the sheet. The social icons link to `#` until you add your profile addresses.

## Demo content

`demo-content.json` drives the shared importer (`inc/demo-import.php`, identical to `shared/inc/demo-import.php`): 15 pages (Home, Listings with nine listing sheets as child pages, About, Journal, Newsletter, Contact), six journal posts in four categories with nine tags and featured photographs, seven photographs in the Media Library, and the main menu (Buy, Rent and New builds link to the directory tabs). It sets the static front page and the posts page. Running it again adds only what is missing and never changes what you edited.

## Images

Seven photographs, AI-generated for this theme and released under GPL-2.0-or-later / CC0 (see `readme.txt`): a low grey house at dusk, a slatted townhouse, a pale apartment building, a living room, a kitchen, a bedroom with paper screens and the managing agent (AI-generated; not a real person). One more generated photograph was dropped because it showed a readable number engraved on a key. No hand-drawn illustrations: the plans, frames, dimension lines and the map are CSS lines.
