<?php
/**
 * Title: Home: fees and hours
 * Slug: suji-clinic/front-visit
 * Categories: suji-clinic
 * Keywords: clinic, fees, hours, address
 * Viewport Width: 1440
 * Description: The four main fees as a table at the left; hours, address and telephone at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-sec sj-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sj-sec sj-visit"><!-- wp:group {"className":"sj-wrap sj-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sj-wrap sj-visit__grid"><!-- wp:group {"className":"sj-visit__fees","layout":{"type":"default"}} -->
<div class="wp-block-group sj-visit__fees"><!-- wp:heading {"className":"sj-h2"} -->
<h2 class="wp-block-heading sj-h2"><?php echo esc_html( suji_clinic_t( 'visit_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"sj-fees"} -->
<figure class="wp-block-table sj-fees"><table><thead><tr><th><?php echo esc_html( suji_clinic_t( 'visit_col_item' ) ); ?></th><th><?php echo esc_html( suji_clinic_t( 'visit_col_len' ) ); ?></th><th><?php echo esc_html( suji_clinic_t( 'visit_col_price' ) ); ?></th></tr></thead><tbody><?php for ( $n = 1; $n <= 4; $n++ ) : ?><tr><td><?php echo esc_html( suji_clinic_t( "visit_f{$n}" ) ); ?></td><td><?php echo esc_html( suji_clinic_t( "visit_f{$n}_m" ) ); ?></td><td><?php echo esc_html( suji_clinic_t( "visit_f{$n}_p" ) ); ?></td></tr><?php endfor; ?></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sj-visit__note"} -->
<p class="sj-visit__note"><?php echo esc_html( suji_clinic_t( 'visit_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-more"} -->
<p class="sj-more"><a href="<?php echo suji_clinic_url( 'fees' ); ?>"><?php echo esc_html( suji_clinic_t( 'visit_go' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-visit__info","layout":{"type":"default"}} -->
<div class="wp-block-group sj-visit__info"><!-- wp:paragraph {"className":"sj-sublabel"} -->
<p class="sj-sublabel"><?php echo esc_html( suji_clinic_t( 'visit_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-visit__t"} -->
<p class="sj-visit__t"><?php echo suji_clinic_lines( 'visit_hours_t' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-sublabel"} -->
<p class="sj-sublabel"><?php echo esc_html( suji_clinic_t( 'visit_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-visit__t"} -->
<p class="sj-visit__t"><?php echo suji_clinic_lines( 'visit_addr_t' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-sublabel"} -->
<p class="sj-sublabel"><?php echo esc_html( suji_clinic_t( 'visit_phone' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-visit__t"} -->
<p class="sj-visit__t"><?php echo esc_html( suji_clinic_t( 'visit_phone_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
