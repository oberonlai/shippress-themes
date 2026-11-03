# Hokuto Driving School

A calm, photograph-led block theme for a **family driving school**: lessons in manual and automatic cars, nervous-driver lessons, refreshers and test preparation.

The demo school is fictional: founded in 1986 by Ellen and Tomas Hokuto in the old tram depot on Mill Lane, Fenwick Hill, run today by their daughter Mara with four instructors and Joan at the booking desk. The whole brand (people, place, tone, a day at the school) is written down in [`brand.md`](brand.md); every page's copy comes from it. Type: education. Sample content in English, Traditional Chinese (zh-TW), Japanese, French and German (since 1.1.0). Built to the quality gate in ROADMAP §4 (rule 0) and `rules.quality_gate` in design-plan.json (row b6-3).

## Concept: calm first, then the road

- **Palette.** Pale concrete `#F1EFEA` ground, kerb stone `#E3E0D8` panels, paper `#F8F7F3` cards, asphalt `#1E2421` text (13.8:1), quiet asphalt `#565C57` secondary text (6.0:1), deep slate green `#2F3A35` for the one dark band and the footer, road-sign sage `#56645A` for labels, numerals and links (5.4:1). A faded lane-line amber `#9A7B45` appears only as short rules and quote marks, never as text or a fill. The photographs carry the colour; the first screen stays below 15 % saturated pixels.
- **Type.** Newsreader (display, roman and italic, optical sizes) up to 4.75 rem over Instrument Sans (text). Both OFL-1.1 without a Reserved Font Name, subset to Latin WOFF2.
- **Photographs.** Twenty photographs generated with one shared style string (quiet editorial photography, soft overcast daylight, muted stone and grey-green tones, shallow depth of field, subtle 35 mm grain). People appear as hands, backs and calm portraits. No cut-outs, no illustrations.

## Front page

1. **The road at first light**: a full-bleed photograph of an empty country road; the single top header lies over it, transparent; the headline "Calm first. *Then the road.*", a short paragraph, two links and a facts bar (since 1986, manual and automatic, first lesson in the yard, booking desk).
2. **A family school**: a letter from the owner (two narrative paragraphs) beside the practice yard.
3. **The route**: six photographed stages, from the yard to test day.
4. **Courses & fees**: how lessons work and four plain prices beside a lesson photograph.
5. **Instructors**: four portraits with one line each.
6. **Nervous drivers**: a deep slate band with the moor road and a learner's words.
7. **Journal** (latest three) and a **booking call** beside the booking office.

## Languages (1.1.0)

The sample content and every word the theme itself shows (header line and button, footer, template headings, the patterns) come in **en, zh-TW, ja, fr and de**. The shared importer picks the language (`shippress_demo_lang`, else the site language) and imports `demo-content.<lang>.json`; the patterns print their words through `hokuto_driving_school_t( 'key' )` from `inc/i18n/<lang>.php` (English fallback, `inc/i18n.php`), and the synced school card starts from `inc/info/<lang>/school.html`. Template text lives in small `tpl-*`, `head-*` and `footer-main` patterns so it can be translated too.

The copy is localised, not translated: people and places keep the brand (Fenwick Hill, the Old Tram Depot, Mara, Daniel, Priya, Sam, Joan), while lessons, courses, prices and the licence process follow each country (a Taiwanese driving school's full course with the yard test and the road test at the licensing office's examiners; a Japanese designated school's 50-minute periods, provisional licence and graduation test; the French permis B with the code and a 32-minute exam; the German Fahrschule with Sonderfahrten and the praktische Prüfung), in local currency.

- **Type.** zh-TW headings use a bundled subset of Noto Serif TC (Regular), ja headings a bundled subset of Noto Serif JP (Regular), each built from exactly the characters of that language's sample text; Latin letters and figures stay in Newsreader. Body text uses the system Traditional Chinese / Japanese sans (never a Japanese font on zh-TW pages). CJK headings run at about three quarters of the English sizes, with looser leading (body 1.85) and no italics; Japanese headings break by phrase (`word-break: auto-phrase`).
- **German and French** paragraphs and narrow columns hyphenate (`hyphens: auto`), so long compounds wrap instead of overflowing.
- Screenshots of every page per language are in `screenshots/<lang>/`.

## One source for shared details

The school details and booking-desk hours are the synced pattern `Hokuto Driving School: school details and booking desk hours`, shown in the footer and on the Courses & fees and Contact pages (the footer copy hides itself where the page already shows it). Created once by `inc/shared-info.php` from `inc/info/school.html`; pages hold only references. The demo import (`inc/demo-import.php`) is idempotent and never overwrites user content.

## Pages and templates

Home, Courses & fees, The route, Instructors, Nervous drivers, Test day, About, Journal (posts page), Newsletter, Contact; article, category, tag, search and 404 templates. Six journal posts in three categories (Learning, Road notes, School news) with six tags.

## Licence

GPL-2.0-or-later. Fonts OFL-1.1 (see `assets/fonts/`). Photographs AI-generated for this theme, released under GPL-2.0-or-later / CC0. All names, the town, the address, telephone numbers and prices are fictional.

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/hokuto-driving-school/home-desktop.webp" width="640" alt="Hokuto Driving School home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/hokuto-driving-school/home-mobile.webp" width="200" alt="Hokuto Driving School home page on mobile"></td>
</tr>
</table>

- Courses: [desktop](https://shots.codotx.com/hokuto-driving-school/courses-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/courses-mobile.webp)
- The route: [desktop](https://shots.codotx.com/hokuto-driving-school/the-route-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/the-route-mobile.webp)
- Instructors: [desktop](https://shots.codotx.com/hokuto-driving-school/instructors-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/instructors-mobile.webp)
- Nervous drivers: [desktop](https://shots.codotx.com/hokuto-driving-school/nervous-drivers-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/nervous-drivers-mobile.webp)
- Test day: [desktop](https://shots.codotx.com/hokuto-driving-school/test-day-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/test-day-mobile.webp)
- About: [desktop](https://shots.codotx.com/hokuto-driving-school/about-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/about-mobile.webp)
- News: [desktop](https://shots.codotx.com/hokuto-driving-school/news-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/hokuto-driving-school/article-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/hokuto-driving-school/category-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/hokuto-driving-school/tag-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/hokuto-driving-school/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/hokuto-driving-school/contact-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/contact-mobile.webp)
- Search: [desktop](https://shots.codotx.com/hokuto-driving-school/search-desktop.webp) · [mobile](https://shots.codotx.com/hokuto-driving-school/search-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/hokuto-driving-school/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/hokuto-driving-school/ja/home-desktop.webp) · [fr](https://shots.codotx.com/hokuto-driving-school/fr/home-desktop.webp) · [de](https://shots.codotx.com/hokuto-driving-school/de/home-desktop.webp)
<!-- screenshots:end -->
