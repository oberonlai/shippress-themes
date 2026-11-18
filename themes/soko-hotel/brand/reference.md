# Reference notes ("our counterpart" completed from design-spec.md)

| Item | Reference | Our counterpart (filled later) |
|---|---|---|
| Main site | https://the-tawaraya.jp/ (S5-Style hotel / ryokan; photography + video, low-key) | Soko Hotel home + all inner pages: T1 letterbox stage, T2 vertical title over three columns, T3 ground inversion with the scene returning under the footer |
| Secondary (frame only) | https://www.gorakadan.com/fuji/ (parallax / scroll effect, pale grey ground) | heading rise (sp-reveal--up, blur dropped) and clip reveal (sp-reveal--wipe on the H2 inset still) |
| Imagery | photo, low-key | photo, low-key: 16 Grok photos with one STYLE string (warm single light, brick/steel/timber, 2.4:1 stills) |

## Structure (Tawaraya)
1. Black splash with a line-drawn seal, then a letterboxed dim film still (1440×600) between black bars; three tracked Latin nav links bottom-left, three vertical-set links right, wordmark centred top.
2. Ground flips to white; the same still is inset 90px each side (1260 wide).
3. Short essay: vertical three-character title centred over three equal columns of serif text, small caption + author line centred.
4. Black footer with seal mark, address, and the photo returning below.

## Signature candidates (shape-level descriptions)
- T1: letterboxed hero: dim still between two solid black bars, three small stacked nav links inside the lower-left and three vertical-set links inside the right edge.
- T2: vertical title over three equal serif columns (essay spread).
- T3: scroll-tied ground inversion black → white → black, with the same photograph inset in the white and returning under the black footer.
- T4 (supporting): left-edge rotated and right-edge vertical fixed reservation labels, plain text.
- G1 (secondary): blur-in per-character headings (opacity + filter, 0.95–1.6s expo-out).

## Our counterpart per element
| Reference element | Soko Hotel counterpart |
|---|---|
| Black splash + line-drawn seal | own hairline bay stamp "No. 7" (95x135, 1px #888) on #0E0B08, then 40x57 in the top bar |
| Letterboxed dim still 1440x600 between 150px black bars | P01 concierge opening a steel-framed door onto a loft suite, 2.4:1, between #0E0B08 bars 150px; inner pages: short letterbox opener |
| Three tracked Latin links stacked at x=141 | chapter index (Harbour rooms / The people / Night on the quay), 12px ls .1em, pitch 30px |
| Three vertical-set links at right | "Since 1924" / "Loft suites" / "Door 7", vertical-rl 17px, x 1190/1240/1290 (desktop >=1100px only) |
| Rotated RESERVATION label left / vertical label right | rotated "Reserve" x 41 and vertical "Door 7" x 1396, umber, desktop only |
| Tracked centred wordmark | "SOKO HOTEL" 17px wt 500 ls .35em |
| Ground flips to white, photo inset 90px | paper #FAFAF8, P02 reverse shot inset 1260x525 |
| Vertical title over three serif columns | essay "No. 7" (home), "1924" (The Building), "Hands" (People), "Table" (Canteen) |
| Black footer with the photo returning | black footer, P10 warehouse from the water full-bleed with sp-parallax 8% (different photo: no repeats on a page) |
| Reserve box 1px outline 730 wide | home H7 "One way to reserve" box and Reserve page box |
| Arrival fade 1.8s + scale 1.3 to 1 over 2s | CSS-only hero load animation with identical timing and easing |
