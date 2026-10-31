<?php
/**
 * Title: Home: one story
 * Slug: mimamori-college/front-story
 * Categories: mimamori-college
 * Keywords: college, care, training
 * Viewport Width: 1440
 * Description: Photo on the left, a serif italic quote with attribution, one paragraph and two linked rows on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"story","className":"mc-story","layout":{"type":"constrained"}} -->
<section id="story" class="wp-block-group alignfull mc-story"><!-- wp:group {"className":"mc-story__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mc-story__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-story__img"} -->
<figure class="wp-block-image size-full mc-story__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s1.webp' ) ); ?>" alt="<?php echo esc_attr( mimamori_college_t( 'a3463bd20' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mc-story__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mc-story__col sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"mc-h2"} -->
<h2 class="wp-block-heading mc-h2"><?php echo wp_kses_post( mimamori_college_t( 'ke0c45e31' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mc-quote"} -->
<p class="mc-quote"><?php echo wp_kses_post( mimamori_college_t( 'ka224d19e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-attrib"} -->
<p class="mc-attrib"><?php echo wp_kses_post( mimamori_college_t( 'k39453172' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( mimamori_college_t( 'kd0911503' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-linkrow"} -->
<p class="mc-linkrow"><a href="/student-stories/"><?php echo wp_kses_post( mimamori_college_t( 'k9621528d' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-linkrow"} -->
<p class="mc-linkrow"><a href="/student-stories/"><?php echo wp_kses_post( mimamori_college_t( 'k24c45a9c' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
