# Ikebana Kyoshitsu

A pastel, botanical WordPress **block theme** for **flower schools and ikebana studios** that teach in small classes and take new students through a trial lesson. A *kyōshitsu* is a school or classroom. An ikebana arrangement is built on three lines of unequal length: *shin* (heaven, the tallest), *soe* (people, the middle line, leaning out) and *hikae* (earth, short and low on the other side). Together they make an asymmetric triangle, and the empty space around them counts as much as the branches. Every page of this theme is laid out the same way: one tall element, one leaning, one low, and a lot of space left open.

All sample copy is in English and every name is fictional. The sample school, **Hanaomoi**, is a canal-side ikebana school in Kyoto. It started at a kitchen table in 1989 and now has six tables, four teachers (Sayo Mizuhara, Ren Takagi, Hana Ishikura and Yui Asami), three levels, a children's class and a class in English for visitors. Replace it with your own studio.

## Who it is for

- **Industry:** flower schools: ikebana and other flower-arranging schools, florists who teach, botanical workshops, small craft schools with weekly classes.
- **Site type:** education. Courses and levels with fees, a weekly timetable, a trial-lesson booking form, the teachers and their students' work, news, a seasonal newsletter and contact.
- **Mood:** botanical and asymmetric: light, quiet and precise, like a single branch in a shallow basin. Pastel paper and petals, with ink-dark type and one deep rouge accent.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (pastel, pink) | Washi white `#FAF5F2` ground, paper `#FFFCFA`, blush `#F4E3E2` for quiet sections and the footer, **sakura pink** `#E9B8C0`, hairline `#E8D7D4`, pale leaf `#DDE5D3`, **kuki stem green** `#6F8A5B` for stems and rules, quiet text `#74666A`, **sumi ink** `#2A2627` for type and buttons. One accent: **beni rouge** `#B23A55`, used only for italic second voices, numerals, the dot on the logo mark and focus rings |
| Style | Botanical + asymmetric |
| Type | **Bodoni Moda** for titles: high-contrast roman, with the italic in beni rouge as a second voice ("Three lines, *one quiet* room."). **Jost** for body copy and for every label, the navigation and the buttons (spaced capitals). Both are bundled (Latin subsets, SIL OFL 1.1) and registered in `theme.json` with system fallbacks. Font sizes are fluid (`theme.json` fluid typography between 390 px and 1440 px) and spacing presets are `clamp()` values |
| Composition | The ikebana triangle on every page. Titles are set off-axis, with the second line stepping right. The three class levels climb a diagonal like a branch. The *shin, soe, hikae* method cards step down and to the right. Images sit high on one side and low on the other. Vertical labels hang in the margin from a short stem line, and the timetable, terms and timelines run along one thin stem |
| Atmosphere | Washi fibre and grain over the whole page (inline SVG noise, multiplied into the paper). Soft *petal light* gradients (pink top right, leaf green bottom left). Leaf-shaped corners (two soft, two sharp). Arched images and "paper mat" frames with a blush offset |
| Motion | Gentle reveals as you scroll (CSS scroll timelines: sections rise in, images settle from a slight zoom). Brush-line dividers draw themselves in, and the hero arrangement sways very slowly. No JavaScript. Everything stops under `prefers-reduced-motion`, and browsers without scroll timelines simply show the content |
| Mobile | Designed at 390 px. Grids fold to one column but keep the stepped offsets, the timetable becomes a list per day and the booking form stacks. From 600 to 1023 px the menu folds into a full-screen overlay where the items step in from the right |
| Variation | `styles/evening-plum.json`: an evening palette (plum-black `#211B1D` ground, petal `#F3E9E6` text, dusk sakura `#C98A97`, lichen stem `#A4BD8F`, lantern rouge `#E7859B`) |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label (spaced capitals)*, *Vertical label*, *Lead paragraph*, *Brush note (italic, hung from a stem line)*
- Heading: *Label (spaced capitals)*, *Off-axis (second line steps right)*
- Group: *Petal card (paper, soft corner)*, *Petal light (soft pink and green glow)*, *Gentle reveal on scroll*
- Image: *Leaf arch (rounded top)*, *Paper mat (offset blush frame)*, *Off-axis tilt*, *Slow zoom*
- Separator: *Brush line (tapered, drawn in)*, *Stem (short angled line)*, *Ma (empty pause)*
- Button: *Arrow link*, *Outline*
- Table: *Timetable (weekly lessons)*, *Course details*
- List: *Stems (angled markers)*, *Price list (dotted leaders)*
- Quote: *Teacher's words (large italic, off-axis)*

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: hero, the three lines, classes rising like a branch, this week in the studio, students' work, a teacher's words, latest news, trial invitation) |
| `templates/page-classes.html` | Classes: the three levels in detail (length, times, fee, flowers, certificate), workshops, children's and visitors' classes, fees, what to bring and questions |
| `templates/page-schedule.html` | Schedule & trial: the weekly timetable, the year in four terms and the **trial-lesson booking form** (session, date, people, experience) |
| `templates/page-teachers.html` | Teachers & gallery: four teachers, each with a signature flower, and the full gallery of students' work |
| `templates/page-about.html` | About: opening, the story as a timeline, what we teach besides flowers, the studio |
| `templates/home.html` | News (posts page): entries stepping down a diagonal, with a filter by subject |
| `templates/single.html` | Article: off-axis title, wide illustration bleeding off the right edge, drop-cap prose, then the trial invitation |
| `templates/category.html` / `tag.html` / `archive.html` | Archives with the term description |
| `templates/page-newsletter.html` | Seasonal notes: signup and past letters |
| `templates/page-contact.html` | Contact: contact lines, message form, map and getting here |
| `templates/search.html` / `404.html` | Search, and a 404 page with a branch interlude |
| `templates/index.html` / `page.html` | Fallback list and default page |

