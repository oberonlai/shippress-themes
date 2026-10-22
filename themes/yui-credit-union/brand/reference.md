# Yui Credit Union: reference (draft, stage A)

## Sources (S5-Style, finance / professional category)
1. https://www.shinkin.co.jp/echishin/recruit/ (S5 id 11840): credit-union recruit site. Screenshot: ref/echishin-first.png. First screen is a 70% coral field with white-edged cut-out collage: NOT usable for colour/ layout (violates quiet-palette, collage and cut-out bans). Borrow only the floating white rounded header bar and small pill nav buttons + one solid pill CTA.
2. https://www.showa-sekkei.co.jp/ (S5 id 11861): editor note "large margins, thin rules, limited accent colour, one layout rule for text and photos". Screenshot ref/showa-first.png captured only the loading screen (logo + dashed progress line + "034%"); real page not captured headless. Structure read from HTML/CSS: sections Pick Up, Projects, Service, Company, Recruit, news; English display labels (Heebo) as section heads; ink #222222, ground #F2F0EF, one muted plum accent (logo ~#94486A).

## Technique candidates (fill final choice in design-spec)
- A. Floating white rounded header bar inset 36 px from viewport edges over the first screen, small outlined pill links + one solid pill (Echizen).
- B. Loading splash: logo + dashed hairline progress + 3-digit percent (Showa); could become a quiet first-load rule, use sparingly.
- C. Wide margins + 1 px hairline rules separating every section, English capital label per section head (Showa "Pick Up / Projects / Service / news").
- D. Pickup row: a few large photos with caption below, uniform ratio and uniform gutter (Showa) -> member stories.
- E. Small handwritten-style / italic serif accent word beside the big label (Echizen "Information").
- Credit-union adaptation idea: top/bottom halves first screen (photo inset on ground, rule line), calculator below fold (ruled panel, not a card).

## Colour (from Showa relationships, accent shifted to pine-leaf per plan #5E7350)
| Role | Hex | Share |
|---|---|---|
| Ground | #F2F0EF (stone, Showa) | ~65% |
| Ink / text | #222222 | ~25% |
| Panel white | #FFFFFF | (within ground share) |
| Accent | #5E7350 pine (small areas only) | ~6% |
| Highlight | #94486A plum at most as 2px details (optional) | <1% |
First-screen saturated area: Showa 0% (ground+ink only); Echizen 69.9% (rejected). Target Yui <= 8%, hard cap 15%.

## Final mapping (fill in stage B)
- Technique used 1: T1 floating white 8 px-radius header bar inset 36 px with two outlined pills + one solid pine pill (Echizen A), reused as the sitewide button system.
- Technique used 2: T2 ruled ledger head: 1 px rule + left-column '0n LABEL' + heading with one pine italic accent word (Showa C + Echizen E), every section on every page.
- Technique used 3: T3 uniform 3:2 pickup row with captions under a rule (Showa D): home services row, savings/loans/membership/stories inner pages. Support: Showa B dashed hairline fact line in the hero.
- Palette final: ground #F2F0EF ~60%, panel #FFFFFF ~18%, ink #222222 ~12%, rule #CFC9C4, pine #5E7350 <=5%, pine tint #E3E8DD <=2%, plum #94486A <1% (active nav / focus only). First screen saturated <=8%, cap 15%.
