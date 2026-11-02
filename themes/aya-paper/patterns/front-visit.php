<?php
/**
 * Title: Home: visit
 * Slug: aya-paper/front-visit
 * Categories: aya-paper
 * Keywords: stationery, shop, paper
 * Viewport Width: 1440
 * Description: Address, a paragraph, two ruled opening-hour rows and a photograph of the door.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ap-sec ap-visit", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ap-sec ap-visit">
<!-- wp:group {"className": "ap-visit__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-visit__grid">
<!-- wp:group {"className": "ap-visit__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-visit__text">
<!-- wp:heading {"className": "ap-head"} -->
<h2 class="wp-block-heading ap-head"><?php echo wp_kses_post( aya_paper_t( 'ke5b24420' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aya_paper_t( 'k2ba97c36' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-address"} -->
<p class="ap-address"><?php echo wp_kses_post( aya_paper_t( 'k1fcadf39' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "ap-hours", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-hours">
<!-- wp:group {"className": "ap-hours__row", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-hours__row">
<!-- wp:paragraph {"className":"ap-hours__k"} -->
<p class="ap-hours__k"><?php echo wp_kses_post( aya_paper_t( 'k7459b391' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-hours__v"} -->
<p class="ap-hours__v">10:00–18:00</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className": "ap-hours__row", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-hours__row">
<!-- wp:paragraph {"className":"ap-hours__k"} -->
<p class="ap-hours__k"><?php echo wp_kses_post( aya_paper_t( 'kf9461452' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-hours__v"} -->
<p class="ap-hours__v">16:00–18:00</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className": "ap-visit__photo", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-visit__photo">
<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v1.webp' ) ); ?>" alt="<?php echo esc_attr( "From inside the shop, a customer entering through plain glazed doors." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->