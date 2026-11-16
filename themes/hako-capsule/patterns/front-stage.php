<?php
/**
 * Title: Home: stage photograph, Tonight card and headline
 * Slug: hako-capsule/front-stage
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph with no text on it, the Tonight speech card docked at its lower right, then the headline at the left and a short paragraph at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-hero"><!-- wp:group {"className":"hk-stagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stagewrap"><!-- wp:cover {"url":<?php echo wp_json_encode( hako_capsule_img( 'p01-key-handover.webp' ) ); ?>,"dimRatio":0,"minHeight":576,"isDark":false,"align":"full","className":"hk-stage sp-parallax"} -->
<div class="wp-block-cover alignfull is-light hk-stage sp-parallax" style="min-height:576px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo hako_capsule_a( 'alt_p01' ); ?>" src="<?php echo hako_capsule_img( 'p01-key-handover.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"hk-tonight","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tonight"><!-- wp:group {"className":"hk-tonight__top","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tonight__top"><!-- wp:paragraph {"className":"hk-eyebrow"} -->
<p class="hk-eyebrow"><span class="hk-dot"></span><?php echo esc_html( hako_capsule_t( 'tn_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-tag","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tag"><!-- wp:html -->
<?php echo hako_capsule_icon( 'tag' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-tonight__rows","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tonight__rows"><!-- wp:group {"className":"hk-tn","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tn"><!-- wp:paragraph {"className":"hk-tn__l"} -->
<p class="hk-tn__l"><?php echo esc_html( hako_capsule_t( 'tn_checkin_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-tn__v"} -->
<p class="hk-tn__v"><?php echo esc_html( hako_capsule_t( 'tn_checkin' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-tn","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tn"><!-- wp:paragraph {"className":"hk-tn__l"} -->
<p class="hk-tn__l"><?php echo esc_html( hako_capsule_t( 'tn_shower_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-tn__v"} -->
<p class="hk-tn__v"><?php echo esc_html( hako_capsule_t( 'tn_shower' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hk-tonight__desk"} -->
<p class="hk-tonight__desk"><?php echo esc_html( hako_capsule_t( 'tn_desk' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-tonight__btns","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tonight__btns"><!-- wp:paragraph {"className":"hk-pill hk-pill--line"} -->
<p class="hk-pill hk-pill--line"><a href="<?php echo hako_capsule_url( '/pods/' ); ?>"><?php echo esc_html( hako_capsule_t( 'tn_see' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-pill hk-pill--fill"} -->
<p class="hk-pill hk-pill--fill"><a href="<?php echo hako_capsule_url( '/book/' ); ?>"><?php echo esc_html( hako_capsule_t( 'tn_book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-lede","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lede"><!-- wp:group {"className":"hk-in hk-lede__in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-lede__in"><!-- wp:heading {"level":1,"className":"hk-h1"} -->
<h1 class="wp-block-heading hk-h1"><?php echo esc_html( hako_capsule_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"hk-lede__side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lede__side"><!-- wp:paragraph {"className":"hk-lede__p"} -->
<p class="hk-lede__p"><?php echo esc_html( hako_capsule_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-pill hk-pill--line"} -->
<p class="hk-pill hk-pill--line"><a href="<?php echo hako_capsule_url( '/about/' ); ?>"><?php echo esc_html( hako_capsule_t( 'hero_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
