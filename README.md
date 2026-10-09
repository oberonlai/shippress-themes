# shippress-themes

Japanese-inspired WordPress block themes for [ShipPress](https://github.com/oberonlai/shippress-themes), the desktop app that builds WordPress sites with AI.

Each theme is a complete, standalone WordPress **block theme** (full-site editing: `theme.json`, HTML templates, template parts and block patterns). Every theme covers the same eight pages (home, about, news, article, category, tag, newsletter and contact), ships English sample copy, and bundles its own fonts, so it makes no third-party requests. ShipPress shows the themes on its template wall, using the metadata in `index.json` and screenshots it renders itself.

## Themes

| Theme | For | Type | Colors | Style | Download |
|-------|-----|------|--------|-------|----------|
| [Kenchiku Grid](themes/kenchiku-grid) | Architecture studios | business | monochrome, cool | minimal, editorial | [kenchiku-grid.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/kenchiku-grid.zip) |
| [Ma Vertical](themes/ma-vertical) | Craft studios and ateliers | portfolio | warm, earthy | vertical-type, wabi-sabi, minimal | [ma-vertical.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/ma-vertical.zip) |

## Install a theme

1. Download the theme's zip. Every theme has a fixed URL:
   `https://github.com/oberonlai/shippress-themes/releases/download/themes/<slug>.zip`
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Click **Activate**.

The zips are rebuilt by GitHub Actions (`.github/workflows/themes.yml`) on every push to `main` and attached to the release tagged `themes`. Each zip contains a single `<slug>/` folder, which is what WordPress expects.

## Repository layout

```
index.json                 all themes' metadata + filter lists (generated, see below)
scripts/check-themes.mjs   validator (Node 18+, no dependencies)
themes/<slug>/
  style.css                theme header (GPL-2.0-or-later, Text Domain = <slug>)
  theme.json               settings, palette, bundled font faces, styles
  functions.php            block styles and pattern categories
  templates/  parts/  patterns/  styles/
  assets/fonts/            WOFF2 files + their license texts
  assets/images/           original artwork
  screenshot.png           1200×900 WordPress theme thumbnail
  readme.txt               copyright and license of every bundled font and image
  README.md                design notes
  theme-meta.json          template-wall metadata (industry, type, colors, style, fonts, pages, license)
  demo-content.json        sample pages, posts and terms, plus the URL of each catalogue page
```

## Add a theme

1. Create `themes/<slug>/` (lowercase, hyphenated) with a valid block theme. It needs at least these templates: `index`, `front-page` or `home`, `single`, `page`, `archive` or `category`, `tag` and `404`. Use a page template (`page-about`, `page-newsletter`, `page-contact`) where a page needs its own layout.
2. Put a GPL-2.0-or-later header in `style.css` (`License`, `License URI`, `Text Domain: <slug>`).
3. **Fonts:** bundle only fonts under the SIL OFL, Apache 2.0 or another GPL-compatible license. Put the files in `assets/fonts/` with their license text and register them as `fontFace` in `theme.json`. Never load fonts from Google Fonts or another CDN.
4. **Images:** use only your own work, generated artwork, or CC0 / public-domain images, and note the source of each in `readme.txt`.
5. Never include secrets, API keys, real email addresses (use `@example.com` or `*.example`), personal data or local file paths. Sample copy is English.
6. Add `theme-meta.json` (copy an existing one) and `demo-content.json` with a `screens` URL for each page in `pages`.
7. Run `node scripts/check-themes.mjs --write` to validate the theme and regenerate `index.json`, then `node --test scripts/check-themes.test.mjs`. Open a pull request: CI runs the same checks.

ShipPress then renders the theme on a throwaway local WordPress and keeps its full-page desktop and mobile screenshots, plus a copy of the metadata, in the app repo.

## License

All themes are GPL-2.0-or-later (see [LICENSE](LICENSE)). Bundled fonts keep their own licenses (SIL Open Font License 1.1), listed in each theme's `readme.txt`.
