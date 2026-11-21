<?php
/**
 * Title: Home: journal
 * Slug: nagare-workation/front-journal
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Label pair heading, a short intro and the three latest journal posts as 3:2 photographs with date and title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-journal"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-open sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'jr_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label"><?php echo esc_html( nagare_workation_t( 'jr_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-lede"} -->
<p class="nw-lede"><?php echo esc_html( nagare_workation_t( 'jr_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"nw-jr"} -->
<div class="wp-block-query nw-jr"><!-- wp:post-template {"className":"nw-jr__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"nw-jr__img"} /-->
<!-- wp:post-date {"format":"M Y","className":"nw-jr__d"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"nw-jr__t"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"nw-jr__more"} -->
<p class="nw-jr__more"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'jr_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
