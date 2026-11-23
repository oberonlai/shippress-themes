<?php
/**
 * Title: Page: Letters from the chair
 * Slug: soroe-clinic/page-newsletter
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: Page: Letters from the chair
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-nl","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-nl"><!-- wp:group {"className":"so-nl__grid","layout":{"type":"default"}} -->
<div class="wp-block-group so-nl__grid"><!-- wp:group {"className":"so-nl__text","layout":{"type":"default"}} -->
<div class="wp-block-group so-nl__text"><!-- wp:paragraph {"className":"so-eyebrow"} -->
<p class="so-eyebrow"><?php echo esc_html( soroe_clinic_t( 'nl_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"so-phero__h"} -->
<h1 class="wp-block-heading so-phero__h"><?php echo esc_html( soroe_clinic_t( 'nl_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-phero__lead"} -->
<p class="so-phero__lead"><?php echo esc_html( soroe_clinic_t( 'nl_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"so-h2s so-nl__h2"} -->
<h2 class="wp-block-heading so-h2s so-nl__h2"><?php echo esc_html( soroe_clinic_t( 'nl_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'nl_s1_1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'nl_s1_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-nl__photo","layout":{"type":"default"}} -->
<div class="wp-block-group so-nl__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"so-photo"} -->
<figure class="wp-block-image size-full so-photo"><img src="<?php echo soroe_clinic_img( 'p10-note-mariam.webp' ); ?>" alt="<?php echo soroe_clinic_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-nlform","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-nlform"><!-- wp:group {"className":"so-nlform__in","layout":{"type":"default"}} -->
<div class="wp-block-group so-nlform__in"><!-- wp:group {"className":"so-nlform__l","layout":{"type":"default"}} -->
<div class="wp-block-group so-nlform__l"><!-- wp:heading {"level":2,"className":"so-h2s"} -->
<h2 class="wp-block-heading so-h2s"><?php echo esc_html( soroe_clinic_t( 'nl_form_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:heading {"level":3,"className":"so-nlform__q"} -->
<h3 class="wp-block-heading so-nlform__q"><?php echo esc_html( soroe_clinic_t( 'nl_s2_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'nl_s2_1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'nl_s2_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-nlform__r","layout":{"type":"default"}} -->
<div class="wp-block-group so-nlform__r"><!-- wp:group {"className":"so-form","layout":{"type":"default"}} -->
<div class="wp-block-group so-form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@soroeclinic.example', 'label' => soroe_clinic_t( 'forms_email' ), 'submit' => soroe_clinic_t( 'forms_subscribe' ), 'notice' => soroe_clinic_t( 'forms_mail_notice' ), 'subject' => soroe_clinic_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
