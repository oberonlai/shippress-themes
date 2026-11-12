<?php
/**
 * Title: Home: full-bleed parallax interlude
 * Slug: hisui-clinic/front-interlude
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: A wide morning laboratory photograph that drifts slowly with scroll, with one still frosted caption plate.
 */
?>
<!-- wp:group {"className":"hc-inter sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-inter sp-parallax"><!-- wp:html -->
<figure class="hc-inter__pic"><img src="<?php echo hisui_clinic_img( 'M1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_M1' ) ); ?>" width="1800" height="700" decoding="async" loading="lazy"/></figure>
<div class="hc-inter__plate"><p><?php echo esc_html( hisui_clinic_t( 'int_cap' ) ); ?></p></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
