<?php
/**
 * Title: Home: a teaching week
 * Slug: yubi-college/front-week
 * Categories: yubi-college
 * Viewport Width: 1440
 * Description: Horizontal scroll-snap strip of five photo cards on a pale aqua band, one card per stop of the Interpreter Diploma teaching week.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"week","className":"yb-sec yb-sec--wash yb-sec--week","layout":{"type":"default"}} -->
<section id="week" class="wp-block-group alignfull yb-sec yb-sec--wash yb-sec--week"><!-- wp:group {"className":"yb-wrap yb-wrap--left sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-wrap--left sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2"} -->
<h2 class="wp-block-heading yb-h2"><?php echo esc_html( yubi_college_t( 'wk_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'wk_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-secline"} -->
<p class="yb-secline"><?php echo esc_html( yubi_college_t( 'wk_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-strip sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-strip sp-reveal sp-reveal--up"><!-- wp:html -->
<div class="yb-strip__scroll" tabindex="0" role="region" aria-label="<?php echo yubi_college_a( 'strip_label' ); ?>"><article class="yb-wk"><figure class="yb-wk__photo"><img src="<?php echo yubi_college_img( 'p07-tue-language-circle.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p07' ); ?>" loading="lazy"/></figure><div class="yb-wk__body"><p class="yb-wk__d"><?php echo esc_html( yubi_college_t( 'wk1_d' ) ); ?></p><h3 class="yb-wk__h"><?php echo esc_html( yubi_college_t( 'wk1_h' ) ); ?></h3><p class="yb-wk__p"><?php echo esc_html( yubi_college_t( 'wk1_p' ) ); ?></p></div></article><article class="yb-wk"><figure class="yb-wk__photo"><img src="<?php echo yubi_college_img( 'p08-wed-home-practice.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p08' ); ?>" loading="lazy"/></figure><div class="yb-wk__body"><p class="yb-wk__d"><?php echo esc_html( yubi_college_t( 'wk2_d' ) ); ?></p><h3 class="yb-wk__h"><?php echo esc_html( yubi_college_t( 'wk2_h' ) ); ?></h3><p class="yb-wk__p"><?php echo esc_html( yubi_college_t( 'wk2_p' ) ); ?></p></div></article><article class="yb-wk"><figure class="yb-wk__photo"><img src="<?php echo yubi_college_img( 'p09-thu-booth-lab.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p09' ); ?>" loading="lazy"/></figure><div class="yb-wk__body"><p class="yb-wk__d"><?php echo esc_html( yubi_college_t( 'wk3_d' ) ); ?></p><h3 class="yb-wk__h"><?php echo esc_html( yubi_college_t( 'wk3_h' ) ); ?></h3><p class="yb-wk__p"><?php echo esc_html( yubi_college_t( 'wk3_p' ) ); ?></p></div></article><article class="yb-wk"><figure class="yb-wk__photo"><img src="<?php echo yubi_college_img( 'p10-sat-mock-clinic.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p10' ); ?>" loading="lazy"/></figure><div class="yb-wk__body"><p class="yb-wk__d"><?php echo esc_html( yubi_college_t( 'wk4_d' ) ); ?></p><h3 class="yb-wk__h"><?php echo esc_html( yubi_college_t( 'wk4_h' ) ); ?></h3><p class="yb-wk__p"><?php echo esc_html( yubi_college_t( 'wk4_p' ) ); ?></p></div></article><article class="yb-wk"><figure class="yb-wk__photo"><img src="<?php echo yubi_college_img( 'p11-sat-debrief.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p11' ); ?>" loading="lazy"/></figure><div class="yb-wk__body"><p class="yb-wk__d"><?php echo esc_html( yubi_college_t( 'wk5_d' ) ); ?></p><h3 class="yb-wk__h"><?php echo esc_html( yubi_college_t( 'wk5_h' ) ); ?></h3><p class="yb-wk__p"><?php echo esc_html( yubi_college_t( 'wk5_p' ) ); ?></p></div></article></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-wrap yb-wrap--left","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-wrap--left"><!-- wp:group {"className":"yb-weekfoot","layout":{"type":"default"}} -->
<div class="wp-block-group yb-weekfoot"><!-- wp:paragraph {"className":"yb-total"} -->
<p class="yb-total"><?php echo esc_html( yubi_college_t( 'wk_total' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-textlink"} -->
<p class="yb-textlink"><a href="<?php echo esc_url( home_url( '/teaching-week/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'wk_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
