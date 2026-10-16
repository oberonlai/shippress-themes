<?php
/**
 * Title: Reserve: how it works and the tea house
 * Slug: kanmi-dokoro/contact-main
 * Categories: kanmi-dokoro
 * Keywords: wagashi, tea house, matcha
 * Viewport Width: 1440
 * Description: How reserving works with an email button and the synced menu prices, beside the synced tea house details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kd-section kd-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kd-section kd-contact"><!-- wp:group {"align": "wide", "className": "kd-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kd-contact__grid"><!-- wp:group {"className": "kd-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-contact__book"><!-- wp:heading {"className": "kd-sec__title"} -->
<h2 class="wp-block-heading kd-sec__title"><?php echo esc_html( kanmi_dokoro_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "kd-steps"} -->
<ol class="wp-block-list kd-steps"><!-- wp:list-item -->
<li><?php echo esc_html( kanmi_dokoro_t( 'b1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( kanmi_dokoro_t( 'b2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( kanmi_dokoro_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "kd-links"} -->
<div class="wp-block-buttons kd-links"><!-- wp:button {"className": "kd-mailto"} -->
<div class="wp-block-button kd-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@kanmidokoro.example?subject=' . rawurlencode( kanmi_dokoro_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( kanmi_dokoro_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"kanmi-dokoro/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kd-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-contact__find"><!-- wp:pattern {"slug":"kanmi-dokoro/details"} /-->

<!-- wp:heading {"level": 3, "className": "kd-sec__title"} -->
<h3 class="wp-block-heading kd-sec__title"><?php echo esc_html( kanmi_dokoro_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kanmi_dokoro_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kanmi_dokoro_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
