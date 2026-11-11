<?php
/**
 * Title: Home: the yard
 * Slug: kashidashi-hire/front-yard
 * Categories: kashidashi-hire
 * Description: Five-seven split: three narrative paragraphs with counted figures, and a 4:5 photo with a mist wedge behind its left edge.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"yard","align":"full","className":"kh-sec kh-yard","layout":{"type":"default"}} -->
<section id="yard" class="wp-block-group alignfull kh-sec kh-yard"><!-- wp:group {"className":"kh-yard__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kh-yard__grid"><!-- wp:group {"className":"kh-yard__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-yard__text"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kashidashi_hire_t( 'yd_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-yard__title"} -->
<h2 class="wp-block-heading kh-yard__title"><?php echo esc_html( kashidashi_hire_t( 'yd_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'yd_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'yd_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'yd_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-figs","layout":{"type":"default"}} -->
<div class="wp-block-group kh-figs"><!-- wp:paragraph {"className":"kh-fig sp-reveal sp-count"} -->
<p class="kh-fig sp-reveal sp-count"><?php echo esc_html( kashidashi_hire_t( 'yd_f1' ) ); ?> <small><?php echo esc_html( kashidashi_hire_t( 'yd_f1l' ) ); ?></small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-fig sp-reveal sp-count"} -->
<p class="kh-fig sp-reveal sp-count"><?php echo esc_html( kashidashi_hire_t( 'yd_f2' ) ); ?> <small><?php echo esc_html( kashidashi_hire_t( 'yd_f2l' ) ); ?></small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-fig sp-reveal sp-count"} -->
<p class="kh-fig sp-reveal sp-count"><?php echo esc_html( kashidashi_hire_t( 'yd_f3' ) ); ?> <small><?php echo esc_html( kashidashi_hire_t( 'yd_f3l' ) ); ?></small></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kh-more"} -->
<p class="kh-more"><a href="/yard/"><?php echo esc_html( kashidashi_hire_t( 'yd_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-yard__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kh-yard__photo"><!-- wp:group {"className":"kh-wipe kh-wipe--yard sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wipe kh-wipe--yard sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"kh-wipe__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wipe__in"><!-- wp:group {"className":"kh-mist","layout":{"type":"default"}} -->
<div class="wp-block-group kh-mist"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p14-yard-office' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
