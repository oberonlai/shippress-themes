<?php
/**
 * Title: Footer: company name, letter, links, company details and the base line
 * Slug: tsumugi-trading/footer-main
 * Categories: tsumugi-trading
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: The footer: the company name and line, the newsletter note, the page links, the synced company details and the legal line.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"tt-foot","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull tt-foot"><!-- wp:group {"align":"wide","className":"tt-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-foot__grid"><!-- wp:group {"className":"tt-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group tt-foot__brand"><!-- wp:paragraph {"className":"tt-foot__mark"} -->
<p class="tt-foot__mark"><?php echo wp_kses_post( tsumugi_trading_t( 'footer_main_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tt-foot__line"} -->
<p class="tt-foot__line"><?php echo wp_kses_post( tsumugi_trading_t( 'footer_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tt-foot__letter"} -->
<p class="tt-foot__letter"><?php echo wp_kses_post( tsumugi_trading_t( 'footer_main_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group tt-foot__links"><!-- wp:paragraph {"className":"tt-foot__kicker"} -->
<p class="tt-foot__kicker"><?php echo wp_kses_post( tsumugi_trading_t( 'footer_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tt-foot__list"} -->
<p class="tt-foot__list"><?php echo wp_kses_post( tsumugi_trading_t( 'footer_main_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-foot__school","layout":{"type":"default"}} -->
<div class="wp-block-group tt-foot__school"><!-- wp:pattern {"slug":"tsumugi-trading/office"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"tt-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-foot__base"><!-- wp:paragraph {"className":"tt-foot__legal"} -->
<p class="tt-foot__legal"><?php echo wp_kses_post( tsumugi_trading_t( 'footer_main_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tt-foot__legal"} -->
<p class="tt-foot__legal"><?php echo wp_kses_post( tsumugi_trading_t( 'footer_main_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
