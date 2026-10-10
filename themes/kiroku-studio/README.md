# Kiroku Studio

A bold, kinetic WordPress **block theme** for **creative agencies**, motion studios and brand designers. *Kiroku* means "a record". The theme is a dark room with one light on: a **near-black** ground, **white** type and a single **neon green**, **Bricolage Grotesque** headlines (its width axis makes the words that should move stretch) over **Figtree**. The header is **split**: the wordmark sits top-left and the menu is a **numbered index** (01 Work, 02 Services…) in the corner of every title card. The home page **scrolls sideways**: a case-study reel that snaps card by card. The footer ends in a **giant wordmark** that turns neon green, with a green bar sweeping in underneath, when you point at it.

All sample copy is in English and every name is fictional. The sample studio, **Kiroku Studio**, is nine people in one room in Koto-ku, Tokyo, founded in 2015 by Ren Kuroda (motion director) and Aya Morikawa (design director), with Sol Herrera (producer), Mio Tanabe (type), Jonas Weller (development) and four more. Its clients (Oboro Lighting, Kosa Gallery, Nami Paper Co., Hikari Night Walk…), prizes (Northlight Motion Prize, Halftone Awards…), address, telephone number and prices are placeholders. Replace them with your own.

## Who it is for

- **Industry:** creative-agency: brand and motion studios, design agencies, animation and film studios, small creative collectives.
- **Site type:** business. A case-study reel, a work index with case studies, services with starting prices and a process, the team, a journal, a monthly newsletter and a project brief form. Not a store.
- **Mood:** bold, kinetic; loud type, one colour, everything slightly in motion.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (dark, green, vivid) | **Black** `#0B0B0C` ground, **white** `#FFFFFF` type and light panels, **neon green** `#3DF07A` accents, **coal** `#161618` raised cards, **graphite** `#2C2C31` rules (decoration only), **smoke** `#A6A6AE` quiet text on black, **paper** `#F3F3F0` and **muted ink** `#55555C` for quiet text on white. AA throughout: white on black 19.7:1; green on black 13.1:1 and on coal 12.0:1 (green is text only on black and coal); black on green 13.1:1 (buttons, the marquee, rows that fill green); smoke on black 8.1:1 and on coal 7.5:1; black on white 19.7:1; muted ink on white 7.4:1 and on green 4.9:1. **Never green text on white**: on the light panels green appears only as a background behind black text |
| Style | Bold + kinetic. Square cards, hairline rules, pill buttons, huge type with tight tracking |
| Type | **Bricolage Grotesque** (variable: weight 200–800, width 75–100, optical size) for headings, the wordmark, the index, card titles, numbers and the marquee; **Figtree** (variable, with italic) for reading, labels and forms. Both bundled as Latin-subset WOFF2 (SIL OFL 1.1), no CDNs. Fluid type between 390 px and 1440 px |
| Header (H12, split: logo top-left, numbered index in the hero corner) | The header lies over the top of every page's first section: top-left the wordmark with "Motion & brand studio / Tokyo, since 2015"; top-right a small "Index" rule and the menu as a **vertical numbered list** (CSS counters: 01 Work, 02 Services, 03 About, 04 Journal, 05 Contact). Hovering an item turns it green and nudges it right; the current page gets a green dot. Every page opens with a tall **title card** whose title sits bottom-left, so the index always has its corner. On phones the index becomes the core menu button, which opens a full-screen black index with huge numbered rows |
| Footer (F1, giant wordmark) | "Got something that should move?" with Start a project / The monthly letter beside the synced studio details; a ruled row with the numbered menu and a blinking **REC** "Recording since 2015"; then the site title as a **giant wordmark** across the full width (condensed Bricolage at weight 800), which turns neon green while a green bar sweeps in underneath when pointed at or focused; one line of small print. Unlike Kami Salon's F1 (sliced, magenta), this one is whole, white and lit from inside |
| Home (L4, horizontal scroll) | A full-screen hero (a darkened studio photograph, a blinking **REC** label, "We record things that *move*." with the last word stretching along the width axis, a lead and two buttons), then **the reel**: four case-study cards and an end card on a sideways, snapping track with a green scrollbar and a progress line; two **marquee** lines of type in opposite directions on a green band; four service **rows** on a white panel that fill green on hover; the studio (team photograph, story, four big numbers); and the journal as a second sideways row |
| Signature | **The horizontal case-study reel.** CSS `scroll-snap` (no JavaScript): cards snap one by one, the track lines its first card up with the page column and runs to the screen edge, the last card peeks to show there is more, a green scrollbar is always visible, and a **progress line** follows the scroll (CSS scroll-driven animation where supported, hidden elsewhere). Hovering or focusing a card lights its photograph from grey to colour, lifts it and reveals its one-line story. Keyboard: Tab reaches the track (`tabindex`, `role="region"` and a label are added when the page renders, `inc/tracks.php`) and the arrow keys scroll it; Tab also walks through the cards, each of which is one link. Touch: swipe. On phones the cards are 82 % of the screen wide, so the track stays swipeable without ever widening the page |
| Motion | All CSS: the stretching headline word, the blinking REC dot, the marquee, hover reveals (cards, rows, index photographs), the wordmark bar, a scan line. Under `prefers-reduced-motion: reduce` nothing moves by itself (the marquee stands still, the headline word stays wide, transitions are instant) |
| Mobile | Designed at 390 px: the index becomes a full-screen menu, title cards shorten, the reel and process tracks stay swipeable, the journal row becomes a stack of three, rows and splits become one column, forms one column; nothing scrolls the page sideways |

