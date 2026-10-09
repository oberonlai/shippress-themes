<?php
/**
 * Title: Project detail — title, spec sheet, images, drawings, credits
 * Slug: kenchiku-grid/project-detail
 * Categories: kenchiku-grid, portfolio, featured
 * Keywords: project, case study, single project, spec, drawings, credits
 * Viewport Width: 1400
 * Description: A complete single-project page: project number and title beside a spec sheet, a wide lead image, the brief, plan and section drawings, an image pair, credits and a link to the next project.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-page-head kg-project-head","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-page-head kg-project-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid"><!-- wp:paragraph {"className":"is-style-mono-label kg-hero__kicker","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-mono-label kg-hero__kicker">P-061<br>Residential<br>Completed 2025</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"layout":{"columnSpan":6}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"is-style-display-tight"} -->
<h1 class="wp-block-heading is-style-display-tight">Hanare House</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="is-style-lead" style="margin-top:var(--wp--preset--spacing--40)">A house for a retired cellist and her garden, on a narrow lot in the hills above Kamakura. It turns its back on the road and opens, completely, to a single black pine.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"is-style-spec-sheet","style":{"layout":{"columnSpan":3,"columnStart":10}}} -->
<figure class="wp-block-table is-style-spec-sheet"><table><tbody><tr><td>Location</td><td>Kamakura, Kanagawa</td></tr><tr><td>Programme</td><td>Private house</td></tr><tr><td>Site</td><td>312 m²</td></tr><tr><td>Floor area</td><td>186 m²</td></tr><tr><td>Structure</td><td>In-situ concrete, timber roof</td></tr><tr><td>Design</td><td>2022 — 2023</td></tr><tr><td>Completion</td><td>October 2025</td></tr><tr><td>Status</td><td>Built</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-grid-frame"} -->
<figure class="wp-block-image alignwide size-full is-style-grid-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/light-slit.svg' ) ); ?>" alt="Concrete interior with a vertical slit of daylight" style="aspect-ratio:21/9;object-fit:cover"/><figcaption class="wp-element-caption">Fig. 01 — The north wall at 09:40. A 16 mm slit runs the full height of the room.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"is-style-mono-label kg-section-head__no","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-mono-label kg-section-head__no">01 — Brief</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kg-section-title","style":{"layout":{"columnSpan":8,"columnStart":3}}} -->
<h2 class="wp-block-heading kg-section-title">One room for music, one for sleep, and a long wall for the morning.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kg-body-col","style":{"layout":{"columnSpan":4,"columnStart":3}}} -->
<p class="kg-body-col">The client asked for very little: a room in which a cello sounds the way it does in a small church, a bedroom that faces east, and nothing that would need repainting in her lifetime. The road side is a single blind wall of board-formed concrete, broken only by the entrance.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kg-body-col","style":{"layout":{"columnSpan":4,"columnStart":7}}} -->
<p class="kg-body-col">Inside, the plan is a ring of rooms around a court open to the sky. The music room is 4.8 metres tall and lit by a single slit in its north wall, so that the light moves slowly across the concrete during a morning’s practice and never falls on the instrument.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-grid-frame kg-drawing","style":{"layout":{"columnSpan":7}}} -->
<figure class="wp-block-image size-full is-style-grid-frame kg-drawing"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/plan.svg' ) ); ?>" alt="Ground floor plan of a courtyard house" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption">Dwg. 01 — Ground floor plan, 1:100.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"layout":{"columnSpan":5}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-grid-frame kg-drawing"} -->
<figure class="wp-block-image size-full is-style-grid-frame kg-drawing"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/section.svg' ) ); ?>" alt="Building section with winter and summer sun angles" style="aspect-ratio:16/10;object-fit:cover"/><figcaption class="wp-element-caption">Dwg. 02 — Section A–A with sun angles, 1:100.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kg-body-col","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="kg-body-col" style="margin-top:var(--wp--preset--spacing--40)">The roof light over the court is set so that the winter sun, at 31°, reaches the foot of the north wall at 11:00, while the summer sun, at 78°, never enters the music room at all.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-grid-frame","style":{"layout":{"columnSpan":5,"columnStart":2}}} -->
<figure class="wp-block-image size-full is-style-grid-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/window-void.svg' ) ); ?>" alt="Plaster wall with a deep square window and a patch of light" style="aspect-ratio:4/5;object-fit:cover"/><figcaption class="wp-element-caption">Fig. 02 — Bedroom, east window. Reveal 600 mm.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-grid-frame kg-drop","style":{"layout":{"columnSpan":5,"columnStart":8}}} -->
<figure class="wp-block-image size-full is-style-grid-frame kg-drop"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/board-concrete.svg' ) ); ?>" alt="Board-formed concrete with tie holes under raking light" style="aspect-ratio:4/5;object-fit:cover"/><figcaption class="wp-element-caption">Fig. 03 — Road wall, cedar-board imprint.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kg-grid kg-section-head","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"top":"0.5rem","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid kg-section-head" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"className":"is-style-mono-label kg-section-head__no","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-mono-label kg-section-head__no">02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-mono-label","style":{"layout":{"columnSpan":10}}} -->
<p class="is-style-mono-label">Credits</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kg-grid kg-credits","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid kg-credits" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"is-style-module","style":{"layout":{"columnSpan":3,"columnStart":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-module"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">Architects</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Toho Kenchiku Office — Ren Tohyama, Aiko Morishita, Mio Hasegawa</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-module","style":{"layout":{"columnSpan":2,"columnStart":6}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-module"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">Structure</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Oka Structural Design</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-module","style":{"layout":{"columnSpan":2,"columnStart":8}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-module"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">Contractor</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Shonan Kogyo Co., formwork by Kenji Iwata</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-module","style":{"layout":{"columnSpan":3,"columnStart":10}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-module"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">Photography</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Studio drawings and renderings. Photographs on request for press.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kg-next","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide kg-next" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">Next project — P-058</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kg-next__title"} -->
<p class="kg-next__title"><a href="/projects/">Shimogamo Reading Room →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
