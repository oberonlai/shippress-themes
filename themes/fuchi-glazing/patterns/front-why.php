<?php
/**
 * Title: Home: why we measure twice
 * Slug: fuchi-glazing/front-why
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Asymmetric twelve-column layout: three narrative paragraphs on the left, a 3:2 photograph and a smaller square offset beneath it on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec fg-sec--why","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec fg-sec--why">
<!-- wp:group {"className":"fg-wrap fg-why","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap fg-why">
<!-- wp:group {"className":"fg-why__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fg-why__text sp-reveal sp-reveal--up">
<!-- wp:heading {"className":"fg-h2 fg-h2--left"} -->
<h2 class="wp-block-heading fg-h2 fg-h2--left"><?php echo esc_html( fuchi_glazing_t( 'wy_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'wy_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'wy_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'wy_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-why__pics sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fg-why__pics sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"3/2","scale":"cover","className":"fg-why__big"} -->
<figure class="wp-block-image size-full fg-why__big"><img src="<?php echo fuchi_glazing_img( 'check-measure.webp' ); ?>" alt="<?php echo fuchi_glazing_a( 'alt_p12' ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"1/1","scale":"cover","className":"fg-why__small"} -->
<figure class="wp-block-image size-full fg-why__small"><img src="<?php echo fuchi_glazing_img( 'glass-rack.webp' ); ?>" alt="<?php echo fuchi_glazing_a( 'alt_p13' ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
