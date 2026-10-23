<?php
/**
 * Title: Footer: address, links and hours
 * Slug: hoshi-wealth-partners/footer-main
 * Categories: hoshi-wealth-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"hp-footer","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hp-footer"><!-- wp:group {"className":"hp-in hp-footer__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hp-in hp-footer__grid"><!-- wp:group {"className":"hp-foot-col","layout":{"type":"default"}} -->
<div class="wp-block-group hp-foot-col"><!-- wp:paragraph {"className":"hp-logo hp-logo--foot"} -->
<p class="hp-logo hp-logo--foot"><a href="/">Hoshi Wealth Partners</a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-foot-p"} -->
<p class="hp-foot-p"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-foot-p"} -->
<p class="hp-foot-p"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'ft_contact' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-foot-col","layout":{"type":"default"}} -->
<div class="wp-block-group hp-foot-col"><!-- wp:paragraph {"className":"hp-foot-h"} -->
<p class="hp-foot-h"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_firm' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-foot-p hp-foot-links"} -->
<p class="hp-foot-p hp-foot-links"><a href="/about/"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_about' ) ); ?></a><br><a href="/people/"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_people' ) ); ?></a><br><a href="/approach/"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_approach' ) ); ?></a><br><a href="/disclosures/"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_disc' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-foot-col","layout":{"type":"default"}} -->
<div class="wp-block-group hp-foot-col"><!-- wp:paragraph {"className":"hp-foot-h"} -->
<p class="hp-foot-h"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_clients' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-foot-p hp-foot-links"} -->
<p class="hp-foot-p hp-foot-links"><a href="/services/"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_services' ) ); ?></a><br><a href="/fees/"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_fees' ) ); ?></a><br><a href="/stories/"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_stories' ) ); ?></a><br><a href="/introductory-meeting/"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_intro' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-foot-col","layout":{"type":"default"}} -->
<div class="wp-block-group hp-foot-col"><!-- wp:paragraph {"className":"hp-foot-h"} -->
<p class="hp-foot-h"><?php echo esc_html( hoshi_wealth_partners_t( 'ft_hours' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-foot-p"} -->
<p class="hp-foot-p"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'ft_hours_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-in hp-footer__bar","layout":{"type":"default"}} -->
<div class="wp-block-group hp-in hp-footer__bar"><!-- wp:paragraph {"className":"hp-small hp-small--dark"} -->
<p class="hp-small hp-small--dark"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-small hp-small--dark"} -->
<p class="hp-small hp-small--dark"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'ft_disclosure' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
