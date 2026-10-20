<?php
/**
 * Title: Leadership: page head
 * Slug: tsumugi-trading/advisers-head
 * Categories: tsumugi-trading
 * Keywords: leadership, directors
 * Viewport Width: 1440
 * Description: Title and a short paragraph about the directors and desk leads.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-head"><!-- wp:group {"align":"wide","className":"tt-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-head__grid"><!-- wp:group {"className":"tt-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group tt-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'home_advisers_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tt-head__title"} -->
<h1 class="wp-block-heading tt-head__title"><?php echo wp_kses_post( tsumugi_trading_t( 'advisers_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group tt-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( tsumugi_trading_t( 'advisers_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
