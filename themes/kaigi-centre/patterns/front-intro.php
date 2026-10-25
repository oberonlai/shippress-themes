<?php
/**
 * Title: Home: intro
 * Slug: kaigi-centre/front-intro
 * Categories: kaigi-centre
 * Keywords: conference, front-intro
 * Viewport Width: 1440
 * Description: Single-column story with a notched inset photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-intro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-intro">
<!-- wp:group {"className":"kc-intro__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-intro__text">
<!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label"><?php echo esc_html( kaigi_centre_t( 'intro_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2"><?php echo esc_html( kaigi_centre_t( 'intro_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo esc_html( kaigi_centre_t( 'intro_p0' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo esc_html( kaigi_centre_t( 'intro_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo esc_html( kaigi_centre_t( 'intro_p2' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-intro__photo kc-notch","layout":{"type":"default"}} -->
<div class="wp-block-group kc-intro__photo kc-notch">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-intro__img"} -->
<figure class="wp-block-image size-full kc-intro__img"><img src="<?php echo kaigi_centre_img( 'intro-setup.webp' ); ?>" alt="<?php echo esc_attr( kaigi_centre_t( 'alt_intro' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
