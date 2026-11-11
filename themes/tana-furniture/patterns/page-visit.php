<?php
/**
 * Title: Page: Visit
 * Slug: tana-furniture/page-visit
 * Categories: tana-furniture
 * Inserter: no
 * Description: Where and when, the booking form and a parallax showroom photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'lb_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-lead"} -->
<p class="tf-lead"><?php echo esc_html( tana_furniture_t( 'pg_vi_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec tf-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec tf-band"><!-- wp:columns {"align":"wide","className":"tf-split"} -->
<div class="wp-block-columns alignwide tf-split"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"tf-textcard is-style-white-card","layout":{"type":"default"}} -->
<div class="wp-block-group tf-textcard is-style-white-card"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'lb_find' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tf-card__title"} -->
<h3 class="wp-block-heading tf-card__title"><?php echo esc_html( tana_furniture_t( 'pg_vi_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'pg_vi_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"tf-textcard tf-formcard is-style-white-card","layout":{"type":"default"}} -->
<div class="wp-block-group tf-textcard tf-formcard is-style-white-card"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'lb_book' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tf-card__title"} -->
<h3 class="wp-block-heading tf-card__title"><?php echo esc_html( tana_furniture_t( 'pg_vi_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'pg_vi_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-formhint"} -->
<p class="tf-formhint"><?php echo esc_html( tana_furniture_t( 'vi_form_hint' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"tana-furniture/visit-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tf-showroom sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tf-showroom sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-showroom__img"} -->
<figure class="wp-block-image size-full tf-showroom__img"><img src="<?php echo tana_furniture_img( 'p07-couple-sofa' ); ?>" alt="<?php tana_furniture_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"tf-showroom__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tf-showroom__in"><!-- wp:group {"className":"tf-showroom__card is-style-white-card","layout":{"type":"default"}} -->
<div class="wp-block-group tf-showroom__card is-style-white-card"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'co_px_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tf-h3-lg"} -->
<h2 class="wp-block-heading tf-h3-lg"><?php echo tana_furniture_lines( 'sr_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tf-more"} -->
<p class="tf-more"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'vi_px_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
