<?php
/**
 * Title: Home: rounded hero
 * Slug: hakari-course/front-hero
 * Categories: hakari-course
 * Keywords: food safety, course, landing
 * Viewport Width: 1440
 * Description: Full-bleed photo with 88px rounded bottom corners, white headline across the lower middle, hashtag pair crossing the photo edge, two badges.
 */
?>
<!-- wp:group {"tagName":"div","align":"full","anchor":"top","className":"hk-herowrap","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group alignfull hk-herowrap"><!-- wp:group {"tagName":"section","align":"full","className":"hk-hero sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-hero sp-parallax"><!-- wp:group {"className":"hk-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group hk-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-kv-bench.webp' ) ); ?>" alt="<?php echo esc_attr( hakari_course_t( 'af69022ea' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"hk-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group hk-hero__copy"><!-- wp:heading {"level":1,"className":"hk-hero__h1"} -->
<h1 class="wp-block-heading hk-hero__h1"><span class="hk-line"><?php echo wp_kses_post( hakari_course_t( 'k49b38116' ) ); ?></span><span class="hk-line"><?php echo wp_kses_post( hakari_course_t( 'kad661a58' ) ); ?></span></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"hk-hero__tag"} -->
<p class="hk-hero__tag"><?php echo wp_kses_post( hakari_course_t( 'k38320a27' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:html -->
<div class="hk-hashband" aria-hidden="true"><span class="hk-hash">#</span><span class="hk-hw hk-hw--mint"><?php echo wp_kses_post( hakari_course_t( 'kba2f9b9e' ) ); ?></span> <span class="hk-hash">#</span><span class="hk-hw hk-hw--point"><?php echo wp_kses_post( hakari_course_t( 'k1448b550' ) ); ?></span></div>
<!-- /wp:html --><!-- wp:html -->
<div class="hk-badge hk-badge--temp"><span class="hk-badge__big"><?php echo wp_kses_post( hakari_course_t( 'k81e093a4' ) ); ?></span><span class="hk-badge__small"><?php echo wp_kses_post( hakari_course_t( 'kb045027a' ) ); ?></span></div>
<div class="hk-badge hk-badge--exam"><span class="hk-badge__tk"><?php echo wp_kses_post( hakari_course_t( 'kb66068cf' ) ); ?></span><span class="hk-badge__small"><?php echo wp_kses_post( hakari_course_t( 'k6a89777f' ) ); ?></span></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
