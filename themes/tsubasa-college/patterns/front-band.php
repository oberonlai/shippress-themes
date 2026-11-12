<?php
/**
 * Title: Home: parallax hangar band
 * Slug: tsubasa-college/front-band
 * Categories: tsubasa-college
 * Keywords: parallax, day, routine
 * Viewport Width: 1440
 * Description: A full-bleed hangar photograph that drifts slowly on scroll, with a white card at the lower left that lays out the day from toolbox check to sign-off.
 */
?>
<!-- wp:cover {"url":"<?php echo tsubasa_college_img( 'ts-11-hangar-morning' ); ?>","dimRatio":0,"minHeight":560,"minHeightUnit":"px","align":"full","anchor":"day","className":"tc-band sp-parallax","layout":{"type":"default"}} -->
<div id="day" class="wp-block-cover alignfull tc-band sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( tsubasa_college_t( 'alt_11' ) ); ?>" src="<?php echo tsubasa_college_img( 'ts-11-hangar-morning' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"tc-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tc-band__in"><!-- wp:group {"className":"tc-band__card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-band__card"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tsubasa_college_t( 'ba_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tc-h3"} -->
<h3 class="wp-block-heading tc-h3"><?php echo esc_html( tsubasa_college_t( 'ba_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"tc-day"} -->
<ul class="wp-block-list tc-day"><!-- wp:list-item -->
<li><strong><?php echo esc_html( tsubasa_college_t( 'ba_t1' ) ); ?></strong> <?php echo esc_html( tsubasa_college_t( 'ba_d1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php echo esc_html( tsubasa_college_t( 'ba_t2' ) ); ?></strong> <?php echo esc_html( tsubasa_college_t( 'ba_d2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php echo esc_html( tsubasa_college_t( 'ba_t3' ) ); ?></strong> <?php echo esc_html( tsubasa_college_t( 'ba_d3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php echo esc_html( tsubasa_college_t( 'ba_t4' ) ); ?></strong> <?php echo esc_html( tsubasa_college_t( 'ba_d4' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php echo esc_html( tsubasa_college_t( 'ba_t5' ) ); ?></strong> <?php echo esc_html( tsubasa_college_t( 'ba_d5' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
