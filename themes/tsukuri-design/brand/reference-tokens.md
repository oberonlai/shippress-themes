# Reference tokens (measured with getComputedStyle, Chromium 1440x900, 2026-11-20)

Primary: https://ishigami.studio.site/ (single-product-designer portfolio, product case page). Secondary: https://e-imt.co.jp/ (precision-instrument product site; used for the nav pill, the paper-to-photo scroll hand-off and the dark band). Only measurements and descriptions are recorded; no assets, text or logos are copied.

## (a) Colour (area share on the full primary page)
| Role | Hex | Share |
|---|---|---|
| Title band (first screen top ~39%) | #EFECE5 | 8% of page, 39% of first screen |
| Main ground | #F6F6F6 | 55% |
| Alternating grounds | #F1F1F0, #FBFBFA | 30% |
| Ink (headings, nav) | #2A3141 | text |
| Body grey | #808080 | text |
| Accent | none (no saturated colour; only product colour in photos: navy, mustard) | 0% first screen, 0.7% at 900px |
Secondary (IMT): paper #F4F4F1, ink #202835, dark band #202835 (5580px tall block), white nav pill #FFFFFF, grey chips #EAEAEA; accent blue only in its logo. First-screen saturated share (S>0.45): IMT 6.6%, Ishigami 0.0%.

## (b) Type
- Primary Latin: Roboto Slab 300, tracked. H1 28px / lh 39px / ls 8.4px (0.3em), ink #2A3141. Role line 15px / ls 1.5px / #808080. Section label ("CASE STUDY") 18px / ls 14.4px (0.8em), small labels 12-13px / ls 9.6-10.4px (0.8em). Micro captions ("Use Case 1", "Details") 12px / ls 1.2px.
- Body: Japanese gothic 14px / lh 28px (2.0) / ls 1.4px (0.1em), #808080; lead 15px / lh 30px / ink. Product name 20px weight 400, ls 2px; small Latin name 12px.
- Secondary Latin: Inter 400, ls -0.03em; display word ~230px in the hero, 60px section words, 24px titles; Japanese Noto Sans JP 300.
- Nav links 14px, ls 2.8px (0.2em), weight 300.

## (c) Spacing
- Title band height 350px at 1440x900 (39% of the viewport); H1 at x 144, y 158. Page margin 72px; content column 1296 (two columns 635 + 26 gap + 635).
- Caption row: narrow column x 386-520, paragraph column x 593-1054 (≈ 470px), 28px line pitch.
- Block padding: ~160px above the first label, 90-130px between a photo row and the next label; photo rows 696-900px tall grounds.
## (d) Corners, borders, shadow
- Radius 0 everywhere. No borders; one 30px hairline (1px, #2A3141 at 40%) under the section label. Product photo has a very soft contact shadow baked into the photograph (blur ≈ 60px, 12% grey). No CSS shadows.
- Secondary: nav pill white, radius 8, 472x48 at x 484, y 36; chips radius 6, 88x24.
## (e) Imagery - IMAGERY: photo
- High-key studio photography: white/pale-grey sweep, product centred or hands holding it, soft side light, no props; colour only from the product (navy, mustard, grey). Hands in frame for use cases.
- Ratios: hero object photo ~1.4:1 cut by the fold (centred, ≈ 540px wide at 1440), use-case and detail pairs 1.5:1 (635x422), radius 0, no mask, no overlap; side-by-side pairs at 72px margins with 26px gap; the full-bleed use-case photo sits right of a text column (text x 144-600, photo bleeds to the right edge from x ≈ 780).
- Secondary: full-bleed 16:10 machine still, giant word laid over it (white, 230px Inter), photo veils to paper colour while scrolling.
## (f) Decoration
- 30x1 hairline centred under the label; 28x2 burger lines at the top right (two 32px lines, 1px); tiny micro-labels "Use Case 1/2", "Details", "Colors" above photo pairs at 12px, ls .1em; one-line caption under photos 14px grey; footer line 11px.
## (g) Motion
- Primary (Studio.design runtime): every text and image block gets class "appear": opacity 0 → 1 and translateY 20px → 0, 0.6s, ease, triggered when the element enters the viewport (one-shot); hover/colour transitions 0.3s cubic-bezier(0.4,0.4,0,1); menu overlay background 0.5s cubic-bezier(0.4,0.4,0,1).
- Secondary (GSAP ScrollTrigger + Lenis): move items 0.6s cubic-bezier(0.16,1,0.3,1) with opacity; clip-path hand-off 0.4s cubic-bezier(0.47,0,0.745,0.715); a 120s linear loop ticker; the hero photo fades to the paper colour (#F4F4F1) between 900 and 2700px of scroll, then a dark #202835 band begins at 3870px.
