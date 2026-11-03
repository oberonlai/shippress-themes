<?php
/**
 * Title: Home: what a berth means
 * Slug: tomari-marina/front-statement
 * Categories: tomari-marina
 * Keywords: home, statement
 * Viewport Width: 1440
 * Description: A four-line statement at the left, a 4:5 photograph of hands on a cleat and two paragraphs at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-statement tm-section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-statement tm-section"><!-- wp:group {"className":"tm-statement__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tm-statement__grid"><!-- wp:group {"className":"tm-statement__head","layout":{"type":"default"}} -->
<div class="wp-block-group tm-statement__head"><!-- wp:heading {"level":2,"className":"tm-h2 sp-stagger"} -->
<h2 class="wp-block-heading tm-h2 sp-stagger"><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'front_statement_01' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'front_statement_02' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'front_statement_03' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'front_statement_04' ) ); ?></span></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-statement__side","layout":{"type":"default"}} -->
<div class="wp-block-group tm-statement__side"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-statement__photo"} -->
<figure class="wp-block-image size-large tm-statement__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-hands-cleat.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'front_statement_05' ) ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_statement_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_statement_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->