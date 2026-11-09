<?php
/**
 * Title: Home: statement with stepped photo pairs
 * Slug: tabiji-clinic/front-message
 * Categories: tabiji-clinic
 * Keywords: clinic, travel, vaccination
 * Viewport Width: 1440
 * Description: Centred statement with a flag-mark label, flanked by two small staggered photo pairs (left steps down, right steps up).
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"tc-message","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-message"><!-- wp:group {"className":"tc-message__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-message__grid"><!-- wp:group {"className":"tc-pair tc-pair--l","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pair tc-pair--l"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-pair__img tc-pair__a sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full tc-pair__img tc-pair__a sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-waiting.webp' ) ); ?>" alt="Bright clinic waiting area with pale wood benches, a plant, and a reading traveller."/></figure>
<!-- /wp:image --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-pair__img tc-pair__b sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full tc-pair__img tc-pair__b sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03-vial.webp' ) ); ?>" alt="Gloved hands holding an unlabelled vaccine vial and syringe over a white tray."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-message__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-message__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tabiji_clinic_t( 'msg_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( tabiji_clinic_t( 'msg_h_1' ) ); ?><br><?php echo esc_html( tabiji_clinic_t( 'msg_h_2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( tabiji_clinic_t( 'msg_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( tabiji_clinic_t( 'msg_p2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( tabiji_clinic_t( 'msg_p3' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-link"} -->
<p class="tc-link"><a href="/about/"><?php echo esc_html( tabiji_clinic_t( 'msg_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-pair tc-pair--r","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pair tc-pair--r"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-pair__img tc-pair__a sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full tc-pair__img tc-pair__a sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-booklet.webp' ) ); ?>" alt="Carry-on suitcase and a closed blank vaccination booklet resting on a pale bench."/></figure>
<!-- /wp:image --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-pair__img tc-pair__b sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full tc-pair__img tc-pair__b sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04-consult.webp' ) ); ?>" alt="Physician seated at a wooden desk talking attentively with a seated young traveller."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
