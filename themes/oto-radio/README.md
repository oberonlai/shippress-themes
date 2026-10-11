# Oto Radio

A retro WordPress **block theme** for **podcasts, radio shows and audio series**. *Oto* means "sound". The theme is a late-night studio with the on-air light on: a **deep violet** ground, **cream** type and one **amber** light, **Darker Grotesque** headlines over **Work Sans**. The header is a **programme-guide masthead** with a giant wordmark. The home page is a **broadcast log**: the latest episodes stand as stops on a vertical amber **timeline**, each with a **waveform**. The footer is led by the **newsletter**.

All sample copy is in English and every name is fictional. The sample show, **Oto Radio**, is a weekly hour about the sounds of ordinary places, hosted by Nao Hoshino (host and field recordist) and Emi Tachibana (host and producer), with Daichi Arai, Sora Kamiya and Rui Oda behind the glass. Its guests, listeners, places (the Hikawa tram depot, the Sakamachi market…), records, prizes (Night Signal Audio Prize, Long Wave Listening Festival…) and feed addresses are placeholders. Replace them with your own.

## Who it is for

- **Industry:** podcast: podcasts, community and internet radio shows, audio documentaries, interview series.
- **Site type:** media. An episode timeline, a numbered episode index with running times, hosts and crew, show notes with topics and tags, a newsletter and a letters form. Not a store; the theme does not host audio (the Listen link points at your feed or podcast host).
- **Mood:** retro, bold; a printed radio programme guide lit by an on-air lamp.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (dark, purple, yellow) | **Violet** `#2B1A4A` ground, **amber** `#F5C542` accents and buttons, **cream** `#F7F3EA` type, **night** `#1D1133` deeper panels and the footer, **plum** `#3D2A63` rules and cards, **haze** `#B3A6CC` quiet text. AA throughout: cream on violet 14.1:1, on night 16.1:1; amber on violet 9.6:1, on night 11.0:1, on plum 7.6:1; haze on violet 6.9:1, on night 7.8:1, on plum 5.4:1; violet on amber 9.6:1 (buttons, the newsletter band); violet on cream 14.1:1 |
| Style | Retro + bold. Pill buttons, double and single rules, tuning-scale ticks, square record sleeves, rounded "TV window" photographs |
| Type | **Darker Grotesque** (variable, weight 300–900) for headings, the wordmark, the menu, episode numbers, dates and the dial; **Work Sans** (variable, with italic) for reading, labels and forms. Both bundled as Latin-subset WOFF2 (SIL OFL 1.1), no CDNs. Fluid type between 390 px and 1440 px |
| Header (H5, masthead) | A **dateline** row (The weekly programme guide · the synced on-air time with a pulsing amber **On air** lamp · Independent radio from Tokyo), then the site title as a **giant uppercase wordmark** across the full width (smaller on inner pages), then the menu on a ruled bar with a **double rule** above and a **tuning scale** of ticks below, with a search button. On phones the dateline keeps only the on-air time and the menu becomes a "Menu" pill that opens a full-screen programme list |
| Footer (F4, newsletter-led) | A full-width **amber band** with "One letter every Friday, an hour before we go on air." and one large pill-shaped email field with its button, over a faint waveform; then the wordmark, a line, the menu and the synced station details (subscribe links, email, social), and one line of small print. The band is hidden on the Newsletter page (it has its own form) |
| Home (L12, timeline) | A programme cover (headline, lead, two buttons, a studio photograph in a rounded window) over a **tuning dial** with the needle on the station; then **the broadcast log**: the six latest episodes on a vertical amber line, each stop with the day and date on the left, a node on the line (the newest one filled and pulsing), the episode number, running time and topic, a **waveform**, the title, the notes and a **record sleeve** whose vinyl slides out on hover; then the running order of an hour as programme-guide rows, the two hosts on a night panel, and a listener's letter beside a photograph |
| Signature | **The waveform episode timeline.** A Query Loop (so new episodes appear at the top by themselves) styled as a vertical timeline. The waveform is one small SVG of bars used as a CSS mask, so it takes the theme colour; each stop shows a different stretch of it, and it scrolls ("plays") while a stop is pointed at or focused |
| Motion | CSS only: the on-air lamp pulse and blink, the newest node's pulse, the playing waveforms, the sliding vinyl, hover colours. Under `prefers-reduced-motion: reduce` nothing moves |
| Mobile | Designed at 390 px: the timeline line moves to the left edge with dates inline, sleeves hide, the episode index becomes number + title + date + length, splits and forms become one column; nothing scrolls the page sideways |

