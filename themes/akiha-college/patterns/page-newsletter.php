<?php
/**
 * Title: Page: Newsletter
 * Slug: akiha-college/page-newsletter
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Description: Newsletter: what we send, how often, and the subscribe form slot with an email field that works without a plugin.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-pageintro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-pageintro"><!-- wp:paragraph {"className":"ak-lede"} -->
<p class="ak-lede"><?php echo esc_html( akiha_college_t( 'newsletter_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-pagewin"} -->
<figure class="wp-block-image size-full ak-pagewin"><img src="<?php echo akiha_college_img( 'j3.webp' ); ?>" alt="<?php echo akiha_college_a( 'alt_post3' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-rail ak-rail--inner ak-rail--newsletter","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-rail ak-rail--inner ak-rail--newsletter"><!-- wp:group {"className":"ak-rail__side","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__side"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akiha_college_t( 'lbl_newsletter' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-rail__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__col"><!-- wp:group {"className":"ak-sects","layout":{"type":"default"}} -->
<div class="wp-block-group ak-sects"><!-- wp:group {"className":"ak-sect sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-sect sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ak-sect__h"} -->
<h2 class="wp-block-heading ak-sect__h"><?php echo esc_html( akiha_college_t( 'newsletter_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-body"} -->
<p class="ak-body"><?php echo esc_html( akiha_college_t( 'newsletter_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-sect sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ak-sect sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ak-sect__h"} -->
<h2 class="wp-block-heading ak-sect__h"><?php echo esc_html( akiha_college_t( 'newsletter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-body"} -->
<p class="ak-body"><?php echo esc_html( akiha_college_t( 'newsletter_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"subscribe","className":"ak-sect sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="subscribe" class="wp-block-group ak-sect sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ak-sect__h"} -->
<h2 class="wp-block-heading ak-sect__h"><?php echo esc_html( akiha_college_t( 'sub_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ak-form-col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-form-col"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@akiha-college.example',
	'label'   => akiha_college_t( 'forms_email' ),
	'submit'  => akiha_college_t( 'forms_subscribe' ),
	'notice'  => akiha_college_t( 'forms_mail_notice' ),
	'subject' => akiha_college_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ak-small"} -->
<p class="ak-small"><?php echo esc_html( akiha_college_t( 'news_privacy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
