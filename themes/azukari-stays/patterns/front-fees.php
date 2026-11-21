<?php
/**
 * Title: Home: fees and a worked payout month
 * Slug: azukari-stays/front-fees
 * Categories: azukari-stays
 * Keywords: holiday let, property management, owners
 * Viewport Width: 1440
 * Description: Left rail with giant word, fee table, payout explanation and a worked statement.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"sheet","align":"full","className":"az-fees-sec"} -->
<section id="sheet" class="wp-block-group alignfull az-fees-sec"><!-- wp:group {"className":"az-rail"} -->
<div class="wp-block-group az-rail"><!-- wp:group {"className":"az-fees-head sp-reveal sp-reveal--up"} -->
<div class="wp-block-group az-fees-head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"az-giant"} -->
<p class="az-giant"><?php echo esc_html( azukari_stays_t( 'fees_giant' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"az-labrow"} -->
<div class="wp-block-group az-labrow"><!-- wp:paragraph {"className":"az-lab"} -->
<p class="az-lab"><?php echo esc_html( azukari_stays_t( 'fees_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:separator {"className":"az-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity az-hair"/>
<!-- /wp:separator -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"az-body az-fees-intro"} -->
<p class="az-body az-fees-intro"><?php echo esc_html( azukari_stays_t( 'fees_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:table {"className":"az-fees"} -->
<figure class="wp-block-table az-fees"><table><thead><tr><th><?php echo esc_html( azukari_stays_t( 'fee_th1' ) ); ?></th><th><?php echo esc_html( azukari_stays_t( 'fee_th2' ) ); ?></th><th><?php echo esc_html( azukari_stays_t( 'fee_th3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( azukari_stays_t( 'fee1_i' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee1_c' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( azukari_stays_t( 'fee2_i' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee2_c' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( azukari_stays_t( 'fee3_i' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee3_c' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( azukari_stays_t( 'fee4_i' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee4_c' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( azukari_stays_t( 'fee5_i' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee5_c' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( azukari_stays_t( 'fee6_i' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee6_c' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee6_p' ) ); ?></td></tr><tr><td><?php echo esc_html( azukari_stays_t( 'fee7_i' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee7_c' ) ); ?></td><td><?php echo esc_html( azukari_stays_t( 'fee7_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"az-small"} -->
<p class="az-small"><?php echo esc_html( azukari_stays_t( 'fees_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"az-fees-two"} -->
<div class="wp-block-group az-fees-two"><!-- wp:group {"className":"az-fees-how"} -->
<div class="wp-block-group az-fees-how"><!-- wp:paragraph {"className":"az-body"} -->
<p class="az-body"><?php echo esc_html( azukari_stays_t( 'pay_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-go"} -->
<p class="az-go"><a href="#"><?php echo esc_html( azukari_stays_t( 'go_fees' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-stmt"} -->
<div class="wp-block-group az-stmt"><!-- wp:paragraph {"className":"az-lab"} -->
<p class="az-lab"><?php echo esc_html( azukari_stays_t( 'stmt_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"az-h3"} -->
<h3 class="wp-block-heading az-h3"><?php echo esc_html( azukari_stays_t( 'stmt_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-body az-stmt__intro"} -->
<p class="az-body az-stmt__intro"><?php echo esc_html( azukari_stays_t( 'stmt_intro' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"az-stmt__line"} -->
<div class="wp-block-group az-stmt__line"><!-- wp:paragraph {"className":"az-stmt__k"} -->
<p class="az-stmt__k"><?php echo esc_html( azukari_stays_t( 'stmt_k1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-stmt__v"} -->
<p class="az-stmt__v"><?php echo esc_html( azukari_stays_t( 'stmt_v1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-stmt__line"} -->
<div class="wp-block-group az-stmt__line"><!-- wp:paragraph {"className":"az-stmt__k"} -->
<p class="az-stmt__k"><?php echo esc_html( azukari_stays_t( 'stmt_k2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-stmt__v"} -->
<p class="az-stmt__v"><?php echo esc_html( azukari_stays_t( 'stmt_v2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-stmt__line"} -->
<div class="wp-block-group az-stmt__line"><!-- wp:paragraph {"className":"az-stmt__k"} -->
<p class="az-stmt__k"><?php echo esc_html( azukari_stays_t( 'stmt_k3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-stmt__v"} -->
<p class="az-stmt__v"><?php echo esc_html( azukari_stays_t( 'stmt_v3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-stmt__line"} -->
<div class="wp-block-group az-stmt__line"><!-- wp:paragraph {"className":"az-stmt__k"} -->
<p class="az-stmt__k"><?php echo esc_html( azukari_stays_t( 'stmt_k4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-stmt__v"} -->
<p class="az-stmt__v"><?php echo esc_html( azukari_stays_t( 'stmt_v4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-stmt__line"} -->
<div class="wp-block-group az-stmt__line"><!-- wp:paragraph {"className":"az-stmt__k"} -->
<p class="az-stmt__k"><?php echo esc_html( azukari_stays_t( 'stmt_k5' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-stmt__v"} -->
<p class="az-stmt__v"><?php echo esc_html( azukari_stays_t( 'stmt_v5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-stmt__total"} -->
<div class="wp-block-group az-stmt__total"><!-- wp:paragraph {"className":"az-stmt__tk"} -->
<p class="az-stmt__tk"><?php echo esc_html( azukari_stays_t( 'stmt_tk' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-stmt__tv"} -->
<p class="az-stmt__tv">€2,448.40</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"az-small"} -->
<p class="az-small"><?php echo esc_html( azukari_stays_t( 'stmt_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"az-btnrow"} -->
<div class="wp-block-buttons az-btnrow"><!-- wp:button {"className":"az-cta"} -->
<div class="wp-block-button az-cta"><a class="wp-block-button__link wp-element-button" href="#consult"><?php echo esc_html( azukari_stays_t( 'cta_main' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
