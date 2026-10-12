<?php
/**
 * Title: Home: title beside the locator card
 * Slug: mimi-veterinary/home-locator
 * Categories: mimi-veterinary
 * Keywords: home, hero, map, locator
 * Viewport Width: 1440
 * Description: The title, a lead and two buttons beside the synced locator card with its small street map; a wide photograph below.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mv-section mv-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mv-section mv-hero"><!-- wp:group {"align":"wide","className":"mv-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mv-hero__grid"><!-- wp:group {"className":"mv-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group mv-hero__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Neighbourhood veterinary clinic &#183; Kitamachi</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"mv-hero__title"} -->
<h1 class="wp-block-heading mv-hero__title">Unhurried care for dogs, cats and small companions.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Mimi Veterinary is a small clinic two streets north of Kitamachi Station. We keep appointments long, the waiting room quiet, and explain every step before we take it.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"mv-links"} -->
<div class="wp-block-buttons mv-links"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="/contact/">Book a visit</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/first-visit/">Your first visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mv-hero__card","layout":{"type":"default"}} -->
<div class="wp-block-group mv-hero__card"><!-- wp:pattern {"slug":"mimi-veterinary/locator"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","align":"wide","className":"mv-hero__photo"} -->
<figure class="wp-block-image alignwide size-full mv-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" alt="A veterinarian kneeling to greet a calm shiba dog in a bright consulting room"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
