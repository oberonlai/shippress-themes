<?php
/**
 * Title: Home: stories (three posts)
 * Slug: kyukyu-college/front-notes
 * Categories: kyukyu-college
 * Keywords: front-notes
 * Viewport Width: 1440
 * Description: Hairline head row (NOTES) then a three-card query loop of the latest posts: 4:3 image, red category, title, date.
 */
?>
<!-- wp:group {"tagName": "section", "anchor": "notes", "className": "kk-wrap kk-sec kk-notes-sec", "layout": {"type": "default"}} -->
<section id="notes" class="wp-block-group kk-wrap kk-sec kk-notes-sec"><!-- wp:group {"className": "kk-split kk-nhead", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-split kk-nhead"><!-- wp:group {"className": "kk-cell kk-cell--l sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-cell kk-cell--l sp-reveal sp-reveal--up"><!-- wp:paragraph {"className": "kk-word"} -->
<p class="kk-word">NOTES</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kk-sub"} -->
<p class="kk-sub">From the classroom and the road</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kk-cell kk-cell--r sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-cell kk-cell--r sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p>Graduates, students and instructors write about what the work and the training feel like from the inside: night shifts, second careers and why every compression is timed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kk-cardswrap", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-cardswrap"><!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false,"sticky":""},"className":"kk-cards-q","layout":{"type":"default"}} -->
<div class="wp-block-query kk-cards-q"><!-- wp:post-template {"className":"kk-cards sp-stagger","layout":{"type":"default"}} -->
<!-- wp:group {"className": "kk-card sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-card sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className": "kk-card__body", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-card__body"><!-- wp:post-terms {"term":"category","className":"kk-card__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kk-card__title"} /-->

<!-- wp:post-date {"className":"kk-card__date"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
