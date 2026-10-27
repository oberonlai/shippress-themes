<?php
/**
 * Title: Template: search
 * Slug: fumoto-hostel/tpl-search
 * Categories: fumoto-hostel
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"fh-main fh-main--index","layout":{"type":"constrained"}} -->
<main class="wp-block-group fh-main fh-main--index"><!-- wp:search {"label":"<?php echo esc_attr( fumoto_hostel_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( fumoto_hostel_t( 'a13348442' ) ); ?>"} /--><!-- wp:query {"query":{"perPage":9,"postType":"post","inherit":true},"layout":{"type":"default"}} --><div class="wp-block-query"><!-- wp:post-template --><!-- wp:post-title {"isLink":true} /--><!-- wp:post-excerpt /--><!-- /wp:post-template --><!-- wp:query-no-results --><!-- wp:paragraph --><p><?php echo wp_kses_post( fumoto_hostel_t( 'kbee0a8cf' ) ); ?></p><!-- /wp:paragraph --><!-- /wp:query-no-results --></div><!-- /wp:query --></main>
<!-- /wp:group -->