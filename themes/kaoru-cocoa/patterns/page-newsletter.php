<?php
/**
 * Title: Inner: Newsletter
 * Slug: kaoru-cocoa/page-newsletter
 * Categories: kaoru-cocoa
 * Keywords: newsletter, letter, subscribe
 * Viewport Width: 1440
 * Description: Newsletter page: what the monthly letter holds, a standalone email subscribe form that works without a plugin, and how it is delivered.
 */
?>
<!-- wp:group {"align":"full","className":"kc-hero kc-ihead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-hero kc-ihead"><!-- wp:group {"className":"kc-window","layout":{"type":"default"}} -->
<div class="wp-block-group kc-window"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-window__photo kc-ihead__photo"} -->
<figure class="wp-block-image size-full kc-window__photo kc-ihead__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-cocoa.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'adb873d51' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-strips","layout":{"type":"default"}} -->
<div class="wp-block-group kc-strips"><!-- wp:paragraph {"className":"kc-strip kc-strip--1"} -->
<p class="kc-strip kc-strip--1"><?php echo wp_kses_post( kaoru_cocoa_t( 'kfb48f923' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-strip kc-strip--2"} -->
<p class="kc-strip kc-strip--2"><?php echo wp_kses_post( kaoru_cocoa_t( 'kdb7b89a8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-strip kc-strip--3"} -->
<p class="kc-strip kc-strip--3"><?php echo wp_kses_post( kaoru_cocoa_t( 'k6b28f734' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__text kc-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__text kc-ihead__text"><!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label"><?php echo wp_kses_post( kaoru_cocoa_t( 'kffb7e666' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-h1--in"} -->
<h1 class="wp-block-heading kc-h1 kc-h1--in"><?php echo wp_kses_post( kaoru_cocoa_t( 'k39763e40' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-lede"} -->
<p class="kc-lede"><?php echo wp_kses_post( kaoru_cocoa_t( 'k5e845853' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kc-isec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-isec"><!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2"><?php echo wp_kses_post( kaoru_cocoa_t( 'kabbed762' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo wp_kses_post( kaoru_cocoa_t( 'k83372098' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","anchor":"subscribe","className":"kc-isec kc-isec--wide","layout":{"type":"default"}} -->
<div id="subscribe" class="wp-block-group alignfull kc-isec kc-isec--wide"><!-- wp:group {"className":"kc-letter__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__panel"><!-- wp:group {"className":"kc-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__text"><!-- wp:heading {"level":2,"className":"kc-letter__title"} -->
<h2 class="wp-block-heading kc-letter__title"><?php echo wp_kses_post( kaoru_cocoa_t( 'k1fee5cb6' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo wp_kses_post( kaoru_cocoa_t( 'k0910ea91' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@kaoru-cocoa.example',
	'label'   => kaoru_cocoa_t( 'forms_email' ),
	'submit'  => kaoru_cocoa_t( 'forms_subscribe' ),
	'notice'  => kaoru_cocoa_t( 'forms_mail_notice' ),
	'subject' => kaoru_cocoa_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kc-isec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-isec"><!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2"><?php echo wp_kses_post( kaoru_cocoa_t( 'kca024f1e' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo wp_kses_post( kaoru_cocoa_t( 'k68a555eb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
