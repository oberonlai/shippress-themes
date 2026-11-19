<?php
/**
 * Title: Home: your tour manager
 * Slug: kisha-rail/front-manager
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: One quotation from the senior tour manager, a ruled list of the four tour managers and a portrait.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-mgr","layout":{"type":"default"}} -->
<section class="wp-block-group kr-mgr">
<!-- wp:group {"className":"kr-mgr__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kr-mgr__grid">
<!-- wp:group {"className":"kr-mgr__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-mgr__text">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 'mgr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"kr-mgr__q sp-reveal sp-reveal--up"} -->
<blockquote class="wp-block-quote kr-mgr__q sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p>“<?php echo esc_html( kisha_rail_t( 'mgr_q' ) ); ?>”</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph {"className":"kr-mgr__who"} -->
<p class="kr-mgr__who"><?php echo esc_html( kisha_rail_t( 'mgr_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-mgr__list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kr-mgr__list sp-stagger">
<!-- wp:group {"className":"kr-mgr__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-mgr__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-mgr__n"} -->
<p class="kr-mgr__n"><?php echo esc_html( kisha_rail_t( 'mgr_n1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-mgr__l"} -->
<p class="kr-mgr__l"><?php echo esc_html( kisha_rail_t( 'mgr_l1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-mgr__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-mgr__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-mgr__n"} -->
<p class="kr-mgr__n"><?php echo esc_html( kisha_rail_t( 'mgr_n2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-mgr__l"} -->
<p class="kr-mgr__l"><?php echo esc_html( kisha_rail_t( 'mgr_l2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-mgr__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-mgr__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-mgr__n"} -->
<p class="kr-mgr__n"><?php echo esc_html( kisha_rail_t( 'mgr_n3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-mgr__l"} -->
<p class="kr-mgr__l"><?php echo esc_html( kisha_rail_t( 'mgr_l3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-mgr__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-mgr__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-mgr__n"} -->
<p class="kr-mgr__n"><?php echo esc_html( kisha_rail_t( 'mgr_n4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-mgr__l"} -->
<p class="kr-mgr__l"><?php echo esc_html( kisha_rail_t( 'mgr_l4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-mgr__ph sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-mgr__ph sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-ph kr-ph--45"} -->
<figure class="wp-block-image size-full kr-ph kr-ph--45"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-manager-portrait.webp' ) ); ?>" alt="<?php echo esc_attr( kisha_rail_t( 'alt_p12' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
