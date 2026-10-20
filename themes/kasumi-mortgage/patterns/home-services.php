<?php
/**
 * Title: Home: what we arrange and what it costs
 * Slug: kasumi-mortgage/home-services
 * Categories: kasumi-mortgage
 * Keywords: courses, fees, prices
 * Viewport Width: 1440
 * Description: A paragraph on fees and four plain lines beside a photograph of a couple reading their offer.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-section"><!-- wp:group {"align":"wide","className":"km-split km-split--flip km-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-split km-split--flip km-split--top"><!-- wp:group {"className":"km-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'services_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-split__title"} -->
<h2 class="wp-block-heading km-split__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_services_01' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'home_services_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled km-prices"} -->
<ul class="wp-block-list is-style-ruled km-prices"><!-- wp:list-item -->
<li><?php echo wp_kses_post( kasumi_mortgage_t( 'home_services_03' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kasumi_mortgage_t( 'home_services_04' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kasumi_mortgage_t( 'home_services_05' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kasumi_mortgage_t( 'home_services_06' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/mortgages/"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_services_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"km-split__photo km-split__photo--wide"} -->
<figure class="wp-block-image size-large km-split__photo km-split__photo--wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/older-couple-garden.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'services_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_services_08' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
