# Mori no Kai

A quiet, editorial WordPress **block theme** for **forest-conservation nonprofits**, land trusts, watershed groups and community woodland societies. *Mori no kai* means "the forest society". The theme is laid out like a slow walk under old cedars: a lot of air, light serif titles that speak in two voices (upright, then *italic*), small field-note labels in a typewriter face, hairline rules, and large misty photographs that settle into place as you scroll.

All sample copy is in English and every name is fictional. The sample organisation, **Mori no Kai — Cedar Valley Forest Trust**, cares for 1,240 hectares of cedar, beech and oak above the (fictional) Sugidani river: it thins crowded plantations, plants native broadleaf trees from local seed, clears streams and counts birds and moss to see whether it works. Its people are Haruka Mizuno (director), Kenji Oda (head forester), Tomoe Arai (ecologist), Sayo Ishikawa (volunteers and schools) and Ren Tachibana (treasurer). Replace them with your own.

## Who it is for

- **Industry:** forest-nonprofit: forest and land trusts, conservation and restoration charities, watershed and river groups, community woodlands, tree-planting and nature-education nonprofits.
- **Site type:** nonprofit. Projects, volunteer work days with a sign-up form, giving tiers (explanatory, no payment), a one-page impact report with numbers and accounts, the mission, timeline and people, news, a seasonal newsletter and contact.
- **Mood:** calm, honest and patient; Japanese minimal with organic warmth.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (green, earth) | **Mist** `#EFF0EA` ground, **washi** `#F8F8F4` raised surfaces, **lichen** `#D6DDCD` tinted bands, **sumi** ink `#1E231F` text, **stone** `#5A6158` quiet text, **moss** `#3F5B3C` buttons, links and the italic voice, **cedar** bark `#8A4E2D` for small numbers and dates, **shinrin** deep forest `#22302A` for dark bands and the footer. AA throughout: sumi on mist 13.9:1, moss 6.6:1, cedar 5.7:1, stone 5.6:1; washi on moss 7.1:1; mist on deep forest 12:1 |
| Style | Minimal + organic |
| Type | **Newsreader** (variable, light 300–350) for titles, leads, numbers and the footer wordmark, with italics as a second voice in moss; **Instrument Sans** for reading, navigation, buttons and forms; **DM Mono** for field-note labels, dates and figures. All bundled (Latin subsets, SIL OFL 1.1), no CDNs. Fluid type between 390 px and 1440 px |
| Composition | A 12-column asymmetric grid. A narrow **margin rail** (3 columns) carries labels beside the content (9 columns); splits are uneven (7/5, 5/6, 4/7) and the second column often **steps down**; programme cards sit at three different heights; project rows alternate sides; the newest story spans two columns on the news page |
| Motion | CSS only and slow: hero and page titles lift, hero photographs settle from a slight zoom over five seconds, a layer of mist drifts across the hero, cards, numbers, tiers and people rise in staggered as they scroll into view, photographs un-zoom, and the footer wordmark tightens its tracking. Nothing is hidden before it moves (full-page captures and print show everything). Everything stops under `prefers-reduced-motion` |
| Mobile | Designed at 390 px: one column, tall 4:5 hero photograph, the margin rail becomes a label above the content, alternate programme cards inset for rhythm, events and tiers stack, the menu opens as a full-screen overlay in large serif |
| Variation | `styles/yoru-no-mori.json` (night forest): ground `#141A16`, surface `#1B231E`, text `#E7EAE2`, quiet text `#A6AFA2`, moonlit moss `#A9C19A`, ember cedar `#D9A27A`; AA throughout (text 14.5:1, moss 9:1, cedar 7.9:1, quiet 7.8:1) |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (field-note capitals with a rule), *Lead*, *Numeral*, *Fine print*
- Button: *Text link with arrow* (plus the core *Outline*)
- Separator: *Ring* (a growth ring between rules)
- List: *Ruled*, *Timeline* (bold year first)
- Table: *Ledger* (hairlines, figures on the right)
- Quote: *Plain*
- Details: *FAQ*
- Image: *Frame*

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: hero, why we are here, three projects, the year in numbers, volunteer invitation, a quote, latest news, giving, newsletter) |
| `templates/page-about.html` | About: mission and principles, the timeline, the people |
| `templates/page-projects.html` | Projects: four restoration programmes and a year in the forest |
| `templates/page-volunteer.html` | Volunteer: upcoming work days, what to bring, the sign-up form, FAQ |
| `templates/page-donate.html` | Donate: giving tiers (explanatory only), where the money goes, other ways to help |
| `templates/page-impact.html` | Impact report: numbers, three stories, the accounts |
| `templates/page-newsletter.html`, `templates/page-contact.html` | The Forest Letter sign-up and past letters; contact form, addresses and directions |
| `templates/page-wide.html` | Any page without a title header |
| `templates/home.html` | News (posts page): category chips and a grid with a large lead story |
| `templates/single.html` | Article: margin-rail head, large featured photograph, drop cap, tags and previous/next |
| `templates/category.html`, `tag.html`, `archive.html`, `index.html`, `search.html`, `404.html`, `page.html` | Archives, search and the rest |

Every page template renders the page's own content (`wp:post-content`); all copy lives in the pages, editable in the page editor.

## Demo content

`demo-content.json` + `inc/demo-import.php` (the shared ShipPress importer): on activation the theme creates nine pages (Home, About, Projects, Volunteer, Donate, Impact report, News, Newsletter, Contact), seven posts in four categories with eight tags and featured photographs, the main menu, and sets the static front page and the posts page. It is idempotent and never overwrites or deletes content you wrote.

## Images

Twelve photographs in `assets/images/` (copies in `assets/images/demo/` for the Media Library), AI-generated for this theme and released under GPL-2.0-or-later / CC0. No real people, places, brands or organisations.
