<?php
/**
 * Title: Template: not found
 * Slug: kaze-clinic/tpl-404
 * Categories: kaze-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: A 404 message and a link home.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec kz-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec kz-pagehead"><!-- wp:group {"className":"kz-wrap kz-wrap--lead","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--lead"><!-- wp:heading {"level":1,"className":"kz-h1"} -->
<h1 class="wp-block-heading kz-h1"><?php echo esc_html( kaze_clinic_t( 'nf_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kaze_clinic_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-link"} -->
<p class="kz-link"><a href="/"><?php echo esc_html( kaze_clinic_t( 'nf_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