All page templates render the page content (`post-content`), so all the copy lives in the pages and can be edited there. Parts: `parts/header.html` (sticky, translucent, with a "Book a trial" button) and `parts/footer.html` (blush, with a large italic wordmark and *shin · soe · hikae*). Every section is a block pattern in `patterns/` (category *Ikebana Kyoshitsu*), so it can be reused on any page.

## Install

1. Download [`ikebana-kyoshitsu.zip`](https://github.com/oberonlai/shippress-themes/releases/download/themes/ikebana-kyoshitsu.zip).
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Activate **Ikebana Kyoshitsu**. The demo import builds the pages, menu and sample posts. Then replace the text and swap the sample illustrations for your photographs (select an image and choose **Replace**). Connect the booking, contact and newsletter forms (plain HTML) to your form or email service.

## Demo content and screenshots

`demo-content.json` has the sample site title and the pages (home, classes, schedule & trial, teachers & gallery, about, news, seasonal notes, contact). It also has categories (seasonal flowers, studio news, lessons & technique, exhibitions), tags, eight posts and the URL of each catalogue page (`screens`, including `classes`, `schedule` and `teachers`). `inc/demo-import.php` (shared by all ShipPress themes) imports it on activation and never touches existing content. ShipPress also renders it on a throwaway local WordPress for the full-page desktop and mobile screenshots.

The illustrations are procedural SVG scenes (gradients, shapes and SVG turbulence filters for paper grain and soft light) drawn for this theme. WordPress does not accept SVG uploads, so raster copies in `assets/images/demo/` go into the Media Library instead.

## Metadata

`theme-meta.json` feeds the filters on the ShipPress template wall (also in the root `index.json`): industry, type, color tags and palette, style tags, fonts and pages.

## Licenses

Code: GPL-2.0-or-later. Fonts: SIL Open Font License 1.1, bundled in `assets/fonts/` with their license texts. Images: original artwork made for this theme, GPL-2.0-or-later. Details in `readme.txt`.
