# Reference tokens — ReeL (https://reel-re.co.jp/), measured 2026-11-01 at 1440×900 (values only, nothing copied)
## (a) Colour
Ground black #000 (≈88% of first screen), text white #FFF (≈8%), mid-grey body on white sections ≈ #8A8A8A, ink #000 on white. No saturated accent anywhere; the case-study photos supply the only colour. First-screen saturated share 0%.
## (b) Type
Latin: geometric grotesque (Gradual-like, weight 500), CJK: noto-sans-cjk-jp bold. h1 (JP line) 118px / lh 1.0, white, weight bold; Latin second line ≈ 130px lh 1.0 tracking -0.05em; section h2 ("Works Archives") ≈ 94px lh 1.0; giant marquee word ≈ 235px, ls -0.05em; h3/p 16.5px weight 500; nav 14.4px; small labels 12px. Sentence case, no all-caps.
## (c) Spacing
Page gutter 51px (3.5%) at 1440; hero top padding 111px, headline block starts under the header at y≈115; content two columns split at 52% (label/left, paragraph/right at x=747). Section gaps ≈ 80–100px. Container = full width minus gutters.
## (d) Radius, borders
Radius 0 on photos and panels; buttons are 1px outline pills (height ≈ 42px, padding 10×43, radius 999). Hairlines 1–2px white on black (three full-width rules, one above, between and below the two headline lines), 1px black rule under statements on white.
## (e) Imagery — IMAGERY: photo
Documentary photography of real projects (interiors, landscapes, three people at a meeting table), natural light, slightly muted. Case panels: full-height 1:1 to 1.4:1 photos, radius 0, 20px gaps, bottom dark gradient with 4 caption columns (Project / Concept / Overview / Type, 12px grey label over 16–20px white value). Works archive: 3 columns of 4:3 photos, each column stepped down 25px with a 24px solid black bar above the title. Vision photo 4:3 right half (≈ 640px wide at x 747), caption left.
## (f) Decoration
Three full-width 1px rules framing a two-line headline; "Our Mission/Our Vision" plain labels 16px; outline pill "Scroll to Discover ↓"; coordinates strip N/E at foot of hero; thick black stepped bars over archive cards; huge looping "We Are ReeL" marquee text.
## (g) Motion
Headline lines sit 24.7px low and rise into place (translateY 24px → 0, ≈0.9s, expo-out feel); hero black → white page change on scroll (≈ 600px); marquee loops horizontally; case-study strip is pinned and translates sideways with vertical scroll (Nuxt app, custom scroll code, no GSAP global found).
