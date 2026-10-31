<?php
/**
 * Title: Home: a week’s work
 * Slug: hibana-college/front-week
 * Categories: hibana-college
 * Viewport Width: 1440
 * Description: Caps heading row, a narrative paragraph at an offset and three photographs of widths 490 / 325 / 325 with captions.
 */
?>
<!-- wp:group {"className":"hc-sec hc-week","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hc-sec hc-week">
<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:group {"className":"hc-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-head sp-reveal sp-reveal--up">
<!-- wp:group {"className":"hc-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hc-head__main">
<!-- wp:heading {"level":2,"className":"hc-head__title"} -->
<h2 class="wp-block-heading hc-head__title"><?php echo wp_kses_post( hibana_college_t( 'week_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-head__sub"} -->
<p class="hc-head__sub"><?php echo wp_kses_post( hibana_college_t( 'week_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-more"} -->
<p class="hc-more"><a href="/week/"><?php echo wp_kses_post( hibana_college_t( 'more_detail' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-week__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-week__text sp-reveal sp-reveal--up">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'week_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:group {"className":"hc-week__row sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hc-week__row sp-stagger">
<!-- wp:group {"className":"hc-wfig sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wfig sp-reveal sp-reveal--zoom">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-wfig__img"} -->
<figure class="wp-block-image size-full hc-wfig__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/y1.webp' ) ); ?>" alt="<?php echo esc_attr( hibana_college_t( 'alt_y1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-wfig__cap"} -->
<p class="hc-wfig__cap"><?php echo wp_kses_post( hibana_college_t( 'wcap1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-wfig sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wfig sp-reveal sp-reveal--zoom">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-wfig__img"} -->
<figure class="wp-block-image size-full hc-wfig__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/y2.webp' ) ); ?>" alt="<?php echo esc_attr( hibana_college_t( 'alt_y2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-wfig__cap"} -->
<p class="hc-wfig__cap"><?php echo wp_kses_post( hibana_college_t( 'wcap2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-wfig sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wfig sp-reveal sp-reveal--zoom">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-wfig__img"} -->
<figure class="wp-block-image size-full hc-wfig__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/y3.webp' ) ); ?>" alt="<?php echo esc_attr( hibana_college_t( 'alt_y3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-wfig__cap"} -->
<p class="hc-wfig__cap"><?php echo wp_kses_post( hibana_college_t( 'wcap3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
