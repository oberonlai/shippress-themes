<?php
/**
 * Title: Footer: main
 * Slug: enogu-supply/footer-main
 * Categories: enogu-supply
 * Inserter: no
 * Viewport Width: 1440
 * Description: Four columns: address, hours, links, and the copyright line.
 */
?>
<!-- wp:group {"className":"en-footer","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull en-footer">
<!-- wp:group {"className":"en-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group en-footer__in">
<!-- wp:group {"className":"en-footer__cols","layout":{"type":"default"}} -->
<div class="wp-block-group en-footer__cols">
<!-- wp:group {"className":"en-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group en-fcol">
<!-- wp:paragraph {"className":"en-fbrand"} -->
<p class="en-fbrand"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-ftext"} -->
<p class="en-ftext"><?php echo esc_html( enogu_supply_t( 'f_tag' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group en-fcol">
<!-- wp:heading {"level":3,"className":"en-fh"} -->
<h3 class="wp-block-heading en-fh"><?php echo esc_html( enogu_supply_t( 'f_addr_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"en-ftext"} -->
<p class="en-ftext"><?php echo esc_html( enogu_supply_t( 'f_addr' ) ); ?><br><?php echo esc_html( enogu_supply_t( 'f_phone' ) ); ?><br><a href="mailto:hello@enogu-supply.example"><?php echo esc_html( enogu_supply_t( 'f_mail' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group en-fcol">
<!-- wp:heading {"level":3,"className":"en-fh"} -->
<h3 class="wp-block-heading en-fh"><?php echo esc_html( enogu_supply_t( 'f_hours_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"en-ftext"} -->
<p class="en-ftext"><?php echo esc_html( enogu_supply_t( 'f_h1' ) ); ?><br><?php echo esc_html( enogu_supply_t( 'f_h2' ) ); ?><br><?php echo esc_html( enogu_supply_t( 'f_h3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group en-fcol">
<!-- wp:heading {"level":3,"className":"en-fh"} -->
<h3 class="wp-block-heading en-fh"><?php echo esc_html( enogu_supply_t( 'f_links_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"en-flist"} -->
<ul class="wp-block-list en-flist"><!-- wp:list-item -->
<li><a href="/about/"><?php echo esc_html( enogu_supply_t( 'f_about' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/journal/"><?php echo esc_html( enogu_supply_t( 'f_journal' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/price-list/"><?php echo esc_html( enogu_supply_t( 'f_price' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/contact/"><?php echo esc_html( enogu_supply_t( 'f_contact' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/newsletter/"><?php echo esc_html( enogu_supply_t( 'f_news' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-fcopy"} -->
<p class="en-fcopy"><?php echo esc_html( enogu_supply_t( 'f_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
