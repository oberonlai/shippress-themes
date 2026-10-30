<?php
/**
 * Title: Page: cases
 * Slug: shirushi-customs/inner-cases
 * Categories: shirushi-customs
 * Inserter: no
 * Description: Inner page "cases": T1 head, intro, four case dossiers, close line.
 */
$img = get_theme_file_uri( 'assets/images/' );
// phpcs:ignore WordPress.Security.EscapeOutput
echo sc_inner_head( 'cases', 's5.webp', array( 5 ), '50% 60%', false );
?>

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-intro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-intro"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter"><?php echo esc_html( sc_t( 'cases_title' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sc-intro__grid"><!-- wp:paragraph {"className":"sc-lead sc-intro__p sp-reveal sp-reveal--up"} -->
<p class="sc-lead sc-intro__p sp-reveal sp-reveal--up"><?php echo esc_html( sc_t( 'cases_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-cases","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-cases"><!-- wp:group {"className":"sc-in sc-cases__grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in sc-cases__grid sp-stagger"><!-- wp:group {"className":"sc-card sc-card--case sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--case sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 'd4.webp' ); ?>" alt="<?php echo esc_attr( sc_t( 'case1_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"level":3,"className":"sc-card__t"} -->
<h3 class="wp-block-heading sc-card__t"><?php echo esc_html( sc_t( 'case1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p"><?php echo esc_html( sc_t( 'case1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 01 / 04 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-card sc-card--case sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--case sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 'd1.webp' ); ?>" alt="<?php echo esc_attr( sc_t( 'case2_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"level":3,"className":"sc-card__t"} -->
<h3 class="wp-block-heading sc-card__t"><?php echo esc_html( sc_t( 'case2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p"><?php echo esc_html( sc_t( 'case2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 02 / 04 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-card sc-card--case sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--case sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 'd2.webp' ); ?>" alt="<?php echo esc_attr( sc_t( 'case3_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"level":3,"className":"sc-card__t"} -->
<h3 class="wp-block-heading sc-card__t"><?php echo esc_html( sc_t( 'case3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p"><?php echo esc_html( sc_t( 'case3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 03 / 04 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-card sc-card--case sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--case sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 'd3.webp' ); ?>" alt="<?php echo esc_attr( sc_t( 'case4_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"level":3,"className":"sc-card__t"} -->
<h3 class="wp-block-heading sc-card__t"><?php echo esc_html( sc_t( 'case4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p"><?php echo esc_html( sc_t( 'case4_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 04 / 04 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-cta","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-cta"><!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:paragraph {"className":"sc-pill"} -->
<p class="sc-pill"><a href="/contact/">Open a file</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
