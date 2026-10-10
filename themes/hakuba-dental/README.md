# Hakuba Dental

A clean, calm WordPress **block theme** for **family dental clinics**, dental hygiene practices, paediatric and general dentists. *Hakuba* means "white horse", and the theme borrows that brightness: white pages, pale mist-blue cells and navy type, nothing hidden and everything explained. The home page is a **bento grid** of rounded cells, two of them shaped like a tooth (a molar's big crown-shaped top corners, and a smile photograph inside a soft tooth silhouette). The header is two tiers: a pale-blue strip with **today's opening hours**, the phone number, an emergency note and a **Book a visit** pill above the main bar; the footer is built around the **week's opening-hours table**.

All sample copy is in English and every name is fictional. The sample clinic, **Hakuba Dental Clinic**, is a small family practice on the second floor of a building in Hakubazaka, Bunkyo, Tokyo. Its people are Dr. Aya Mizusawa (head dentist), Dr. Kenta Hayama and Dr. Rina Ogata (dentists), Sae Ishida and Mao Tanimura (dental hygienists), Daichi Kuroe (reception) and Hana Fujii (dental assistant). The address, telephone number, email and fees are placeholders. Replace them with your own.

## Who it is for

- **Industry:** dental-clinic: family and general dentists, paediatric dentists, dental hygiene practices, small orthodontic clinics.
- **Site type:** health. Treatments, fees (an example fee table), the first visit step by step, the clinic and team, a journal (news), a seasonal newsletter and contact with a booking request form and the opening hours.
- **Mood:** bright, clinical in the good sense, reassuring; Japanese minimal with soft geometry.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (blue, light) | **White** `#FFFFFF` ground, **mist** `#E8F1F8` cells and table rows, **ice** `#D4E4F1` hairlines and chips, **clinic blue** `#2F7FC1` for large numerals, icons and dots, **deep blue** `#1F64A0` for buttons, links and blue cells, **navy** `#0F2A44` for text and the dark cells and footer, **slate** `#4A5D70` quiet text. AA throughout: navy on white 14.6:1 and on mist 12.8:1, deep blue on white 5.7:1 (white on deep blue 6.2:1), slate on white 6.8:1 and on mist 5.9:1; clinic blue is used only for large numerals (4.3:1, AA large) and graphics; mist on navy 12.8:1, pale blue `#9CC6EA` on navy 8.1:1 |
| Style | Minimal + geometric (clean, clinical) |
| Type | **Sora** (variable, 100–800) for headings, numerals, the wordmark and step numbers; **Inter** (variable, with optical sizes) for reading, labels, navigation, tables and forms. Both bundled (Latin subsets, SIL OFL 1.1), no CDNs. Fluid type between 390 px and 1440 px |
| Header (H9, two-tier) | A pale-blue utility strip: a dot and "Open today 9:00–13:00" (the visitor's weekday picks one of seven editable lines; without JavaScript it shows the week summary), "Call 03-5555-0148", an emergency note and a small "Book a visit" pill. Below, a white bar with the tooth mark, the wordmark and tagline on the left and pill-shaped navigation links on the right. The strip scrolls away; the bar stays at the top |
| Footer (F11, hours table) | A navy band: the week's opening hours as a table (morning and afternoon rows, Monday to Sunday, ✓ open and – closed, today's column highlighted, closed days in the caption) beside an address card with the phone, email, emergency note and a button; then one line of compact links and the copyright |
| Home (L6, bento) | Twelve-column bento grid with rounded cells (radius about 40 px): the title cell, a tall treatment-room photograph with a crown-shaped top, today's hours in a blue cell, the first visit; three promises; a navy treatments cell, a smile inside a tooth silhouette, the typical fee, the team and children's photo cells with frosted labels; the latest journal posts beside the newsletter and a photograph; a navy booking band |
| Motion | CSS only and gentle: hero and page-head cells rise in sequence, photographs settle from a slight zoom, linked cells and journal cards lift on hover. Nothing is hidden before it moves (full-page captures and print show everything). Everything stops under `prefers-reduced-motion` |
| Mobile | Designed at 390 px: the bento becomes one column of cells (small fact cells sit two to a row), the strip keeps today's hours, "Call" and the pill, the menu opens as a full-screen list of large mist pills, the hours table tightens to fit seven days |
| Variation | `styles/after-hours.json` (after hours): ground `#0B1E31`, cells `#12304D`, text `#E8F1F8`, quiet text `#B4C6D8`, pale-blue buttons `#9CC6EA` with dark text; AA throughout (text 14.8:1, quiet 7.7:1 on cells, links 7.5:1 on cells, button text 9.4:1) |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (small blue capitals), *Eyebrow* (pill with a dot), *Lead*, *Numeral*, *Fine print*
- Button: *Text link with arrow*, *Soft pill* (plus the core *Outline*)
- Group: *Bento cell*, *Tooth cell* (crown-shaped top)
- List: *Checks* (blue ticks), *Steps* (numbered pills)
- Table: *Opening hours* (ticks centred, today's column highlighted), *Fees* (rounded rows, prices on the right)
- Details: *FAQ* (rounded, plus sign)
- Image: *Tooth silhouette mask*

Helper classes used by the patterns: `hd-bento` (the grid), `hd-c-3` … `hd-c-12` and `hd-r-2`/`hd-r-3` (cell spans), `hd-cell` with `--white`, `--blue`, `--ink`, `--photo`, `--crown` and `--link`, and `hd-ico hd-ico--<name>` for the line-icon badges (tooth, calendar, clipboard, shield, sparkle, smile, crown, drop, clock, phone, coin, moon, pin, chat).

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: hero bento, promises, care bento, journal bento, booking band) |
| `templates/page-about.html` | Clinic and team: reception, promises, the team (`#team`), the rooms and four facts |
| `templates/page-treatments.html` | Treatments: eight treatment cells with anchors (`#check-ups`, `#fillings`, `#root-canal`, `#gum-care`, `#children`, `#crowns`, `#whitening`, `#night-guards`) and children's mornings |
| `templates/page-fees.html` | Fees: the example fee table, paying, written estimates, insurance, FAQ |
| `templates/page-first-visit.html` | First visit: five steps, what to bring, FAQ |
| `templates/page-newsletter.html`, `templates/page-contact.html` | The seasonal letter sign-up and recent letters; booking request form, the clinic, the hours table |
| `templates/page-wide.html` | Any page without a title header |
| `templates/home.html` | Journal (posts page): topic chips and a card grid whose newest post takes two cells |
| `templates/single.html` | Article: topic and date, title and summary, a wide photograph with a crown-shaped top, the text, a general-information note, tags and previous/next, the booking band |
| `templates/category.html`, `tag.html`, `archive.html`, `index.html`, `search.html`, `404.html`, `page.html` | Archives, search and the rest |

Every page template renders the page's own content (`wp:post-content`); all copy lives in the pages, editable in the page editor. The header strip, the footer hours table and the footer address live in the template parts (Site Editor → Patterns → Header / Footer).

## Demo content

`demo-content.json` + `inc/demo-import.php` (the shared ShipPress importer): on activation the theme creates eight pages (Home, Clinic & team, Treatments, Fees, First visit, Journal, Newsletter, Contact), six posts in four categories with six tags and featured photographs, the main menu, and sets the static front page and the posts page. It is idempotent and never overwrites or deletes content you wrote.

The hours, fees, address and telephone number are examples, and the journal posts are general information, not medical advice. The forms are plain HTML: connect them to your own form or email service.

## Images

Nine photographs in `assets/images/` (copies in `assets/images/demo/` for the Media Library), AI-generated for this theme and released under GPL-2.0-or-later / CC0. No real people, places, brands or organisations; the people shown are AI-generated and do not depict real people.
