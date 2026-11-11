<?php
/**
 * Title: Home: recent hires
 * Slug: kashidashi-hire/front-stories
 * Categories: kashidashi-hire
 * Description: Three ruled story rows with 3:2 thumbnails.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"stories","align":"full","className":"kh-sec kh-stories","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull kh-sec kh-stories"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kashidashi_hire_t( 'st_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-stories__title"} -->
<h2 class="wp-block-heading kh-stories__title"><?php echo esc_html( kashidashi_hire_t( 'st_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kh-stories__list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kh-stories__list sp-stagger"><!-- wp:group {"className":"kh-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p16-workshop-fitter' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p16' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kh-story__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-story__text"><!-- wp:paragraph {"className":"kh-tag"} -->
<p class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'st_g1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-story__t"} -->
<h3 class="wp-block-heading kh-story__t"><a href="/stories/"><?php echo esc_html( kashidashi_hire_t( 'st_t1' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-story__d"} -->
<p class="kh-story__d"><?php echo esc_html( kashidashi_hire_t( 'st_d1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p17-tailgate-sheet' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p17' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kh-story__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-story__text"><!-- wp:paragraph {"className":"kh-tag"} -->
<p class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'st_g2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-story__t"} -->
<h3 class="wp-block-heading kh-story__t"><a href="/stories/"><?php echo esc_html( kashidashi_hire_t( 'st_t2' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-story__d"} -->
<p class="kh-story__d"><?php echo esc_html( kashidashi_hire_t( 'st_d2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p18-cleared-plot' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p18' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kh-story__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-story__text"><!-- wp:paragraph {"className":"kh-tag"} -->
<p class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'st_g3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-story__t"} -->
<h3 class="wp-block-heading kh-story__t"><a href="/stories/"><?php echo esc_html( kashidashi_hire_t( 'st_t3' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-story__d"} -->
<p class="kh-story__d"><?php echo esc_html( kashidashi_hire_t( 'st_d3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kh-more"} -->
<p class="kh-more"><a href="/stories/"><?php echo esc_html( kashidashi_hire_t( 'st_link' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
