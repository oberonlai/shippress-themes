<?php
/**
 * Title: Home: the four business lines as stacked cards
 * Slug: tsumugi-trading/front-lines
 * Categories: tsumugi-trading
 * Keywords: home, company, trading
 * Viewport Width: 1440
 * Description: Four business lines as large cards that stack over one another while scrolling, each with a big serif title over a hairline, a photograph on the left and a short paragraph on the right.
 */
?>
<!-- wp:group {"tagName":"section","className":"tt-fp tt-lines","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-fp tt-lines"><!-- wp:group {"className":"tt-fp__in tt-lines__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-fp__in tt-lines__in"><!-- wp:group {"className":"tt-fp__head","layout":{"type":"default"}} -->
<div class="wp-block-group tt-fp__head"><!-- wp:group {"className":"tt-fp__title","layout":{"type":"default"}} -->
<div class="wp-block-group tt-fp__title"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'front_lines_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tsumugi_trading_t( 'front_lines_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tt-fp__lead"} -->
<p class="tt-fp__lead"><?php echo wp_kses_post( tsumugi_trading_t( 'front_lines_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-linestack","layout":{"type":"default"}} -->
<div class="wp-block-group tt-linestack"><!-- wp:group {"className":"tt-line tt-line--a","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line tt-line--a"><!-- wp:group {"className":"tt-line__top","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__top"><!-- wp:paragraph {"className":"tt-line__no"} -->
<p class="tt-line__no"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_1n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"tt-line__title"} -->
<h3 class="wp-block-heading tt-line__title"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_1h' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-line__body","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__body"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-line__photo"} -->
<figure class="wp-block-image size-large tt-line__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/textile-mill.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'front_line_1a' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tt-line__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__text"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_1p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/business/"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_1b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-line tt-line--b","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line tt-line--b"><!-- wp:group {"className":"tt-line__top","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__top"><!-- wp:paragraph {"className":"tt-line__no"} -->
<p class="tt-line__no"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_2n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"tt-line__title"} -->
<h3 class="wp-block-heading tt-line__title"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_2h' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-line__body","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__body"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-line__photo"} -->
<figure class="wp-block-image size-large tt-line__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ceramic-factory.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'front_line_2a' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tt-line__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__text"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_2p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/business/"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_2b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-line tt-line--c","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line tt-line--c"><!-- wp:group {"className":"tt-line__top","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__top"><!-- wp:paragraph {"className":"tt-line__no"} -->
<p class="tt-line__no"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_3n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"tt-line__title"} -->
<h3 class="wp-block-heading tt-line__title"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_3h' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-line__body","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__body"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-line__photo"} -->
<figure class="wp-block-image size-large tt-line__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cartons-packing.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'front_line_3a' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tt-line__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__text"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_3p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/business/"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_3b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-line tt-line--d","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line tt-line--d"><!-- wp:group {"className":"tt-line__top","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__top"><!-- wp:paragraph {"className":"tt-line__no"} -->
<p class="tt-line__no"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_4n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"tt-line__title"} -->
<h3 class="wp-block-heading tt-line__title"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_4h' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-line__body","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__body"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-line__photo"} -->
<figure class="wp-block-image size-large tt-line__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/warehouse-aisle.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'front_line_4a' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tt-line__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-line__text"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_4p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/business/"><?php echo wp_kses_post( tsumugi_trading_t( 'front_line_4b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
