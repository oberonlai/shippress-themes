<?php
/**
 * Title: Page: Check dates
 * Slug: shiosai-resort/page-check-dates
 * Categories: shiosai-resort
 * Keywords: resort, hotel, seaside
 * Viewport Width: 1440
 * Description: Check dates page: how a request works, the contact form slot with a mailto fallback and the phone line.
 */
?>
<?php
ob_start();
?>
<!-- wp:buttons {"className":"ss-contact__btn"} -->
<div class="wp-block-buttons ss-contact__btn"><!-- wp:button {"className":"ss-btn-ink"} -->
<div class="wp-block-button ss-btn--ink"><a class="wp-block-button__link wp-element-button" href="mailto:stay@shiosai-resort.example?subject=<?php echo rawurlencode( shiosai_resort_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( shiosai_resort_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"ss-contact__note"} -->
<p class="ss-contact__note"><?php echo esc_html( shiosai_resort_t( 'forms_contact_note' ) ); ?></p>
<!-- /wp:paragraph -->
<?php
$fallback = ob_get_clean();
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"check-dates-top","className":"ss-sec ss-sec--first ss-pintro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec ss-sec--first ss-pintro" id="check-dates-top"><!-- wp:group {"className":"ss-head","layout":{"type":"default"}} -->
<div class="wp-block-group ss-head"><!-- wp:paragraph {"className":"ss-head__eyebrow"} -->
<p class="ss-head__eyebrow"><?php echo wp_kses_post( shiosai_resort_t( 'k4fa0c21a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ss-head__title"} -->
<h1 class="wp-block-heading ss-head__title"><?php echo wp_kses_post( shiosai_resort_t( 'k25b67204' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-head__sub"} -->
<p class="ss-head__sub"><?php echo wp_kses_post( shiosai_resort_t( 'k0203c6f2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-lead ss-lead--c"} -->
<p class="ss-lead ss-lead--c"><?php echo wp_kses_post( shiosai_resort_t( 'ka52f157e' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ss-sec ss-sec--bandwrap","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec ss-sec--bandwrap"><!-- wp:group {"className":"ss-wide ss-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ss-wide ss-band sp-parallax"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-large sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/arrival.webp' ) ); ?>" alt="<?php echo esc_attr( shiosai_resort_t( 'a14f158a5' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ss-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec"><!-- wp:group {"className":"ss-head","layout":{"type":"default"}} -->
<div class="wp-block-group ss-head"><!-- wp:paragraph {"className":"ss-head__eyebrow"} -->
<p class="ss-head__eyebrow"><?php echo wp_kses_post( shiosai_resort_t( 'k5e794a31' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-head__title"} -->
<h2 class="wp-block-heading ss-head__title"><?php echo wp_kses_post( shiosai_resort_t( 'k613b7034' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-head__sub"} -->
<p class="ss-head__sub"><?php echo wp_kses_post( shiosai_resort_t( 'k39fe4c26' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-intro sp-reveal sp-reveal--up"} -->
<p class="ss-intro sp-reveal sp-reveal--up"><?php echo wp_kses_post( shiosai_resort_t( 'k6e103a41' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"ss-rules ss-rules--steps ss-narrow"} -->
<ul class="wp-block-list ss-rules ss-rules--steps ss-narrow"><!-- wp:list-item -->
<li><strong>1</strong> <?php echo wp_kses_post( shiosai_resort_t( 'k2c410589' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><strong>2</strong> <?php echo wp_kses_post( shiosai_resort_t( 'k97c56ffe' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><strong>3</strong> <?php echo wp_kses_post( shiosai_resort_t( 'k1add794a' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><strong>4</strong> <?php echo wp_kses_post( shiosai_resort_t( 'k1591ec34' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"send-your-dates","className":"ss-sec ss-sec--white ss-contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec ss-sec--white ss-contact" id="send-your-dates"><!-- wp:group {"className":"ss-head","layout":{"type":"default"}} -->
<div class="wp-block-group ss-head"><!-- wp:paragraph {"className":"ss-head__eyebrow"} -->
<p class="ss-head__eyebrow"><?php echo wp_kses_post( shiosai_resort_t( 'k83e13f62' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-head__title"} -->
<h2 class="wp-block-heading ss-head__title"><?php echo wp_kses_post( shiosai_resort_t( 'k23decacf' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-head__sub"} -->
<p class="ss-head__sub"><?php echo wp_kses_post( shiosai_resort_t( 'k48aa76eb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-intro"} -->
<p class="ss-intro"><?php echo wp_kses_post( shiosai_resort_t( 'k846e4e83' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ss-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group ss-contact__form"><?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ss-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec"><!-- wp:group {"className":"ss-head","layout":{"type":"default"}} -->
<div class="wp-block-group ss-head"><!-- wp:paragraph {"className":"ss-head__eyebrow"} -->
<p class="ss-head__eyebrow"><?php echo wp_kses_post( shiosai_resort_t( 'kb0a4d178' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-head__title"} -->
<h2 class="wp-block-heading ss-head__title"><?php echo wp_kses_post( shiosai_resort_t( 'k83b62f43' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-head__sub"} -->
<p class="ss-head__sub"><?php echo wp_kses_post( shiosai_resort_t( 'k39a046f3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-intro sp-reveal sp-reveal--up"} -->
<p class="ss-intro sp-reveal sp-reveal--up"><?php echo wp_kses_post( shiosai_resort_t( 'kb4f68338' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-phone"} -->
<p class="ss-phone">+00 0000 0000 · <a href="mailto:stay@shiosai-resort.example"><?php echo wp_kses_post( shiosai_resort_t( 'k73cfb200' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
