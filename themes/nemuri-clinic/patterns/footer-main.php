<?php
/**
 * Title: Footer: clinic details and notice
 * Slug: nemuri-clinic/footer-main
 * Categories: nemuri-clinic
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"nc-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nc-footer"><!-- wp:group {"className":"nc-f__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nc-f__grid"><!-- wp:group {"className":"nc-f__a","layout":{"type":"default"}} -->
<div class="wp-block-group nc-f__a"><!-- wp:site-title {"level":0,"className":"nc-f__brand"} /-->

<!-- wp:paragraph {"className":"nc-f__p"} -->
<p class="nc-f__p"><?php echo wp_kses_post( nemuri_clinic_t( 'k541f8ba9' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nc-f__tel"} -->
<p class="nc-f__tel"><a href="tel:+12065550142">(206) 555-0142</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nc-f__p"} -->
<p class="nc-f__p"><a href="mailto:hello@nemuriclinic.example"><?php echo wp_kses_post( nemuri_clinic_t( 'kcf550586' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-f__b","layout":{"type":"default"}} -->
<div class="wp-block-group nc-f__b"><!-- wp:navigation {"overlayMenu":"never","className":"nc-fnav","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<?php echo nemuri_clinic_lang_switch( 'nc-langs nc-langs--foot' ); ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"nc-f__copy"} -->
<p class="nc-f__copy"><?php echo wp_kses_post( nemuri_clinic_t( 'kcb9f632d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
