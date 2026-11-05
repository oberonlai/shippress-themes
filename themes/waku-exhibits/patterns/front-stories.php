<?php
/**
 * Title: Home: notes from the hall floor
 * Slug: waku-exhibits/front-stories
 * Categories: waku-exhibits
 * Keywords: exhibition, stand, quote, landing
 * Viewport Width: 1440
 * Description: Three stories as photo, label, title, excerpt and tags.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"stories","className":"wk-sec wk-stories","layout":{"type":"constrained"}} -->
<section id="stories" class="wp-block-group alignfull wk-sec wk-stories"><!-- wp:group {"className":"wk-stories__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-stories__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"wk-label"} -->
<p class="wk-label"><?php echo esc_html( wk_t( 'st_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"wk-h2"} -->
<h2 class="wp-block-heading wk-h2"><?php echo esc_html( wk_t( 'sto_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-stories__cols sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group wk-stories__cols sp-stagger"><!-- wp:group {"className":"wk-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-story__photo"} -->
<figure class="wp-block-image size-full wk-story__photo"><a href="/the-pillar-we-built-around/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10-column.webp' ) ); ?>" alt="<?php echo esc_attr( wk_t( 'alt_p10' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wk-cat"} -->
<p class="wk-cat"><?php echo esc_html( wk_t( 'story_1_cat' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wk-story__h"} -->
<h3 class="wp-block-heading wk-story__h"><a href="/the-pillar-we-built-around/"><?php echo esc_html( wk_t( 'story_1_h' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-story__p"} -->
<p class="wk-story__p"><?php echo esc_html( wk_t( 'story_1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-tags"} -->
<p class="wk-tags"><?php echo esc_html( wk_t( 'story_1_tags' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-story__photo"} -->
<figure class="wp-block-image size-full wk-story__photo"><a href="/three-shows-one-kit/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-touring.webp' ) ); ?>" alt="<?php echo esc_attr( wk_t( 'alt_p12' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wk-cat"} -->
<p class="wk-cat"><?php echo esc_html( wk_t( 'story_2_cat' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wk-story__h"} -->
<h3 class="wp-block-heading wk-story__h"><a href="/three-shows-one-kit/"><?php echo esc_html( wk_t( 'story_2_h' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-story__p"} -->
<p class="wk-story__p"><?php echo esc_html( wk_t( 'story_2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-tags"} -->
<p class="wk-tags"><?php echo esc_html( wk_t( 'story_2_tags' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-story__photo"} -->
<figure class="wp-block-image size-full wk-story__photo"><a href="/a-night-build-in-the-atrium/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13-night.webp' ) ); ?>" alt="<?php echo esc_attr( wk_t( 'alt_p13' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wk-cat"} -->
<p class="wk-cat"><?php echo esc_html( wk_t( 'story_3_cat' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wk-story__h"} -->
<h3 class="wp-block-heading wk-story__h"><a href="/a-night-build-in-the-atrium/"><?php echo esc_html( wk_t( 'story_3_h' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-story__p"} -->
<p class="wk-story__p"><?php echo esc_html( wk_t( 'story_3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-tags"} -->
<p class="wk-tags"><?php echo esc_html( wk_t( 'story_3_tags' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
