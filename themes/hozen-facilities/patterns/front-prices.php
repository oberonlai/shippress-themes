<?php
/**
 * Title: Home: prices
 * Slug: hozen-facilities/front-prices
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Lockup and a full-width price table with all seven items; it stacks on phones.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"prices","className":"hz-sec hz-pricesec","layout":{"type":"default"}} -->
<section id="prices" class="wp-block-group alignfull hz-sec hz-pricesec">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'pr_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'pr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'pr_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<table class="hz-prices"><thead><tr><th scope="col"><?php echo esc_html( hozen_facilities_t( 'pr_h_n' ) ); ?></th><th scope="col"><?php echo esc_html( hozen_facilities_t( 'pr_h_s' ) ); ?></th><th scope="col"><?php echo esc_html( hozen_facilities_t( 'pr_h_i' ) ); ?></th><th scope="col"><?php echo esc_html( hozen_facilities_t( 'pr_h_p' ) ); ?></th></tr></thead><tbody><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_n' ) ); ?>" class="hz-prices__n">01</td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_s' ) ); ?>" class="hz-prices__s"><?php echo esc_html( hozen_facilities_t( 'price1_s' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_i' ) ); ?>" class="hz-prices__i"><?php echo esc_html( hozen_facilities_t( 'price1_i' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_p' ) ); ?>" class="hz-prices__p"><?php echo esc_html( hozen_facilities_t( 'price1_p' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_n' ) ); ?>" class="hz-prices__n">02</td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_s' ) ); ?>" class="hz-prices__s"><?php echo esc_html( hozen_facilities_t( 'price2_s' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_i' ) ); ?>" class="hz-prices__i"><?php echo esc_html( hozen_facilities_t( 'price2_i' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_p' ) ); ?>" class="hz-prices__p"><?php echo esc_html( hozen_facilities_t( 'price2_p' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_n' ) ); ?>" class="hz-prices__n">03</td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_s' ) ); ?>" class="hz-prices__s"><?php echo esc_html( hozen_facilities_t( 'price3_s' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_i' ) ); ?>" class="hz-prices__i"><?php echo esc_html( hozen_facilities_t( 'price3_i' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_p' ) ); ?>" class="hz-prices__p"><?php echo esc_html( hozen_facilities_t( 'price3_p' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_n' ) ); ?>" class="hz-prices__n">04</td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_s' ) ); ?>" class="hz-prices__s"><?php echo esc_html( hozen_facilities_t( 'price4_s' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_i' ) ); ?>" class="hz-prices__i"><?php echo esc_html( hozen_facilities_t( 'price4_i' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_p' ) ); ?>" class="hz-prices__p"><?php echo esc_html( hozen_facilities_t( 'price4_p' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_n' ) ); ?>" class="hz-prices__n">05</td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_s' ) ); ?>" class="hz-prices__s"><?php echo esc_html( hozen_facilities_t( 'price5_s' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_i' ) ); ?>" class="hz-prices__i"><?php echo esc_html( hozen_facilities_t( 'price5_i' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_p' ) ); ?>" class="hz-prices__p"><?php echo esc_html( hozen_facilities_t( 'price5_p' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_n' ) ); ?>" class="hz-prices__n">06</td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_s' ) ); ?>" class="hz-prices__s"><?php echo esc_html( hozen_facilities_t( 'price6_s' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_i' ) ); ?>" class="hz-prices__i"><?php echo esc_html( hozen_facilities_t( 'price6_i' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_p' ) ); ?>" class="hz-prices__p"><?php echo esc_html( hozen_facilities_t( 'price6_p' ) ); ?></td></tr><tr><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_n' ) ); ?>" class="hz-prices__n">07</td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_s' ) ); ?>" class="hz-prices__s"><?php echo esc_html( hozen_facilities_t( 'price7_s' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_i' ) ); ?>" class="hz-prices__i"><?php echo esc_html( hozen_facilities_t( 'price7_i' ) ); ?></td><td data-label="<?php echo esc_attr( hozen_facilities_t( 'pr_h_p' ) ); ?>" class="hz-prices__p"><?php echo esc_html( hozen_facilities_t( 'price7_p' ) ); ?></td></tr></tbody></table>
<!-- /wp:html -->

<!-- wp:group {"className":"hz-pricenote","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pricenote">
<!-- wp:paragraph {"className":"hz-pricenote__p"} -->
<p class="hz-pricenote__p"><?php echo esc_html( hozen_facilities_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-linkrow hz-linkrow--narrow"} -->
<p class="hz-linkrow hz-linkrow--narrow"><a href="<?php echo esc_url( home_url( '/prices/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'pr_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
