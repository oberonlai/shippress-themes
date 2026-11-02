<?php
/**
 * Title: Home: invitation
 * Slug: aya-paper/front-close
 * Categories: aya-paper
 * Keywords: stationery, shop, paper
 * Viewport Width: 1440
 * Description: A hairline frame with rings only and an invitation low right.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ap-sec ap-close", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ap-sec ap-close"><!-- wp:group {"className": "ap-frame ap-close__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-frame ap-close__frame">
<!-- wp:html -->
<img class="ap-contour ap-contour--close" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rings.svg' ) ); ?>" alt="" aria-hidden="true" width="1360" height="420"/>
<!-- /wp:html -->

<!-- wp:group {"className": "ap-close__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-close__text">
<!-- wp:heading {"className": "ap-close__h"} -->
<h2 class="wp-block-heading ap-close__h"><?php echo wp_kses_post( aya_paper_t( 'k0639a4dd' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-close__p"} -->
<p class="ap-close__p"><?php echo wp_kses_post( aya_paper_t( 'kb8f5e568' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-dotlink"} -->
<p class="ap-dotlink"><a href="/contact/"><?php echo wp_kses_post( aya_paper_t( 'k5e706a9b' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->