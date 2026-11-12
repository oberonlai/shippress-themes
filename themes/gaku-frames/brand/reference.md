# Reference notes ("Our counterpart" filled from design-spec.md)

Reference: https://daisukematsumoto.com/ (primary)
Secondary: https://toshiyukihashimoto.jp/
Found through the S5-Style gallery (portfolio / photography). Screens in `ref/`.

## Why these two
A framing shop sells how a photograph sits on a wall, so the nearest published sites are photographer portfolios: quiet, monochrome, almost no chrome, the picture is the page. Neither domain appears in the used-references list.

## Primary: daisukematsumoto.com
Whole first screen is one pair of tall black-and-white photographs side by side, no container, joined at a hairless seam with a single centred label. A tiny stack of grey pills sits at the top-left. The strip drifts sideways. Palette is neutral grey only.
Signature candidates:
1. Seam-label photo pair: two full-height photos butted together, one white centred label on the seam (`ref/dm-first.png`, `ref/scroll-dm-after.png`).
2. Pill cluster: 12px pills, radius 999, #E8EBF0, invert on hover (`ref/dm-first.png`).
3. Drifting strip: slides translate sideways, fade-in once decoded (`ref/scroll-dm-before.png`, `ref/scroll-dm-after.png`).
Our counterpart (see design-spec.md T1, T3, Key visual concept):
1. -> T1 mitred frame window: three equal low-key photo columns (P01 framer fitting a mitred corner while the client holds the print, P02 sample corners, P03 finished frame against its wall) butted with a 1 px line inside a 32 px walnut frame whose four border shades show the 45 degree joints, 12 px #E8EBF0 mount; one white 24 px label centred on the photos ("Gaku Frames - framed for the wall it hangs on"). Inner page heads repeat the frame with a butted photo pair or one photo and a centred label.
2. -> Centred pill nav (exactly one top menu): 12 px, radius 999, #E8EBF0, invert .4s cubic-bezier(.16,1,.3,1); same pills as post tags, wood chips and price group labels.
3. -> Drift becomes sp-parallax on each hero column at different speeds (6% / 9% / 6%) plus the framed P06 band at 10%; label fades in .55s cubic-bezier(.37,0,.63,1).

## Secondary: toshiyukihashimoto.jp
White ground with 1px diagonal hairlines, a 130px uppercase headline cut into masked lines, a vertical name beside a vertical rule, and a dark docked notice card at the bottom right. Content column starts at 42% with a small label, a photo and a grey button.
Signature candidates:
4. Diagonal hairline field behind sections (`ref/th-first.png`, `ref/scroll-th-after.png`).
5. Dark docked card bottom-right with image and highlighted line (`ref/th-first.png`).
6. Giant uppercase split headline rising line by line (`ref/scroll-th-before.png`, `ref/scroll-th-after.png`).
Our counterpart (see design-spec.md T2, T3):
4. -> Mitre hairline field: two crossing 1 px 45 degree lines #E3E5E8 behind the hero and sections (one brass-tinted), vertical 1 px rule at x 1355 with a small vertical caption ("Cut to fit - 45 degrees"), hidden below 1024 px.
5. -> "On the bench today" card #202220, 565 x 196, 191 px photo P04, brass highlight line, "[ -> ]", docked over the hero frame's bottom-right; reused as the closing booking card and on 7 inner page heads.
6. -> Split section headlines at 8.2rem Outfit 300 uppercase, line 2 starting with "/" indented 22% ("MOULDINGS / SIX WOODS IN STOCK"); lines rise with sp-reveal--up inside sp-stagger (.8s, .12s steps), never in the hero. Mosaic reveal -> sp-reveal--wipe on masonry and step photos.

## Colour relation
Base near-white #FAFAFA, ink #1C1F23, tint #E8EBF0, dark card #202220, one accent hairline. Ours: walnut #5E5348 carries the frame, the dark card and the footer; base stays cool near-white, not cream. First-screen saturated share about 0-3%.

## Scroll effects (all notes in `ref/` before/after pairs)
See `reference-tokens.md` (g) and the table in the run's stage-a.md.
