<?php
/**
 * Title: Home: stories band
 * Slug: kouhi-service/front-stories
 * Categories: kouhi-service
 * Keywords: office coffee, coffee service, landing
 * Viewport Width: 1440
 * Description: Full-width rounded photograph with parallax, a white quote card overlapping its bottom edge and two shorter text stories beside it.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"stories","className":"ks-sec ks-stories","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull ks-sec ks-stories"><!-- wp:group {"className":"ks-in ks-head-l","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in ks-head-l"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo esc_html( kouhi_service_t( 'lbl_stories' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo esc_html( kouhi_service_t( 'stories_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ks-band sp-parallax" style="--sp-par:10%"><img src="<?php echo kouhi_service_img( 'p08-kitchen.webp' ); ?>" alt="<?php echo esc_attr( kouhi_service_t( 'alt_P08' ) ); ?>" width="1600" height="688" loading="lazy"/></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ks-in ks-stories__row","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in ks-stories__row"><!-- wp:group {"className":"ks-story ks-story--card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-story ks-story--card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ks-story__q"} -->
<p class="ks-story__q"><?php echo esc_html( kouhi_service_t( 'story_0_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-story__n"} -->
<p class="ks-story__n"><strong><?php echo esc_html( kouhi_service_t( 'story_0_n' ) ); ?></strong><br><?php echo esc_html( kouhi_service_t( 'story_0_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-story sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ks-story__q"} -->
<p class="ks-story__q"><?php echo esc_html( kouhi_service_t( 'story_1_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-story__n"} -->
<p class="ks-story__n"><strong><?php echo esc_html( kouhi_service_t( 'story_1_n' ) ); ?></strong><br><?php echo esc_html( kouhi_service_t( 'story_1_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-story sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ks-story__q"} -->
<p class="ks-story__q"><?php echo esc_html( kouhi_service_t( 'story_2_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-story__n"} -->
<p class="ks-story__n"><strong><?php echo esc_html( kouhi_service_t( 'story_2_n' ) ); ?></strong><br><?php echo esc_html( kouhi_service_t( 'story_2_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
