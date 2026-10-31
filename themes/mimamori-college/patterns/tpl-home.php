<?php
/**
 * Title: Template: home
 * Slug: mimamori-college/tpl-home
 * Categories: mimamori-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mc-ph mc-ph--news","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mc-ph mc-ph--news"><!-- wp:group {"className":"mc-ph__frame","layout":{"type":"default"}} -->
<div class="wp-block-group mc-ph__frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-ph__img"} -->
<figure class="wp-block-image size-full mc-ph__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k2.webp' ) ); ?>" alt="<?php echo esc_attr( mimamori_college_t( 'acfba6fdf' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-ph__copy","layout":{"type":"default"}} -->
<div class="wp-block-group mc-ph__copy"><!-- wp:heading {"level":1,"className":"mc-ph__title"} -->
<h1 class="wp-block-heading mc-ph__title"><?php echo wp_kses_post( mimamori_college_t( 'kdd1ba187' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-pstrip","layout":{"type":"default"}} -->
<div class="wp-block-group mc-pstrip"><!-- wp:group {"className":"mc-ptile","layout":{"type":"default"}} -->
<div class="wp-block-group mc-ptile"><!-- wp:paragraph {"className":"mc-ptile__t"} -->
<p class="mc-ptile__t"><a href="/category/course/"><?php echo wp_kses_post( mimamori_college_t( 'k389433c9' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-ptile","layout":{"type":"default"}} -->
<div class="wp-block-group mc-ptile"><!-- wp:paragraph {"className":"mc-ptile__t"} -->
<p class="mc-ptile__t"><a href="/category/open-day/"><?php echo wp_kses_post( mimamori_college_t( 'k1464cd57' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-ptile","layout":{"type":"default"}} -->
<div class="wp-block-group mc-ptile"><!-- wp:paragraph {"className":"mc-ptile__t"} -->
<p class="mc-ptile__t"><a href="/category/college/"><?php echo wp_kses_post( mimamori_college_t( 'k2806259c' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-ptile","layout":{"type":"default"}} -->
<div class="wp-block-group mc-ptile"><!-- wp:paragraph {"className":"mc-ptile__t"} -->
<p class="mc-ptile__t"><a href="/apply/"><?php echo wp_kses_post( mimamori_college_t( 'kfff3e55e' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","className":"mc-main mc-inner mc-posts","layout":{"type":"constrained"}} -->
<main class="wp-block-group mc-main mc-inner mc-posts"><!-- wp:query {"query":{"perPage":10,"postType":"post","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"mc-post__meta","layout":{"type":"default"}} -->
<div class="wp-block-group mc-post__meta"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"level":2,"className":"mc-h2"} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( mimamori_college_t( 'k4c0f1373' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->