<?php
/**
 * Title: Home: tonal title strip with a straddling photograph
 * Slug: tsukuri-design/front-hero
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Flat pale mauve-grey strip holding the title at the left, with a studio photograph at the right that crosses the seam into the stage below.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-hero"><!-- wp:group {"className":"td-hero__txt","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__txt"><!-- wp:heading {"level":1,"className":"td-hero__h"} -->
<h1 class="wp-block-heading td-hero__h"><?php echo esc_html( tsukuri_design_t( 'h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-role"} -->
<p class="td-role"><?php echo esc_html( tsukuri_design_t( 'role' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-facts"} -->
<p class="td-facts"><?php echo esc_html( tsukuri_design_t( 'facts' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p01-foam-handset.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
