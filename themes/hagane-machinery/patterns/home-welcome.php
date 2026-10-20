<?php
/**
 * Title: Home: a letter from the president
 * Slug: hagane-machinery/home-welcome
 * Categories: hagane-machinery
 * Keywords: about, story, welcome
 * Viewport Width: 1440
 * Description: Two narrative paragraphs from the president beside a photograph of the design office.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section"><!-- wp:group {"align":"wide","className":"hm-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-split__photo hm-split__photo--tall"} -->
<figure class="wp-block-image size-large hm-split__photo hm-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/design-office.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'home_welcome_01' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( hagane_machinery_t( 'home_welcome_02' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hm-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'home_welcome_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hm-split__title"} -->
<h2 class="wp-block-heading hm-split__title"><?php echo wp_kses_post( hagane_machinery_t( 'home_welcome_04' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'home_welcome_05' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'home_welcome_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-sign"} -->
<p class="hm-sign"><?php echo wp_kses_post( hagane_machinery_t( 'home_welcome_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
