# Reference (draft, stage 1) — Kosei Architects
Sources (S5-Style listing, categories construction / design offices; not used by any earlier theme):
- R1 (main, 80% target): Showa Sekkei, https://www.showa-sekkei.co.jp/ — architecture + infrastructure design firm. Screens: ref/showa-first.png, ref/showa-full.png, ref/scroll-showa-{before,mid,after}.png. Tokens: reference-tokens.md.
- R2 (secondary): STAGE Lab, https://stagelab.inkdom.jp/ — renovation brand. Screens: ref/stage-first.png, ref/scroll-stage-{mid,after}.png.

## Signature candidates (we use 3 of them, visibly; fill "ours" in stage 2 design)
| # | Candidate (shape / composition / position) | Ours (to fill) |
|---|---|---|
| C1 | Hero as a 2×2 panel grid framed by 1px lines, right column full-bleed to the viewport edge; diagonal parallelogram cut-outs crossing panel edges (R1) || **Used (T1)**: home hero photo-left — framed 2×2 grid (1px #A6A6A6) bleeding to the left edge, timber-model photo cell (sp-parallax 8%) + pale panel with #E6E3DF/#5C6A78 diagonal bands; reduced grid on every inner-page hero |
| C2 | Ruled service table: header row "Title / Explanation", each row = tiny label with ■ marker + 100×67 thumbnail under it, large title at x≈233, two-paragraph description at right column, ↗ at row end (R1) || **Used (T2)**: home Services ruled table 'Title / Explanation', ■ label + 120×80 thumb, Source Serif 4 1.75rem title, ↗ #5C6A78; Services, Projects list, Fees, Journal, Studio people rows |
| C3 | Small ■ square marker + 00/01/02 index list in a left column with the active row on pale panel and a partial black progress line (R1) || **Used (with T1)**: hero ■ 00 Workplaces / 01 Housing / 02 Renovation / 03 Studio, active row on #F0EFED, 50% progress line; home Process; sub-nav on Workplaces/Housing/Services/About |
| C4 | Photo wipe reveal: pale panel sweeps over the image then uncovers it, 1.1s expo-out (R1) || Used as motion: sp-reveal--wipe 1.1s cubic-bezier(.165,.84,.44,1) on case-wall and lead photos |
| C5 | Full-bleed darkened interlude photograph between two white bands (R1) || Used: home interlude, full-bleed 720px, rgba(34,34,34,.45), sp-parallax 10%, one serif sentence |
| C6 | Photos with stepped (L-notch) corner crops and an arch-topped tall photo at the right edge (R2) || **Used (T3)**: home Studio — L-notch 96px 4:5 photo + arch-topped 3:4 photo on #E4E8EC offset block; About, Studio, Housing, Contact |
| C7 | Horizontally drifting row of photos at staggered heights (R2) || Not used (no marquee under hero; Ito precedent) |

## Colour (R1): ground #FFFFFF, pale #F2F0EF / #EBE6E2, ink #222222, muted #6B6B6B, accent #A92B5F ≈5.5% of first screen. Ours: ground #FFFFFF, pale #F0EFED, ink #222222, #5C6A78 accent on small marks only.
Built result (stage 1 spec, see design-spec.md): colours #FFFFFF / #F0EFED / #E6E3DF / ink #222222 / accent #5C6A78 ≈5% on ■, ↗, one hero band, CTA square, scroll-top tab; section order hero → case wall → intro → services table → parallax interlude → process index → studio notch/arch → fees → journal → contact; 18 photos mapped in design-spec §10; fonts Source Serif 4 300/400 + Source Sans 3, CJK Noto Serif TC/JP.
