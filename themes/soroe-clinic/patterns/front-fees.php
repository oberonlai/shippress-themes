<?php
/**
 * Title: Home: courses and fees
 * Slug: soroe-clinic/front-fees
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: White cell: a full-width fee table with a nowrap price column, the instalment note and a link to the fee page.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"so-cell so-feesec","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull so-cell so-feesec"><!-- wp:group {"className":"so-fees__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-fees__head sp-reveal sp-reveal--up"><!-- wp:group {"className":"so-fees__l","layout":{"type":"default"}} -->
<div class="wp-block-group so-fees__l"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'fe_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"so-h2"} -->
<h2 class="wp-block-heading so-h2"><?php echo esc_html( soroe_clinic_t( 'fe_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'fe_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:table {"className":"so-fees"} -->
<figure class="wp-block-table so-fees"><table><thead><tr><th><?php echo esc_html( soroe_clinic_t( 'fe_th1' ) ); ?></th><th><?php echo esc_html( soroe_clinic_t( 'fe_th2' ) ); ?></th><th><?php echo esc_html( soroe_clinic_t( 'fe_th3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( soroe_clinic_t( 'fe_i1' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_d1' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_p1' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fe_i2' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_d2' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_p2' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fe_i3' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_d3' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_p3' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fe_i4' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_d4' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_p4' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fe_i5' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_d5' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_p5' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fe_i6' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_d6' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fe_p6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"so-note"} -->
<p class="so-note"><?php echo esc_html( soroe_clinic_t( 'fe_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-link"} -->
<p class="so-link"><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'fe_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
