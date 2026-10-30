<?php
/**
 * Title: Home: dark stage
 * Slug: shirushi-customs/front-stage
 * Categories: shirushi-customs
 * Keywords: customs, broker, home
 * Viewport Width: 1440
 * Description: Full-bleed dark documentary photo pinned behind a statement that rides up, with a timeline line of five stages along the bottom.
 */
$img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sc-stage sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-stage sp-parallax"><!-- wp:group {"className":"sc-stage__bg sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sc-stage__bg sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $img . 'w1.webp' ); ?>" alt="<?php echo esc_attr( sc_t( 'alt_w1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-stage__veil","layout":{"type":"default"}} -->
<div class="wp-block-group sc-stage__veil"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-stage__in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-stage__in"><!-- wp:heading {"level":1,"className":"sc-stage__h1"} -->
<h1 class="wp-block-heading sc-stage__h1"><?php echo sc_lines( 'stage_h1' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-stage__intro","layout":{"type":"default"}} -->
<div class="wp-block-group sc-stage__intro"><!-- wp:paragraph {"className":"sc-stage__p"} -->
<p class="sc-stage__p"><?php echo esc_html( sc_t( 'stage_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-pill sc-pill--w"} -->
<p class="sc-pill sc-pill--w"><a href="/process/"><?php echo esc_html( sc_t( 'stage_pill' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-line","layout":{"type":"default"}} -->
<div class="wp-block-group sc-line"><!-- wp:paragraph {"className":"sc-line__scroll"} -->
<p class="sc-line__scroll"><?php echo esc_html( sc_t( 'scroll' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-line__track","layout":{"type":"default"}} -->
<div class="wp-block-group sc-line__track"><?php for ( $i = 1; $i <= 5; $i++ ) : ?>
<!-- wp:paragraph {"className":"sc-line__tick"} -->
<p class="sc-line__tick"><span class="sc-n">0<?php echo (int) $i; ?></span> <span class="sc-w"><?php echo esc_html( sc_t( 'st' . $i ) ); ?></span></p>
<!-- /wp:paragraph -->
<?php endfor; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sc-line__cap"} -->
<p class="sc-line__cap"><?php echo esc_html( sc_t( 'st1' ) . ' / ' . sc_t( 'st2' ) . ' / ' . sc_t( 'st3' ) . ' / ' . sc_t( 'st4' ) . ' / ' . sc_t( 'st5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
