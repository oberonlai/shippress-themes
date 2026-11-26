<?php
/**
 * Title: Home: message (veil cover with a docked headline)
 * Slug: seimyaku-clinic/front-message
 * Categories: seimyaku-clinic
 * Keywords: message, cover
 * Viewport Width: 1440
 * Description: A full-bleed cover under the same wave veil: the headline stays docked on the left while three paragraphs scroll in the right half.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"message","className":"sz-message-wrap","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-message-wrap" id="message"><!-- wp:cover {"url":"<?php echo seimyaku_clinic_img( 'street-morning.webp' ); ?>","alt":"Quiet residential street with trees, apartment buildings, and tram tracks in morning haze.","dimRatio":100,"customGradient":"linear-gradient(to bottom,rgba(191,208,214,.95) 0%,rgba(191,208,214,.88) 55%,rgba(191,208,214,.25) 100%)","minHeight":880,"minHeightUnit":"px","isDark":false,"align":"full","className":"sz-message sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light sz-message sp-parallax" style="min-height:880px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( seimyaku_clinic_t( 'a66cca9df' ) ); ?>" src="<?php echo seimyaku_clinic_img( 'street-morning.webp' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(to bottom,rgba(191,208,214,.95) 0%,rgba(191,208,214,.88) 55%,rgba(191,208,214,.25) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"sz-message__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sz-message__grid"><!-- wp:group {"className":"sz-message__dock","layout":{"type":"default"}} -->
<div class="wp-block-group sz-message__dock"><!-- wp:paragraph {"className":"is-style-sz-chip"} -->
<p class="is-style-sz-chip"><?php echo wp_kses_post( seimyaku_clinic_t( 'k660392ea' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"sz-dock"} -->
<h2 class="wp-block-heading sz-dock"><?php echo wp_kses_post( seimyaku_clinic_t( 'k79cd517c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-dock__sub"} -->
<p class="sz-dock__sub"><?php echo wp_kses_post( seimyaku_clinic_t( 'k839a3c9c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-message__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-message__text"><!-- wp:paragraph {"className":"sz-para sp-reveal sp-reveal--up"} -->
<p class="sz-para sp-reveal sp-reveal--up"><?php echo wp_kses_post( seimyaku_clinic_t( 'k5fee80ac' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-para sp-reveal sp-reveal--up"} -->
<p class="sz-para sp-reveal sp-reveal--up"><?php echo wp_kses_post( seimyaku_clinic_t( 'k8def96e1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-para sp-reveal sp-reveal--up"} -->
<p class="sz-para sp-reveal sp-reveal--up"><?php echo wp_kses_post( seimyaku_clinic_t( 'ka6241369' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-textlink sp-reveal sp-reveal--up"} -->
<p class="sz-textlink sp-reveal sp-reveal--up"><a href="/about/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k7c16f89a' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->
