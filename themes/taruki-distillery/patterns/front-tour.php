<?php
/**
 * Title: Home: tour band
 * Slug: taruki-distillery/front-tour
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: A full-bleed photograph of a tour at the still with a translucent charcoal panel, one booking button, and a 20px rule.
 */
?>
<!-- wp:cover {"url":"<?php echo taruki_img( 'img-08.webp' ); ?>","dimRatio":0,"align":"full","className":"td-tourband","contentPosition":"center center"} -->
<div class="wp-block-cover alignfull is-light td-tourband"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo taruki_a( 'alt_08' ); ?>" src="<?php echo taruki_img( 'img-08.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"td-panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-panel sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center","className":"td-panel__h"} -->
<h2 class="wp-block-heading has-text-align-center td-panel__h"><?php echo esc_html( taruki_t( 'tr_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"td-panel__p"} -->
<p class="has-text-align-center td-panel__p"><?php echo esc_html( taruki_t( 'tr_body' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo esc_html( taruki_t( 'tr_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
