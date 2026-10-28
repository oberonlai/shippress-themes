<?php
/**
 * Title: Footer: wordmark marquee
 * Slug: kama-cookware/footer-main
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Inserter: no
 * Description: Giant two-tone wordmark marquee with thumbnail pills, then three columns.
 */
?>
<!-- wp:group {"align":"full","className":"km-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull km-footer"><!-- wp:html -->
<div class="km-mq sp-marquee" role="img" aria-label="<?php echo esc_attr( kama_cookware_t( 'mq_label' ) ); ?>"><div class="km-mq__row"><span class="km-mq__word">Kama</span><span class="km-mq__pill" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/t1.webp' ) ); ?>" alt="" loading="lazy"/></span><span class="km-mq__word"><em>Cookware</em></span><span class="km-mq__pill" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/t2.webp' ) ); ?>" alt="" loading="lazy"/></span><span class="km-mq__word">Kama</span><span class="km-mq__pill" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/t3.webp' ) ); ?>" alt="" loading="lazy"/></span><span class="km-mq__word">Kama <em>Cookware</em></span><span class="km-mq__pill" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/t1.webp' ) ); ?>" alt="" loading="lazy"/></span></div><div class="km-mq__row" aria-hidden="true"><span class="km-mq__word">Kama</span><span class="km-mq__pill" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/t1.webp' ) ); ?>" alt="" loading="lazy"/></span><span class="km-mq__word"><em>Cookware</em></span><span class="km-mq__pill" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/t2.webp' ) ); ?>" alt="" loading="lazy"/></span><span class="km-mq__word">Kama</span><span class="km-mq__pill" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/t3.webp' ) ); ?>" alt="" loading="lazy"/></span><span class="km-mq__word">Kama <em>Cookware</em></span><span class="km-mq__pill" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/t1.webp' ) ); ?>" alt="" loading="lazy"/></span></div></div>
<!-- /wp:html -->

<!-- wp:group {"className":"km-ft__cols","layout":{"type":"default"}} -->
<div class="wp-block-group km-ft__cols"><!-- wp:group {"className":"km-ft__col","layout":{"type":"default"}} -->
<div class="wp-block-group km-ft__col"><!-- wp:paragraph {"className":"km-ft__h"} -->
<p class="km-ft__h"><?php echo esc_html( kama_cookware_t( 'ft_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-ft__t"} -->
<p class="km-ft__t"><?php echo esc_html( kama_cookware_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-ft__t"} -->
<p class="km-ft__t"><?php echo esc_html( kama_cookware_t( 'ft_since' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-ft__col","layout":{"type":"default"}} -->
<div class="wp-block-group km-ft__col"><!-- wp:paragraph {"className":"km-ft__h"} -->
<p class="km-ft__h"><?php echo esc_html( kama_cookware_t( 'ft_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-ft__t"} -->
<p class="km-ft__t"><?php echo esc_html( kama_cookware_t( 'ft_h2a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-ft__t"} -->
<p class="km-ft__t"><?php echo esc_html( kama_cookware_t( 'ft_h2b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-ft__t"} -->
<p class="km-ft__t"><?php echo esc_html( kama_cookware_t( 'ft_h2c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-ft__col","layout":{"type":"default"}} -->
<div class="wp-block-group km-ft__col"><!-- wp:paragraph {"className":"km-ft__h"} -->
<p class="km-ft__h"><?php echo esc_html( kama_cookware_t( 'ft_h3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-ft__t"} -->
<p class="km-ft__t"><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'nav_1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-ft__t"} -->
<p class="km-ft__t"><a href="<?php echo esc_url( home_url( '/repair-service/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'nav_4' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-ft__t"} -->
<p class="km-ft__t"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'nav_5' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"km-ft__legal"} -->
<p class="km-ft__legal"><?php echo esc_html( kama_cookware_t( 'ft_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
