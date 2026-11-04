<?php
/**
 * Title: Home: the day book (latest notes as ruled rows)
 * Slug: mugi-bakehouse/front-notes
 * Categories: mugi-bakehouse
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"mb-sec mb-notes","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mb-sec mb-notes"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:group {"className":"mb-head","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head"><!-- wp:heading {"level":3,"className":"mb-sechead"} -->
<h3 class="wp-block-heading mb-sechead"><?php echo wp_kses_post( mugi_bakehouse_t( 'kea4f8287' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mb-sublabel"} -->
<p class="mb-sublabel"><?php echo wp_kses_post( mugi_bakehouse_t( 'kedc958f2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"mb-notes__q"} -->
<div class="wp-block-query mb-notes__q"><!-- wp:post-template -->
<!-- wp:group {"className":"mb-note sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mb-note sp-reveal sp-reveal--up"><!-- wp:group {"className":"mb-note__row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group mb-note__row"><!-- wp:post-date {"format":"d M","className":"mb-note__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mb-note__t"} /-->

<!-- wp:post-terms {"term":"category","className":"mb-note__c"} /-->

<!-- wp:html -->
<span class="mb-arrow" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"mb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity mb-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"mb-more"} -->
<p class="mb-more"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo wp_kses_post( mugi_bakehouse_t( 'k67bfaf2f' ) ); ?><span class="mb-arrow" aria-hidden="true"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
