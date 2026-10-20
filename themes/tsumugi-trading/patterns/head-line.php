<?php
/**
 * Title: Header: line under the company name
 * Slug: tsumugi-trading/head-line
 * Categories: tsumugi-trading
 * Keywords: header
 * Viewport Width: 1440
 * Inserter: no
 * Description: The small line under the company name in the header.
 */
?>
<!-- wp:paragraph {"className":"tt-brand__line"} -->
<p class="tt-brand__line"><?php echo wp_kses_post( tsumugi_trading_t( 'head_line_01' ) ); ?></p>
<!-- /wp:paragraph -->
