<?php
/**
 * Title: Home: from the house
 * Slug: akane-house/front-journal
 * Categories: akane-house
 * Keywords: pub, day, sittings
 * Viewport Width: 1440
 * Description: Chapter 09, the latest three stories as ruled rows.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ak-chapter ak-journal", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ak-chapter ak-journal"><!-- wp:group {"className": "ak-chapter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-chapter__grid"><!-- wp:group {"className": "ak-chapter__l", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-chapter__l"><!-- wp:group {"className": "ak-chapter__head", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-chapter__head"><!-- wp:paragraph {"className": "ak-chapter__n"} -->
<p class="ak-chapter__n">09/</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ak-chapter__t"} -->
<p class="ak-chapter__t"><?php echo wp_kses_post( akane_house_t( 'k53bb9736' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level": 2, "className": "ak-h3"} -->
<h2 class="wp-block-heading ak-h3"><?php echo wp_kses_post( akane_house_t( 'k7897a55a' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ak-journal__list sp-reveal sp-reveal--up"} -->
<div class="wp-block-query ak-journal__list sp-reveal sp-reveal--up"><!-- wp:post-template -->
<!-- wp:group {"className":"ak-row","layout":{"type":"default"}} -->
<div class="wp-block-group ak-row"><!-- wp:post-date {"format":"<?php echo esc_attr( akane_house_t( 'date_fmt' ) ); ?>","className":"ak-row__d"} /-->

<!-- wp:post-terms {"term":"category","className":"ak-row__c"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ak-row__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
