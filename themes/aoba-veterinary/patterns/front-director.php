<?php
/**
 * Title: Home: director greeting with a framed photograph
 * Slug: aoba-veterinary/front-director
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: The people: a centred seven-line greeting beside a 4:5 portrait with an offset thin frame and a round Director tag.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-section--ground av-director","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-section--ground av-director"><!-- wp:group {"align":"wide","className":"av-director__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-director__in"><!-- wp:group {"className":"av-director__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group av-director__text sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center","className":"av-label"} -->
<h2 class="wp-block-heading has-text-align-center av-label"><?php echo wp_kses_post( aoba_veterinary_t( 'kf54d128d' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-greeting"} -->
<p class="has-text-align-center av-greeting"><?php echo wp_kses_post( aoba_veterinary_t( 'kd8b7c739' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-arrow av-arrow--center"} -->
<div class="wp-block-buttons av-arrow av-arrow--center"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/team/"><?php echo wp_kses_post( aoba_veterinary_t( 'ke79c6603' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-director__side","layout":{"type":"default"}} -->
<div class="wp-block-group av-director__side"><!-- wp:group {"className":"av-tag","layout":{"type":"default"}} -->
<div class="wp-block-group av-tag"><!-- wp:paragraph {"className":"av-tag__badge"} -->
<p class="av-tag__badge"><?php echo wp_kses_post( aoba_veterinary_t( 'k7c5ba892' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-tag__name"} -->
<p class="av-tag__name"><?php echo wp_kses_post( aoba_veterinary_t( 'kb22150d8' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"av-framed"} -->
<figure class="wp-block-image size-large av-framed"><img src="<?php echo esc_url( $av . 'p07-director.webp' ); ?>" alt="<?php echo esc_attr( aoba_veterinary_t( 'a0d64d0ee' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
