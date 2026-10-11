<?php
/**
 * Title: Toppings: the add-ons card and photograph
 * Slug: menya-kaen/toppings-card-section
 * Categories: menya-kaen
 * Keywords: toppings, add-ons, card
 * Viewport Width: 1440
 * Description: The synced add-ons card with every topping and its price, then a photograph of the small dishes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mk-section mk-section--card","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-section mk-section--card"><!-- wp:group {"align":"wide","className":"mk-card-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mk-card-wrap"><!-- wp:pattern {"slug":"menya-kaen/toppings-card"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","align":"wide","className":"mk-figure"} -->
<figure class="wp-block-image alignwide size-large mk-figure"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tare.jpg' ) ); ?>" alt="Three small dishes on a dark lacquered tray: soy tare, sliced green onion and toasted nori"/><figcaption class="wp-element-caption">Tare, leek and nori, as they wait beside the pot.</figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
