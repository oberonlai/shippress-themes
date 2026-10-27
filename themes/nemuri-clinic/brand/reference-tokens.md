# Reference tokens: sorahare-dental.com (primary), measured 2026-10-27 at 1440×900 with getComputedStyle + stylesheet
Secondary (structure/scroll only): hachioji-dm.com. Values only; no assets, text or logos copied.

## (a) Colour (main stylesheet hex counts: #2268B9 ×156, #d9d9d9 ×55, #F0FAFF ×43, #fff ×41, #363636 ×12, #C0DBEF ×9, #E1F5FF ×2, #89CCFF ×2)
| Role | Hex | Share of first screen / page |
|---|---|---|
| Ground (pale sky) | #F0FAFF | ~50% first screen, alternates with white page-wide |
| White surface (cards, info bar, bubble) | #FFFFFF | ~25% |
| Text | #363636 (body), #595959 on hachioji | text only |
| Main / link / EN label / button | #2268B9 | <2% (text, 1px underline, dots, tel number) |
| Soft accent (dot bullets, skyblue buttons) | #C0DBEF, #89CCFF, #E1F5FF | <2% |
| Hairline | #D9D9D9 (dotted section rule) | lines |
First-screen saturated share (S>0.5, V>0.3, downsampled screenshot): 0.9% (sorahare), 5.1% (hachioji, yellow/green seat + wall graphic). Photo itself is white/pale blue.

## (b) Type
- Body: "Zen Kaku Gothic New" 16px / 500 / lh 32px (2.0) / ls normal, #363636. Lead (hero line) 25px / 500 / lh 40px, #2268B9. Hero small copy 16/32.
- H2 JP 24px / 500 / lh 38.4px (centred), H3 20px / 500 / lh 30px. Statement paragraph 24px / lh 48px centred.
- EN label: "Tenor Sans" 20px / 400 / lh 23px / ls 4px (0.2em) #2268B9, sits above or below JP head (cloud head uses 12–16px ls .2em).
- Tel number: Poppins 500, clamp(34px, 4.5vw, 42px) #2268B9. No uppercase transform.
- hachioji (ref only): H2 42px / 700 / ls 2.1px (0.05em); H3 16/700; body 14px #595959 ls .7px; Typekit Helvetica Neue + A-OTF Gothic.

## (c) Spacing
- Header 70px tall (sticky bar after scroll), logo top-left 165×124 at x30,y20. Hero margin-bottom 120px; reservation block margin-bottom 120px.
- Hero: photo 1152×702 at left 288, top 120 (80% of width, right-aligned flush to edge); text column 320px wide at x≈144, y≈582; info bar width 70% of hero, bottom-right.
- Feature slider: slides 896×597 (3:2), 1.5 slides visible, gaps ~64px; service rows: photo 520×302 at left 180 with text right, row gap ~65px; row pair photos 707×400 + 353×400 (2:1 widths, same height 400).
- Text measure 1080 centred; container side gutter 180px at 1440.

## (d) Radius, border, shadow
- Radius 0 on all photos except hero image: top-left corner large (~120px curve, visible in first screen) and white circle bubbles (border-radius 50%, 350px and 680px max cloud circles behind section heads).
- Borders: 1px #2268B9 underline on text buttons (padding 1em 60px 1em 0, skewed 50×8 arrow line at right); 1px dotted #D9D9D9 section rules. Shadow: very soft card shadow on slider card (≈0 4px 16px rgba(0,0,0,.08)).

## (e) Imagery
IMAGERY = photo (all hero, about, service, recruit images are photographs; no illustration). Style: bright, high-key, pale aqua cast, interior and staff documentary; shallow depth; no cut-outs.
| Image | Ratio | Radius / mask | Placement |
|---|---|---|---|
| Hero reception | 1.64:1 (1152×702) | top-left ~120px curve, others 0 | right 80% of width, top 120px, under header |
| Feature slides (staff, rooms) | 3:2 (896×597) | 0, white card with number "01/04" overlaps bottom-right | centred carousel, 1.5 visible, 5s autoplay |
| Service rows | ~1.75:1 (520×302) and 1.77:1 (707×400) + 0.88:1 (353×400) | 0 | left 180px, text opposite |
| Recruit full-bleed | wide | 0, white 60% panel overlaps centre | full width band, centred panel |
| Strip (marquee) | 3 photos in a row ~2:3 | 0 | below reservation, 40% width each, endless slide |

## (f) Decoration
- Round bullet "●" before H3 in #C0DBEF/#89CCFF (1em); white circle bubble (≈80px) behind first words of hero lead at x≈108; white half-disc "cloud" dome behind section titles (circle 350px, bottom-aligned, overflow hidden); slide counter "01/04" Tenor Sans 24px with small caption; round blue dot arrow at right end of info bar (16px circle #2268B9); mini calendar dots ● ▲ in hours table (#2268B9).
- No numbered steps, no chips.

## (g) Motion
- Hero photo `fadeIn` 2s ease (opacity 0→1); info bar fadeIn 2s; hero text lines `fadeInUp` 1s ease, translateY(10px)→0, delays 1s / 1.5s / 2s / 2.5s (0.5s stagger), fill forwards.
- Header: scroll >0 → class is-scroll is-bg (logo fades out, small sub-logo fades in, jQuery fadeIn/Out ~400ms default).
- Feature carousel: Swiper loop, speed 1500ms, autoplay delay 5000ms, started when scrolled within 100px of section (scroll listener), centred 1.5 slides ≥769px.
- Photo strip: infiniteslide (jQuery) 192s linear endless leftward, no pause on hover.
- Menu button lines transition transform 0.3s ease-in-out; text button arrow transition 0.3s.
- hachioji: GSAP ScrollTrigger: image scrub parallax yPercent 25 (start top bottom → end bottom top); sections get class `active` at "top bottom" → opacity transition .5s linear; footer calendar block translate transition 1s cubic-bezier(.19,1,.22,1); hero cover image zoom keyframe 5s (scale 1→1.015); pinned first view fading to 0.1 opacity while next section slides over; page-transition mask .5s linear.
