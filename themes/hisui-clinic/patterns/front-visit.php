<?php
/**
 * Title: Home: visit and newsletter band
 * Slug: hisui-clinic/front-visit
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: A pale band with the entrance photograph, address and hours, a booking pill and the newsletter form slot.
 */
?>
<!-- wp:group {"className":"hc-sec hc-sec--visit","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--visit"><!-- wp:group {"className":"hc-wrap hc-visit","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-visit"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-visit__pic"} -->
<figure class="wp-block-image size-full hc-visit__pic"><img src="<?php echo hisui_clinic_img( 'E1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_E1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-visit__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-visit__t"><!-- wp:heading {"level":2,"className":"hc-h3"} -->
<h2 class="wp-block-heading hc-h3"><?php echo esc_html( hisui_clinic_t( 'vis_addr_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-visit__a"} -->
<p class="hc-visit__a"><?php echo esc_html( hisui_clinic_t( 'vis_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'vis_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'vis_tel' ) ); ?> · <a href="mailto:hello@hisui-clinic.example"><?php echo esc_html( hisui_clinic_t( 'vis_mail' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'vis_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-visit__nl hc-form-sec","layout":{"type":"default"}} -->
<div class="wp-block-group hc-visit__nl hc-form-sec"><!-- wp:heading {"level":2,"className":"hc-h3"} -->
<h2 class="wp-block-heading hc-h3"><?php echo esc_html( hisui_clinic_t( 'vis_nl_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'vis_nl_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-visit__form","layout":{"type":"default"}} -->
<div class="wp-block-group hc-visit__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@hisui-clinic.example', 'label' => hisui_clinic_t( 'forms_email' ), 'submit' => hisui_clinic_t( 'forms_subscribe' ), 'notice' => hisui_clinic_t( 'forms_mail_notice' ), 'subject' => hisui_clinic_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
