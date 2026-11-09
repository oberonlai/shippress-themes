<?php
/**
 * Title: Footer: address, hours and links
 * Slug: koe-interpreters/footer-main
 * Categories: koe-interpreters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Ink footer with a pale mint arc at the bottom right: wordmark and one line, address, desk hours, urgent line and the page links.
 */
?>
<!-- wp:group {"align":"full","className":"ko-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ko-foot"><!-- wp:group {"align":"wide","className":"ko-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ko-foot__in"><!-- wp:group {"className":"ko-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group ko-foot__brand"><!-- wp:paragraph {"className":"ko-foot__word"} -->
<p class="ko-foot__word">Koe Interpreters</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-foot__line"} -->
<p class="ko-foot__line"><?php echo esc_html( koe_interpreters_t( 'ft_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ko-foot__col"><!-- wp:paragraph {"className":"ko-foot__h"} -->
<p class="ko-foot__h"><?php echo esc_html( koe_interpreters_t( 'ft_desk' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-foot__t"} -->
<p class="ko-foot__t"><?php echo wp_kses_post( koe_interpreters_t( 'ft_addr' ) ); ?> <a href="tel:+31105550140">+31 10 555 0140</a><br><a href="mailto:requests@koe-interpreters.example">requests@koe-interpreters.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ko-foot__col"><!-- wp:paragraph {"className":"ko-foot__h"} -->
<p class="ko-foot__h"><?php echo esc_html( koe_interpreters_t( 'ft_pages' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-foot__t ko-foot__links"} -->
<p class="ko-foot__t ko-foot__links"><a href="/briefs/"><?php echo esc_html( koe_interpreters_t( 'ft_briefs' ) ); ?></a><br><a href="/meeting-day/"><?php echo esc_html( koe_interpreters_t( 'ft_day' ) ); ?></a><br><a href="/rates/"><?php echo esc_html( koe_interpreters_t( 'ft_rates' ) ); ?></a><br><a href="/notes/"><?php echo esc_html( koe_interpreters_t( 'ft_notes' ) ); ?></a><br><a href="/early-access/"><?php echo esc_html( koe_interpreters_t( 'ft_early' ) ); ?></a><br><a href="/privacy/"><?php echo esc_html( koe_interpreters_t( 'ft_privacy' ) ); ?></a><br><a href="/terms/"><?php echo esc_html( koe_interpreters_t( 'ft_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"ko-foot__copy"} -->
<p class="ko-foot__copy"><?php echo esc_html( koe_interpreters_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
