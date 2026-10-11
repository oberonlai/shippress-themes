# Sakura Juku

A friendly, rounded WordPress **block theme** for **language schools**. *Juku* means "cram school" or "after-school class"; *sakura* is the cherry blossom. The theme is a bright classroom in April: **white** pages, **sakura-pink** and **clear-blue** cards, **Zen Maru Gothic** headings over **Nunito**. The header is **centred**, with the menu split to the left and right of the school's name. The home page is one **bento grid** of rounded cells. **Hiragana stickers** (one decorative kana on a small tilted badge) sit on the corners of cards across the site. The footer is centred on the **opening-hours table**.

All sample copy is in English and every name is fictional. The sample school, **Sakura Juku**, is a small Japanese school in Nakano, Tokyo, with Haruka Mori (head teacher), Kenta Ishida, Yui Tanabe and Daichi Omura teaching, founded by Emiko Sato. Its students (Priya, Lucas, Amara), street, rooms and email address are placeholders. Its five levels (Seed, Sprout, Bud, Bloom, Canopy) are the school's own and are **not** the official levels of any national language test. Replace them with your own.

## Who it is for

- **Industry:** language school: Japanese (or any language) schools, tutoring centres, conversation clubs, small academies.
- **Site type:** education. Courses with prices, a level ladder with a placement chat, a weekly class timetable, term dates, teachers, a school journal, a newsletter and a contact form. Not a store.
- **Mood:** friendly, rounded, playful; a classroom with a kettle on.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (pink, blue, light) | **White** `#FFFFFF` pages, **sakura pink** `#F7B7C3` cards, stickers and shapes, **clear blue** `#1E6FD9` buttons, links and the welcome card, **ink** `#1B2A4A` text, **blush** `#FDEEF1` and **sky** `#EAF2FC` pale panels, **deep blue** `#1556AE` links and outline buttons on pale panels, **slate** `#4A5675` quiet text. AA throughout: ink on white 14.2:1, on pink 8.5:1, on blush and sky 12.6:1; blue on white and white on blue 4.8:1; deep blue on white 7.1:1, on blush and sky 6.3:1; slate on white 7.3:1, on blush and sky 6.5:1. Pink is a surface and shape colour only: never text on white. Clear blue is never small text on blush or sky (4.3:1), deep blue is used there |
| Style | Playful + rounded. Large soft corners (28 px), pill buttons, labels and chips, petal-shaped bullets, a row of petal dots under the header, tilted stickers |
| Type | **Zen Maru Gothic** (Medium 500 and Bold 700) for headings, the school name, course and level names, numbers and the stickers; **Nunito** (variable, with italic) for reading, labels, the menu, buttons and forms. Both bundled as WOFF2 (SIL OFL 1.1), subset to Latin; Zen Maru Gothic also keeps only the eight kana used by the stickers, so each weight is about 12 KB. No CDNs. Fluid type between 390 px and 1440 px |
| Header (H2, centred) | The site title in a **sakura-pink pill** (tilted 2°, a blue shadow edge and a blue "sa" sticker) in the centre with "Japanese school · Nakano" under it; the menu splits to its left (items 1–3) and right (items 4 onward) as pill links; a row of **petal dots** underneath. Between 600 and 1000 px the name sits above a centred menu; on phones the name is centred and the menu is a round button that opens a full-screen list |
| Footer (F11, hours table) | Centred on a white card on a blush ground: "Opening hours", "Come in, the kettle is on.", the **opening-hours table** (front desk and classroom hours by day, rounded rows) with a holiday note, and two buttons (the timetable, a free trial lesson); then the address, email and social links in three centred columns; then the name pill, the menu and one line of small print. On the Contact page (which shows the same synced hours and details in its own cards) the footer skips them |
| Home (L6, bento) | One bento grid of rounded cells (4 columns, 2 on tablets, 1 on phones): a **blue welcome** with the headline and two buttons, a classroom photo, the five levels as rising chips (pink), the **word of the week** (sky), a teacher with a quote, the street in spring, online lessons, the free trial lesson (blush), three numbers, the latest four journal posts (a Query Loop), and a student's quote over a photo. Then three numbered steps to a first class |
| Signature | **Hiragana stickers.** A Group or Image with the classes `sj-sticker sj-kana-a` (or `-i`, `-u`, `-ne`, `-sa`, `-ra`, `-hi`, `-go`) gets a small rounded badge at its top-right corner holding one decorative kana, tilted, in pink, blue or white; it wiggles the other way on hover. Drawn in CSS from a code point (`content: "\3042" / ""`), so no Japanese characters are in the markup and screen readers skip it. Every readable word stays English |
| Motion | CSS only: sticker wiggle, lifting buttons and cards, an arrow nudge. Under `prefers-reduced-motion: reduce` nothing moves |
| Mobile | Designed at 390 px: the bento becomes one column, the timetable becomes one rounded card per class (day, time, class, level, room), forms and splits become one column; nothing scrolls the page sideways |

