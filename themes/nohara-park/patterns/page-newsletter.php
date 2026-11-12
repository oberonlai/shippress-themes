<?php
/**
 * Title: Page: newsletter
 * Slug: nohara-park/page-newsletter
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Newsletter: what the letters hold, the subscribe form (email and submit, mailto fallback) and the privacy line.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-phead"><!-- wp:group {"className":"np-phead__pic sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__pic sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-phead__img"} -->
<figure class="wp-block-image size-full np-phead__img"><img src="<?php echo nohara_park_img( 'j1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_J1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-phead__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__txt"><!-- wp:paragraph {"className":"np-crumb"} -->
<p class="np-crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_brand' ) ); ?></a> / <?php echo esc_html( nohara_park_t( 'newsletter_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"np-h1"} -->
<h1 class="wp-block-heading np-h1"><?php echo esc_html( nohara_park_t( 'newsletter_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-lead"} -->
<p class="np-lead"><?php echo esc_html( nohara_park_t( 'newsletter_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight np-sec--form","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight np-sec--form"><!-- wp:group {"className":"np-wrap np-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--read"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'newsletter_lead2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'newsletter_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'newsletter_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'newsletter_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'newsletter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'newsletter_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'newsletter_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"anchor":"subscribe","className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l" id="subscribe"><?php echo esc_html( nohara_park_t( 'newsletter_sub_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"np-form np-form--nl np-letters__form","layout":{"type":"default"}} -->
<div class="wp-block-group np-form np-form--nl np-letters__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@nohara-park.example', 'label' => nohara_park_t( 'forms_email' ), 'submit' => nohara_park_t( 'forms_subscribe' ), 'notice' => nohara_park_t( 'forms_mail_notice' ), 'subject' => nohara_park_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"np-note"} -->
<p class="np-note"><?php echo esc_html( nohara_park_t( 'nl_privacy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--close"><!-- wp:group {"className":"np-wrap np-closing","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-closing"><!-- wp:heading {"className":"np-closing__h"} -->
<h2 class="wp-block-heading np-closing__h"><?php echo esc_html( nohara_park_t( 'close_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
