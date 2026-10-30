<?php
/**
 * Title: Home: the desk
 * Slug: shirushi-customs/front-desk
 * Categories: shirushi-customs
 * Keywords: customs, broker, home
 * Viewport Width: 1440
 * Description: Bracket label, a heading and two paragraphs bottom-aligned to a tall photograph that runs flush to the right edge.
 */
$img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-desk","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-desk"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter"><?php echo esc_html( sc_t( 'desk_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-desk__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sc-desk__grid"><!-- wp:group {"className":"sc-desk__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-desk__text sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sc-h2"} -->
<h2 class="wp-block-heading sc-h2"><?php echo esc_html( sc_t( 'desk_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'desk_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'desk_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-pill"} -->
<p class="sc-pill"><a href="/about/"><?php echo esc_html( sc_t( 'desk_pill' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-desk__photo sc-ph"} -->
<figure class="wp-block-image size-full sc-desk__photo sc-ph"><img src="<?php echo esc_url( $img . 'h2.webp' ); ?>" alt="<?php echo esc_attr( sc_t( 'alt_h2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
