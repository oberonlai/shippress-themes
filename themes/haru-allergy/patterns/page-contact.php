<?php
/**
 * Title: Page: Contact
 * Slug: haru-allergy/page-contact
 * Categories: haru-allergy
 * Keywords: page-contact
 * Viewport Width: 1440
 * Description: Inner page: Contact.
 */
?>
<!-- wp:group {"className":"ha-kv ha-kv--page ha-head","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-kv ha-kv--page ha-head"><!-- wp:cover {"url":"<?php echo haru_allergy_img( 'p16-reception' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":70,"minHeightUnit":"svh","className":"ha-kv__stage sp-parallax"} -->
<div class="wp-block-cover ha-kv__stage sp-parallax" style="min-height:70svh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p16' ) ); ?>" src="<?php echo haru_allergy_img( 'p16-reception' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"ha-head__kicker"} -->
<p class="ha-head__kicker"><?php echo esc_html( haru_allergy_t( 'head_kicker' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"ha-kv__veil ha-kv__veil--page","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull ha-kv__veil ha-kv__veil--page"><!-- wp:group {"className":"ha-kv__veil-in","layout":{"type":"default"}} -->
<div class="wp-block-group ha-kv__veil-in"><!-- wp:heading {"level":1,"className":"ha-head__title"} -->
<h1 class="wp-block-heading ha-head__title"><?php echo haru_allergy_lines( 'h_ct' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ha-poem sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ha-poem sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'ct_i1' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'ct_i2' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-problem ha-problem--page ha-problem--short","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-problem ha-problem--page ha-problem--short"><!-- wp:group {"className":"ha-problem__row1","layout":{"type":"default"}} -->
<div class="wp-block-group ha-problem__row1"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-problem__a"} -->
<figure class="wp-block-image size-full ha-problem__a"><img src="<?php echo haru_allergy_img( 'p18-observation' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p18' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"className":"ha-problem__h sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading ha-problem__h sp-reveal sp-reveal--mask"><?php echo haru_allergy_lines( 'ct_edge' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-problem__b"} -->
<figure class="wp-block-image size-full ha-problem__b"><img src="<?php echo haru_allergy_img( 'p01-skin-prick' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-contact","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-contact"><!-- wp:group {"className":"ha-contact__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ha-contact__grid"><!-- wp:group {"className":"ha-contact__left","layout":{"type":"default"}} -->
<div class="wp-block-group ha-contact__left"><!-- wp:heading {"level":2,"className":"ha-contact__h"} -->
<h2 class="wp-block-heading ha-contact__h"><?php echo esc_html( haru_allergy_t( 'ct_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ha-contact__p"} -->
<p class="ha-contact__p"><?php echo esc_html( haru_allergy_t( 'ct_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-contact__photo"} -->
<figure class="wp-block-image size-full ha-contact__photo"><img src="<?php echo haru_allergy_img( 'p14-walk' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-contact__right","layout":{"type":"default"}} -->
<div class="wp-block-group ha-contact__right"><!-- wp:group {"className":"ha-card3 ha-card3--form","layout":{"type":"default"}} -->
<div class="wp-block-group ha-card3 ha-card3--form"><!-- wp:heading {"level":3,"className":"ha-card3__t"} -->
<h3 class="wp-block-heading ha-card3__t"><?php echo esc_html( haru_allergy_t( 'ct_card_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ha-card3__q ha-card3__q--left"} -->
<p class="ha-card3__q ha-card3__q--left"><?php echo esc_html( haru_allergy_t( 'ct_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<?php
ob_start(); ?>
<a class="wp-element-button" href="mailto:hello@haru-allergy.example?subject=<?php echo esc_attr( rawurlencode( haru_allergy_t( 'contact_subject' ) ) ); ?>"><?php echo esc_html( haru_allergy_t( 'contact_email' ) ); ?></a>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'     => 'contact',
		'fallback' => $fallback,
	)
);
?>

<!-- wp:paragraph {"className":"ha-card3__by"} -->
<p class="ha-card3__by"><?php echo esc_html( haru_allergy_t( 'forms_contact_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
