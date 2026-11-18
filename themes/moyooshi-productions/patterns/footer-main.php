<?php
/**
 * Title: Footer: outlined cells
 * Slug: moyooshi-productions/footer-main
 * Categories: moyooshi-productions
 * Viewport Width: 1440
 * Description: Ink footer: wordmark and four hairline-outlined link cells (studio, hours, pages, write and read) and the legal line.
 */
?>
<!-- wp:group {"className":"mp-foot","layout":{"type":"default"}} -->
<div class="wp-block-group mp-foot"><!-- wp:group {"className":"mp-frame mp-foot__top","layout":{"type":"default"}} -->
<div class="wp-block-group mp-frame mp-foot__top"><!-- wp:paragraph {"className":"mp-foot__logo"} -->
<p class="mp-foot__logo"><span class="mp-logo__a"><?php echo esc_html( moyooshi_productions_t( 'head_logo_1' ) ); ?></span> <span class="mp-logo__b"><?php echo esc_html( moyooshi_productions_t( 'head_logo_2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-foot__tag"} -->
<p class="mp-foot__tag"><?php echo esc_html( moyooshi_productions_t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-frame mp-foot__cells","layout":{"type":"default"}} -->
<div class="wp-block-group mp-frame mp-foot__cells"><!-- wp:group {"className":"mp-fcell","layout":{"type":"default"}} -->
<div class="wp-block-group mp-fcell"><!-- wp:paragraph {"className":"mp-fcell__h"} -->
<p class="mp-fcell__h"><?php echo esc_html( moyooshi_productions_t( 'foot_addr_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-fcell__p"} -->
<p class="mp-fcell__p"><?php echo esc_html( moyooshi_productions_t( 'foot_addr' ) ); ?><br><a href="mailto:brief@moyooshi.example">brief@moyooshi.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-fcell","layout":{"type":"default"}} -->
<div class="wp-block-group mp-fcell"><!-- wp:paragraph {"className":"mp-fcell__h"} -->
<p class="mp-fcell__h"><?php echo esc_html( moyooshi_productions_t( 'foot_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-fcell__p"} -->
<p class="mp-fcell__p"><?php echo esc_html( moyooshi_productions_t( 'foot_hours_1' ) ); ?><br><?php echo esc_html( moyooshi_productions_t( 'foot_hours_2' ) ); ?><br><?php echo esc_html( moyooshi_productions_t( 'foot_hours_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-fcell","layout":{"type":"default"}} -->
<div class="wp-block-group mp-fcell"><!-- wp:paragraph {"className":"mp-fcell__h"} -->
<p class="mp-fcell__h"><?php echo esc_html( moyooshi_productions_t( 'foot_nav_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-fcell__p"} -->
<p class="mp-fcell__p"><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'nav_services' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'nav_work' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'nav_process' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'nav_fees' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'nav_about' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-fcell","layout":{"type":"default"}} -->
<div class="wp-block-group mp-fcell"><!-- wp:paragraph {"className":"mp-fcell__h"} -->
<p class="mp-fcell__h"><?php echo esc_html( moyooshi_productions_t( 'foot_more_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-fcell__p"} -->
<p class="mp-fcell__p"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'nav_journal' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'foot_newsletter' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'foot_contact' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'foot_privacy' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-frame mp-foot__legal","layout":{"type":"default"}} -->
<div class="wp-block-group mp-frame mp-foot__legal"><!-- wp:paragraph {"className":"mp-foot__small"} -->
<p class="mp-foot__small"><?php echo esc_html( moyooshi_productions_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
