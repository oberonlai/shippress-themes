<?php
/**
 * Title: Template: page not found
 * Slug: hisui-clinic/tpl-404
 * Categories: hisui-clinic
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"hc-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec"><!-- wp:group {"className":"hc-wrap hc-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--read"><!-- wp:heading {"level":1,"className":"hc-h1"} -->
<h1 class="wp-block-heading hc-h1"><?php echo esc_html( hisui_clinic_t( 'tpl_404_h' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'tpl_404_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'tpl_home' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
