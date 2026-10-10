# Kaze Yoga

A calm, airy WordPress **block theme** for **small yoga studios**, meditation rooms, breathwork and slow-movement teachers. *Kaze* means "wind", and the theme borrows its pace: a pale mist ground, sage and pine-ink, lots of air, and a slow **breath line** (a soft wave that drifts sideways and rises and falls like a breath) running through the hero, every page head, the lists, the menu and the footer. The header is just the wordmark and a **Menu** button that opens a **full-screen numbered menu**. The home page tells a class in **four chapters** (arrive, move, breathe, rest): each photograph **stays in place while its words scroll past**, then the next one slides over it. The footer is one **big band inviting visitors to book a free trial class**, above the studio details.

All sample copy is in English and every name is fictional. The sample studio, **Kaze Yoga**, is a one-room studio above a moss garden in Kazemachi, Setagaya, Tokyo. Its teachers are Naomi Arai (founder; Flow and Foundations), Ren Takeda (Slow Breath and meditation) and Setsuko Mori (Restore and Gentle Yoga 60+). The address, telephone number, email and prices are placeholders. Replace them with your own.

## Who it is for

- **Industry:** yoga-studio: yoga and meditation studios, breathwork rooms, pilates and slow-movement teachers, community wellbeing spaces.
- **Site type:** health. A weekly timetable, the teachers, a free trial class with a booking form, about the studio, a journal (news), a seasonal newsletter and contact.
- **Mood:** calm, airy, unhurried; Japanese minimal with soft organic curves.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (green, light) | **Mist** `#EEF0EB` ground, **paper** `#F7F8F5` cards and the open menu, **pale sage** `#DDE4DA` bands, **sage** `#9AAE9A` for the breath line and the booking band, **moss** `#4A5E50` buttons, links and numerals, **stone** `#56645B` quiet text, **pine-ink** `#2E3B34` text and the footer base. AA throughout: ink on mist 10.2:1, on pale sage 9.0:1 and on sage 5.0:1 (the booking band); moss on mist 6.1:1 (paper on moss 7.0:1); stone on mist 5.4:1 and on pale sage 4.8:1; mist on ink 10.2:1, `#C9D6C7` on ink 7.8:1. Sage on mist (2.1:1) is used only for the decorative line, never for text |
| Style | Minimal + serene + airy (calm, airy) |
| Type | **Gowun Batang** (Regular and Bold) for headings, the wordmark, chapter numbers, the open menu and prices; **Lexend** (variable, 100–900, used light at 300) for reading, labels, the timetable, navigation and forms. Both bundled (Latin subsets, SIL OFL 1.1), no CDNs. Fluid type between 390 px and 1440 px |
| Header (H4, menu only) | A thin, slightly frosted bar that stays at the top: the breath-wave mark (it slowly "breathes") and the wordmark on the left, a pill **Menu** button on the right, nothing else. The button opens the core Navigation block's overlay as a full-screen paper sheet: the seven pages as large Gowun Batang links numbered 01–07, a drifting breath line near the bottom, a round close button. Focus stays inside while it is open, Escape closes it and returns focus to the button, and `assets/js/menu.js` keeps `aria-expanded`/`aria-controls` on the button in step |
| Footer (F7, big CTA band) | A full-width sage band: "Your first class is free", a very large "Come and breathe with us.", a wide breath line, a sentence and a **Book a trial class** button beside a "See the timetable" link. Below, a pine-ink base with the wordmark and a line about the studio, the studio details (the synced pattern), the menu as a vertical list, and one line of small print |
| Home (L13, sticky media) | A typographic opening (three-line title, the full-width breath line, a lead, two links, a wide photograph of the studio), then four numbered chapters in two columns: one photograph is pinned beside each chapter's text while it scrolls past, alternating sides; then this week's timetable on a pale sage band, the three teachers in pebble-shaped portraits (the middle one set lower), and the latest journal notes |
| Motion | CSS only and slow: the breath line drifts and breathes, the header mark breathes, chapter photographs settle from a slight zoom as they scroll into view (scroll-driven, where supported), links and cards respond gently on hover. Nothing is hidden before it moves (full-page captures and print show everything). Everything stops under `prefers-reduced-motion` |
| Mobile | Designed at 390 px: chapters become photograph-then-text with no pinning, the timetable becomes a list of days with each class on its own line, the teachers sit two and one, the footer stacks, the Menu button stays at the top |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (small spaced capitals), *Lead*, *Chapter number*
- Separator: *Breath line* (the slow wave)
- Button: *Text link with a line* (a small wave under the words)
- Image: *Pebble* (soft organic shape)
- Group: *Paper card*
- List: *Steps* (numbered), *Calm list* (small sage wave dashes)
- Details: *Question* (opens softly, plus sign)

Helper classes used by the patterns: `ky-scenes` / `ky-scene` (`--flip`, `--person`, `--short`) with `ky-scene__media` and `ky-scene__text` (the sticky-media layout), `ky-split`, `ky-intro`, `ky-section` (`--band`, `--flush`, `--top-line`), `ky-timetable` and `ky-day`, `ky-classes-grid`, `ky-prices`, `ky-trio`, `ky-people`, `ky-notes`, `ky-form-grid` and `ky-form`, `ky-studio`.

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: opening, four sticky chapters, this week, teachers, journal) |
| `templates/page-wide.html` | "Page without title": the demo pages (About, Timetable, Teachers, Trial class, Newsletter, Contact) hold their own heading in their content |
| `templates/page.html` | Any other page: the title over the breath line, then the content |
| `templates/home.html` | Journal (posts page): topic chips and a three-column card grid |
| `templates/single.html` | Article: the featured photograph stays on the left while the topic, date, title, summary, text, tags and previous/next scroll on the right |
| `templates/category.html`, `tag.html`, `archive.html`, `index.html`, `search.html`, `404.html` | Archives, search and not found |

Every page template renders the page's own content (`wp:post-content`); all copy lives in the pages, editable in the page editor.

### One place for shared details

- **Studio details** (address, opening hours, phone, email): the synced pattern "Kaze Yoga: studio address, hours, phone and email", shown in the footer of every page, on the Contact page and on the Trial class page.
- **Weekly timetable** (Monday to Sunday, time, class, teacher and a note): the synced pattern "Kaze Yoga: weekly timetable", shown on the home page, the Timetable page and the Trial class page.

Both are created once from `inc/info/studio.html` and `inc/info/timetable.html` by `inc/studio-info.php` (tagged, so they are never created twice and a trashed one is respected), and every place shows a reference to them (`<!-- wp:block {"ref":…} /-->`). Edit them in Appearance → Editor → Patterns, or open one on any page and choose "Edit original".

## Demo content

`demo-content.json` + `inc/demo-import.php` (the shared ShipPress importer): on activation the theme creates eight pages (Home, About, Timetable, Teachers, Trial class, Journal, Newsletter, Contact), six posts in four categories with six tags and featured photographs, the main menu, and sets the static front page and the posts page. It is idempotent and never overwrites or deletes content you wrote.

The hours, prices, address and telephone number are examples, and the journal posts are general wellbeing notes, not medical advice. The forms are plain HTML: connect them to your own form or email service.

## Images

Twelve photographs in `assets/images/` (copies in `assets/images/demo/` for the Media Library), AI-generated for this theme and released under GPL-2.0-or-later / CC0. No real people, places, brands or organisations; the people shown are AI-generated and do not depict real people.
