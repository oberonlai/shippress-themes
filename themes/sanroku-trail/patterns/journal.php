<?php
/**
 * Title: Journal and letter
 * Slug: sanroku-trail/journal
 * Categories: sanroku-trail
 * Viewport Width: 1440
 * Description: The three latest posts and a hairline-ruled newsletter row with the shared email slot.
 */
?>
<!-- wp:group {"tagName":"section","className":"st-sec st-journal","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-journal"><!-- wp:group {"className":"st-frame","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame"><!-- wp:group {"className":"st-journal__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-journal__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'journal_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-journal__all"} -->
<p class="st-journal__all"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'journal_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sp-reveal sp-reveal--up st-journal__posts","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up st-journal__posts"><!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"st-posts","layout":{"type":"default"}} -->
<div class="wp-block-query st-posts"><!-- wp:post-template {"className":"st-cards"} -->
<!-- wp:group {"className":"st-post","layout":{"type":"default"}} -->
<div class="wp-block-group st-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"st-post__img"} /-->

<!-- wp:post-date {"format":"j M Y","className":"st-post__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"st-post__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( sanroku_trail_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-letter","layout":{"type":"default"}} -->
<div class="wp-block-group st-letter"><!-- wp:group {"className":"st-letter__t","layout":{"type":"default"}} -->
<div class="wp-block-group st-letter__t"><!-- wp:heading {"level":3,"className":"st-letter__h"} -->
<h3 class="wp-block-heading st-letter__h"><?php echo esc_html( sanroku_trail_t( 'letter_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-letter__p"} -->
<p class="st-letter__p"><?php echo esc_html( sanroku_trail_t( 'letter_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-letter__f","layout":{"type":"default"}} -->
<div class="wp-block-group st-letter__f"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'letters@sanrokutrail.example',
	'label'   => sanroku_trail_t( 'forms_email' ),
	'submit'  => sanroku_trail_t( 'forms_subscribe' ),
	'notice'  => sanroku_trail_t( 'forms_mail_notice' ),
	'subject' => sanroku_trail_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
