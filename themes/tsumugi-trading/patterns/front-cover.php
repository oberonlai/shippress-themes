<?php
/**
 * Title: Home: inset port photograph with a line of milestone years
 * Slug: tsumugi-trading/front-cover
 * Categories: tsumugi-trading
 * Keywords: home, company, trading
 * Viewport Width: 1440
 * Description: A full-width photograph of the container port at dawn, inset under soft rounded top corners, with the headline at its lower left, an outlined round contact link and a hairline of milestone years along its foot.
 */
?>
<!-- wp:group {"tagName":"section","className":"tt-cover","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tt-cover"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-cover__photo"} -->
<figure class="wp-block-image size-large tt-cover__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/port-dawn.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'front_cover_alt' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tt-cover__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tt-cover__copy"><!-- wp:paragraph {"className":"tt-cover__label"} -->
<p class="tt-cover__label"><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_01' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tt-cover__title"} -->
<h1 class="wp-block-heading tt-cover__title"><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_02' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tt-cover__lead"} -->
<p class="tt-cover__lead"><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_03' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/business/"><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_04' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tt-cover__circle"} -->
<p class="tt-cover__circle"><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_05' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tt-cover__line","layout":{"type":"default"}} -->
<div class="wp-block-group tt-cover__line"><!-- wp:list {"className":"tt-yearline"} -->
<ul class="wp-block-list tt-yearline"><!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_y1' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_y2' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_y3' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_y4' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_y5' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'front_cover_y6' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
