<?php
/**
 * Title: Page: Contact
 * Slug: rinrin-cycletours/inner-contact
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Contact: quay hero, address, hours, phone and email, the day-one meeting point and the contact form slot with its mailto fallback.
 */
?>
<!-- wp:group {"className":"rc-ihero sp-parallax","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-ihero sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-ihero__img"} -->
<figure class="wp-block-image size-full rc-ihero__img"><img src="<?php echo rinrin_cycletours_img( 'hero-quay.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_hero_quay' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rc-ihero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group rc-ihero__inner"><!-- wp:heading {"level":1,"className":"rc-ihero__title"} -->
<h1 class="wp-block-heading rc-ihero__title"><?php echo esc_html( rinrin_cycletours_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-ilede","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-ilede"><!-- wp:paragraph {"className":"rc-ilede__p"} -->
<p class="rc-ilede__p"><?php echo esc_html( rinrin_cycletours_t( 'contact_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-isecs"><!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'contact_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="rc-contact"><div><dt><?php echo esc_html( rinrin_cycletours_t( 'ct_addr_l' ) ); ?></dt><dd><?php echo rinrin_cycletours_lines( 'foot_address' ); ?></dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'ct_hours_l' ) ); ?></dt><dd><?php echo rinrin_cycletours_lines( 'foot_hours' ); ?></dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'ct_phone_l' ) ); ?></dt><dd><a href="tel:+001234 5678">+00 1234 5678</a></dd></div><div><dt><?php echo esc_html( rinrin_cycletours_t( 'ct_email_l' ) ); ?></dt><dd><a href="mailto:hello@rinrin-cycletours.example">hello@rinrin-cycletours.example</a></dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'contact_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'contact_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-isecs rc-isecs--form","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-isecs rc-isecs--form"><!-- wp:group {"className":"rc-isec sp-reveal sp-reveal--up","anchor":"write","layout":{"type":"default"}} -->
<div id="write" class="wp-block-group rc-isec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"rc-isec__h"} -->
<h2 class="wp-block-heading rc-isec__h"><?php echo esc_html( rinrin_cycletours_t( 'contact_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group rc-isec__body"><!-- wp:paragraph {"className":"rc-isec__p"} -->
<p class="rc-isec__p"><?php echo esc_html( rinrin_cycletours_t( 'contact_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"rc-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group rc-formwrap"><?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rc-pill"} -->
<div class="wp-block-button rc-pill"><a class="wp-block-button__link wp-element-button" href="mailto:hello@rinrin-cycletours.example?subject=<?php echo rawurlencode( rinrin_cycletours_t( 'form_contact_subject' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'form_contact_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
