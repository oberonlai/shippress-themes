<?php
/**
 * Title: Home: visit
 * Slug: saji-culinary/front-visit
 * Categories: saji-culinary
 * Keywords: culinary school, cooking, chef
 * Viewport Width: 1440
 * Description: Ink band with the school building photograph, the address, hours and two pills.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"saji-sec saji-visit","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull saji-sec saji-visit"><!-- wp:group {"align":"wide","className":"saji-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide saji-visit__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"saji-visit__photo"} -->
<figure class="wp-block-image size-full saji-visit__photo"><img src="<?php echo saji_culinary_img( 'v1-school.webp' ); ?>" alt="<?php echo esc_attr( saji_culinary_t( 'alt_v1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"saji-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group saji-visit__text"><!-- wp:paragraph {"className":"saji-label saji-label--light"} -->
<p class="saji-label saji-label--light"><?php echo esc_html( saji_culinary_t( 'vs_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"saji-visit__title"} -->
<h2 class="wp-block-heading saji-visit__title"><?php echo esc_html( saji_culinary_t( 'vs_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"saji-visit__lead"} -->
<p class="saji-visit__lead"><?php echo esc_html( saji_culinary_t( 'vs_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-visit__line"} -->
<p class="saji-visit__line"><?php echo esc_html( saji_culinary_t( 'vs_address' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-visit__line"} -->
<p class="saji-visit__line"><?php echo esc_html( saji_culinary_t( 'vs_office' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-visit__line"} -->
<p class="saji-visit__line"><?php echo esc_html( saji_culinary_t( 'vs_open' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"saji-visit__btns"} -->
<div class="wp-block-buttons saji-visit__btns"><!-- wp:button {"className":"is-style-pill-light"} -->
<div class="wp-block-button is-style-pill-light"><a class="wp-block-button__link wp-element-button" href="/admissions/"><?php echo esc_html( saji_culinary_t( 'vs_apply' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-pill saji-btn--on-ink"} -->
<div class="wp-block-button is-style-outline-pill saji-btn--on-ink"><a class="wp-block-button__link wp-element-button" href="/admissions/#trial"><?php echo esc_html( saji_culinary_t( 'vs_trial' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
