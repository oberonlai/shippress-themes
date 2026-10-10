<?php
/**
 * Title: Home: the pieces (product grid)
 * Slug: wagu-mono/home-pieces
 * Categories: wagu-mono, featured
 * Keywords: products, pieces, furniture, grid, shop
 * Viewport Width: 1440
 * Description: Eight pieces as numbered cards with wood and price, linking to the shop. The list lives in wagu_mono_pieces() in functions.php.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"pieces","align":"full","className":"wm-section wm-section--pieces","layout":{"type":"constrained"}} -->
<section id="pieces" class="wp-block-group alignfull wm-section wm-section--pieces"><!-- wp:group {"align":"wide","className":"wm-head wm-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wm-head wm-head--row"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">V · The pieces</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">On the showroom <em>floor</em></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group wm-stack"><!-- wp:paragraph -->
<p>Eight pieces we make again and again. Each one can be ordered in oak or walnut and, for most, in your own length or height.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/shop/">All pieces in the shop</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"wm-pieces","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wm-pieces"><?php
$wagu_mono_n = 0;
foreach ( array_keys( wagu_mono_pieces() ) as $wagu_mono_key ) {
	echo ( $wagu_mono_n ? "\n\n" : '' ) . wagu_mono_piece_card( $wagu_mono_key, ++$wagu_mono_n ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
