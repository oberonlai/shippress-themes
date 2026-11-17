<?php
/**
 * Title: First screen: seal and wordmark
 * Slug: kosame-hotpot/seal
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Description: The paper half of the first screen: an azuki seal (a split pot seen from above) above the stacked KOSAME wordmark.
 */
?>
<!-- wp:group {"anchor":"top","className":"ks-seal","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group ks-seal"><!-- wp:html -->
<svg class="ks-seal__mark" width="88" height="88" viewBox="0 0 88 88" aria-hidden="true" focusable="false"><circle cx="44" cy="44" r="44" fill="#96514D"/><circle cx="44" cy="44" r="31" fill="none" stroke="#FAFAFA" stroke-width="1.5"/><line x1="44" y1="13" x2="44" y2="75" stroke="#FAFAFA" stroke-width="1.5"/></svg>
<!-- /wp:html -->

<!-- wp:heading {"level":1,"className":"ks-seal__h1"} -->
<h1 class="wp-block-heading ks-seal__h1"><?php echo esc_html( kosame_hotpot_t( 'seal_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-seal__sub"} -->
<p class="ks-seal__sub"><span class="ks-seal__a"><?php echo esc_html( kosame_hotpot_t( 'seal_sub' ) ); ?></span><span class="ks-seal__b"> · <?php echo esc_html( kosame_hotpot_t( 'seal_place' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-seal__line"} -->
<p class="ks-seal__line"><?php echo esc_html( kosame_hotpot_t( 'seal_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
