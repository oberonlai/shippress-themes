# Reference (draft; "our use" column = finished-theme mapping, see design-spec.md)
Primary: https://nuset.jp/ (S5-Style gallery entry, dermatologist-developed skincare brand; high-key full-bleed photography, quiet light palette).

| Signature candidate | Reference element | Our use |
|---|---|---|
| S1 | Sticky full-bleed hero photo that defocuses and dims while a four-stanza poem lights up character by character (`ref/scroll-nuset-hero-before.png`, `-mid.png`, `-after.png`) | **T1** home KV: P01 skin-prick scene pinned (sticky) with sp-parallax 8%, a slate veil with backdrop blur 20 px (5 px mobile) rises over it carrying four stanzas (history, test, plan, review) with sp-stagger + reveal-up 13 px 0.8s; T1 mini heads on 10 inner pages |
| S2 | Tall portraits flush to the left and right viewport edges at different heights around a narrow vertical heading and a centred text column (`ref/nuset-about-edge-photos.png`) | **T2** home "The problem": P02 3:4 flush left (32vw), P03 277:450 flush right (19vw, 200 px lower), narrow heading between, text column at 36% with veiled P04; also About, Conditions, Immunotherapy, Children, Contact |
| S3 | Rounded-40 paper card with ruled footer and dot pager beside a tall 2:3 photo that swaps in sync (`ref/scroll-nuset-voice.png`) | **T3** home "In their words": radius-40 `#E9E8E4` card + 2:3 photo (P09/P14/P15) in a scroll-snap track with dot pager; on 6 inner pages, holds the forms on Contact and Newsletter |
| S4 (supporting) | Translucent cards with thumbnail, "view detail" arrow and a thin progress line on a slate photo band (`ref/scroll-nuset-qa-band.png`) | Supporting: home case-notes slate band (`#757E82→#939799` over P08, sp-parallax 10%) with translucent cards, 256×199 thumbnails, progress line; Conditions and Case notes pages |

See `reference-tokens.md` for measured values. Only concepts are borrowed; no images, copy or logo.
