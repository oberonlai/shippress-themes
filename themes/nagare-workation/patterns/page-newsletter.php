<?php
/**
 * Title: Page: Newsletter
 * Slug: nagare-workation/page-newsletter
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Plain page head, the lake letter form slot on a white rounded card, then what the letter holds.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-phead nw-phead--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-phead nw-phead--plain"><!-- wp:group {"className":"nw-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group nw-phead__text"><!-- wp:paragraph {"className":"nw-label nw-phead__label"} -->
<p class="nw-label nw-phead__label"><?php echo esc_html( nagare_workation_t( 'nav_newsletter' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"nw-phead__h"} -->
<h1 class="wp-block-heading nw-phead__h"><?php echo esc_html( nagare_workation_t( 'nl_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-phead__lede"} -->
<p class="nw-phead__lede"><?php echo esc_html( nagare_workation_t( 'nl_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"subscribe","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section id="subscribe" class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap nw-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap nw-wrap--narrow"><!-- wp:group {"className":"nw-formcard","layout":{"type":"default"}} -->
<div class="wp-block-group nw-formcard"><!-- wp:heading {"level":2,"className":"nw-h2 nw-formcard__h"} -->
<h2 class="wp-block-heading nw-h2 nw-formcard__h"><?php echo esc_html( nagare_workation_t( 'nl_form_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-formcard__p"} -->
<p class="nw-formcard__p"><?php echo esc_html( nagare_workation_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@nagare-hotel.example', 'label' => nagare_workation_t( 'forms_email' ), 'submit' => nagare_workation_t( 'forms_subscribe' ), 'notice' => nagare_workation_t( 'forms_mail_notice' ), 'subject' => nagare_workation_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'nl_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">01</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-sect__body","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect__body"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'nl_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-split","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-split"><!-- wp:group {"className":"nw-split__photo","layout":{"type":"default"}} -->
<div class="wp-block-group nw-split__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full nw-ph sp-reveal sp-reveal--zoom"><img src="<?php echo nagare_workation_img( 'p02-breakfast-table.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-split__txt","layout":{"type":"default"}} -->
<div class="wp-block-group nw-split__txt"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'nl_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">02</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'nl_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'nl_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">03</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-sect__body","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect__body"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'nl_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
