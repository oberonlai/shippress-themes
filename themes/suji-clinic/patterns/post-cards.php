<?php
/**
 * Title: Journal: post cards
 * Slug: suji-clinic/post-cards
 * Categories: suji-clinic
 * Keywords: clinic, journal, posts
 * Viewport Width: 1440
 * Description: Journal posts as photo cards with an offset line, the date as a Latin label and the excerpt.
 */
?>
<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"sj-wrap sj-posts","layout":{"type":"default"}} -->
<div class="wp-block-query sj-wrap sj-posts"><!-- wp:post-template {"className":"sj-grid"} -->
<!-- wp:group {"className":"sj-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sj-card sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"389/240","className":"sj-card__photo"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"sj-card__title sj-card__title--post"} /-->

<!-- wp:post-date {"className":"sj-sublabel"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"sj-card__cap"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( suji_clinic_t( 'posts_none' ) ?: 'No notes yet.' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
