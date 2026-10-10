<?php
/**
 * Title: Home: this week's flower table (pressed-flower masonry)
 * Slug: hana-kago/home-table
 * Categories: hana-kago, featured
 * Keywords: masonry, products, bouquets, mosaic, cards, shop
 * Viewport Width: 1440
 * Description: A masonry of pressed-paper cards with soft, deckled edges: bouquets with their numbers, notes and prices, a quote, the subscription, a pressed specimen, same-day delivery and a care card.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section"><!-- wp:group {"align":"wide","className":"hk-head hk-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-head hk-head--row"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">This week on the flower table</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Picked today, <em>pressed into memory</em></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stack"><!-- wp:paragraph -->
<p>Every bouquet is made the morning it leaves the shop, from what the growers brought in at dawn. Choose one, or tell us who it is for and let us choose.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/shop/">See the whole shop</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hk-masonry hk-masonry--pair","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-masonry hk-masonry--pair"><?php echo hana_kago_specimen_card( 'ranunculus', 1 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo hana_kago_specimen_card( 'peony', 2 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"className":"hk-tile hk-tile--wide","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tile hk-tile--wide"><!-- wp:group {"className":"hk-paper hk-paper--petal hk-note","layout":{"type":"default"}} -->
<div class="wp-block-group hk-paper hk-paper--petal hk-note"><!-- wp:quote {"className":"hk-note__quote"} -->
<blockquote class="wp-block-quote hk-note__quote"><!-- wp:paragraph -->
<p>We pick the flowers that are at their best today, not the ones on a list.</p>
<!-- /wp:paragraph --><cite>Mina Hart, florist</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php echo hana_kago_specimen_card( 'wreath', 3 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"className":"hk-tile hk-tile--photo","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tile hk-tile--photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-deckle"} -->
<figure class="wp-block-image size-full is-style-deckle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pressed.jpg' ) ); ?>" alt="Pressed coral petals and serrated green leaves on handmade paper"/><figcaption class="wp-element-caption">Pressed this week: quince blossom and nettle leaves.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-tile hk-tile--wide","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tile hk-tile--wide"><!-- wp:group {"className":"hk-paper hk-paper--leaf","layout":{"type":"default"}} -->
<div class="wp-block-group hk-paper hk-paper--leaf"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Subscriptions</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-big"} -->
<p class="hk-big">Flowers on your table, every week</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Weekly, fortnightly or monthly, delivered free on the same day each time. Pause or stop whenever you like.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/subscriptions/">Choose a plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php echo hana_kago_specimen_card( 'pampas', 4 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo hana_kago_specimen_card( 'market', 5 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"className":"hk-tile hk-tile--wide","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tile hk-tile--wide"><!-- wp:group {"className":"hk-paper hk-paper--petal","layout":{"type":"default"}} -->
<div class="wp-block-group hk-paper hk-paper--petal"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Same-day delivery</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-big"} -->
<p class="hk-big">Cycled over, still dewy</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Our bicycles reach six neighbourhoods around the shop. Order by early afternoon and your flowers arrive the same day.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/delivery/">Areas, cut-off times and fees</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php echo hana_kago_specimen_card( 'quince', 6 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo hana_kago_specimen_card( 'pressed', 7 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"className":"hk-tile hk-tile--wide","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tile hk-tile--wide"><!-- wp:group {"className":"hk-paper","layout":{"type":"default"}} -->
<div class="wp-block-group hk-paper"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The care card</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Ten days of <em>bloom</em></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-petals"} -->
<ul class="wp-block-list is-style-petals"><!-- wp:list-item -->
<li>Cut the stems at a slant before the first drink.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fresh, cool water every second day.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Away from fruit bowls, radiators and sunny sills.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
