# Shirabe Research: design spec (stage 1, binding for implementation)

Row b12-4 · editorial-magazine · nav centred · hero framed-window · page_structure metrics-ledger · font_direction **serif** · IMAGERY **photo** (low-key, row photo_direction).
Main reference (80 % similarity target): **W Bridge Advisory, https://wbridge-advisory.co.jp/** (tokens: `brand/reference-tokens.md`, screens `brand/ref/wb-*.png`, `scroll-wb-*.png`).
Secondary: **KVC Partners, https://www.kvcp.jp/** (only the grey inactive index list idea, see T3 inner pages).
Photos and copy are our own (Grok, brand.md). No asset, text or logo of either site is copied. Token references below are written as `[tok a]`…`[tok g]` = section (a)–(g) of reference-tokens.md.

---

## 1. Signature techniques (three, each obvious at a glance)

### T1. Split headline row + hairline, over a dark framed window that opens into an ink band (wb hero, https://wbridge-advisory.co.jp/)
- **Reference:** under the header, a short row: 3-line 50px headline in a 721px column on the left, a 1px vertical hairline (full 180px height) at x≈821, then a 460px column with a 14px lead and a 50px-tall outlined NEWS pill. 80px below, one 1340×900 ink media block fills the container; on scroll it widens to 100vw and the dark About band continues from it.
- **Ours (home, block 2+3):** identical geometry. Left column 721px (≈54 %): H1 3 lines serif. 1px hairline `rgba(34,30,31,.15)` 180px tall. Right column 460px: 2–3 line lead (0.875rem) + outlined pill "CURRENT STUDY │ Grocery co-op members, 2025 →" (50px tall, 1px ink outline, radius 3px). 80px gap, then the **framed window**: photo `p01` 1340×900 (3:2), radius 0, on an ink ground.
- **Opening into full bleed:** we cannot animate width with sp-* classes, so the window is placed on a split background: the Group behind it is white for the top 45 % and ink `#221E1F` for the bottom 55 %, so the window's lower half merges into the full-bleed ink "Brief" band below. Read on screen: a dark window that opens into a full-width dark band — the same effect as the reference after its scroll. Inside the window the photo moves with `sp-parallax` (see §7).
- **Do not dilute:** the hairline must be visible; the window must be at least 1340 wide at 1440 viewport and start within the first screen (top edge ≤ 500px at 1440×900); the ink must be `#221E1F`, not a grey.

