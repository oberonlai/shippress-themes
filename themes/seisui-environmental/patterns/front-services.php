<?php
/**
 * Title: Home: SERVICES, a parallax landscape band behind six white cards
 * Slug: seisui-environmental/front-services
 * Categories: seisui-environmental
 * Keywords: home
 * Viewport Width: 1440
 * Description: A full-width river floodplain photograph with a slow parallax, six white radius-10 service cards in a 3 by 2 grid with a 10 px gap, and a sample-bottle photograph crossing the band's lower edge.
 */
$ss = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"anchor":"services","className":"ss-services","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section id="services" class="wp-block-group alignfull ss-services"><!-- wp:cover {"url":"<?php echo esc_url( $ss . 'p02.webp' ); ?>","alt":"Wide floodplain with a meandering river, meadows, hedgerows and morning mist","dimRatio":0,"minHeight":830,"minHeightUnit":"px","isDark":false,"align":"full","className":"ss-band sp-parallax","style":{"spacing":{"padding":{"top":"100px","bottom":"190px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light ss-band sp-parallax" style="padding-top:100px;padding-bottom:190px;min-height:830px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( seisui_environmental_t( 'a9dca0568' ) ); ?>" src="<?php echo esc_url( $ss . 'p02.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ss-head ss-head--on-photo","layout":{"type":"default"}} -->
<div class="wp-block-group ss-head ss-head--on-photo"><!-- wp:paragraph {"className":"ss-ghost","align":"center"} -->
<p class="ss-ghost has-text-align-center" aria-hidden="true"><?php echo wp_kses_post( seisui_environmental_t( 'k95af047a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-h2","align":"center"} -->
<h2 class="wp-block-heading has-text-align-center ss-h2"><?php echo wp_kses_post( seisui_environmental_t( 'ka31da2e7' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-cards sp-stagger","align":"wide","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignwide ss-cards sp-stagger"><!-- wp:group {"className":"ss-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"ss-icon ss-icon--walk","layout":{"type":"default"}} -->
<div class="wp-block-group ss-icon ss-icon--walk"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-card__name"} -->
<p class="ss-card__name"><a href="/services/"><?php echo wp_kses_post( seisui_environmental_t( 'k466a88b4' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__line"} -->
<p class="ss-card__line"><?php echo wp_kses_post( seisui_environmental_t( 'k587c6b0d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__foot"} -->
<p class="ss-card__foot"><span class="ss-card__price"><?php echo wp_kses_post( seisui_environmental_t( 'kb55854d8' ) ); ?></span><span class="ss-arrow" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"ss-icon ss-icon--doc","layout":{"type":"default"}} -->
<div class="wp-block-group ss-icon ss-icon--doc"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-card__name"} -->
<p class="ss-card__name"><a href="/water-soil-assessment/"><?php echo wp_kses_post( seisui_environmental_t( 'k38ddd12a' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__line"} -->
<p class="ss-card__line"><?php echo wp_kses_post( seisui_environmental_t( 'kdb10da86' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__foot"} -->
<p class="ss-card__foot"><span class="ss-card__price"><?php echo wp_kses_post( seisui_environmental_t( 'k45298a83' ) ); ?></span><span class="ss-arrow" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"ss-icon ss-icon--water","layout":{"type":"default"}} -->
<div class="wp-block-group ss-icon ss-icon--water"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-card__name"} -->
<p class="ss-card__name"><a href="/water-soil-assessment/"><?php echo wp_kses_post( seisui_environmental_t( 'k06616d45' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__line"} -->
<p class="ss-card__line"><?php echo wp_kses_post( seisui_environmental_t( 'k334f561d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__foot"} -->
<p class="ss-card__foot"><span class="ss-card__price"><?php echo wp_kses_post( seisui_environmental_t( 'kba931b65' ) ); ?></span><span class="ss-arrow" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"ss-icon ss-icon--leaf","layout":{"type":"default"}} -->
<div class="wp-block-group ss-icon ss-icon--leaf"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-card__name"} -->
<p class="ss-card__name"><a href="/habitat-biodiversity/"><?php echo wp_kses_post( seisui_environmental_t( 'k0fe3ffcc' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__line"} -->
<p class="ss-card__line"><?php echo wp_kses_post( seisui_environmental_t( 'k76cdf567' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__foot"} -->
<p class="ss-card__foot"><span class="ss-card__price"><?php echo wp_kses_post( seisui_environmental_t( 'ka6d7bfe1' ) ); ?></span><span class="ss-arrow" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"ss-icon ss-icon--soil","layout":{"type":"default"}} -->
<div class="wp-block-group ss-icon ss-icon--soil"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-card__name"} -->
<p class="ss-card__name"><a href="/water-soil-assessment/"><?php echo wp_kses_post( seisui_environmental_t( 'k1fadca60' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__line"} -->
<p class="ss-card__line"><?php echo wp_kses_post( seisui_environmental_t( 'kab52a621' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__foot"} -->
<p class="ss-card__foot"><span class="ss-card__price"><?php echo wp_kses_post( seisui_environmental_t( 'k9b42f394' ) ); ?></span><span class="ss-arrow" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"ss-icon ss-icon--cycle","layout":{"type":"default"}} -->
<div class="wp-block-group ss-icon ss-icon--cycle"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-card__name"} -->
<p class="ss-card__name"><a href="/monitoring-programmes/"><?php echo wp_kses_post( seisui_environmental_t( 'k8cf1ff36' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__line"} -->
<p class="ss-card__line"><?php echo wp_kses_post( seisui_environmental_t( 'k2d42a69d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__foot"} -->
<p class="ss-card__foot"><span class="ss-card__price"><?php echo wp_kses_post( seisui_environmental_t( 'kf47de1ff' ) ); ?></span><span class="ss-arrow" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"ss-fore","align":"wide","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignwide ss-fore"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ss-photo ss-photo--r10 ss-fore__photo sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full ss-photo ss-photo--r10 ss-fore__photo sp-reveal sp-reveal--up"><img src="<?php echo esc_url( $ss . 'p03.webp' ); ?>" alt="<?php echo esc_attr( seisui_environmental_t( 'a6af35f1c' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
