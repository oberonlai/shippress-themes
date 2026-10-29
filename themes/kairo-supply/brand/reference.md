# Kairo Supply — reference (draft, stage 1)
Source: S5-Style collection → UNION TEC https://www.union-tec.jp/ (BtoB space/engineering group; not used by any earlier theme). Numbers: `reference-tokens.md`. Screenshots: `ref/`.
Design-plan note names MonotaRO as industry analogue only (403 to bots, EC grid, not used as the visual reference).

## Signature technique candidates
| # | Technique | Shape / composition / position | Our counterpart (成品對應) |
|---|---|---|---|
| T1 | Stadium-masked photo over a giant cropped wordmark on a hairline grid | 950×405 pill photo centred, black wordmark ≈180px tall bleeding off both edges behind it, 176px hairline grid, wide-spaced one-line tagline at the bottom | **T1** home block 1 KV: `SUPPLY KAIRO SUPPLY KAIRO` Inter Tight 800 cap ≈184 px cut both edges, stadium K01 min(66vw,950)×2.35:1 with `sp-parallax` 8%, 176 px `#E3E6E9` grid, spread H1; inner page heads (9 pages) = page word + stadium photo |
| T2 | Sticky hero that morphs the pill into a tall egg photo at right while the story text fills grey→ink | egg 375×540 at x874; paragraphs 28px/2.0 | **T2** home block 2: egg K02 26vw/0.7:1 right, story 1.75rem/2.0 left with `sp-stagger`+`sp-reveal--up` (substitute for scrub fill), ghost wordmark `#F4F6F7`; also Counter, Stories, Team, Visit, single post |
| T3 | Full-screen sticky stage: blurred dark photo with big sentence-case list and a small blob-masked sharp inset | inset 320×220 top-right, list 56px bold white bottom-left | Supporting (not counted): home block 3 dark stage — K03 blurred + 50% black, `sp-parallax` 10%, 3.5rem white list, blob inset K04 320×220, chamfered corners |
| T4 | Outlined pill buttons with dot + stacked pill nav top-right | 24px pills, radius 16 | **T3** header mini pills (filled "Open an account" + outlined Call/Menu) and `is-style-ks-pill(-fill)` 216×48 r9999 with 5 px dot on every page; one CTA "Open a trade account" |

## Colour
Base #FFFFFF (≈68%), ink #000 (≈6%), light grey #F9F9F9, photo grey-green cast (≈24%), accents blue #296EDF / green #29DF7E / red #DF2929 (defined, unused on fold). Fold saturated share 1.5%.

## Scroll motion (see tokens (g))
Tagline letter roll, text fill scrub, sticky stage with photo cross-fade, Lenis smooth scroll.

## Spec
Binding spec: `design-spec.md` (techniques T1–T3, Key visual concept, similarity table §13).
