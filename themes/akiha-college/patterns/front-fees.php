<?php
/**
 * Title: Home: fees and intakes
 * Slug: akiha-college/front-fees
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Description: T2: the six-row fee table full width of the column, price column right-aligned, then both intakes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"ak-sec ak-rail ak-rail--fees","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull ak-sec ak-rail ak-rail--fees"><!-- wp:group {"className":"ak-rail__side","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__side"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akiha_college_t( 'lbl_fees' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-viewall"} -->
<p class="ak-viewall"><a class="ak-viewall__link" href="<?php echo akiha_college_url( '/fees/' ); ?>"><?php echo esc_html( akiha_college_t( 'all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-rail__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rail__col"><!-- wp:heading {"level":2,"className":"ak-h2"} -->
<h2 class="wp-block-heading ak-h2"><?php echo esc_html( akiha_college_t( 'fees_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"ak-fees"} -->
<figure class="wp-block-table ak-fees"><table class="has-fixed-layout"><tbody><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee1_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee1_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee1_p' ) ); ?></td></tr><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee2_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee2_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee2_p' ) ); ?></td></tr><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee3_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee3_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee3_p' ) ); ?></td></tr><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee4_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee4_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee4_p' ) ); ?></td></tr><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee5_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee5_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee5_p' ) ); ?></td></tr><tr><td><span class="ak-fee__n"><?php echo esc_html( akiha_college_t( 'fee6_n' ) ); ?></span> <span class="ak-fee__d"><?php echo esc_html( akiha_college_t( 'fee6_d' ) ); ?></span></td><td class="ak-fee__p"><?php echo esc_html( akiha_college_t( 'fee6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"ak-intake"} -->
<p class="ak-intake"><?php echo esc_html( akiha_college_t( 'int1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-intake"} -->
<p class="ak-intake"><?php echo esc_html( akiha_college_t( 'int2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-intake"} -->
<p class="ak-intake"><?php echo esc_html( akiha_college_t( 'int3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->