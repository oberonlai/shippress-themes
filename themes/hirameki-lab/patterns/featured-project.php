<?php
/**
 * Title: Home: featured project in three columns
 * Slug: hirameki-lab/featured-project
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Description: One project read in three short columns (question, what they built, what they learned) on the kouji field, with one large cut-out robot arm breaking above the field top edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"hl-feat","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-feat"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-feat__obj"} -->
<figure class="wp-block-image size-full hl-feat__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/arm-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_arm' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hl-feat__text","layout":{"type":"default"}} -->
<div class="wp-block-group hl-feat__text"><!-- wp:paragraph {"className":"hl-eyebrow"} -->
<p class="hl-eyebrow"><?php echo esc_html( hirameki_lab_t( 'feat_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hl-feat__title"} -->
<h2 class="wp-block-heading hl-feat__title"><?php echo esc_html( hirameki_lab_t( 'feat_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hl-feat__cols","layout":{"type":"default"}} -->
<div class="wp-block-group hl-feat__cols"><!-- wp:group {"className":"hl-feat__col","layout":{"type":"default"}} -->
<div class="wp-block-group hl-feat__col"><!-- wp:paragraph {"className":"hl-feat__label"} -->
<p class="hl-feat__label"><?php echo esc_html( hirameki_lab_t( 'feat_q_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-feat__p"} -->
<p class="hl-feat__p"><?php echo esc_html( hirameki_lab_t( 'feat_q' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-feat__col","layout":{"type":"default"}} -->
<div class="wp-block-group hl-feat__col"><!-- wp:paragraph {"className":"hl-feat__label"} -->
<p class="hl-feat__label"><?php echo esc_html( hirameki_lab_t( 'feat_b_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-feat__p"} -->
<p class="hl-feat__p"><?php echo esc_html( hirameki_lab_t( 'feat_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-feat__col","layout":{"type":"default"}} -->
<div class="wp-block-group hl-feat__col"><!-- wp:paragraph {"className":"hl-feat__label"} -->
<p class="hl-feat__label"><?php echo esc_html( hirameki_lab_t( 'feat_l_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-feat__p"} -->
<p class="hl-feat__p"><?php echo esc_html( hirameki_lab_t( 'feat_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
