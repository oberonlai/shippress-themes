<?php
/**
 * Title: Not found
 * Slug: katachi-ergonomics/tpl-404
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk
 * Viewport Width: 1440
 * Inserter: no
 * Description: Not found message with a way back.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ke-sec ke-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ke-sec ke-pagehead"><!-- wp:paragraph {"className":"ke-label"} -->
<p class="ke-label"><?php echo esc_html( katachi_ergonomics_t( 'nf_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ke-h1 ke-h1--page"} -->
<h1 class="wp-block-heading ke-h1 ke-h1--page"><?php echo esc_html( katachi_ergonomics_t( 'nf_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-body"} -->
<p class="ke-body"><?php echo esc_html( katachi_ergonomics_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-more"} -->
<p class="ke-more"><a href="<?php echo katachi_ergonomics_url( '/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'nf_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->

