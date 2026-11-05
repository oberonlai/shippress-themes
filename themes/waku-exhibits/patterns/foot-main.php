<?php
/**
 * Title: Footer
 * Slug: waku-exhibits/foot-main
 * Categories: waku-exhibits
 * Keywords: exhibition, stand, quote, landing
 * Viewport Width: 1440
 * Description: Four-column footer on ink: address and hours, anchors, pages and legal.
 */
?>
<!-- wp:group {"align":"full","className":"wk-foot","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-foot"><!-- wp:group {"className":"wk-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group wk-foot__grid"><!-- wp:group {"className":"wk-foot__col wk-foot__col--brand","layout":{"type":"default"}} -->
<div class="wp-block-group wk-foot__col wk-foot__col--brand"><!-- wp:site-title {"level":0,"className":"wk-foot__mark"} /-->

<!-- wp:paragraph {"className":"wk-foot__p"} -->
<p class="wk-foot__p"><?php echo esc_html( wk_t( 'f_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-foot__p"} -->
<p class="wk-foot__p"><?php echo esc_html( wk_t( 'f_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-foot__p"} -->
<p class="wk-foot__p">+00 20 4100 7720<br><a href="mailto:quotes@waku-exhibits.example">quotes@waku-exhibits.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group wk-foot__col"><!-- wp:paragraph {"className":"wk-foot__h"} -->
<p class="wk-foot__h"><?php echo esc_html( wk_t( 'f_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-foot__list"} -->
<p class="wk-foot__list"><a href="/#halls"><?php echo esc_html( wk_t( 'f_a_halls' ) ); ?></a><br><a href="/#planning-hour"><?php echo esc_html( wk_t( 'f_a_hour' ) ); ?></a><br><a href="/#prices"><?php echo esc_html( wk_t( 'f_a_prices' ) ); ?></a><br><a href="/#stories"><?php echo esc_html( wk_t( 'f_a_stories' ) ); ?></a><br><a href="/contact/#request"><?php echo esc_html( wk_t( 'f_a_req' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group wk-foot__col"><!-- wp:paragraph {"className":"wk-foot__h"} -->
<p class="wk-foot__h"><?php echo esc_html( wk_t( 'f_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-foot__list"} -->
<p class="wk-foot__list"><a href="/about/"><?php echo esc_html( wk_t( 'f_p_about' ) ); ?></a><br><a href="/halls/"><?php echo esc_html( wk_t( 'f_p_halls' ) ); ?></a><br><a href="/stand-types/"><?php echo esc_html( wk_t( 'f_p_types' ) ); ?></a><br><a href="/planning-hour/"><?php echo esc_html( wk_t( 'f_p_hour' ) ); ?></a><br><a href="/prices/"><?php echo esc_html( wk_t( 'f_p_prices' ) ); ?></a><br><a href="/news/"><?php echo esc_html( wk_t( 'f_p_news' ) ); ?></a><br><a href="/contact/"><?php echo esc_html( wk_t( 'f_p_contact' ) ); ?></a><br><a href="/newsletter/"><?php echo esc_html( wk_t( 'f_p_nl' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group wk-foot__col"><!-- wp:paragraph {"className":"wk-foot__h"} -->
<p class="wk-foot__h"><?php echo esc_html( wk_t( 'f_h3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-foot__list"} -->
<p class="wk-foot__list"><a href="/privacy/"><?php echo esc_html( wk_t( 'f_l_priv' ) ); ?></a><br><a href="/terms/"><?php echo esc_html( wk_t( 'f_l_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"wk-foot__copy"} -->
<p class="wk-foot__copy"><?php echo esc_html( wk_t( 'f_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
