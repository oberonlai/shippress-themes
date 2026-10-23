# Reference tokens (primary reference: yanokuchi.ed.jp, measured with getComputedStyle at 1440x900, 2026-10-23)
Only numbers and descriptions. No assets, text or logos copied. "approx" = read from screenshot, not computed.

## (a) Colour
- Text ink `#372828` (warm dark brown), body bg transparent over cream ground approx `#F8F6EC`; cream panels `#F5F5DB`.
- Main green `#228C5B` (h2 colour, full-width section bands, active pagination); deep green logo blob approx `#0A7040`.
- Accent: lime-yellow leaf button approx `#DDEB5A`, small. Photo itself carries yellow/orange (playground) - ours must not.
- First-screen saturated pixels (S>0.35,V>0.25): 46.5% (photo-driven). Ground cream approx 15.6%. Ours must be <=15%: use low-chroma stone ground + muted `#8A4B3A` on small areas only.
- Secondary ref ecc.kyoto-unicap.co.jp: ink `#2A2525` full dark ground, white text, 0% saturated; nav bar `rgba(0,0,0,.55)` with 1px `#545454` border, radius 3px.
## (b) Type
- Body: Nunito Sans + Noto Sans JP, 15.57px (fluid, ~0.97rem), weight 400, line-height 31.1px (2.0), letter-spacing 0.778px (0.05em), no transform.
- h1 (hero over photo): 67.1px, weight 500, line-height 134px (2.0), colour white, box 779px wide.
- h2 sections: 35.0px / 31.1px / 24.3px, weight 500, lh 63 / 43.6 / 48.6px, ls 0.05em, colour `#228C5B`.
- ecc: PolySans display, h2 48px/72px, big stat h2 112.5px/112.5px, h3 32px/48px, body 15px/22.5px ls .03em.
## (c) Spacing
- Hero section: padding-top 85.6px, bottom 27.2px, height 900. Lead section pt 124.5 / pb 201px. Green band sections pt/pb 77.8px. Policy section pt 204 / pb 156. News pt 217 / pb 233.
- Header height about 100px; hero photo inset about 36px from left/right, top 92px; nav text links ~15px, gap ~26px.
- ecc: sections pt 120-170px, pb 0-120px; container gutter `--base-gutter` 24px; head nav pad 15px 30px.
## (d) Radius / border / shadow
- Hero photo frame: radius approx 36px with hand-cut wobbly edge (approx, mask/svg). Thumbs radius 7.8px. Logo blob: asymmetric rounded shape, bleeds off top-left. No shadows measured; no borders.
## (e) Images
- Hero photo 1455x826 (ar 1.76), full width minus 36px inset each side, height ~770 of 900, sits under the header, overlaps the logo blob.
- Facility thumbs 72x54 (ar 1.32, radius 7.8px) in dropdown. Policy/news images rotate-scale in (see g), sizes not measured.
## (f) Decoration
- Lime leaf-shaped CTA 130x118 approx, bottom-right of hero photo, icon + dotted-underlined label + arrow. Green logo blob top-left 394x103 approx. Section titles are split into characters. Green full-width bands alternate with cream.
## (g) Motion
- Hero image: CSS keyframe `p-top-kv-zoom`, scale 1 -> larger (end value not read), duration 7s, linear.
- `.js-rotate-scale-in` (GSAP ScrollTrigger, trigger top 80%): from rotation -25deg (policy/news images -6deg), scale .6, opacity 0 -> rotation 0, scale 1, opacity 1; duration 0.9s; ease back.out(1.4); no stagger; once per element.
- Section titles (SplitText chars): rotation random 0-25deg from bottom-centre origin -> 0, duration 0.5s, ease back.out(3), stagger 0.03s, start top 80%.
- Header dropdown: opacity/visibility/transform 0.2s ease; logo size 0.5s ease.
- ecc: ScrollTrigger start "top 80%", toggleActions play none none none (once); mv transition scrub true (progress-driven); eases power2/power3/power4/expo; stagger 0.15; buttons bg slide 0.45s cubic-bezier(.93,-.03,.11,1); header hides translateY -80px 0.4s cubic-bezier(.43,.05,.17,1).
