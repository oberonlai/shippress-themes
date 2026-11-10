<?php
/**
 * Title: Home: story rows
 * Slug: genba-diary/front-stories
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Description: Label, heading and three stacked story rows: 3:2 photograph at the left, micro-label, title, excerpt and a VIEW MORE dash link.
 */
?>
<!-- wp:group {"className":"gd-stories gd-sec","layout":{"type":"default"},"tagName":"section","anchor":"stories","align":"full"} -->
<section id="stories" class="wp-block-group alignfull gd-stories gd-sec"><!-- wp:group {"className":"gd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wrap"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"gd-label"} -->
<p class="gd-label"><?php echo esc_html( genba_diary_t( 'l_stories' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"gd-h2"} -->
<h2 class="wp-block-heading gd-h2"><?php echo esc_html( genba_diary_t( 'stories_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-stories__list","layout":{"type":"default"}} -->
<div class="wp-block-group gd-stories__list"><!-- wp:group {"className":"gd-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-story__img"} -->
<figure class="wp-block-image size-full gd-story__img"><img src="<?php echo genba_diary_img( 'g14-story-column.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g14' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"gd-story__b","layout":{"type":"default"}} -->
<div class="wp-block-group gd-story__b"><!-- wp:paragraph {"className":"gd-micro"} -->
<p class="gd-micro"><?php echo esc_html( genba_diary_t( 's1_l' ) ); ?> · <?php echo esc_html( genba_diary_t( 's1_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 's1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/harbourline-board-stays/"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-story__img"} -->
<figure class="wp-block-image size-full gd-story__img"><img src="<?php echo genba_diary_img( 'g15-story-corridor.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g15' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"gd-story__b","layout":{"type":"default"}} -->
<div class="wp-block-group gd-story__b"><!-- wp:paragraph {"className":"gd-micro"} -->
<p class="gd-micro"><?php echo esc_html( genba_diary_t( 's2_l' ) ); ?> · <?php echo esc_html( genba_diary_t( 's2_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 's2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/moreau-room-by-room/"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-story sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-story__img"} -->
<figure class="wp-block-image size-full gd-story__img"><img src="<?php echo genba_diary_img( 'g16-story-facade.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g16' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"gd-story__b","layout":{"type":"default"}} -->
<div class="wp-block-group gd-story__b"><!-- wp:paragraph {"className":"gd-micro"} -->
<p class="gd-micro"><?php echo esc_html( genba_diary_t( 's3_l' ) ); ?> · <?php echo esc_html( genba_diary_t( 's3_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 's3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/northfield-logs-at-height/"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
