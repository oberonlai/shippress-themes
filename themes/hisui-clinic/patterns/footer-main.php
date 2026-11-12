<?php
/**
 * Title: Footer: newsletter line, links, hours and emergency notice
 * Slug: hisui-clinic/footer-main
 * Categories: hisui-clinic
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"hc-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-foot"><!-- wp:group {"className":"hc-wrap hc-foot__nl","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-foot__nl"><!-- wp:paragraph {"className":"hc-foot__nlp"} -->
<p class="hc-foot__nlp"><?php echo esc_html( hisui_clinic_t( 'vis_nl_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"hc-foot__form","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@hisui-clinic.example', 'label' => hisui_clinic_t( 'forms_email' ), 'submit' => hisui_clinic_t( 'forms_subscribe' ), 'notice' => hisui_clinic_t( 'forms_mail_notice' ), 'subject' => hisui_clinic_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-wrap hc-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-foot__cols"><!-- wp:group {"className":"hc-foot__col hc-foot__col--brand","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__col hc-foot__col--brand"><!-- wp:paragraph {"className":"hc-foot__logo"} -->
<p class="hc-foot__logo">Hisui Clinic</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'ft_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__col"><!-- wp:paragraph {"className":"hc-foot__h"} -->
<p class="hc-foot__h"><?php echo esc_html( hisui_clinic_t( 'ft_h_con' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<ul class="hc-foot__list"><li><a href="<?php echo esc_url( home_url( '/diabetes/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'ft_c1' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/thyroid-pituitary/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'ft_c2' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/hormones/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'ft_c3' ) ); ?></a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__col"><!-- wp:paragraph {"className":"hc-foot__h"} -->
<p class="hc-foot__h"><?php echo esc_html( hisui_clinic_t( 'ft_h_clinic' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<ul class="hc-foot__list"><li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'ft_k1' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/your-plan/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'ft_k2' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'ft_k3' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'ft_k4' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'ft_k5' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'ft_k6' ) ); ?></a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__col"><!-- wp:paragraph {"className":"hc-foot__h"} -->
<p class="hc-foot__h"><?php echo esc_html( hisui_clinic_t( 'ft_h_hours' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'ft_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-wrap hc-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-foot__base"><!-- wp:paragraph {"className":"hc-foot__emerg"} -->
<p class="hc-foot__emerg"><?php echo esc_html( hisui_clinic_t( 'ft_emerg' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hc-foot__copy"} -->
<p class="hc-foot__copy"><?php echo esc_html( hisui_clinic_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
