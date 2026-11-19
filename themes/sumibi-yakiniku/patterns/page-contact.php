<?php
/**
 * Title: Page: Contact
 * Slug: sumibi-yakiniku/page-contact
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: Contact inner page: opener band, phone, email and address rows beside the contact form slot with a mailto fallback, then private events, press and suppliers.
 */
?>
<?php
ob_start(); ?>
<a class="wp-element-button" href="mailto:table@sumibi.example?subject=<?php echo rawurlencode( sumibi_yakiniku_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'forms_contact_cta' ) ); ?></a>
<?php
$fallback = ob_get_clean();
?>
<!-- wp:group {"tagName":"section","className":"sy-open","layout":{"type":"default"}} -->
<section class="wp-block-group sy-open"><!-- wp:paragraph {"className":"sy-label sy-label--l"} -->
<p class="sy-label sy-label--l"><?php echo esc_html( sumibi_yakiniku_t( 'ct_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo sumibi_yakiniku_img( 'p02-tongs-turn.webp' ); ?>","dimRatio":50,"overlayColor":"charcoal","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"contentPosition":"center left","className":"sy-band sy-band--page sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left sy-band sy-band--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sumibi_yakiniku_a( 'alt_p02' ); ?>" src="<?php echo sumibi_yakiniku_img( 'p02-tongs-turn.webp' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"className":"sy-open__h","level":1} -->
<h1 class="wp-block-heading sy-open__h"><?php echo esc_html( sumibi_yakiniku_t( 'ct_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-open__k"} -->
<p class="sy-open__k"><?php echo esc_html( sumibi_yakiniku_t( 'ct_kicker' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg"><!-- wp:paragraph {"className":"sy-lede"} -->
<p class="sy-lede"><?php echo esc_html( sumibi_yakiniku_t( 'ct_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-split","layout":{"type":"default"}} -->
<div class="wp-block-group sy-split"><!-- wp:group {"className":"sy-split__t","layout":{"type":"default"}} -->
<div class="wp-block-group sy-split__t"><!-- wp:group {"className":"sy-rows","layout":{"type":"default"}} -->
<div class="wp-block-group sy-rows"><!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_phone' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'rv_phone' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_email' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'rv_email' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_address' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'foot_address' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-row","layout":{"type":"default"}} -->
<div class="wp-block-group sy-row"><!-- wp:paragraph {"className":"sy-row__l"} -->
<p class="sy-row__l"><?php echo esc_html( sumibi_yakiniku_t( 'rl_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-row__v"} -->
<p class="sy-row__v"><?php echo esc_html( sumibi_yakiniku_t( 'rv_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-split__m","layout":{"type":"default"}} -->
<div class="wp-block-group sy-split__m"><!-- wp:group {"className":"sy-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group sy-formbox"><?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg sy-pg--white","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg sy-pg--white"><!-- wp:group {"className":"sy-cols2","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cols2"><!-- wp:group {"className":"sy-pg__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__col sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h3"} -->
<h2 class="wp-block-heading sy-h3"><?php echo esc_html( sumibi_yakiniku_t( 'ct_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'ct_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-pg__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__col sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h3"} -->
<h2 class="wp-block-heading sy-h3"><?php echo esc_html( sumibi_yakiniku_t( 'ct_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'ct_b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