### T2. 90px uppercase English section titles rising from a mask, with a small subtitle (wb "SERVICE", "CASE STUDY", "COLUMN")
- **Reference:** each section opens with an uppercase English word at 90px / line-height 1.0, which rises out of a mask line (translateY 100 %→0, 0.6s `cubic-bezier(.43,.05,.17,1)`), with a 12px grey eyebrow / local-language subtitle under it.
- **Ours:** every home section: **THE BRIEF · METHOD · IN NUMBERS · STUDIES · PEOPLE · FEES · CONTACT**. Instrument Serif 400, 5.625rem / 1.0, uppercase, letter-spacing 0.005em, ink (white on ink bands). Under it a 0.75rem Source Sans 3 600 eyebrow in `#A09E9F` (e.g. "01 — What a study is for"). Title Group gets `sp-reveal sp-reveal--wipe` (the clip is on the child, as the sp spec requires).
- **Do not dilute:** never smaller than 4.25rem on desktop; not sentence case; no boxes, rules or glyphs around it (boxed headings were Kazoe's).

### T3. "IN NUMBERS" ink band: giant figures with vertical captions on a loose grid, photos drifting past (wb numbers)
- **Reference:** ink band 100px padding, white label "… IN NUMBERS" 36px top-left, 150px figures (line-height 135px, ls −3px) each with a 14px vertical-rl caption to the left and a small unit after, scattered over a loose grid (not a row of cards); photos slide through on a slow linear marquee (12s / 16s).
- **Ours (home block 6):** "ONE STUDY, IN NUMBERS" label + subtitle "Grocery co-op members, 2025". Four figures in Instrument Serif 9.375rem / 0.9, ls −3px, white: **24** interviews · **3** cities · **41** hours of recordings · **6** findings. Each has a vertical-rl caption (0.875rem Source Sans 3, `#A09E9F`, ≥782px only) and a small unit. Loose grid on a 12-col layout: fig 1 cols 2–4 row 1; fig 2 cols 8–10 offset +160px; fig 3 cols 4–6 row 2; fig 4 cols 9–11 row 2 offset +120px. Below: `sp-marquee` strip of 4 fieldwork photos (`p07`–`p10`, 4:3, 360px wide, gap 40px).
- **Do not dilute:** figures ≥ 9rem desktop, loose staggered placement (not 4 equal cards, not a dashboard), ink ground.

### Continuation to inner pages (all of these must carry ≥2 signatures)
| Page | T1 (split row + window) | T2 (uppercase mask title) | T3 (figures / vertical captions) |
|---|---|---|---|
| About the practice | header: split row + 1340×560 window `p15` straddling into ink | ✓ "PRACTICE" | 4 practice figures (founded 2012, 7 people, 5-week study, 5 languages) |
| Method | split row + window `p05` | ✓ "METHOD" | stage durations as 150px figures with vertical captions |
| Studies (case list) | split row (no window) | ✓ "STUDIES" | each study row shows its 2 key figures 4.5rem with vertical captions |
| Study detail (×3) | split row + window (study photo) | ✓ | full IN NUMBERS ink band for that study |
| Fees | split row | ✓ "FEES" | ledger figures (prices) right-aligned |
| People | split row + window `p14` | ✓ "PEOPLE" | – ; grey inactive index list (KVC) for the 7 names |
| Contact | split row + window `p16` | ✓ "CONTACT" | – |
| Journal | split row | ✓ "NOTES" | – |

---

## 2. Key visual concept

### (1) Reference first screen — concept, story, signature motion
W Bridge Advisory opens quietly: white page, a short three-line statement on the left, a hairline, a small lead and a news pill on the right — then a large dark moving-picture window set into the page, showing the work (people at desks, hands over charts). Story: *a consultancy that makes problem-solving quick and human; the window opens onto the work itself.* Signature motion: as you scroll, the window grows to full bleed and becomes the dark About band; titles rise out of masks; numbers fly in and roll.

### (2) Our translation — market research firm
Same composition and motion concept, same image type (photography): a short serif statement and a lead above a **dark framed window that looks into a moderated customer interview** — low-key photograph, a moderator and a participant across a table, an open notebook, printed paper charts (abstract bars/lines, no legible text), a recorder. Story: *Shirabe Research sits across the table from your customers; the window opens onto the interview.* Motion: the photo drifts inside the window (sp-parallax), the window's lower half dissolves into the full-width ink "THE BRIEF" band, then uppercase titles rise from masks and one study's figures count up.

### (3) KV checklist (all visible in the 1440×900 first screen except where marked)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | 3-line 50px headline left + 1px hairline + small lead | H1 "We sit across the table / from your customers, / and bring back what they meant." Instrument Serif 3.125rem; hairline; 3-line lead 0.875rem | y 200–380, container 1340 | none (hero: no reveal) | – |
| 2 | Outlined 50px NEWS pill | "CURRENT STUDY │ Grocery co-op members, 2025 →" outlined pill linking to study detail | right column under lead | hover .3s ease, arrow shifts 4px | – |
| 3 | Dark 1340×900 media window showing the work | framed window, low-key moderated interview photo | top edge y≈460, full container width | sp-parallax `--sp-par: 10%` (mobile 6%) | `p01` |
| 4 | Window widens to full bleed into the dark About band | split background (white 45 % / ink 55 %) so the window merges into the full-bleed ink band | window bottom → band | parallax continues; band title wipes in below the fold | `p01` |
| 5 | Ink header strip + centred nav + ink pill button with arrow cell + 50px square menu | 6px ink rule at top of page; logo left, centred nav, "Request a proposal" ink button with 50px arrow cell, 50×50 outlined menu square (mobile only) | header 0–120px | hover .3s | – |

Note: stage-a suggested a centred narrow column for the headline; we keep the reference's split row instead because T1's hairline split is the most recognisable part of the wb first screen (80 % similarity target). The column stays narrow (721px, max 22ch per line).

---

## 3. Colour
Reference colours used as-is ([tok a]); row hex 紺鼠 `#4E5561` added as a quiet slate secondary (the reference has no accent; we need one tone for links/pills on paper bands without introducing saturation).
| Slug | Hex | Share (page) | Use | Source |
|---|---|---|---|---|
| base | `#FFFFFF` | ≈60 % | page ground | wb base [tok a] |
| ink | `#221E1F` | ≈25 % | text, window ground, Brief / Numbers / Contact bands, footer, buttons | wb ink [tok a] |
| paper | `#F2F1E9` | ≈8 % | Studies band, Journal, fee table header row | wb Column band [tok a] |
| muted | `#A09E9F` | text only | eyebrows, captions, inactive index | wb [tok a] |
| slate | `#4E5561` | ≤4 % | text links, pill hover fill, vertical captions on white, focus ring | row hex b12-4 |
| hairline | `rgba(34,30,31,.15)` / on ink `rgba(255,255,255,.18)` | lines | all rules | [tok d] |
- First-screen saturated share: **target <5 %, hard cap 15 %** (check-first-screen.py; row note cap 30 %). Only the photo carries colour; grade it low-saturation.
- No beige/cream as page ground (paper only as a band); no gradients.

## 4. Type (font_direction: serif)
- Latin headings: **Instrument Serif** 400 (+ italic for one word per section at most). Latin body/UI: **Source Sans 3** (variable 300–700).
- CJK (serif direction = Mincho for headings **and** body; no Gothic anywhere): **Noto Serif TC** (zh-TW), **Noto Serif JP** (ja), weights 400/600.
- Stacks (theme.json fontFamilies):
  - heading: `"Instrument Serif", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - body: `"Source Sans 3", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`
  - `:lang(ja)` puts Noto Serif JP before TC in both stacks; `:lang(zh-TW)` TC first. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- All faces via **theme.json fontFace** (woff2 in assets/fonts; zh-TW and ja subsets made with the Hokuto/Hada replacement method), so the block editor iframe and front end show the same fonts (check-editor-fonts.mjs, en + zh-TW).
- Scale (desktop; source token in brackets):
| Role | Size | Weight | Line-height | Letter-spacing | Source |
|---|---|---|---|---|---|
| figure (numbers) | 9.375rem (150px) | 400 | 0.9 | −3px | [tok b] numbers 150/135 −3px |
| display (uppercase section titles) | 5.625rem (90px) | 400 | 1.0 | 0.005em | [tok b] English title 90/90 |
| hero H1 | 3.125rem (50px) | 400 | 1.24 | 0.01em | [tok b] hero 50/62 (w800 → serif 400; weight replaced by serif contrast) |
| h3 / statement | 2.375rem (38px) | 400 | 1.4 | 0 | [tok b] H3 38/53 |
| card title | 2rem (32px) | 400 | 1.2 | 0 | [tok b] service 32/38.4 |
| body | 1rem | 400 | 1.8 | 0.028em | [tok b] 16/28.8 0.45px |
| small / lead | 0.875rem | 400 | 1.6 | 0.028em | [tok b] 14/22.4 |
| eyebrow | 0.75rem | 600 upper | 1 | 0.08em | [tok b] 12px grey |
| nav | 0.875rem | 600 | 1.2 | 0.028em | [tok b] nav 14/700 |
- Fluid: display `clamp(3rem, 2rem + 4.5vw, 5.625rem)`, figure `clamp(5rem, 3rem + 7vw, 9.375rem)`, H1 `clamp(2.125rem, 1.6rem + 1.6vw, 3.125rem)`. Max ≥4.25rem ✓.
- CJK: sizes ×0.75 on display/figure/H1, body line-height 1.85, no uppercase transforms on CJK strings (titles stay English in all languages, subtitle localised — like the reference). fr/de: `hyphens:auto`.

## 5. Spacing, shape, decoration ([tok c], [tok d], [tok f])
- Container 1340px (wide 1540px), side padding 50px (mobile 20px). Header height 120px desktop (ref 157px, reduced because the logo is a wordmark), 64px mobile, sticky with white ground and 1px hairline after 100px scroll.
- Section padding: 140px top/bottom (Studies, Journal), 100px (Numbers), 200px bottom on Brief band. Mobile: 72px.
- Radius: buttons, pills, images 3px; window 0. No shadows anywhere. Hairlines 1px.
- Buttons: 50px tall, ink fill, white label 0.875rem 600, a 50px arrow cell separated by 1px `rgba(255,255,255,.3)` rule. Secondary: 1px ink outline. Arrow-in-square link 50×50 outlined.
- Decoration: only hairlines, the vertical hairline in hero rows, vertical-rl captions, 6px ink top rule. Nothing else (no stamps, dots, glyphs, frames).

---

## 6. Home page

### First screen (1440×900)
0–6 ink rule · 6–126 header (wordmark "SHIRABE RESEARCH" Instrument Serif 1.375rem uppercase ls .12em left; centred nav: Method · Studies · Fees · People · Journal · About; right ink button "Request a proposal →") · 200–380 split row (T1) · 460–900 top 440px of window `p01`. Saturated share <5 %.
Mobile 390×844: header 64px (wordmark + 44px outlined menu square) · H1 2.125rem 4 lines · lead · pill (full width, wraps to 2 lines, no absolute positioning) · window 4:3 full-bleed starts ≈ y 560. Hairline becomes horizontal 1px between H1 and lead. No vertical text, no absolutely positioned labels.

### Block order
| # | Block | Layout | Images | Copy |
|---|---|---|---|---|
| 1 | Header | see above | – | – |
| 2 | Hero split row (T1) | 721 / hairline / 460 | – | H1 3 lines, lead 40–50 words, pill |
| 3 | Framed window (T1, KV) | 1340×900 on white/ink split ground, `sp-parallax` | `p01` | small white caption bottom-left inside a static layer: "Moderated interview, studio B" |
| 4 | THE BRIEF (ink band) | T2 title white; left 7 cols: statement h3 + 2 paragraphs (120 words); right 4 cols: portrait photo 4:5 radius 3, `sp-reveal--zoom` | `p02` | eyebrow "01 — What a study is for" |
| 5 | METHOD | T2 title; 2 columns 630px gap 80px, right column dropped 330px ([tok c]); 4 items: photo 8:7 radius 3 (`sp-reveal--zoom`), eyebrow "Stage 1/2/3/4" muted, title 2rem, 2-line text, arrow square | `p03` `p04` `p05` `p06` | Listen in person · Recruit the right twelve · Chart on paper, together · Read out, then write |
| 6 | ONE STUDY, IN NUMBERS (T3, ink) | loose grid 4 figures + vertical captions; marquee strip below | `p07` `p08` `p09` `p10` (marquee) | label + 1 sentence |
| 7 | STUDIES (paper band) | T2 title; ledger list of 3 rows: thumb 3:2 (360px) left · sector eyebrow · question as 2rem title · 2 small figures right · arrow square; hairlines between rows | `p11` `p12` `p13` | 3 studies (§9) |
| 8 | PEOPLE | T2 title; left 5 cols photo 4:5 of founder; right 7 cols: 70-word intro + 7-row name ledger (name 1.5rem serif · role · languages) with hairlines. Not a team grid. | `p14` | intro + 7 rows |
| 9 | FEES | T2 title; full-width ledger table (5 rows): study type · what you get · typical length · price (nowrap, right) | – | 5 rows + note "Prices exclude VAT and participant incentives" |
| 10 | CONTACT (ink band) | T2 title white; left: 2-line statement + 2 buttons (Request a proposal / Book a 30-minute call); right: address, hours, phone, email in hairline rows | – | ≈50 words |
| 11 | Footer (ink, continues band) | wordmark, nav columns, language switcher, © | – | – |
Home photo positions: p01–p14 = **14** (≥8 ✓), all distinct. Home copy ≥250 English words, ≥3 narrative paragraphs (Brief ×2, People intro, Contact).

### Comparison with recent themes
| Theme | Home order | Why ours differs |
|---|---|---|
| Sumika Residences | hero+info bar → intro pair → houses (sticky media) → glide strip → a day → parallax band → rates → how a stay works → voices → enquire | no sticky media, no info bar, no voices bubbles; ours is split row → window → ink brief → dropped 2-col method → numbers band → ledger lists |
| Fumi Press Launch | framed-window hero with crossing title + stamp → editions table → excerpt → waitlist (rail+frame) | Fumi's title crosses over the frame and has a stamp; ours has **no text on the window**, text sits above in a hairline split row, and the window dissolves into an ink band; no rail/frame, no stamp |
| Kazoe Books App | boxed stepped H1 on gradient → features → counters cards → … → FAQ | no boxed headings, no gradients, figures are a loose scattered grid on ink, not counter cards |
| Mado Air | dark top bar + sub-bar → product hero → why → how → dark macro band → specs → reviews → FAQ | only a 6px rule (no bar), no product hero, no FAQ on home |

---

## 7. Scroll effects and parallax (sp-scroll, classes from pipeline/scroll-effects-spec.md)
| Effect (source wb) | Ref trigger / time / ease | sp-* | Where | Our values |
|---|---|---|---|---|
| Titles rise from mask | scroll+rAF class, 0.6s, `cubic-bezier(.43,.05,.17,1)` | `sp-reveal sp-reveal--wipe` | every T2 title Group (home blocks 4–10, inner pages) | `--sp-dur: .6s`; easing var set to `cubic-bezier(.43,.05,.17,1)` in theme CSS variables only |
| Photos zoom in | class, 0.8s, `cubic-bezier(.6,.02,.38,1.04)`, scale 1.6→1 | `sp-reveal sp-reveal--zoom` | Method photos p03–p06, Brief photo p02 | `--sp-dur: .8s`, same easing (library scale 1.06→1 kept) |
| Numbers fly in + roll | class 0.6s same ease; slot roll ≈1s | parent `sp-stagger`, each figure `sp-reveal sp-reveal--up sp-count` | IN NUMBERS figures (home, About, study details) | `--sp-dist: 24px`, stagger 0.12s |
| Photo drift | slick linear 12s/16s | `sp-marquee` | IN NUMBERS strip p07–p10 | 40s linear loop (4 photos); children not sp-reveal |
| Window widens / photo moves | ScrollTrigger play/reverse 0.5s | **`sp-parallax`** | hero window (block 3) | see below |
- Hero gets **no** reveal. Fee table, forms and legal text get no sp-* classes. Ledger rows in Studies/People: `sp-stagger` + `sp-reveal--up` on rows (not in horizontal scrollers).
- **Parallax (required):** block 3 Group `.sp-parallax` (overflow clip), direct child `figure>img` = `p01`, `--sp-par: 10%` desktop, `--sp-par: 6%` at ≤781px (kept on mobile). Foreground: the static caption layer only (not inside the moving image). Reference counterpart: wb's media block that grows and plays as the page scrolls. Second parallax (inner): About page window `p15`, `--sp-par: 8%`. reduced-motion / `?sp-static` / editor: no movement. check-parallax.mjs must show ≥6px delta.

## 8. Responsive requirements
- 390px first screen: no vertical-rl text, no absolutely positioned labels over text; pill wraps inside flow; window caption is in flow under the window on mobile.
- IN NUMBERS: vertical captions only ≥782px; below that, caption horizontal above each figure, figures in one column, left aligned.
- Method: dropped-column offset only ≥782px; single column on mobile.
- Fee table (and any table): ≥782px the table is full container width (1340), columns 26 % / 44 % / 14 % / 16 %, price column `white-space:nowrap; text-align:right`, never clipped at 800px and 1280px. ≤781px each row stacks as a block (type as title, then description, then "Length — Price" line), no horizontal scroll.
- No horizontal overflow at 390 and 1280 (auto-gates).

## 9. Fixed numbers (identical on home, inner pages and all five languages)
- **Name / founded:** Shirabe Research, founded 2012. Qualitative-first market research: in-person moderated interviews, in-context visits, small follow-up surveys.
- **Location:** 4F, 27 Calder Street, Northbank (fictional), with interview studios A and B. **Hours:** Mon–Fri 9:00–18:00; interviews by appointment until 20:00 Tue/Thu; closed weekends and public holidays. Phone +00 20 7000 2712 (placeholder), studio@shirabe-research.example.
- **Process (5 stages, typical study 5 weeks):** 1 Brief (week 0, 90-minute meeting) · 2 Recruit (weeks 1–2) · 3 Interview (weeks 2–3) · 4 Chart on paper (week 4, team + client) · 5 Readout and written report (week 5).
- **Fees (5, USD, excl. VAT and participant incentives):**
  | Study | What you get | Length | Price |
  |---|---|---|---|
  | Discovery interviews | 8 one-to-one 60-min interviews, recordings, written report | 4 weeks | from $9,800 |
  | Concept test | 12 interviews with printed concepts and paper charts, readout | 5 weeks | from $12,400 |
  | In-context visits | 6 home or workplace visits, photo notes, report | 5 weeks | from $14,500 |
  | Interviews + follow-up survey | 12 interviews then a 400-person survey to size the findings | 7 weeks | from $18,900 |
  | Readout workshop | half-day session with your team on an existing study | 1 day | $2,400 |
- **People (7):** Clara Wendt — founder, principal researcher · Tomás Ibarra — head of fieldwork · Nadia Haddad — senior moderator · Jonah Mensah — survey and analysis lead · Ingrid Solberg — recruitment lead · Wei-Lin Chou — transcripts and translation · Rafael Duarte — studio manager.
- **Studies (3, clients anonymised):**
  1. Grocery co-op members, 2025 — "Why did members stop opening the app?" — **24 interviews · 3 cities · 41 hours · 6 findings** (home IN NUMBERS figures).
  2. Bicycle maker, 2024 — "What does a first-time buyer check before paying?" — 18 in-store visits · 2 countries · 9 findings.
  3. Library network, 2023 — "Who comes in after 18:00, and why?" — 32 interviews · 5 branches · 4 findings.
- No guaranteed outcomes, awards, real media or brands.

## 10. Inner pages (≥8; header of each = T1 split row, title = T2)
1. **About the practice** — window p15 + parallax; history 2012→; how we work (in person, small samples, paper charts); practice IN NUMBERS (2012 · 7 · 5 weeks · 5 languages).
2. **Method** — window p05; the 5 stages as hairline ledger rows with 150px stage number + vertical caption + duration (not a step grid); what the client sees each week.
3. **Services / Study types** — the 5 study types as dropped two-column list (T1-style shape from Method) with photos p03, p04, p06, p12.
4. **Studies** (archive) — paper band ledger list of the 3 studies (thumb, question, 2 figures).
5. **Study detail ×3** — split row + window (p11/p12/p13), brief, approach, IN NUMBERS ink band with that study's figures, 3 quoted (fictional, anonymised) participant lines, what the client changed (no outcome claims).
6. **Fees** — full fee ledger table, what is included, incentives, cancellation (10 working days), payment 50/50.
7. **People** — window p14; KVC-style index list: 7 names in 1.5rem serif, inactive grey `#A09E9F`, hovered/active ink; each opens a bio row (60 words, languages, years).
8. **Journal (Notes)** — paper band; post list with eyebrow date, serif titles, 3:2 thumbs; single post template with 680px text column.
9. **Contact / Request a proposal** — window p16; contact form (no sp-*), address, hours, map placeholder block (no embed), studio directions.
10. **Research ethics & privacy** — consent, recordings retention (12 months), incentives; plain text column.

## 11. Images (16, Grok, one at a time, read each; ≤300 KB, ≤2000px, 0 cut-outs)
Imagery: **photo** (reference wb is photographic) — real-photo STYLE, low-key per row photo_direction.
**STYLE:** `Low-key documentary photograph, soft single window light from one side, deep charcoal shadows, muted palette of graphite, slate blue-grey, warm grey and paper white, natural skin tones, 35mm lens at eye level, shallow depth of field, fine film grain, calm contemporary international studio or office interior, diverse adults in plain clothing, printed charts shown only as abstract bars and lines, no text, no numbers, no logos, no legible writing, no brands, no Japanese elements`
| ID | Subject / composition | Ratio | Used on | Home |
|---|---|---|---|---|
| p01 | Moderated interview across a wide table: moderator back-three-quarter left, participant right mid-gesture, open notebook, printed paper charts, small recorder; wide, dark surround | 3:2 | Home window (KV) | ★ |
| p02 | Researcher's hands writing in a notebook beside a recorder, close | 4:5 | Home Brief | ★ |
| p03 | Moderator listening, chin on hand, participant blurred foreground | 8:7 | Home Method 1; Services | ★ |
| p04 | Recruiter on a call at a desk with a printed screener sheet (abstract lines) | 8:7 | Home Method 2; Services | ★ |
| p05 | Two people pinning paper charts on a grey wall, overhead light | 8:7 | Home Method 3; Method page window | ★ |
| p06 | Small readout: three people around a table with printed charts, one presenting | 8:7 | Home Method 4; Services | ★ |
| p07 | Overhead: paper bar charts, pencils, sticky notes (blank) | 4:3 | Home marquee | ★ |
| p08 | Headphones and laptop with waveform (no text), transcript pages | 4:3 | Home marquee | ★ |
| p09 | Empty interview studio, two chairs, low table, window light | 4:3 | Home marquee | ★ |
| p10 | Hands sorting printed interview cards into piles | 4:3 | Home marquee | ★ |
| p11 | In-context visit: participant at a kitchen counter with a phone, researcher taking notes | 3:2 | Home Studies 1; Study 1 window | ★ |
| p12 | In a bicycle shop: researcher observing a customer checking a bike frame | 3:2 | Home Studies 2; Study 2 window; Services | ★ |
| p13 | Evening library reading room, researcher talking with a visitor | 3:2 | Home Studies 3; Study 3 window | ★ |
| p14 | Founder portrait, seated at a table with notebook, half-light | 4:5 | Home People; People window | ★ |
| p15 | Wide studio interior with long table and paper charts on wall, dusk | 3:2 (window 1340×560 crop) | About window (parallax) | |
| p16 | Studio entrance / reception, chairs, plant, soft light | 3:2 | Contact window; Journal default | |
Same page never repeats an image (Services uses p03 p04 p06 p12; Method uses p05 only in its window).

## 12. theme-meta tags (App labels only)
type `business` · colors `dark`, `monochrome`, `slate`, `muted` · style `editorial`, `photographic`, `quiet`, `professional`.

## 13. Similarity table (target ≈80 % to wbridge-advisory.co.jp)
| Dimension | Reference value | Ours |
|---|---|---|
| Colour | #FFFFFF 62 % / #221E1F 24 % / #F2F1E9 7 % / #A09E9F text / 0 % accent | same hexes, 60 / 25 / 8 %, + #4E5561 ≤4 % |
| First-screen saturation | 0.0 % | <5 % (photo only) |
| Hero layout | 721 col / 1px hairline / 460 col, then 1340×900 dark window 80px below | identical geometry |
| Hero type | 50/62 w800 ls 4px sans | 50/62 serif 400 ls .01em |
| Section titles | 90/90 uppercase grotesk + 12px grey eyebrow | 90/90 uppercase Instrument Serif + 12px #A09E9F eyebrow |
| Numbers | 150/135 ls −3px, vertical-rl 14px captions, loose grid, ink band | same values, 4 figures |
| Service list | 2 × 630px, gap 80, right column −330px offset, photo 8:7 r3 | identical |
| Body | 16/28.8, ls .45px | 16/1.8, ls .028em |
| Shape | radius 3px, 50px buttons with arrow cell, no shadow, 1px hairline | identical |
| Spacing | container 1340 (1540), side 50, sections 100–140, About bottom 200 | identical |
| Imagery | photography, people at work, ≥8 photos, no overlap | photography (low-key), 14 on home, no overlap |
| Motion | width-to-bleed 0.5s; title mask 0.6s cubic-bezier(.43,.05,.17,1); zoom 0.8s cubic-bezier(.6,.02,.38,1.04); numbers fly + roll; marquee linear | parallax window; wipe .6s same ease; zoom .8s same ease; stagger + count; marquee linear |
Deliberate differences: serif typography (row font_direction), low-key photo grading (row), slate secondary (row hex), window does not literally change width (sp-* constraint; split ground instead).

## 14. Home acceptance checklist
- [ ] 6px ink rule, centred nav, ink button with 50px arrow cell; one menu only.
- [ ] Split hero row with a visible 1px vertical hairline; H1 Instrument Serif 3.125rem, 3 lines.
- [ ] Window p01 ≥1340px wide at 1440, top ≤500px, lower part merges into full-bleed ink band; parallax moves ≥6px (check-parallax.mjs), none with reduced motion.
- [ ] Seven T2 uppercase titles at 5.625rem with wipe reveal.
- [ ] Method: 2 columns, right column dropped 330px, four 8:7 photos with zoom.
- [ ] IN NUMBERS ink band: 24 / 3 / 41 / 6 at 9.375rem, vertical captions ≥782px, loose grid, marquee of 4 photos.
- [ ] Studies ledger (3), People (photo + 7-name ledger, no team grid), Fees table (5 rows, full width ≥782, price nowrap right, stacked on mobile).
- [ ] ≥14 distinct photos on home, all from §11, same STYLE; no text/logos in photos.
- [ ] First-screen saturated share <5 % (≤15 % hard); fonts identical in editor and front end; max size ≥4.25rem.
- [ ] 390px: no vertical text or overlapping labels in first screen; no horizontal overflow.
- [ ] Numbers, prices, names, hours match §9 everywhere.
- [ ] auto-gates.mjs `… en … 1 1` pass=true.
