<?php
/**
 * Title: Home: the four lines and how we quote
 * Slug: hagane-machinery/home-services
 * Categories: hagane-machinery
 * Keywords: machines, lines
 * Viewport Width: 1440
 * Description: A paragraph on the four lines and their lead times beside a photograph of a spindle cartridge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section"><!-- wp:group {"align":"wide","className":"hm-split hm-split--flip hm-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-split hm-split--flip hm-split--top"><!-- wp:group {"className":"hm-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'services_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hm-split__title"} -->
<h2 class="wp-block-heading hm-split__title"><?php echo wp_kses_post( hagane_machinery_t( 'home_services_01' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'home_services_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled hm-prices"} -->
<ul class="wp-block-list is-style-ruled hm-prices"><!-- wp:list-item -->
<li><?php echo wp_kses_post( hagane_machinery_t( 'home_services_03' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hagane_machinery_t( 'home_services_04' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hagane_machinery_t( 'home_services_05' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hagane_machinery_t( 'home_services_06' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/machines/"><?php echo wp_kses_post( hagane_machinery_t( 'home_services_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-split__photo hm-split__photo--wide"} -->
<figure class="wp-block-image size-large hm-split__photo hm-split__photo--wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/spindle-detail.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'services_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( hagane_machinery_t( 'home_services_08' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
