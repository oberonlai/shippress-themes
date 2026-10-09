# Fuji Shinkyu

A calm, geometric and airy WordPress **block theme** for **small acupuncture, moxibustion and bodywork clinics** (*shinkyū*: *shin* is the needle, *kyū* is moxa). *Fuji* is wisteria, the pale lavender flower that gives the palette its colour. The layout borrows from an old pulse-point chart: fine rings mark points, hairline meridians connect them, and almost everything else is white space. Every page reads like a slow breath: one idea, a pause, the next.

All sample copy is in English and every name is fictional. The sample clinic, **Fujinami**, is a two-room acupuncture and moxibustion clinic on the second floor above a wisteria trellis in Kamakura, opened in 2011, with three practitioners (Aoi Fujimori, Kei Nanase and Mio Harada). The copy speaks only of relaxation and general wellbeing and makes no medical claims. Replace it with your own clinic.

## Who it is for

- **Industry:** wellness clinics: acupuncture and moxibustion clinics, shiatsu and bodywork studios, small massage or wellbeing practices with one to five practitioners.
- **Site type:** health. A treatment menu with times and prices, a first-visit guide, opening hours, an appointment request form, the practitioners, a journal, a seasonal newsletter and contact.
- **Mood:** geometric and airy: quiet, precise and warm, like a clean treatment room with the window open.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (purple, pastel) | Washi white `#FAF8FC` ground, paper `#FFFFFF` for cards and forms, lilac mist `#F1EDF6` for quiet bands and the footer, pale wisteria `#E6DEF1`, hairline `#DDD5E7`, **fuji wisteria** `#B7A3D8` for rings and lines, grey-lilac text `#665D73`, **shion violet** `#6A4C93` for links, prices and the second voice of titles, **murasaki plum** `#33213F` for type and buttons. One accent: **kin muted gold** `#A88848`, used only for points (never for text). Text pairs meet WCAG AA: murasaki on washi 13.9:1, grey-lilac 5.9:1, shion 6.5:1, white on shion 6.9:1 |
| Style | Geometric + airy |
| Type | **Urbanist** (geometric sans, variable 100–900) for titles, set very light (200–300) and large with tight tracking, its italic in shion violet as a second voice ("Breathe out. *Let the warmth* do the rest."). **Manrope** for body, labels, navigation and forms. Both bundled (Latin subsets, SIL OFL 1.1) and registered in `theme.json` with system fallbacks. Fluid type between 390 px and 1440 px; spacing presets are `clamp()` values named after the theme (point, breath, pulse, ring, ma) |
| Composition | A 12-column grid with wide margins. Section heads put the title on the left two-thirds and the lead low on the right. Points sit on lines: the three steps of a visit on one horizontal meridian, the first visit and the clinic's history on vertical ones, journal entries hanging from a point on each divider, cards and portraits floating at three heights like points on a curve |
| Atmosphere | A faint dot grid like chart paper fading in from the top of the page, soft wisteria halos, ring cards with a fine ring and a gold point in the corner, circle and orbit images (a fine ring set off-centre around the picture) |
| Motion | Breathing pace throughout: the ring behind the hero and the breathing interlude widen and settle on a ten-second cycle (four in, six out), the next-opening point pulses softly, sections rise in on scroll and meridian lines draw themselves (CSS scroll timelines, no JavaScript). Everything stops under `prefers-reduced-motion`; browsers without scroll timelines simply show the content |
| Mobile | Designed at 390 px. Grids fold to one column, points and steps run down a vertical line, images shrink and alternate sides, the treatment menu becomes a two-line list per treatment, and from 600 to 1023 px the menu folds into a full-screen overlay |
| Variation | `styles/evening-moxa.json`: a night palette (plum-black `#1C1622` ground, paper ink `#F1EAF6`, night wisteria `#9C86C4`, lantern violet `#C4AEE6`, moxa-glow gold `#D8BC7E`) |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label (spaced capitals)*, *Point label (ring, point and a fine line)*, *Lead paragraph*, *Point note (hung from a gold point)*
- Heading: *Label (spaced capitals)*, *Airy (extra-light, wide spacing)*
- Group: *Ring card*, *Halo (soft wisteria glow)*, *Breathing ring*, *Gentle reveal on scroll*
- Image: *Circle*, *Orbit (circle with an offset ring)*, *Pill (tall capsule)*, *Soft frame*
- Separator: *Meridian (fine line with points, drawn in)*, *Point*, *Ma (empty pause)*
- Button: *Arrow link* (a line ending in a ring), *Outline*
- Table: *Treatment menu (duration and price)*, *Opening hours*
- List: *Points on a meridian line*, *Price list (dotted leaders)*
- Quote: *Practitioner's words (large, light)*

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: breathing hero, three points of a visit, treatment cards, first-visit teaser, a practitioner's words in a breathing ring, latest journal, booking invitation) |
| `templates/page-treatments.html` | Treatments: plain facts, the full **menu with times and prices** in four groups, acupuncture / moxibustion / shiatsu in detail, questions |
| `templates/page-booking.html` | Booking: quick links, the **first-visit guide** step by step, opening hours, the **appointment request form** (treatment, days, time of day, practitioner, date, notes) and the small print |
| `templates/page-about.html` | About: the clinic, its story on a timeline, three practitioners, the rooms, and a plain note on what the treatments are and are not for |
| `templates/home.html` | Journal (posts page): entries hanging from points on a meridian, with circle images and a filter by subject |
| `templates/single.html` | Article: light title beside a ringed circle image, prose with point-marked quotes, then the booking invitation |
| `templates/category.html` / `tag.html` / `archive.html` | Archives with the term description |
| `templates/page-newsletter.html` | Seasonal letter: signup, past letters and a breathing interlude |
| `templates/page-contact.html` | Contact: phone, email, hours and address, a message form, a line map and walking directions |
| `templates/search.html` / `404.html` | Search, and a 404 page with a breathing interlude |
| `templates/index.html` / `page.html` | Fallback list and default page |

