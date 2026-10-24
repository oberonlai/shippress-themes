<?php
/**
 * Title: Journal head
 * Slug: hodoki-clinic/page-journal-head
 * Categories: hodoki-clinic
 * Keywords: home
 * Viewport Width: 1440
 * Description: Title and lead of the journal page.
 */
$hd = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hd-sec hd-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-sec hd-pagehead"><!-- wp:group {"className":"hd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hd-wrap"><!-- wp:heading {"level":1,"className":"hd-h1"} -->
<h1 class="wp-block-heading hd-h1"><?php echo wp_kses_post( hodoki_clinic_t( 'k6b2b5614' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hd-lead"} -->
<p class="hd-lead"><?php echo wp_kses_post( hodoki_clinic_t( 'ke1b86ec9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
