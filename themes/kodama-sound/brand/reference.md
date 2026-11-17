# Reference

Reference: https://ondocollective.jp/
Secondary: https://www.nsl-jp.com/

IMAGERY: photo (low-key, close, shallow depth of field).

Screenshots: ref/ondo-first.png, ref/wheel-ondo-1..6.png, ref/nsl-first.png, ref/scroll-nsl-900/1800/2700/3600.png.
Full mapping and numbers: brand/design-spec.md (sections 1, Key visual concept, 5, 12).

| Technique | Reference | Ours (as built) |
|---|---|---|
| T1 Trace line | one scribble line with dot terminals across the hero (Ondo) | S1: one 1px hand-drawn trace (rgba(244,241,245,.7)) leaving the boom-mic cable inside the framed P01 photo, crossing both frame edges and both viewport edges, 5 loops, two 8px dots; draws in 2.4s cubic-bezier(.22,1,.36,1); repeats as a faint strand at the top of home section 2, a trace glyph on every credit sheet, the footer, and every inner window head |
| T2 Three-zone row | left thought, narrow centre sliver, right-aligned tag list (Ondo) | S2: home "How scoring and mixing are scheduled" on pale #EFEBF0: solid mauve sliver 184x295 centred, then left 60px two-line thought, P04 sliver 184x295 (0.62) in the exact centre, right-flush list of the 5 stages; continued on Process (5 rows), Sounds (6 rows), Studio (1 row) |
| T3 Credit sheet | ruled rows, key/value underlines, tinted panel with inset image (NSL) | S3: home "Projects, one at a time": 4 full-width entries, 2px rough ink rule, key/value rows with 1px underlines, tinted #E4DEE6 panel with an inset 0.8 still, panel side alternating right / left, plus a "Sounds recorded" line; continued on Projects, Services, People, Send a cut, posts (meta) |
| T4 Dark tab | fixed dark bottom-right tab with label + circle arrow (NSL) | fixed "Send a cut" tab #2A2530, 270x60, bottom-right, >=782px; rendered large inline in home section 8 |
| T5 Flush photos | photos flush to one viewport edge, the next entering lower from the opposite side (Ondo) | home section 2 (P02 flush right, P03 flush left +280px) and section 6 (P10 flush left, P11 at 52.4% +234px), wipe reveal |
| Key visual | blurred macro photo, centred line monogram + wordmark, scribble with dots, two-line centred statement + caption, "+ Sections" (Ondo) | framed low-key photo of a recordist holding a boom mic over a puddle (P01), centred line monogram + wordmark in the split nav, trace line with dots, "We record the world / before we score it." + caption, "+ Index" |
| Palette | deep ground / pale band / white text, saturated only in the hero (#003C26 / #F3E5DE / #FFFFFF) | deep #1D1A21 (L matched) / pale #EFEBF0 / text #F4F1F5; mauve #95859C accent, tint #E4DEE6, ink #17141A; first screen saturated share <=10% |
| Motion | GSAP scrub of the pinned hero, power3.out text rise, mask-position image reveal | sp-parallax (hero 8%, band 10%, heads 6%), sp-reveal--up + sp-stagger (.8s cubic-bezier(.22,1,.36,1)), sp-reveal--wipe on photos |
