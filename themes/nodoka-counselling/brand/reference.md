# Reference (draft) — Nodoka Counselling
Reference: https://yosugaclinic.com/okusawa/ (S5-Style #11638, women's clinic; quiet split first screen, low-key interior photo)
Secondary: https://mcares.co.jp/ (S5-Style #10898; pinned hero → ground, care wording, rounded photo cards)
IMAGERY: photo (low-key, warm-neutral, grain; two armchairs, notebook, window light).
Tokens: reference-tokens.md. Screenshots: ref/yosuga-*.png, ref/mcares-*.png, ref/scroll-*.png.
Palette mapping: ground #EDE8DE→ cool mist #E9ECEC; olive text #58633E→ steel ink #2F3A40; peach tabs #DBC2B6→ muted clay #CDB8AE; brand steel #5C6B73.
## Our adaptation (成品對應) — see design-spec.md
| Reference element | Source | Nodoka counterpart (where) |
|---|---|---|
| Quiet split first screen, tall low-key photo window, 3 peach vertical pill tabs, hairline + NEWS strip | yosuga first screen | T1 home hero: armchairs photo x469–1295, clay #DBC2B6 tabs Book / Email / Online, hairline + NOTICE strip; compact T1 on all 10 inner heroes |
| Vertical tagline in cream column | yosuga first screen | vertical h1 "A room to talk it through." (≥782 only; horizontal on mobile) |
| Offset square photo + low poem-line column | yosuga About | T2 home block 2 (plaster + leaf shadow photo); About, Approach, First conversation, Online, Stories |
| Ruled opener: 1px rule, big light Latin title left, lead right; underlined current section in bar | yosuga Medical Menu + header | T3 openers on home blocks 3/4/6/7/8 and every inner page; current page underlined in centered nav |
| Rounded 20px photo pair, offset overlap | mcares About | T4 practitioners pair (home block 6, Practitioners, About) |
| GSAP fade+rise .5–.6s power1.out; hero 2s intro | yosuga motion | sp-reveal--up + sp-stagger (.6s, 20px); hero 2s CSS settle + sp-parallax 8% |
| Pinned hero shrinking into ground | mcares motion | substituted by sp-parallax (hero 8%, full-bleed corridor band 10%) |
| Colours #EDE8DE / #58633E / #3B3720 / #DBC2B6 | yosuga tokens | #E9ECEC / #5C6B73 / #2F3A40 / #DBC2B6 (tab hex kept) |
| Low-key warm interior photos, plaster + leaf shadow | yosuga imagery | 16 own Grok photos, one STYLE string (design-spec §7) |
