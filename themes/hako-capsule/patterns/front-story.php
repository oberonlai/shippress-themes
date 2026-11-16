<?php
/**
 * Title: Home: why a capsule
 * Slug: hako-capsule/front-story
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Description: Section title band and a narrow 620px centred column of three paragraphs with an outline button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-story","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-story"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-narrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-narrow sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hk-body"} -->
<p class="hk-body"><?php echo esc_html( hako_capsule_t( 'story_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-body"} -->
<p class="hk-body"><?php echo esc_html( hako_capsule_t( 'story_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-body"} -->
<p class="hk-body"><?php echo esc_html( hako_capsule_t( 'story_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-pill hk-pill--line"} -->
<p class="hk-pill hk-pill--line"><a href="<?php echo hako_capsule_url( '/about/' ); ?>"><?php echo esc_html( hako_capsule_t( 'story_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
