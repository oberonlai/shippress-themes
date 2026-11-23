<?php
/**
 * Title: Footer: four columns
 * Slug: soroe-clinic/footer-main
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: Dark slate footer cell: wordmark and address, hours, a link list and the Letters sign-up.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-footer","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-footer"><!-- wp:group {"className":"so-footer__cols","layout":{"type":"default"}} -->
<div class="wp-block-group so-footer__cols"><!-- wp:group {"className":"so-fcol so-fcol--brand","layout":{"type":"default"}} -->
<div class="wp-block-group so-fcol so-fcol--brand"><!-- wp:paragraph {"className":"so-fword"} -->
<p class="so-fword"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fline"} -->
<p class="so-fline"><?php echo esc_html( soroe_clinic_t( 'f_line' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall"} -->
<p class="so-fsmall"><?php echo esc_html( soroe_clinic_t( 'f_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall"} -->
<p class="so-fsmall"><a href="tel:+0020555190"><?php echo esc_html( soroe_clinic_t( 'phone' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall"} -->
<p class="so-fsmall"><a href="mailto:hello@soroeclinic.example"><?php echo esc_html( soroe_clinic_t( 'email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group so-fcol"><!-- wp:paragraph {"className":"so-flabel"} -->
<p class="so-flabel"><?php echo esc_html( soroe_clinic_t( 'f_hours' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-fhour"} -->
<p class="so-fsmall so-fhour"><span><?php echo esc_html( soroe_clinic_t( 'f_h1d' ) ); ?></span> <?php echo esc_html( soroe_clinic_t( 'f_h1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-fhour"} -->
<p class="so-fsmall so-fhour"><span><?php echo esc_html( soroe_clinic_t( 'f_h2d' ) ); ?></span> <?php echo esc_html( soroe_clinic_t( 'f_h2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-fhour"} -->
<p class="so-fsmall so-fhour"><span><?php echo esc_html( soroe_clinic_t( 'f_h3d' ) ); ?></span> <?php echo esc_html( soroe_clinic_t( 'f_h3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-fhour"} -->
<p class="so-fsmall so-fhour"><span><?php echo esc_html( soroe_clinic_t( 'f_h4d' ) ); ?></span> <?php echo esc_html( soroe_clinic_t( 'f_h4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-fhour"} -->
<p class="so-fsmall so-fhour"><span><?php echo esc_html( soroe_clinic_t( 'f_h5d' ) ); ?></span> <?php echo esc_html( soroe_clinic_t( 'f_h5' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-fhour"} -->
<p class="so-fsmall so-fhour"><span><?php echo esc_html( soroe_clinic_t( 'f_h6d' ) ); ?></span> <?php echo esc_html( soroe_clinic_t( 'f_h6' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-fhour"} -->
<p class="so-fsmall so-fhour"><span><?php echo esc_html( soroe_clinic_t( 'f_h7d' ) ); ?></span> <?php echo esc_html( soroe_clinic_t( 'f_h7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group so-fcol"><!-- wp:paragraph {"className":"so-flabel"} -->
<p class="so-flabel"><?php echo esc_html( soroe_clinic_t( 'f_links' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_about' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/treatments/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_treatments' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/how-a-course-works/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_how_a_course_works' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/review-visits/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_review_visits' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/first-visit/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_first_visit' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_fees' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/patient-notes/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_patient_notes' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_team' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/notices/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_notices' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_newsletter' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_contact' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall so-flink"} -->
<p class="so-fsmall so-flink"><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fl_privacy' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-fcol so-fcol--news","layout":{"type":"default"}} -->
<div class="wp-block-group so-fcol so-fcol--news"><!-- wp:paragraph {"className":"so-flabel"} -->
<p class="so-flabel"><?php echo esc_html( soroe_clinic_t( 'f_news' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall"} -->
<p class="so-fsmall"><?php echo esc_html( soroe_clinic_t( 'f_news_text' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"so-form so-form--dark","layout":{"type":"default"}} -->
<div class="wp-block-group so-form so-form--dark"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@soroeclinic.example', 'label' => soroe_clinic_t( 'forms_email' ), 'submit' => soroe_clinic_t( 'forms_subscribe' ), 'notice' => soroe_clinic_t( 'forms_mail_notice' ), 'subject' => soroe_clinic_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-fbottom","layout":{"type":"default"}} -->
<div class="wp-block-group so-fbottom"><!-- wp:paragraph {"className":"so-fsmall"} -->
<p class="so-fsmall"><?php echo esc_html( soroe_clinic_t( 'f_copy' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fsmall"} -->
<p class="so-fsmall"><a href="#top"><?php echo esc_html( soroe_clinic_t( 'f_top' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
