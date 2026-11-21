<?php
/**
 * Title: Template: journal list
 * Slug: hozue-foodfest/tpl-archive
 * Categories: hozue-foodfest
 * Inserter: no
 * Viewport Width: 1440
 * Description: Heading and a list of posts as rounded cells.
 */
?>
<!-- wp:group {"tagName":"main","className":"hf-main","layout":{"type":"default"}} -->
<main class="wp-block-group hf-main"><!-- wp:group {"tagName":"section","align":"full","className":"hf-hero hf-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hf-hero hf-hero--page"><!-- wp:group {"className":"hf-window hf-window--page","layout":{"type":"default"}} -->
<div class="wp-block-group hf-window hf-window--page"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-slide hf-slide--1"} -->
<figure class="wp-block-image size-full hf-slide hf-slide--1"><img src="<?php echo hozue_foodfest_img( 'p1-market.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_p1' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hf-sec hf-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hf-sec hf-sec--ground"><!-- wp:group {"className":"hf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hf-wrap"><!-- wp:group {"className":"hf-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group hf-sechead"><!-- wp:paragraph {"className":"hf-caps"} -->
<p class="hf-caps"><?php echo esc_html( hozue_foodfest_t( 'ar_caps' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"hf-h2"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hf-p hf-narrow hf-p--center"} -->
<p class="hf-p hf-narrow hf-p--center"><?php echo esc_html( hozue_foodfest_t( 'ar_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"hf-jr"} -->
<div class="wp-block-query hf-jr"><!-- wp:post-template {"className":"hf-jr__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"hf-jcell","layout":{"type":"default"}} -->
<div class="wp-block-group hf-jcell"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hf-jcell__img"} /-->
<!-- wp:post-date {"format":"j F Y","className":"hf-stamp"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"hf-cell__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
