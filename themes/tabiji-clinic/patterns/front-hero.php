<?php
/**
 * Title: Home: hero frame
 * Slug: tabiji-clinic/front-hero
 * Categories: tabiji-clinic
 * Keywords: clinic, travel, vaccination
 * Viewport Width: 1440
 * Description: Inset rounded photo frame with a ghost headline, a cycling destination line and a notch card cut into the bottom-right corner.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-hero.webp' ) ); ?>","dimRatio":0,"className":"tc-hero alignwide sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover tc-hero alignwide sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Nurse drawing a vaccine into a syringe beside a physician reviewing an itinerary." src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-hero.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"tc-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hero__copy"><!-- wp:heading {"level":1,"className":"tc-hero__title"} -->
<h1 class="wp-block-heading tc-hero__title"><?php echo esc_html( tabiji_clinic_t( 'hero_h_1' ) ); ?><br><?php echo esc_html( tabiji_clinic_t( 'hero_h_2' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"tc-hero__dest"} -->
<p class="tc-hero__dest"><span><?php echo esc_html( tabiji_clinic_t( 'dest1' ) ); ?></span><span><?php echo esc_html( tabiji_clinic_t( 'dest2' ) ); ?></span><span><?php echo esc_html( tabiji_clinic_t( 'dest3' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-notch","layout":{"type":"default"}} -->
<div class="wp-block-group tc-notch"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tabiji_clinic_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-row"} -->
<p class="tc-row"><span><?php echo esc_html( tabiji_clinic_t( 'h1_a' ) ); ?></span><span><?php echo esc_html( tabiji_clinic_t( 'h1_b' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-row"} -->
<p class="tc-row"><span><?php echo esc_html( tabiji_clinic_t( 'h2_a' ) ); ?></span><span><?php echo esc_html( tabiji_clinic_t( 'h2_b' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-notch__note"} -->
<p class="tc-notch__note"><?php echo esc_html( tabiji_clinic_t( 'hero_note' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-link"} -->
<p class="tc-link"><a href="/appointment/"><?php echo esc_html( tabiji_clinic_t( 'hero_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
