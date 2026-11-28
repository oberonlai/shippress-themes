# Reference (stage 1)
Main: https://hospital.luke.ac.jp/ — St. Luke's International Hospital. Calm clinical home with a clear patient path.
Secondary: https://www.jikei.ac.jp/hospital/ — structure only (split rail + wide slide photo + light tracked heading on the photo's right). Its colour (~43 % saturated) is not followed.
Screens: brand/ref/luke-first.png, luke-first-1440.png, scroll-luke-1800.png, scroll-luke-3000.png, jikei-first.png. Tokens: brand/reference-tokens.md. Spec: brand/design-spec.md.

| Reference element (source) | Value | Our counterpart (finished theme) |
|---|---|---|
| Docked two-button search box on the banner (Luke) | 185x108, double 1px outline, magnifiers | T1 finder box 288x136 on the hero photo's lower-right seam, "Find by symptom / Find by test"; also on Symptoms and Assessment page heads |
| Green frame + nav strip (Luke) | #1C5D47, 34px strip, 5 equal cells | 8px slate #5A6568 top strip + 44px slate nav strip, 6 equal cells, centred wordmark |
| Green title bar + two blue booking blocks (Luke) | 950x56 bar; 2 x 465x106 #294EA4 blocks with arrow square | T2: 64px slate bar + 2 x 588x120 #2C5A86 blocks with 24px arrow square (home close, compact pair in hero, foot of 6 inner pages) |
| Peeking promo strip with heading plates (Luke) | 5 cards x 200, plate on top, 1px frame | T3: "What brings people in" 5 plate cards x 360, right peek; plate cards on Symptoms, Assessment, Clinicians, Stories, News |
| Four quiet lines over the banner (Luke) | centred, small | T4 four-line stepped headline 4.5 / 3.25 / 2.25 / 1.5rem (gaze-chart rows) |
| Dated news rows with category chips (Luke) | chips 80x18, white 11px | home §6 dated rows, chips 88x20 #2C5A86 / #5A6568 |
| List thumbnails with 1px frame (Luke) | 74px square | method rows, 120px square framed thumbs |
| Autoscrolling strip 2200ms / 7500ms (Luke), hero slider (Jikei) | timed slide | hero photo CSS crossfade img-01 → img-02, hold 7.5s, fade 2.2s |
| PICK UP scroller 1500ms easeInQuint (Luke) | click scroll | sp-reveal--up + sp-stagger, 1.5s easeOutQuint, 20px |
| Banner photo moving independently (Luke/Jikei) | — | sp-parallax on home §3 narrative photo (--sp-par 8%, mobile 6%) |
| Tracked bold section titles, lh 1.8 (Jikei) | h2 32px / 700 / .08em, body 16/28.8 | H2 Figtree 2.25rem / 700 / .06em, body Manrope 1.0625rem / 1.8 |
| Colour relationship (Luke) | thin dark frame + strong CTA blocks + white ground | slate #5A6568 + steel #2C5A86 + white / #F4F6F6 (hue shifted for the grey plan family and quiet first screen) |