### Single source for the school details

Three **synced patterns** (Appearance > Editor > Patterns), created on activation from `inc/info/*.html` by `inc/school-info.php`, tagged with `_sakura_juku_info` so they are never created twice:

- **Sakura Juku: opening hours** — shown in the footer of every page and on the Contact page.
- **Sakura Juku: weekly class timetable** — shown on the Schedule page.
- **Sakura Juku: address, email and social links** — shown in the footer of every page and on the Contact page.

No page, post or template repeats them; calls to action link to the Schedule or Contact page.

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (small rounded tag), *Lead*
- Button: *Pink pill* (core *Outline* is styled too)
- Group: *Rounded card*, *Pink card*, *Blue card*, *Sky card*, *Blush card*
- List: *Petal dots*
- Table: *Rounded timetable*
- Image: *Rounded photo*
- Separator: *Petals*

## Pages and templates

| Page | Built from |
|------|-----------|
| Home (front page) | `home-bento`, `home-steps` |
| Courses | `courses-head`, `courses-grid` (six course cards with level, rhythm, price; the main course spans two rows, the kana course runs full width), `courses-faq` (Details blocks) |
| Levels | `levels-head` (with the "not official test levels" note), `levels-ladder` (five cards rising like a staircase), `levels-placement` (five-minute level chat beside a teacher) |
| Schedule | `schedule-head`, `schedule-timetable` (the synced timetable), `schedule-terms` (four term cards) |
| About | `about-head`, `about-story` (story card, spring photo, two numbers), `about-teachers` (two photo cards, two coloured text cards), `about-values` |
| Journal (posts page) | `templates/home.html`: title card with topic links, then a grid of rounded cards (every sixth one wide) |
| Article (single post) | `templates/single.html`: topic chip, date, title and excerpt in a blush card beside the featured photo with a sticker; the post content; tags; earlier / later post |
| Category, tag, archive, search, index | The same cards under a title card (and the term description) |
| Newsletter | `newsletter-head`, `newsletter-signup` (form + what is in the letter), `newsletter-past` |
| Contact | `contact-head`, `contact-main` (form + the synced hours and details) |
| 404 | `not-found` ("This page took a wrong turn.") |

Templates render the page's own content (`wp:post-content`); the copy lives in the pages, editable in the page editor. `page-wide` is the full-width page template the demo pages use; `page.html` adds a title card for new pages.

## Demo content and import

`demo-content.json` + the shared importer (`inc/demo-import.php`, identical to `shared/inc/demo-import.php`): on activation it imports the seven photographs into the Media Library, creates the pages, four categories, ten tags, seven school journal posts with featured images, the menu (Courses, Levels, Schedule | About, Journal, Contact), and sets the front page and the Journal page. It never overwrites or deletes the user's content, and running it again (`wp shippress demo-import`) adds only what is missing.

## Accessibility

AA contrast for all text (see the palette). Visible blue focus rings. Forms have labels. Stickers, petal dots and shapes are decoration and hidden from screen readers. Motion stops under `prefers-reduced-motion`. No JavaScript of its own.

## Credits

Fonts: Zen Maru Gothic and Nunito, SIL Open Font License 1.1 (see `readme.txt`). Photographs: AI-generated for this theme, GPL-2.0-or-later / CC0. Everything else: GPL-2.0-or-later.
