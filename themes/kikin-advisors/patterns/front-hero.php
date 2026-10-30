<?php
/**
 * Title: Home: hero
 * Slug: kikin-advisors/front-hero
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: Line-art street with two ink label bars that wipe open, the whiteboard pair sliding in, on a white and pale grey ground.
 */
?>
<!-- wp:group {"align":"full","anchor":"top","className":"kk-hero sp-parallax","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group alignfull kk-hero sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1920,"height":864,"className":"kk-hero__scene"} -->
<figure class="wp-block-image size-full kk-hero__scene"><img src="<?php echo kikin_advisors_img( 'k01.webp' ); ?>" alt="<?php echo esc_attr( kikin_advisors_t( 'alt_k01' ) ); ?>" width="1920" height="864"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1036,"height":864,"className":"kk-hero__pair"} -->
<figure class="wp-block-image size-full kk-hero__pair"><img src="<?php echo kikin_advisors_img( 'k02.webp' ); ?>" alt="<?php echo esc_attr( kikin_advisors_t( 'alt_k02' ) ); ?>" width="1036" height="864"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"className":"kk-hero__title"} -->
<h1 class="wp-block-heading kk-hero__title"><span class="kk-bar"><?php echo esc_html( kikin_advisors_t( 'hero_1' ) ); ?></span><span class="kk-bar"><?php echo esc_html( kikin_advisors_t( 'hero_2' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kk-hero__sub"} -->
<p class="kk-hero__sub"><?php echo esc_html( kikin_advisors_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
