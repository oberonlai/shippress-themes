<?php
/**
 * Title: Home: journal
 * Slug: kisha-rail/front-journal
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: Notes from the tour managers: three latest posts as text rows with a category chip and an arrow tile.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-news-sec kr-surface","layout":{"type":"default"},"anchor":"journal","backgroundColor":"surface"} -->
<section id="journal" class="wp-block-group kr-news-sec kr-surface has-surface-background-color has-background">
<!-- wp:group {"className":"kr-head-grp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-head-grp sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 'jr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kr-h2"} -->
<h2 class="wp-block-heading kr-h2"><?php echo esc_html( kisha_rail_t( 'jr_h2' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"kr-news sp-reveal sp-reveal--up"} -->
<div class="wp-block-query kr-news sp-reveal sp-reveal--up"><!-- wp:post-template {"className":"kr-news__list"} -->
<!-- wp:group {"className":"kr-news__row","layout":{"type":"default"}} -->
<div class="wp-block-group kr-news__row"><!-- wp:post-date {"className":"kr-news__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kr-news__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kr-news__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"kr-pill kr-pill--light-wrap","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons kr-pill kr-pill--light-wrap"><!-- wp:button {"className":"kr-pill kr-pill--light"} -->
<div class="wp-block-button kr-pill kr-pill--light"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( kisha_rail_t( 'jr_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
