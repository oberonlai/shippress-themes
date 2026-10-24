# Hitomi Vision — reference (stage 1 research + design, 2026-10-24; "Theme" columns = 成品對應, binding detail in design-spec.md)
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
| A | sumire | **Dome band**: every section sits on a full-width pale ellipse segment (1440×~1150, top edge crests ~120px above section), +2% lighter than ground; heading centred inside it; dome widens 1→1.15 and rises 10% as you scroll || **T1 used**: `hv-dome` behind every home section head (2–9) and every inner page head; ground `#D6DCD6`, dome `#DEE3DE`, 118vw×1150, crest −120px; scrub not reproduced (static) |
| B | sumire | **Polaroid card pair**: two photos on pale mats (≈18px mat, thicker bottom), 305×370, offset 110px vertically, text column right || **T2 used**: polaroid "exam record" pair for the corrected case (home §6, Cases, Screen Eyes, Children, Dry Eye); 305px card, mat 18/70px `#E4E8E4`, 110px offset, shadow |
| C | sumire | **Alternating 2:3 portrait + vertical text column**: 427×651 photo at x=293 then mirrored at x=770, narrow vertical text beside || **T3 used**: 2:3 portrait rows 427px at x=293 / mirrored x=770 (home rows 2, 3, 8; Exams, Children, Screen, Dry Eye, Frames, Optometrists, Visit); caption vertical only in ja/zh-TW ≥1024, Latin horizontal |
| D | sumire | **Outline 1px CTA** (radius 1px, 14px light text) in transparent header over dark photo hero, nav lower-case thin sans with "+" markers || used: overlay header, lower-case Figtree 14px nav with "+", outline 1px `#8A938E` radius 1px "book an exam" |
| E | hta | **White label strips behind headline** (each line its own tinted box) + giant faint outline English word behind the subject || supporting: hero H1 lines on `#EEF1EE` strips + faint *clarity* word (6%, desktop only) |
| F | hta | **Dotted-circle "Scroll Next" cue** bottom-left (110px dotted ring) || not used |

## Colour relationship (from main)
| Role | Source hex | Share | Theme hex |
|---|---|---|---|
| Ground | `#C9D0C9` | 75% || `#D6DCD6` (+4.9% L) |
| Dome / card | `#D0D6D0` / `#CFD6D0` | 15% || dome `#DEE3DE`, mat `#E4E8E4` |
| Text | `#3E4D43` | 3% || `#3E4D43` |
| Sub text | `#516258` | <1% || `#516258` |
| Line / border | `#8A938E` | <1% || `#8A938E` |
| Hero photo dark | `#384848` | first screen 95% (photo) || not used: high-key P1 in framed window (row) |
| Accent | none (single hue) | – | row hex `#6A8A88`, small areas only |
Sub site: ground `#E8ECEF`, accent blue (first-screen saturated 13.5%, not borrowed).

## Scroll effects (see reference-tokens.md (g) for numbers)
sumire: IO fade/rise/blur/mask/per-char (1.0–1.8s, cubic-bezier(.165,.84,.44,1)); GSAP scrub dome scaleX 1→1.15 + y -10%; interlude parallax -6%; letter tilt 6–10°. hta: IO class `is-shown` → fade 1800ms easeOutCubic, fade-up 2.5rem 1100ms easeOutQuint, clip-path mask wipe 1200ms easeInOutQuint with 116ms child stagger; scroll-linked mask offset var.


## 成品對應 (scroll)
sumire rise → `sp-reveal--up` (1s, cubic-bezier(.165,.84,.44,1), 24px); sumire mask → `sp-reveal--wipe` (1.6s, cubic-bezier(0,.4,.48,1)) on photos; hta stagger 116ms → `sp-stagger`; sumire interlude parallax −6% → `sp-parallax` on home interlude (6%) and hero window (8%, mobile 5%).
