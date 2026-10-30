<?php
/**
 * Title: Home: what you prepare
 * Slug: shirushi-customs/front-prepare
 * Categories: shirushi-customs
 * Keywords: customs, broker, home
 * Viewport Width: 1440
 * Description: A tinted band: a high-key flat-lay photograph beside a ruled list of the six documents the client prepares.
 */
$img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-prep","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-prep"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter"><?php echo esc_html( sc_t( 'prep_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in sc-prep__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in sc-prep__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-ph sc-ph--r32 sc-prep__photo"} -->
<figure class="wp-block-image size-full sc-ph sc-ph--r32 sc-prep__photo"><img src="<?php echo esc_url( $img . 'p1.webp' ); ?>" alt="<?php echo esc_attr( sc_t( 'alt_p1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-prep__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-prep__text sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-h2"} -->
<h2 class="wp-block-heading sc-h2"><?php echo esc_html( sc_t( 'prep_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-lead"} -->
<p class="sc-lead"><?php echo esc_html( sc_t( 'prep_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group sc-rows"><?php for ( $i = 1; $i <= 6; $i++ ) : ?>

<!-- wp:group {"className":"sc-row","layout":{"type":"default"}} -->
<div class="wp-block-group sc-row"><!-- wp:paragraph {"className":"sc-row__t"} -->
<p class="sc-row__t"><?php echo esc_html( sc_t( 'prep' . $i . '_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-row__n"} -->
<p class="sc-row__n"><?php echo esc_html( sc_t( 'prep' . $i . '_n' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endfor; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sc-pill"} -->
<p class="sc-pill"><a href="/prepare/"><?php echo esc_html( sc_t( 'prep_pill' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
