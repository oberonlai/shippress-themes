# Reference — Hozen Facilities
Reference site (S5-Style listing, building-services category, not used by any earlier theme): Nippon Kucho Service recruiting site, https://www.careers.nikku.co.jp/ (via https://www.s5-style.com/). Measurements: reference-tokens.md. Screens: ref/. Binding spec: design-spec.md (similarity table §11). No photos, copy, tagline or logo reused.

| Role | Reference | Ours (成品對應) |
|---|---|---|
| Ground | #F5F7F9 (~85%) | #F5F7F9 (~78%), page ground and hero top half |
| Ink | #2E303C | #2E303C, text, dark "Prices" pill, arrow chips, rules |
| White | #FFFFFF (~12%, header card) | #FFFFFF floating header card + chips (~8%) |
| Accent | #0067B6 (<1%, Entry pill) | #0067B6 (<1%), "Report a fault" pill and focus ring only |
| Pale band | #EDEFF3 (footer) | #EDEFF3, home contact cluster + footer |
| Ghost | rgba(88,95,139,.05) | rgba(88,95,139,.06), ghost numerals and ghost word |
| Row accent | — | 藍鼠 #5E6E78 (~1%), small labels above titles and in captions |
| First-screen saturated pixels | 12.3% | cap 12.3% (min of 30% and reference), target ≤ 8% |
| Type | Proza Libre 500 (EN titles) + Noto Sans JP | Proza Libre 500 headings + Figtree body; Noto Sans TC / JP (font_direction sans) |

## Signature candidates
1. Floating white header card inset 16px with dark and blue capsule pills | ours: site header on every page, card 1408×64 r4, "Prices" ink pill + "Report a fault" blue pill (KV #1; supporting detail)
2. Staggered two-column photo pair (second column +100px) with caption and round arrow link | ours: **T1** — Home "Sites" #01–#04 (S1–S4); Sites, Services, Call-outs, About, Field notes, Contact
3. Blur-to-sharp photo focus-in plus blurred ghost photos at the margins | ours: **T2** — Home statement (H3 + ghosts G1, G2), hero H1 load focus-in; Services, Compliance, Prices, About; focus-in (sp-reveal--zoom + hz-focus) on all major photos
4. Section title "EN serif 44px + small label + 1px vertical rule + description" | ours: **T3** — lockup on every home section and every inner page head (Proza Libre 2.75rem / 3rem, label, 1×50px rule, description)
5. 100px ghost numerals (opacity .05) behind captions | ours: part of T1, 6.25rem #01–#04 behind site / post captions
6. Full-bleed 1440×800 photo bands between sections | ours: Home band H2 1440×800 (KV bottom half, sp-parallax 10%) and roof band B2 1440×446 (sp-parallax 8%); Sites and Compliance bands
Not used: thin curved hairline arcs (Kotoba used arcs), hamburger-only navigation, hand-lettered tagline image (ours is typeset "Comfort nobody notices.").
Key visual: R1 look-up building photo + roof workers + white tagline → our pump-room photo (top right) + look-up office roof band with tagline (bottom half); see design-spec.md "Key visual concept".
Scroll effects: see /workspace/ai-wp-builder/cc-runs/th-hozen-facilities/stage-a.md and design-spec.md §8.
