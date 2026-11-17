<?php
/**
 * Title: Home: prices
 * Slug: kosame-hotpot/courses
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Description: A photograph, one short paragraph, the seven-row price table (price column never clipped) and a link box.
 */
?>
<!-- wp:group {"anchor":"courses","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="courses" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'vh_courses_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'vh_courses' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:group {"className":"ks-photo sp-parallax sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-photo sp-parallax sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kosame_hotpot_img( 'set-course.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-tablewrap","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tablewrap"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:table {"className":"ks-prices"} -->
<figure class="wp-block-table ks-prices"><table><tbody><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_garden' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_garden_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_garden_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_pork' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_pork_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_pork_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_beef' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_beef_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_beef_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_seafood' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_seafood_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_seafood_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_marbled' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_marbled_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_marbled_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_extra' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_extra_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_extra_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_finish' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_finish_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_finish_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-small"} -->
<p class="ks-small"><?php echo esc_html( kosame_hotpot_t( 'courses_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-linkbox sp-reveal sp-reveal--up"} -->
<p class="ks-linkbox sp-reveal sp-reveal--up"><a href="<?php echo kosame_hotpot_url( '/courses/' ); ?>"><?php echo kosame_hotpot_lines( 'lb_courses' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
