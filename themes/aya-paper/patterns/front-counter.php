<?php
/**
 * Title: Home: the counter
 * Slug: aya-paper/front-counter
 * Categories: aya-paper
 * Keywords: stationery, shop, paper
 * Viewport Width: 1440
 * Description: A full-bleed photograph of the counter with a slow parallax, a chip and one line below.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ap-counter-sec", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ap-counter-sec">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/c1.webp' ) ); ?>","dimRatio":0,"minHeight":640,"minHeightUnit":"px","isDark":false,"align":"full","className":"ap-counter sp-parallax ap-par-10"} -->
<div class="wp-block-cover alignfull is-light ap-counter sp-parallax ap-par-10" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( "Top view of the long counter with paper sheets, rolls of tape and string on a grey mat." ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/c1.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className": "ap-counter__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-counter__cap">
<!-- wp:paragraph {"className":"ap-chip"} -->
<p class="ap-chip"><?php echo wp_kses_post( aya_paper_t( 'k44ada53f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-counter__line"} -->
<p class="ap-counter__line"><?php echo wp_kses_post( aya_paper_t( 'kf4260880' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->