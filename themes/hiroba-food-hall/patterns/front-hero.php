<?php
/**
 * Title: Home: framed window
 * Slug: hiroba-food-hall/front-hero
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Description: Rounded window on a pale ground holding a horizontal strip of four photographs, H1, standfirst and two buttons.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-hero"><!-- wp:group {"className":"hb-hero__frame","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hero__frame"><!-- wp:group {"className":"hb-window","layout":{"type":"default"}} -->
<div class="wp-block-group hb-window"><!-- wp:group {"className":"hb-window__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-window__in"><!-- wp:group {"className":"hb-strip","layout":{"type":"default"}} -->
<div class="wp-block-group hb-strip"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-frame","anchor":"hb-f1"} -->
<figure id="hb-f1" class="wp-block-image size-full hb-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-frame","anchor":"hb-f2"} -->
<figure id="hb-f2" class="wp-block-image size-full hb-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-frame","anchor":"hb-f3"} -->
<figure id="hb-f3" class="wp-block-image size-full hb-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-frame","anchor":"hb-f4"} -->
<figure id="hb-f4" class="wp-block-image size-full hb-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-win-nav","layout":{"type":"default"}} -->
<div class="wp-block-group hb-win-nav"><!-- wp:paragraph {"className":"hb-win-btn"} -->
<p class="hb-win-btn"><a href="#hb-f1" aria-label="<?php echo esc_attr( hiroba_t( 'prev_frame' ) ); ?>">←</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-win-btn"} -->
<p class="hb-win-btn"><a href="#hb-f2" aria-label="<?php echo esc_attr( hiroba_t( 'next_frame' ) ); ?>">→</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-cue","layout":{"type":"default"}} -->
<div class="wp-block-group hb-cue"><!-- wp:paragraph {"className":"hb-cue__chip"} -->
<p class="hb-cue__chip"><?php echo esc_html( hiroba_t( 'cue_chip' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hb-cue__line"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-cue__line"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-hero__head","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hero__head"><!-- wp:heading {"className":"hb-h1","level":1} -->
<h1 class="wp-block-heading hb-h1"><?php echo esc_html( hiroba_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"hb-hero__row","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hero__row"><!-- wp:paragraph {"className":"hb-stand"} -->
<p class="hb-stand"><?php echo esc_html( hiroba_t( 'hero_stand' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hb-hero__btns","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hero__btns"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hb-btn hb-btn--gold"} -->
<div class="wp-block-button hb-btn hb-btn--gold"><a class="wp-block-button__link wp-element-button" href="/tables/"><?php echo esc_html( hiroba_t( 'hero_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hb-btn hb-btn--line"} -->
<div class="wp-block-button hb-btn hb-btn--line"><a class="wp-block-button__link wp-element-button" href="/kitchens/"><?php echo esc_html( hiroba_t( 'hero_cta2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
