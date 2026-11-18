<?php
/**
 * Title: Story: borrowed for a day
 * Slug: sanroku-trail/story
 * Categories: sanroku-trail
 * Viewport Width: 1440
 * Description: Split story: eyebrow, title and a small photo left, three narrative paragraphs from 43% of the frame.
 */
?>
<!-- wp:group {"tagName":"section","className":"st-sec st-story","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-story"><!-- wp:group {"className":"st-frame st-story__grid","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame st-story__grid"><!-- wp:group {"className":"st-story__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-story__l sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"st-eyebrow"} -->
<p class="st-eyebrow"><?php echo esc_html( sanroku_trail_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'story_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"st-story__img"} -->
<figure class="wp-block-image size-full st-story__img"><img src="<?php echo sanroku_trail_img( 'p02-village-meadow.webp' ); ?>" alt="<?php echo sanroku_trail_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-story__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-story__r sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"st-story__p"} -->
<p class="st-story__p"><?php echo esc_html( sanroku_trail_t( 'story_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-story__p"} -->
<p class="st-story__p"><?php echo esc_html( sanroku_trail_t( 'story_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-story__p"} -->
<p class="st-story__p"><?php echo esc_html( sanroku_trail_t( 'story_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
