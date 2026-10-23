<?php
/**
 * Title: Home: three things we do
 * Slug: megumi-pharmacy/front-ways
 * Categories: megumi-pharmacy
 * Keywords: services, cards
 * Viewport Width: 1440
 * Description: Three portrait link cards (0.77) with the label inside the photograph at the bottom left.
 */
$u = function ( $f ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $f ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mp-sec mp-ways","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mp-sec mp-ways"><!-- wp:group {"className":"mp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mp-wrap"><!-- wp:group {"className":"mp-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-head sp-reveal sp-reveal--up"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker"><?php echo wp_kses_post( megumi_pharmacy_t( 'k78413552' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mp-h2"} -->
<h2 class="wp-block-heading mp-h2"><?php echo wp_kses_post( megumi_pharmacy_t( 'k44127007' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-more"} -->
<p class="mp-more"><a href="/services/"><?php echo wp_kses_post( megumi_pharmacy_t( 'k3016da79' ) ); ?></a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mp-cards sp-stagger"><!-- wp:group {"className":"mp-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"mp-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo $u( 'p02-bag.webp' ); ?>" alt="<?php echo esc_attr( megumi_pharmacy_t( 'a6d9d1e43' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-card__label"} -->
<p class="mp-card__label"><a href="/prescriptions/"><?php echo wp_kses_post( megumi_pharmacy_t( 'kad4290e7' ) ); ?></a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-card__text"} -->
<p class="mp-card__text"><?php echo wp_kses_post( megumi_pharmacy_t( 'kf4811ea2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"mp-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo $u( 'p03-review.webp' ); ?>" alt="<?php echo esc_attr( megumi_pharmacy_t( 'a2ea535ee' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-card__label"} -->
<p class="mp-card__label"><a href="/medicine-reviews/"><?php echo wp_kses_post( megumi_pharmacy_t( 'ke715c784' ) ); ?></a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-card__text"} -->
<p class="mp-card__text"><?php echo wp_kses_post( megumi_pharmacy_t( 'k8fcaeceb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"mp-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo $u( 'p04-flu.webp' ); ?>" alt="<?php echo esc_attr( megumi_pharmacy_t( 'ae7c62a8e' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-card__label"} -->
<p class="mp-card__label"><a href="/vaccinations/"><?php echo wp_kses_post( megumi_pharmacy_t( 'k874a5b94' ) ); ?></a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-card__text"} -->
<p class="mp-card__text"><?php echo wp_kses_post( megumi_pharmacy_t( 'k3f3104fb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
