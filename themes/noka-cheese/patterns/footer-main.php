<?php
/**
 * Title: Footer
 * Slug: noka-cheese/footer-main
 * Categories: noka-cheese
 * Inserter: no
 * Viewport Width: 1440
 * Description: Stacked wordmark, address, hours and links with an up arrow on the right guide.
 */
?>
<!-- wp:group {"className":"nk-footer","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-footer"><!-- wp:group {"className":"nk-row nk-row--footer","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row nk-row--footer"><!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:heading {"level":2,"className":"nk-wordmark"} -->
<h2 class="wp-block-heading nk-wordmark">NOKA<br>CHEESE</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nk-addr"} -->
<p class="nk-addr"><?php echo wp_kses_post( noka_cheese_t( 'ft_addr_l1' ) ); ?><br><?php echo wp_kses_post( noka_cheese_t( 'ft_addr_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-addr"} -->
<p class="nk-addr"><?php echo wp_kses_post( noka_cheese_t( 'ft_h1' ) ); ?><br><?php echo wp_kses_post( noka_cheese_t( 'ft_h2' ) ); ?><br><?php echo wp_kses_post( noka_cheese_t( 'ft_h3' ) ); ?><br><?php echo wp_kses_post( noka_cheese_t( 'ft_h4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-addr"} -->
<p class="nk-addr"><a href="tel:+0021441822990"><?php echo wp_kses_post( noka_cheese_t( 'ft_phone' ) ); ?></a><br><a href="mailto:counter@nokacheese.example"><?php echo wp_kses_post( noka_cheese_t( 'ft_email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:html -->
<nav aria-label="<?php echo esc_attr( noka_cheese_t( 'ft_nav_label' ) ); ?>"><ul class="nk-footlinks"><li><a href="/cheeses/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_cheeses' ) ); ?></a></li><li><a href="/boards/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_boards' ) ); ?></a></li><li><a href="/how-we-cut/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_how' ) ); ?></a></li><li><a href="/tastings/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_tastings' ) ); ?></a></li><li><a href="/cellar/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_cellar' ) ); ?></a></li><li><a href="/makers/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_makers' ) ); ?></a></li><li><a href="/about/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_about' ) ); ?></a></li><li><a href="/visit/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_visit' ) ); ?></a></li><li><a href="/journal/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_journal' ) ); ?></a></li><li><a href="/newsletter/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_newsletter' ) ); ?></a></li><?php if ( class_exists( 'WooCommerce' ) ) : ?><li><a href="/shop/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_shop' ) ); ?></a></li><?php endif; ?><li><a href="/privacy/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_privacy' ) ); ?></a></li><li><a href="/terms/"><?php echo wp_kses_post( noka_cheese_t( 'ft_l_terms' ) ); ?></a></li></ul></nav>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-footbar","align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull nk-footbar"><!-- wp:paragraph {"className":"nk-copy"} -->
<p class="nk-copy"><?php echo wp_kses_post( noka_cheese_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="nk-top" href="#top" aria-label="<?php echo esc_attr( noka_cheese_t( 'ft_top' ) ); ?>"><svg width="40" height="50" viewBox="0 0 40 50" aria-hidden="true" focusable="false"><path d="M20 49V2M4 18 20 2l16 16" fill="none" stroke="currentColor" stroke-width="1"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
