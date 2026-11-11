<?php
/**
 * Title: Home: journal
 * Slug: nagisa-grill/front-journal
 * Categories: nagisa-grill
 * Keywords: journal, posts
 * Viewport Width: 1440
 * Description: Section word, an all-entries link, and the latest three posts as three columns of 4:3 photographs with date and title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ng-journal"} -->
<section class="wp-block-group alignfull ng-journal"><!-- wp:group {"className":"ng-journal__head"} -->
<div class="wp-block-group ng-journal__head"><!-- wp:group {"className":"ng-journal__word"} -->
<div class="wp-block-group ng-journal__word"><!-- wp:group {"className":"ng-label"} -->
<div class="wp-block-group ng-label"><?php echo nagisa_grill_tide(); ?></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"ng-word","fontSize":"xx-large"} -->
<h2 class="wp-block-heading ng-word has-xx-large-font-size"><?php echo wp_kses_post( nagisa_grill_t( 'k6b2b5614' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ng-link"} -->
<p class="ng-link"><a href="/journal/"><?php echo wp_kses_post( nagisa_grill_t( 'k881fa484' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","className":"ng-query"} -->
<div class="wp-block-query alignfull ng-query"><!-- wp:post-template {"className":"ng-cards"} -->
<!-- wp:group {"className":"ng-card sp-reveal sp-reveal--up"} -->
<div class="wp-block-group ng-card sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","scale":"cover","className":"ng-card__img"} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( nagisa_grill_t( 'date_fmt' ) ); ?>","className":"ng-card__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ng-card__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
