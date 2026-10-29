<?php
/**
 * Title: Footer
 * Slug: nodoka-counselling/foot-main
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Deeper-mist footer: visit, pages, contact, the three clay tabs as small pills, a hairline and the legal line.
 */
?>
<!-- wp:group {"className":"nc-footer","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull nc-footer"><!-- wp:group {"className":"nc-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group nc-footer__in"><!-- wp:paragraph {"className":"nc-footer__mark"} -->
<p class="nc-footer__mark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"nc-footer__cols","layout":{"type":"default"}} -->
<div class="wp-block-group nc-footer__cols"><!-- wp:group {"className":"nc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group nc-footer__col"><!-- wp:paragraph {"className":"nc-footer__h"} -->
<p class="nc-footer__h"><?php echo esc_html( nodoka_counselling_t( 'foot_h1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-footer__p"} -->
<p class="nc-footer__p"><?php echo nodoka_counselling_lines( 'foot_addr' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-footer__p"} -->
<p class="nc-footer__p"><?php echo nodoka_counselling_lines( 'foot_hours' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group nc-footer__col"><!-- wp:paragraph {"className":"nc-footer__h"} -->
<p class="nc-footer__h"><?php echo esc_html( nodoka_counselling_t( 'foot_h2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="nc-footer__list"><li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'foot_p1' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/what-we-help-with/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'foot_p2' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/first-conversation/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'foot_p3' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/practitioners/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'foot_p4' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/fees-and-hours/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'foot_p5' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/questions/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'foot_p6' ) ); ?></a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group nc-footer__col"><!-- wp:paragraph {"className":"nc-footer__h"} -->
<p class="nc-footer__h"><?php echo esc_html( nodoka_counselling_t( 'foot_h3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-footer__p"} -->
<p class="nc-footer__p"><a href="mailto:<?php echo esc_attr( nodoka_counselling_t( 'foot_email' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'foot_email' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-footer__p"} -->
<p class="nc-footer__p"><?php echo esc_html( nodoka_counselling_t( 'foot_reply' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-footer__p nc-footer__em"} -->
<p class="nc-footer__p nc-footer__em"><?php echo esc_html( nodoka_counselling_t( 'emergency' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:html -->
<nav class="nc-tabs nc-tabs--small" aria-label="Ways to begin"><a class="nc-tab" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab1' ) ); ?></a><a class="nc-tab" href="mailto:<?php echo esc_attr( nodoka_counselling_t( 'foot_email' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab2' ) ); ?></a><a class="nc-tab" href="<?php echo esc_url( home_url( '/online-sessions/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab3' ) ); ?></a></nav>
<!-- /wp:html -->
<!-- wp:separator {"className":"nc-footer__rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity nc-footer__rule"/>
<!-- /wp:separator -->
<!-- wp:paragraph {"className":"nc-footer__legal"} -->
<p class="nc-footer__legal"><?php echo esc_html( nodoka_counselling_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
