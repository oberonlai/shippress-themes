<?php
/**
 * Title: Home: concept
 * Slug: shisei-clinic/front-concept
 * Categories: shisei-clinic
 * Keywords: story, why, desk workers
 * Viewport Width: 1440
 * Description: Arch portrait with a round photo on its corner, beside a lead heading and two paragraphs.
 */
?>
<!-- wp:group {"className":"ss-sec ss-sec--veil ss-concept","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec ss-sec--veil ss-concept"><!-- wp:group {"className":"ss-wrap ss-concept__in","layout":{"type":"default"}} -->
<div class="wp-block-group ss-wrap ss-concept__in"><!-- wp:group {"className":"ss-concept__photos sp-reveal sp-reveal--mask","layout":{"type":"default"}} -->
<div class="wp-block-group ss-concept__photos sp-reveal sp-reveal--mask"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ss-concept__arch"} -->
<figure class="wp-block-image size-full ss-concept__arch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04.webp' ) ); ?>" alt="<?php echo esc_attr( shisei_clinic_t( 'aaf3783b5' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ss-concept__round"} -->
<figure class="wp-block-image size-full ss-concept__round"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05.webp' ) ); ?>" alt="<?php echo esc_attr( shisei_clinic_t( 'a508d57dd' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-concept__text","layout":{"type":"default"}} -->
<div class="wp-block-group ss-concept__text"><!-- wp:heading {"className":"ss-lead"} -->
<h2 class="wp-block-heading ss-lead"><span><?php echo wp_kses_post( shisei_clinic_t( 'k1b48579c' ) ); ?></span> <span><?php echo wp_kses_post( shisei_clinic_t( 'kd1b9fdb2' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shisei_clinic_t( 'k43cc4739' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shisei_clinic_t( 'ke0281c6a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
