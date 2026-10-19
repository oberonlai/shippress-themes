<?php
/**
 * Title: Home: consultation call to action
 * Slug: tsunagu-systems/consult-cta
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Description: One line and one button on a wisteria band; a cut-out laptop and network switch breaks out over the band top edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"ts-consult","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ts-consult">
<!-- wp:html -->
<img class="ts-consult__obj" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/laptop-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( tsunagu_systems_t( 'alt_laptop' ) ); ?>" loading="lazy"/>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ts-consult__line"} -->
<p class="ts-consult__line"><?php echo esc_html( tsunagu_systems_t( 'cta_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ts-consult__cta"} -->
<div class="wp-block-buttons ts-consult__cta"><!-- wp:button {"className":"ts-btn"} -->
<div class="wp-block-button ts-btn"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( tsunagu_systems_t( 'cta_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
