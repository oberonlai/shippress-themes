<?php
/**
 * Title: Footer
 * Slug: hatoba-college/foot-main
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Inserter: no
 * Description: Ink footer: wordmark, address, office hours and page links, with a copyright line.
 */
?>
<!-- wp:group {"align":"full","className":"hc-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-footer"><!-- wp:group {"className":"hc-fcols","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fcols"><!-- wp:group {"className":"hc-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fcol"><!-- wp:paragraph {"className":"hc-fmark"} -->
<p class="hc-fmark"><?php echo esc_html( hatoba_college_t( 'site_title' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fline"} -->
<p class="hc-fline"><?php echo esc_html( hatoba_college_t( 'foot_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fcol"><!-- wp:paragraph {"className":"hc-flabel"} -->
<p class="hc-flabel"><?php echo esc_html( hatoba_college_t( 'f_addr_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fline"} -->
<p class="hc-fline"><?php echo esc_html( hatoba_college_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fline"} -->
<p class="hc-fline"><?php echo esc_html( hatoba_college_t( 'f_phone' ) ); ?><br><a href="mailto:admissions@hatoba-college.example">admissions@hatoba-college.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fcol"><!-- wp:paragraph {"className":"hc-flabel"} -->
<p class="hc-flabel"><?php echo esc_html( hatoba_college_t( 'f_hours_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fline"} -->
<p class="hc-fline"><?php echo esc_html( hatoba_college_t( 'f_hours1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fline"} -->
<p class="hc-fline"><?php echo esc_html( hatoba_college_t( 'f_hours2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fline"} -->
<p class="hc-fline"><?php echo esc_html( hatoba_college_t( 'f_hours3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fcol"><!-- wp:paragraph {"className":"hc-flabel"} -->
<p class="hc-flabel"><?php echo esc_html( hatoba_college_t( 'f_pages' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-flink"} -->
<p class="hc-flink"><a href="<?php echo hatoba_college_url( '/the-course/' ); ?>"><?php echo esc_html( hatoba_college_t( 'nav_course' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-flink"} -->
<p class="hc-flink"><a href="<?php echo hatoba_college_url( '/programmes/' ); ?>"><?php echo esc_html( hatoba_college_t( 'nav_programmes' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-flink"} -->
<p class="hc-flink"><a href="<?php echo hatoba_college_url( '/harbour-simulator/' ); ?>"><?php echo esc_html( hatoba_college_t( 'nav_harbour' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-flink"} -->
<p class="hc-flink"><a href="<?php echo hatoba_college_url( '/instructors/' ); ?>"><?php echo esc_html( hatoba_college_t( 'nav_instructors' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-flink"} -->
<p class="hc-flink"><a href="<?php echo hatoba_college_url( '/cadet-stories/' ); ?>"><?php echo esc_html( hatoba_college_t( 'nav_stories' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-flink"} -->
<p class="hc-flink"><a href="<?php echo hatoba_college_url( '/admissions/' ); ?>"><?php echo esc_html( hatoba_college_t( 'nav_admissions' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-flink"} -->
<p class="hc-flink"><a href="<?php echo hatoba_college_url( '/journal/' ); ?>"><?php echo esc_html( hatoba_college_t( 'nav_journal' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-flink"} -->
<p class="hc-flink"><a href="<?php echo hatoba_college_url( '/visit/' ); ?>"><?php echo esc_html( hatoba_college_t( 'nav_visit' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-flink"} -->
<p class="hc-flink"><a href="<?php echo hatoba_college_url( '/about/' ); ?>"><?php echo esc_html( hatoba_college_t( 'nav_about' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-flink"} -->
<p class="hc-flink"><a href="<?php echo hatoba_college_url( '/newsletter/' ); ?>"><?php echo esc_html( hatoba_college_t( 'nav_newsletter' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-fnews","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fnews"><!-- wp:paragraph {"className":"hc-flabel"} -->
<p class="hc-flabel"><?php echo esc_html( hatoba_college_t( 'f_news' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'admissions@hatoba-college.example',
	'label'   => hatoba_college_t( 'forms_email' ),
	'submit'  => hatoba_college_t( 'forms_subscribe' ),
	'notice'  => hatoba_college_t( 'forms_mail_notice' ),
	'subject' => hatoba_college_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-legal"} -->
<p class="hc-legal"><?php echo esc_html( hatoba_college_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
