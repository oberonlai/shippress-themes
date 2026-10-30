<?php
/**
 * Title: Home: intro
 * Slug: kouhi-service/front-intro
 * Categories: kouhi-service
 * Keywords: office coffee, coffee service, landing
 * Viewport Width: 1440
 * Description: Two paragraphs on the left and a 4:5 rounded photograph of hands refilling the hopper on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"about","className":"ks-sec ks-intro","layout":{"type":"default"}} -->
<section id="about" class="wp-block-group alignfull ks-sec ks-intro"><!-- wp:group {"className":"ks-in ks-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in ks-intro__grid"><!-- wp:group {"className":"ks-intro__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-intro__text"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo esc_html( kouhi_service_t( 'lbl_about' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo esc_html( kouhi_service_t( 'intro_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kouhi_service_t( 'intro_p0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kouhi_service_t( 'intro_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-photo ks-photo--45 sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full ks-photo ks-photo--45 sp-reveal sp-reveal--up"><img src="<?php echo kouhi_service_img( 'p03-hopper.webp' ); ?>" alt="<?php echo esc_attr( kouhi_service_t( 'alt_P03' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
