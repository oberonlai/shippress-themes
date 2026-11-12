<?php
/**
 * Title: Header: utility row
 * Slug: meguri-waste/head-util
 * Categories: meguri-waste
* Inserter: no
 * Description: Outline utility boxes above the main bar: licence number and missed-pickup line.
 */
?>
<!-- wp:group {"className":"mw-util","layout":{"type":"default"}} -->
<div class="wp-block-group mw-util"><!-- wp:group {"className":"mw-wrap mw-util__in","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group mw-wrap mw-util__in"><!-- wp:paragraph {"className":"mw-box mw-box--licence"} -->
<p class="mw-box mw-box--licence"><?php echo esc_html( meguri_waste_t( 'hd_licence' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mw-box mw-box--alert"} -->
<p class="mw-box mw-box--alert"><?php echo esc_html( meguri_waste_t( 'hd_missed' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
