# Ma Vertical

A calm WordPress **block theme** for **craft studios and ateliers**: makers of handmade objects in ceramics, lacquer, paper, textile or wood, and studios that pair the work with editorial storytelling (journals, small books, seasonal letters). It is built around *ma*, the Japanese idea of meaningful negative space, and *tategaki*, vertical type. The aim is gallery-level restraint, not decoration.

All sample copy is in English. The sample studio, **Margin Atelier** in Kyoto, has three seasonal works, a studio philosophy, notes from the workshop, a monthly letter and a contact page. Replace it with your own studio's story.

## Who it is for

- **Industry:** craft and atelier studios: ceramicists, lacquer artists, papermakers, dyers and weavers, woodworkers, small-batch homeware makers and craft-led editorial studios.
- **Site type:** portfolio. Selected works sit up front, backed by a journal and a newsletter that tell the story of how things are made.
- **Mood:** quiet, warm, unhurried. Wabi-sabi and minimal, with generous margins and a single seal-red accent.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (warm, earth) | Washi paper `#F6F3EC`, sumi ink `#1F1E1C`, hairline `#D8D2C6`, one vermilion seal accent, **Shu** `#B5523B`. Supporting tones: Kinari `#ECE7DC`, Usuzumi `#4A4743`, Nezumi `#8C877E` |
| Style | Vertical type + wabi-sabi + minimal |
| Type | Serif (Shippori Mincho) for display and vertical titles; sans (Zen Kaku Gothic New) for horizontal body text. Both fonts are bundled (Latin subsets, SIL OFL 1.1) and registered in `theme.json`, with system fallbacks |
| Layout | Wide margins, long vertical rhythm, hairline rules, ink-wash and enso SVG ornaments. No busy grids |
| Writing mode | The **"Tategaki (vertical)"** block style works on headings, paragraphs, groups, quotes, post titles and excerpts. Latin text is set sideways (`writing-mode: vertical-rl; text-orientation: mixed`), so the titles read from top to bottom like a spine label |
| Accents | A "Hanko" seal paragraph style (vermilion stamp with a monogram), an eyebrow label, a short vermilion rule, a washi image frame and a text-arrow button |

Below 782px, vertical titles turn horizontal (except the hero and the haiku, which stay vertical), so phones keep a comfortable reading line.

Style variation: **Sumi** (`styles/sumi.json`), a dark ink ground with shell-white text.

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home: vertical hero, philosophy, seasonal works, haiku band, studio notes, newsletter |
| `templates/page-about.html` | About the studio |
| `templates/home.html` / `index.html` | News / journal index |
| `templates/single.html` | Single post |
| `templates/category.html` / `tag.html` / `archive.html` | Archives |
| `templates/page-newsletter.html` | Newsletter signup |
| `templates/page-contact.html` | Contact |
| `templates/search.html` / `404.html` | Search and not found |
| `templates/page.html` | Default page |

Parts: `parts/header.html`, `footer.html`, `post-meta.html`. Patterns in `patterns/` include sample copy, so previews look finished.

## Install

1. Download [`ma-vertical.zip`](https://github.com/oberonlai/shippress-themes/releases/download/themes/ma-vertical.zip).
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Activate **Ma Vertical**, then give your About, Newsletter and Contact pages the matching page templates.

## Demo content and screenshots

`demo-content.json` has the sample site title, pages, categories, tags and posts used for the catalogue screenshots, plus the URL of each catalogue page (`screens`). WordPress does not load it. ShipPress renders it on a throwaway local WordPress and keeps the full-page desktop and mobile screenshots in its own repo.

## Metadata

`theme-meta.json` feeds the ShipPress template wall's filters (also in the root `index.json`): industry, type, color tags + palette, style tags, fonts and pages.

## Licenses

Code: GPL-2.0-or-later. Fonts: SIL Open Font License 1.1, bundled in `assets/fonts/` with their license texts. Images: original artwork made for this theme, GPL-2.0-or-later. Details in `readme.txt`.
