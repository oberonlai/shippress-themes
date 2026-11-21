# Reference notes (final; "Our version" column filled at design stage, see design-spec.md)
- Primary: https://kakimori.com/  — screenshots brand/ref/kak-first.png, scroll-kak-900/1800/2700/3600.png
- Secondary: https://www.ito-ya.co.jp/ — brand/ref/ito-first.png, scroll-ito-900/1800.png (category/nav structure; its saturated hero is NOT borrowed)

## Structure observed (kakimori)
1. Promo strip, transparent header (menu icon, script logo, language, search, cart) over full-bleed hero slideshow with bottom-left caption + grey "View more".
2. Story block: vertical tagline between two accent rules, line-drawn street scene, "Our Story" underlined title.
3. Notice row with circle prev/next arrows.
4. "New arrivals" 4-panel abutting photo banner r8, title centred on top.
5. "Picks of the month" 4-up square product tiles on pale grey, name + price centred, grey "View more".
6. Articles: 4 thumbnails + 2-line titles.
7. Category row of six line icons.
8. More banners, press row, footer.

## Signature candidates
| # | Candidate | Our version |
|---|---|---|
| T1 | Hero slideshow with bottom-left caption "New arrival / Desk pen" + flat grey View-more tab | Home hero: three equal photo columns (H1/H1b plan chest + deckle, H2/H2b brush counter + jar, H3/H3b pigment jars + swatch), each crossfading (6 s hold, 1 s fade, offsets 0/2/4 s) with its own bottom-left caption "This week / item" + flat slate 150x32 tab "See the range"; title below photos, stats row. Inner: two-column static slim version on 10 pages |
| T2 | Four abutting photo panels r8 with one centred light title across the seam | Home "The four ranges": 950x285 r8, panels P1 paper / P2 pigment / P3 brushes / P4 tools, white Manrope 300 36px title across the P2/P3 seam, sp-reveal--zoom. Inner: Shop head, Mill orders, About |
| T3 | Vertical tagline between two short accent rules + centred titles with hugging 1px underline | Every section title 28/35 ls .05em centred with 1px #FF5800 underline hugging the text; vertical tagline between 20x1 #FF5800 rules in home "Our story" and 8 inner intros (vertical-rl in zh-TW/ja, stacked words in en/fr/de) |
| T4 | Six hand-line category icons with spaced labels | Supporting: six own SVG line icons 96px (Paper, Pigment, Brushes, Tools, Mill orders, Price list), 14px labels ls .2em; plus Kakimori notice row with 40px circle arrows and Itoya two-line menu labels |

## Palette (final)
White #FFFFFF ground, #333333 text, #F6F6F6 tiles (all exact from the reference); #FF5800 kept for 1px underlines / tagline rules / active language only (<1%); slate #5E7380 replaces the flat grey #8A8A8A buttons (contrast 4.9:1 vs 3.4:1, row palette). First-screen saturated share target <= 6% (hard max 15%).
