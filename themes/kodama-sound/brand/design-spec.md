# Kodama Sound — design spec (stage 1, design director)

Type: **portfolio** (WooCommerce not used). Industry: a **sound designer and composer studio for film and games** (original score, foley, re-recording mix). Theme buyers: freelance sound designers, composers and audio post houses pitching to directors and game studios.
Primary reference: **https://ondocollective.jp/** (S5-Style; a quiet creative collective; photo-led, deep ground / pale band alternation, one hand-drawn hairline scribble with dot terminals, narrow centre "sliver" photographs, right-flush tag lists). Secondary: **https://www.nsl-jp.com/** (a film / TV music and sound-effects house; structure only: the ruled two-column works sheet and the fixed dark bottom-right tab).
Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/ondo-first.png` (1440×900), `ref/wheel-ondo-1…6.png`, `ref/scroll-ondo-before/after.png`, `ref/nsl-first.png`, `ref/scroll-nsl-900/1800/2700/3600.png`.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string, **low-key documentary** (row `photo_direction: low-key`; T(e)). 0 cut-outs.
Font direction: **sans** (row `font_direction`). Latin display **Instrument Sans**, Latin body / UI **Figtree** (row fonts). zh-TW / ja headings and body **Noto Sans TC / Noto Sans JP** (hei / gothic); no Mincho / serif anywhere. Details §6.
Similarity target: about **80%** to Ondo in palette relationship, image treatment, motion, decoration and layout rhythm. Photographs, copy, project names, the monogram, the trace-line path and the wordmark are ours; no asset, text, scribble path or logo of either reference is reused.
Row constraints honoured: archetype **single-column-longform**, page_structure **alternating-longform** (deep / pale bands alternate; photographs alternate flush-right / flush-left; project sheets alternate panel right / left), first_screen **centered-narrow-column**, hero **framed-window**, nav **split**, exactly one top menu, first-screen saturated share ≤15% (row cap 30%).
Class prefix: `kd-`. Pattern slugs `kodama-sound/<name>`.

---

## 1. Signature techniques (3, obvious at a glance; none may be softened)

### S1 (stage-a T1): The trace line — one continuous 1px hand-drawn scribble with 8px dot terminals, crossing the whole first screen
- **Source**: Ondo hero, https://ondocollective.jp/ (`ref/ondo-first.png`, `ref/wheel-ondo-1.png`). A single white hairline (≈1px, `rgba(255,255,255,.7)`) drawn like handwriting: long shallow sweeps with 6–8 small tight loops (radius 25–70px), entering from the left viewport edge low, rising across the top third, looping round the centred "O" monogram and leaving through the right edge; a second strand sweeps along the bottom behind the statement. Two **solid white dots 8–10px** sit on the line as terminals and travel along it; the line draws itself on load (T(f), T(g)).
- **Ours (home §1)**: an inline SVG `kd-trace` (`aria-hidden="true"`, `pointer-events: none`, `pathLength="1"`) that reads as a **recorded waveform / mic cable**: it starts at the cable of the boom microphone *inside* the framed photograph, leaves the frame through its right edge at y≈420, makes two loops (r 40 / 64px) in the right ground, climbs and exits the right viewport edge at y≈180; a second strand leaves the frame's left edge at y≈470, makes three loops (r 30 / 52 / 70px) descending to the left edge at y≈700. Stroke **1px `rgba(244,241,245,.7)`**, `fill: none`, `stroke-linecap: round`. Two dots **8px `#F4F1F5`** on the path at (x≈214, y≈548) and (x≈1290, y≈236) of a 1440×788 viewBox. Exact motion in KV §3 and §7.
- **Never soften**: it is **one** continuous hand-drawn line with loops (not a straight rule, not a sine wave, not a dashed line); it **crosses the frame edges** (it is drawn over the photo frame, not cropped to the ground); it spans the full viewport width on desktop; the two dots stay solid and 8px; opacity stays .7 on deep ground (never below .55).
- **Repeats** (continuity): a faint short strand (320×40, opacity .35) at the top of home §2 (Ondo repeats it at the foot of the hero); a 160×24 mauve trace glyph before each "Sounds recorded" line on the credit sheets (S3); the same SVG family crossing every inner-page window head.

### S2 (stage-a T2): The three-zone row — left two-line thought + lede, a narrow tall sliver photograph in the exact page centre, a right-flush stacked list at the right gutter
- **Source**: Ondo process block (`ref/wheel-ondo-6.png`), on the pale band `#F3E5DE`: at the top, a **solid deep-green sliver 184×295** exactly centred (x628–812 at 1440); 144px below, the row: left (x25) a two-line display thought 59.7px / 1.2 / −0.02em, weight 400, then a 15px lede and a short 5-line paragraph (lh ≈1.85); centre a **photo sliver 184×295 (0.62:1)** at the same x; right a stacked list of 5 service tags, 12–13px, **right-aligned flush to the right gutter** (x 1416), vertically centred on the sliver. Huge empty space between the three zones is the point (T(c), T(e), T(f)).
- **Ours (home §5, "How scoring and mixing are scheduled")**: on pale `#F1E8F3`: top sliver = **solid mauve `#95859C` block 184×295** centred; 144px below, the row: left thought **"Spot it, record it, / then score and mix it."** Instrument Sans 400 **3.75rem / 1.2 / −0.02em** `#231A2C`, max 600px; lede Figtree 500 .9375rem "How scoring and mixing are scheduled"; ¶ ≈70 words Figtree 400 .9375rem / 1.9, max 420px; centre **P04 sliver 184×295** (`width: 12.8vw; min-width: 150px; aspect-ratio: .62`); right list, Figtree 400 .8125rem / 1.6, `text-align: right`, flush to the 24px right gutter: "Spot · day 1" / "Record · weeks 1–2" / "Score · weeks 2–6" / "Mix · weeks 6–8" / "Deliver · week 8". Under the row (left column) link "The full schedule →" → `/process/`.
- **Never soften**: the sliver stays narrow (≤13vw) and tall (0.62), in the **exact** horizontal centre, with nothing beside it but empty ground; the list stays right-aligned against the right gutter (not centred, not in a card, no bullets, no icons); the solid mauve sliver above stays (it is the "silent frame" before the photo); no rule boxes, no cards.

### S3 (stage-a T3): The credit sheet — ruled two-column project entries with key/value underlines and a tinted panel holding an inset still
- **Source**: NSL works list, https://www.nsl-jp.com/ (`ref/scroll-nsl-1800.png`, `scroll-nsl-2700.png`): each work is a 660px cell: a **2px rough-edged ink top rule** across the whole cell; left half: a small `# film`-type tag (10.5px), a 20px title, then key/value rows (10.5px keys left, values right) each with a **1px underline**; right half: a **tinted panel `#F4F3F1`** (≈307×205) holding an inset poster centred with generous margin. Rows ≈205px tall, gap 30px (T(c), T(d)).
- **Ours (home §3, "Projects, one at a time.")**: single column (row archetype): each project is **one full-container entry 1320px** (x60–1380) split 50 / 50: text half = grid `160px 1fr` (tag column + content), panel half = tinted panel `#E8DCEB` 660×460 holding an inset still (0.8, 288×360) centred. **Entries alternate**: 1 and 3 panel right, 2 and 4 panel left (= alternating-longform). Each entry: **2px `#17141A` rough top rule** (an SVG `background-image` of a 2px line with ±0.6px irregular edge, repeat-x, so it reads hand-printed), padding 28px 0 72px; tag `# Feature film` Figtree 500 .75rem `#5E5266`; title Instrument Sans 500 **1.75rem / 1.15 / −0.01em** `#17141A`; four key/value rows (key Figtree 500 .6875rem uppercase ls .08em `#5E5266`, width 120px; value Figtree 400 .9375rem `#17141A`; **1px `rgba(23,20,26,.22)` underline** per row, padding 7px 0): Format · Role · Delivered · Runtime; then the **"Sounds recorded"** line: S1 trace glyph 160×24 (1px `#95859C`) + one sentence Figtree .9375rem / 1.75 (e.g. "Tidal flats at low tide, 02:40, nine nights at 96 kHz."). Four projects (§9). Link at the end, right-aligned: "All projects →" `/projects/`.
- **Never soften**: the top rule stays 2px, ink, rough-edged, full entry width; key/value rows keep their 1px underlines; the panel stays a flat tinted rectangle (no shadow, no radius, no border) with the still **inset**, never full-bleed in the panel; tags keep the `#` prefix.

