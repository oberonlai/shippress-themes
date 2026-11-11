<?php
/**
 * Title: Home: showroom (parallax)
 * Slug: tana-furniture/front-showroom
 * Categories: tana-furniture
 * Keywords: furniture, showroom, parallax
 * Viewport Width: 1440
 * Description: Full-bleed parallax showroom photograph with a white card at the lower left.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-showroom sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tf-showroom sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-showroom__img"} -->
<figure class="wp-block-image size-full tf-showroom__img"><img src="<?php echo tana_furniture_img( 'p13-showroom' ); ?>" alt="<?php tana_furniture_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"tf-showroom__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tf-showroom__in"><!-- wp:group {"className":"tf-showroom__card is-style-white-card","layout":{"type":"default"}} -->
<div class="wp-block-group tf-showroom__card is-style-white-card"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'sr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tf-h3-lg"} -->
<h2 class="wp-block-heading tf-h3-lg"><?php echo tana_furniture_lines( 'sr_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tf-more"} -->
<p class="tf-more"><a href="/visit/"><?php echo esc_html( tana_furniture_t( 'sr_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
