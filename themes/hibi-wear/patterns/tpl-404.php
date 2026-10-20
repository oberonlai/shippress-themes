<?php
/**
 * Title: 404
 * Slug: hibi-wear/tpl-404
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Inserter: no
 * Description: T1 head and a circle home.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-pagehead hw-pagehead--plain","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-pagehead hw-pagehead--plain"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'nf_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h hw-h--page","level":1} -->
<h1 class="wp-block-heading hw-h hw-h--page"><?php echo hibi_wear_lines( 'nf_title' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hw-lead"} -->
<p class="hw-lead"><?php echo esc_html( hibi_wear_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-go"} -->
<p class="hw-go"><a class="hw-go__circle" href="/" aria-label="<?php echo esc_attr( hibi_wear_t( 'home_go' ) ); ?>">→</a><a class="hw-go__text" href="/"><?php echo esc_html( hibi_wear_t( 'home_go' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
