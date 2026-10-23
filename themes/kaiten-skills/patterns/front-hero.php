<?php
/**
 * Title: Home: hand-cut hero frame
 * Slug: kaiten-skills/front-hero
 * Categories: kaiten-skills
 * Viewport Width: 1440
 * Description: Inset hand-cut photo frame with a blob plate in the header, the headline bottom-left and a leaf-shaped Browse courses button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ks-hero"><!-- wp:group {"className":"ks-cut ks-cut--hero","layout":{"type":"default"}} -->
<div class="wp-block-group ks-cut ks-cut--hero"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-hero.webp' ) ); ?>","alt":"Woman at a wooden kitchen table with a laptop and notebook","dimRatio":0,"className":"ks-hero__cover sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover ks-hero__cover sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Woman at a wooden kitchen table with a laptop and notebook" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-hero.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:heading {"level":1,"className":"ks-h1"} -->
<h1 class="wp-block-heading ks-h1">Work skills you use<br>every single day.</h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-hero__sub"} -->
<p class="ks-hero__sub">Short video courses in writing, presenting and spreadsheets.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-leaf"} -->
<p class="ks-leaf"><a href="/courses/">Browse courses</a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
