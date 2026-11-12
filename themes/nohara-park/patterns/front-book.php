<?php
/**
 * Title: Home: book a week and letters from the park
 * Slug: nohara-park/front-book
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Split band echoing the hero (photograph left, address, hours and the booking pill right) and a newsletter strip with the shared form slot.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-booksec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-booksec"><!-- wp:group {"className":"np-book","layout":{"type":"default"}} -->
<div class="wp-block-group np-book"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-book__pic"} -->
<figure class="wp-block-image size-full np-book__pic"><img src="<?php echo nohara_park_img( 'e1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_E1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-book__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-book__txt"><!-- wp:heading {"className":"np-h2 np-h2--l sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 np-h2--l sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'bk_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-book__addr"} -->
<p class="np-book__addr"><?php echo esc_html( nohara_park_t( 'bk_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-book__hours"} -->
<p class="np-book__hours"><?php echo esc_html( nohara_park_t( 'bk_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-book__contact"} -->
<p class="np-book__contact"><a href="tel:+310061200841"><?php echo esc_html( nohara_park_t( 'bk_phone' ) ); ?></a><br/><a href="mailto:hello@nohara-park.example"><?php echo esc_html( nohara_park_t( 'bk_email' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-note"} -->
<p class="np-note"><?php echo esc_html( nohara_park_t( 'bk_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-letters","layout":{"type":"default"}} -->
<div class="wp-block-group np-letters"><!-- wp:group {"className":"np-wrap np-letters__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-letters__in"><!-- wp:group {"className":"np-letters__t","layout":{"type":"default"}} -->
<div class="wp-block-group np-letters__t"><!-- wp:heading {"className":"np-letters__h","level":3} -->
<h3 class="wp-block-heading np-letters__h"><?php echo esc_html( nohara_park_t( 'nl_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-letters__p"} -->
<p class="np-letters__p"><?php echo esc_html( nohara_park_t( 'nl_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-letters__form","layout":{"type":"default"}} -->
<div class="wp-block-group np-letters__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@nohara-park.example', 'label' => nohara_park_t( 'forms_email' ), 'submit' => nohara_park_t( 'forms_subscribe' ), 'notice' => nohara_park_t( 'forms_mail_notice' ), 'subject' => nohara_park_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
