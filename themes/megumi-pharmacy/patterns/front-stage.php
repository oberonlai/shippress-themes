<?php
/**
 * Title: Home: photograph stage
 * Slug: megumi-pharmacy/front-stage
 * Categories: megumi-pharmacy
 * Keywords: pharmacy, hero, counter
 * Viewport Width: 1440
 * Description: One full-bleed photograph of the counter: three white lines, an info bar, then the introduction on the same photograph.
 */
$img = get_theme_file_uri( 'assets/images/p01-counter.webp' );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img ); ?>","dimRatio":0,"isDark":false,"align":"full","className":"mp-stage sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light mp-stage sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( megumi_pharmacy_t( 'afab3389a' ) ); ?>" src="<?php echo esc_url( $img ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"mp-stage__first","layout":{"type":"default"}} -->
<div class="wp-block-group mp-stage__first"><!-- wp:heading {"level":1,"className":"mp-hero"} -->
<h1 class="wp-block-heading mp-hero"><?php echo wp_kses_post( megumi_pharmacy_t( 'ke6ae62d4' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mp-sub"} -->
<p class="mp-sub"><?php echo wp_kses_post( megumi_pharmacy_t( 'k30b777d1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"mp-cue","layout":{"type":"default"}} -->
<div class="wp-block-group mp-cue"><!-- wp:paragraph {"className":"mp-cue__word"} -->
<p class="mp-cue__word"><?php echo wp_kses_post( megumi_pharmacy_t( 'k105078d2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="mp-cue__line" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-info","layout":{"type":"default"}} -->
<div class="wp-block-group mp-info"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( megumi_pharmacy_t( 'kc0c5c961' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( megumi_pharmacy_t( 'kbc5fe97a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( megumi_pharmacy_t( 'kc9c0e268' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-info__link"} -->
<p class="mp-info__link"><a href="/visit/"><?php echo wp_kses_post( megumi_pharmacy_t( 'kf8ac853c' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-stage__intro sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-stage__intro sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker"><?php echo wp_kses_post( megumi_pharmacy_t( 'k054dc595' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-intro"} -->
<p class="mp-intro"><?php echo wp_kses_post( megumi_pharmacy_t( 'kad787107' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-intro"} -->
<p class="mp-intro"><?php echo wp_kses_post( megumi_pharmacy_t( 'kf65f31f8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-intro"} -->
<p class="mp-intro"><?php echo wp_kses_post( megumi_pharmacy_t( 'ke652b99e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mp-btn mp-btn--light"} -->
<div class="wp-block-button mp-btn mp-btn--light"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo wp_kses_post( megumi_pharmacy_t( 'kb01955c2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
