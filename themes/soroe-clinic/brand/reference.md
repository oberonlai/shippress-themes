# Soroe Clinic: reference (stage 1 research; "Our version" filled in by the stage 1 spec, see design-spec.md)
Main reference: https://yaizu-ortho.com/ (orthodontic-only practice). Secondary: https://j-ortho.jp/. Style source: S5-Style category "education / healthcare" listing (https://www.s5-style.com/). Screenshots in `brand/ref/`; token numbers in `reference-tokens.md`.
IMAGERY: photo (documentary, high-key; the reference's main images are real clinic photographs).

## Main reference, first screen
Pale cool-grey page; a hand-drawn blue line enters from the left, runs through the headline area, crosses the top-left of a wide rounded photo (a clinician in slate scrubs working on a patient) and ends in a small loop carrying a rotated Latin label. Vertical white-boxed caption lines on the photo's right. Blue wave-edged header band (phone, reserve pill). Story: "orthodontics is a conversation first; just ask, no pressure".

## Signature candidates
1. Hand-drawn thread line crossing headline and photo, returning on the band and as a link underline (yaizu first screen; `ref/yaizu-first.png`, `ref/scroll-yaizu-numerals-before.png`).
2. Corner-hung numerals: large pale serif "#01 / #02 / #03" lying across the lower corner of rounded photos, staircase left/right on a saturated band, short rule under each heading (yaizu About band; `ref/scroll-yaizu-numerals-*.png`).
3. Gutter-cell page: pale 8 px gutter around the viewport, header and sections as separate rounded cells, three-cell header (logo | links | menu), stacked white contact chips docked bottom-left (j-ortho first screen and section cells; `ref/jortho-first.png`, `ref/scroll-jortho-blur-1800.png`).
Excluded as too close to listed work: vertical white paper strips on a photo, wave-edge bands, sine underlines, fixed right-edge reservation tab.

## Scroll behaviour (details in stage-a.md)
Fade-up 30 px / 0.9 s ease with hand-set delays (yaizu); proportional backdrop blur 0 -> 8 px on a text panel while scrolling over a photo (j-ortho).

## Our version
| Reference element (source) | Soroe Clinic counterpart (design-spec.md section) | Where |
|---|---|---|
| Wide rounded documentary photo, clinician + patient in the chair (yaizu hero) | P01: Dr. Varga holding the next aligner tray beside a teenage patient, coordinator opening the next visit on a screen; split photo **left**, r20 (§2, §3) | Home H1 |
| Hand-drawn blue line through the headline, crossing the photo, rotated Latin tag (yaizu) | T1 thread line, 2px #44698A, crosses photo edge and h1, loop tagged "next visit" + coral dot; white on the band; swoosh + 52x28 arrow pill under links (§1 T1) | Home H1, H4, links; About, How a course works, First visit, Patient notes, Team |
| "#01 #02 #03" pale numerals across photo corners, staircase on the blue band, 40px white rule (yaizu About) | T2: slate #44698A band, Instrument Sans 10rem #DCE6E3 numerals half on photo, photos 450 / 486x609 / 450, rows offset ~300px (§1 T2) | Home H4 (and #14 on H6, #01-#04 on H10); Treatments, How a course works, Review visits, First visit |
| 8px mint frame, rounded white cells, three-cell header, stacked contact chips bottom-left (j-ortho) | T3: mist #E1EAEB 8px gutter, r20 cells, header cells logo / nav / phone + pill, three chips on hero photos (§1 T3) | every page |
| Vertical white-boxed captions on the photo (yaizu) | vertical micro-label "REVIEW VISIT 06 OF 09" beside (not on) the photo, >=1100px only | Home H1 |
| News rows: 1px rules, date in main colour, "+" pill (yaizu) | H2 "This month" notice rows with 52x28 "+" pill | Home H2 |
| Ghost Latin word "Message", vertical, pale (yaizu) | ghost word "Worries", 12.5rem #E4EBEA, >=1100px | Home H3 |
| Colour: ground #F3F4F0, main #3C699C, pale water #C0D8E0, stone #E3E3D5; first screen 8.2% saturated | ground #F4F7F6, slate #44698A (row palette, L within 5%), mist #E1EAEB, numerals #DCE6E3, ink #1E2A2F, coral #C9826A dots only; target <=10% (§5) | all |
| Type: gothic 16/30.4 ls .05em, H2 37/55.5 ls .1em, numerals ~160px | Figtree 16/30.4, Instrument Sans H2 40/56, h1 4.5rem, numerals 10rem; CJK Noto Sans TC / JP (§5) | all |
| Motion: fade-up 30px 0.9s ease + hand delays; band fade 1.5s; side entries +-30px; line drawn; (j-ortho) fixed photo under cells | sp-reveal--up 30px .9s ease + sp-stagger; band header opacity 1.5s; --left/--right; hero line 1.4s draw, band line wipe; sp-parallax 6% hero / 10% review band (§7) | Home and inner pages |
Not taken: wave header and wave band edges, boxed vertical captions on the photo, fixed right-edge hours/access tab, bird marks, scroll-linked backdrop blur.
