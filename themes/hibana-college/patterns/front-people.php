<?php
/**
 * Title: Home: instructors (twin photo panels)
 * Slug: hibana-college/front-people
 * Categories: hibana-college
 * Viewport Width: 1440
 * Description: Two instructors as twin photo panels; the tabs carry their names.
 */
?>
<!-- wp:group {"className":"hc-sec hc-people","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hc-sec hc-people">
<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:group {"className":"hc-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-head sp-reveal sp-reveal--up">
<!-- wp:group {"className":"hc-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hc-head__main">
<!-- wp:heading {"level":2,"className":"hc-head__title"} -->
<h2 class="wp-block-heading hc-head__title"><?php echo wp_kses_post( hibana_college_t( 'people_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-head__sub"} -->
<p class="hc-head__sub"><?php echo wp_kses_post( hibana_college_t( 'people_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-more"} -->
<p class="hc-more"><a href="/instructors/"><?php echo wp_kses_post( hibana_college_t( 'more_detail' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-twin sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hc-twin sp-stagger">
<!-- wp:group {"className":"hc-panel sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group hc-panel sp-reveal sp-reveal--zoom">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-panel__img"} -->
<figure class="wp-block-image size-full hc-panel__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p1.webp' ) ); ?>" alt="<?php echo esc_attr( hibana_college_t( 'alt_p1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-card","layout":{"type":"default"}} -->
<div class="wp-block-group hc-card">
<!-- wp:paragraph {"className":"hc-tab"} -->
<p class="hc-tab"><?php echo wp_kses_post( hibana_college_t( 'p1_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-card__l","layout":{"type":"default"}} -->
<div class="wp-block-group hc-card__l">
<!-- wp:paragraph {"className":"hc-card__big"} -->
<p class="hc-card__big"><?php echo wp_kses_post( hibana_college_t( 'p1_big' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-card__w"} -->
<p class="hc-card__w"><?php echo wp_kses_post( hibana_college_t( 'p1_word' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-card__r","layout":{"type":"default"}} -->
<div class="wp-block-group hc-card__r">
<!-- wp:paragraph {"className":"hc-card__b"} -->
<p class="hc-card__b"><?php echo wp_kses_post( hibana_college_t( 'p1_role' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-card__d"} -->
<p class="hc-card__d"><?php echo wp_kses_post( hibana_college_t( 'p1_det' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-panel sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group hc-panel sp-reveal sp-reveal--zoom">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-panel__img"} -->
<figure class="wp-block-image size-full hc-panel__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p2.webp' ) ); ?>" alt="<?php echo esc_attr( hibana_college_t( 'alt_p2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-card","layout":{"type":"default"}} -->
<div class="wp-block-group hc-card">
<!-- wp:paragraph {"className":"hc-tab"} -->
<p class="hc-tab"><?php echo wp_kses_post( hibana_college_t( 'p2_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-card__l","layout":{"type":"default"}} -->
<div class="wp-block-group hc-card__l">
<!-- wp:paragraph {"className":"hc-card__big"} -->
<p class="hc-card__big"><?php echo wp_kses_post( hibana_college_t( 'p2_big' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-card__w"} -->
<p class="hc-card__w"><?php echo wp_kses_post( hibana_college_t( 'p2_word' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-card__r","layout":{"type":"default"}} -->
<div class="wp-block-group hc-card__r">
<!-- wp:paragraph {"className":"hc-card__b"} -->
<p class="hc-card__b"><?php echo wp_kses_post( hibana_college_t( 'p2_role' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-card__d"} -->
<p class="hc-card__d"><?php echo wp_kses_post( hibana_college_t( 'p2_det' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
