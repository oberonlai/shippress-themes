<?php
/**
 * Title: Home: what leaves with the student
 * Slug: komugi-school/front-leave
 * Categories: komugi-school
 * Inserter: yes
 * Viewport Width: 1440
 * Description: Text on the left, two aligned 4:3 photographs stacked on the right.
 */
?>
<!-- wp:group {"className":"ks-leave ks-sec","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group ks-leave ks-sec"><!-- wp:group {"className":"ks-leave__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-leave__grid"><!-- wp:group {"className":"ks-leave__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-leave__text"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( komugi_school_t( 'k90fa2ae3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( komugi_school_t( 'ka3346883' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( komugi_school_t( 'ka02f4bc0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( komugi_school_t( 'k2f897b46' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-leave__photos sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-leave__photos sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-leave__img","aspectRatio":"4/3","scale":"cover"} -->
<figure class="wp-block-image size-full ks-leave__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-rack.webp' ) ); ?>" alt="<?php echo esc_attr( komugi_school_t( 'ab7da6b51' ) ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-leave__img","aspectRatio":"4/3","scale":"cover"} -->
<figure class="wp-block-image size-full ks-leave__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09-knives.webp' ) ); ?>" alt="<?php echo esc_attr( komugi_school_t( 'a9635dcf6' ) ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
