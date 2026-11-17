<?php
/**
 * Title: Page: Contact
 * Slug: kosame-hotpot/page-contact
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Inserter: no
 * Description: One photograph on the stage, the desk details as ruled rows, the contact form slot (mailto fallback) and a link box to the booking page.
 */
?>
<!-- wp:group {"className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split"><!-- wp:group {"className":"ks-stage ks-stage--n1","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage ks-stage--n1"><!-- wp:group {"className":"ks-stage__slides","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage__slides"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--1"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--1"><img src="<?php echo kosame_hotpot_img( 'booking-desk.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ks-stage__scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--a"} -->
<p class="ks-stage__phrase ks-stage__phrase--a"><?php echo esc_html( kosame_hotpot_t( 'phrase_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--b"} -->
<p class="ks-stage__phrase ks-stage__phrase--b"><?php echo esc_html( kosame_hotpot_t( 'phrase_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-col ks-col--inner","layout":{"type":"default"}} -->
<div class="wp-block-group ks-col ks-col--inner"><!-- wp:group {"anchor":"top","className":"ks-pagehead","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group ks-pagehead"><!-- wp:paragraph {"className":"ks-pagehead__kicker"} -->
<p class="ks-pagehead__kicker"><?php echo esc_html( kosame_hotpot_t( 'contact_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-pagehead__h1"} -->
<h1 class="wp-block-heading ks-pagehead__h1"><?php echo esc_html( kosame_hotpot_t( 'contact_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-pagehead__lead"} -->
<p class="ks-pagehead__lead"><?php echo esc_html( kosame_hotpot_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"reach-us","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="reach-us" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'contact_vl_reach-us' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'contact_vt_reach-us' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'contact_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-rows ks-rows--spec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rows ks-rows--spec sp-reveal sp-reveal--up"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_email' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'contact_sp_0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_phone' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'contact_sp_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_desk2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'contact_sp_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_reply' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'contact_sp_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"anchor":"write-to-us","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="write-to-us" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'contact_vl_write-to-us' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'contact_vt_write-to-us' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'contact_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-formslot ks-formslot--light","layout":{"type":"default"}} -->
<div class="wp-block-group ks-formslot ks-formslot--light"><?php
ob_start(); ?>
<div class="wp-block-buttons ks-frame__btns"><div class="wp-block-button ks-btn ks-btn--frame"><a class="wp-block-button__link wp-element-button" href="mailto:table@kosame-hotpot.example?subject=<?php echo rawurlencode( kosame_hotpot_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( kosame_hotpot_t( 'contact_email' ) ); ?></a></div></div>
<p class="ks-frame__note"><?php echo esc_html( kosame_hotpot_t( 'forms_contact_hint' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'contact_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-linkbox sp-reveal sp-reveal--up"} -->
<p class="ks-linkbox sp-reveal sp-reveal--up"><a href="<?php echo kosame_hotpot_url( '/book/' ); ?>"><?php echo kosame_hotpot_lines( 'lb_book' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
