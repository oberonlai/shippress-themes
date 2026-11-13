<?php
/**
 * Title: Page: visit
 * Slug: noka-cheese/page-visit
 * Categories: noka-cheese
 * Viewport Width: 1440
 * Description: Address, hours, directions, pickup notes and the contact form slot.
 */
?>
<!-- wp:group {"className":"nk-sec nk-pagehead","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-pagehead"><!-- wp:group {"className":"nk-row nk-row--head","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row nk-row--head"><!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'vi_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"nk-h1 nk-h1--page"} -->
<h1 class="wp-block-heading nk-h1 nk-h1--page"><?php echo wp_kses_post( noka_cheese_t( 'vi_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nk-lead nk-lead--page"} -->
<p class="nk-lead nk-lead--page"><?php echo wp_kses_post( noka_cheese_t( 'vi_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"nk-pills"} -->
<div class="wp-block-buttons nk-pills"><!-- wp:button {"className":"nk-pill nk-pill--solid"} -->
<div class="wp-block-button nk-pill nk-pill--solid"><a class="wp-block-button__link wp-element-button" href="/boards/"><?php echo wp_kses_post( noka_cheese_t( 'cta_reserve_arrow' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-cell nk-cell--photo","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--photo"><!-- wp:group {"className":"nk-photo-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nk-photo-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nk-pebble nk-pebble--b nk-pebble--head"} -->
<figure class="wp-block-image size-full nk-pebble nk-pebble--b nk-pebble--head"><img src="<?php echo noka_cheese_img( 'counter-band.webp' ); ?>" alt="<?php echo esc_attr( noka_cheese_t( 'alt_band' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-sec nk-spec","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-spec"><!-- wp:group {"className":"nk-row","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row"><!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'vi_s1_e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo wp_kses_post( noka_cheese_t( 'vi_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"nk-speclist","layout":{"type":"default"}} -->
<div class="wp-block-group nk-speclist"><!-- wp:group {"className":"nk-specrow","layout":{"type":"default"}} -->
<div class="wp-block-group nk-specrow"><!-- wp:paragraph {"className":"nk-specrow__k"} -->
<p class="nk-specrow__k"><?php echo wp_kses_post( noka_cheese_t( 'vi_lbl_address' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-specrow__v"} -->
<p class="nk-specrow__v"><?php echo wp_kses_post( noka_cheese_t( 'vi_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-specrow","layout":{"type":"default"}} -->
<div class="wp-block-group nk-specrow"><!-- wp:paragraph {"className":"nk-specrow__k"} -->
<p class="nk-specrow__k"><?php echo wp_kses_post( noka_cheese_t( 'vi_lbl_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-specrow__v"} -->
<p class="nk-specrow__v"><?php echo wp_kses_post( noka_cheese_t( 'vi_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-specrow","layout":{"type":"default"}} -->
<div class="wp-block-group nk-specrow"><!-- wp:paragraph {"className":"nk-specrow__k"} -->
<p class="nk-specrow__k"><?php echo wp_kses_post( noka_cheese_t( 'vi_lbl_phone' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-specrow__v"} -->
<p class="nk-specrow__v"><?php echo wp_kses_post( noka_cheese_t( 'ft_phone' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-specrow","layout":{"type":"default"}} -->
<div class="wp-block-group nk-specrow"><!-- wp:paragraph {"className":"nk-specrow__k"} -->
<p class="nk-specrow__k"><?php echo wp_kses_post( noka_cheese_t( 'vi_lbl_email' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-specrow__v"} -->
<p class="nk-specrow__v"><?php echo wp_kses_post( noka_cheese_t( 'ft_email' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:group {"className":"nk-prose sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nk-prose sp-stagger"><!-- wp:paragraph {"className":"nk-body nk-body--s sp-reveal sp-reveal--up"} -->
<p class="nk-body nk-body--s sp-reveal sp-reveal--up"><?php echo wp_kses_post( noka_cheese_t( 'vi_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-body nk-body--s sp-reveal sp-reveal--up"} -->
<p class="nk-body nk-body--s sp-reveal sp-reveal--up"><?php echo wp_kses_post( noka_cheese_t( 'vi_s1_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-sec nk-spec","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-spec"><!-- wp:group {"className":"nk-row","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row"><!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'vi_s2_e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo wp_kses_post( noka_cheese_t( 'vi_s2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:group {"className":"nk-prose sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nk-prose sp-stagger"><!-- wp:paragraph {"className":"nk-body nk-body--s sp-reveal sp-reveal--up"} -->
<p class="nk-body nk-body--s sp-reveal sp-reveal--up"><?php echo wp_kses_post( noka_cheese_t( 'vi_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-body nk-body--s sp-reveal sp-reveal--up"} -->
<p class="nk-body nk-body--s sp-reveal sp-reveal--up"><?php echo wp_kses_post( noka_cheese_t( 'vi_s2_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-sec nk-spec","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-spec"><!-- wp:group {"className":"nk-row","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row"><!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'vi_s3_e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo wp_kses_post( noka_cheese_t( 'vi_s3_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:group {"className":"nk-prose sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nk-prose sp-stagger"><!-- wp:paragraph {"className":"nk-body nk-body--s sp-reveal sp-reveal--up"} -->
<p class="nk-body nk-body--s sp-reveal sp-reveal--up"><?php echo wp_kses_post( noka_cheese_t( 'vi_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-body nk-body--s sp-reveal sp-reveal--up"} -->
<p class="nk-body nk-body--s sp-reveal sp-reveal--up"><?php echo wp_kses_post( noka_cheese_t( 'vi_s3_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-sec nk-spec nk-spec--form","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-spec nk-spec--form"><!-- wp:group {"className":"nk-row","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row"><!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'vi_s4_e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo wp_kses_post( noka_cheese_t( 'vi_s4_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"nk-prose","layout":{"type":"default"}} -->
<div class="wp-block-group nk-prose"><!-- wp:paragraph {"className":"nk-body nk-body--s"} -->
<p class="nk-body nk-body--s"><?php echo wp_kses_post( noka_cheese_t( 'vi_s4_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-body nk-body--s"} -->
<p class="nk-body nk-body--s"><?php echo wp_kses_post( noka_cheese_t( 'vi_s4_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-cell nk-cell--text nk-cell--form","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text nk-cell--form"><?php
ob_start(); ?>
<a class="wp-element-button nk-pill nk-mailbtn" href="mailto:counter@nokacheese.example?subject=<?php echo rawurlencode( noka_cheese_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( noka_cheese_t( 'contact_email' ) ); ?></a>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
