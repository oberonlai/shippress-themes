# Shirabe Research reference (stage 1 research draft; "Our mapping" filled at design-spec)

## Reference sites (S5-Style, consulting / professional services)
| Role | Site | Why | Our mapping |
|---|---|---|---|
| Main (80% target) | W Bridge Advisory, https://wbridge-advisory.co.jp/ | consulting group, photographic, ink/white monochrome, big numbers band | |
| Secondary | KVC Partners, https://www.kvcp.jp/ | recruiting analytics firm, fixed left index, light/dark flips | |
Not used (already used elsewhere): see /tmp list in stage-a.md. Screens: ref/wb-first.png, ref/kv-first.png, ref/scroll-*.png. Tokens: reference-tokens.md.

## Signature candidates (shape, composition, position)
| # | Candidate | Our mapping |
|---|---|---|
| 1 | Short two-column hero row (3-line headline left, hairline, small lead + news pill right) above one 1340×900 dark media block that widens to full bleed as it reaches the top | |
| 2 | "IN NUMBERS" band: ink ground, giant 150px figures with vertical-rl caption scattered on a loose grid, photos drifting past | |
| 3 | 90px uppercase English section titles that rise out of a mask line, with Japanese subtitle below | |
| 4 | Two-column service list, second column dropped 330px, photo 8:7 + eyebrow + title + arrow square | |
| 5 (KVC) | Fixed left index list (active item dark, others grey) and vertical ticker rail on the right edge | |

## Scroll effects (before/after: ref/scroll-wb-*.png, scroll-kv-*.png)
| Site | Effect | Trigger | Position | Duration / ease | Distance | Library |
|---|---|---|---|---|---|---|
| wb | hero media block width 1340→100vw | ScrollTrigger toggleActions play/reverse | .home-about top top → 50% top | 0.5s, GSAP default power1.out | +100px width | GSAP 3.12.5 |
| wb | media block fades to 0.1 when text enters | ScrollTrigger | content top bottom | 0.4s default | opacity | GSAP |
| wb | English titles rise out of mask | scroll listener + rAF adds `view-is--shown` | element top +100px < viewport bottom | 0.6s (inner 0.8s) cubic-bezier(.43,.05,.17,1) | translateY 100%→0 | jQuery |
| wb | service photos zoom in | same class | same | 0.8s cubic-bezier(.6,.02,.38,1.04) | scale 1.6→1, opacity 0→1 | jQuery |
| wb | numbers items fly in | same class | band enters | 0.6s cubic-bezier(.6,.02,.38,1.04) | top/left 10rem→0, opacity 0→1 | jQuery |
| wb | number slot-roll counter | scroll check, once | element top −300px | roll ≈1s | digits | jQuery |
| wb | numbers photos marquee | slick linear autoplay | always | 12s / 16s per slide | horizontal | slick |
| kv | hero text drifts up and fades (scrub) | ScrollTrigger scrub | hero centre → bottom+100px | scrubbed | y −100, alpha 0 | GSAP 3.11.4 + Lenis (duration 1.2) |
| kv | sections pinned while cards rise | ScrollTrigger pin | top top, end 2.5 viewports | scrubbed | y→0 | GSAP |
