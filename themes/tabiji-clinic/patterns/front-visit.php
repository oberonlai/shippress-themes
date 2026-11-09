<?php
/**
 * Title: Home: visit
 * Slug: tabiji-clinic/front-visit
 * Categories: tabiji-clinic
 * Keywords: clinic, travel, vaccination
 * Viewport Width: 1440
 * Description: Clinic entrance photo beside address, hours and two pills.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"tc-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-visit"><!-- wp:group {"className":"tc-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-visit__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-visit__img sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full tc-visit__img sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p14-entrance.webp' ) ); ?>" alt="Clinic entrance seen from the street showing a glass door in pale wood."/></figure>
<!-- /wp:image --><!-- wp:group {"className":"tc-visit__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-visit__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tabiji_clinic_t( 'vs_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"tc-h2 tc-h2--left"} -->
<h2 class="wp-block-heading tc-h2 tc-h2--left"><?php echo esc_html( tabiji_clinic_t( 'vs_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"tc-visit__addr"} -->
<p class="tc-visit__addr"><?php echo esc_html( tabiji_clinic_t( 'vs_a1' ) ); ?><br><?php echo esc_html( tabiji_clinic_t( 'vs_a2' ) ); ?><br><?php echo esc_html( tabiji_clinic_t( 'vs_a3' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-row"} -->
<p class="tc-row"><span><?php echo esc_html( tabiji_clinic_t( 'v1_a' ) ); ?></span><span><?php echo esc_html( tabiji_clinic_t( 'v1_b' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-row"} -->
<p class="tc-row"><span><?php echo esc_html( tabiji_clinic_t( 'v2_a' ) ); ?></span><span><?php echo esc_html( tabiji_clinic_t( 'v2_b' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-visit__small"} -->
<p class="tc-visit__small"><?php echo esc_html( tabiji_clinic_t( 'vs_closed' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"tc-pills","layout":{"type":"flex"}} -->
<div class="wp-block-buttons tc-pills"><!-- wp:button {"className":"is-style-outline tc-pill"} -->
<div class="wp-block-button is-style-outline tc-pill"><a class="wp-block-button__link wp-element-button" href="tel:6045550142"><?php echo esc_html( tabiji_clinic_t( 'vs_call' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"tc-pill"} -->
<div class="wp-block-button tc-pill"><a class="wp-block-button__link wp-element-button" href="/appointment/"><?php echo esc_html( tabiji_clinic_t( 'vs_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
