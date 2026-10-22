# Shikaku Academy

WordPress block theme for an online certification academy (project management and IT). The English home page is finished and checked (block editor validation, 390 px / 1280 px overflow, motion). Inner pages, five languages and the Tutor LMS / WooCommerce styles follow in the next stage.

- Palette: ground #E9EDF0, surface #F6F7F8, ink #12222D, muted #6E7F8A, accent hanada #4E7A93, tint #DCE7EE.
- Type: Libre Baskerville (display), Work Sans (text).
- Signatures: T1 paper-strip headline beside a photo on the fold; T2 numbered-tab course ladder; T3 fan of three rotated photo cards.
- Scroll: sp-scroll (assets/sp-scroll.css, .js): sp-reveal--up + sp-stagger, sp-reveal--wipe on section titles, sp-marquee, sp-parallax.
- Copy lives in inc/i18n/<lang>.php; patterns in patterns/; design notes in brand/design-spec.md.

- Home hero: strips reveal top to bottom (CSS clip-path, 220 ms stagger) and the Scroll Next ring turns slowly; both are final-state under no-JS, `?sp-static`, reduced motion and in the editor.
- Menu links point to /courses/, /plans/, /how-it-works/, /instructors/, /support/, /about/, /faq/, /my-courses/ (placeholder pages until the inner-page stage).
