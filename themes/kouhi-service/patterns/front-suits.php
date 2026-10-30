<?php
/**
 * Title: Home: who it suits
 * Slug: kouhi-service/front-suits
 * Categories: kouhi-service
 * Keywords: office coffee, coffee service, landing
 * Viewport Width: 1440
 * Description: Three static cards on a curved warm-grey band: the middle one is larger and lifted, each has a white caption plate; a round cup disc breaks the band edge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"suits","className":"ks-sec ks-suits","layout":{"type":"default"}} -->
<section id="suits" class="wp-block-group alignfull ks-sec ks-suits"><!-- wp:group {"className":"ks-in ks-head-c","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in ks-head-c"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo esc_html( kouhi_service_t( 'lbl_suits' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo esc_html( kouhi_service_t( 'suits_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ks-rail"><span class="ks-rail__disc" aria-hidden="true"><?php echo kouhi_service_icon( 'cup' ); ?></span><div class="ks-rail__cards sp-stagger"><article class="ks-card ks-card--l sp-reveal sp-reveal--up"><div class="ks-card__img"><img src="<?php echo kouhi_service_img( 'p04-studio.webp' ); ?>" alt="<?php echo esc_attr( kouhi_service_t( 'alt_P04' ) ); ?>" width="1200" height="800" loading="lazy"/></div><div class="ks-card__plate"><p class="ks-card__s"><?php echo esc_html( kouhi_service_t( 'suit_0_s' ) ); ?></p><h3 class="ks-card__c"><?php echo esc_html( kouhi_service_t( 'suit_0_c' ) ); ?></h3><p class="ks-card__d"><?php echo esc_html( kouhi_service_t( 'suit_0_d' ) ); ?></p></div></article><article class="ks-card ks-card--c sp-reveal sp-reveal--up"><div class="ks-card__img"><img src="<?php echo kouhi_service_img( 'p05-clinic.webp' ); ?>" alt="<?php echo esc_attr( kouhi_service_t( 'alt_P05' ) ); ?>" width="1200" height="800" loading="lazy"/></div><div class="ks-card__plate"><p class="ks-card__s"><?php echo esc_html( kouhi_service_t( 'suit_1_s' ) ); ?></p><h3 class="ks-card__c"><?php echo esc_html( kouhi_service_t( 'suit_1_c' ) ); ?></h3><p class="ks-card__d"><?php echo esc_html( kouhi_service_t( 'suit_1_d' ) ); ?></p></div></article><article class="ks-card ks-card--r sp-reveal sp-reveal--up"><div class="ks-card__img"><img src="<?php echo kouhi_service_img( 'p06-accounts.webp' ); ?>" alt="<?php echo esc_attr( kouhi_service_t( 'alt_P06' ) ); ?>" width="1200" height="800" loading="lazy"/></div><div class="ks-card__plate"><p class="ks-card__s"><?php echo esc_html( kouhi_service_t( 'suit_2_s' ) ); ?></p><h3 class="ks-card__c"><?php echo esc_html( kouhi_service_t( 'suit_2_c' ) ); ?></h3><p class="ks-card__d"><?php echo esc_html( kouhi_service_t( 'suit_2_d' ) ); ?></p></div></article></div></div>
<!-- /wp:html -->
</section>
<!-- /wp:group -->
