<?php
/**
 * Title: Home: courses by age
 * Slug: hirameki-lab/courses-by-age
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Description: A hairline table of age band, weekly hours, monthly fee and a trial link.
 */
?>
<!-- wp:group {"tagName":"section","className":"hl-courses","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-courses"><!-- wp:group {"className":"hl-courses__head","layout":{"type":"default"}} -->
<div class="wp-block-group hl-courses__head"><!-- wp:paragraph {"className":"hl-eyebrow"} -->
<p class="hl-eyebrow"><?php echo esc_html( hirameki_lab_t( 'courses_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hl-sec__title"} -->
<h2 class="wp-block-heading hl-sec__title"><?php echo esc_html( hirameki_lab_t( 'courses_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"hl-courses__table"} -->
<figure class="wp-block-table hl-courses__table"><table><thead><tr><th><?php echo esc_html( hirameki_lab_t( 'col_age' ) ); ?></th><th><?php echo esc_html( hirameki_lab_t( 'col_hours' ) ); ?></th><th><?php echo esc_html( hirameki_lab_t( 'col_fee' ) ); ?></th><th><?php echo esc_html( hirameki_lab_t( 'col_trial' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( hirameki_lab_t( 'c1_a' ) ); ?></td><td><?php echo esc_html( hirameki_lab_t( 'c1_h' ) ); ?></td><td><?php echo esc_html( hirameki_lab_t( 'c1_f' ) ); ?></td><td><a href="/trial/"><?php echo esc_html( hirameki_lab_t( 'trial_link' ) ); ?></a></td></tr><tr><td><?php echo esc_html( hirameki_lab_t( 'c2_a' ) ); ?></td><td><?php echo esc_html( hirameki_lab_t( 'c2_h' ) ); ?></td><td><?php echo esc_html( hirameki_lab_t( 'c2_f' ) ); ?></td><td><a href="/trial/"><?php echo esc_html( hirameki_lab_t( 'trial_link' ) ); ?></a></td></tr><tr><td><?php echo esc_html( hirameki_lab_t( 'c3_a' ) ); ?></td><td><?php echo esc_html( hirameki_lab_t( 'c3_h' ) ); ?></td><td><?php echo esc_html( hirameki_lab_t( 'c3_f' ) ); ?></td><td><a href="/trial/"><?php echo esc_html( hirameki_lab_t( 'trial_link' ) ); ?></a></td></tr><tr><td><?php echo esc_html( hirameki_lab_t( 'c4_a' ) ); ?></td><td><?php echo esc_html( hirameki_lab_t( 'c4_h' ) ); ?></td><td><?php echo esc_html( hirameki_lab_t( 'c4_f' ) ); ?></td><td><a href="/trial/"><?php echo esc_html( hirameki_lab_t( 'trial_link' ) ); ?></a></td></tr></tbody></table></figure>
<!-- /wp:table --></section>
<!-- /wp:group -->
