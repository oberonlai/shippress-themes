<?php
/**
 * Title: Page: Contact
 * Slug: noki-surveyors/page-contact
 * Categories: noki-surveyors
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact page: address, phone, email, hours, the area covered and the contact form slot with an email fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nk-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-ihead">
<!-- wp:group {"className":"nk-ihead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nk-ihead__grid">
<!-- wp:group {"className":"nk-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-ihead__text">
<!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo esc_html( noki_surveyors_t( 'contact_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"nk-ihead__h1"} -->
<h1 class="wp-block-heading nk-ihead__h1"><?php echo esc_html( noki_surveyors_t( 'contact_t' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-ihead__lede"} -->
<p class="nk-ihead__lede"><?php echo esc_html( noki_surveyors_t( 'contact_i' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-ipane","layout":{"type":"default"}} -->
<div class="wp-block-group nk-ipane">
<!-- wp:group {"className":"sp-parallax nk-par-6","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax nk-par-6">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo noki_surveyors_img( 'field-sill-photo.webp' ); ?>" alt="<?php echo noki_surveyors_a( 'alt_f2' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-seam","layout":{"type":"default"}} -->
<div class="wp-block-group nk-seam">
<!-- wp:html -->
<span class="nk-seam__i" aria-hidden="true"></span>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"nk-sec nk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-sec--tight">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow nk-hrow--s","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow nk-hrow--s">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'contact_0_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'contact_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body">
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'contact_0_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'contact_0_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"nk-sec nk-sec--tight nk-sec--details","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-sec--tight nk-sec--details">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow nk-hrow--s","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow nk-hrow--s">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'contact_1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'contact_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-twocol","layout":{"type":"default"}} -->
<div class="wp-block-group nk-twocol">
<!-- wp:group {"className":"nk-body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body">
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'contact_1_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'contact_1_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<dl class="nk-contact nk-contact--l"><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_e' ) ); ?></dt><dd><a href="mailto:hello@noki-surveyors.example">hello@noki-surveyors.example</a></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_t' ) ); ?></dt><dd><a href="tel:+00315550148">+00 31 555 0148</a></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_o' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'rq_ov' ) ); ?></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_d' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'rq_dv' ) ); ?></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_v' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'rq_vv' ) ); ?></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_a' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'rq_av' ) ); ?></dd></div></dl>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"nk-sec nk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-sec--tight">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow nk-hrow--s","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow nk-hrow--s">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'contact_2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'contact_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body">
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'contact_2_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'contact_2_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"nk-sec nk-sec--tight nk-sec--form","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-sec--tight nk-sec--form">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow nk-hrow--s","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow nk-hrow--s">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'contact_3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'contact_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body">
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'contact_3_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'contact_3_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group nk-formbox">
<?php
ob_start();
?>
<!-- wp:paragraph {"className":"nk-form-note"} -->
<p class="nk-form-note"><?php echo esc_html( noki_surveyors_t( 'contact_fallback_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"nk-btns"} -->
<div class="wp-block-buttons nk-btns"><!-- wp:button {"className":"nk-btn"} --><div class="wp-block-button nk-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@noki-surveyors.example?subject=<?php echo rawurlencode( noki_surveyors_t( 'contact_mail_subject' ) ); ?>"><?php echo esc_html( noki_surveyors_t( 'contact_email_button' ) ); ?></a></div><!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$noki_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $noki_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput
?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"nk-sec nk-sec--tight nk-sec--mail","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-sec--tight nk-sec--mail">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body">
<!-- wp:heading {"level":2,"className":"nk-h2s"} -->
<h2 class="wp-block-heading nk-h2s"><?php echo esc_html( noki_surveyors_t( 'contact_4_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'contact_4_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'contact_4_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

