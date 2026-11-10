<?php
/**
 * Title: Home: since 2009, narrative and yard strip
 * Slug: kamotsu-academy/front-since
 * Categories: kamotsu-academy
 * Viewport Width: 1440
 * Description: Centred numeral lockup beside the heading, the narrative paragraph with a hi-vis highlighter and the 8:1 yard panorama strip.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"since","className":"ka-sec ka-since","layout":{"type":"default"}} -->
<section id="since" class="wp-block-group alignfull ka-sec ka-since">
<!-- wp:group {"className":"ka-wrap ka-since__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap ka-since__row sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ka-since__num","layout":{"type":"default"}} -->
<div class="wp-block-group ka-since__num">
<!-- wp:paragraph {"className":"ka-since__label"} -->
<p class="ka-since__label"><?php echo wp_kses_post( kamotsu_academy_t( 'since_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-since__year"} -->
<p class="ka-since__year"><?php echo wp_kses_post( kamotsu_academy_t( 'since_year' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-since__head","layout":{"type":"default"}} -->
<div class="wp-block-group ka-since__head">
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'since_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-since__lead"} -->
<p class="ka-since__lead"><?php echo wp_kses_post( kamotsu_academy_t( 'since_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-since__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-since__text sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-since__body"} -->
<p class="ka-since__body"><?php echo wp_kses_post( kamotsu_academy_t( 'since_body' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-wrap ka-strip sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap ka-strip sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-strip__img"} -->
<figure class="wp-block-image size-full ka-strip__img"><img src="<?php echo kamotsu_academy_img( 'p03-yard-panorama.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
