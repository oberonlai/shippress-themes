<?php
/**
 * Title: Home: the morning (scoop tiles)
 * Slug: asaoka-screening/front-morning
 * Categories: asaoka-screening
 * Keywords: health screening, medical, company
 * Viewport Width: 1440
 * Description: Five photo tiles with a scooped corner holding a round arrow and a centred label.
 */
?>
<!-- wp:group {"className":"as-sec as-morning","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull as-sec as-morning">

<!-- wp:group {"className":"as-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group as-wrap">
<!-- wp:group {"className":"as-head","layout":{"type":"default"}} -->
<div class="wp-block-group as-head">
<!-- wp:paragraph {"className":"as-dot-label"} -->
<p class="as-dot-label"><?php echo esc_html( asaoka_screening_t( 'morn_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"as-h2"} -->
<h2 class="wp-block-heading as-h2"><?php echo esc_html( asaoka_screening_t( 'morn_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( asaoka_screening_t( 'morn_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<nav class="as-tiles sp-stagger" aria-label="<?php echo esc_attr( asaoka_screening_t( 'morn_aria' ) ); ?>">
<a class="as-tile sp-reveal sp-reveal--up" href="/the-morning/"><span class="as-tile__ph"><img src="<?php echo asaoka_screening_img( 'p04-vision-test.webp' ); ?>" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P04' ) ); ?>" loading="lazy"/><span class="as-tile__go"><?php echo asaoka_screening_arrow(); ?></span></span><b class="as-tile__lbl"><?php echo esc_html( asaoka_screening_t( 'tile_0' ) ); ?></b><span class="as-tile__sub"><?php echo esc_html( asaoka_screening_t( 'tile_0_s' ) ); ?></span></a>
<a class="as-tile sp-reveal sp-reveal--up" href="/the-morning/"><span class="as-tile__ph"><img src="<?php echo asaoka_screening_img( 'p05-blood-draw.webp' ); ?>" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P05' ) ); ?>" loading="lazy"/><span class="as-tile__go"><?php echo asaoka_screening_arrow(); ?></span></span><b class="as-tile__lbl"><?php echo esc_html( asaoka_screening_t( 'tile_1' ) ); ?></b><span class="as-tile__sub"><?php echo esc_html( asaoka_screening_t( 'tile_1_s' ) ); ?></span></a>
<a class="as-tile sp-reveal sp-reveal--up" href="/the-morning/"><span class="as-tile__ph"><img src="<?php echo asaoka_screening_img( 'p06-chest-xray.webp' ); ?>" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P06' ) ); ?>" loading="lazy"/><span class="as-tile__go"><?php echo asaoka_screening_arrow(); ?></span></span><b class="as-tile__lbl"><?php echo esc_html( asaoka_screening_t( 'tile_2' ) ); ?></b><span class="as-tile__sub"><?php echo esc_html( asaoka_screening_t( 'tile_2_s' ) ); ?></span></a>
<a class="as-tile sp-reveal sp-reveal--up" href="/the-morning/"><span class="as-tile__ph"><img src="<?php echo asaoka_screening_img( 'p07-ecg.webp' ); ?>" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P07' ) ); ?>" loading="lazy"/><span class="as-tile__go"><?php echo asaoka_screening_arrow(); ?></span></span><b class="as-tile__lbl"><?php echo esc_html( asaoka_screening_t( 'tile_3' ) ); ?></b><span class="as-tile__sub"><?php echo esc_html( asaoka_screening_t( 'tile_3_s' ) ); ?></span></a>
<a class="as-tile sp-reveal sp-reveal--up" href="/the-morning/"><span class="as-tile__ph"><img src="<?php echo asaoka_screening_img( 'p08-consult.webp' ); ?>" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P08' ) ); ?>" loading="lazy"/><span class="as-tile__go"><?php echo asaoka_screening_arrow(); ?></span></span><b class="as-tile__lbl"><?php echo esc_html( asaoka_screening_t( 'tile_4' ) ); ?></b><span class="as-tile__sub"><?php echo esc_html( asaoka_screening_t( 'tile_4_s' ) ); ?></span></a>
</nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