### Written once: episode numbers and running times

Episodes are posts. Each one opens with a **listen bar** (pattern *Listen bar*): a Listen link, "Episode 48" and "52 min". The timeline, the Episodes index, the show-notes cards and the episode page read the number and the running time from that bar through a **block binding** (`oto-radio/episode`, `inc/episodes.php`): a Paragraph in a Query Loop with `"metadata":{"bindings":{"content":{"source":"oto-radio/episode","args":{"key":"number"}}}}`. Change them in the episode and every list follows. An episode without a listen bar is numbered by date.

### Single source for the station details

Two **synced patterns** (Appearance > Editor > Patterns), created on activation from `inc/info/*.html` by `inc/station-info.php`, tagged with `_oto_radio_info` so they are never created twice:

- **Oto Radio: on-air time** — shown in the masthead of every page and on the Contact page.
- **Oto Radio: subscribe links, email and social links** — the RSS feed, podcast-app and live-stream links, the email addresses and the social links; shown in the footer of every page and on the Contact page (the footer hides its copy there).

No page, post or template repeats them; calls to action link to Contact or Newsletter.

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (small capitals with a waveform), *Lead*
- Button: *Text link with an arrow* (core *Outline* is styled too)
- Group: *Cream panel*
- List: *Rundown* (programme-guide rows: amber time, item), *Dash list*
- Separator: *Waveform* (amber bars)
- Image: *Record sleeve*

## Pages and templates

| Page | Built from |
|------|-----------|
| Home (front page) | `home-cover`, `home-log`, `home-rundown`, `home-hosts`, `home-letter` |
| Episodes | `episodes-head`, `episodes-index` (Query Loop, 20 per page: number, title, topic, date, length, waveform) |
| Hosts | `hosts-head`, `hosts-main` (two profiles, the second mirrored), `hosts-crew` |
| About | `about-head`, `about-story`, `about-making` (a week as chapters on the timeline line), `about-prizes` |
| Show notes (posts page) | `templates/home.html`: title, topic links, cards with sleeve, number, date, length, title, excerpt, topic |
| Episode (single post) | `templates/single.html`: number, date, topic, title, excerpt beside the sleeve; the post content (listen bar, notes, running order, quote, the record played after the show, credits); tags; earlier / later episode |
| Category, tag, archive, search, index | Same cards under a title (and the term description) |
| Newsletter | `newsletter-signup` (form panel), `newsletter-past` |
| Contact | `contact-head`, `contact-main` (letter form + the two synced patterns + what happens next) |
| 404 | `not-found` ("Nothing on this frequency.") |

Templates render the page's own content (`wp:post-content`); the copy lives in the pages, editable in the page editor. `page-wide` is the full-width page template.

## Demo content and import

`demo-content.json` + the shared importer (`inc/demo-import.php`, identical to `shared/inc/demo-import.php`): on activation it imports the six photographs into the Media Library, creates the pages, four categories, fourteen tags, eight episodes (numbers 41–48) with featured images, the menu, and sets the front page and the Show notes page. It never overwrites or deletes the user's content, and running it again (`wp shippress demo-import`) adds only what is missing.

## Accessibility

AA contrast for all text (see the palette). Visible amber focus rings (violet on the amber band). Forms have labels. The waveforms, dial, lamp and sleeves are decoration. Motion stops under `prefers-reduced-motion`. No JavaScript of its own.

## Credits

Fonts: Darker Grotesque and Work Sans, SIL Open Font License 1.1 (see `readme.txt`). Photographs: AI-generated for this theme, GPL-2.0-or-later / CC0. Everything else: GPL-2.0-or-later.
