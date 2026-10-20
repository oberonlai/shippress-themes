<?php
/**
 * Title: Home: head office and contact
 * Slug: tsumugi-trading/front-close
 * Categories: tsumugi-trading
 * Keywords: home, company, contact
 * Viewport Width: 1440
 * Description: A photograph of the harbour pier beside the head office address, the Pier 9 warehouse and the enquiry button.
 */
?>
<!-- wp:group {"tagName":"section","className":"tt-fp tt-close","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-fp tt-close"><!-- wp:group {"className":"tt-fp__in tt-close__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-fp__in tt-close__in"><!-- wp:group {"className":"tt-find__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tt-find__grid"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-find__photo"} -->
<figure class="wp-block-image size-large tt-find__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/reception-lobby.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'front_find_01' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tt-find__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tt-find__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'front_find_02' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tsumugi_trading_t( 'front_find_03' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_find_04' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tt-small"} -->
<p class="tt-small"><?php echo wp_kses_post( tsumugi_trading_t( 'front_find_05' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( tsumugi_trading_t( 'front_find_06' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo wp_kses_post( tsumugi_trading_t( 'front_find_07' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
