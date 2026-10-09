# Beni Kappo

A bold, layered WordPress **block theme** for **small counter restaurants**: kappo and izakaya counters, omakase bars and chef's tables. *Kappō* means "to cut and to cook": a style of Japanese cooking served at a counter, with no kitchen door between the guest and the cook. *Beni* is the deep vermilion red of safflower dye, of paper lanterns and of the noren curtain hung over a restaurant door when it is open. The theme is built from those things: red curtains, black lacquer, gold leaf and lantern light. Every page is laid out like an evening at the counter: one course at a time, in order.

All sample copy is in English and every name is fictional. The sample restaurant, **Beniya**, is a nine-seat kappo counter at the top of a stone alley in Kanazawa, opened in 2014, with two seatings a night, three courses, a sake list from small breweries and three people behind the counter (Ren Akagi, Sayo Kurokawa and Daichi Mori). Replace it with your own restaurant.

## Who it is for

- **Industry:** restaurants: kappo and kaiseki counters, izakaya, omakase and sushi bars, chef's tables, small wine or sake bars with a set menu.
- **Site type:** food and drink. Courses with prices, this week's course in order, a sake or drinks list, dietary notes, counter seating and seatings, reservation policies and a reservation request form, the cooks, a journal, a monthly newsletter and contact.
- **Mood:** bold and layered: dark, warm and theatrical, like walking in under the noren at night.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (red, dark) | **Sumi** lacquer black `#110D0C` ground, **urushi** `#1B1412` for raised panels, forms and the footer, **kurobeni** red-black `#2B1210`, hairline `#3B2B26`; **shu** red `#B8281D` for noren panels and buttons, **beni** vermilion `#E8553D` for brush numerals, links and the second voice of titles, **kin** gold leaf `#CFA65A` for labels, edges and flecks, smoke `#B3A493` for quiet text and **washi** off-white `#F2E9DA` for type. Text pairs meet WCAG AA: washi on sumi 16:1, smoke 8:1, gold 8.5:1, vermilion 5.3:1, washi on shu 5.2:1; light text on the noren gradient 5:1 or better |
| Style | Bold + layered |
| Type | **Playfair Display** (high-contrast serif, variable 400–900) for titles, set heavy (700–800) and very large with tight tracking, its italic in vermilion as a second voice ("Nine seats. One fire. *The season,* in order."). **Schibsted Grotesk** for body, labels, navigation and forms. **Kaushan Script**, a brush script, only for the huge course numerals. All bundled (Latin subsets, SIL OFL 1.1) and registered in `theme.json` with system fallbacks. Fluid type between 390 px and 1440 px; spacing presets are `clamp()` values named after the evening (grain, slice, plate, counter, course, interval, night) |
| Composition | A 12-column grid in which pictures and panels share cells and overlap. The hero is a full-bleed picture of the counter with a red noren panel and a lacquer card pulled up over its lower edge. Elsewhere a lacquer-framed picture carries a panel across its corner, courses step down a two-column grid at two heights, journal entries and portraits sit at three heights, and the article panel overlaps its full-width picture |
| Layers | **Noren** panels: a shu gradient hung from a gold rod, its hem cut into slits with a CSS mask (four panels, six on the wide reservation band). **Lacquer** panels: raised black with a gold-leaf hairline and one gold fleck in the corner. **Lantern** sections lit from a corner by a slow, breathing vermilion glow. **Lacquer-frame** pictures with a shu panel offset behind and a gold inset line; **noren-cut** pictures whose bottom edge is cut like the curtain; **vignette** pictures that darken at the edges like a photograph in a dark room |
| Numerals | Every course, tier, policy and year is announced by a huge Kaushan brush numeral in vermilion with a soft glow; course titles are laid over the lower third of the stroke |
| Motion | On the home page the noren settles on its rod, the title lifts line by line and the tonight card follows; the hero picture settles. Content is never hidden, so every word is there at any instant. Sections rise in on scroll, staggered across each row, brush numerals are painted left to right and the shu panels behind framed pictures slide out (CSS scroll timelines, no JavaScript). The seal in the header glows like a lantern wick. Everything stops under `prefers-reduced-motion`; browsers without scroll timelines simply show the content |
| Mobile | Designed at 390 px. Grids fold to one column; layered panels stay layered, pulled up over the bottom of their picture; the hero becomes a tall picture with the noren overlapping it; the sake list becomes a two-line entry per bottle; the menu opens as a full-screen lantern-lit overlay with large serif links |
| Variation | `styles/noon-noren.json`: a daylight palette for lunch service (washi ground `#F3ECE0`, paper `#FBF7F0`, sumi ink `#1A1311`, beni `#A82618`, old gold `#76581F`), with the same red noren |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label (spaced capitals, gold)*, *Kicker (vermilion bar and label)*, *Lead paragraph*, *Brush numeral (huge course number)*
- Heading: *Label*, *Stacked (heavy, tight, very large)*
- Group: *Noren panel (red curtain with slits)*, *Lacquer panel (raised, gold edge)*, *Lantern glow*, *Overlap (pulls up over the block above)*, *Staggered reveal on scroll*
- Image: *Vignette*, *Lacquer frame (gold inset, red offset panel)*, *Noren cut (slit bottom edge)*
- Separator: *Noren rod (gold line with end caps)*, *Brushstroke (vermilion)*
- Button: *Arrow link*, *Outline (gold)*
- Table: *Course list*, *Sake list (glass and carafe)*
- List: *Ruled (hairlines, vermilion dash)*, *Price list (dotted leaders)*
- Quote: *Chef's words (large italic, gold mark)*

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: layered hero, tonight's course in brush numerals, the counter, the sake pairing, the chef's words, latest journal, reservation band) |
| `templates/page-menu.html` | Menu: anchors, the **three courses with prices** (seven, nine and eleven courses), supplements, **this week's course in order** (nine brush numerals), the **sake list** with glass and carafe prices and alcohol-free drinks, dietary notes |
| `templates/page-reservations.html` | Reservations: how booking works, the **counter seating plan** and the two seatings, the **reservation request form** (date, seating, guests, course, pairing, seat preference, allergies), four policies and private hire of the whole counter |
| `templates/page-about.html` | About: the story in years, the chef's words, the three cooks, and where the ingredients come from |
| `templates/home.html` | Journal (posts page): staggered entries with noren-cut pictures and a filter by subject |
| `templates/single.html` | Article: a full-width picture with a lacquer title panel overlapping it, prose with a vermilion drop cap, then the reservation band |
| `templates/category.html` / `tag.html` / `archive.html` | Archives with the term description |
| `templates/page-newsletter.html` | Season letter: signup, past letters and the latest journal |
| `templates/page-contact.html` | Contact: phone, email and address cards, a message form, a line map and directions |
| `templates/search.html` / `404.html` | Search, and a 404 page with the reservation band |
| `templates/index.html` / `page.html` | Fallback list and default page |

