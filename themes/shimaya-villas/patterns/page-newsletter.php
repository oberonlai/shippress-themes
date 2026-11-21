<?php
/**
 * Title: Page: the season letter
 * Slug: shimaya-villas/page-newsletter
 * Categories: shimaya-villas
 * Viewport Width: 1440
 * Description: Window, the three letters, and the newsletter slot on a band (native mailto fallback without a plugin).
 */
?>
<!-- wp:group {"align":"full","className":"sv-hero sv-hero--in sv-hero--plain","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sv-hero sv-hero--in sv-hero--plain"><!-- wp:cover {"url":"<?php echo shimaya_villas_img( 'p10-oct-dusk.webp' ); ?>","dimRatio":0,"alt":"Dusk on a lantern-lit deck with a couple at a small table while a cook sets down a plate.","isDark":false,"className":"sv-window sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light sv-window sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shimaya_villas_t( 'aa8f500dd' ) ); ?>" src="<?php echo shimaya_villas_img( 'p10-oct-dusk.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --><!-- wp:group {"className":"sv-panel","layout":{"type":"default"}} -->
<div class="wp-block-group sv-panel"><!-- wp:paragraph {"className":"sv-eyebrow"} -->
<p class="sv-eyebrow"><?php echo wp_kses_post( shimaya_villas_t( 'k0042f034' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"sv-h1"} -->
<h1 class="wp-block-heading sv-h1"><?php echo wp_kses_post( shimaya_villas_t( 'kb8c5e326' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"sv-sec sv-lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sv-sec sv-lead"><!-- wp:group {"className":"sv-in","layout":{"type":"default"}} -->
<div class="wp-block-group sv-in"><!-- wp:paragraph {"className":"sv-leadp"} -->
<p class="sv-leadp"><?php echo wp_kses_post( shimaya_villas_t( 'k30e4fd8b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"sv-sec sv-letters","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sv-sec sv-letters"><!-- wp:group {"className":"sv-in","layout":{"type":"default"}} -->
<div class="wp-block-group sv-in"><!-- wp:paragraph {"className":"sv-eyebrow"} -->
<p class="sv-eyebrow"><?php echo wp_kses_post( shimaya_villas_t( 'k8732ecea' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"className":"sv-h2"} -->
<h2 class="wp-block-heading sv-h2"><?php echo wp_kses_post( shimaya_villas_t( 'kae1d78c7' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"sv-prose","layout":{"type":"default"}} -->
<div class="wp-block-group sv-prose"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shimaya_villas_t( 'kd8fffbee' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","anchor":"join","align":"full","backgroundColor":"band","className":"sv-sec sv-sec--request sv-letter","layout":{"type":"default"}} -->
<section id="join" class="wp-block-group alignfull sv-sec sv-sec--request sv-letter has-band-background-color has-background"><!-- wp:group {"className":"sv-in sv-request","layout":{"type":"default"}} -->
<div class="wp-block-group sv-in sv-request"><!-- wp:group {"className":"sv-request__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sv-request__txt"><!-- wp:paragraph {"className":"sv-eyebrow"} -->
<p class="sv-eyebrow"><?php echo wp_kses_post( shimaya_villas_t( 'k00c8a37f' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"className":"sv-h2"} -->
<h2 class="wp-block-heading sv-h2"><?php echo wp_kses_post( shimaya_villas_t( 'kf42c9d21' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"sv-lede sv-lede--ink"} -->
<p class="sv-lede sv-lede--ink"><?php echo wp_kses_post( shimaya_villas_t( 'k933aff47' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-link"} -->
<p class="sv-link"><a href="/hold-dates/"><?php echo wp_kses_post( shimaya_villas_t( 'k6dc0a500' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group sv-letter__form">
<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'stay@shimayavillas.example',
	'label'   => shimaya_villas_t( 'forms_email' ),
	'submit'  => shimaya_villas_t( 'forms_subscribe' ),
	'notice'  => shimaya_villas_t( 'forms_mail_notice' ),
	'subject' => shimaya_villas_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