### Supporting (not counted)
- **T4 NSL fixed dark tab** (`ref/scroll-nsl-1800.png`, bottom-right): ours `kd-tab`, `position: fixed; right: 24px; bottom: 24px`, **270×60**, `#2A2530` with 1px `#95859C` border (visible on both grounds), radius 0: left a 28×12 trace glyph, label "Send a cut" Instrument Sans 500 1rem `#F4F1F5` + second line Figtree .6875rem `#C9A9C0` "Reply within 2 working days", right a 24px circle-outline arrow. Link `/send-a-cut/`. **≥782px only** (hidden below; the mobile menu and home §8 carry the CTA). It is a link, not a second menu.
- **T5 Ondo flush photographs** (`ref/wheel-ondo-3.png`, `wheel-ondo-5.png`): photographs flush to a viewport edge, the next one entering from the opposite side lower down (home §2 and §6).

### Continuation on inner pages (≥4 required; here 8)
| Page | S1 trace line | S2 three-zone row | S3 credit sheet | T4 / T5 |
|---|---|---|---|---|
| Projects | window head with trace crossing P09 | — | **4 full entries** (P05–P08, alternating) + "Earlier work" ruled list (8 titles, rough 2px rule, key/value rows, no panel) | tab |
| Sounds | window head (P10) + a short trace strand between each recording row | **6 rows**, one per recording place (3 with photo slivers P03 / P11 / P15, 3 with solid mauve slivers); right list = date · time · sample rate · mics | — | tab |
| Services & rates | window head (P14) | — | **3 service sheets** (Score P13, Foley P11, Mix P02) with key/value rows (Typical length · Included · From) + price table §8 | tab |
| Process | window head (P16) | **5 stage rows** (Spot solid · Record P03 · Score P04 · Mix P02 · Deliver solid), right list = what you send / what we send | — | tab |
| Studio (about) | window head (P12) | 1 row: "Two rooms, one field kit." with P13 sliver; right list = rooms and kit | milestones as a credit sheet (key = year) | — (text only) |
| People | window head without photo: trace only | — | **7 people as credit entries** (tag = role, title = name, keys: With the studio since · Works on · Records) no panel | tab |
| Send a cut | window head (P17) | — | brief as a sheet (keys: Send · Tell us · Reply · Hours) above the form slot | the tab rendered large inline |
| Journal / posts | trace strand above the post title | — | post meta as key/value rows (Published · Category · Tags) | — |
**Window head** (`kodama-sound/window-head`, the inner version of the hero): deep `#231A2C`, padding 72px 24px 96px; centred label Figtree 500 .75rem uppercase ls .12em `#95859C` (page name); H1 Instrument Sans 400 **4.25rem / 1.08 / −0.03em** `#F4F1F5` centred, max 900px (mobile 2.5rem); ¶ lede Figtree 1.0625rem / 1.8 `#D9D2DC` max 560 centred; then a **framed window** `min(720px, 88vw)` 16:9: 1px `rgba(244,241,245,.5)` frame with 10px padding, photo `object-fit: cover` inside, wrapper `sp-parallax` `--sp-par: 6%` (mobile 4%); the narrow trace SVG crosses the frame edges (same stroke, 2 dots). Pages without photo (Contact, People, Room Tone, Privacy): label + H1 + lede + trace only, no window.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it draws**: a full-bleed, heavily blurred macro photograph of green foliage (a video loop) filling the screen; at the top centre a line-drawn round "O" monogram (≈110px) with the two-line wordmark "Ondo / collective"; one hand-drawn white hairline scribble looping across the whole screen, passing behind the monogram, with two small solid white dots on it; at the bottom centre a two-line statement "We weave context" (48px, light) and two short caption lines (14px). Nav top-right in small caps; "+ Sections" micro-control bottom-right.
- **Story**: before anything becomes words there are traces — unseen, present. The collective gathers them quietly and lets a form emerge: "from a point, to a line; from one, to connection". The scribble *is* that line being drawn from a point.
- **Signature motion**: on load the white line **draws itself** and the dots travel along it (`back.out(1.2)` pop); on scroll the hero photo is pinned and **scrubbed** (GSAP ScrollTrigger `scrub: true`, `start "top top"`, `end "bottom top"`, ease none) while the image desaturates from green to grey and the next deep band slides over; text then rises in (power3.out .5–1s, stagger .08) (T(g)).

### (2) Our scene (same composition, same motion idea, same image type: one low-key photograph)
A sound designer **records the world before scoring it**. On the aubergine-black ground, in a centred narrow column under the split nav and our round line monogram: a **framed low-key photograph** — the designer at dusk holding a boom microphone in a furry windshield low over a rain puddle on an empty street, a field recorder on a shoulder strap glowing with a small amber level meter, the city lights blurred in the reflection (shallow depth of field, mauve-grey grade = Ondo's blurred macro, made specific to sound). The **trace line** is the recorded sound: it leaves the mic cable inside the frame and loops out across the ground like a waveform, two dots on it. Under the frame the statement **"We record the world / before we score it."** and the caption "Score · foley · mix — for film and games". Motion: the trace line **draws itself** from the microphone outwards, the dots pop in at its ends; on scroll the photograph moves slower than the frame (parallax = Ondo's pinned scrub, without a library). Same composition (centred monogram top → one photograph → hairline scribble with dots over everything → two-line statement + caption at the foot), same motion idea (line drawn from a point, photo moving under the page), same image type (a single soft photograph).

### (3) KV checklist (all built in the home first screen, visible at 1440×900)
| # | Reference element | Our equivalent | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed blurred macro photograph (green foliage video) | **Framed low-key photograph**: designer with boom mic over a puddle at dusk, field recorder glowing amber on a strap; inside a 1px `rgba(244,241,245,.5)` hairline frame with 12px padding (hero = framed-window) on deep `#231A2C` | centred; outer frame x348–1092, y128–632 (744×504); image 720×480 (3:2) | `sp-parallax` on the frame wrapper, `--sp-par: 8%` (mobile 6%) — Ondo's pinned scrub | **P01** |
| 2 | Line-drawn round "O" monogram + wordmark, centred top | our **round line monogram** (own SVG: an open circle 1.25px stroke with a small inner arc = an echo ring, plus a lowercase "k" drawn in one stroke) 56px + wordmark "Kodama Sound" Instrument Sans 500 1.125rem ls −0.01em `#F4F1F5` under it, inside the **split nav** (3 links left, 3 right) | top centre, monogram y20–76, wordmark y84–106; links y≈52 | none | — |
| 3 | Hand-drawn white scribble loop with two dot terminals | **trace line** (S1): one 1px `rgba(244,241,245,.7)` path starting at the mic cable inside the frame, crossing both frame edges, 5 loops, exiting both viewport edges; dots 8px `#F4F1F5` | full hero, viewBox 1440×788 over y112–900; dots at (214, 548) and (1290, 236) | draws in: `stroke-dashoffset 1→0`, **2.4s `cubic-bezier(.22,1,.36,1)`, delay .2s**; dots pop `scale(0→1)` .5s `cubic-bezier(.34,1.56,.64,1)` (≈back.out(1.2)) at 2.2s / 2.4s; CSS only | on P01 frame |
| 4 | Two-line centred statement + small caption at the foot | H1 **"We record the world / before we score it."** Instrument Sans 400 4.5rem / 1.08 / −0.03em `#F4F1F5`, centred, max 860px; caption Figtree 500 .8125rem uppercase ls .12em `#95859C` "Score · foley · mix — for film and games" | H1 y664–820 (x≈300–1140); caption y840–858 | none (hero has **no** reveal) | — |
| 5 | Small-caps top nav | split nav, one `core/navigation`: Projects · Sounds · Services ‖ (monogram) ‖ Process · Studio · Journal; Figtree 500 .8125rem uppercase ls .02em `#F4F1F5`, current page `#95859C` (Ondo grey current) | left group from x24, right group ends x1416, y≈52 | hover: 1px underline grows `scaleX 0→1` .3s `cubic-bezier(.4,.4,0,1)` | — |
| 6 | "+ Sections" micro-control | "+ Index" micro label (Figtree 500 .75rem `#F4F1F5`, "+" glyph) linking `#projects`; plus the fixed NSL dark tab "Send a cut" bottom-right (T4) | "+ Index" bottom-left x24 y≈868 (≥1024 only); tab x1146–1416, y816–876 (≥782 only) | "+ Index" none; tab hover background `#352F3B` .3s | — |
All load animations live in theme CSS inside `@media (prefers-reduced-motion: no-preference)` with selectors starting `html.sp-js:not(.sp-no-motion)`; the **final state (line fully drawn, dots visible) is the default** without JS, in `?sp-static`, under reduced motion and in the editor. Stage-a's 7th idea (grade shift from amber to grey on scroll) is **dropped**: sp-parallax only moves the layer (transform), and a custom scroll-driven filter is not allowed.

