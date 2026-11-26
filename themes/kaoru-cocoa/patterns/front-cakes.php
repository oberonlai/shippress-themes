<?php
/**
 * Title: Home: cake orders with dotted accordion
 * Slug: kaoru-cocoa/front-cakes
 * Categories: kaoru-cocoa
 * Keywords: accordion, cakes, order, sticky
 * Viewport Width: 1440
 * Description: A sticky photograph beside the page word, an intro and four dotted accordion rows with solid disc chevrons that explain how a cake order is placed.
 */
?>
<!-- wp:group {"align":"full","anchor":"cakes","className":"kc-cakes","layout":{"type":"default"}} -->
<div id="cakes" class="wp-block-group alignfull kc-cakes"><!-- wp:group {"className":"kc-cakes__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cakes__grid"><!-- wp:group {"className":"kc-cakes__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cakes__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-cakes__img"} -->
<figure class="wp-block-image size-full kc-cakes__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cake-box.webp' ) ); ?>" alt="Hands carefully lowering a glazed round cake into a plain white bakery box."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cakes__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cakes__text"><!-- wp:heading {"level":2,"className":"kc-word"} -->
<h2 class="wp-block-heading kc-word">Cakes</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body">We bake and glaze three signature cakes for weekend celebrations: Dark ganache 70%, Hazelnut praline and Cocoa and pear. Each comes in an 18 cm cake that serves eight or a 22 cm cake that serves twelve, boxed for collection Friday to Sunday.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-acc sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-acc sp-stagger"><!-- wp:details {"className":"kc-acc__row sp-reveal sp-reveal--up","showContent":true} -->
<details class="wp-block-details kc-acc__row sp-reveal sp-reveal--up" open><summary>Choose a cake<br><em>One of three, 18 or 22 cm</em></summary>
<!-- wp:paragraph -->
<p>Select Dark ganache 70%, Hazelnut praline or Cocoa and pear in 18 cm (serves eight) or 22 cm (serves twelve), and add an optional short message for the plain card plaque.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kc-acc__row sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kc-acc__row sp-reveal sp-reveal--up"><summary>Pick a collection day<br><em>Friday, Saturday or Sunday</em></summary>
<!-- wp:paragraph -->
<p>Choose Friday, Saturday or Sunday between 11:00 and 17:00 to collect your boxed cake from the shop counter.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kc-acc__row sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kc-acc__row sp-reveal sp-reveal--up"><summary>Order three days ahead<br><em>By form, email or at the counter</em></summary>
<!-- wp:paragraph -->
<p>Cakes are prepared in small batches alongside the daily chocolate making, so we ask for three days’ notice. Order by the form, by email or at the counter; we confirm within one working day.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kc-acc__row sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kc-acc__row sp-reveal sp-reveal--up"><summary>Collect<br><em>Boxed at 16:00 the day before</em></summary>
<!-- wp:paragraph -->
<p>Your cake is boxed at 16:00 the day before and kept cool until you arrive. All cakes are paid for at collection, in EUR including VAT.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns"><!-- wp:button {"className":"kc-btn kc-btn--primary"} -->
<div class="wp-block-button kc-btn kc-btn--primary"><a class="wp-block-button__link wp-element-button" href="/cake-orders/">Order a cake</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kc-link"} -->
<p class="kc-link"><a href="/cake-orders/#collection">Collection days →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
