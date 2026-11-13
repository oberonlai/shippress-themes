<?php
/**
 * Title: Home: three collections
 * Slug: shoko-archives/front-cases
 * Categories: shoko-archives
 * Viewport Width: 1440
 * Description: A ruled heading and three tabbed photo cards (Law office, Clinic, Architects) with a short account each.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"cases","className":"sa-sec sa-sec--end","layout":{"type":"default"}} -->
<section id="cases" class="wp-block-group alignfull sa-sec sa-sec--end"><!-- wp:group {"className":"sa-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap"><!-- wp:heading {"className":"sa-h2"} -->
<h2 class="wp-block-heading sa-h2"><?php echo esc_html( shoko_archives_t( 'cs_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sa-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sa-cards sp-stagger"><!-- wp:group {"className":"sa-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"sa-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card__media"><!-- wp:paragraph {"className":"sa-tab"} -->
<p class="sa-tab"><?php echo esc_html( shoko_archives_t( 'cs1_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sa-card__img"} -->
<figure class="wp-block-image size-full sa-card__img"><img src="<?php echo shoko_archives_img( 'case-law' ); ?>" alt="<?php echo esc_attr( shoko_archives_t( 'alt_case-law' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"sa-card__t"} -->
<h3 class="wp-block-heading sa-card__t"><?php echo esc_html( shoko_archives_t( 'cs1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-card__p"} -->
<p class="sa-card__p"><?php echo esc_html( shoko_archives_t( 'cs1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-more"} -->
<p class="sa-more"><a href="/collections/"><?php echo esc_html( shoko_archives_t( 'read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"sa-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card__media"><!-- wp:paragraph {"className":"sa-tab"} -->
<p class="sa-tab"><?php echo esc_html( shoko_archives_t( 'cs2_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sa-card__img"} -->
<figure class="wp-block-image size-full sa-card__img"><img src="<?php echo shoko_archives_img( 'case-clinic' ); ?>" alt="<?php echo esc_attr( shoko_archives_t( 'alt_case-clinic' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"sa-card__t"} -->
<h3 class="wp-block-heading sa-card__t"><?php echo esc_html( shoko_archives_t( 'cs2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-card__p"} -->
<p class="sa-card__p"><?php echo esc_html( shoko_archives_t( 'cs2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-more"} -->
<p class="sa-more"><a href="/collections/"><?php echo esc_html( shoko_archives_t( 'read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"sa-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card__media"><!-- wp:paragraph {"className":"sa-tab"} -->
<p class="sa-tab"><?php echo esc_html( shoko_archives_t( 'cs3_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sa-card__img"} -->
<figure class="wp-block-image size-full sa-card__img"><img src="<?php echo shoko_archives_img( 'case-architects' ); ?>" alt="<?php echo esc_attr( shoko_archives_t( 'alt_case-architects' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"sa-card__t"} -->
<h3 class="wp-block-heading sa-card__t"><?php echo esc_html( shoko_archives_t( 'cs3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-card__p"} -->
<p class="sa-card__p"><?php echo esc_html( shoko_archives_t( 'cs3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-more"} -->
<p class="sa-more"><a href="/collections/"><?php echo esc_html( shoko_archives_t( 'read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
