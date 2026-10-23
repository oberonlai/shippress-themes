<?php
/**
 * Title: Journal head
 * Slug: kotoba-language/page-journal-head
 * Categories: kotoba-language
 * Description: Journal index heading and introduction.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kl-sec kl-pagehead","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-pagehead"><!-- wp:group {"className":"kl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'journal_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kl-h1"} -->
<h1 class="wp-block-heading kl-h1"><?php echo esc_html( kotoba_language_t( 'journal_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-lede"} -->
<p class="kl-lede"><?php echo esc_html( kotoba_language_t( 'journal_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body kl-narrow-p"} -->
<p class="kl-body kl-narrow-p"><?php echo esc_html( kotoba_language_t( 'journal_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->