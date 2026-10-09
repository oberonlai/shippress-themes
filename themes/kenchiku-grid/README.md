# Kenchiku Grid

A monochrome, editorial WordPress **block theme** for **architecture studios**: small and mid-size practices that design houses, workplaces, cultural buildings and interiors, and want their site to read like a well-made monograph. *Kenchiku* is the Japanese word for architecture; the theme borrows the restraint of Japanese architectural publishing (precise grids, quiet materials, small numbered captions) rather than any calligraphic or vertical-type gimmick.

All sample copy is in English. The sample practice, **Toho Kenchiku Office** (Tokyo / Kyoto), has a project index, project detail pages, a studio page, a journal, a newsletter and a contact page. Replace it with your own practice's work.

## Who it is for

- **Industry:** architecture studios, plus adjacent practices: interior, landscape and spatial design offices.
- **Site type:** business. Projects lead, backed by the studio's method, people, recognition, a journal and a clear way to commission work.
- **Mood:** calm, precise, confident. Minimal and editorial, with the grid itself as the main ornament.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (monochrome, cool) | Off-white `#F2F2F0`, plaster white `#FAFAF8`, light concrete `#D9DAD7`, concrete grey `#8A8C8E`, graphite `#3A3C3F`, charcoal `#1C1D1F`. One thin accent: **Blueprint blue** `#9DB4C8`, used only for hairlines, ticks and markers |
| Style | Minimal + editorial |
| Type | A confident grotesk (Inter Tight) for headings and body; a mono (JetBrains Mono) for project numbers, years, locations and other small indices. Both fonts are bundled (Latin subsets, SIL OFL 1.1) and registered in `theme.json`, with system fallbacks |
| Layout | A visible modular 12-column grid with hairline gutters; numbered modules (01, 02, 03 …); large, cropped concrete-and-light imagery; spec-sheet tables for project facts |
| Accents | Block styles for an accent tick separator, charcoal rule, arrow-link button, project-index and spec-sheet tables, a numbered index list and a pull quote with a marker |

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home: hero index, selected projects, studio facts, method, latest journal, commission call |
| `templates/page-about.html` | Studio / About: approach, people, recognition |
| `templates/page-projects.html` | Projects archive (project index table + grid) |
| `templates/page-project.html` | Project detail with spec sheet |
| `templates/home.html` | News / journal index |
| `templates/single.html` | Single post |
| `templates/category.html` / `tag.html` / `archive.html` | Archives |
| `templates/page-newsletter.html` | Newsletter signup and past issues |
| `templates/page-contact.html` | Contact form and studio addresses |
| `templates/search.html` / `404.html` | Search and not found |
| `templates/index.html` / `page.html` | Fallback list and default page |

Parts: `parts/header.html`, `parts/footer.html`. All sections are block patterns in `patterns/`.

## Install

1. Download [`kenchiku-grid.zip`](https://github.com/oberonlai/shippress-themes/releases/download/themes/kenchiku-grid.zip).
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Activate **Kenchiku Grid**, then give your About, Newsletter and Contact pages, and your Projects and project pages, the matching page templates.

## Demo content and screenshots

`demo-content.json` has the sample site title, pages, categories, tags and posts used for the catalogue screenshots, plus the URL of each catalogue page (`screens`). WordPress does not load it. ShipPress renders it on a throwaway local WordPress and keeps the full-page desktop and mobile screenshots in its own repo.

## Metadata

`theme-meta.json` feeds the ShipPress template wall's filters (also in the root `index.json`): industry, type, color tags + palette, style tags, fonts and pages.

## Licenses

Code: GPL-2.0-or-later. Fonts: SIL Open Font License 1.1, bundled in `assets/fonts/` with their license texts. Images: original artwork made for this theme, GPL-2.0-or-later. Details in `readme.txt`.
