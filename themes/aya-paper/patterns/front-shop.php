<?php
/**
 * Title: Home: the shop
 * Slug: aya-paper/front-shop
 * Categories: aya-paper
 * Keywords: stationery, shop, paper
 * Viewport Width: 1440
 * Description: About the shop: heading, one photograph, a lead and a paragraph.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ap-sec ap-shop", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ap-sec ap-shop">
<!-- wp:heading {"className": "ap-head"} -->
<h2 class="wp-block-heading ap-head"><?php echo wp_kses_post( aya_paper_t( 'k33080c3d' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className": "ap-shop__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-shop__grid">
<!-- wp:group {"className": "ap-shop__photo", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-shop__photo">
<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/a1.webp' ) ); ?>" alt="<?php echo esc_attr( "Hands laying a deckled cotton sheet on the counter in front of shallow paper drawers." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className": "ap-shop__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-shop__text">
<!-- wp:paragraph {"className":"ap-lead"} -->
<p class="ap-lead"><?php echo wp_kses_post( aya_paper_t( 'k97fa8fdf' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aya_paper_t( 'ke86472db' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-dotlink"} -->
<p class="ap-dotlink"><a href="/about/"><?php echo wp_kses_post( aya_paper_t( 'k31ff6a6e' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->