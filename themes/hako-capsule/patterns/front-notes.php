<?php
/**
 * Title: Home: from the night desk
 * Slug: hako-capsule/front-notes
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Description: Three full-width ruled story rows with a date pill, title, excerpt and a 48px square arrow box.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--notes"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'notes_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in"><!-- wp:group {"className":"hk-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rows sp-stagger"><!-- wp:group {"className":"hk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hk-row__date"} -->
<p class="hk-row__date"><?php echo esc_html( hako_capsule_t( 'n1_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-row__text"><!-- wp:heading {"level":3,"className":"hk-row__t"} -->
<h3 class="wp-block-heading hk-row__t"><?php echo esc_html( hako_capsule_t( 'n1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-row__p"} -->
<p class="hk-row__p"><?php echo esc_html( hako_capsule_t( 'n1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/the-00-52-last-train/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'n_read' ) . ' ' . hako_capsule_t( 'n1_t' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hk-row__date"} -->
<p class="hk-row__date"><?php echo esc_html( hako_capsule_t( 'n2_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-row__text"><!-- wp:heading {"level":3,"className":"hk-row__t"} -->
<h3 class="wp-block-heading hk-row__t"><?php echo esc_html( hako_capsule_t( 'n2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-row__p"} -->
<p class="hk-row__p"><?php echo esc_html( hako_capsule_t( 'n2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/journal/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'n_read' ) . ' ' . hako_capsule_t( 'n2_t' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hk-row__date"} -->
<p class="hk-row__date"><?php echo esc_html( hako_capsule_t( 'n3_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-row__text"><!-- wp:heading {"level":3,"className":"hk-row__t"} -->
<h3 class="wp-block-heading hk-row__t"><?php echo esc_html( hako_capsule_t( 'n3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-row__p"} -->
<p class="hk-row__p"><?php echo esc_html( hako_capsule_t( 'n3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/journal/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'n_read' ) . ' ' . hako_capsule_t( 'n3_t' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
