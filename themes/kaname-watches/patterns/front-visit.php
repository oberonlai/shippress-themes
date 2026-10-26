<?php
/**
 * Title: Home: visit
 * Slug: kaname-watches/front-visit
 * Categories: kaname-watches
 * Keywords: watch, visit, appointment
 * Viewport Width: 1440
 * Description: Split panel: the counter photograph with a label top left, and a cream panel with the four visit steps, hours, address and a booking button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kw-visit-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kw-visit-sec"><!-- wp:group {"align":"wide","className":"kw-visit sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kw-visit sp-reveal"><!-- wp:group {"className":"kw-visit__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kw-visit__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kaname_watches_img( 'k13-the-counter.webp' ); ?>" alt="<?php echo esc_attr( kaname_watches_t( 'aeb048fb3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kw-visit__label","layout":{"type":"default"}} -->
<div class="wp-block-group kw-visit__label"><!-- wp:heading {"level":2,"className":"kw-visit__title"} -->
<h2 class="wp-block-heading kw-visit__title"><?php echo wp_kses_post( kaname_watches_t( 'ke5b24420' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kw-visit__line"} -->
<p class="kw-visit__line"><?php echo wp_kses_post( kaname_watches_t( 'kf76497c0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-visit__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kw-visit__panel"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaname_watches_t( 'kc4e8b0ab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kw-steps","layout":{"type":"default"}} -->
<div class="wp-block-group kw-steps"><!-- wp:paragraph {"className":"kw-step"} -->
<p class="kw-step"><span class="kw-step__n">1</span> <?php echo wp_kses_post( kaname_watches_t( 'k4334bcc3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-step"} -->
<p class="kw-step"><span class="kw-step__n">2</span> <?php echo wp_kses_post( kaname_watches_t( 'kb978c85f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-step"} -->
<p class="kw-step"><span class="kw-step__n">3</span> <?php echo wp_kses_post( kaname_watches_t( 'k37c033fd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-step"} -->
<p class="kw-step"><span class="kw-step__n">4</span> <?php echo wp_kses_post( kaname_watches_t( 'ka65f4670' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kw-visit__facts"} -->
<p class="kw-visit__facts"><strong><?php echo wp_kses_post( kaname_watches_t( 'kad179a10' ) ); ?></strong> <?php echo wp_kses_post( kaname_watches_t( 'k716d8cdd' ) ); ?><br><strong><?php echo wp_kses_post( kaname_watches_t( 'k2bf1d5fa' ) ); ?></strong> <?php echo wp_kses_post( kaname_watches_t( 'k85278bb0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo wp_kses_post( kaname_watches_t( 'kcf6e2fa1' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
