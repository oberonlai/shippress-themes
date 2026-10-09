# Hinoki Yado

A serene, organic WordPress **block theme** for **small hot-spring inns** (ryokan) that take bookings by enquiry rather than through a booking engine. *Hinoki* is Japanese cypress, the pale fragrant wood of traditional baths; a *yado* is an inn. The site is paced like a walk through an inn: you arrive, take off your shoes, follow the corridor along the garden, find your room and end at the bath. Long pauses between sections, one thing at a time, and nothing that hurries.

All sample copy is in English and every name is fictional. The sample inn, **Kasumi-an**, is a four-room hot-spring inn in the (fictional) Usugumo valley, kept by the Okuno family since 1931, with a cook who rewrites dinner for each of the twenty-four small seasons. Replace it with your own house.

## Who it is for

- **Industry:** ryokan and other small hospitality houses: onsen inns, guesthouses, mountain lodges, farm stays, a small hotel with a restaurant.
- **Site type:** hospitality (booking-enquiry site). Rooms with clear specs and rates, the baths and the food, the story of the house, a seasonal newsletter and an enquiry form answered by hand.
- **Mood:** serene and organic: soft paper, wood, moss and steam; slow and warm rather than luxurious and glossy.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (green, natural) | Hinoki cream `#F3EDE1` ground, washi paper `#FAF7F0`, hairline `#DCD3C2`, onsen-steam grey `#B8BCB5`, river stone `#63665E` for quiet text, moss green `#56633F`, deep moss `#2F3826` for the dark bath and dinner sections and the footer, sumi ink `#22241F` for text. One accent: **persimmon** `#C8643B`, used only for small marks (label rules, numerals, the hanko dot in the logo, focus rings) |
| Style | Serene + organic |
| Type | **Cormorant** (light roman and italic) for titles, with italics in moss as a second voice; **Cormorant SC** for every label, the navigation, buttons and the vertical labels (true small caps, set lowercase); **Figtree** for body copy. All bundled (Latin subsets, SIL OFL 1.1) and registered in `theme.json`, with system fallbacks. Font sizes are fluid (`theme.json` fluid typography between 390 px and 1440 px) and spacing presets are `clamp()` values (*Corridor*, *Long corridor*) |
| Rhythm | The "corridor": a numbered arrival sequence (entrance, corridor, room, bath) with images alternating left and right along one hairline that runs down the middle of the section; long vertical pauses; vertical small-caps labels in the margin of each section, each hung from a short persimmon rule |
| Atmosphere | A washi-paper fibre texture over the whole page (inline SVG noise, multiplied into the paper); soft steam gradients that drift slowly behind the hero and any section with the *Steam* style; round "marumado" window images; washi-mat frames |
| Motion | Gentle reveals as you scroll (CSS scroll timelines: sections rise in, images settle from a slight zoom), drifting steam, a slow "breathing" hero. No JavaScript. Everything stops under `prefers-reduced-motion`, and browsers without scroll timelines simply show the content |
| Variation | `styles/winter-night.json`: a snowy-night palette (ink `#171B1D` ground, snow `#EDEAE2` text, lichen green, lantern persimmon `#E3804F`) |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label (small caps)*, *Vertical label*, *Lead paragraph*
- Heading: *Label (small caps)*, *Light serif, italic accent*
- Group: *Washi card*, *Steam (soft drifting gradient)*, *Gentle reveal on scroll*
- Image: *Round window (marumado)*, *Washi mat (paper border)*, *Slow zoom*
- Separator: *Steam line*, *Corridor pause*
- Button: *Arrow link*, *Outline*
- Table: *Room spec sheet*
- List: *Kaiseki course (dotted leaders)*, *Spec list (small caps keys)*
- Quote: *Guest book (centred)*

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: valley hero, arrival corridor, rooms, the spring, this season's kaiseki, seasons, guest book, journal, reservation) |
| `templates/page-rooms.html` | Rooms: each room with its tatami count, spec sheet and rate; what every stay includes and the house rules |
| `templates/page-onsen-dining.html` | Onsen & dining: the two baths, bathing steps, the full eight-course seasonal menu, breakfast |
| `templates/page-about.html` | The inn: opening, history timeline, hosts and chef, principles |
| `templates/home.html` | Journal (posts page): a corridor list of entries alternating left and right, with a subject filter |
| `templates/single.html` | Journal entry: centred title, wide illustration, drop-cap prose, then the reservation invitation |
| `templates/category.html` / `tag.html` / `archive.html` | Archives with the term description |
| `templates/page-newsletter.html` | The seasonal letter: signup and past letters |
| `templates/page-contact.html` | Enquire & reserve: contact lines, booking-enquiry form (dates, nights, guests, room, diet), map, getting here, questions |
| `templates/search.html` / `404.html` | Search and "this path ends in the cedars" |
| `templates/index.html` / `page.html` | Fallback list and default page |

Parts: `parts/header.html` (sticky, translucent, with a Reserve button), `parts/footer.html` (deep moss, large wordmark). Every section is a block pattern in `patterns/` (category *Hinoki Yado*), so it can be reused on any page.

## Install

1. Download [`hinoki-yado.zip`](https://github.com/oberonlai/shippress-themes/releases/download/themes/hinoki-yado.zip).
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Activate **Hinoki Yado**. The demo import builds the pages, menu and sample posts. Then replace the text and swap the sample illustrations for your photographs (select an image and choose **Replace**). Connect the enquiry and newsletter forms (plain HTML) to your form or email service.

## Demo content and screenshots

`demo-content.json` has the sample site title, pages (home, rooms, onsen & dining, the inn, journal, seasonal letter, enquire), categories, tags and posts, plus the URL of each catalogue page (`screens`, including `rooms` and `onsen-dining`). `inc/demo-import.php` (shared by all ShipPress themes) imports it on activation, without touching existing content. ShipPress also renders it on a throwaway local WordPress for the full-page desktop and mobile screenshots.

The illustrations are procedural SVG scenes (gradients, shapes and SVG turbulence filters for steam and grain) drawn for this theme. Raster copies in `assets/images/demo/` go into the Media Library because WordPress does not accept SVG uploads.

## Metadata

`theme-meta.json` feeds the ShipPress template wall's filters (also in the root `index.json`): industry, type, color tags + palette, style tags, fonts and pages.

## Licenses

Code: GPL-2.0-or-later. Fonts: SIL Open Font License 1.1, bundled in `assets/fonts/` with their license texts. Images: original artwork made for this theme, GPL-2.0-or-later. Details in `readme.txt`.
