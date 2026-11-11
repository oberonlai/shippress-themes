# Senbatsu Partners 1.0.1 — hero redesign (local draft)

## Plan
1. RED: source contracts for no floating role card, opaque navy/no photo wash, auto-height headline, direct CTA group, consistent inner hero and patch version.
2. GREEN: replace only hero/header/inner-hero presentation; keep literal blocks, existing translations and form handling.
3. Review: inspect diff and all locale text/CTA sizing. Run theme, pattern, form and local WordPress gates.
4. Verify desktop + 390/360 mobile in en, zh-TW, ja, fr, de; refresh screenshot only after review.

## Acceptance
- No ROLE BRIEF hero card in any language, no floating replacement.
- Opaque deep navy and natural photo; heavier Instrument Sans headline; brick CTA without grey holder.
- Clearly secondary header action; readable navigation without overlap.
- No fixed hero height, clipping, blur, or horizontal overflow. Full-width wrapping mobile CTAs.
- Inner photo heroes use same straight navy/photo split and brick rule.
- Contact/newsletter forms, translation keys, below-fold CTA holders remain unchanged.
- External issue/PR/release/App/landing/deploy await owner authorization; never hand-push release tags.

Risk: medium visual, low runtime; no form or import behavior changes intended.

## Budget and review
- Scope: hero/header/inner-hero CSS, shared literal front hero, patch metadata/index, readme, one regression test and this spec (7 tracked paths). No dependencies, public API or form changes.
- Risk quadrant: low runtime risk / familiar WordPress CSS; light white-box diff review plus source and runtime smoke tests. Visual acceptance is still mandatory before release.
- Separate cleanup review removed obsolete brief-card styling, checked mobile cascade/long-label auto-height and retained below-fold/form holders.

## Actual verification
- RED recorded before implementation; GREEN: 9/9 standard-library unit tests.
- pattern_source.py PASS; check-themes-own.mjs PASS; PHP syntax PASS; git diff --check PASS.
- repo gates labels/tags/woo/themes/import2/nowoo PASS (dry run, no commit/push); no WooCommerce dependency, 18 HTTP pages OK, zero PHP warnings, second import created zero duplicates.
- Fresh WordPress fixtures in en/zh-TW/ja/fr/de: localized home and newsletter hero rendered; no role card; contact/newsletter fallback runtime PASS in all five.
- A discarded experiment switched languages in an existing fixture; importer correctly retained old form attributes, so fresh per-locale fixtures were used instead. No theme behavior changed to bypass that test.
- NOT verified: browser screenshots at desktop/360/390, live site, editor block validity, real iPhone Safari, installed CF7/WPForms. Theme screenshot.png has not yet been refreshed.
- Local Sonnet CLI attempt failed before reading/writing code with 401 Invalid API key. No credential accessed, no alternate auth attempted. Local patch authored by coordinator instead.
- No issue, PR, push, merge, tag, release, App update, landing update, deployment or notifications performed.
