<?php
/**
 * Title: Journal — latest posts, newsletter and a photograph
 * Slug: hakuba-dental/journal-bento
 * Categories: hakuba-dental
 * Keywords: journal, news, latest posts, newsletter, bento
 * Viewport Width: 1440
 * Description: The latest three journal posts as rounded rows in a mist cell, the newsletter in a blue cell and a toothbrush photograph in a tooth-crown cell.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hd-section hd-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hd-section hd-section--flush-top"><!-- wp:group {"align":"wide","className":"hd-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hd-head"><!-- wp:group {"className":"hd-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hd-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the chair</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hd-stack"><!-- wp:paragraph -->
<p>Short, practical pieces on looking after your teeth, written by our dentists and hygienists.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">Read the journal</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hd-bento hd-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hd-bento hd-reveal"><!-- wp:group {"className":"hd-cell hd-c-7 hd-r-2","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-c-7 hd-r-2"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Latest</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"hd-rows"} -->
<div class="wp-block-query hd-rows"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":false,"aspectRatio":"1"} /-->

<!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">New notes appear every few weeks.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-cell hd-cell--blue hd-c-5","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-cell--blue hd-c-5"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Four short emails a year</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Seasonal reminders, new hours and one useful tip. No adverts, unsubscribe in one click.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/newsletter/">Sign up</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-cell hd-cell--photo hd-cell--crown hd-c-5","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-cell--photo hd-cell--crown hd-c-5"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/toothbrush.jpg' ) ); ?>" alt="A toothbrush in a glass and a roll of floss on a white windowsill"/><figcaption class="wp-element-caption">Two minutes, twice a day</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
