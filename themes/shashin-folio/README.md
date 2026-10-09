# Shashin Folio

A minimal, cinematic WordPress **block theme** for **photographers**: people who work in long series and quiet commissions, and want their site to feel like sitting in a dark cinema rather than scrolling a feed. *Shashin* is the Japanese word for photograph. The theme borrows the restraint of Japanese photobooks and art-house film: *ma* (the deliberate empty space between things), one image at a time, and small, precise captions. It uses no calligraphy or other decorative "Japanese" motifs.

All sample copy is in English. The sample photographer, **Ren Aoki** (Tokyo), has six series, a series page, an about page, a journal, a monthly letter called *Contact Sheet* and a contact page. Replace them with your own work.

## Who it is for

- **Industry:** photographers (fine-art, documentary, editorial, architecture), plus adjacent image-makers such as cinematographers and print studios.
- **Site type:** portfolio. Series come first, supported by an about page, a journal, a newsletter and a clear way to commission work or buy prints.
- **Mood:** quiet, slow and confident. Minimal and cinematic, with the photographs as the only loud thing on the page.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (monochrome, cool, dark) | Night `#0E0F11` ground, shadow `#16181B`, hairline `#2A2D32`, slate grey `#80868E`, silver `#B9BEC4` body text and frost `#ECEEF0` headings. One accent: **Cyanotype** `#7FA7B3`, a muted cyan used only for frame numbers, ticks, focus rings and hover states |
| Style | Minimal + cinematic |
| Type | **Instrument Serif** (roman + italic) for titles and the large statement lines, with italics used as a second "voice"; **Instrument Sans** for body copy; **DM Mono** for captions, frame numbers, navigation and dates, like the edge markings on film. All three are bundled (Latin subsets, SIL OFL 1.1) and registered in `theme.json`, with system fallbacks |
| Rhythm | Large images separated by long pauses (spacing presets named *Pause*, *Ma* and *Long ma*); a 12-column grid that places images off-centre and staggers the work grid; captions always below the image, never on top of it |
| Cinema details | A letterboxed hero with black bars and a slow push-in; a 2.39:1 letterbox image style with the caption in the lower bar; a film-strip group with sprocket holes; a centred "subtitle" quote; a faint fixed film grain over the whole page; a blinking cyanotype "rec" dot in the header. All motion stops under `prefers-reduced-motion` |
| Variation | `styles/contact-sheet.json`: a light paper version (ink on `#EEEEEC`, deeper cyanotype `#3F6E7C`) for photographers who want a gallery-wall look |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Caption label (mono)*, *Frame number*, *Lead paragraph*
- Heading: *Display, italic*, *Caption label (mono)*
- Group: *Film strip (sprocket edges)*, *Plate (hairline frame)*
- Image: *Film still* (soft grade, slow zoom on linked images), *Letterbox (2.39:1 crop)*, *Print (white border)*
- Separator: *Frame tick*, *Long pause (empty space)*
- Button: *Arrow link*
- Table: *Series index*
- List: *Credits list*
- Quote: *Subtitle (centred)*

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: hero still, statement, selected series, film strip, single still, series index, journal, commissions) |
| `templates/page-work.html` | Work: index of every series |
| `templates/page-series.html` | One series as a slow photo sequence with a fact sheet and print information |
| `templates/page-about.html` | About: portrait and biography, process and clients, exhibitions / books / awards |
| `templates/home.html` | Journal (posts page) with a category filter and a staggered grid |
| `templates/single.html` | Journal entry: centred title, 21:9 still, narrow prose column |
| `templates/category.html` / `tag.html` / `archive.html` | Archives with the term description |
| `templates/page-newsletter.html` | *Contact Sheet* letter signup and past letters |
| `templates/page-contact.html` | Contact lines, studio map and enquiry form |
| `templates/search.html` / `404.html` | Search and "missing frame" |
| `templates/index.html` / `page.html` | Fallback list and default page |

Parts: `parts/header.html`, `parts/footer.html`. Every section is a block pattern in `patterns/` (category *Shashin Folio*), so it can be reused on any page.

## Install

1. Download [`shashin-folio.zip`](https://github.com/oberonlai/shippress-themes/releases/download/themes/shashin-folio.zip).
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Activate **Shashin Folio**. The demo import builds the pages, menu and sample posts. Then replace the text and swap the sample images for your photographs (select an image and choose **Replace**).

## Demo content and screenshots

`demo-content.json` has the sample site title, pages (home, work, a series, about, journal, newsletter, contact), categories, tags and posts, plus the URL of each catalogue page (`screens`, including `work` and `series`). `inc/demo-import.php` (shared by all ShipPress themes) imports it on activation, without touching existing content. ShipPress also renders it on a throwaway local WordPress for the full-page desktop and mobile screenshots.

The sample "photographs" are procedural SVG scenes (gradients, shapes and an SVG grain filter) drawn for this theme. Raster copies in `assets/images/demo/` go into the Media Library because WordPress does not accept SVG uploads.

## Metadata

`theme-meta.json` feeds the ShipPress template wall's filters (also in the root `index.json`): industry, type, color tags + palette, style tags, fonts and pages.

## Licenses

Code: GPL-2.0-or-later. Fonts: SIL Open Font License 1.1, bundled in `assets/fonts/` with their license texts. Images: original artwork made for this theme, GPL-2.0-or-later. Details in `readme.txt`.