---

## 2. Home copy target
≈ **720 English words**; ≥3 narrative paragraphs ≥20 words (§2 ×3, §5 ¶, §6 ¶, §7 ¶, §8 ¶). No guarantees, no awards, no festival laurels, no real films, games, studios, broadcasters or brands. Tone: quiet, exact, first person plural; numbers instead of adjectives.

## 3. Home page: block order

Grounds alternate deep `#231A2C` (D) / pale `#F1E8F3` (P) like Ondo's bands. Container: hero, band, flush photos and footer are full-bleed; wide container **1320px** (x60–1380) for credit sheets; gutters **24px** (T(c)); narrow text column **560px** centred (§7, §8) or starting at 42.6% (§2, Ondo x614). Section padding desktop **144px top / 240px bottom** (T(c) 100–165 / 205–410), mobile 72 / 112.

| # | Block (pattern) | Ground | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|---|
| 0 | `header` | D | one top menu, split | height 120, in flow (not sticky), transparent on D. One `core/navigation` with 6 links; CSS: container `display:flex; justify-content:space-between`, `:nth-child(3){margin-right:auto}`, `:nth-child(4){margin-left:auto}` leaving a 280px centre gap; brand link (monogram SVG + site title) centred `position:absolute; left:50%; translate:-50% 0` ≥1024. <1024: brand left in flow, "Menu" button right → overlay `#231A2C`, links Instrument Sans 400 2.5rem `#F4F1F5` | — | labels |
| 1 | `hero` (KV) | D | key visual | KV §3; nothing else (no form, table, search, button row) | **P01** | H1 + caption |
| 2 | `field-first` | D | who we are (3 ¶), Ondo intro | faint trace strand 320×40 opacity .35 centred at top; label "01 — Field first" .75rem `#95859C`; text column from **x = 42.6%** (614 at 1440), max 560: ¶1 Figtree 400 **1.25rem / 2.0** ls .01em `#F4F1F5` (≈60 words: we go out with a recorder before we write a cue), ¶2, ¶3 1.0625rem / 1.9 `#D9D2DC` (≈55 each: what a spotting session is; two rooms and a field kit). 120px below: **P02 flush right** `width: 39.4vw` (567/1440), 3:4; **P03 flush left** `width: 31.25vw` (450/1440), 0.68, its top 280px below P02's top (enters from the opposite corner, T(e)); captions under each, Figtree .75rem `#95859C` ("Headphones on, 23:40, the last pass of a mix." / "A hydrophone under a jetty, 05:10, 96 kHz."); link "About the studio →" `/studio/` | P02 P03 | ≈170 words |
| 3 | `projects` (S3) `id="projects"` | P | projects told one by one | §1 S3: H2 "Projects, one at a time." Instrument Sans 400 **3.75rem / 1.2 / −0.02em** `#231A2C` at x60 + right-aligned meta "4 of 64 since 2015" .8125rem `#5E5266`; four credit-sheet entries alternating panel side | P05 P06 P07 P08 | H2 + 4 × ≈45 words |
| 4 | `band` | D (photo) | full-bleed parallax photograph | full-bleed, height **640px** (mobile 440), Cover with **P09**, `sp-parallax --sp-par: 10%` (mobile 6%), scrim `linear-gradient(180deg, rgba(29,26,33,.25) 0%, rgba(29,26,33,.72) 100%)`; centred at the bottom (padding-bottom 72): Instrument Sans 400 **3.75rem / 1.15 / −0.02em** `#F4F1F5` "Every room has a tone. / We record it first." + one sentence Figtree 1.0625rem `#D9D2DC` max 520 ("The mix stage, the foley pit and a field kit that fits in one bag.") | P09 | ≈25 words |
| 5 | `schedule` (S2) | P | how scoring and mixing are scheduled | §1 S2 (solid mauve sliver, then the three-zone row) | P04 | ≈90 words + 5 list items |
| 6 | `sounds-behind` (T5) | D | the field recordings behind the projects | centred narrow column 560: label "03 — Sounds behind it", H2 "Recorded before it was scored." 3.75rem `#F4F1F5`, ¶ ≈55 words 1.0625rem / 1.9 `#D9D2DC`; then **P10 flush left** `width: 31.25vw`, 0.68, top at +0; **P11** left edge at **52.4%** (754/1440), `width: 31.3vw`, 0.68, top at **+234px** (`ref/wheel-ondo-5.png`); captions (location · time · sample rate) .75rem `#95859C`; link "Field notes →" `/sounds/` | P10 P11 | ≈75 words |
| 7 | `studio` | P | two rooms, seven people | centred column 560: H2 "Two rooms, seven people." 3.75rem `#231A2C`; ¶ ≈60 words (Halden Bay, since 2015, the mix stage and the foley pit, Mon–Fri 10:00–19:00); then **7 ruled rows** (1px `rgba(23,20,26,.22)`, padding 12px 0): name Instrument Sans 500 1.125rem left, role Figtree .875rem `#5E5266` right-aligned; link "People →" `/people/`. No portraits, no grid | — | ≈90 words |
| 8 | `send-a-cut` | D | the single way to send a cut | centred column 560: label "The one way in"; H2 **"Send a cut."** Instrument Sans 400 **4.25rem / 1.05** `#F4F1F5`; ¶ ≈45 words; key/value sheet (S3 style on dark: key `#95859C`, value `#F4F1F5`, 1px `rgba(244,241,245,.22)` underlines): Send · a private link to the cut / Tell us · runtime, picture-lock date, deadline / Reply · within 2 working days / Hours · Mon–Fri 10:00–19:00; then the **T4 tab rendered large inline**: 360×72 `#2A2530`, 1px `#95859C` border, "Send a cut" Instrument Sans 500 1.25rem + "cuts@kodama-sound.example" Figtree .75rem `#C9A9C0`, circle arrow 28px → `/send-a-cut/`. No reveal (CTA) | — | ≈70 words |
| 9 | `journal` | P | three stories | wide container: H2 "Journal" 2.5rem + "All stories →" right; three rows (2px rough ink top rule each, like S3): thumbnail **120×194 sliver (0.62)** left, date Figtree .8125rem `#5E5266`, title Instrument Sans 500 1.5rem `#17141A`, 1-line excerpt .9375rem | P15 P16 P14 | 3 × ≈22 words |
| 10 | `room-tone` (newsletter) | tint `#E8DCEB` | monthly letter | wide container, 2 columns 5/7: left H2 "Room Tone" 2.5rem + 2 lines ("First Monday of the month: one field recording, one project note, open studio dates."); right newsletter slot §11 (light case); **no reveal** | — | ≈30 words |
| 11 | `footer` | D | facts + site index | padding 120 / 40; monogram 56 + wordmark centred; trace strand 480×40 opacity .35 under it; 4 columns: Studio (address, hours) · Write (two emails, phone) · Pages (`#site-index` list) · Letter ("Room Tone →" link only, no second slot); bottom row `#95859C` .75rem "© 2026 Kodama Sound · Privacy" | — | facts |

Home images: **P01 P02 P03 P04 P05 P06 P07 P08 P09 P10 P11 P14 P15 P16 = 14 unique** (≥8 ✔), all real `<img>`.

