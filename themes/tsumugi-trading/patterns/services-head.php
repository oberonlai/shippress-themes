<?php
/**
 * Title: Business: page head
 * Slug: tsumugi-trading/services-head
 * Categories: tsumugi-trading
 * Keywords: business
 * Viewport Width: 1440
 * Description: Title and paragraph beside a photograph of a quay crane.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-head tt-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-head tt-head--photo"><!-- wp:group {"align":"wide","className":"tt-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-head__grid"><!-- wp:group {"className":"tt-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group tt-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'services_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tt-head__title"} -->
<h1 class="wp-block-heading tt-head__title"><?php echo wp_kses_post( tsumugi_trading_t( 'services_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group tt-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( tsumugi_trading_t( 'services_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide tt-head__photo"} -->
<figure class="wp-block-image size-large alignwide tt-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/quay-crane.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'services_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( tsumugi_trading_t( 'services_head_05' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
