<?php
/**
 * Title: Home: the planning hour
 * Slug: waku-exhibits/front-hour
 * Categories: waku-exhibits
 * Keywords: exhibition, stand, quote, landing
 * Viewport Width: 1440
 * Description: Tinted band with the 60-minute split as four ruled, counted lines and one wide photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"planning-hour","className":"wk-sec wk-hour","layout":{"type":"constrained"}} -->
<section id="planning-hour" class="wp-block-group alignfull wk-sec wk-hour"><!-- wp:group {"className":"wk-hour__cols","layout":{"type":"default"}} -->
<div class="wp-block-group wk-hour__cols"><!-- wp:group {"className":"wk-hour__intro sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-hour__intro sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"wk-label"} -->
<p class="wk-label"><?php echo esc_html( wk_t( 'hour_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"wk-h2"} -->
<h2 class="wp-block-heading wk-h2"><?php echo esc_html( wk_t( 'hour_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-hour__p"} -->
<p class="wk-hour__p"><?php echo esc_html( wk_t( 'hour_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-cta"} -->
<p class="wk-cta"><span class="wk-cta__dot" aria-hidden="true">•</span> <a href="/contact/#request"><?php echo esc_html( wk_t( 'hour_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-hour__lines","layout":{"type":"default"}} -->
<div class="wp-block-group wk-hour__lines"><!-- wp:group {"className":"wk-min sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-min sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"wk-min__n sp-count"} -->
<p class="wk-min__n sp-count">15<span class="wk-min__u"> <?php echo esc_html( wk_t( 'min_u' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-min__l"} -->
<p class="wk-min__l"><?php echo esc_html( wk_t( 'min_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-min sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-min sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"wk-min__n sp-count"} -->
<p class="wk-min__n sp-count">20<span class="wk-min__u"> <?php echo esc_html( wk_t( 'min_u' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-min__l"} -->
<p class="wk-min__l"><?php echo esc_html( wk_t( 'min_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-min sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-min sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"wk-min__n sp-count"} -->
<p class="wk-min__n sp-count">15<span class="wk-min__u"> <?php echo esc_html( wk_t( 'min_u' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-min__l"} -->
<p class="wk-min__l"><?php echo esc_html( wk_t( 'min_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-min sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-min sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"wk-min__n sp-count"} -->
<p class="wk-min__n sp-count">10<span class="wk-min__u"> <?php echo esc_html( wk_t( 'min_u' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-min__l"} -->
<p class="wk-min__l"><?php echo esc_html( wk_t( 'min_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"wk-hour__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full wk-hour__photo sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p07-measure.webp' ) ); ?>" alt="<?php echo esc_attr( wk_t( 'alt_p07' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
