<?php
/**
 * Title: Home: fees & hours
 * Slug: nodoka-counselling/front-fees
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Deeper-mist band: ruled opener, the full-width fee table (name, duration, price) and the hours and address in two columns beneath.
 */
?>
<!-- wp:group {"className":"nc-sec nc-fee","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"fees"} -->
<section id="fees" class="wp-block-group alignfull nc-sec nc-fee"><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-open","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open"><!-- wp:group {"className":"nc-open__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"nc-open__title"} -->
<h2 class="wp-block-heading nc-open__title"><?php echo esc_html( nodoka_counselling_t( 'fee_title' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-open__sub"} -->
<p class="nc-open__sub"><?php echo esc_html( nodoka_counselling_t( 'fee_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"nc-open__lead sp-reveal sp-reveal--up"} -->
<p class="nc-open__lead sp-reveal sp-reveal--up"><?php echo esc_html( nodoka_counselling_t( 'fee_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:html -->
<table class="nc-fees"><tbody><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n1' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d1' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p1' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n2' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d2' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p2' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n3' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d3' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p3' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n4' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d4' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p4' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n5' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d5' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p5' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n6' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d6' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p6' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n7' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d7' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p7' ) ); ?></td></tr></tbody></table>
<!-- /wp:html -->
<!-- wp:group {"className":"nc-fee__foot","layout":{"type":"default"}} -->
<div class="wp-block-group nc-fee__foot"><!-- wp:group {"className":"nc-fee__c","layout":{"type":"default"}} -->
<div class="wp-block-group nc-fee__c"><!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label"><?php echo esc_html( nodoka_counselling_t( 'fee_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-fee__t"} -->
<p class="nc-fee__t"><?php echo nodoka_counselling_lines( 'fee_hours' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-fee__c","layout":{"type":"default"}} -->
<div class="wp-block-group nc-fee__c"><!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label"><?php echo esc_html( nodoka_counselling_t( 'fee_addr_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-fee__t"} -->
<p class="nc-fee__t"><?php echo nodoka_counselling_lines( 'fee_addr' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-link"} -->
<p class="nc-link"><a href="<?php echo esc_url( home_url( '/fees-and-hours/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'fee_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->