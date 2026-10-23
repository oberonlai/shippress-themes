# Reference tokens (measured with getComputedStyle, 1440x900, 2026-10-23)
R1 = Motoya United (motoya-united.co.jp, S5-Style corporate/group), main, 80% target. R2 = TSG (www.tsg-jpn.co.jp), band rhythm + scroll tech. Values only; no copy/photos/logo.
## (a) Colour
- R1: ground #FFFFFF ~80% of page; text #000000 ~10%; photos ~10%; first screen saturated pixels 1.0%. Per-business cards use 10 pastel-saturated fills (#DD7687, #6BBC6E, #61C1BE, #4694D1 ...) = R1 accent mechanic (one flat colour per group company). Ours: replace by 6 low-chroma tints.
- R2: white / #000000 / white / #BEC8CE (blue-grey band) alternate bands; text #000. First screen 22% saturated (3D blobs) - NOT borrowed.
- Ours: ground #F3F5F5, ink #1D2529, accent #7D8C94 (small areas), stone band #BEC8CE-like #C9D1D5, dark band #1D2529.
## (b) Type
- R1: Inter + Noto Sans JP; body 16px/16px lh(1.0 set per element), weight 500; h2 "Business" 34px/51px ls 0.68px (0.02em); h3 40px/60px ls 2.4px (0.06em); card title h3 14px/21px ls 1.68px (0.12em); hero tagline JP ~80px bold. Case: normal.
- R2: Inter 300/400 display h2 46-65px lh 1.0-1.75, ls 0.16px; body NotoSansCJKJP 16px/28px 700 labels.
## (c) Spacing
- R1: hero section 600vh tall with sticky 100vh inner; tagline section 1087px; business section pt 80px, cards 993x370 margin-top 32px (first 120px); side gutters 30px; topics panel pt 66 pb 100 radius 30.
- R2: band padding 97.6px top/bottom (54.7 first), content ~1000px centred columns.
## (d) Radius / border / shadow
- R1: rounded frames radius 10px (cards, hero edge thumbnails 28x19 r10); topics panel radius 30px; round 55px black menu button; 1px black curve line; no shadow.
- R2: floating pill menu radius ~20px, translucent; round CONTACT button 116px 1px white border.
## (e) Images
- R1 hero: photo 915x700 at x525-1440, y127-827, top-left square? right edge bleeds; neighbours peek left (30px sliver, r10). Card photo 412x275 (3:2) cover, in card inset 48px, card tilted ~-0.9deg (matrix .982/.015) while stacking. Marquee/inline thumbnails 178x121 (3:2) r0.
- R2: product cut-outs (not borrowed); 2-up columns ~430px.
## (f) Decoration
- R1: bracket "( )" motif highlighting phrases with colour fill behind text; numbered rotated index 01-05 on card right edge (12px); round black ">" buttons 48px; underline links 1px.
- R2: vertical Japanese text columns beside products (writing-mode), round contact button.
## (g) Motion
- R1: #kv 600vh sticky stage: hero photo -> giant logo scales via scroll scrub (rAF + CSS vars, Lenis-like smoothing); business cards: sticky stack, each card enters from below with -1deg tilt settling to 0, margin-top 32px; marquee rows data-marquee (CSS keyframes, duration var); easing cubic-bezier(.23,1,.32,1) hover .25s (most used), (.645,.045,.355,1) .35s; IntersectionObserver reveals threshold 0.
- R2: GSAP 3.11 + ScrollTrigger + Lenis; scrub 1 (linear) parallax on images start "top bottom" end "bottom top"; fromTo reveal power3.out duration ~2 stagger.
