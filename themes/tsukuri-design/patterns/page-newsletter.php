<?php
/**
 * Title: Page: Newsletter
 * Slug: tsukuri-design/page-newsletter
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: What the studio letter holds and the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-strip td-strip--photo","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-strip td-strip--photo"><!-- wp:group {"className":"td-strip__txt","layout":{"type":"default"}} -->
<div class="wp-block-group td-strip__txt"><!-- wp:heading {"level":1,"className":"td-strip__h"} -->
<h1 class="wp-block-heading td-strip__h"><?php echo esc_html( tsukuri_design_t( 'nav_newsletter' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-role"} -->
<p class="td-role"><?php echo esc_html( tsukuri_design_t( 'nl_desc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-strip__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group td-strip__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p14-sanding-foam.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec td-sec--tight"><!-- wp:paragraph {"className":"td-lede"} -->
<p class="td-lede"><?php echo esc_html( tsukuri_design_t( 'nl_lede' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--paper","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec td-sec--paper"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'nl_l0' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'nl_n0' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'nl_h0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'nl_p0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'nl_n1' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'nl_h1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'nl_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec","anchor":"subscribe","layout":{"type":"default"}} -->
<section id="subscribe" class="wp-block-group alignfull td-sec"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'nl_l1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-form__w","layout":{"type":"default"}} -->
<div class="wp-block-group td-form__w"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'studio@tsukuri.example', 'label' => tsukuri_design_t( 'forms_email' ), 'submit' => tsukuri_design_t( 'forms_subscribe' ), 'notice' => tsukuri_design_t( 'forms_mail_notice' ), 'subject' => tsukuri_design_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
