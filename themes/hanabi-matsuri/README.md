# Hanabi Matsuri

A kinetic, poster-like WordPress **block theme** for **summer fireworks and music festivals** and the people who organise town events. *Hanabi* means "fire flowers", fireworks; a *matsuri* is a festival. In Japan, summer is when every river town lays mats on the levee, hangs paper lanterns over the food stalls and waits for the first shell. Festival posters announce these nights in huge condensed type, with the dates as giant numbers and a burst of rays behind them. This theme is built from those posters: big capitals, big numbers, slanted bands, ribbons and sunbursts that move a little.

All sample copy is in English and every name is fictional. The sample festival, **Minase River Hanabi**, is the 70th summer fireworks and music festival of a small river town (Minase, on the Asagi River). It runs for three nights (Friday 30 July to Sunday 1 August 2027), with 18,000 shells from three barges, two free stages (the River Stage and the Lantern Stage), 42 acts, 220 stalls and 600 volunteers. Its shells come from the Kurata family workshop upriver, and its crew is Aoi Hanamura, Tetsuo Kurata, Mina Sorano and Kenta Mizushima. Replace it with your own event.

## Who it is for

- **Industry:** festivals and events: fireworks displays, music and arts festivals, town and street festivals, summer fairs, lantern and light festivals, and the committees and organisers who run them.
- **Site type:** events. A three-night timetable for two stages, a fireworks running order, a lineup, pass tiers with prices, a seat plan, a pre-registration form (it takes no payment), a festival map, transport, an FAQ, the story, the crew and partners, news, a newsletter and contact.
- **Mood:** kinetic and poster-like: loud, warm and joyful, like a summer night by the river.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (orange, vivid) | **Yoru** summer-night indigo `#0D0F2E` ground, **kon** `#161A45` and **ai** `#232870` for raised panels and bands, hairline `#2F3580`; **hanabi** fireworks vermilion-orange `#FF5B24` for buttons, bands and the second voice of titles, **kogane** marigold `#FFB830` for labels and numerals, a single electric **spark** magenta `#FF3D8B` for stamps, the premium pass and bullets, **kasumi** haze `#B8B7DA` for quiet text and **chochin** paper-lantern cream `#FFF2D9` for type. Text pairs meet WCAG AA: cream on indigo 16.9:1, haze 9.6:1, marigold 10.8:1, orange 6:1, magenta 5.6:1; indigo text on orange 6:1, on marigold 10.8:1, on magenta 5.6:1 |
| Style | Kinetic + poster |
| Type | **Big Shoulders Display** (condensed poster capitals, variable 100–900) for titles, the lineup and every date numeral, set at 800–900 and very large; `<em>` in a title turns orange, `<s>` draws the word as an outline. **Unbounded** (very wide) for labels, navigation, buttons and the wordmark, the poster's contrasting voice. **Onest** for reading and forms. All bundled (Latin subsets, SIL OFL 1.1) and registered in `theme.json` with system fallbacks. Fluid type between 390 px and 1440 px; spacing presets are `clamp()` values named after a firework (spark, ember, star, shell, burst, volley, finale) |
| Composition | A 12-column grid. The hero is a full-bleed night picture with the festival name in three stacked lines (solid, outlined, orange) beside the three dates as oversized numerals, and a magenta stamp. Two tapes cross under it. Night cards stagger at three heights, a slanted orange band carries the numbers, the lineup is set like a poster (headliners biggest), and a poster card overlaps the finale picture |
| Poster devices | **Burst**: sunburst rays that turn very slowly behind a section. **Diagonal**: an orange band with slanted edges. **Ticket**: notched sides and a perforated tear line. **Poster card**: a flat colour block with a hard offset shadow. **Stamp**: a round tilted badge. **Tilt** and **poster frame** pictures; a **burst ring** of rays around a round picture; **fuse** and **zigzag** (bunting) separators |
| Motion | The hero title pops in line by line and the dates lift after it (transform only: nothing is hidden at load), the hero picture settles, the stamp wobbles, the brand mark turns, bursts rotate and breathe, the ribbons scroll in opposite directions, and sections, tickets, acts and news rise in staggered on scroll (CSS scroll timelines, no JavaScript). Everything stops under `prefers-reduced-motion`; browsers without scroll timelines simply show the content |
| Mobile | Designed at 390 px. The hero becomes a tall picture with the title over its lower half and the three dates side by side; grids fold to one column (lineup tiles and figures to two); the timetable keeps three narrow columns; the menu opens as a full-screen overlay with huge poster links |
| Variation | `styles/morning-yatai.json`: a daylight palette for day events (paper-lantern ground `#FBF1DE`, rice paper `#FFF9EC`, indigo ink `#14163F`, burnt orange `#B03600`, old marigold `#835500`, magenta `#B0125A`), AA throughout |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label*, *Kicker (spark and label)*, *Lead*, *Date numeral (solid)*, *Date numeral (outline)*, *Stamp (round, tilted badge)*
- Heading: *Label*, *Poster (condensed, enormous)*, *Outline (stroked letters)*
- Group: *Burst*, *Diagonal band*, *Ticket*, *Poster card*, *Overlap*, *Staggered reveal on scroll*
- Image: *Burst ring*, *Tilted poster*, *Poster frame*
- Separator: *Fuse*, *Zigzag*
- Button: *Arrow link*, *Outline*
- Table: *Timetable*
- List: *Ruled*, *Checklist*, *Price list (dotted leaders)*
- Quote: *Shout*
- Details: *FAQ (ruled, plus sign)*

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: hero, crossing ribbons, three nights, the numbers band, the lineup poster, the finale feature, passes, getting there, latest news, newsletter) |
| `templates/page-program.html` | Program: the **three-night timetable** for both stages (with a sticky date numeral per night), Saturday's **fireworks running order**, the **lineup** tiles |
| `templates/page-tickets.html` | Tickets: four **pass tiers** (free riverbank, night pass, festival pass, tatami box), the **seat plan**, a **pre-registration form** (no payment) and the rules |
| `templates/page-access.html` | Access: the **festival map** with a numbered legend, six **transport** cards and the **FAQ** |
| `templates/page-about.html` | About: the story in years beside the first poster, the fireworks master's words, the crew, three promises and the partners |
| `templates/home.html` | News (posts page): a filter by category and a grid with a large lead entry |
| `templates/single.html` | Article: a full-width picture with a title panel overlapping it, prose with a poster drop cap, tags and the passes band |
| `templates/category.html` / `tag.html` / `archive.html` | Archives with the term description |
| `templates/page-newsletter.html` | Newsletter: signup, past letters and the latest news |
| `templates/page-contact.html` | Contact: four addresses, a message form and the office |
| `templates/search.html` / `404.html` | Search, and a 404 page |
| `templates/index.html` / `page.html` | Fallback list and default page |

