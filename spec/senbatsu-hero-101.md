# Senbatsu Partners 1.0.1 — premium executive-search hero

## Plan
1. RED: regression contracts for no floating role card, opaque navy/no photo wash, content-driven headline height, direct CTA group, consistent inner hero and patch version.
2. GREEN: replace only hero/header/inner-hero presentation; retain literal blocks, existing translations and form handling.
3. Review: inspect diff and locale text/CTA sizing; run theme, pattern, form and real WordPress gates.
4. Verify desktop 1440 and mobile 390/360 in en, zh-TW, ja, fr, de; refresh theme and catalogue screenshots before release.

## Acceptance criteria
- Given any locale, when the home hero renders, then no floating ROLE BRIEF card or replacement overlay appears.
- Opaque deep navy, natural full-strength photo, heavier Instrument Sans headline and direct brick CTA without a grey frame.
- Clear primary/secondary navigation hierarchy; all sections remain reachable.
- Content-driven height with no blur, clipping or horizontal overflow; full-width wrapping mobile CTAs.
- Photo inner heroes use the same straight navy/photo split and 80x2 brick rule.
- Contact/newsletter form contracts and below-fold holders remain unchanged.
- Versioned release through ordinary PR/CI, never a hand-pushed release tag.

## Scope and risk
Budget: eleven tracked paths covering hero presentation, palette/metadata/index/readme, this plan and one CI regression test. No new dependencies or public interfaces. Low runtime risk / familiar WordPress CSS: light white-box review plus source, runtime and visual acceptance.

## Test and review record
- Source contracts initially RED before implementation, then 9/9 GREEN; migrated to Node built-ins in scripts/senbatsu-hero.test.mjs and added to normal theme CI.
- Separate cleanup review removed obsolete card styling; reviewed mobile cascade/long-label auto-height and unchanged below-fold/form holders.
- pattern_source.py PASS; check-themes-own.mjs PASS; PHP syntax PASS; git diff --check PASS.
- Dry-run repo gates labels/tags/woo/themes/import2/nowoo PASS: 18 HTTP pages OK, zero PHP warnings, no duplicates on second import.
- Fresh WordPress fixtures in en/zh-TW/ja/fr/de: localized home/newsletter hero rendering and contact/newsletter mailto fallback runtime PASS.
- Visual acceptance: 60 real-WordPress cases across five locales at 1440/390/360px (static home, motion, reduced motion, and newsletter inner hero); no overflow, clipping, overlapping header/title, broken image or floating card. Screenshots visually reviewed before push; screenshot.png refreshed.
- First-screen saturation: 4.3% (design limit 12%); editor parser: 26 documents, zero invalid blocks.
- Normal theme regression suite: 117 passed, zero failed, one existing skipped test.
