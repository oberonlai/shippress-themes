<?php
/**
 * Title: Home: three ways in
 * Slug: kotoba-language/front-paths
 * Categories: kotoba-language
 * Description: Audience gateway: one lead path with arcs and a circular photo, two lighter rows.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kl-sec kl-paths","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-paths"><!-- wp:group {"className":"kl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap"><!-- wp:group {"className":"kl-head" id="paths","layout":{"type":"default"}} -->
<div class="wp-block-group kl-head"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'paths_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kl-h2"} -->
<h2 class="wp-block-heading kl-h2"><?php echo esc_html( kotoba_language_t( 'paths_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-lede"} -->
<p class="kl-lede"><?php echo esc_html( kotoba_language_t( 'paths_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-pathlist sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kl-pathlist sp-stagger"><!-- wp:group {"className":"kl-path kl-path--lead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kl-path kl-path--lead sp-reveal sp-reveal--up"><!-- wp:group {"className":"kl-path__txt","layout":{"type":"default"}} -->
<div class="wp-block-group kl-path__txt"><!-- wp:paragraph {"className":"kl-path__n"} -->
<p class="kl-path__n">01 · <?php echo esc_html( kotoba_language_t( 'p1_tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kl-path__h"} -->
<h3 class="wp-block-heading kl-path__h"><?php echo esc_html( kotoba_language_t( 'p1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-path__p"} -->
<p class="kl-path__p"><?php echo esc_html( kotoba_language_t( 'p1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-textlink"} -->
<p class="kl-textlink"><a href="/pathways-work/"><?php echo esc_html( kotoba_language_t( 'p_more' ) ); ?> →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-flank kl-flank--circle","layout":{"type":"default"}} -->
<div class="wp-block-group kl-flank kl-flank--circle"><!-- wp:html -->
<?php echo kotoba_language_arc( 'l' ); // phpcs:ignore ?>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-circle"} -->
<figure class="wp-block-image size-full kl-circle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s3.webp' ) ); ?>" alt="<?php echo esc_attr( kotoba_language_t( 'alt_s3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<?php echo kotoba_language_arc( 'r' ); // phpcs:ignore ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-path kl-path--light sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kl-path kl-path--light sp-reveal sp-reveal--up"><!-- wp:group {"className":"kl-path__txt","layout":{"type":"default"}} -->
<div class="wp-block-group kl-path__txt"><!-- wp:paragraph {"className":"kl-path__n"} -->
<p class="kl-path__n">02 · <?php echo esc_html( kotoba_language_t( 'p2_tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kl-path__h"} -->
<h3 class="wp-block-heading kl-path__h"><?php echo esc_html( kotoba_language_t( 'p2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-path__p"} -->
<p class="kl-path__p"><?php echo esc_html( kotoba_language_t( 'p2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-textlink"} -->
<p class="kl-textlink"><a href="/pathways-settlement/"><?php echo esc_html( kotoba_language_t( 'p_more' ) ); ?> →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-path__img"} -->
<figure class="wp-block-image size-full kl-path__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s4.webp' ) ); ?>" alt="<?php echo esc_attr( kotoba_language_t( 'alt_s4' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-path kl-path--light sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kl-path kl-path--light sp-reveal sp-reveal--up"><!-- wp:group {"className":"kl-path__txt","layout":{"type":"default"}} -->
<div class="wp-block-group kl-path__txt"><!-- wp:paragraph {"className":"kl-path__n"} -->
<p class="kl-path__n">03 · <?php echo esc_html( kotoba_language_t( 'p3_tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kl-path__h"} -->
<h3 class="wp-block-heading kl-path__h"><?php echo esc_html( kotoba_language_t( 'p3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-path__p"} -->
<p class="kl-path__p"><?php echo esc_html( kotoba_language_t( 'p3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-textlink"} -->
<p class="kl-textlink"><a href="/pathways-exams/"><?php echo esc_html( kotoba_language_t( 'p_more' ) ); ?> →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-path__img"} -->
<figure class="wp-block-image size-full kl-path__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s5.webp' ) ); ?>" alt="<?php echo esc_attr( kotoba_language_t( 'alt_s5' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->