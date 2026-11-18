<?php
/**
 * Title: Page: newsletter
 * Slug: sanroku-trail/pg-newsletter
 * Categories: sanroku-trail
 * Inserter: no
 * Viewport Width: 1440
 * Description: Flush photo head, the four letters as rows, and the newsletter form slot with an email field that works without plugins.
 */
?>
<!-- wp:cover {"url":"<?php echo sanroku_trail_img( 'p09-valley-cloud.webp' ); ?>","alt":"<?php echo sanroku_trail_a( 'alt_p09' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":440,"minHeightUnit":"px","tagName":"section","className":"st-hero st-phead sp-parallax"} -->
<section class="wp-block-cover st-hero st-phead sp-parallax" style="min-height:440px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sanroku_trail_a( 'alt_p09' ); ?>" src="<?php echo sanroku_trail_img( 'p09-valley-cloud.webp' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"st-h1"} -->
<h1 class="wp-block-heading st-h1"><span class="st-h1__l"><?php echo esc_html( sanroku_trail_t( 'newsletter_h1_a' ) ); ?></span> <span class="st-h1__l"><?php echo esc_html( sanroku_trail_t( 'newsletter_h1_b' ) ); ?></span></h1>
<!-- /wp:heading --></div></section>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","className":"st-rows","layout":{"type":"default"}} -->
<section class="wp-block-group st-rows"><!-- wp:paragraph {"className":"st-row st-row--p"} -->
<p class="st-row st-row--p"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'nl_row_1_c' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'nl_row_1' ) ); ?></span><span class="st-row__c"><?php echo esc_html( sanroku_trail_t( 'nl_row_1_d' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-row st-row--p"} -->
<p class="st-row st-row--p"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'nl_row_2_c' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'nl_row_2' ) ); ?></span><span class="st-row__c"><?php echo esc_html( sanroku_trail_t( 'nl_row_2_d' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-row st-row--p"} -->
<p class="st-row st-row--p"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'nl_row_3_c' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'nl_row_3' ) ); ?></span><span class="st-row__c"><?php echo esc_html( sanroku_trail_t( 'nl_row_3_d' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-row st-row--p"} -->
<p class="st-row st-row--p"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'nl_row_4_c' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'nl_row_4' ) ); ?></span><span class="st-row__c"><?php echo esc_html( sanroku_trail_t( 'nl_row_4_d' ) ); ?></span></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"st-sec st-sec--tight st-sp ","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-sec--tight st-sp "><!-- wp:group {"className":"st-frame st-split","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame st-split"><!-- wp:group {"className":"st-split__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__l sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'newsletter_s1_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-split__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__r sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"st-split__p"} -->
<p class="st-split__p"><?php echo esc_html( sanroku_trail_t( 'newsletter_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-split__p"} -->
<p class="st-split__p"><?php echo esc_html( sanroku_trail_t( 'newsletter_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"st-sec st-sec--tight st-sp st-formsec ","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-sec--tight st-sp st-formsec "><!-- wp:group {"className":"st-frame st-split","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame st-split"><!-- wp:group {"className":"st-split__l","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__l"><!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'nl_form_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-split__p"} -->
<p class="st-split__p"><?php echo esc_html( sanroku_trail_t( 'nl_form_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-split__r st-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__r st-formwrap"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'letters@sanrokutrail.example',
	'label'   => sanroku_trail_t( 'forms_email' ),
	'submit'  => sanroku_trail_t( 'forms_subscribe' ),
	'notice'  => sanroku_trail_t( 'forms_mail_notice' ),
	'subject' => sanroku_trail_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"st-sec st-sec--tight st-sp ","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-sec--tight st-sp "><!-- wp:group {"className":"st-frame st-split","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame st-split"><!-- wp:group {"className":"st-split__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__l sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'newsletter_s2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-split__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__r sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"st-split__p"} -->
<p class="st-split__p"><?php echo esc_html( sanroku_trail_t( 'newsletter_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"st-sec st-sec--tight st-sp ","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-sec--tight st-sp "><!-- wp:group {"className":"st-frame st-split","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame st-split"><!-- wp:group {"className":"st-split__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__l sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'newsletter_s3_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-split__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-split__r sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"st-split__p"} -->
<p class="st-split__p"><?php echo esc_html( sanroku_trail_t( 'newsletter_s3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
