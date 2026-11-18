<?php
/**
 * Title: Home: people
 * Slug: taruki-distillery/front-people
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: Four 3:4 portraits in one row with name, role and a single line, staggered in.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--pale td-people","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--pale td-people"><!-- wp:group {"align":"wide","className":"td-people__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-people__head"><!-- wp:paragraph {"className":"td-caps sp-reveal sp-reveal--up"} -->
<p class="td-caps sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'pe_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"td-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading td-h2 sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'pe_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"td-people__row sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-people__row sp-stagger"><!-- wp:group {"className":"td-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-person sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taruki_img( 'img-09.webp' ); ?>" alt="<?php echo taruki_a( 'alt_09' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"td-person__n"} -->
<h3 class="wp-block-heading td-person__n"><?php echo esc_html( taruki_t( 'pe_1_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-caps td-person__r"} -->
<p class="td-caps td-person__r"><?php echo esc_html( taruki_t( 'pe_1_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-person__b"} -->
<p class="td-person__b"><?php echo esc_html( taruki_t( 'pe_1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-person sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taruki_img( 'img-10.webp' ); ?>" alt="<?php echo taruki_a( 'alt_10' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"td-person__n"} -->
<h3 class="wp-block-heading td-person__n"><?php echo esc_html( taruki_t( 'pe_2_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-caps td-person__r"} -->
<p class="td-caps td-person__r"><?php echo esc_html( taruki_t( 'pe_2_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-person__b"} -->
<p class="td-person__b"><?php echo esc_html( taruki_t( 'pe_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-person sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taruki_img( 'img-11.webp' ); ?>" alt="<?php echo taruki_a( 'alt_11' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"td-person__n"} -->
<h3 class="wp-block-heading td-person__n"><?php echo esc_html( taruki_t( 'pe_3_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-caps td-person__r"} -->
<p class="td-caps td-person__r"><?php echo esc_html( taruki_t( 'pe_3_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-person__b"} -->
<p class="td-person__b"><?php echo esc_html( taruki_t( 'pe_3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-person sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taruki_img( 'img-12.webp' ); ?>" alt="<?php echo taruki_a( 'alt_12' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"td-person__n"} -->
<h3 class="wp-block-heading td-person__n"><?php echo esc_html( taruki_t( 'pe_4_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-caps td-person__r"} -->
<p class="td-caps td-person__r"><?php echo esc_html( taruki_t( 'pe_4_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-person__b"} -->
<p class="td-person__b"><?php echo esc_html( taruki_t( 'pe_4_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-link td-people__more"} -->
<p class="td-link td-people__more"><a href="/people/"><?php echo esc_html( taruki_t( 'pe_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
