<?php
/**
 * Title: Home: two family quotes
 * Slug: hidamari-care/family-voices
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: Two short family quotes side by side, no portraits.
 */
?>
<!-- wp:group {"tagName":"section","className":"hc-voices","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-voices"><!-- wp:group {"className":"hc-voices__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-voices__head"><!-- wp:paragraph {"className":"hc-eyebrow"} -->
<p class="hc-eyebrow"><?php echo esc_html( hidamari_care_t( 'fv_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hc-sec__title"} -->
<h2 class="wp-block-heading hc-sec__title"><?php echo esc_html( hidamari_care_t( 'fv_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-voices__pair","layout":{"type":"default"}} -->
<div class="wp-block-group hc-voices__pair"><!-- wp:quote {"className":"hc-voices__q"} -->
<blockquote class="wp-block-quote hc-voices__q"><!-- wp:paragraph -->
<p><?php echo esc_html( hidamari_care_t( 'q1' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html( hidamari_care_t( 'q1_by' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"hc-voices__q"} -->
<blockquote class="wp-block-quote hc-voices__q"><!-- wp:paragraph -->
<p><?php echo esc_html( hidamari_care_t( 'q2' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html( hidamari_care_t( 'q2_by' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
