# Reference tokens (measured with getComputedStyle at 1440x900) — primary reference: https://morethan-kobe.jp/

(a) Colour
- Ink #131414 (text, header CTA block, caption tile) ~35% of page; ground white #FFFFFF ~45%; slate band #686E74 (Member / Staff Interview) ~15%; ghost grey text #E7E7E8 (statement before fill) ; photo sky blue is the only saturated area.
- First screen saturated share (HSV s>0.45): 5.9% (sky in the hero photo). Accent colour: none in UI.
(b) Type
- Family Bricolage Grotesque (display + body) with IBM Plex Sans JP fallback; one serif italic-ish display (Latin) used only in the ticker.
- Statement 48px/600, lh 81.6px (1.7), ls -3.84px (-0.08em); section statement 40px/500 lh 72px ls -1.2px; section title ("Work") ~88px/600 tight; sub-label 22px/600; body 15px/500 lh 27px; nav 16px/400; Latin titles mixed case, no uppercase.
(c) Spacing
- Container ~1073px text column at x 184; wide rows start at x 75. Section padding-top 120–150px (mobile 45–50px), 300px before the interview block, 180px bottom. Header 90px tall, CTA block 180x90 flush to the top-right corner.
(d) Corners, borders, shadow
- Radius 0 everywhere. 1px ink underline rules on link rows, thin hairline leader (240px) before the stepped statement. Corner-bracket buttons (not adopted). No shadows.
(e) Imagery — IMAGERY = photo
- Candid documentary colour photographs in daylight, people and places; not illustrated.
- Hero: full-bleed 1440x~680 photo of five people moving toward the camera, long shadows on pavement, a hospital in the background; sits under a 127px white band below the header.
- Work row: 4:5-ish portrait photo (638x~800) at left x 75, with a same-width ink tile (logo mark) fused under it; text column at x 836.
- Ticker: small 180x180 square photos inserted between giant words.
- Staff Interview: 260x170 landscape photo at top right of the slate band; second photo bleeding off the left edge (500px wide).
(f) Decoration
- (01)/(02) small parenthesised numerals, 14px, left of 22px underlined link rows with a diagonal arrow at the right end; 240px hairline leader before the stepped three-line statement; corner-bracket "View all" tab.
(g) Motion
- Lenis smooth scroll + GSAP ScrollTrigger. Statement text fill: colour #E7E7E8 -> #131414 per line, scrubbed (scrub 1), start "top 70%". Reveals: duration 1s, ease expo.out, stagger 0.04–0.08s. Ticker rows: CSS/GSAP linear loop, rows in opposite directions. Split text per char for hero headline (stagger ~0.002s).