All page templates render the page content (`post-content`), so all the copy lives in the pages and can be edited there. Parts: `parts/header.html` (sticky, translucent indigo, a turning burst mark, the dates and a "Get passes" button) and `parts/footer.html` (a bunting edge, a poster statement and giant outlined dates *30·31·01*). Every section is a block pattern in `patterns/` (category *Hanabi Matsuri*).

## Install

1. Download [`hanabi-matsuri.zip`](https://github.com/oberonlai/shippress-themes/releases/download/themes/hanabi-matsuri.zip).
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Activate **Hanabi Matsuri**. The demo import builds the pages, menu and sample news. Then replace the text, dates and prices and swap the sample illustrations for your own (select an image and choose **Replace**). Connect the pre-registration, contact and newsletter forms (plain HTML) to your ticketing, form or email service.

## Demo content and screenshots

`demo-content.json` has the sample site title and the pages (home, program, tickets, access, about, news, newsletter, contact). It also has categories (festival news, lineup, fireworks, community, guides), tags, eight posts and the URL of each catalogue page (`screens`, including `program`, `tickets` and `access`). `inc/demo-import.php` (shared by all ShipPress themes) imports it on activation and never touches existing content. ShipPress also renders it on a throwaway local WordPress for the full-page desktop and mobile screenshots.

The illustrations are SVG scenes drawn in code for this theme (fireworks bursts, the river town, the stage, stalls, lanterns, a shell cut-away, the map, the seat plan and poster portraits). WordPress does not accept SVG uploads, so raster copies in `assets/images/demo/` go into the Media Library instead.

## Metadata

`theme-meta.json` feeds the filters on the ShipPress template wall (also in the root `index.json`): industry, type, color tags and palette, style tags, fonts and pages.

## Licenses

Code: GPL-2.0-or-later. Fonts: SIL Open Font License 1.1, bundled in `assets/fonts/` with their license texts. Images: original artwork made for this theme, GPL-2.0-or-later. Details in `readme.txt`.
