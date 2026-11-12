# Reference notes: Hisui Clinic (stage 1 research; counterpart filled in by the design step, see design-spec.md)

Primary reference: https://www.kameda.com/ (a Japanese multi-site medical group; top page 1440px, plus one clinic department page on its medical sub-site). Chosen because the plan row names it and it is not in the used-references list. Secondary: none (one close-category site is enough; the S5 rule allows 1-2).
Screenshots: `ref/kameda-first.png` (first screen), `ref/kameda-part1.png`, `ref/kameda-part2.png`, `ref/kameda-part3.png`, `ref/kameda-news.png`, `ref/kameda-dept-first.png` (department page opening), `ref/scroll-kameda-*.png` (accordion before/after, hero later, menu drawer). Measured values: `reference-tokens.md`.

## What the first screen shows
A 1440x630 hospital-atrium photograph (muted looping video, cool dark teal-grey, a pendant light in the middle). A transparent header at the top (logo left, round white search button and "Menu" label right). The left 30% is an index column: three links with outline-circle arrows, split from the photo by one 2px white vertical rule. A thin, widely tracked condensed caption sits in the lower middle ("Kameda Medical Center", weight 100). A vertical "scroll" micro-label with a hairline sits at the lower right. Below the photo the page is white, with a 50px bold section title and a pale ledger of numbered rows. Saturated share of the first screen: under 1%.

## Signature technique candidates (all hand-picked from this site; none reuses a used domain or a recorded signature)
| # | Candidate | Where on the reference | Shape / composition |
|---|---|---|---|
| T1 | Rule-split window: photo window with a frosted index column | first screen | 70%-height full-bleed photo; one 2px white vertical rule at 30% of the width; left of it a column of three link rows (label left, 28px outline-circle arrow right, 64px pitch) over the photo; right of it the open photo with a thin tracked caption |
| T2 | Department band: solid tone band with round medallion + five anchor tabs + two-tone rule | department page | flat mid-green band 180px tall, 80px white circle medallion with a line icon at the left, small label + title; under it five tabs (1px deep-green top and bottom rules, chevron-down) and a heading whose underline is 218px deep-green over a 3px grey full-width rule |
| T3 | Audience-tagged update rows: filter list left, dated rows right | news block | left column 360px of five rows (circle arrow right, active row tinted with a 5px deep-green right edge), a solid deep-green block button at its foot; right: dated rows with an outline-pill category and a tiny person / stethoscope icon at the far right, with a legend under the list |
| T4 (supporting, not counted) | Numbered ledger rows with condensed grey numerals and a 5px open-edge bar | business block | already used by other themes; do not make it a signature |
Skipped on purpose: the 5-column faint vertical hairline backdrop (used by earlier themes), the 50/50 photo + grey panel (used).

## Palette relationships (reference hex, kept exactly in the reference; our palette maps to celadon later)
Deep green #165C48 (links, bars, button) / mid green ~#409980 (department band) / tint #E8EFED / base #FFFFFF and #F8FAF8 / text #333333 / muted #848484 / hairline #E0E0E0. Relationship: a single green does every job on a white ground; the photograph, not the colour, carries the first screen. Plan row celadon #6E8B84 maps to the mid-tone; a darker celadon (about #165C48 family) is needed for text links.

## Imagery
IMAGERY: photo (the reference uses real photographs and a video still; no illustration). Style: documentary, wide, no filters, bright for the group's staff photos; our row asks for high-key.

## Counterpart in our theme (finished-theme counterpart)
| Reference element | Our counterpart | Notes |
|---|---|---|
| Hero: 1440x630 atrium photo (looping video), 70% of the first screen | Home hero: high-key photo H1 (endocrinologist turning a glucose trace to a patient), 1440x540 under an 88px white top bar, `sp-parallax` --sp-par 8% (mobile 5%) | KV 1; design-spec §1 T1, §9 |
| 2px white vertical rule at 30% | Same rule, 2px #FFFFFF at 30%, full window height; repeated on every inner page head (mini window 360px) | T1, KV 2 |
| Index column: 3 link rows, 28px outline-circle arrows, 64px pitch | Frosted column (white 86% + blur) on the photo: Diabetes / Thyroid and pituitary / Hormones across life, each to its condition page; on mobile the rows move below the photo | T1, KV 3 |
| Thin tracked caption (Barlow Condensed 40px/100/8px) | "One plan, followed over years", Manrope 2.25rem/200/.2em, #165C48 on the pale wall of H1 | KV 4 |
| White lower half with 50px bold title over a ledger | White lower half with H1 4.5rem Manrope 600 + lead + link | KV 5 |
| Vertical "scroll" micro-label + 1px line | Same, desktop only (hidden < 782px) | KV 6 |
| Dept band: flat ~#409980 180px, 80px white medallion, label + title | Home "Conditions we follow" band #3A8770 (ref −4.7% L, for 4.3:1 white text), 180px, 80px medallion with our own line icon; opens Diabetes, Thyroid and pituitary, Hormones across life, Your plan, Fees | T2 |
| Five anchor tabs with 1px deep rules + chevron | Five ruled tabs under every T2 band (168px, gap 30) | T2 |
| Two-tone heading rule (218px deep over 3px grey) | Under every H2 site-wide | T2 |
| News: 360px filter list, active tint + 5px edge, legend, deep block button; dated rows with outline pills and audience icons | Home "News and notices", News page, category and tag archives, Team page filter; icons = for patients / for referring clinicians | T3 |
| Numbered ledger rows (tint, 54px grey numerals, open-row 5px edge) | Supporting only: "How a regimen is agreed" accordion (5 rows, core/details) on home and Your plan; FAQ on Contact | supporting, not a signature |
| Palette #165C48 / #409980 / #E8EFED / #FFF / #F8FAF8 / #333 / #848484 / #E0E0E0 | Same codes; band #3A8770; row celadon #6E8B84 under 1% for icons | design-spec §4 |
| Noto Sans JP + Barlow Condensed | Manrope (headings, caption, numerals) + Figtree (body); CJK Noto Sans TC / JP headings, system sans (gothic) body | design-spec §5 |
| Header drawer .3s ease, hovers .3s ease | Mobile menu panel and all hovers .3s ease; desktop is a single top bar | design-spec §9 |
| Swiper 3-up carousel | Not used (2x2 story cards instead; no carousel JS) | |
| 5-column hairline backdrop, 50/50 photo + grey panel | Not used (seen in earlier themes) | |
