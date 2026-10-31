# Hibana College

A dark, photo-led block theme for a welding and metal-fabrication trade school for adults changing jobs. Near-black navy ground, thin drifting weld-ripple rings, a tall masked hero photograph with a six-tick month timeline, edge-to-edge twin photo panels with a dark caption card and rounded tab, and serif caps heading rows with a round white arrow. Literata for headings, Work Sans for reading.

- Home: hero, About, six month panels, a week's work, floor band (parallax), Open Bench cohort, instructors, stories, fees, close.
- Inner pages (11, sample content in `demo-content.json`): The Six-Month Course, A Workshop Week, Other Courses, Instructors, Graduate Stories, Fees, Admissions, Workshop & Safety, About, Contact, Journal; plus a sample journal post, 404 and search templates.
- Scroll effects: `sp-reveal` (up, zoom) with `sp-stagger`, and `sp-parallax` on the hero photograph and the floor band. All of them stop under `prefers-reduced-motion`.
- Theme text lives in `inc/i18n/<lang>.php`; patterns under `patterns/` read it through `hibana_college_t()`.
- Photographs: 17 AI-generated images (CC0), listed in `readme.txt`. Fonts: OFL-1.1, files in `assets/fonts/`.
- Reference and design notes: `brand/` and `brand.md`. The college and its people are fictional.
