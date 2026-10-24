<?php
/**
 * Title: Footer: address, links and hours
 * Slug: kosei-architects/footer-main
 * Categories: kosei-architects
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ks-footer","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull ks-footer"><!-- wp:group {"className":"ks-in ks-footer__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in ks-footer__grid"><!-- wp:group {"className":"ks-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group ks-fcol"><!-- wp:paragraph {"className":"ks-logo ks-logo--foot"} -->
<p class="ks-logo ks-logo--foot"><a href="/">Kosei Architects</a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ks-fp"} -->
<p class="ks-fp"><?php echo wp_kses_post( kosei_architects_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ks-fp"} -->
<p class="ks-fp"><?php echo esc_html( kosei_architects_t( 'ft_phone' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group ks-fcol"><!-- wp:paragraph {"className":"ks-fh"} -->
<p class="ks-fh"><?php echo esc_html( kosei_architects_t( 'ft_work' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ks-fp ks-flinks"} -->
<p class="ks-fp ks-flinks"><a href="/projects/"><?php echo esc_html( kosei_architects_t( 'ft_projects' ) ); ?></a><br><a href="/workplaces/"><?php echo esc_html( kosei_architects_t( 'ft_workplaces' ) ); ?></a><br><a href="/housing/"><?php echo esc_html( kosei_architects_t( 'ft_housing' ) ); ?></a><br><a href="/renovation/"><?php echo esc_html( kosei_architects_t( 'ft_renovation' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group ks-fcol"><!-- wp:paragraph {"className":"ks-fh"} -->
<p class="ks-fh"><?php echo esc_html( kosei_architects_t( 'ft_studio' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ks-fp ks-flinks"} -->
<p class="ks-fp ks-flinks"><a href="/about/"><?php echo esc_html( kosei_architects_t( 'ft_about' ) ); ?></a><br><a href="/studio/"><?php echo esc_html( kosei_architects_t( 'ft_people' ) ); ?></a><br><a href="/process/"><?php echo esc_html( kosei_architects_t( 'ft_process' ) ); ?></a><br><a href="/journal/"><?php echo esc_html( kosei_architects_t( 'ft_journal' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group ks-fcol"><!-- wp:paragraph {"className":"ks-fh"} -->
<p class="ks-fh"><?php echo esc_html( kosei_architects_t( 'ft_hours' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ks-fp"} -->
<p class="ks-fp"><?php echo wp_kses_post( kosei_architects_t( 'ft_hours_t' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ks-fp ks-flinks"} -->
<p class="ks-fp ks-flinks"><a href="/fees/"><?php echo esc_html( kosei_architects_t( 'ft_fees' ) ); ?></a><br><a href="/contact/"><?php echo esc_html( kosei_architects_t( 'ft_contact' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-in ks-footer__bar","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in ks-footer__bar"><!-- wp:paragraph {"className":"ks-small"} -->
<p class="ks-small"><?php echo esc_html( kosei_architects_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"ks-totop"} -->
<p class="ks-totop"><a href="#top"><?php echo esc_html( kosei_architects_t( 'totop' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
