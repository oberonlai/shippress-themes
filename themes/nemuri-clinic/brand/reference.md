# Reference (S5-Style), stage 1 draft
- Primary: https://sorahare-dental.com/ (dental clinic; S5-Style listing, category close to health/clinic). Not used by any earlier theme.
- Secondary (structure + scroll only): https://hachioji-dm.com/ (internal medicine clinic).
- Screenshots: brand/ref/ref-sorahare-first.png, ref-sorahare-overview.png, ref-hachioji-first.png, scroll-*.png. Tokens: brand/reference-tokens.md.
- IMAGERY: photo (reference imagery is documentary photography; no illustration).

## Signature technique candidates
1. Hero photo pushed to the right 80% with one big rounded top-left corner, pale ground left, text column overlapping the photo's lower-left edge (sorahare).
2. White circle bubble behind the first words of the lead line + 0.5s staggered line-by-line rise (sorahare).
3. White info/news bar attached to the photo's bottom-right (70% width) with date, one line and a round dot arrow (sorahare).
4. Half-disc "cloud" behind section titles with a spaced EN label (Tenor Sans-like, ls .2em) under the JP/EN head (sorahare).
5. Photo + underlined text button rows, 2:1 photo pair of equal height (sorahare); endless slow photo strip (sorahare).
6. Image parallax scrub, pinned first view fading under the next section (hachioji).

## Colour relationships (hex = reference; ours in stage-a.md)
Ground #F0FAFF ~50% / white ~25% / ink #363636 / main #2268B9 <2% / soft #C0DBEF #89CCFF. First-screen saturated share 0.9%.

## Mapping to finished theme (binding detail in design-spec.md)
| Reference trait | Our implementation | Where |
|---|---|---|
| Offset hero photo, right 80%, flush right, only top-left corner ~120px (sorahare) | T1: photo 01 dim consultation room (lamp + sleep recorder), `left:20vw; width:80vw; radius:120px 0 0 0`, top 120 | Home hero; all inner page heads (72vw × 460, same corner); Notes single featured image; sticky photo 06 on Home |
| White bubble behind lead + lines rise 10px, 1s ease, 0.5s stagger (sorahare) | 80px white circle behind first word of H1; theme CSS keyframes 1 / 1.5 / 2s; photo + bar fade 2s | Home hero; bubble on every inner page head |
| White info bar fused inside photo bottom-right with dot arrow (sorahare) | 60vw × 78px white bar: date · one line · 16px `#4A5560` dot arrow, whole bar one link | Home hero; each inner page head (page-specific line) |
| Half-disc dome behind section titles + tracked label (sorahare) | T2 `.nc-dome` 760×110 radial-gradient segment biting into the next photo/band, H2 1.75rem + label ls .2em | Home method / stories / fees; About, Symptoms, Night study, Treatment, Team, Fees, First visit, Stories, Access |
| Photo rows 520×302 + ● title + underlined skewed long arrow, dotted rules (sorahare) | T3 rows, `.nc-more` button `padding:1em 60px 1em 0`, 50×8 skewed arrow, 1px dotted `#D9D9D9` | Home symptoms (4 rows); About, Symptoms, Night study, Treatment, Team, First visit, Stories, Notes index |
| 2:1 equal-height photo pair 707+353 × 400 | People pair photos 08 + 09 | Home people; Team |
| Feature slider 3:2, 1.5 visible, "01/04" card (sorahare) | Scroll-snap story row 896×597, white 240px card "01/03", no autoplay | Home stories |
| Recruit full-bleed band + centred white panel (sorahare) + scrub parallax (hachioji) | `sp-parallax` Cover photo 07, `--sp-par:10%` (mobile 6%), white .88 panel | Home study-room band; hero img 6% |
| Endless photo strip 192s linear (sorahare) | `sp-marquee` photos 13/14/15, 120s linear | Home strip |
| Section `active` reveal (hachioji) | `sp-reveal--up` + `sp-stagger`, 10px 1s ease | Home symptom rows, people pair; T3 rows on inner pages |
| Colour: #F0FAFF / #FFF / #363636 / #2268B9 | #EEF3F7 / #FFF / #363636 / #4A5560 (row; reason in spec §5) | site-wide |
| Hours table ● ▲ dots | same dots in `#4A5560`, stacks on mobile | Home visit; Access |
