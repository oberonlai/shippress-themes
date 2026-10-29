<?php
/**
 * Title: Home: closing strip
 * Slug: eiyo-clinic/front-close
 * Categories: eiyo-clinic
 * Keywords: cta, book
 * Viewport Width: 1440
 * Description: A paper strip with one line and a white dot-arrow link.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"book","className":"ec-closesec","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull ec-closesec"><!-- wp:group {"className":"ec-in","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in"><!-- wp:group {"className":"ec-close","layout":{"type":"default"}} -->
<div class="wp-block-group ec-close"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( eiyo_clinic_t( 'k3435c40f' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( eiyo_clinic_t( 'ke7daaab9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ec-chip ec-chip--white"} -->
<div class="wp-block-buttons ec-chip ec-chip--white"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'k2787b65f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
