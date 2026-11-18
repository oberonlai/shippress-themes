<?php
/**
 * Title: Home: price ledger
 * Slug: taruki-distillery/front-ledger
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: Six ruled rows (tours, tastings and bottles), name at the left, price at the right, stacked on phones.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--white td-ledger","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--white td-ledger"><!-- wp:group {"align":"wide","className":"td-ledger__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-ledger__head"><!-- wp:paragraph {"className":"td-caps sp-reveal sp-reveal--up"} -->
<p class="td-caps sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'lg_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"td-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading td-h2 sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'lg_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"td-ledger__rows","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-ledger__rows"><!-- wp:group {"className":"td-row","layout":{"type":"default"}} -->
<div class="wp-block-group td-row"><!-- wp:group {"className":"td-row__main","layout":{"type":"default"}} -->
<div class="wp-block-group td-row__main"><!-- wp:paragraph {"className":"td-row__name"} -->
<p class="td-row__name"><?php echo esc_html( taruki_t( 'lg_1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-row__note"} -->
<p class="td-row__note"><?php echo esc_html( taruki_t( 'lg_1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-row__price"} -->
<p class="td-row__price"><?php echo esc_html( taruki_t( 'lg_1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-row","layout":{"type":"default"}} -->
<div class="wp-block-group td-row"><!-- wp:group {"className":"td-row__main","layout":{"type":"default"}} -->
<div class="wp-block-group td-row__main"><!-- wp:paragraph {"className":"td-row__name"} -->
<p class="td-row__name"><?php echo esc_html( taruki_t( 'lg_2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-row__note"} -->
<p class="td-row__note"><?php echo esc_html( taruki_t( 'lg_2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-row__price"} -->
<p class="td-row__price"><?php echo esc_html( taruki_t( 'lg_2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-row","layout":{"type":"default"}} -->
<div class="wp-block-group td-row"><!-- wp:group {"className":"td-row__main","layout":{"type":"default"}} -->
<div class="wp-block-group td-row__main"><!-- wp:paragraph {"className":"td-row__name"} -->
<p class="td-row__name"><?php echo esc_html( taruki_t( 'lg_3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-row__note"} -->
<p class="td-row__note"><?php echo esc_html( taruki_t( 'lg_3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-row__price"} -->
<p class="td-row__price"><?php echo esc_html( taruki_t( 'lg_3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-row","layout":{"type":"default"}} -->
<div class="wp-block-group td-row"><!-- wp:group {"className":"td-row__main","layout":{"type":"default"}} -->
<div class="wp-block-group td-row__main"><!-- wp:paragraph {"className":"td-row__name"} -->
<p class="td-row__name"><?php echo esc_html( taruki_t( 'lg_4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-row__note"} -->
<p class="td-row__note"><?php echo esc_html( taruki_t( 'lg_4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-row__price"} -->
<p class="td-row__price"><?php echo esc_html( taruki_t( 'lg_4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-row","layout":{"type":"default"}} -->
<div class="wp-block-group td-row"><!-- wp:group {"className":"td-row__main","layout":{"type":"default"}} -->
<div class="wp-block-group td-row__main"><!-- wp:paragraph {"className":"td-row__name"} -->
<p class="td-row__name"><?php echo esc_html( taruki_t( 'lg_5_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-row__note"} -->
<p class="td-row__note"><?php echo esc_html( taruki_t( 'lg_5_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-row__price"} -->
<p class="td-row__price"><?php echo esc_html( taruki_t( 'lg_5_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-row","layout":{"type":"default"}} -->
<div class="wp-block-group td-row"><!-- wp:group {"className":"td-row__main","layout":{"type":"default"}} -->
<div class="wp-block-group td-row__main"><!-- wp:paragraph {"className":"td-row__name"} -->
<p class="td-row__name"><?php echo esc_html( taruki_t( 'lg_6_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-row__note"} -->
<p class="td-row__note"><?php echo esc_html( taruki_t( 'lg_6_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-row__price"} -->
<p class="td-row__price"><?php echo esc_html( taruki_t( 'lg_6_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"td-ledger__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide td-ledger__foot"><!-- wp:paragraph {"className":"td-ledger__note"} -->
<p class="td-ledger__note"><?php echo esc_html( taruki_t( 'lg_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo esc_html( taruki_t( 'lg_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
