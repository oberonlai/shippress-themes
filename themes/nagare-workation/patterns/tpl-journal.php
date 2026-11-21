<?php
/**
 * Title: Template: journal
 * Slug: nagare-workation/tpl-journal
 * Categories: nagare-workation
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts page: lake band with a seam portrait, the journal heading and a three-column list of posts.
 */
?>
<!-- wp:group {"tagName":"main","className":"nw-main","layout":{"type":"default"}} -->
<main class="wp-block-group nw-main"><!-- wp:group {"tagName":"section","align":"full","className":"nw-seam nw-seam--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-seam nw-seam--inner"><!-- wp:group {"className":"nw-seam__band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group nw-seam__band sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p09-lake-panorama.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-word nw-word--1 sp-reveal sp-reveal--left"} -->
<p class="nw-word nw-word--1 sp-reveal sp-reveal--left"><?php echo esc_html( nagare_workation_t( 'jr_w1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-word nw-word--2 sp-reveal sp-reveal--left"} -->
<p class="nw-word nw-word--2 sp-reveal sp-reveal--left"><?php echo esc_html( nagare_workation_t( 'jr_w2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-word nw-word--3 sp-reveal sp-reveal--right"} -->
<p class="nw-word nw-word--3 sp-reveal sp-reveal--right"><?php echo esc_html( nagare_workation_t( 'jr_w3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-word nw-word--4 sp-reveal sp-reveal--right"} -->
<p class="nw-word nw-word--4 sp-reveal sp-reveal--right"><?php echo esc_html( nagare_workation_t( 'jr_w4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-seam__portrait","layout":{"type":"default"}} -->
<div class="wp-block-group nw-seam__portrait"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p16-window-studio.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-seam__text nw-seam__text--sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-seam__text nw-seam__text--sect"><!-- wp:heading {"level":1,"className":"nw-pagehead__h nw-jr__h1"} -->
<h1 class="wp-block-heading nw-pagehead__h nw-jr__h1"><?php echo esc_html( nagare_workation_t( 'jr_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-lede"} -->
<p class="nw-lede"><?php echo esc_html( nagare_workation_t( 'jr_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"nw-jr"} -->
<div class="wp-block-query nw-jr"><!-- wp:post-template {"className":"nw-jr__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"nw-jr__img"} /-->
<!-- wp:post-date {"format":"M Y","className":"nw-jr__d"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"nw-jr__t"} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