### First-screen composition (1440×900)
- y0–120: header on `#231A2C`: left links x24 → (Projects, Sounds, Services, gap 32px), right links ending x1416 (Process, Studio, Journal); centred brand: monogram 56px y20–76, wordmark y84–106.
- y128–632: framed window (KV #1). Outer frame width `min(744px, 52vw, (100svh − 396px) × 1.5 + 24px)` so H1 + caption always fit at 1280×800 and 1440×900; image `object-fit: cover; object-position: 50% 45%` (designer and mic slightly left of centre, puddle reflection lower right).
- Trace line over everything except text (z-index between photo and H1); stroke never crosses the H1 / caption box (y664–858) on desktop; it may pass under the nav row only outside the brand box.
- y664–820 H1, y840–858 caption, "+ Index" x24 y868, fixed tab x1146–1416 y816–876 (H1 max width 860 keeps x ≤ 1140, no overlap).
- Saturated share target **≤ 10%** (amber recorder glow + mauve-graded skin and lights; ground, mauve, pale are all S < .35). Cap **15%** (common.md); row cap 30%. Ondo measured 27% (T(a)) — ours deliberately quieter (row note).

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Hero |
|---|---|---|
| Hobi Journeys | header bar → full-bleed photo KV + giant white headline + ticket card → 4 figure cells → staggered case-wall cards → narrative → sticky photo + 5 stages → parallax band → framed centre panel → navy brief bar → journal → newsletter → footer | full-bleed photo, 140px heavy headline bottom-left |
| Kosame Hot Pot | sticky 50vw photo stage cross-fade + paper column with vertical logo → booking frame → story with photo → 4 broth ruled rows → … | split sticky stage |
| Butai Playhouse | twin abutting full-height photos + white H1 ticker strip → statement with scattered wordmark → season board → season rail → … | two abutting photos + ticker |
| Hako Capsule | wordmark band + framed nav → full-bleed stage photo + speech-bubble card → narrow centred narrative → 5-cell pod wall → comparison table → … | full-bleed photo + filled card |
| **Kodama Sound** | split header with centred monogram → **centred framed window + full-width trace line** → **intro text from 42.6% + two flush-edge photos (right, then left lower)** → **full-width alternating credit sheets** → parallax band → **solid sliver + three-zone row** → flush-edge photo pair → ruled name list → send-a-cut sheet + dark tab → sliver-thumbnail journal → letter → footer | **framed photo inside the page, not full-bleed; a hand-drawn line crossing the frame; light 72px statement centred under it** |
Why not similar: no full-bleed photo hero (all four use a full-bleed or split stage); no headline on the photo; no card wall, no figures row, no ticker, no table, no sticky split stage on home; the long-form alternates grounds and photo sides in one column instead of grids; the three signatures (hand-drawn trace line, centre sliver with right-flush list, rough-ruled credit sheets) appear in no recent theme (checked against `steps/used-refs.txt`). The only shared element (a parallax photo band) is mandatory and sits after the projects.

---

## 4. Inner pages (11 pages + Journal + 3 posts)
| Page (slug) | Core content | Blocks |
|---|---|---|
| **Projects** (`projects`) | the work, told one by one | window head (P09, H1 "Projects, one at a time.") → 4 S3 credit sheets (P05–P08, alternating; each with an extra 2-paragraph "What we did" ≈80 words and the "Sounds recorded" line) → "Earlier work" ruled list (8 rows: year · title · format · role, rough rule, no images) → send-a-cut strip (home §8, compact) |
| **Sounds** (`sounds`) | the field-recording library behind the scores | window head (P10, H1 "Recorded first.") → ¶ on the library (3,200 recordings, catalogued by place and hour) → **6 S2 three-zone rows** alternating pale / deep: left place name 2.5rem + 2 sentences; centre sliver (P03, solid mauve, P11, solid mauve, P15, solid mauve); right list (date · time · sample rate · mics) → licence note ("Recordings are licensed with a project; we do not sell them separately.") |
| **Services & rates** (`services`) | score, foley, mix + prices | window head (P14) → 3 S3 service sheets: Original score (P13), Sound design & foley (P11), Re-recording mix (P02); keys Typical length · Included · From → **price table** (7 rows, §8, §9) on pale, no reveal → "Always included" list (spotting session, two rounds of revisions, stems + M&E) → send-a-cut strip |
| **Process** (`process`) | how scoring and mixing are scheduled | window head (P16, H1 "Eight weeks, five stages.") → 5 S2 rows (Spot solid · Record P03 · Score P04 · Mix P02 · Deliver solid); right list "You send / We send" per stage → "Schedules by format" ruled rows (short film 8 weeks · feature 12–16 weeks · game milestone-based, 2-week sprints · series per episode 3 weeks) → send-a-cut strip |
| **Studio** (`studio`, about) | story since 2015, rooms, a day | window head (P12, H1 "Since 2015, in Halden Bay.") → 3 ¶ story → S2 row "Two rooms, one field kit." (P13 sliver; right list: 7.1 mix stage · foley pit 4 surfaces · field kit 1 bag) → "A day at the studio" (daily routine, 6 ruled rows, §9) → milestones as S3 key/value sheet (2015 · 2018 · 2021 · 2024 · 2026) → link People |
| **People** (`people`) | seven named people | head without photo (trace only, H1 "Seven people.") → 7 S3-style entries without panel: tag = role, title = name, keys With the studio since · Works on · Records (one line each) |
| **Send a cut** (`send-a-cut`, booking / enquiry) | the single way to send a cut | window head (P17, H1 "Send a cut.") → S3 sheet (Send · Tell us · Reply · Hours) → **form slot** (§11) on tint `#E8DCEB` panel → "What happens next" 3 ruled rows (reply in 2 working days; spotting session booked; written schedule and fee within 5 working days) |
| **Contact** (`contact`) | studio, phone, form | head without photo (H1 "Contact.") → 2 columns: facts (address, hours, phone, both emails, getting here: Halden Bay station 7 min, no parking, bike rack) / form slot (§11) on tint panel |
| **Room Tone** (`room-tone`, newsletter) | standalone subscribe page | full page on deep `#231A2C` (dark form case): label, H1 "Room Tone." 4.25rem, 2 ¶ (what is in it, first Monday monthly, unsubscribe any time), newsletter slot (§11), 3 past issues as ruled text rows |
| **Journal** (`journal`, posts page, role `posts`, content empty) | stories archive | head (H1 "Journal.") on deep; rows like home §9 (featured image as 0.62 sliver) |
| **Privacy** (`privacy`) | legal | plain text, 720 column, pale, no reveal |
| Posts (3) | stories | single: trace strand + H1 3.25rem centred + featured image in a framed window 16:9 (no parallax), 720 column body, meta as key/value rows, category + tags |
Standard pages mapping (`theme-meta.json` / `screens`): home `/`; about `/studio/`; news `/journal/`; article first post; category `/category/field-notes/`; tag `/tag/field-recording/`; newsletter `/room-tone/`; contact `/contact/`. Templates: front-page, page, page-head (window head), single, archive, category (from archive), **tag.html** (from archive, label "TAG"), index, 404, search. Categories: Field notes, Studio notes. Tags: field recording, foley, mixing, scoring.

---

## 5. Colour (Ondo relationship kept; T(a))
Reference hues are changed (Ondo forest green `#003C26` / blush `#F3E5DE`) because the design-plan row fixes the family **mauve (hatoba, dove-feather) `#95859C`** and a green ground would read as a botanical brand, not a sound studio. **Lightness relationships are kept within ±5%**: deep ground L 11.8% → ours 11.6%; pale band L 91.2% → ours 93.1% (+1.9); text on dark white → `#F4F1F5`; text on pale = the deep ground colour (Ondo uses `#003C26` as text on pale → ours `#231A2C`). Pale saturation lowered (46% → 13%) to avoid a blush/cream ground and keep the palette quiet (row note).
| Token (slug) | Hex | Source | Use | Share |
|---|---|---|---|---|
| `deep` | **#231A2C** | T(a) ground deep `#003C26` (L matched), row family | hero, §2, §6, §8, footer, Room Tone, window heads | ~45% |
| `pale` | **#F1E8F3** | T(a) ground pale `#F3E5DE` (L +1.9) | §3, §5, §7, §9, inner bodies | ~35% |
| `mauve` | **#95859C** | row hex | top sliver block, captions/labels on deep, trace glyphs on pale, nav current | ~5% |
| `tint` | **#E8DCEB** | NSL panel `#F4F3F1` (panel 4–5% darker than its ground) | credit-sheet panels, newsletter band, form panels | ~8% |
| `ink` | **#17141A** | T(a) NSL ink `#291C16` (−5% L) | text on pale, 2px rough rules | text |
| `paper` | **#F4F1F5** | T(a) text on dark `#FFFFFF` (−4% L) | text, trace line, dots on deep | text |
| `mist` | **#D9D2DC** | — | secondary text on deep (≥1rem) | text |
| `mauve-ink` | **#5E5266** | darker mauve for AA on pale (6.4:1 on `#F1E8F3`) | keys, tags, dates, labels on pale | text |
| `point` | **#C9A9C0** | stage-a point | second line of the tab, active-state dot | <1% |
| `tab` | **#2A2530** | T(f) NSL dark tab `#291C16` (hue shifted) | fixed tab, form surfaces on deep | <2% |
No beige, no cream; not the main colour of the four recent themes (navy, broth red, plum, capsule grey) ✔. First screen saturated share ≤ 10% target, 15% cap.

## 6. Typography (sans direction)

### 6.1 Families (theme.json `fontFamilies` + `fontFace`; identical in editor and front end)
- `display`: **Instrument Sans** (variable woff2, wght 400–700, wdth 75–100, OFL) — stack `"Instrument Sans", "Figtree", system-ui, sans-serif`.
- `body`: **Figtree** (variable woff2, wght 300–900, OFL) — stack `"Figtree", system-ui, -apple-system, "Segoe UI", sans-serif`.
- zh-TW: headings `:root:lang(zh-TW)` → `"Instrument Sans", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` with **Noto Sans TC** subset woff2 (wght 500) via fontFace; body → `"Figtree", "PingFang TC", "Heiti TC", "Microsoft JhengHei", sans-serif` (system hei; repo gate: no built-in zh family and no Japanese family in the zh body stack).
- ja: headings → `"Instrument Sans", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif` with **Noto Sans JP** subset woff2 (500); body → `"Figtree", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", "Meiryo", sans-serif`.
- No serif or Mincho anywhere. Subsets via the Hokuto / Hada workaround (not the broken subset script); every file in `assets/fonts` listed in theme-meta `fonts[].files` with licence; family names in readme.txt. `style.css` has `:lang(` rules ⇒ copy `shared/inc/editor-lang.php` to `inc/` and require it.

### 6.2 Scale (theme.json presets; T(b))
| Preset | Size | Weight / lh / ls | Use | Token |
|---|---|---|---|---|
| `hero` | **4.5rem** (72px), fluid min 2.75rem | 400 / 1.08 / −0.03em | home H1 (largest; ≥4.25rem ✔) | Ondo H1 48 / 1.2 / −0.02em, enlarged for the gate |
| `xx-large` | **4.25rem** | 400 / 1.05 / −0.03em | inner H1, "Send a cut." | — |
| `x-large` | **3.75rem** (60px) | 400 / 1.2 / −0.02em | section titles (H2) | T(b) 59.7 / 1.2 / −0.02em ✔ |
| `large` | 2.5rem | 400 / 1.2 / −0.02em | Journal / Room Tone H2, Sounds place names | — |
| `medium` | 1.75rem | 500 / 1.15 / −0.01em | credit-sheet titles | T(b) NSL 20px title (enlarged) |
| `lede` | 1.25rem (20px) | Figtree 400 / 2.0 / .01em | §2 ¶1 | T(b) JP body lh 1.85–2.1 |
| `body` | 1.0625rem (17px) | Figtree 400 / 1.9 | text | T(b) 16.5px |
| `small` | .9375rem (15px) | Figtree 400 / 1.75 | S2 ¶, sheet values | T(b) 14.4–15 |
| `nav` | .8125rem (13px) | Figtree 500 uppercase / 1 / .02em | menu | T(b) 13.4 uppercase |
| `tiny` | .75rem / .6875rem | Figtree 500 | captions, labels, keys (uppercase ls .08–.12em) | T(b) 11.3 / NSL 10.5 |
Display stays **weight 400** (Ondo's light display) — never bold headings. CJK: display sizes ×0.75, ls 0, lh 1.3; body lh 1.85; de / fr `hyphens: auto`; `overflow-wrap: anywhere` on H1 / H2 at <782.

---

## 7. Motion and scroll (sp-scroll)
Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue css + js in head; `add_editor_style`. Theme overrides: `:root { --sp-dur: .8s; --sp-ease: cubic-bezier(.22,1,.36,1); --sp-dist: 24px; }` (T(g): Ondo power3.out .5–1s ≈ `cubic-bezier(.22,1,.36,1)`; NSL .6s rise). Hover / UI transitions `.3s cubic-bezier(.4,.4,0,1)` (T(g) NSL).

### 7.1 Chosen effects (3, from stage-a candidates)
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Parallax (required) | `sp-parallax` | §7.2 | Ondo: hero pinned + scrubbed, ScrollTrigger `scrub: true`, start "top top", end "bottom top", ease none | §7.2 |
| Entries rise in, staggered | `sp-reveal sp-reveal--up`, parent `sp-stagger` | home §3 the 4 credit-sheet entries; §5 the 5 right-list items; §7 the 7 name rows; §9 journal rows; inner: Projects sheets, Process / Sounds S2 rows' text, People entries | Ondo text: ScrollTrigger "top bottom", power3.out .5–1s, stagger ≈.08; NSL `.sd` + `.appear` (IntersectionObserver) .6s `cubic-bezier(.4,.4,0,1)` | 24px, .8s, `cubic-bezier(.22,1,.36,1)`, sp-stagger .12s steps |
| Image mask opens | `sp-reveal sp-reveal--wipe` (on a wrapper; clip on the child `img`) | home §2 P02 / P03, §5 P04 sliver, §6 P10 / P11; Sounds and Process slivers | Ondo: CSS `mask-position` transition ≈.6s `cubic-bezier(.22,1,.36,1)` | built-in clip-path top→bottom 1.1s `cubic-bezier(.77,0,.175,1)` (not overridden) |
Not used: `sp-count` (no figures row on home), zoom / mask / left / right / down, marquee, Lenis smooth scroll. **No reveal in the hero** (KV) and none on: forms, the price table, hours / contact facts, §8 send-a-cut, privacy text. Reveals on 6 of 12 home blocks (§2, §3, §5, §6, §7, §9) — the band and hero are motion-by-parallax only.
**Hero load motion (KV #3)** — theme CSS only, `@media (prefers-reduced-motion: no-preference)`, selectors `html.sp-js:not(.sp-no-motion)`:
- `.kd-trace path { stroke-dasharray: 1; animation: kd-draw 2.4s cubic-bezier(.22,1,.36,1) .2s both; }` keyframes `from { stroke-dashoffset: 1 } to { stroke-dashoffset: 0 }` (`pathLength="1"` on each path).
- `.kd-trace circle { transform-box: fill-box; transform-origin: center; animation: kd-dot .5s cubic-bezier(.34,1.56,.64,1) 2.2s both; }` (second dot 2.4s) `from { transform: scale(0) }`.
- Default (no JS, `?sp-static`, reduced motion, editor): `stroke-dashoffset: 0`, dots `scale(1)`. No other hero motion.

### 7.2 Parallax (required)
| Where | Block | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** (primary) | Group `kd-window sp-parallax` (the frame's inner box, `overflow: clip`) wrapping `figure > img` | **P01** | frame border, trace SVG, H1, caption are **outside** the moving layer (siblings of the wrapper) | **8% / 6%** | Ondo hero photo pinned and scrubbed under the page |
| **Band** (home §4) | Cover `kd-band sp-parallax` (Cover background image) | **P09** | statement + sentence in the Cover inner container | **10% / 6%** | Ondo full-bleed photo sliding under the next deep band |
| **Inner window heads** | `kd-window sp-parallax` | each page's head photo | H1, lede, trace outside | **6% / 4%** | as hero |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no JS, editor: no movement. Acceptance: `check-parallax.mjs` desktop + mobile (displacement difference ≥6px; 0 under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom).

---

## 8. Responsive rules (hard)
- **390px first screen**: header in flow, 64px, `#231A2C`: monogram 36px + "Kodama Sound" Instrument Sans 500 1rem inline, left x16; "Menu" button right (44px target). Framed window full width minus 2×12px, image **4:5** (342×428), `object-position: 48% 45%`. Trace: the **narrow** SVG variant (`.kd-trace--narrow`, shown <782; `.kd-trace--wide` hidden) limited to the frame's box ±12px, loops cross the frame edges but **never enter the H1 / caption area**. H1 in flow under the frame, **2.75rem / 1.1 / −0.02em**, centred, 3 lines; caption .75rem in flow. **No "+ Index", no fixed tab** (<782). **No vertical writing, no absolutely positioned labels or text, no overlap**; `scrollWidth == innerWidth`.
- 782–1023: header with overlay menu; frame `min(640px, 80vw)` 3:2; H1 3.75rem; fixed tab shown; "+ Index" hidden.
- **Header ≥1024** split as §3 #0; the centred brand must never overlap links (centre gap ≥ brand width + 48px; if the 6 labels do not fit — de / fr — the header switches to the overlay mode below 1180px: add a container query or `@media (max-width: 1179px)` for `html:lang(de), html:lang(fr)`).
- **§2 / §6 flush photos <782**: full width (no flush offset), 4:5, stacked with 40px gap; captions under; text column full width with 24px gutters.
- **S2 three-zone row <782**: stacked: thought → lede + ¶ → sliver centred `width: 46vw; aspect-ratio: .62` → list (right-aligned kept, full width). Top solid sliver kept, 46vw.
- **S3 credit sheet <782**: one column: tag + title + rows, then the panel full width (aspect 4:3) with the still inset at 60% width; rough rule kept; no alternation (panel always after text).
- **Price table ≥782px** (Services): `width: 100%` of its 1000px column, `table-layout: auto`; service column left Instrument Sans 500 1.125rem; note column left, may wrap; **price column `white-space: nowrap; text-align: right; width: 1%`**, Figtree 600; never clipped at 800 and 1280; no `overflow: hidden` on any wrapper.
- **Any table <782px** (prices, schedules by format, earlier work): stacked — each row a block: item + price on one flex line (price right, nowrap), note below `mauve-ink` .9375rem, 1px rule between rows; no horizontal scrolling.
- Touch targets ≥44px; `html, body { overflow-x: clip }`; SVG traces `overflow: hidden` at <782 inside a clipped wrapper; parallax layers clipped by their wrapper.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)
- **Name**: Kodama Sound ("kodama" — an echo: the sound a place sends back). **Founded** 2015 by **Ines Valk**, a field recordist turned composer, after recording a fishing harbour at night for a friend's short film. **Studio**: 14 Kiln Yard, Halden Bay (fictional coastal town). **Phone** +44 1632 960 271. **Email**: cuts `cuts@kodama-sound.example` (Send a cut page, home §8, tab); general `hello@kodama-sound.example` (Contact, Room Tone).
- **Studio hours**: Mon–Fri 10:00–19:00; Saturday mix sessions by appointment; closed Sunday. **Reply to a cut**: within 2 working days.
- **Rooms**: a 7.1 mix stage and a foley pit with four surfaces (gravel, wood, concrete, water); one field kit that fits in one bag.
- **Figures**: 64 projects since 2015 · 3,200 field recordings in the library · 2 rooms · 7 people.
- **Price list (7 items)**: Short film score (up to 20 min) — **from €3,800** · Feature film score — **from €18,000** · Sound design and foley, short film — **from €2,900** · Foley stage day (artist + recordist) — **€1,150 per day** · Game audio, per 100 sound effects — **from €2,400** · Re-recording mix, short film (stereo + 5.1) — **€2,200** · Mixer day rate — **€980 per day**. Included in every project: a spotting session, two rounds of revisions, stems and M&E delivery.
- **Process (5 stages, typical short film = 8 weeks)**: 01 Spot — day 1, a 2-hour spotting session with the director · 02 Record — weeks 1–2, field and foley recording · 03 Score — weeks 2–6, themes and cues, two review rounds · 04 Mix — weeks 6–8, premix, final mix with the director in the room · 05 Deliver — week 8, stems, M&E and loudness-checked masters within 3 working days of sign-off. Features 12–16 weeks; games in 2-week sprints per milestone; series 3 weeks per episode.
- **Projects (4)**:
  | # | Title | Format | Role | Delivered | Runtime / size | Sounds recorded |
  |---|---|---|---|---|---|---|
  | 1 | Salt Year | Feature film (drama) | Original score, foley, 5.1 mix | Sept 2025 | 104 min | Tidal flats at low tide, 02:40, nine nights at 96 kHz |
  | 2 | Lanterns Under Ice | Narrative game | Adaptive score (42 cues), 1,400 sound effects | Mar 2024 | 9-hour game | Ice on a frozen reservoir with contact mics, −11 °C |
  | 3 | The Long Platform | Short film | Sound design, foley, stereo + 5.1 mix | Feb 2026 | 18 min | An empty railway platform, 04:10, 48 kHz |
  | 4 | Orchard Static | Documentary series | Score and mix | Nov 2025 | 3 × 48 min | Beehives at dawn and a shortwave radio between stations |
- **Earlier work (Projects page, 8 rows)**: 2016 Harbour Lights (short, sound design) · 2017 Paper Wolves (game, sound effects) · 2018 The Quiet Field (documentary, score) · 2019 North Tide (feature, mix) · 2020 Glasshouse (short, score) · 2021 Lowland (series, foley) · 2022 Ferry at Six (short, score + mix) · 2023 Slow Static (game, adaptive score).
- **People (7)**: Ines Valk, founder and composer (since 2015) · Tomás Reyes, re-recording mixer (2016) · Amara Osei, foley artist (2018) · Jonas Berg, field recordist (2017) · Priya Natarajan, dialogue editor (2020) · Mateo Ferraz, music editor and orchestrator (2021) · Clara Duvall, studio manager and scheduling (2019).
- **Milestones**: 2015 studio founded, one room · 2018 foley pit built · 2021 7.1 mix stage · 2024 first adaptive game score · 2026 64th project.
- **A day at the studio (daily routine)**: 06:30 field recording before the traffic · 10:00 studio opens, overnight notes reviewed · 11:00 spotting or review session · 14:00 foley pit · 17:00 mix pass · 19:00 bounce, send, close.
- **Field recordings (Sounds page, 6)**: Hydrophone under a jetty (05:10, 96 kHz) · Rain on a tin roof (03:12, 96 kHz) · Pine forest in rain at night (23:30, 48 kHz) · Gravel and snow in the foley pit (14:00, 48 kHz) · Seashore at dusk (18:50, 96 kHz) · Tidal flats at low tide (02:40, 96 kHz).
- **Stories (3 posts)**: "Why we record before we write a note" (P15, Field notes) · "Spotting sessions: two hours that save two weeks" (P16, Studio notes) · "Building a foley pit for gravel, snow and water" (P14, Field notes).
- **Room Tone**: first Monday of each month.
- **Getting here**: Halden Bay station, 7 minutes' walk; no visitor parking; bicycle rack in the yard.
- **Audience**: film directors, producers, game studios and audio leads. **Tone**: quiet, exact, warm; numbers instead of adjectives; no guarantees, no awards, no real titles or clients.

---

## 10. Images (17 photographs, one STYLE; 14 on home)
**STYLE** (identical for every image):
`IMAGE_STYLE="real low-key documentary photograph, dusk, night or overcast light, deep shadows with soft highlights, muted mauve-grey colour grade, only small warm amber practical lights, shallow depth of field, fine natural detail, 50mm lens, quiet candid moment, modern international locations and sound studios, adult sound recordists and musicians of diverse ages and ethnicities, natural skin tones, no text, no letters, no numbers, no logos, no brand names, no readable screens or meters, no Japanese elements"`
Generate one at a time (`IMAGE_STYLE="$STYLE" scripts/grok-image.sh out.webp "<subject>"`); Read every image; regenerate any with text, readable meters/screens, logos, broken faces / hands, saturated colour or a high-key look. ≤300 KB, ≤2000px, webp. No cut-outs.
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `kv-boom-puddle.webp` | **KV**: at blue-hour dusk on an empty wet city street, a sound recordist (woman, 30s, Black, dark raincoat, headphones) holds a boom microphone in a grey furry windshield low over a rain puddle; a small field recorder on a shoulder strap glows with a tiny amber light; blurred street lights reflected in the puddle; subject centred | 3:2, 2000×1333 | Home §1 (KV) | ✔ |
| P02 | `mix-headphones.webp` | hands pressing closed-back headphones to one ear at a dark mixing desk, faders soft and out of focus, one amber lamp | 3:4, 1200×1600 | Home §2 flush right · Services (mix sheet) · Process (Mix row) | ✔ |
| P03 | `hydrophone-jetty.webp` | a hydrophone cable lowered from a wooden jetty into still dark lake water before dawn, a gloved hand holding the cable | 0.68, 1088×1600 | Home §2 flush left · Sounds row 1 · Process (Record row) | ✔ |
| P04 | `sliver-cable-reel.webp` | vertical close-up: a coiled microphone cable reel and the knob of a field recorder on a wooden table, side light, very shallow focus | 0.62, 992×1600 | Home §5 sliver · Process (Score row) | ✔ |
| P05 | `project-tidal-flats.webp` | tidal flats at low tide at night, a distant figure with a dim lantern and a microphone stand on wet sand, low mist | 0.8, 1280×1600 | Home §3 entry 1 · Projects sheet 1 | ✔ |
| P06 | `project-frozen-reservoir.webp` | a recordist kneeling on a frozen reservoir at dusk, pressing a small contact microphone onto the ice, breath visible | 0.8, 1280×1600 | Home §3 entry 2 · Projects sheet 2 | ✔ |
| P07 | `project-platform.webp` | an empty railway platform at 4 a.m. under muted lamps, a microphone on a tall stand at the platform edge, rails fading into dark | 0.8, 1280×1600 | Home §3 entry 3 · Projects sheet 3 | ✔ |
| P08 | `project-orchard-hives.webp` | beehives in an orchard at dawn in mist, a small stereo microphone on a low stand beside a hive, an old portable radio on a crate | 0.8, 1280×1600 | Home §3 entry 4 · Projects sheet 4 | ✔ |
| P09 | `band-mix-stage.webp` | a wide dark mix stage: a large console in the foreground, a big blank grey projection screen glowing softly, two people silhouetted listening | 2.25, 2000×890 | Home §4 band · Projects head | ✔ |
| P10 | `field-pine-rain.webp` | a stereo pair of microphones on a tripod in a pine forest at night in light rain, a dim red headlamp glow on wet bark | 0.68, 1088×1600 | Home §6 flush left · Sounds head | ✔ |
| P11 | `foley-gravel-steps.webp` | close-up: a foley artist's boots stepping into a gravel tray in a dark foley pit, a microphone hanging just above | 0.68, 1088×1600 | Home §6 right · Sounds row 3 · Services (foley sheet) | ✔ |
| P12 | `studio-room.webp` | the studio at evening: wooden acoustic diffusers, an upright piano, a desk with monitors (screens dark), one lamp | 3:2, 1800×1200 | Studio head | |
| P13 | `composer-piano.webp` | a composer (man, 50s, South Asian) at an upright piano with a felt strip, pencil in hand, a blank manuscript page, warm lamp | 0.8, 1280×1600 | Services (score sheet) · Studio S2 sliver | |
| P14 | `foley-pit-props.webp` | a foley pit with props: a wooden door on a stand, trays of gravel, snow-like salt and water, a foley artist (woman, 40s, East Asian) swinging a leather jacket near a mic | 3:2, 1800×1200 | Home §9 row 3 · post 3 · Journal · Services head | ✔ |
| P15 | `post-seashore-dusk.webp` | a recordist at a seashore at dusk holding a windshielded microphone on a pole towards the breaking waves, back to camera | 3:2, 1800×1200 | Home §9 row 1 · post 1 · Journal · Sounds row 5 | ✔ |
| P16 | `post-spotting.webp` | a director and a composer at a small table in a dim room, a notebook with pencil lines (no writing), headphones and two cups of tea, mid-conversation | 3:2, 1800×1200 | Home §9 row 2 · post 2 · Journal · Process head | ✔ |
| P17 | `send-a-cut-drive.webp` | across a dark table, a hand slides a small unmarked hard drive towards another person; a pair of headphones and a timecode-free notebook beside | 3:2, 1800×1200 | Send a cut head | |
**Per-page check (no repeats on one page)**: **Home** P01–P11, P14, P15, P16 (14) · **Projects** P09 + P05 P06 P07 P08 · **Sounds** P10 + P03 P11 P15 · **Services** P14 + P13 P11 P02 · **Process** P16 + P03 P04 P02 · **Studio** P12 + P13 · **Send a cut** P17 · **People, Contact, Room Tone, Privacy** no photo · **Journal** P15 P16 P14 · posts 1 P15, 2 P16, 3 P14. All 17 used; 12–18 ✔.

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)
Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, the CSS and editor JS unchanged to `assets/`; `require` in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot` (contact fallback = `ob_start()`-buffered literal mailto button). **No form in the home first screen; no `sp-reveal` on any form or its wrapper.** Home §8 is a sheet + link, not a form.
- **Send a cut (`send-a-cut`, booking / enquiry)**: on the tint `#E8DCEB` panel under the S3 sheet: `shippress_form_slot( kind: contact, fallback )`. Fallback = buffered literal mailto button **"Email a link to your cut"** (`wp-element-button`, `#231A2C` fill, `#F4F1F5` text, radius 0, 56px, href `mailto:cuts@kodama-sound.example?subject=<forms_cut_subject>`) + hint "Opens your email app. Send a private link to the cut, its runtime, the picture-lock date and your deadline." Recommended CF7 fields (readme; the theme creates no form): name*, production / studio, email*, project type* (select: Feature film / Short film / Series or documentary / Game / Trailer or advert / Other), work needed (checkboxes: Score / Sound design and foley / Mix / Not sure yet), runtime in minutes (number), picture-lock date (date), delivery deadline* (date), link to the cut* (url), link password, message, consent*, submit "Send the cut". Never links to `/contact/`.
- **Contact (`contact`)**: tint panel right of the facts; slot kind contact; fallback mailto **"Email us"** → `hello@kodama-sound.example` (subject `forms_contact_subject`). Fields: name*, email*, topic (select: A new project / A project in progress / Field-recording licence / Working with us / Other), message*, consent*.
- **Room Tone (`room-tone`)**: standalone page on deep `#231A2C` (dark case), panel `#2A2530` padding 56px, radius 0: `shippress_form_slot( kind: newsletter, email: hello@kodama-sound.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §10**: the same newsletter slot on tint `#E8DCEB` (light case). **Footer**: text link "Room Tone →" only.
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7 / WPForms only with an explicit dedicated newsletter id. Contact kinds CF7 → WPForms. Without plugins: required `type=email` field + submit, native mailto POST, notice visible ("not subscribed yet").
- **Tokens** (style.css, mapped to theme.json presets):
  - light (pale / tint): `--sp-form-accent: var(--wp--preset--color--deep)` #231A2C (submit fill = NSL dark tab); `--sp-form-on-accent: var(--wp--preset--color--paper)` #F4F1F5; `--sp-form-radius: 0` (T(d)); `--sp-form-focus: var(--wp--preset--color--mauve-ink)` #5E5266 (2px outline, offset 2px); `--sp-form-surface: #F7F5F8`; `--sp-form-text: #17141A`; fields 52px, no side borders, **1px `rgba(23,20,26,.35)` bottom border** (S3 key/value underline), 2px `#231A2C` on focus; Figtree 400 1rem, padding 0 14px; labels Figtree 500 .6875rem uppercase ls .08em `#5E5266` above (S3 keys); submit 56px Instrument Sans 500 1rem, padding 0 36px, hover `#352F3B` .3s `cubic-bezier(.4,.4,0,1)`; error text + border `#9B2C3F`; success panel `#E8DCEB` text `#17141A` with 3px left rule `#231A2C`; checkbox / radio `accent-color: #231A2C`.
  - dark (`.kd-dark`, `#231A2C` / panel `#2A2530`): `--sp-form-surface: #2A2530`; `--sp-form-text: #F4F1F5`; `--sp-form-accent: #F1E8F3`; `--sp-form-on-accent: #17141A`; `--sp-form-focus: #C9A9C0`; bottom border `rgba(244,241,245,.4)`; labels `#95859C`; error `#F2A7B5`; success text `#D9D2DC` with left rule `#C9A9C0`.
  - States styled: input, textarea, select, checkbox / radio, label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback`; no global selectors.
- **i18n semantic keys** (`inc/i18n/en.php`, extract with `L10N_SEMANTIC=1`, rewritten locally in en, zh-TW, ja, fr, de): `forms_email` "Email address", `forms_subscribe` "Send me Room Tone", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to Room Tone", `forms_contact_subject` "Hello from the website", `forms_cut_subject` "A cut for Kodama Sound", `contact_email` "Email us", `forms_cut_button` "Email a link to your cut", `forms_cut_hint`, `forms_contact_hint`. Dynamic block attributes (label, submit, notice, subject, fallback) translated in all five locales, not only visible pattern text.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on light (Send a cut, Contact) and dark (Room Tone); never submit.

---

## 12. Similarity table (target ≈ 80%; values from reference-tokens.md)
| Dimension | Reference value (token) | Kodama Sound value |
|---|---|---|
| Deep ground | `#003C26`, L 11.8%, ~30% of scroll (T(a)) | `#231A2C`, L 11.6%, ~45% (row hue) |
| Pale band | `#F3E5DE`, L 91.2%, ~35% (T(a)) | `#F1E8F3`, L 93.1%, ~35% |
| Text on dark / on pale | `#FFFFFF` / `#003C26` (deep as text) (T(a)) | `#F4F1F5` / `#231A2C` (deep as text) |
| Line accent | 1px `rgba(255,255,255,.7)` scribble, <2% (T(a), T(f)) | 1px `rgba(244,241,245,.7)` trace, <2% |
| Dots | 8–10px solid white, travel / pop back.out(1.2) (T(f), T(g)) | 8px solid `#F4F1F5`, pop `cubic-bezier(.34,1.56,.64,1)` |
| Panel | NSL `#F4F3F1` behind posters (T(a)) | `#E8DCEB` behind inset stills |
| First-screen saturation | 27% video frame, <8% after scrub (T(a)) | ≤10% (cap 15%) |
| Display weight / style | light wide display, sentence case (T(b)) | Instrument Sans 400, sentence case |
| H1 | 48px / 1.2 / −0.02em, centred, 2 lines (T(b)) | 4.5rem (72px) / 1.08 / −0.03em, centred, 2 lines (gate ≥4.25rem) |
| Section titles | 59.7px / 1.2 / −0.02em, 400 (T(b)) | 3.75rem (60px) / 1.2 / −0.02em, 400 |
| Body / labels | Poppins 14–16.5px; labels 11.3px; JP lh 1.85–2.1 (T(b)) | Figtree 17px / 1.9, 15px / 1.75; labels 11–12px |
| Nav | 13.4px uppercase, ls −0.03em, white (T(b)) | 13px uppercase, ls .02em, `#F4F1F5` (split around monogram) |
| Gutter / columns | 24px gutter; text from x142 / 260 / 614; copy max ~420px (T(c)) | 24px; §2 text from 42.6% (x614); S2 ¶ max 420px |
| Section padding | 100–165 top, 205–410 bottom (T(c)) | 144 top, 240 bottom |
| Radius / shadow | 0; no shadows; hairlines only (T(d)) | 0; no shadows; hairlines + NSL 2px rough rule |
| Monogram | circle line "O", 72px top-left / 110px centred (T(f)) | circle line "k" echo ring, 56px centred |
| Micro control | "+ Sections" 12px bottom-right (T(f)) | "+ Index" 12px bottom-left (bottom-right taken by the tab) |
| Hero image | full-bleed blurred macro 1.6:1 (T(e)) | framed window 3:2 in a centred column (row hero = framed-window) |
| Intro photo | 567×749 flush right; next 450 wide flush left, lower (T(e)) | P02 39.4vw 3:4 flush right; P03 31.25vw 0.68 flush left, +280px |
| Slivers | 184×295 (0.62) at screen centre, solid + photo (T(e)) | 184×295 (12.8vw, 0.62), solid mauve + P04 |
| Right tag list | 12px, right-aligned flush to gutter (T(f)) | 13px, right-aligned flush to the 24px gutter |
| Works rows (NSL) | 2px rough ink top rule, 1px key/value underlines, 10.5px keys, 20px titles, row ≈205px, gap 30 (T(c), T(d)) | 2px rough `#17141A` rule, 1px underlines, 11px keys, 28px titles, entry ≈460px, gap 0 (rules separate) |
| Dark tab (NSL) | `#291C16`, 270×60, bottom-right fixed (T(f)) | `#2A2530`, 270×60, bottom-right fixed (≥782) |
| Photo treatment | low DoF, desaturated, overcast, r0, no masks (T(e)) | low-key, mauve-grey, shallow DoF, r0, no masks |
| Hero motion | line draws, dots travel; pinned scrub (T(g)) | line draws 2.4s `(.22,1,.36,1)`, dots pop; sp-parallax 8% |
| Text motion | power3.out .5–1s, stagger .08 (T(g)) | sp-reveal--up 24px .8s `(.22,1,.36,1)`, stagger .12 |
| Image motion | mask-position ≈.6s (T(g)) | sp-reveal--wipe 1.1s built-in |
| Hover | .3s `cubic-bezier(.4,.4,0,1)` (T(g)) | identical |
| Imagery | photographs, macro foliage, print objects (T(e)) | photographs, field recording and studio scenes |

---

## 13. Home acceptance checklist (stage 1)
1. 1440×900 first screen on `#231A2C`: split header (Projects · Sounds · Services | monogram + "Kodama Sound" | Process · Studio · Journal), framed window with **P01** (recordist, boom mic over puddle, amber recorder glow) inside a 1px frame, the **trace line** crossing both frame edges and both viewport edges with two 8px dots, H1 "We record the world / before we score it." 72px 400 centred, caption, "+ Index" bottom-left, dark tab bottom-right. Nothing else (no form, table, search, button row).
2. `?sp-motion`: the trace draws in 2.4s from the mic outward, dots pop; P01 moves slower than the frame on scroll. `?sp-static` / reduced motion: final state at once.
3. 390×844: header in flow 64px; framed P01 4:5; narrow trace inside the frame area only; H1 2.75rem in flow; no tab, no "+ Index"; no vertical text, no absolutely positioned labels, no overlap, no horizontal overflow.
4. §2 three paragraphs from x614 + P02 flush right + P03 flush left lower, both wiping open; §3 four credit sheets with 2px rough rules, key/value underlines, tinted panels alternating right / left, "Sounds recorded" lines; facts match §9.
5. §4 P09 band with visible parallax; §5 solid mauve sliver centred, then the three-zone row (left thought 60px, P04 sliver exact centre, right-flush list of 5 stages); §6 P10 flush left + P11 offset +234px.
6. §7 seven ruled name rows; §8 "Send a cut." with the 4-row sheet and the large inline tab; §9 three journal rows with 0.62 slivers (P15 P16 P14); §10 newsletter slot on tint (email + submit + notice without plugins; no reveal); footer with address, hours Mon–Fri 10:00–19:00, phone, both emails, `#site-index`.
7. 14 unique images on home (≥8); 0 cut-outs; every image Read-checked (no text / logos / readable meters; low-key mauve-grey).
8. ≥250 English words (target ≈720), ≥3 narrative ¶ ≥20 words; all numbers match §9.
9. Effects only `sp-parallax`, `sp-reveal--up` + `sp-stagger`, `sp-reveal--wipe`; hero has no reveal; no reveal on forms, §8, facts; `check-parallax.mjs` passes desktop + mobile.
10. First-screen saturated share ≤10% (cap 15%); largest theme.json size 4.5rem (≥4.25rem); fonts via theme.json fontFace (Instrument Sans, Figtree, Noto Sans TC / JP subsets), editor = front end; sans only.
11. Radius 0 everywhere; no shadows; exactly one top menu (`core/navigation`, split by CSS); no `content:` text in CSS (trace, dots, glyphs are inline SVG).
12. auto-gates `1 1` pass for en; `pattern_source.py` passes.
