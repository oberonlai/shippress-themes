<?php
/**
 * Title: Home: what children learn
 * Slug: aozora-primary-school/front-learning
 * Categories: aozora-primary-school
 * Keywords: home, school, primary
 * Viewport Width: 1440
 * Description: A chalk-stone band with soft wave edges: the curriculum in a paragraph and six ruled subjects beside two photographs in rounded frames.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-learn","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-learn"><!-- wp:group {"className":"ap-learn__in","layout":{"type":"default"}} -->
<div class="wp-block-group ap-learn__in"><!-- wp:group {"className":"ap-learn__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ap-learn__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'front_l_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ap-learn__title"} -->
<h2 class="wp-block-heading ap-learn__title"><?php echo wp_kses_post( aozora_primary_school_t( 'front_l_02' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aozora_primary_school_t( 'front_l_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"ap-subjects"} -->
<ul class="wp-block-list ap-subjects"><!-- wp:list-item -->
<li><?php echo wp_kses_post( aozora_primary_school_t( 'front_l_s1' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( aozora_primary_school_t( 'front_l_s2' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( aozora_primary_school_t( 'front_l_s3' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( aozora_primary_school_t( 'front_l_s4' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( aozora_primary_school_t( 'front_l_s5' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( aozora_primary_school_t( 'front_l_s6' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/curriculum/"><?php echo wp_kses_post( aozora_primary_school_t( 'front_l_04' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-learn__media","layout":{"type":"default"}} -->
<div class="wp-block-group ap-learn__media"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-learn__a"} -->
<figure class="wp-block-image size-large ap-learn__a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/day-art.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_l_alt1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-learn__b"} -->
<figure class="wp-block-image size-large ap-learn__b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/science.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_l_alt2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
