<?php
/**
 * Title: Page: Contact
 * Slug: soko-hotel/page-contact
 * Categories: soko-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Letterbox opener, reception facts as rows, the contact form slot with its mailto fallback and the press and events notes.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-open","layout":{"type":"default"}} -->
<section class="wp-block-group sk-open"><!-- wp:group {"className":"sk-open__frame sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sk-open__frame sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-open__fig"} -->
<figure class="wp-block-image size-full sk-open__fig"><img src="<?php echo soko_hotel_img( 'room-quay.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-titlebar","layout":{"type":"default"}} -->
<div class="wp-block-group sk-titlebar"><!-- wp:paragraph {"className":"sk-kicker"} -->
<p class="sk-kicker"><?php echo esc_html( soko_hotel_t( 'con_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sk-titlebar__h"} -->
<h1 class="wp-block-heading sk-titlebar__h"><?php echo esc_html( soko_hotel_t( 'con_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-intro","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-intro"><!-- wp:paragraph {"className":"sk-intro__p"} -->
<p class="sk-intro__p"><?php echo esc_html( soko_hotel_t( 'con_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-rowsec","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-rowsec"><!-- wp:group {"className":"sk-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sk-rows sp-stagger"><!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'con_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'con_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'con_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'con_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'con_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'con_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'con_k4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'con_v4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-formsec","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-formsec"><!-- wp:group {"className":"sk-form","layout":{"type":"default"}} -->
<div class="wp-block-group sk-form"><!-- wp:heading {"level":2,"className":"sk-box__h"} -->
<h2 class="wp-block-heading sk-box__h"><?php echo esc_html( soko_hotel_t( 'con_form_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-form__lede"} -->
<p class="sk-form__lede"><?php echo esc_html( soko_hotel_t( 'con_form_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<?php
ob_start(); ?>
<div class="wp-block-buttons sk-fallback"><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:stay@sokohotel.example?subject=' . rawurlencode( soko_hotel_t( 'forms_contact_subject' ) ) ); ?>"><?php echo esc_html( soko_hotel_t( 'forms_contact_cta' ) ); ?></a></div></div>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-rowsec","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-rowsec"><!-- wp:group {"className":"sk-rows","layout":{"type":"default"}} -->
<div class="wp-block-group sk-rows"><!-- wp:group {"className":"sk-row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'con_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'con_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'con_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'con_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'con_h3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'con_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
