<?php
/**
 * Title: Home: fees and intakes
 * Slug: tsubasa-college/front-fees
 * Categories: tsubasa-college
 * Keywords: fees, price, intake
 * Viewport Width: 1440
 * Description: A full-width fee table with the price column right-aligned and never clipped, a note on instalments, and a slate strip from the left edge with two text-only intake cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"tc-sec tc-fees","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull tc-sec tc-fees"><!-- wp:group {"align":"wide","className":"tc-fees__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tc-fees__head"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tsubasa_college_t( 'fe_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( tsubasa_college_t( 'fe_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tc-rule","layout":{"type":"default"}} -->
<div class="wp-block-group tc-rule"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:table {"align":"wide","className":"tc-table tc-table--fees"} -->
<figure class="wp-block-table alignwide tc-table tc-table--fees"><table><thead><tr><th scope="col"><?php echo esc_html( tsubasa_college_t( 'fe_th1' ) ); ?></th><th scope="col"><?php echo esc_html( tsubasa_college_t( 'fe_th2' ) ); ?></th><th scope="col" class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'fe_th3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( tsubasa_college_t( 'fe_i1' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'fe_n1' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'fe_p1' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'fe_i2' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'fe_n2' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'fe_p2' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'fe_i3' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'fe_n3' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'fe_p3' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'fe_i4' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'fe_n4' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'fe_p4' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'fe_i5' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'fe_n5' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'fe_p5' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'fe_i6' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'fe_n6' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'fe_p6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"align":"wide","className":"tc-fees__note"} -->
<p class="alignwide tc-fees__note"><?php echo esc_html( tsubasa_college_t( 'fe_note' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tc-foot-strip tc-foot-strip--wide","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-foot-strip tc-foot-strip--wide"><!-- wp:group {"className":"tc-strip tc-strip--wide","layout":{"type":"default"}} -->
<div class="wp-block-group tc-strip tc-strip--wide"><!-- wp:paragraph {"className":"tc-strip__label"} -->
<p class="tc-strip__label"><?php echo esc_html( tsubasa_college_t( 'fe_strip' ) ); ?> <span class="tc-chev tc-chev--white">›</span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tc-cards2","layout":{"type":"default"}} -->
<div class="wp-block-group tc-cards2"><!-- wp:group {"className":"tc-card tc-card--text","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--text"><!-- wp:paragraph {"className":"tc-card__title"} -->
<p class="tc-card__title"><?php echo esc_html( tsubasa_college_t( 'fe_c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tc-card__link"} -->
<p class="tc-card__link"><a href="/admissions/"><?php echo esc_html( tsubasa_college_t( 'fe_c1l' ) ); ?></a> <span class="tc-chev">›</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tc-card tc-card--text","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--text"><!-- wp:paragraph {"className":"tc-card__title"} -->
<p class="tc-card__title"><?php echo esc_html( tsubasa_college_t( 'fe_c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tc-card__link"} -->
<p class="tc-card__link"><a href="/admissions/"><?php echo esc_html( tsubasa_college_t( 'fe_c2l' ) ); ?></a> <span class="tc-chev">›</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
