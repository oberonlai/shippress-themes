<?php
/**
 * Title: Page: The Clinic Letter
 * Slug: seimyaku-clinic/page-newsletter
 * Categories: seimyaku-clinic
 * Viewport Width: 1440
 * Description: Inner page: photograph band, what the letter holds, how often it comes, and the newsletter form slot.
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-phead"><!-- wp:group {"className":"sz-phead__media sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__media sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo seimyaku_clinic_img( 'street-morning.webp' ); ?>" alt="<?php echo esc_attr( seimyaku_clinic_t( 'a50a6267c' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sz-veil sz-veil--static","layout":{"type":"default"}} -->
<div class="wp-block-group sz-veil sz-veil--static"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__text"><!-- wp:paragraph {"className":"is-style-sz-meta sz-crumbs"} -->
<p class="is-style-sz-meta sz-crumbs"><span><a href="/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k8cf04a97' ) ); ?></a></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k785959f8' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sz-phead__title"} -->
<h1 class="wp-block-heading sz-phead__title"><?php echo wp_kses_post( seimyaku_clinic_t( 'k785959f8' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-lead"} -->
<p class="sz-lead"><?php echo wp_kses_post( seimyaku_clinic_t( 'kb2e1c65b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sz-prose sz-prose--wide","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-prose sz-prose--wide"><!-- wp:paragraph {"className":"is-style-sz-chip"} -->
<p class="is-style-sz-chip"><?php echo wp_kses_post( seimyaku_clinic_t( 'k7a93eaa6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'kd767b38b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( seimyaku_clinic_t( 'k76494acb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sz-valines sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sz-valines sp-stagger"><!-- wp:group {"className":"sz-valine sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-valine sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sz-valine__t"} -->
<p class="sz-valine__t"><?php echo wp_kses_post( seimyaku_clinic_t( 'k2a9e5cfa' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-valine__d"} -->
<p class="sz-valine__d"><?php echo wp_kses_post( seimyaku_clinic_t( 'k35bbad99' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-valine sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-valine sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sz-valine__t"} -->
<p class="sz-valine__t"><?php echo wp_kses_post( seimyaku_clinic_t( 'k71e562ec' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-valine__d"} -->
<p class="sz-valine__d"><?php echo wp_kses_post( seimyaku_clinic_t( 'k6acdb5ac' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-valine sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-valine sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sz-valine__t"} -->
<p class="sz-valine__t"><?php echo wp_kses_post( seimyaku_clinic_t( 'k2c351b3f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-valine__d"} -->
<p class="sz-valine__d"><?php echo wp_kses_post( seimyaku_clinic_t( 'k916dd70f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sz-note"} -->
<p class="sz-note"><?php echo wp_kses_post( seimyaku_clinic_t( 'k47c29923' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sz-formsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-formsec"><!-- wp:paragraph {"className":"is-style-sz-chip"} -->
<p class="is-style-sz-chip"><?php echo wp_kses_post( seimyaku_clinic_t( 'kb2691758' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'k245bf65a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seimyaku_clinic_t( 'kca026289' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"anchor":"subscribe","className":"sz-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group sz-formwrap" id="subscribe"><?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'care@seimyaku-clinic.example',
		'label'   => seimyaku_clinic_t( 'forms_email' ),
		'submit'  => seimyaku_clinic_t( 'forms_subscribe' ),
		'notice'  => seimyaku_clinic_t( 'forms_mail_notice' ),
		'subject' => seimyaku_clinic_t( 'forms_mail_subject' ),
	)
);
?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sz-note"} -->
<p class="sz-note"><?php echo wp_kses_post( seimyaku_clinic_t( 'k6d3d5a38' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
