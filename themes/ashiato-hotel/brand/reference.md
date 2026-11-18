# Reference notes (draft; "our mapping" filled in at design stage)
Main reference: https://www.princehotels.co.jp/pet/ (pet-friendly hotel guide, sage-green quiet palette).
Screens: ref/prince-first.png, ref/prince-full.png. Tokens: reference-tokens.md. No secondary reference (one is enough for a quiet theme).
## Signature candidates
1. Rounded inset photo window under a light bar, wide light-sans wordmark lying over the photo's upper-left, small tracked sub-line below.
2. Pale sage paw-print stepping trail below the window's lower right, leading the eye to a narrow left text block.
3. Slow cross-fade of 4 stay moments with grey/sage pager dots.
4. Header bar with sage-green semibold nav labels and one dropdown.
## Our mapping (final, see design-spec.md)
| Reference element | Ashiato Hotel (finished mapping) | Where |
|---|---|---|
| 1. Rounded inset photo window (32 px inset, r18, ~1.7:1) + huge light white wordmark over the upper-left + tracked semibold sub-line | T1: left window of the split hero (884x520, r18), H1 "Your dog is on the list." Lexend 300 5.5rem white on a scrim, Public Sans 600 24 px .12em sub-line; full-width version (r18, H1 4.25rem) as every inner page hero; inset r18 dog-run parallax band | Home hero, home block 5, all inner pages |
| 2. Pale sage paw-print trail (#E4ECE2, 4 prints ~70 px, rotated) stepping from the window's lower right toward the intro | T2: our own paw SVG, 4 x 68 px #E4ECE2 in the hero; 3 x 56 px under every inner hero; 4 x 48 px dividers between home blocks (stagger reveal); paw marker on FAQ accordions; footer trail | Home, all inner pages, footer |
| 3. Slow cross-fade slider (fade, 3000 ms) with grey/sage pager dots under the window right | T3: CSS cross-fade of 4 arrival moments (desk, room, dog run, terrace), 3 s + 0.5 s, 10 px dots #C8C8C8 / #769E6F | Home hero, Rooms hero, Dog run hero, dots on About |
| 4. Light header bar, sage semibold nav, one dropdown | 100 px white bar, Public Sans 600 18 px deep sage #4F6E49 (AA), one dropdown under "The stay" | Header, every page |
| Palette #FFFFFF / #769E6F / #E4ECE2 / #959595 / #C8C8C8 | kept; #4F6E49 added for text roles (contrast), #97A791 (row hex) for the footer | Whole theme |
| Motion: fadeBlock fade-in, hover 0.5-0.6 s ease | sp-reveal--up 16 px .6 s ease + sp-stagger; same hover values; sp-parallax added (hero layer 6 %, dog-run band 10 %) | Below the fold |
Photos, copy, paw drawing and wordmark are ours; nothing from the reference is copied.
