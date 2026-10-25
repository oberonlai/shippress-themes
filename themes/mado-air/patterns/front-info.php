<?php
/**
 * Title: Home: info bar
 * Slug: mado-air/front-info
 * Categories: mado-air
 * Keywords: air purifier, landing, product
 * Viewport Width: 1440
 * Description: White bar under the hero with three launch facts and a dot pager.
 */
$u = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"align":"full","className":"ma-info","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ma-info"><!-- wp:group {"align":"wide","className":"ma-info__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ma-info__in"><!-- wp:paragraph {"className":"ma-fact"} -->
<p class="ma-fact"><?php echo wp_kses_post( mado_air_t( 'k3c856b09' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ma-fact"} -->
<p class="ma-fact"><?php echo wp_kses_post( mado_air_t( 'ka848e784' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ma-fact"} -->
<p class="ma-fact"><?php echo wp_kses_post( mado_air_t( 'ke46f6edd' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ma-dots"} -->
<p class="ma-dots"><span class="is-on"></span><span></span><span></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
