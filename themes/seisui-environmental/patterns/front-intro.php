<?php
/**
 * Title: Home: OUR WORK, a ghost word and an introduction
 * Slug: seisui-environmental/front-intro
 * Categories: seisui-environmental
 * Keywords: home
 * Viewport Width: 1440
 * Description: The ghost-word heading and a two-column introduction: a field photograph on the left, three paragraphs on the right.
 */
$ss = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"ss-sec ss-intro","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec ss-intro"><!-- wp:group {"className":"ss-head","layout":{"type":"default"}} -->
<div class="wp-block-group ss-head"><!-- wp:paragraph {"className":"ss-ghost","align":"center"} -->
<p class="ss-ghost has-text-align-center" aria-hidden="true"><?php echo wp_kses_post( seisui_environmental_t( 'k209cb9d0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-h2","align":"center"} -->
<h2 class="wp-block-heading has-text-align-center ss-h2"><?php echo wp_kses_post( seisui_environmental_t( 'k24678a66' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-intro__row","align":"wide","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignwide ss-intro__row"><!-- wp:columns {"className":"ss-intro__cols"} -->
<div class="wp-block-columns ss-intro__cols"><!-- wp:column {"width":"58.333%"} -->
<div class="wp-block-column " style="flex-basis:58.333%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ss-photo ss-photo--r10 sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full ss-photo ss-photo--r10 sp-reveal sp-reveal--up"><img src="<?php echo esc_url( $ss . 'p04.webp' ); ?>" alt="<?php echo esc_attr( seisui_environmental_t( 'a07337ead' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"41.667%"} -->
<div class="wp-block-column " style="flex-basis:41.667%"><!-- wp:paragraph {"className":"ss-body"} -->
<p class="ss-body"><?php echo wp_kses_post( seisui_environmental_t( 'kcf43ffee' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-body"} -->
<p class="ss-body"><?php echo wp_kses_post( seisui_environmental_t( 'ke510b5e5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-body"} -->
<p class="ss-body"><?php echo wp_kses_post( seisui_environmental_t( 'k5388eb27' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {} -->
<div class="wp-block-buttons "><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo wp_kses_post( seisui_environmental_t( 'k8a36e1d0' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
