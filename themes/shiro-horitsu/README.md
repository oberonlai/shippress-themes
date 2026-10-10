# Shiro Horitsu

A quiet, trustworthy WordPress **block theme** for **boutique law firms**, solicitors, notaries and small legal practices. *Shiro hōritsu* means "white law": a clean page, nothing hidden in the margins. The theme is set like a well-kept statute book: washi-ivory pages and a lot of air, EB Garamond titles that speak in two voices (upright, then *indigo italic*), section marks (§) and numbered indexes, hairline column rules that draw in behind the hero, and large calm photographs of paper, wood and stone.

All sample copy is in English and every name is fictional. The sample firm, **Shiro Law Office — Shiro & Kanda Attorneys**, is a four-attorney office in Chiyoda, Tokyo, advising owner-run companies, families and creators on corporate, family, inheritance and intellectual property law. Its people are Emi Shiro (founding partner), Takeshi Kanda (partner), Naoko Arima and Ren Morita (associates), Yui Hoshino (office manager) and Kaito Mizuno (legal assistant). The address, telephone number and email are placeholders. Replace them with your own.

The sample content carries a short **not-legal-advice disclaimer**: in the footer, under every article (pattern `shiro-horitsu/disclaimer`) and beside the contact form.

## Who it is for

- **Industry:** law-firm: boutique and family law firms, solicitors, notaries, patent and trademark attorneys, mediators, small legal practices.
- **Site type:** business. Practice areas, attorney profiles, consultation and fees (the first-consultation flow, what to bring, a fee ledger and FAQ), insights (news), a quarterly newsletter and contact with office hours.
- **Mood:** calm, precise and trustworthy; Japanese minimal with an editorial voice.

## Design concept

| Axis | Choice |
|------|--------|
| Palette (neutral, blue) | **Washi** ivory `#F4F1EA` ground, **paper** `#FBFAF6` raised surfaces and form cards, **kinari** stone-light `#E7E3DA` tinted bands, **sumi** ink `#1D1F24` text and ink rules, **stone** grey `#5F5E59` quiet text, **ai** deep indigo `#2A3A5E` for buttons, links, numerals and the italic voice, **yoru** night indigo `#1A2133` for the dark band and the footer. AA throughout: sumi on washi 14.6:1, indigo 10:1, stone 5.8:1 (5.1:1 on the tinted band); paper on indigo 10.8:1; washi on night indigo 13.4:1, its quiet text 7.7:1 |
| Style | Minimal + editorial |
| Type | **EB Garamond** (variable, 400–800, with italic) for titles, leads, numerals, fees and the footer wordmark; **Hanken Grotesk** (variable, with italic) for reading, spaced-capital labels, navigation, buttons and forms. Both bundled (Latin subsets, SIL OFL 1.1), no CDNs. Fluid type between 390 px and 1440 px |
| Composition | A 12-column asymmetric grid. The hero sets the title in seven columns against a tall photograph in five, over four hairline column rules; a narrow **margin rail** (3 columns) carries section marks beside the content; splits are uneven (7/5, 5/6, 4/7) and the partners' portraits sit at different heights; the practice areas read like a table of contents (number, title, summary, arrow) and an indigo rule draws under a row on hover; attorney profiles alternate sides; insights are ruled rows (date, title and summary, a small photograph) |
| Motion | CSS only and slow: hero and page titles lift, photographs settle from a slight zoom, the column rules draw down, rows, steps, principles and people rise in staggered as they scroll into view, photographs un-zoom, the footer wordmark tightens its tracking. Nothing is hidden before it moves (full-page captures and print show everything). Everything stops under `prefers-reduced-motion` |
| Mobile | Designed at 390 px: one column, the hero photograph follows the title in 4:3, the margin rail becomes a label above the content, the second portrait is inset for rhythm, steps and team stack, insight rows put the photograph first, the fee ledger wraps, and the menu opens as a full-screen overlay in large serif |
| Variation | `styles/yoru.json` (night office): ground `#14161C`, surface `#1B1E26`, text `#ECE8DE`, quiet text `#A7A59E`, moonlit indigo `#A9B8DB`; AA throughout (text 14.8:1, indigo 9.1:1, quiet 7.3:1) |

### Block styles

Registered in `functions.php`, styled in `style.css`:

- Paragraph: *Label* (spaced capitals), *Section label* (with a § mark), *Lead*, *Numeral*, *Fine print*
- Button: *Text link with arrow* (plus the core *Outline*)
- Separator: *Ink rule*
- List: *Ruled* (hairlines, short indigo dash), *Timeline* (italic year first)
- Table: *Ledger* (hairlines, fees on the right in serif)
- Quote: *Plain*
- Details: *FAQ*
- Image: *Frame*

## Templates

| Template | Role |
|----------|------|
| `templates/front-page.html` | Home (renders the page content: hero, practice index, how we work, the meeting room, the partners, the first-consultation steps, latest insights, a call to action) |
| `templates/page-about.html` | About: the library, philosophy and three principles, the history timeline, a quote beside the stone garden |
| `templates/page-practice.html` | Practice areas: four areas in full with anchors (`#corporate`, `#family`, `#inheritance`, `#ip`) and what the firm refers elsewhere |
| `templates/page-attorneys.html` | Attorneys: two partner profiles and the rest of the office |
| `templates/page-consultation.html` | Consultation and fees: five steps, what to bring, the fee ledger (`#fees`) and FAQ |
| `templates/page-newsletter.html`, `templates/page-contact.html` | The Shiro Letter sign-up and recent letters; contact form, the office, hours and directions |
| `templates/page-wide.html` | Any page without a title header |
| `templates/home.html` | Insights (posts page): category chips and ruled rows |
| `templates/single.html` | Article: margin-rail head, wide photograph, a serif first paragraph, the disclaimer, topics and previous/next, the newsletter band |
| `templates/category.html`, `tag.html`, `archive.html`, `index.html`, `search.html`, `404.html`, `page.html` | Archives, search and the rest |

Every page template renders the page's own content (`wp:post-content`); all copy lives in the pages, editable in the page editor.

## Demo content

`demo-content.json` + `inc/demo-import.php` (the shared ShipPress importer): on activation the theme creates eight pages (Home, About, Practice areas, Attorneys, Consultation and fees, Insights, Newsletter, Contact), seven posts in five categories with eight tags and featured photographs, the main menu, and sets the static front page and the posts page. It is idempotent and never overwrites or deletes content you wrote.

The fees, address and telephone number are examples. The forms are plain HTML: connect them to your own form or email service.

## Images

Seven photographs in `assets/images/` (copies in `assets/images/demo/` for the Media Library), AI-generated for this theme and released under GPL-2.0-or-later / CC0. No real people, places, brands or organisations; the two portraits are AI-generated and do not depict real people.
