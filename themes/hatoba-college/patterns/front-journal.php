<?php
/**
 * Title: Home: journal
 * Slug: hatoba-college/front-journal
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Description: Three ruled rows (date, title, category); the first carries a 3:2 thumbnail.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"journal","className":"hc-sec hc-journal","layout":{"type":"default"}} -->
<section id="journal" class="wp-block-group alignfull hc-sec hc-journal"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'journal_hh_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'journal_hh_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'journal_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group hc-rows"><!-- wp:group {"className":"hc-row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-row"><!-- wp:paragraph {"className":"hc-row__date"} -->
<p class="hc-row__date"><?php echo esc_html( hatoba_college_t( 'jr1_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-row__title"} -->
<h3 class="wp-block-heading hc-row__title"><a href="<?php echo hatoba_college_url( '/open-quay-saturday-6-february-2027/' ); ?>"><?php echo esc_html( hatoba_college_t( 'jr1_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-row__cat"} -->
<p class="hc-row__cat"><?php echo esc_html( hatoba_college_t( 'jr1_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"hc-row__thumb"} -->
<figure class="wp-block-image size-medium hc-row__thumb"><img src="<?php echo hatoba_college_img( 'p11-open-quay.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-row"><!-- wp:paragraph {"className":"hc-row__date"} -->
<p class="hc-row__date"><?php echo esc_html( hatoba_college_t( 'jr2_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-row__title"} -->
<h3 class="wp-block-heading hc-row__title"><a href="<?php echo hatoba_college_url( '/what-the-week-12-assessment-looks-like/' ); ?>"><?php echo esc_html( hatoba_college_t( 'jr2_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-row__cat"} -->
<p class="hc-row__cat"><?php echo esc_html( hatoba_college_t( 'jr2_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-row"><!-- wp:paragraph {"className":"hc-row__date"} -->
<p class="hc-row__date"><?php echo esc_html( hatoba_college_t( 'jr3_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-row__title"} -->
<h3 class="wp-block-heading hc-row__title"><a href="<?php echo hatoba_college_url( '/a-day-on-the-simulator-bridge/' ); ?>"><?php echo esc_html( hatoba_college_t( 'jr3_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-row__cat"} -->
<p class="hc-row__cat"><?php echo esc_html( hatoba_college_t( 'jr3_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
