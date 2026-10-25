# Reference (draft) — Tsubaki Flowers

Source: S5-Style listing (https://www.s5-style.com/), category close to florist / plants / garden shop.
Primary reference: https://www.good2garden.com/ (GOOD2 GARDEN, exterior and garden company, Kobe). Not used by any earlier theme (checked against themes-repo reference.md files).

Screenshots: `ref/g2g-hero.png` (first screen after intro), `ref/g2g-first.png` (intro screen), `ref/g2g-part0..2.png`, `ref/scroll-works-before|after.png`, `ref/scroll-mask-mid.png`. Numbers: `reference-tokens.md`.

## Signature techniques (candidates, we use 3)
1. Intro: a plain white screen with one small line (ja 1.25rem) over one big Latin line (4rem), then a full-bleed film hero fades in; headline returns bottom-left in white (bottom 42px, left 97px).
2. Full-bleed muted looping film of a *hand touching a tree trunk*, green bokeh on the left third, dark bark right. Mood: one quiet human gesture, no product shown.
3. Hairline works grid: 3 equal columns divided by 1px dark vertical rules and a 1px rule on top; each cell holds a photo of mixed aspect (portrait / landscape), centred in generous air, caption below.
4. Asymmetric about block: tall portrait photo (500px) left, small landscape photo floating top-right (≈260px wide), text block offset right-low. Lots of blank space.
5. "View more" text link with arrow and a 1px underline; section titles are Latin 26px with a small grey Japanese sub-label inline.

## Palette (from computed CSS)
| role | hex | share |
| ink / text | #141811 | text only |
| base | #F7F6F0 | ~85% of page below the fold |
| deep accent (button, input focus) | #314032 | <2% |
| grey (sub text) | #858781 | small |
| first screen: photo, dark green/black with a green bokeh patch | — | saturated share ≈ 7% |
Our version keeps the relationship (near-white ground, near-black green ink, one deep green) but moves the ground to a cool off-white and the accent to celadon grey (seiji-nezumi) #6E7F74 (not a beige default).

## Our mapping (finished-theme mapping, per design-spec.md)
| reference | ours (finished theme) |
| intro white screen + hero | T1: CSS-only white intro ("Since 2011, Linden Row" / "Flowers for the table.", 1.6s) → full-bleed 100svh hero H1, headline bottom-left 97px/42px, Hanken Grotesk 4.25rem; also bottom-left titles on 5 inner-page heroes |
| hand-on-trunk film hero | KV: film-grain photo H1 of a florist's hand on a bundle of stems, window bokeh left third, dark leaves right; sp-parallax 8% (mobile 5%) stands in for the loop |
| hairline 3-col works grid | T2: home "Stems of the week" full-bleed 3 cells, 1px #1B221E rules, pad 70px, portrait/landscape/landscape; reused on People, A Week, Flowers & Prices, Ceremonies, Stories, Shop, Visit |
| asymmetric about block | T3: home "The shop" portrait H2 2:3 left + H3 ≤19% floating top-right + text low-right; reused on Our Story, People, A Week, Ceremonies, single stories |
| fade / mask reveals | sp-reveal fade 1.8s cubic-bezier(.25,.46,.45,.94) on text blocks; sp-reveal--mask + sp-stagger on grid photos; sp-parallax on hero and the Monday market band (H7, 10%) |