All page templates render the page content (`post-content`), so all the copy lives in the pages and can be edited there. Parts: `parts/header.html` (sticky, translucent, with a "Book a visit" button) and `parts/footer.html` (lilac mist, with a very light wordmark and *breathe · warm · rest*). Every section is a block pattern in `patterns/` (category *Fuji Shinkyu*).

## Install

1. Download [`fuji-shinkyu.zip`](https://github.com/oberonlai/shippress-themes/releases/download/themes/fuji-shinkyu.zip).
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Activate **Fuji Shinkyu**. The demo import builds the pages, menu and sample posts. Then replace the text and swap the sample illustrations for your photographs (select an image and choose **Replace**). Connect the appointment, contact and newsletter forms (plain HTML) to your booking, form or email service.

## Demo content and screenshots

`demo-content.json` has the sample site title and the pages (home, treatments, booking, about, journal, seasonal letter, contact). It also has categories (clinic news, seasonal care, at home, in the treatment room), tags, eight posts and the URL of each catalogue page (`screens`, including `treatments` and `booking`). `inc/demo-import.php` (shared by all ShipPress themes) imports it on activation and never touches existing content. ShipPress also renders it on a throwaway local WordPress for the full-page desktop and mobile screenshots.

The illustrations are geometric SVG drawings (circles, fine lines, gradients and an SVG grain filter) made for this theme. WordPress does not accept SVG uploads, so raster copies in `assets/images/demo/` go into the Media Library instead.

## Metadata

`theme-meta.json` feeds the filters on the ShipPress template wall (also in the root `index.json`): industry, type, color tags and palette, style tags, fonts and pages.

## Licenses

Code: GPL-2.0-or-later. Fonts: SIL Open Font License 1.1, bundled in `assets/fonts/` with their license texts. Images: original artwork made for this theme, GPL-2.0-or-later. Details in `readme.txt`.
