# Hitomi Vision — reference (DRAFT from stage 1 research, 2026-10-24; "Theme" columns left blank for the design step)
S5-Style category used: beauty / health-care & medical (nearest to an optometry clinic). Not used before (checked against all themes/*/brand/reference.md).

## Sources
| Role | Site | S5-Style post | Why |
|---|---|---|---|
| Main | https://sumire-totalbeauty.jp/ | via https://www.s5-style.com/ listing (beauty / styling, quiet photography, typographic) | one-hue sage palette, huge dome bands, polaroid cards, scrubbed motion; matches note "quiet palette, low-chroma ground" |
| Sub | https://hta-program.jp/ | S5-Style post 11957 (medical education) | medical subject; white label strips behind headline, giant faint English backdrop text, mask-wipe stagger; 3D characters NOT borrowed (photography only) |

Screenshots: `brand/ref/sumire-first.png` (hero), `sumire-costume.png` (dome + portrait + vertical text), `sumire-photo-polaroid.png` (polaroid cards + interlude strip), `sumire-part1/2.png`, `hta-first.png`, `hta-scene2.png`; scroll pairs `scroll-sumire-mask-before/after.png`, `scroll-sumire-parallax-a/b.png`.

## Signature technique candidates (shape, composition, position)
| # | Source | Technique | Theme equivalent |
|---|---|---|---|
| A | sumire | **Dome band**: every section sits on a full-width pale ellipse segment (1440×~1150, top edge crests ~120px above section), +2% lighter than ground; heading centred inside it; dome widens 1→1.15 and rises 10% as you scroll | |
| B | sumire | **Polaroid card pair**: two photos on pale mats (≈18px mat, thicker bottom), 305×370, offset 110px vertically, text column right | |
| C | sumire | **Alternating 2:3 portrait + vertical text column**: 427×651 photo at x=293 then mirrored at x=770, narrow vertical text beside | |
| D | sumire | **Outline 1px CTA** (radius 1px, 14px light text) in transparent header over dark photo hero, nav lower-case thin sans with "+" markers | |
| E | hta | **White label strips behind headline** (each line its own tinted box) + giant faint outline English word behind the subject | |
| F | hta | **Dotted-circle "Scroll Next" cue** bottom-left (110px dotted ring) | |

## Colour relationship (from main)
| Role | Source hex | Share | Theme hex |
|---|---|---|---|
| Ground | `#C9D0C9` | 75% | |
| Dome / card | `#D0D6D0` / `#CFD6D0` | 15% | |
| Text | `#3E4D43` | 3% | |
| Sub text | `#516258` | <1% | |
| Line / border | `#8A938E` | <1% | |
| Hero photo dark | `#384848` | first screen 95% (photo) | |
| Accent | none (single hue) | – | row hex `#6A8A88`, small areas only |
Sub site: ground `#E8ECEF`, accent blue (first-screen saturated 13.5%, not borrowed).

## Scroll effects (see reference-tokens.md (g) for numbers)
sumire: IO fade/rise/blur/mask/per-char (1.0–1.8s, cubic-bezier(.165,.84,.44,1)); GSAP scrub dome scaleX 1→1.15 + y -10%; interlude parallax -6%; letter tilt 6–10°. hta: IO class `is-shown` → fade 1800ms easeOutCubic, fade-up 2.5rem 1100ms easeOutQuint, clip-path mask wipe 1200ms easeInOutQuint with 116ms child stagger; scroll-linked mask offset var.
