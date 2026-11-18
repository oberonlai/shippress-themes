<?php
/**
 * Title: Brief and newsletter
 * Slug: moyooshi-productions/brief
 * Categories: moyooshi-productions
 * Viewport Width: 1440
 * Description: Full-width 21:9 strip, the giant BRIEF word, two sentences with the ink Send a brief button and the newsletter slot in an outlined box.
 */
?>
<!-- wp:group {"tagName":"section","className":"mp-sec mp-brief","layout":{"type":"default"}} -->
<section class="wp-block-group mp-sec mp-brief"><!-- wp:group {"className":"mp-frame","layout":{"type":"default"}} -->
<div class="wp-block-group mp-frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mp-ph mp-ph--strip"} -->
<figure class="wp-block-image size-full mp-ph mp-ph--strip"><img src="<?php echo moyooshi_productions_img( 'strike-dawn.webp' ); ?>" alt="<?php echo moyooshi_productions_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-frame","layout":{"type":"default"}} -->
<div class="wp-block-group mp-frame"><!-- wp:group {"className":"mp-giant mp-giant--brief","layout":{"type":"default"}} -->
<div class="wp-block-group mp-giant mp-giant--brief"><!-- wp:heading {"level":2,"className":"mp-giant__w sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading mp-giant__w sp-reveal sp-reveal--up"><?php echo esc_html( moyooshi_productions_t( 'w_brief' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-brief__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mp-brief__grid"><!-- wp:group {"className":"mp-brief__l","layout":{"type":"default"}} -->
<div class="wp-block-group mp-brief__l"><!-- wp:paragraph {"className":"mp-lead"} -->
<p class="mp-lead"><?php echo esc_html( moyooshi_productions_t( 'brief_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"mp-brief__btn","layout":{"type":"flex"}} -->
<div class="wp-block-buttons mp-brief__btn"><!-- wp:button {"className":"mp-btn"} -->
<div class="wp-block-button mp-btn"><a class="wp-block-button__link wp-element-button" href="mailto:brief@moyooshi.example?subject=<?php echo rawurlencode( moyooshi_productions_t( 'forms_mail_subject_brief' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'brief_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-brief__r","layout":{"type":"default"}} -->
<div class="wp-block-group mp-brief__r"><!-- wp:group {"className":"mp-brief__box","layout":{"type":"default"}} -->
<div class="wp-block-group mp-brief__box"><!-- wp:paragraph {"className":"mp-label"} -->
<p class="mp-label"><?php echo esc_html( moyooshi_productions_t( 'lbl_news' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-brief__nl"} -->
<p class="mp-brief__nl"><?php echo esc_html( moyooshi_productions_t( 'brief_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"mp-brief__f","layout":{"type":"default"}} -->
<div class="wp-block-group mp-brief__f"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'brief@moyooshi.example',
	'label'   => moyooshi_productions_t( 'forms_email' ),
	'submit'  => moyooshi_productions_t( 'forms_subscribe' ),
	'notice'  => moyooshi_productions_t( 'forms_mail_notice' ),
	'subject' => moyooshi_productions_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
