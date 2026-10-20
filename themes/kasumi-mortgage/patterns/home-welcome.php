<?php
/**
 * Title: Home: a letter from the founder
 * Slug: kasumi-mortgage/home-welcome
 * Categories: kasumi-mortgage
 * Keywords: about, story, welcome
 * Viewport Width: 1440
 * Description: Two narrative paragraphs from the founder beside a photograph of the office front room.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-section"><!-- wp:group {"align":"wide","className":"km-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"km-split__photo km-split__photo--tall"} -->
<figure class="wp-block-image size-large km-split__photo km-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office-interior.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'home_welcome_01' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_welcome_02' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"km-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_welcome_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-split__title"} -->
<h2 class="wp-block-heading km-split__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_welcome_04' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'home_welcome_05' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'home_welcome_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-sign"} -->
<p class="km-sign"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_welcome_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