### Single source for the studio details

The studio's address, studio hours, email addresses, phone number and social links are one **synced pattern** ("Kiroku Studio: studio address, phone, email and social links", Appearance > Editor > Patterns). The footer of every page and the Contact page show references to it (`<!-- wp:block {"ref":…} /-->`), never a copy. `inc/studio-info.php` creates it from `inc/info/studio.html` on activation, tagged with `_kiroku_studio_info` so it is never created twice. No other page repeats the details; calls to action link to Contact. The Contact page hides the footer's copy of the block with CSS so it does not show twice on one screen.

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (small capitals with a recording dot), *Lead*
- Button: *Text link with an arrow* (core *Outline* is styled too)
- Group: *Light panel* (black text on white), *Sideways track* (scrolls horizontally, snaps to each item; keyboard focusable)
- Image: *Reveal* (grey until hovered)
- List: *Numbered index* (01, 02, 03), *Dash list* (green dashes)
- Details: *Question* (plus sign)
- Separator: *Scan line* (with a green playhead)

Helper classes used by the patterns: `ks-header`, `ks-nav`, `ks-head` (`--plain`, `--archive`, `--article`, `--case`, `--form`, `--404`), `ks-hero`, `ks-rec`, `ks-reel` (`__head`, `__track`, `__bar`), `ks-card` (`--end`, `__media`, `__title`, `__reveal`), `ks-marquee` (`__line`, `--back`, `--outline`), `ks-rows`/`ks-row`, `ks-split`, `ks-studio`, `ks-stats`/`ks-stat`, `ks-posts` (`--track`)/`ks-post`, `ks-index` (`__row`, `__peek`), `ks-archive`, `ks-facts`, `ks-case__media`, `ks-next`, `ks-steps`/`ks-step`, `ks-plans`/`ks-plan`, `ks-faq`, `ks-story`, `ks-people`/`ks-person`, `ks-panel`, `ks-form`/`ks-field`, `ks-issues`, `ks-info`, `ks-foot`, `ks-wordmark`.

## Pages and templates

| Page | Content |
|------|---------|
| Home | Hero, the reel, the marquee band, services rows, the studio with numbers, the journal row |
| Work | Title card, the case-study index (big rows that turn green and slide their photograph in on hover; photographs always shown on phones), earlier records as a ruled table |
| Four case studies (child pages of Work) | Title card with discipline label, lead and a facts grid (client, year, what we made, team); a full-width photograph; the brief, what we made, a pull quote, what happened next; three big numbers; the next case study as a giant link |
| Services | Title card, the four services with deliverables and starting prices on a white panel, the process as five cards on a sideways track, three ways to work together (the middle one green), questions |
| About | Title card, the story beside a founder portrait, four rules as a numbered index on white, the nine people (names that nudge green on hover), prizes as a ruled table and a moving line of client names |
| Journal | Posts page: title card with topic chips and a three-column grid |
| Newsletter | "The Contact Sheet." with a sign-up form in a panel, then three past issues |
| Contact | Title card, the project brief form beside the synced studio details and three next steps |

| Template | Role |
|----------|------|
| `front-page.html` | Static front page: renders the Home page's own content |
| `page-wide.html` | Full width: renders the page's own content (all demo pages) |
| `page.html` | Default page: title card + content |
| `single.html` | Article: meta, title, excerpt, featured image, content, tags, earlier/later |
| `home.html` | Journal (posts page) |
| `index.html`, `archive.html`, `category.html`, `tag.html` | Archives with topic chips and the post grid |
| `search.html` | Search title, search box, results grid |
| `404.html` | "This frame was never recorded." with a search box |
| `parts/header.html`, `parts/footer.html` | H12 split header with the numbered index; F1 giant-wordmark footer |

Demo posts (journal and case notes): seven posts in four categories (Case notes, Process, Type & motion, Studio life) with eight tags, each with a featured image.

## Demo content and import

`demo-content.json` + the shared importer (`inc/demo-import.php`, identical to `shared/inc/demo-import.php`) turn a fresh site into the finished demo on activation: pages (Work with four case studies as children), posts, categories, tags, Media Library images, the menu, and the static front page with Journal as the posts page. It is idempotent: running it again (`wp shippress demo-import`, the wp-admin button or re-activation) only adds what is missing and never changes or deletes content the user wrote.

## Accessibility

- WCAG AA colours (see the palette row); green is never text on white.
- Visible focus rings (green on black, black on white); the reel, the process track and the journal row are reachable with Tab and scroll with the arrow keys; every card is one link.
- Hover reveals also open on keyboard focus, and are always shown on touch screens.
- `prefers-reduced-motion` stops every animation.
- No JavaScript of the theme's own; the core navigation's mobile menu is the only script.

## Credits

- Fonts: Bricolage Grotesque and Figtree, SIL Open Font License 1.1 (see `readme.txt`).
- Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (see `readme.txt`).
- Code: GPL-2.0-or-later.
