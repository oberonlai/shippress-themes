<?php
/**
 * Title: Page: booking
 * Slug: nohara-park/page-booking
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Booking: the four reserve rows, payment terms, and the ask-for-dates form slot with its mailto fallback.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-phead"><!-- wp:group {"className":"np-phead__pic sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__pic sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-phead__img"} -->
<figure class="wp-block-image size-full np-phead__img"><img src="<?php echo nohara_park_img( 'b1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_B1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-phead__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__txt"><!-- wp:paragraph {"className":"np-crumb"} -->
<p class="np-crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_brand' ) ); ?></a> / <?php echo esc_html( nohara_park_t( 'booking_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"np-h1"} -->
<h1 class="wp-block-heading np-h1"><?php echo esc_html( nohara_park_t( 'booking_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-lead"} -->
<p class="np-lead"><?php echo esc_html( nohara_park_t( 'booking_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="np-pill" href="#ask"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_dates' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--read"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'booking_lead2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'booking_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'booking_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'booking_s1_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight np-reserve","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight np-reserve"><!-- wp:group {"className":"np-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap"><!-- wp:group {"className":"np-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group np-rows sp-stagger"><!-- wp:group {"className":"np-row sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-row sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-row__num","layout":{"type":"default"}} -->
<div class="wp-block-group np-row__num"><!-- wp:paragraph {"className":"np-row__n"} -->
<p class="np-row__n"><?php echo esc_html( nohara_park_t( 'res_1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"np-row__t"} -->
<h3 class="wp-block-heading np-row__t"><?php echo esc_html( nohara_park_t( 'res_1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-row__x"} -->
<p class="np-row__x"><?php echo esc_html( nohara_park_t( 'res_1_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-row__f"} -->
<p class="np-row__f"><?php echo esc_html( nohara_park_t( 'res_1_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-row sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-row sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-row__num","layout":{"type":"default"}} -->
<div class="wp-block-group np-row__num"><!-- wp:paragraph {"className":"np-row__n"} -->
<p class="np-row__n"><?php echo esc_html( nohara_park_t( 'res_2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"np-row__t"} -->
<h3 class="wp-block-heading np-row__t"><?php echo esc_html( nohara_park_t( 'res_2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-row__x"} -->
<p class="np-row__x"><?php echo esc_html( nohara_park_t( 'res_2_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-row__f"} -->
<p class="np-row__f"><?php echo esc_html( nohara_park_t( 'res_2_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-row sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-row sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-row__num","layout":{"type":"default"}} -->
<div class="wp-block-group np-row__num"><!-- wp:paragraph {"className":"np-row__n"} -->
<p class="np-row__n"><?php echo esc_html( nohara_park_t( 'res_3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"np-row__t"} -->
<h3 class="wp-block-heading np-row__t"><?php echo esc_html( nohara_park_t( 'res_3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-row__x"} -->
<p class="np-row__x"><?php echo esc_html( nohara_park_t( 'res_3_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-row__f"} -->
<p class="np-row__f"><?php echo esc_html( nohara_park_t( 'res_3_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-row sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-row sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-row__num","layout":{"type":"default"}} -->
<div class="wp-block-group np-row__num"><!-- wp:paragraph {"className":"np-row__n"} -->
<p class="np-row__n"><?php echo esc_html( nohara_park_t( 'res_4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"np-row__t"} -->
<h3 class="wp-block-heading np-row__t"><?php echo esc_html( nohara_park_t( 'res_4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-row__x"} -->
<p class="np-row__x"><?php echo esc_html( nohara_park_t( 'res_4_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-row__f"} -->
<p class="np-row__f"><?php echo esc_html( nohara_park_t( 'res_4_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-splits","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-splits"><!-- wp:group {"className":"np-split","layout":{"type":"default"}} -->
<div class="wp-block-group np-split"><!-- wp:group {"className":"np-split__h","layout":{"type":"default"}} -->
<div class="wp-block-group np-split__h"><!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'booking_s2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-split__b","layout":{"type":"default"}} -->
<div class="wp-block-group np-split__b"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'booking_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'booking_s2_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","anchor":"ask","className":"np-sec np-sec--tight np-askbox","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight np-askbox" id="ask"><!-- wp:group {"className":"np-wrap np-duos","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-duos"><!-- wp:group {"className":"np-duo","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-duo__pic"} -->
<figure class="wp-block-image size-full np-duo__pic"><img src="<?php echo nohara_park_img( 'e1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_E1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-duo__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo__txt"><!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'booking_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'booking_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'booking_s3_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight np-sec--form","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight np-sec--form"><!-- wp:group {"className":"np-wrap np-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--read"><!-- wp:group {"className":"np-form np-form--contact","layout":{"type":"default"}} -->
<div class="wp-block-group np-form np-form--contact"><?php
ob_start(); ?>
<a class="np-pill" href="mailto:hello@nohara-park.example?subject=<?php echo rawurlencode( nohara_park_t( 'contact_subject' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'booking_email' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<p class="np-formnote"><a href="tel:+310061200841"><?php echo esc_html( nohara_park_t( 'bk_phone' ) ); ?></a> · <?php echo esc_html( nohara_park_t( 'bk_hours' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--close"><!-- wp:group {"className":"np-wrap np-closing","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-closing"><!-- wp:heading {"className":"np-closing__h"} -->
<h2 class="wp-block-heading np-closing__h"><?php echo esc_html( nohara_park_t( 'close_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/#ask' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_dates' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
