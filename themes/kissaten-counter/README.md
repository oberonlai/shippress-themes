# Kissaten Counter

A dark, warm WordPress **block theme** for **coffee shops and small cafes**, modelled on the Japanese *kissaten*: the old-style coffee house with a long wooden counter, hand-drip coffee, thick toast and custard pudding, where the owner picks your cup and nobody hurries. The theme aims for the feeling of sitting at that counter at nine in the morning, when the window light reaches seat number four.

All sample copy is in English. The sample cafe, **Counter Twelve** (a twelve-seat counter, open since 1979), has a home page, a menu, an about page, notes (the blog), a newsletter and a visit/contact page. Replace it with your own cafe.

## Who it is for

- **Industry:** coffee shops, kissaten, small cafes and coffee roasters; also tea rooms, bakeries and bars with a counter.
- **Site type:** business. The menu, the opening hours and the way to the door lead; the story, the people and the notes keep regulars coming back.
- **Mood:** cozy and handmade. Intimate, slow and quietly crafted, never rustic-cliche.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (dark, warm) | Espresso `#1A1410` (the room), dark roast `#2A211A` (raised cards), counter line `#3D3128` (hairlines), soft ceramic `#8B7355`, latte `#BFAE96` (muted text on dark), **roasted amber** `#C47A3A` (the one accent: italic phrases, prices, markers), and two paper tones, menu paper `#E8DECF` and warm cream `#F3EDE4`, for menu cards and the morning band. On paper the accent darkens to `#9A5523` and muted text to bark `#5E4B3A`, so every text pairing passes WCAG AA |
| Style | Cozy + handmade |
| Type | **Fraunces** (soft, slightly wonky variable serif) for display, with an italic, `SOFT 100 / WONK 1` amber phrase in most headings; **DM Sans** for body and small caps eyebrows; **Caveat** sparingly for hand-lettered notes ("pudding sells out by three — ask early!"). All three are bundled (Latin subsets, SIL OFL 1.1) and registered in `theme.json`, with system fallbacks |
| Layout | Generous margins (1280px wide, 680px reading measure), dark sections alternating with paper cards, long hairline rows, and a "twelve seats" divider: twelve small rings, one of them taken |
| Imagery | Original vector illustrations with soft gradients and film grain: an arched window with morning light, a copper kettle and flannel pour, a siphon, a shelf of mismatched cups, toast, pudding, beans, the storefront at dusk and a hand-drawn map |
| Signature details | Arched-window image frames with an offset outline, a slowly turning amber stamp, paper menu cards with an inset frame and dotted price leaders, Roman-numeral brewing steps, a drop cap in amber, a faint grain over the whole page |

## Block styles

| Block | Style | Use |
|-------|-------|-----|
| Paragraph | Eyebrow, Hand-lettered note, Lead | Section labels, chalkboard notes, intros |
| Heading | Soft display | Very large soft serif titles |
| Group | Menu card (paper), Saucer (raised dark card) | Menus, forms, FAQ cards |
| Image | Arched window, Round (saucer) | Hero and story images, round food/cup images |
| Separator | Twelve seats | Section dividers |
| Button | Outline pill | Secondary actions |
| Table | Opening hours | Hours with dotted rules |
| List | Bean bullets | Lists with small coffee-bean markers |

Menu rows are a Row group (`kc-menu-row`) holding two paragraphs, the item and the price; the dotted leader is drawn between them, so items stay editable as plain text.

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home: hero, how we pour, menu board, morning set, the cup shelf, latest notes, visit, newsletter |
| `templates/page-menu.html` | Menu (optional catalogue page): page head, menu board, morning set, how we pour |
| `templates/page-about.html` | About: story, quote, timeline, people, cups |
| `templates/home.html` | Notes index; the newest note takes a double-width card |
| `templates/single.html` | Note with centred head, dek, drop cap and related notes |
| `templates/category.html` / `tag.html` / `archive.html` | Archives with term description |
| `templates/page-newsletter.html` | The Morning Paper: what is inside, signup, past issues |
| `templates/page-contact.html` | Visit: direct lines and message form, map and hours, counter manners |
| `templates/search.html` / `404.html` | Search and "This seat is taken." |
| `templates/index.html` / `page.html` | Fallback list and default page |

Parts: `parts/header.html` (opening-hours strip, brand mark, menu, "Find the counter" button) and `parts/footer.html`. All page sections are block patterns in `patterns/`, so the demo pages hold their own editable copy.

## Install

1. Download [`kissaten-counter.zip`](https://github.com/oberonlai/shippress-themes/releases/download/themes/kissaten-counter.zip).
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Activate **Kissaten Counter**. The demo import creates the pages, notes, menu and images; then change the text, prices and hours.

## Demo content and screenshots

`demo-content.json` has the sample site title, pages, categories, tags and posts, plus the URL of each catalogue page (`screens`). The importer (`inc/demo-import.php`, shared by every theme) uses it on activation. ShipPress renders it on a throwaway local WordPress and keeps the full-page desktop and mobile screenshots in its own repo.
