<?php
/**
 * Title: Home: come and see
 * Slug: mebuki-college/front-visit
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Description: Closing band: the open-day invitation with the two Saturday dates, the address and two pill buttons.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visit","className":"mb-sec mb-sec--last","layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group alignfull mb-sec mb-sec--last"><!-- wp:group {"className":"mb-visit sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-visit sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mb-pill"} -->
<p class="mb-pill"><?php echo esc_html( mebuki_college_t( 'p_visit' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"mb-h2"} -->
<h2 class="wp-block-heading mb-h2"><?php echo esc_html( mebuki_college_t( 'visit_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-secline"} -->
<p class="mb-secline"><?php echo esc_html( mebuki_college_t( 'visit_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-visit__facts"} -->
<p class="mb-visit__facts"><?php echo esc_html( mebuki_college_t( 'visit_facts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"mb-visit__btns"} -->
<div class="wp-block-buttons mb-visit__btns"><!-- wp:button {"className":"mb-btn"} -->
<div class="wp-block-button mb-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/open-days/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'visit_b1' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"mb-btn mb-btn--outline"} -->
<div class="wp-block-button mb-btn mb-btn--outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'visit_b2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
