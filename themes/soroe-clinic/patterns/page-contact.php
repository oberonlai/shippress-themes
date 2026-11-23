<?php
/**
 * Title: Page: Contact
 * Slug: soroe-clinic/page-contact
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: Page: Contact
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-phero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-phero"><!-- wp:group {"className":"so-phero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group so-phero__grid"><!-- wp:group {"className":"so-phero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group so-phero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"so-phero__img"} -->
<figure class="wp-block-image size-full so-phero__img"><img src="<?php echo soroe_clinic_img( 'p13-exterior-linden-row.webp' ); ?>" alt="<?php echo soroe_clinic_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"so-chips","layout":{"type":"default"}} -->
<div class="wp-block-group so-chips"><!-- wp:paragraph {"className":"so-chip so-chip--phone"} -->
<p class="so-chip so-chip--phone"><a href="tel:+0020555190"><?php echo esc_html( soroe_clinic_t( 'phone' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-chip so-chip--pin"} -->
<p class="so-chip so-chip--pin"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'chip_addr' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-chip so-chip--book"} -->
<p class="so-chip so-chip--book"><a href="<?php echo esc_url( home_url( '/first-visit/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'cta_book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-phero__text","layout":{"type":"default"}} -->
<div class="wp-block-group so-phero__text"><!-- wp:paragraph {"className":"so-eyebrow"} -->
<p class="so-eyebrow"><?php echo esc_html( soroe_clinic_t( 'ct_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"so-phero__h"} -->
<h1 class="wp-block-heading so-phero__h"><?php echo esc_html( soroe_clinic_t( 'ct_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-phero__lead"} -->
<p class="so-phero__lead"><?php echo esc_html( soroe_clinic_t( 'ct_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-isec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-isec"><!-- wp:group {"className":"so-isec__grid","layout":{"type":"default"}} -->
<div class="wp-block-group so-isec__grid"><!-- wp:group {"className":"so-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"so-h2s"} -->
<h2 class="wp-block-heading so-h2s"><?php echo esc_html( soroe_clinic_t( 'ct_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:separator {"className":"so-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity so-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group so-isec__body"><!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'ct_s1_1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'ct_s1_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-cdetails","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-cdetails"><!-- wp:group {"className":"so-cdetails__grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group so-cdetails__grid sp-stagger"><!-- wp:group {"className":"so-cd sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-cd sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'ct_addr_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-cd__v"} -->
<p class="so-cd__v"><?php echo esc_html( soroe_clinic_t( 'f_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-cd sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-cd sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'ct_phone_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-cd__v"} -->
<p class="so-cd__v"><a href="tel:+0020555190"><?php echo esc_html( soroe_clinic_t( 'phone' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-cd sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-cd sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'ct_mail_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-cd__v"} -->
<p class="so-cd__v"><a href="mailto:hello@soroeclinic.example"><?php echo esc_html( soroe_clinic_t( 'email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-cd sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-cd sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'ct_bus_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-cd__v so-cd__v--s"} -->
<p class="so-cd__v so-cd__v--s"><?php echo esc_html( soroe_clinic_t( 'ct_bus' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-isec so-isec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-isec so-isec--ground"><!-- wp:group {"className":"so-isec__grid","layout":{"type":"default"}} -->
<div class="wp-block-group so-isec__grid"><!-- wp:group {"className":"so-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"so-h2s"} -->
<h2 class="wp-block-heading so-h2s"><?php echo esc_html( soroe_clinic_t( 'ct_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:separator {"className":"so-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity so-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group so-isec__body"><!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'ct_s2_1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'ct_s2_2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"so-hours"} -->
<figure class="wp-block-table so-hours"><table><tbody><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d1' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h1' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d2' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h2' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d3' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h3' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d4' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h4' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d5' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h5' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d6' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h6' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d7' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h7' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-isec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-isec"><!-- wp:group {"className":"so-isec__grid","layout":{"type":"default"}} -->
<div class="wp-block-group so-isec__grid"><!-- wp:group {"className":"so-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"so-h2s"} -->
<h2 class="wp-block-heading so-h2s"><?php echo esc_html( soroe_clinic_t( 'ct_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:separator {"className":"so-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity so-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group so-isec__body"><!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'ct_s3_1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'ct_s3_2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"so-formcell","layout":{"type":"default"}} -->
<div class="wp-block-group so-formcell"><!-- wp:heading {"level":3,"className":"so-h3s"} -->
<h3 class="wp-block-heading so-h3s"><?php echo esc_html( soroe_clinic_t( 'ct_form_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"className":"so-form","layout":{"type":"default"}} -->
<div class="wp-block-group so-form"><?php
ob_start(); ?>
<!-- wp:buttons {"className":"so-btn so-btn--arrow-wrap"} -->
<div class="wp-block-buttons so-btn so-btn--arrow-wrap"><!-- wp:button {"className":"so-btn so-btn--arrow"} -->
<div class="wp-block-button so-btn so-btn--arrow"><a class="wp-block-button__link wp-element-button" href="mailto:hello@soroeclinic.example?subject=<?php echo rawurlencode( soroe_clinic_t( 'contact_mail_subject' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'contact_email_button' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"so-fine"} -->
<p class="so-fine"><?php echo esc_html( soroe_clinic_t( 'forms_phone_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
