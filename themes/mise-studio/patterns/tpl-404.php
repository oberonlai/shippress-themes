<?php
/**
 * Title: Template: not found
 * Slug: mise-studio/tpl-404
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: The 404 page: ring title and a link home.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec "><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"level":1,"className":"ms-h1 ms-h1--ring"} -->
<h1 class="wp-block-heading ms-h1 ms-h1--ring"><?php echo esc_html( mise_studio_t( 'nf_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet"><!-- wp:paragraph -->
<p><?php echo esc_html( mise_studio_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-dot"} -->
<p class="ms-dot"><a href="/"><?php echo esc_html( mise_studio_t( 'nf_home' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
