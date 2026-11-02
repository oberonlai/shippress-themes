# Reference tokens: Quraz trunk-room operator (measured 2026-11-02, 1440x900, getComputedStyle)
Source: https://www.quraz.com/ (screens in `ref/quraz-first.png`, `ref/quraz-s1..s5.png`). Only values and descriptions are recorded; no assets, text or logos are copied.

## (a) Colour (first screen: about 27.7% saturated pixels, of which solid blue about 18.7%; ours must stay at or under 15%)
| Role | Reference hex | Share of first screen | Our mapping (quiet) |
|---|---|---|---|
| Main (header band, headings, buttons, fact bar) | `#0066BB` | about 15% (96 px header + 78 px fact bar) | plum-grey ink `#6E6168` (row palette), darker `#4E4249` for the CTA |
| Tint band (info / guide / voice sections) | `rgba(0,102,187,.10)` = `#E5F0F8` | 0% first screen, about 25% of the page | `#F1EDEF` (10% plum) |
| Card tint (feature panels) | `#E5EEF8` | page body | `#F1EDEF` |
| Accent (icon discs, step numerals, 4 px badges) | orange `#E86F00` | under 2% | muted clay `#B9703F`, only icon discs and numerals |
| Warm panel (other-features panel) | `#FDEFE3` | page body | `#F6ECE4` |
| CTA secondary | green `#60BB33` | small | not used; one CTA colour only (plum `#4E4249`) |
| Text | `#212529` on white | n/a | `#2B2528` |
| Ground | `#FFFFFF` | about 60% | `#FFFFFF` / `#FAF8F9` |
Roughly 30 / 10 / 60 for main / tint / ground over the page; our main plum is a muted grey-mauve so first-screen saturated share stays about 5%.

## (b) Type
- Family: Noto Sans JP (body and headings) + Outfit for Latin and numerals. Ours: Plus Jakarta Sans (headings) / DM Sans (body), CJK fallback Noto Sans TC / JP.
- Body 16 px / 400 / lh 24 px (1.5), letter-spacing 0.8 px (.05em), colour `#212529`.
- H2 section title: 40 px / 700 / lh 60-64 px, ls 6% (center aligned), colour main blue. Feature titles 16 px / 700 inside cards; guide card titles 20 px / 700 blue.
- Header nav 14 px / 700, ls .8 px. Buttons 14 px / 700. Large phone number 20 px 700 (Outfit).
- Large-title ratio is modest: the reference never goes above 40 px; ours goes bigger (theme.json max at least 4.25rem) in the hero and one band word.

## (c) Spacing
- Header 96 px tall, body padding-top 96 px. Container 1248 px (96 px side margin at 1440), inner text 1208.
- Section padding: 56 px top/bottom on tint bands, 72/30 on services, 40/32 on news rows. Card grid 3 columns, 376 px cards, 40 px column and row gap.
- Hero KV section 565 px tall; slides 540 x 540 square, no gap; 3 slides visible plus bleed.

## (d) Radius, border, shadow
- Cards radius 8 px (feature cards, guide cards), buttons 8 px, header pill buttons 9999 px, fact bar radius 8 px, step badges 4 px squares, news cards 8 px with a soft 0 1 4 shadow.
- Outline buttons 1 px solid main, white fill. Floating dock: radius 4 px, shadow `0 0 8px rgba(0,0,0,.25)`, white. FAQ rows hairline `#DDD`.

## (e) Imagery
- **IMAGERY: photo.** Main imagery is documentary-commercial photography in bright natural light (staff at a reception desk with a clipboard, a customer tapping a key card, a van loading, a clean corridor of boxes). One news thumbnail and one explainer card use line illustration (thin black outline, white ground, a single orange and blue accent); under 15% of image slots, so the theme stays photographic.
- Aspect ratios: hero slides 1:1 (540); feature card photos 376 x 212 = 1.77:1 (16:9) with top corners radius 8; gallery tiles 1:1 240 px with 12 px gap and a round plus chip bottom-right; news thumbnail 160 x 160 square, radius 8; guide cards have no photo, a round 72 px icon disc straddles the card's top edge.
- Position: hero strip full width under the header, 3-up; feature cards 3 columns; gallery row full bleed (edge to edge, partial tiles cut at the edges).

## (f) Decoration
- Numbered tile: 44 x 44 solid blue rounded-6 square with a white numeral 1-5 left of a two-line card title.
- Icon discs: 84 px solid orange circles with white line icons and 12 px labels, 2 x 3 grid in the warm panel; heading underlined by a 2 px orange rule.
- Fact bar: 590 x 78, solid blue, three cells (clock, building, truck icon) each with a two-line white label and a small orange "?" dot; 1 px light vertical dividers; overlaps the bottom edge of the hero strip by about 40 px, centered.
- Seals: two 134 px round badges (gold, navy) at the hero's top right (we do not make award claims).
- Section heads: centered, bold blue, 3 px-ish 480 px underline under the "five features" title.
- Step badges: 32 px orange rounded squares with numerals linked by a dotted orange line (we do not build a vertical timeline).
- Discount tag: small red pill above a heading.

## (g) Motion
- Hero: Swiper loop, transition 0s linear, autoplay slide moves about 54 px/s leftward (measured 217 px over 4 s); pause button bottom-right.
- Floating dock: `transform` slides from `translate(110%,0)` to 0 over .5 s (class toggled once the page scrolls past the hero); bottom 40 px, right 0.
- FAQ and "watch video" toggles: 0.3 s ease-in-out height; link hover opacity .8; button hover background .1 s.
- Gallery strip: Swiper autoplay with a pause button. No scroll reveal, no parallax, no counters.
