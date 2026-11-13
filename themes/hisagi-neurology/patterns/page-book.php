<?php
/**
 * Title: Page: Book a consultation
 * Slug: hisagi-neurology/page-book
 * Categories: hisagi-neurology
 * Inserter: no
 * Viewport Width: 1440
 * Description: Booking page: what to send, the contact form slot with a mailto fallback and what happens next.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hn-ph","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hn-ph"><!-- wp:group {"className":"hn-ph__win","layout":{"type":"default"}} -->
<div class="wp-block-group hn-ph__win"><!-- wp:group {"className":"hn-ph__media sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hn-ph__media sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":800,"height":800} -->
<figure class="wp-block-image size-full"><img src="<?php echo hisagi_neurology_img( 'reception.webp' ); ?>" alt="<?php echo esc_attr( hisagi_neurology_t( 'a68703a06' ) ); ?>" width="800" height="800"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hn-ph__text","layout":{"type":"default"}} -->
<div class="wp-block-group hn-ph__text"><!-- wp:paragraph {"className":"hn-label hn-strip"} -->
<p class="hn-label hn-strip"><?php echo wp_kses_post( hisagi_neurology_t( 'k36b15eaf' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"className":"hn-h1 hn-h1--inner"} /-->

<!-- wp:paragraph {"className":"hn-leadp"} -->
<p class="hn-leadp"><?php echo wp_kses_post( hisagi_neurology_t( 'kdacfe3da' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hn-signal hn-signal--ph" aria-hidden="true"><span style="--i:0"></span><span style="--i:1"></span><span style="--i:2"></span><span style="--i:3"></span><span style="--i:4"></span><span style="--i:5"></span><span style="--i:6"></span><span style="--i:7"></span><span style="--i:8"></span><span style="--i:9"></span><span style="--i:10"></span><span style="--i:11"></span><span style="--i:12"></span><span style="--i:13"></span><span style="--i:14"></span><span style="--i:15"></span></div>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hn-sec hn-inner hn-inner--book","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hn-sec hn-inner hn-inner--book"><!-- wp:group {"className":"hn-narrow hn-narrow--wide","layout":{"type":"default"}} -->
<div class="wp-block-group hn-narrow hn-narrow--wide"><!-- wp:paragraph {"className":"hn-label hn-strip"} -->
<p class="hn-label hn-strip"><?php echo wp_kses_post( hisagi_neurology_t( 'k8e75db1e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hn-h2"} -->
<h2 class="wp-block-heading hn-h2"><?php echo wp_kses_post( hisagi_neurology_t( 'k7b4133dd' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hn-body"} -->
<p class="hn-body"><?php echo wp_kses_post( hisagi_neurology_t( 'kda508313' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-body"} -->
<p class="hn-body"><?php echo wp_kses_post( hisagi_neurology_t( 'k0aac21a9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hn-book__panel","layout":{"type":"default"}} -->
<div class="wp-block-group hn-book__panel"><?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hn-cta"} -->
<div class="wp-block-button hn-cta"><a class="wp-block-button__link wp-element-button" href="mailto:hello@hisagi-neurology.example?subject=<?php echo rawurlencode( hisagi_neurology_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( hisagi_neurology_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"hn-foot-note"} -->
<p class="hn-foot-note"><?php echo esc_html( hisagi_neurology_t( 'forms_contact_note' ) ); ?></p>
<!-- /wp:paragraph -->
<?php
$hn_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $hn_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput
?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hn-fees__cols","layout":{"type":"default"}} -->
<div class="wp-block-group hn-fees__cols"><!-- wp:group {"className":"hn-fees__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hn-fees__col sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hn-dotlabel"} -->
<p class="hn-dotlabel"><?php echo wp_kses_post( hisagi_neurology_t( 'k47559fb8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hn-h3"} -->
<h2 class="wp-block-heading hn-h3"><?php echo wp_kses_post( hisagi_neurology_t( 'ka273f1bc' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hn-body"} -->
<p class="hn-body"><?php echo wp_kses_post( hisagi_neurology_t( 'k88470687' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hn-fees__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hn-fees__col sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hn-dotlabel"} -->
<p class="hn-dotlabel"><?php echo wp_kses_post( hisagi_neurology_t( 'k472792df' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hn-h3"} -->
<h2 class="wp-block-heading hn-h3"><?php echo wp_kses_post( hisagi_neurology_t( 'k91d6e9d9' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hn-body"} -->
<p class="hn-body"><?php echo wp_kses_post( hisagi_neurology_t( 'ka5366042' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
