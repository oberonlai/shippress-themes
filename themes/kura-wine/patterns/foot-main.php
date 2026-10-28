<?php
/**
 * Title: Footer
 * Slug: kura-wine/foot-main
 * Categories: kura-wine
 * Keywords: wine, shop, merchant
 * Viewport Width: 1440
 * Description: Seal, address, hours and menu on the ground colour.
 */
?>
<!-- wp:group {"align":"wide","className":"kw-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kw-foot__grid"><!-- wp:group {"className":"kw-foot__name","layout":{"type":"default"}} -->
<div class="wp-block-group kw-foot__name"><!-- wp:site-title {"level":0,"className":"kw-mark"} /-->

<!-- wp:paragraph {"className":"kw-foot__line"} -->
<p class="kw-foot__line"><?php echo esc_html( kura_wine_t( 'ft_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kw-foot__col"><!-- wp:paragraph {"className":"kw-foot__h"} -->
<p class="kw-foot__h"><?php echo esc_html( kura_wine_t( 'ft_addr_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-foot__text"} -->
<p class="kw-foot__text"><?php echo kura_wine_lines( 'ft_addr' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kw-foot__col"><!-- wp:paragraph {"className":"kw-foot__h"} -->
<p class="kw-foot__h"><?php echo esc_html( kura_wine_t( 'ft_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-foot__text"} -->
<p class="kw-foot__text"><?php echo kura_wine_lines( 'ft_hours' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","className":"kw-foot__nav","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kw-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kw-foot__base"><!-- wp:paragraph {"className":"kw-foot__legal"} -->
<p class="kw-foot__legal"><?php echo esc_html( kura_wine_t( 'ft_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
