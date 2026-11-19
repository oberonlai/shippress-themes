<?php
/**
 * Title: Home: the price table
 * Slug: yuzuriha-retreat/front-prices
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Seven price rows on hairlines: retreat, what is included, price. Stacks on narrow screens.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--stone yr-sec--prices","layout":{"type":"default"},"anchor":"prices"} -->
<section id="prices" class="wp-block-group yr-sec yr-sec--stone yr-sec--prices"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'price_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yr-h2"} -->
<h2 class="wp-block-heading yr-h2"><?php echo esc_html( yuzuriha_retreat_t( 'price_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"yr-table"} -->
<figure class="wp-block-table yr-table"><table><thead><tr><th><?php echo esc_html( yuzuriha_retreat_t( 'th_retreat' ) ); ?></th><th><?php echo esc_html( yuzuriha_retreat_t( 'th_included' ) ); ?></th><th><?php echo esc_html( yuzuriha_retreat_t( 'th_price' ) ); ?></th></tr></thead><tbody><tr><td class="yr-pr__n"><?php echo esc_html( yuzuriha_retreat_t( 'pr1_n' ) ); ?></td><td class="yr-pr__d"><?php echo esc_html( yuzuriha_retreat_t( 'pr1_d' ) ); ?></td><td class="yr-pr__p"><?php echo esc_html( yuzuriha_retreat_t( 'pr1_p' ) ); ?></td></tr><tr><td class="yr-pr__n"><?php echo esc_html( yuzuriha_retreat_t( 'pr2_n' ) ); ?></td><td class="yr-pr__d"><?php echo esc_html( yuzuriha_retreat_t( 'pr2_d' ) ); ?></td><td class="yr-pr__p"><?php echo esc_html( yuzuriha_retreat_t( 'pr2_p' ) ); ?></td></tr><tr><td class="yr-pr__n"><?php echo esc_html( yuzuriha_retreat_t( 'pr3_n' ) ); ?></td><td class="yr-pr__d"><?php echo esc_html( yuzuriha_retreat_t( 'pr3_d' ) ); ?></td><td class="yr-pr__p"><?php echo esc_html( yuzuriha_retreat_t( 'pr3_p' ) ); ?></td></tr><tr><td class="yr-pr__n"><?php echo esc_html( yuzuriha_retreat_t( 'pr4_n' ) ); ?></td><td class="yr-pr__d"><?php echo esc_html( yuzuriha_retreat_t( 'pr4_d' ) ); ?></td><td class="yr-pr__p"><?php echo esc_html( yuzuriha_retreat_t( 'pr4_p' ) ); ?></td></tr><tr><td class="yr-pr__n"><?php echo esc_html( yuzuriha_retreat_t( 'pr5_n' ) ); ?></td><td class="yr-pr__d"><?php echo esc_html( yuzuriha_retreat_t( 'pr5_d' ) ); ?></td><td class="yr-pr__p"><?php echo esc_html( yuzuriha_retreat_t( 'pr5_p' ) ); ?></td></tr><tr><td class="yr-pr__n"><?php echo esc_html( yuzuriha_retreat_t( 'pr6_n' ) ); ?></td><td class="yr-pr__d"><?php echo esc_html( yuzuriha_retreat_t( 'pr6_d' ) ); ?></td><td class="yr-pr__p"><?php echo esc_html( yuzuriha_retreat_t( 'pr6_p' ) ); ?></td></tr><tr><td class="yr-pr__n"><?php echo esc_html( yuzuriha_retreat_t( 'pr7_n' ) ); ?></td><td class="yr-pr__d"><?php echo esc_html( yuzuriha_retreat_t( 'pr7_d' ) ); ?></td><td class="yr-pr__p"><?php echo esc_html( yuzuriha_retreat_t( 'pr7_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"yr-note"} -->
<p class="yr-note"><?php echo esc_html( yuzuriha_retreat_t( 'price_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-more yr-more--left"} -->
<p class="yr-more yr-more--left"><a href="<?php echo yuzuriha_retreat_url( '/prices/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'price_link' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
