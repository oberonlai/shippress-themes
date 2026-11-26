<?php
/**
 * Title: Home: the two years
 * Slug: kikan-college/front-years
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: Two cards, Year 1 and Year 2, each with a month line.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"years","align":"full","className":"kc-sec kc-years","layout":{"type":"default"}} -->
<section id="years" class="wp-block-group alignfull kc-sec kc-years">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-head sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"kc-head__n"} -->
<p class="kc-head__n"><?php echo esc_html( kikan_college_t( 'years_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo esc_html( kikan_college_t( 'years_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-rule" aria-hidden="true"></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo esc_html( kikan_college_t( 'years_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-two sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-two sp-stagger">
<!-- wp:group {"className":"kc-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-ph kc-ph--32"} -->
<figure class="wp-block-image size-full kc-ph kc-ph--32"><img src="<?php echo kikan_college_img( 'year-bench.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_y1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"kc-card__h"} -->
<h3 class="wp-block-heading kc-card__h"><?php echo esc_html( kikan_college_t( 'y1_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-card__p"} -->
<p class="kc-card__p"><?php echo esc_html( kikan_college_t( 'y1_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-months","layout":{"type":"default"}} -->
<div class="wp-block-group kc-months">
<!-- wp:paragraph {"className":"kc-month"} -->
<p class="kc-month"><?php echo esc_html( kikan_college_t( 'y1_m1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-month"} -->
<p class="kc-month"><?php echo esc_html( kikan_college_t( 'y1_m2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-month"} -->
<p class="kc-month"><?php echo esc_html( kikan_college_t( 'y1_m3' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-ph kc-ph--32"} -->
<figure class="wp-block-image size-full kc-ph kc-ph--32"><img src="<?php echo kikan_college_img( 'year-placement.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_y2' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"kc-card__h"} -->
<h3 class="wp-block-heading kc-card__h"><?php echo esc_html( kikan_college_t( 'y2_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-card__p"} -->
<p class="kc-card__p"><?php echo esc_html( kikan_college_t( 'y2_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-months","layout":{"type":"default"}} -->
<div class="wp-block-group kc-months">
<!-- wp:paragraph {"className":"kc-month"} -->
<p class="kc-month"><?php echo esc_html( kikan_college_t( 'y2_m1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-month"} -->
<p class="kc-month"><?php echo esc_html( kikan_college_t( 'y2_m2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-month"} -->
<p class="kc-month"><?php echo esc_html( kikan_college_t( 'y2_m3' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
