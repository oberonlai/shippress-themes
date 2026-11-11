<?php
/**
 * Title: Page: Newsletter
 * Slug: tana-furniture/page-newsletter
 * Categories: tana-furniture
 * Inserter: no
 * Description: What the seasonal letter contains and a subscribe form that works without plugins.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'lb_letters' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-lead"} -->
<p class="tf-lead"><?php echo esc_html( tana_furniture_t( 'pg_nl_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec tf-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec tf-band"><!-- wp:columns {"align":"wide","className":"tf-split"} -->
<div class="wp-block-columns alignwide tf-split"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"tf-textcard is-style-white-card","layout":{"type":"default"}} -->
<div class="wp-block-group tf-textcard is-style-white-card"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'lb_letters' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tf-card__title"} -->
<h3 class="wp-block-heading tf-card__title"><?php echo esc_html( tana_furniture_t( 'pg_nl_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'pg_nl_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"tf-textcard tf-formcard is-style-white-card","layout":{"type":"default"}} -->
<div class="wp-block-group tf-textcard tf-formcard is-style-white-card"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'lb_privacy' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tf-card__title"} -->
<h3 class="wp-block-heading tf-card__title"><?php echo esc_html( tana_furniture_t( 'pg_nl_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'pg_nl_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"tana-furniture/news-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
