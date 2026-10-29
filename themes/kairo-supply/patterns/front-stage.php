<?php
/**
 * Title: Home: dark stage
 * Slug: kairo-supply/front-stage
 * Categories: kairo-supply
 * Keywords: electrical, wholesaler, trade counter
 * Viewport Width: 1440
 * Description: Full-screen dark stage: blurred photo, big sentence-case list, sharp blob inset, outlined pill.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/k03.webp' ) ); ?>","dimRatio":50,"minHeight":760,"minHeightUnit":"px","isDark":true,"align":"full","className":"ks-stage sp-parallax","anchor":"stage","layout":{"type":"default"}} -->
<div id="stage" class="wp-block-cover alignfull ks-stage sp-parallax" style="min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k03.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"ks-stage__lede"} -->
<p class="ks-stage__lede">A dedicated electrical trade counter built around the practical schedules of busy commercial and domestic contractors.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-label ks-stage__label"} -->
<p class="ks-label ks-stage__label">What the counter does</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-stage__list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage__list sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up">Cable cut to the metre</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up">Fittings picked by job</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up">Collection from 06:30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up">Van drops by noon</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__inset"} -->
<figure class="wp-block-image size-full ks-stage__inset"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k04.webp' ) ); ?>" alt="Gloved hands pulling grey cable from a drum through a wall mounted metre counter."/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-stage__cta","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage__cta"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-ks-pill-light"} -->
<div class="wp-block-button is-style-ks-pill-light"><a class="wp-block-button__link wp-element-button" href="/counter/">How the counter works</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
