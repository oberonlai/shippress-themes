# Shizuku Filter — reference (as-built mapping filled by s1-spec; binding details in design-spec.md)
Main reference: https://ampuleshot.jp/ (S5-Style, cosmetics/product-brand landing; picked for the product-on-liquid key visual, not for its saturated colour). Not used by earlier themes (checked against themes-repo reference.md list). Measurements: `reference-tokens.md`. Screenshots: `ref/ampule-first.png`, `ref/scroll-*.png`.
## Signature technique candidates (3)
| # | technique (shape / composition / position) | source | our adaptation |
|---|---|---|---|
| T1 | White header band with a giant two-line black wordmark (≈130px) top-left over a 1px black rule, photo starts directly under it, full-bleed 1440×811 | first screen || Home hero + every inner page head: white 236px band, "SHIZUKU / FILTER" Figtree 700 130px lh .9 + "COUNTERTOP" 52px, 1px ink rule, full-bleed photo 01 under it, no radius |
| T2 | Capsule (full-pill, 1px black) cards: big 45px EN name left, small product pair centre, check-circle list right, round black chevron CTA; each series in its own saturated fill | lineup || Home REWARDS: 6 pills 1316×228 radius 9999 1px ink, 45px price, round photo, check list, 78px ink CTA; fills white/#F1F3F3/#4F6A74/#DCE7EA instead of saturated; also Rewards, Filter, Schedule, FAQ, Waitlist, Contact |
| T3 | Left 80px rail with 1px rule + vertical section labels; "+" crosshair corners around headline block with white marker-lines text | concept / rail || All home sections after hero: #F1F3F3 + 45px white grid, 80px rail with vertical labels (desktop only), crosshair "+" leads on white marker strips (WHY, FILTER, BACK); inner pages same |
| T4 | Pill-shaped product badge (268×178, 1px black, coloured) hanging on the hero's lower right with mini product + 2-line claim | hero badge || Hero lower right: slate #4F6A74 pill 268×178 with cartridge thumb 04, "Early-bird $89 · 38 of 300 left"; + vertical BACK THIS pill fixed right (supporting KV items, not counted as signature) |
## Palette (source → ours)
Source: black `#000`, white `#FFF`, ground `#F1F1F1`, accents yellow `#FFE500` / pink `#FF758D` / purple `#C490F8`. Ours: slate `#4F6A74` main, pale water `#DCE7EA` aux, ground `#F1F3F3` base, ink `#10161A`, point `#C8E86A` (<1%, replaces ref yellow role); ink `#10161A` replaces `#000`; first-screen saturated ≤12% target.
## Scroll effects
Highlight clip-path wipe (≈620ms in-out) → sp-reveal--wipe; hero slow zoom 1.1→1 over 10s ease-out → CSS-only load zoom + sp-parallax; vertical label reveal → sp-reveal--wipe.
