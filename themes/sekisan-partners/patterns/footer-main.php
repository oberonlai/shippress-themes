<?php
/**
 * Title: Footer: address, links and request button
 * Slug: sekisan-partners/footer-main
 * Categories: sekisan-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"sk-footer","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sk-footer"><!-- wp:group {"className":"sk-footer__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sk-footer__grid"><!-- wp:group {"className":"sk-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group sk-footer__col"><!-- wp:paragraph {"className":"sk-footer__brand"} -->
<p class="sk-footer__brand"><span class="sk-brand__mark"></span><span class="sk-brand__name">Sekisan <br>Partners</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-footer__small"} -->
<p class="sk-footer__small">Maaskade 41, 3071 NB Rotterdam, Netherlands<br><a href="mailto:proposals@sekisan.example">proposals@sekisan.example</a><br><?php echo esc_html( sekisan_partners_t( 'ft_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group sk-footer__col"><!-- wp:paragraph {"className":"sk-footer__links"} -->
<p class="sk-footer__links"><a href="/about/"><?php echo esc_html( sekisan_partners_t( 'ft_l0' ) ); ?></a><a href="/how-we-estimate/"><?php echo esc_html( sekisan_partners_t( 'ft_l1' ) ); ?></a><a href="/fees-and-scope/"><?php echo esc_html( sekisan_partners_t( 'ft_l2' ) ); ?></a><a href="/cases/"><?php echo esc_html( sekisan_partners_t( 'ft_l3' ) ); ?></a><a href="/notes/"><?php echo esc_html( sekisan_partners_t( 'ft_l4' ) ); ?></a><a href="/cost-letter/"><?php echo esc_html( sekisan_partners_t( 'ft_l5' ) ); ?></a><a href="/privacy-notice/"><?php echo esc_html( sekisan_partners_t( 'ft_l6' ) ); ?></a><a href="/terms/"><?php echo esc_html( sekisan_partners_t( 'ft_l7' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group sk-footer__col"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-sk-dark"} -->
<div class="wp-block-button is-style-sk-dark"><a class="wp-block-button__link wp-element-button" href="/request-a-proposal/"><?php echo esc_html( sekisan_partners_t( 'k6f96ac44' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sk-footer__legal"} -->
<p class="sk-footer__legal"><?php echo esc_html( sekisan_partners_t( 'ft_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
