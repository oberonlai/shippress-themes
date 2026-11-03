# Shikaku Academy

WordPress block theme for an online certification academy (project management and IT). The English home page and the English inner pages (courses, course page, lesson player, plans and pricing, how it works, instructors, student stories, about, support, FAQ, My courses, journal with one article) are finished and checked (block editor validation, 390 px / 1280 px overflow, motion). Five languages and the Tutor LMS / WooCommerce styles follow in the next stage.

- Palette: ground #E9EDF0, surface #F6F7F8, ink #12222D, muted #6E7F8A, accent hanada #4E7A93, tint #DCE7EE.
- Type: Libre Baskerville (display), Work Sans (text).
- Signatures: T1 paper-strip headline beside a photo on the fold; T2 numbered-tab course ladder; T3 fan of three rotated photo cards.
- Scroll: sp-scroll (assets/sp-scroll.css, .js): sp-reveal--up + sp-stagger, sp-reveal--wipe on section titles, sp-marquee, sp-parallax.
- Copy lives in inc/i18n/<lang>.php; patterns in patterns/; design notes in brand/design-spec.md.

- Home hero: strips reveal top to bottom (CSS clip-path, 220 ms stagger) and the Scroll Next ring turns slowly; both are final-state under no-JS, `?sp-static`, reduced motion and in the editor.
- Menu links point to /courses/, /plans/, /how-it-works/, /instructors/, /support/, /about/, /faq/, /my-courses/ (all built; the course page is /project-delivery-foundations/, the lesson player sample /lesson-player/).

<!-- screenshots:start -->
## Screenshots

<table>
<tr>
<td valign="top"><img src="https://shots.codotx.com/shikaku-academy/home-desktop.webp" width="640" alt="Shikaku Academy home page on desktop"></td>
<td valign="top"><img src="https://shots.codotx.com/shikaku-academy/home-mobile.webp" width="200" alt="Shikaku Academy home page on mobile"></td>
</tr>
</table>

- Courses: [desktop](https://shots.codotx.com/shikaku-academy/courses-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/courses-mobile.webp)
- Project delivery foundations: [desktop](https://shots.codotx.com/shikaku-academy/project-delivery-foundations-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/project-delivery-foundations-mobile.webp)
- Lesson player: [desktop](https://shots.codotx.com/shikaku-academy/lesson-player-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/lesson-player-mobile.webp)
- Plans: [desktop](https://shots.codotx.com/shikaku-academy/plans-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/plans-mobile.webp)
- How it works: [desktop](https://shots.codotx.com/shikaku-academy/how-it-works-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/how-it-works-mobile.webp)
- Instructors: [desktop](https://shots.codotx.com/shikaku-academy/instructors-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/instructors-mobile.webp)
- Student stories: [desktop](https://shots.codotx.com/shikaku-academy/student-stories-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/student-stories-mobile.webp)
- About: [desktop](https://shots.codotx.com/shikaku-academy/about-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/about-mobile.webp)
- Support: [desktop](https://shots.codotx.com/shikaku-academy/support-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/support-mobile.webp)
- Faq: [desktop](https://shots.codotx.com/shikaku-academy/faq-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/faq-mobile.webp)
- My courses: [desktop](https://shots.codotx.com/shikaku-academy/my-courses-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/my-courses-mobile.webp)
- Journal: [desktop](https://shots.codotx.com/shikaku-academy/journal-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/journal-mobile.webp)
- News: [desktop](https://shots.codotx.com/shikaku-academy/news-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/news-mobile.webp)
- Article: [desktop](https://shots.codotx.com/shikaku-academy/article-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/article-mobile.webp)
- Category: [desktop](https://shots.codotx.com/shikaku-academy/category-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/category-mobile.webp)
- Tag: [desktop](https://shots.codotx.com/shikaku-academy/tag-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/tag-mobile.webp)
- Newsletter: [desktop](https://shots.codotx.com/shikaku-academy/newsletter-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/newsletter-mobile.webp)
- Contact: [desktop](https://shots.codotx.com/shikaku-academy/contact-desktop.webp) · [mobile](https://shots.codotx.com/shikaku-academy/contact-mobile.webp)
- Other languages (home page): [zh-TW](https://shots.codotx.com/shikaku-academy/zh-TW/home-desktop.webp) · [ja](https://shots.codotx.com/shikaku-academy/ja/home-desktop.webp) · [fr](https://shots.codotx.com/shikaku-academy/fr/home-desktop.webp) · [de](https://shots.codotx.com/shikaku-academy/de/home-desktop.webp)
<!-- screenshots:end -->
