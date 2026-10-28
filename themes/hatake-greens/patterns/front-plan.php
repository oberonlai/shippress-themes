<?php
/**
 * Title: Home: the single plan
 * Slug: hatake-greens/front-plan
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: A sage-white card with the standard crate price, four facts and a photo, and the full-width price table below.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"plan","className":"hg-sec hg-plan","layout":{"type":"default"}} -->
<section id="plan" class="wp-block-group alignfull hg-sec hg-plan">
<!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap">
<!-- wp:group {"className":"hg-plan__card","layout":{"type":"default"}} -->
<div class="wp-block-group hg-plan__card">
<!-- wp:group {"className":"hg-plan__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-plan__txt">
<!-- wp:paragraph {"className":"hg-label sp-reveal sp-reveal--up"} -->
<p class="hg-label sp-reveal sp-reveal--up"><?php echo esc_html( hatake_greens_t( 'plan_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hg-h2 hg-h2--plan sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hg-h2 hg-h2--plan sp-reveal sp-reveal--up"><?php echo esc_html( hatake_greens_t( 'plan_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-prose"} -->
<p class="hg-prose"><?php echo esc_html( hatake_greens_t( 'plan_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"hg-facts"} -->
<ul class="wp-block-list hg-facts"><!-- wp:list-item -->
<li><?php echo esc_html( hatake_greens_t( 'plan_f1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hatake_greens_t( 'plan_f2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hatake_greens_t( 'plan_f3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hatake_greens_t( 'plan_f4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"className":"hg-btns"} -->
<div class="wp-block-buttons hg-btns"><!-- wp:button {"className":"hg-pill hg-pill--solid"} -->
<div class="wp-block-button hg-pill hg-pill--solid"><a class="wp-block-button__link wp-element-button" href="/waitlist/"><?php echo esc_html( hatake_greens_t( 'plan_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-plan__img"} -->
<figure class="wp-block-image size-full hg-plan__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hk-12.webp' ) ); ?>" alt="<?php echo esc_attr( hatake_greens_t( 'alt_hk-12' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:table {"className":"hg-table"} -->
<figure class="wp-block-table hg-table"><table><thead><tr><th><?php echo esc_html( hatake_greens_t( 'tbl_item' ) ); ?></th><th><?php echo esc_html( hatake_greens_t( 'tbl_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( hatake_greens_t( 'tbl_1' ) ); ?></td><td><?php echo esc_html( hatake_greens_t( 'tbl_1p' ) ); ?></td></tr><tr><td><?php echo esc_html( hatake_greens_t( 'tbl_2' ) ); ?></td><td><?php echo esc_html( hatake_greens_t( 'tbl_2p' ) ); ?></td></tr><tr><td><?php echo esc_html( hatake_greens_t( 'tbl_3' ) ); ?></td><td><?php echo esc_html( hatake_greens_t( 'tbl_3p' ) ); ?></td></tr><tr><td><?php echo esc_html( hatake_greens_t( 'tbl_4' ) ); ?></td><td><?php echo esc_html( hatake_greens_t( 'tbl_4p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