All page templates render the page content (`post-content`), so all the copy lives in the pages and can be edited there. Parts: `parts/header.html` (sticky, translucent black, a seal-like mark and a "Reserve a seat" button) and `parts/footer.html` (lacquer, with a slit red rule, a giant italic wordmark and *fire · season · counter*). Every section is a block pattern in `patterns/` (category *Beni Kappo*).

## Install

1. Download [`beni-kappo.zip`](https://github.com/oberonlai/shippress-themes/releases/download/themes/beni-kappo.zip).
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Activate **Beni Kappo**. The demo import builds the pages, menu and sample posts. Then replace the text and prices and swap the sample illustrations for your photographs (select an image and choose **Replace**). Connect the reservation, contact and newsletter forms (plain HTML) to your booking, form or email service.

## Demo content and screenshots

`demo-content.json` has the sample site title and the pages (home, menu, reservations, about, journal, season letter, contact). It also has categories (counter news, in the kitchen, sake notes, counter stories), tags, seven posts and the URL of each catalogue page (`screens`, including `menu` and `reservations`). `inc/demo-import.php` (shared by all ShipPress themes) imports it on activation and never touches existing content. ShipPress also renders it on a throwaway local WordPress for the full-page desktop and mobile screenshots.

The illustrations are SVG scenes drawn in code for this theme (shapes, gradients, blurred glows and an SVG grain filter, lit like night photographs). WordPress does not accept SVG uploads, so raster copies in `assets/images/demo/` go into the Media Library instead.

## Metadata

`theme-meta.json` feeds the filters on the ShipPress template wall (also in the root `index.json`): industry, type, color tags and palette, style tags, fonts and pages.

## Licenses

Code: GPL-2.0-or-later. Fonts: SIL Open Font License 1.1, bundled in `assets/fonts/` with their license texts. Images: original artwork made for this theme, GPL-2.0-or-later. Details in `readme.txt`.
