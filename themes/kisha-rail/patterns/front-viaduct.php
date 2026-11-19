<?php
/**
 * Title: Home: viaduct band
 * Slug: kisha-rail/front-viaduct
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: A full-width photograph with slow parallax and one white card about the pace.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kr-via sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-via sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-via__img"} -->
<figure class="wp-block-image size-full kr-via__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-viaduct.webp' ) ); ?>" alt="<?php echo esc_attr( kisha_rail_t( 'alt_p06' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kr-via__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group kr-via__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-via__fg","layout":{"type":"default"}} -->
<div class="wp-block-group kr-via__fg">
<!-- wp:group {"className":"kr-via__card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-via__card sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 'via_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-via__q"} -->
<p class="kr-via__q"><?php echo esc_html( kisha_rail_t( 'via_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-via__s"} -->
<p class="kr-via__s"><?php echo esc_html( kisha_rail_t( 'via_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
