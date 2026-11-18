<?php
/**
 * Title: Page: The river letter
 * Slug: seseragi-house/page-newsletter
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: The river letter: a mist window, what the four letters contain and the newsletter slot (email and submit, mailto without plugins).
 */
?>
<!-- wp:group {"tagName":"section","className":"sese-hero sese-hero--mist","layout":{"type":"default"}} -->
<section class="wp-block-group sese-hero sese-hero--mist">
<!-- wp:group {"className":"sese-win sese-win--mist","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win sese-win--mist">
<!-- wp:group {"className":"sese-win__fg sese-win__fg--mist","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__fg sese-win__fg--mist">
<!-- wp:heading {"level":1,"className":"sese-h1 sese-h1--page"} -->
<h1 class="wp-block-heading sese-h1 sese-h1--page"><?php echo seseragi_house_lines( 'nl_h1' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-lede"} -->
<p class="sese-lede"><?php echo esc_html( seseragi_house_t( 'nl_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sese-sec sese-in sese-in--first","layout":{"type":"default"}} -->
<section class="wp-block-group sese-sec sese-in sese-in--first">
<!-- wp:group {"className":"sese-col sese-col--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col sese-col--narrow">
<!-- wp:paragraph {"className":"sese-crumb"} -->
<p class="sese-crumb"><a href="/"><?php echo esc_html( seseragi_house_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( seseragi_house_t( 'crumb_newsletter' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-lede"} -->
<p class="sese-lede"><?php echo esc_html( seseragi_house_t( 'nl_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'nl_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'nl_s1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'nl_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'nl_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'stay@seseragihouse.example',
	'label'   => seseragi_house_t( 'forms_email' ),
	'submit'  => seseragi_house_t( 'forms_subscribe' ),
	'notice'  => seseragi_house_t( 'forms_mail_notice' ),
	'subject' => seseragi_house_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
