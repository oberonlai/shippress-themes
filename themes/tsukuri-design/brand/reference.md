# Reference research - Tsukuri Design Office

Source: S5-Style gallery (category pages for lifestyle goods, manufacturing and interior/furniture; style filter photography). Reference sites chosen after excluding every domain in the used-reference list.

## Primary: https://ishigami.studio.site/ (product designer portfolio, one case study)
First screen (1440x900): a pale warm-grey title strip across the top 39% carrying a widely tracked light slab name and a grey role line at left, a thin two-line burger at the right; below it a lighter stage with a centred tracked label "CASE STUDY" over a 30px hairline, and the top of a pale object photographed on white rising into the fold. Quiet, almost no colour. Saturated share 0%.
Screens: ref/ishigami-first.png, ref/scroll-ishigami-900.png, ref/scroll-ishigami-1800.png, ref/scroll-ishigami-3600.png, ref/scroll-ishigami-reveal-before.png / -after.png.

Signature candidates:
1. Tonal title strip: a flat pale band for the top ~39% holding only name + role, the white stage under it starting at the seam.
2. Spec-caption row under a centred object photo: narrow left block (name, tiny Latin name, category, maker link) and a ~470px paragraph on the right, 28px line pitch, no rules.
3. Twin 3:2 photo pair with micro-labels above ("Use Case 1 / 2", "Details / Colors") and a one-line caption below, 72px margins, 26px gap, flush rectangles.
4. Widely tracked (0.8em) caps label over a 30px hairline, used as every section opener.
5. Text column on the left, hand-in-frame photo bleeding off the right edge ("CONCEPT" block).

## Secondary: https://e-imt.co.jp/ (precision product site)
First screen: full-bleed pale machine photograph with a white floating nav pill (language chip left, logo centre, square burger right), two small grey chips top right, a very large light sans word crossing the photo and a small two-line brief bottom-left. Scrolling: the photograph veils into the paper colour, then a dark #202835 band with white feature copy. Saturated share 6.6%.
Screens: ref/imt-first.png, ref/scroll-imt-900.png, ref/scroll-imt-2700.png, ref/scroll-imt-3600.png.
Candidates: white centred nav pill with square burger; paper-to-photo veil; dark navy closing band with numbered feature labels ("Feature 01", 18px) and 24px titles.

## Palette decision (similarity target 80%)
Reference grounds are near-neutral. Ours keeps the ratio and replaces the warm beige with a mauve-grey from the row hex #A89DAC, lightened: title band #E9E6EB (39% of first screen), stage #F6F6F7 / #FBFBFC, ink #2A3141, body #5F6068, mauve accent #A89DAC only for the 30px hairline, small tags and focus rings, dark closing band #202835. First-screen saturated share target <= 5%.

## Scroll effects recorded
See stage-a.md table. Primary: IntersectionObserver class "appear" (opacity 0→1 + 20px rise, 0.6s ease). Secondary: GSAP ScrollTrigger + Lenis (0.6s cubic-bezier(0.16,1,0.3,1)); paper-to-photo veil.
## Ours (finished-theme mapping, binding detail in design-spec.md)
| Reference element | Source | Ours in Tsukuri Design Office |
|---|---|---|
| Pale title strip (39% of first screen) + name/role at x 144 | Ishigami first screen | T1: #E9E6EB strip y 0-352, H1 "From foam model to factory floor" Inter Tight 300 4.5rem at x 144, role line; inner pages open with a 300px strip |
| Object photo rising into the fold | Ishigami first screen | P01 (hands turning a foam handset) straddling the seam x 760-1344, y 150-640; P02 foam-model row cut by the fold |
| Wide-tracked label over a 30px hairline | Ishigami section labels | Every section opener: 1.125rem caps ls .8em + 30x1 #A89DAC hairline |
| Spec-caption row under a centred object photo | Ishigami caption row | T3: home Problem, Method (4 rows), Products (3 rows); Medical, Consumer, Model shop, Studio pages |
| Twin 3:2 photo pair with micro-labels above, caption below | Ishigami use-case/detail rows | T2: home Proof (cases A, B before/after); Work (4 pairs), Method, Model shop, single posts |
| White centred nav pill with square button | IMT header | Single white pill 760x52 r8, wordmark, 5 links, square "Start a project" |
| Photo veiling into paper on scroll | IMT hero | sp-parallax on P01 (10%), P02 (6%) and the full-bleed model-shop band P05 (10%) |
| Dark #202835 band | IMT | H7 statement band "Why foam" + footer |
| appear: opacity + 20px, 0.6s ease | Ishigami runtime | sp-reveal--up with --sp-dur .6s, --sp-ease ease, --sp-dist 20px; sp-stagger on caption rows and pairs |
