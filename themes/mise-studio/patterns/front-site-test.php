<?php
/**
 * Title: Home: how a layout is tested on site
 * Slug: mise-studio/front-site-test
 * Categories: mise-studio
 * Keywords: method, masonry
 * Viewport Width: 1440
 * Description: An asymmetric masonry of a tall and a wide photograph beside a short text sheet, with three flush bordered cells (Tape, Walk, Adjust) underneath.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"site-test","className":"ms-sec ms-sec--test","layout":{"type":"default"}} -->
<section id="site-test" class="wp-block-group alignfull ms-sec ms-sec--test"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'st_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-mason","layout":{"type":"default"}} -->
<div class="wp-block-group ms-mason"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-mason__tall"} -->
<figure class="wp-block-image size-full ms-mason__tall"><img src="<?php echo mise_studio_img( 'test-mockup' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_test-mockup' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ms-mason__right","layout":{"type":"default"}} -->
<div class="wp-block-group ms-mason__right"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-mason__wide"} -->
<figure class="wp-block-image size-full ms-mason__wide"><img src="<?php echo mise_studio_img( 'test-walk' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_test-walk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ms-sheet ms-sheet--sm sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--sm sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"ms-h3"} -->
<h3 class="wp-block-heading ms-h3"><?php echo esc_html( mise_studio_t( 'st_h3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( mise_studio_t( 'st_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-cells sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cells sp-stagger"><!-- wp:group {"className":"ms-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cell sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ms-cell__label"} -->
<p class="ms-cell__label"><?php echo esc_html( mise_studio_t( 'st_c1l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ms-cell__name"} -->
<h3 class="wp-block-heading ms-cell__name"><?php echo esc_html( mise_studio_t( 'st_c1n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-cell__line"} -->
<p class="ms-cell__line"><?php echo esc_html( mise_studio_t( 'st_c1p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cell sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ms-cell__label"} -->
<p class="ms-cell__label"><?php echo esc_html( mise_studio_t( 'st_c2l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ms-cell__name"} -->
<h3 class="wp-block-heading ms-cell__name"><?php echo esc_html( mise_studio_t( 'st_c2n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-cell__line"} -->
<p class="ms-cell__line"><?php echo esc_html( mise_studio_t( 'st_c2p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cell sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ms-cell__label"} -->
<p class="ms-cell__label"><?php echo esc_html( mise_studio_t( 'st_c3l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ms-cell__name"} -->
<h3 class="wp-block-heading ms-cell__name"><?php echo esc_html( mise_studio_t( 'st_c3n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-cell__line"} -->
<p class="ms-cell__line"><?php echo esc_html( mise_studio_t( 'st_c3p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ms-dot ms-dot--end"} -->
<p class="ms-dot ms-dot--end"><a href="/site-test/"><?php echo esc_html( mise_studio_t( 'st_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
