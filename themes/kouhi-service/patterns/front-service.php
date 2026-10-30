<?php
/**
 * Title: Home: the service
 * Slug: kouhi-service/front-service
 * Categories: kouhi-service
 * Keywords: office coffee, coffee service, landing
 * Viewport Width: 1440
 * Description: A sticky photograph on the left and four ruled items on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"service","className":"ks-sec ks-service","layout":{"type":"default"}} -->
<section id="service" class="wp-block-group alignfull ks-sec ks-service"><!-- wp:group {"className":"ks-in ks-service__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in ks-service__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-photo ks-photo--45 ks-service__photo"} -->
<figure class="wp-block-image size-full ks-photo ks-photo--45 ks-service__photo"><img src="<?php echo kouhi_service_img( 'p07-descale.webp' ); ?>" alt="<?php echo esc_attr( kouhi_service_t( 'alt_P07' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-service__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-service__text"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo esc_html( kouhi_service_t( 'lbl_service' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo esc_html( kouhi_service_t( 'service_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ks-svc__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-svc__item sp-reveal sp-reveal--up"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( kouhi_service_t( 'svc_0_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kouhi_service_t( 'svc_0_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-svc__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-svc__item sp-reveal sp-reveal--up"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( kouhi_service_t( 'svc_1_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kouhi_service_t( 'svc_1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-svc__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-svc__item sp-reveal sp-reveal--up"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( kouhi_service_t( 'svc_2_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kouhi_service_t( 'svc_2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-svc__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-svc__item sp-reveal sp-reveal--up"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( kouhi_service_t( 'svc_3_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kouhi_service_t( 'svc_3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
