<?php
/**
 * Title: Home: path detail
 * Slug: waza-college/path-detail
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Description: A full rust-asagi field: one short two-column row per path, what you study on the left and a numbered next-steps list on the right.
 */
?>
<!-- wp:group {"tagName":"section","className":"wz-paths","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull wz-paths"><!-- wp:paragraph {"className":"wz-eyebrow"} -->
<p class="wz-eyebrow"><?php echo esc_html( waza_college_t( 'pd_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="wz-path" id="path-1"><p class="wz-path__label"><span class="wz-gate__no">01</span> <?php echo esc_html( waza_college_t( 'g1_l' ) ); ?></p><div class="wz-path__study"><h3><?php echo esc_html( waza_college_t( 'pd_study' ) ); ?></h3><p><?php echo esc_html( waza_college_t( 'g1_s' ) ); ?></p></div><div class="wz-path__next"><h3><?php echo esc_html( waza_college_t( 'pd_next' ) ); ?></h3><ol><li><?php echo esc_html( waza_college_t( 'g1_n1' ) ); ?></li><li><?php echo esc_html( waza_college_t( 'g1_n2' ) ); ?></li><li><?php echo esc_html( waza_college_t( 'g1_n3' ) ); ?></li></ol></div></div><div class="wz-path" id="path-2"><p class="wz-path__label"><span class="wz-gate__no">02</span> <?php echo esc_html( waza_college_t( 'g2_l' ) ); ?></p><div class="wz-path__study"><h3><?php echo esc_html( waza_college_t( 'pd_study' ) ); ?></h3><p><?php echo esc_html( waza_college_t( 'g2_s' ) ); ?></p></div><div class="wz-path__next"><h3><?php echo esc_html( waza_college_t( 'pd_next' ) ); ?></h3><ol><li><?php echo esc_html( waza_college_t( 'g2_n1' ) ); ?></li><li><?php echo esc_html( waza_college_t( 'g2_n2' ) ); ?></li><li><?php echo esc_html( waza_college_t( 'g2_n3' ) ); ?></li></ol></div></div><div class="wz-path" id="path-3"><p class="wz-path__label"><span class="wz-gate__no">03</span> <?php echo esc_html( waza_college_t( 'g3_l' ) ); ?></p><div class="wz-path__study"><h3><?php echo esc_html( waza_college_t( 'pd_study' ) ); ?></h3><p><?php echo esc_html( waza_college_t( 'g3_s' ) ); ?></p></div><div class="wz-path__next"><h3><?php echo esc_html( waza_college_t( 'pd_next' ) ); ?></h3><ol><li><?php echo esc_html( waza_college_t( 'g3_n1' ) ); ?></li><li><?php echo esc_html( waza_college_t( 'g3_n2' ) ); ?></li><li><?php echo esc_html( waza_college_t( 'g3_n3' ) ); ?></li></ol></div></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
