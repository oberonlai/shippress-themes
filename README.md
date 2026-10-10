# shippress-themes

Japanese-inspired WordPress block themes for [ShipPress](https://github.com/oberonlai/shippress-themes), the desktop app that builds WordPress sites with AI.

Each theme is a complete, standalone WordPress **block theme** (full-site editing: `theme.json`, HTML templates, template parts and block patterns). Every theme covers the same eight pages (home, about, news, article, category, tag, newsletter and contact), plus pages of its own industry (such as rooms or a menu); store themes add WooCommerce templates and sample products and still work without WooCommerce, ships English sample copy, and bundles its own fonts, so it makes no third-party requests. ShipPress shows the themes on its template wall, using the metadata in `index.json` and screenshots it renders itself.

## Themes

| Theme | For | Type | Colors | Style | Download |
|-------|-----|------|--------|-------|----------|
| [Aizome Shoten](themes/aizome-shoten) | Independent bookshops and small presses (WooCommerce store) | store | blue, indigo | typographic, retro | [aizome-shoten.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/aizome-shoten.zip) |
| [Beni Kappo](themes/beni-kappo) | Kappo, izakaya and omakase counter restaurants | food-drink | red, dark | bold, layered | [beni-kappo.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/beni-kappo.zip) |
| [Fuji Shinkyu](themes/fuji-shinkyu) | Acupuncture, moxibustion and bodywork clinics | health | purple, pastel | geometric, airy | [fuji-shinkyu.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/fuji-shinkyu.zip) |
| [Hamono Kaji](themes/hamono-kaji) | Kitchen knife forges and kitchen-tool shops (WooCommerce store) | store | dark, neutral | minimal, bold | [hamono-kaji.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/hamono-kaji.zip) |
| [Hanabi Matsuri](themes/hanabi-matsuri) | Summer fireworks and music festivals, event organisers | events | orange, vivid | kinetic, poster | [hanabi-matsuri.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/hanabi-matsuri.zip) |
| [Hinoki Yado](themes/hinoki-yado) | Ryokan and small hot-spring inns | hospitality | green, natural | serene, organic | [hinoki-yado.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/hinoki-yado.zip) |
| [Ikebana Kyoshitsu](themes/ikebana-kyoshitsu) | Ikebana and flower-arranging schools | education | pastel, pink | botanical, asymmetric | [ikebana-kyoshitsu.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/ikebana-kyoshitsu.zip) |
| [Kami no Ne](themes/kami-no-ne) | Washi paper and stationery shops (WooCommerce store) | store | indigo, neutral | minimal, editorial | [kami-no-ne.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/kami-no-ne.zip) |
| [Kenchiku Grid](themes/kenchiku-grid) | Architecture studios | business | monochrome, cool | minimal, editorial | [kenchiku-grid.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/kenchiku-grid.zip) |
| [Kissaten Counter](themes/kissaten-counter) | Coffee shops and kissaten cafes | business | dark, warm | cozy, handmade | [kissaten-counter.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/kissaten-counter.zip) |
| [Kura Shizuku](themes/kura-shizuku) | Sake breweries and tasting rooms (WooCommerce store) | store | gold, neutral | luxe, symmetric | [kura-shizuku.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/kura-shizuku.zip) |
| [Ma Vertical](themes/ma-vertical) | Craft studios and ateliers | portfolio | warm, earth | vertical-type, wabi-sabi, minimal | [ma-vertical.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/ma-vertical.zip) |
| [Seiji Utsuwa](themes/seiji-utsuwa) | Handmade ceramics and tableware shops (WooCommerce store) | store | teal, cool | sculptural, gallery | [seiji-utsuwa.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/seiji-utsuwa.zip) |
| [Shiro Horitsu](themes/shiro-horitsu) | Boutique law firms, solicitors and legal practices | business | neutral, blue | minimal, editorial | [shiro-horitsu.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/shiro-horitsu.zip) |
| [Shashin Folio](themes/shashin-folio) | Photographers | portfolio | monochrome, cool, dark | minimal, cinematic | [shashin-folio.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/shashin-folio.zip) |
| [Yuzu Chaya](themes/yuzu-chaya) | Japanese tea and wagashi shops (WooCommerce store) | store | green, neutral | minimal, editorial | [yuzu-chaya.zip](https://github.com/oberonlai/shippress-themes/releases/download/themes/yuzu-chaya.zip) |

## Install a theme

1. Download the theme's zip. The newest version of every theme is always at
   `https://github.com/oberonlai/shippress-themes/releases/download/themes/<slug>.zip`
2. In WordPress admin, go to **Appearance → Themes → Add New Theme → Upload Theme**, choose the zip and click **Install Now**.
3. Click **Activate**.

Each zip contains a single `<slug>/` folder, which is what WordPress expects.

## Releases

GitHub Actions (`.github/workflows/themes.yml`) builds one reproducible zip per theme (fixed timestamps, sorted entries), so a zip's bytes change only when the theme's files change. On every push to `main`:

1. **Versioned release, never overwritten.** Each theme version gets its own release, tagged `<slug>-v<Version>` (`Version` from the theme's `style.css`), with the zip at
   `https://github.com/oberonlai/shippress-themes/releases/download/<slug>-v<Version>/<slug>.zip`.
   A new version is published once; a version that is already released with the same bytes is left alone. If the bytes differ, the job fails before publishing anything (`scripts/release-themes.mjs`): **change a theme → bump `Version` in its `style.css`** (x.y.z). Pull requests run the same check without publishing, so a forgotten bump shows up before merging.
2. **Moving release `themes`.** The newest zip of every theme (the install URL above), replaced on each push.
3. **`releases.json`**, attached to the `themes` release:
   `https://github.com/oberonlai/shippress-themes/releases/download/themes/releases.json`
   lists every theme's current `version`, `tag`, immutable `url`, `sha256` and `size`.

ShipPress pins the versioned URL plus its sha256 and refuses any other bytes, so a push here never breaks installs from the app. To offer a new version in ShipPress, run `npm run themes:pin` in the app repo after the workflow has finished (it reads `releases.json`); the app's daily "theme pins" check warns when a newer version is waiting.

## Repository layout

```
index.json                 all themes' metadata + filter lists (generated, see below)
scripts/check-themes.mjs   validator (Node 18+, no dependencies)
scripts/release-themes.mjs versioned releases + releases.json (run by the workflow)
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
5. Never include secrets, API keys, real email addresses (use `@example.com` or `*.example`), personal data or local file paths. Sample copy is English and names only fictional people, companies, publications and awards (real city names are fine); `check-themes.mjs` refuses a list of known real ones.
6. Add `theme-meta.json` (copy an existing one) and `demo-content.json` with a `screens` URL for each page in `pages`.
   Copy `shared/inc/demo-import.php` to `inc/demo-import.php` unchanged (the check compares the bytes) and `require_once` it from `functions.php`. It imports the demo content on activation, from the wp-admin "Import demo content" button and with `wp shippress demo-import [--reading]`. Every run is safe to repeat: items are found again by their `_shippress_demo` tag, an empty page with the same slug or title (such as a blank "Home" made by a host) is filled in instead of doubled, the user's own pages are used as they are and never changed, and one run at a time holds a lock. Switching from another ShipPress theme: each imported item carries a fingerprint (`_shippress_demo_hash`, sha256 of its title and content as saved), so another theme's demo pages, posts and menu that nobody edited get the new theme's version in place (same ID and slug, a revision of the old version saved first), edited ones are kept and listed (wp-admin notice with a "Use <Theme>'s text" button per page, or `wp shippress demo-use-text <id>`), and the old theme's unedited extras move to Draft (switching back publishes them again). `wp shippress demo-import --format=json` prints `{replaced, keptEdited, added, drafted}`. ShipPress tests this on fresh local sites for every theme (`mcp-server/theme-idempotency.test.mjs` in the app repo).
7. Run `node scripts/check-themes.mjs --write` to validate the theme and regenerate `index.json`, then `node --test scripts/check-themes.test.mjs scripts/release-themes.test.mjs`. Open a pull request: CI runs the same checks. When you change an existing theme, bump `Version` in its `style.css` too (see [Releases](#releases)).

ShipPress then renders the theme on a throwaway local WordPress and keeps its full-page desktop and mobile screenshots, plus a copy of the metadata, in the app repo.

## License

All themes are GPL-2.0-or-later (see [LICENSE](LICENSE)). Bundled fonts keep their own licenses (SIL Open Font License 1.1), listed in each theme's `readme.txt`.
