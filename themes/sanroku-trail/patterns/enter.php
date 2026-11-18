<?php
/**
 * Title: Enter: fee ledger and four steps
 * Slug: sanroku-trail/enter
 * Categories: sanroku-trail
 * Viewport Width: 1440
 * Description: The one way to enter: head, a full-width fee ledger, four ruled steps and the entry button.
 */
?>
<!-- wp:group {"tagName":"section","className":"st-sec st-enter","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-enter"><!-- wp:group {"className":"st-frame","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame"><!-- wp:group {"className":"st-enter__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-enter__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'enter_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-enter__p"} -->
<p class="st-enter__p"><?php echo esc_html( sanroku_trail_t( 'enter_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"hasFixedLayout":false,"className":"st-fees"} -->
<figure class="wp-block-table st-fees"><table><thead><tr><th><?php echo esc_html( sanroku_trail_t( 'fee_h_race' ) ); ?></th><th><?php echo esc_html( sanroku_trail_t( 'fee_h_dist' ) ); ?></th><th><?php echo esc_html( sanroku_trail_t( 'fee_h_date' ) ); ?></th><th><?php echo esc_html( sanroku_trail_t( 'fee_h_fee' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_1_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_1_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_1_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_1_f' ) ); ?></td></tr><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_2_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_2_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_2_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_2_f' ) ); ?></td></tr><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_3_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_3_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_3_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_3_f' ) ); ?></td></tr><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_4_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_4_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_4_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_4_f' ) ); ?></td></tr><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_5_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_5_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_5_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_5_f' ) ); ?></td></tr><tr><td><?php echo esc_html( sanroku_trail_t( 'fee_6_r' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_6_d' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_6_dt' ) ); ?></td><td><?php echo esc_html( sanroku_trail_t( 'fee_6_f' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:group {"className":"st-steps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group st-steps sp-stagger"><!-- wp:paragraph {"className":"st-step sp-reveal sp-reveal--up"} -->
<p class="st-step sp-reveal sp-reveal--up"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'step_1_c' ) ); ?></span><span class="st-step__t"><?php echo esc_html( sanroku_trail_t( 'step_1' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-step sp-reveal sp-reveal--up"} -->
<p class="st-step sp-reveal sp-reveal--up"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'step_2_c' ) ); ?></span><span class="st-step__t"><?php echo esc_html( sanroku_trail_t( 'step_2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-step sp-reveal sp-reveal--up"} -->
<p class="st-step sp-reveal sp-reveal--up"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'step_3_c' ) ); ?></span><span class="st-step__t"><?php echo esc_html( sanroku_trail_t( 'step_3' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-step sp-reveal sp-reveal--up"} -->
<p class="st-step sp-reveal sp-reveal--up"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'step_4_c' ) ); ?></span><span class="st-step__t"><?php echo esc_html( sanroku_trail_t( 'step_4' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"st-enter__cta","layout":{"type":"flex"}} -->
<div class="wp-block-buttons st-enter__cta"><!-- wp:button {"className":"st-btn"} -->
<div class="wp-block-button st-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/enter/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'enter_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
