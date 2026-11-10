<?php
/**
 * Title: Home: parallax gate band
 * Slug: genba-diary/front-gate
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Description: Full-bleed dawn photograph that moves slower than the page, with a white quote box with a steel bar.
 */
?>
<!-- wp:cover {"url":"<?php echo genba_diary_img( 'g12-dawn-frame.webp' ); ?>","alt":"<?php echo esc_attr( genba_diary_t( 'alt_g12' ) ); ?>","dimRatio":0,"isDark":false,"align":"full","tagName":"section","anchor":"gate","className":"gd-gate sp-parallax","layout":{"type":"default"}} -->
<section id="gate" class="wp-block-cover alignfull is-light gd-gate sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( genba_diary_t( 'alt_g12' ) ); ?>" src="<?php echo genba_diary_img( 'g12-dawn-frame.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"gd-quote","layout":{"type":"default"}} -->
<div class="wp-block-group gd-quote"><!-- wp:heading {"level":2,"className":"gd-quote__h"} -->
<h2 class="wp-block-heading gd-quote__h"><?php echo esc_html( genba_diary_t( 'gate_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-quote__by"} -->
<p class="gd-quote__by"><?php echo esc_html( genba_diary_t( 'gate_by' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->
