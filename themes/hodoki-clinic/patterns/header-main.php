<?php
/**
 * Title: Header: wordmark, phone, pills and centred navigation
 * Slug: hodoki-clinic/header-main
 * Categories: hodoki-clinic
 * Description: Wordmark left, phone and hours with two pills at the right, a centred slash-separated menu row beneath.
 */
?>
<!-- wp:group {"className":"hd-bar","layout":{"type":"default"}} -->
<div class="wp-block-group hd-bar"><!-- wp:group {"className":"hd-bar1","layout":{"type":"default"}} -->
<div class="wp-block-group hd-bar1"><!-- wp:html -->
<div class="hd-mark"><a href="/"><?php echo wp_kses_post( hodoki_clinic_t( 'k92169044' ) ); ?></a></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hd-bar1__r","layout":{"type":"default"}} -->
<div class="wp-block-group hd-bar1__r"><!-- wp:paragraph {"className":"hd-tel"} -->
<p class="hd-tel"><a href="tel:+15550142300"><?php echo wp_kses_post( hodoki_clinic_t( 'kaeaf708b' ) ); ?></a><br><small><?php echo wp_kses_post( hodoki_clinic_t( 'k7085c4fd' ) ); ?></small></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hd-hbtns"} -->
<div class="wp-block-buttons hd-hbtns"><!-- wp:button {"className":"hd-pill hd-pill--fill"} -->
<div class="wp-block-button hd-pill hd-pill--fill"><a class="wp-block-button__link wp-element-button" href="/first-visit/"><?php echo wp_kses_post( hodoki_clinic_t( 'k36e1e09f' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"hd-pill hd-pill--soft"} -->
<div class="wp-block-button hd-pill hd-pill--soft"><a class="wp-block-button__link wp-element-button" href="/first-visit/"><?php echo wp_kses_post( hodoki_clinic_t( 'kfc206df9' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"hd-nav","layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group -->