<?php
/**
 * Title: Home: hairline frame
 * Slug: aya-paper/front-hero
 * Categories: aya-paper
 * Keywords: stationery, shop, paper
 * Viewport Width: 1440
 * Description: A one-pixel frame split into three equal photograph columns, with contour rings and a torn-edge line crossing the rules.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ap-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ap-hero">
<!-- wp:group {"className": "ap-frame ap-hero__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-frame ap-hero__frame">
<!-- wp:group {"className": "ap-cells", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-cells">
<!-- wp:group {"className": "ap-cell sp-parallax ap-par-6", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-cell sp-parallax ap-par-6">
<!-- wp:image {"sizeSlug": "full", "linkDestination": "none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1.webp' ) ); ?>" alt="<?php echo esc_attr( "Hands tearing a thick white cotton sheet along a steel rule." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className": "ap-cell sp-parallax ap-par-9", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-cell sp-parallax ap-par-9">
<!-- wp:image {"sizeSlug": "full", "linkDestination": "none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2.webp' ) ); ?>" alt="<?php echo esc_attr( "Raised hands holding two pale envelopes against a bright window." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className": "ap-cell sp-parallax ap-par-12", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-cell sp-parallax ap-par-12">
<!-- wp:image {"sizeSlug": "full", "linkDestination": "none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3.webp' ) ); ?>" alt="<?php echo esc_attr( "Stack of plain notebooks on a white shelf with spines facing out." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<img class="ap-contour" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-contour.svg' ) ); ?>" alt="" aria-hidden="true" width="1360" height="776"/>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className": "ap-plate", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-plate">
<!-- wp:heading {"level": 1, "className": "ap-wordmark"} -->
<h1 class="wp-block-heading ap-wordmark"><?php echo wp_kses_post( aya_paper_t( 'k4c58d986' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-tag"} -->
<p class="ap-tag"><?php echo wp_kses_post( aya_paper_t( 'k45a0d7bb' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->