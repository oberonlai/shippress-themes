<?php
/**
 * Title: Not found
 * Slug: hodoki-clinic/page-notfound
 * Categories: hodoki-clinic
 * Keywords: home
 * Viewport Width: 1440
 * Description: The 404 message.
 */
$hd = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hd-sec hd-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-sec hd-pagehead"><!-- wp:group {"className":"hd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hd-wrap"><!-- wp:heading {"level":1,"className":"hd-h1"} -->
<h1 class="wp-block-heading hd-h1"><?php echo wp_kses_post( hodoki_clinic_t( 'k12b8a9b0' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hd-lead"} -->
<p class="hd-lead"><?php echo wp_kses_post( hodoki_clinic_t( 'k6f4cd1b1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hd-btns"} -->
<div class="wp-block-buttons hd-btns"><!-- wp:button {"className":"hd-pill hd-pill--fill"} -->
<div class="wp-block-button hd-pill hd-pill--fill"><a class="wp-block-button__link wp-element-button" href="/first-visit/"><?php echo wp_kses_post( hodoki_clinic_t( 'kfca8a5d7' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
