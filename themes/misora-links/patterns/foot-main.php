<?php
/**
 * Title: Footer: club details
 * Slug: misora-links/foot-main
 * Categories: misora-links
 * Viewport Width: 1440
 * Description: Address and hours for the footer.
 */
?>
<!-- wp:group {"className":"ml-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ml-foot__grid"><!-- wp:group {"className":"ml-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ml-foot__col"><!-- wp:paragraph {"className":"ml-foot__mark"} -->
<p class="ml-foot__mark"><?php echo esc_html( misora_links_t( 'foot_name' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__addr"} -->
<p class="ml-foot__addr"><?php echo esc_html( misora_links_t( 'foot_addr' ) ); ?><br><?php echo esc_html( misora_links_t( 'foot_mail' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ml-foot__col"><!-- wp:paragraph {"className":"ml-foot__h"} -->
<p class="ml-foot__h"><?php echo esc_html( misora_links_t( 'foot_hh' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-foot__hours"} -->
<p class="ml-foot__hours"><?php echo esc_html( misora_links_t( 'foot_h1' ) ); ?><br><?php echo esc_html( misora_links_t( 'foot_h2' ) ); ?><br><?php echo esc_html( misora_links_t( 'foot_h3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
