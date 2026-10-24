<?php
/**
 * Title: Home: field notes
 * Slug: hozen-facilities/front-notes
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Lockup and the two latest field notes as aligned photographs with caption rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"notes","className":"hz-sec hz-notes","layout":{"type":"default"}} -->
<section id="notes" class="wp-block-group alignfull hz-sec hz-notes">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'no_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'no_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'no_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"hz-notes__query","layout":{"type":"default"}} -->
<div class="wp-block-query hz-notes__query"><!-- wp:post-template {"className":"hz-notes__list","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"hz-note__img sp-reveal sp-reveal--zoom hz-focus"} /-->

<!-- wp:group {"className":"hz-cap hz-cap--note","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap hz-cap--note">
<!-- wp:group {"className":"hz-cap__label hz-cap__label--note","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group hz-cap__label hz-cap__label--note">
<!-- wp:post-terms {"term":"category"} /--><!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hz-cap__title"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"hz-linkrow hz-linkrow--narrow hz-linkrow--right"} -->
<p class="hz-linkrow hz-linkrow--narrow hz-linkrow--right"><a href="<?php echo esc_url( home_url( '/field-notes/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'no_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
