<?php
/**
 * Title: Home: visit
 * Slug: megumi-pharmacy/front-visit
 * Categories: megumi-pharmacy
 * Keywords: visit, address, hours
 * Viewport Width: 1440
 * Description: Address, hours and phone as white text directly on a second parallax photograph, the shopfront.
 */
$img = get_theme_file_uri( 'assets/images/p09-shopfront.webp' );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img ); ?>","dimRatio":50,"customOverlayColor":"#383736","minHeight":680,"minHeightUnit":"px","isDark":true,"align":"full","className":"mp-visit sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull mp-visit sp-parallax" style="min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#383736"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( megumi_pharmacy_t( 'ac3ca92c2' ) ); ?>" src="<?php echo esc_url( $img ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"mp-visit__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-visit__col sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker"><?php echo wp_kses_post( megumi_pharmacy_t( 'k5e706a9b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mp-h2"} -->
<h2 class="wp-block-heading mp-h2"><?php echo wp_kses_post( megumi_pharmacy_t( 'k5058aca2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mp-hours"} -->
<p class="mp-hours"><?php echo wp_kses_post( megumi_pharmacy_t( 'k84e855f9' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-hours"} -->
<p class="mp-hours"><?php echo wp_kses_post( megumi_pharmacy_t( 'kf027c58a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mp-btn mp-btn--light"} -->
<div class="wp-block-button mp-btn mp-btn--light"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo wp_kses_post( megumi_pharmacy_t( 'kf8ac853c' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
