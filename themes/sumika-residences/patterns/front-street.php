<?php
/**
 * Title: Home: street band
 * Slug: sumika-residences/front-street
 * Categories: sumika-residences
 * Keywords: serviced apartments, residence
 * Viewport Width: 1440
 * Description: Torn-edge parallax photo band with one resident quote.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sm-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sm-band">
<!-- wp:group {"className":"sm-band__frame","layout":{"type":"default"}} -->
<div class="wp-block-group sm-band__frame">
<!-- wp:group {"className":"sm-band__clip","layout":{"type":"default"}} -->
<div class="wp-block-group sm-band__clip">
<!-- wp:html -->
<div class="wp-block-cover sm-band__cover sp-parallax" style="--sp-par:10%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( sumika_residences_t( 'a32caffce' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/13-street-dusk.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-band__tab","layout":{"type":"default"}} -->
<div class="wp-block-group sm-band__tab">
<!-- wp:paragraph {"className":"sm-quote"} -->
<p class="sm-quote"><?php echo wp_kses_post( sumika_residences_t( 'k7b795fb8' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-quote__by"} -->
<p class="sm-quote__by"><?php echo wp_kses_post( sumika_residences_t( 'k8c3f6718' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
