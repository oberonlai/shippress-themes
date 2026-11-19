<?php
/**
 * Title: Page: Contact
 * Slug: tsukuri-design/page-contact
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Address caption rows and the contact form slot with a mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-strip td-strip--photo","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-strip td-strip--photo"><!-- wp:group {"className":"td-strip__txt","layout":{"type":"default"}} -->
<div class="wp-block-group td-strip__txt"><!-- wp:heading {"level":1,"className":"td-strip__h"} -->
<h1 class="wp-block-heading td-strip__h"><?php echo esc_html( tsukuri_design_t( 'nav_contact' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-role"} -->
<p class="td-role"><?php echo esc_html( tsukuri_design_t( 'ct_desc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-strip__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group td-strip__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p15-first-off.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec td-sec--tight"><!-- wp:paragraph {"className":"td-lede"} -->
<p class="td-lede"><?php echo esc_html( tsukuri_design_t( 'ct_lede' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--paper","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec td-sec--paper"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'ct_l0' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'ct_n0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-cap__kind"} -->
<p class="td-cap__kind"><?php echo esc_html( tsukuri_design_t( 'ct_k0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-cap__cat"} -->
<p class="td-cap__cat"><?php echo esc_html( tsukuri_design_t( 'ct_c0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'ct_h0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'ct_p0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'ct_n1' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'ct_h1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'ct_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec","anchor":"write","layout":{"type":"default"}} -->
<section id="write" class="wp-block-group alignfull td-sec"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'ct_l1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-form__w","layout":{"type":"default"}} -->
<div class="wp-block-group td-form__w"><?php
ob_start(); ?>
<a class="wp-element-button" href="mailto:studio@tsukuri.example?subject=<?php echo esc_attr( rawurlencode( tsukuri_design_t( 'contact_mail_subject' ) ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'contact_email_button' ) ); ?></a>
<p class="td-form__note"><?php echo esc_html( tsukuri_design_t( 'form_call' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'ct_n2' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'ct_h2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'ct_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
