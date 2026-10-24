<?php
/**
 * Title: Home: enquire
 * Slug: enishi-catering/front-enquire
 * Categories: enishi-catering
 * Description: Enquiry call to action beside a hairline list of address, hours, phone and email.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"enc-sec enc-enquire","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull enc-sec enc-enquire"><!-- wp:group {"className":"enc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group enc-wrap"><!-- wp:group {"className":"enc-enquire__grid","layout":{"type":"default"}} -->
<div class="wp-block-group enc-enquire__grid"><!-- wp:group {"className":"enc-enquire__l","layout":{"type":"default"}} -->
<div class="wp-block-group enc-enquire__l"><!-- wp:heading {"level":2,"className":"enc-section-h enc-section-h--sm enc-left sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading enc-section-h enc-section-h--sm enc-left sp-reveal sp-reveal--down"><?php echo esc_html( enishi_catering_t( 'en_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html( enishi_catering_t( 'en_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"enc-btn enc-btn--fill"} -->
<p class="enc-btn enc-btn--fill"><a href="/contact/"><?php echo esc_html( enishi_catering_t( 'en_btn' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"enc-enquire__r","layout":{"type":"default"}} -->
<div class="wp-block-group enc-enquire__r"><!-- wp:paragraph {"className":"enc-dl"} -->
<p class="enc-dl"><span class="enc-dl__l"><?php echo esc_html( enishi_catering_t( 'en_addr_l' ) ); ?></span><span class="enc-dl__v"><?php echo esc_html( enishi_catering_t( 'en_addr' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-dl"} -->
<p class="enc-dl"><span class="enc-dl__l"><?php echo esc_html( enishi_catering_t( 'en_hours_l' ) ); ?></span><span class="enc-dl__v"><?php echo esc_html( enishi_catering_t( 'en_hours' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-dl"} -->
<p class="enc-dl"><span class="enc-dl__l"><?php echo esc_html( enishi_catering_t( 'en_phone_l' ) ); ?></span><span class="enc-dl__v"><?php echo esc_html( enishi_catering_t( 'en_phone' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-dl"} -->
<p class="enc-dl"><span class="enc-dl__l"><?php echo esc_html( enishi_catering_t( 'en_mail_l' ) ); ?></span><span class="enc-dl__v"><?php echo esc_html( enishi_catering_t( 'en_mail' ) ); ?></span></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
