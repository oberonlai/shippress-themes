<?php
/**
 * Title: Page: waitlist
 * Slug: shizuku-filter/page-waitlist
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: Waitlist page: photograph and the signup form inside one large capsule.
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php shizuku_filter_img( '17-waitlist-pour.webp' ); ?>","dimRatio":0,"className":"sf-phero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover sf-phero"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php shizuku_filter_a( 'alt_wait' ); ?>" src="<?php shizuku_filter_img( '17-waitlist-pour.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
<!-- wp:group {"align":"full","className":"sf-plain","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sf-plain">
<!-- wp:group {"className":"sf-plain__in","layout":{"type":"default"}} -->
<div class="wp-block-group sf-plain__in">
<!-- wp:paragraph {"className":"sf-lede"} -->
<p class="sf-lede"><?php shizuku_filter_e( 'waitlist_intro' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sf-formcap","layout":{"type":"default"}} -->
<div class="wp-block-group sf-formcap">
<!-- wp:heading {"level":3,"className":"sf-h3"} -->
<h3 class="wp-block-heading sf-h3"><?php shizuku_filter_e( 'wait_h' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:html -->
<form class="sf-form " action="#" method="post"><label for="sf-f-name"><?php shizuku_filter_e( 'f_name' ); ?></label><input id="sf-f-name" type="text" name="name" required/><label for="sf-f-email"><?php shizuku_filter_e( 'f_email' ); ?></label><input id="sf-f-email" type="email" name="email" required/><label for="sf-f-country"><?php shizuku_filter_e( 'f_country' ); ?></label><input id="sf-f-country" type="text" name="country" required/><button type="submit"><?php shizuku_filter_e( 'f_join' ); ?></button></form>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"sf-formcap__note"} -->
<p class="sf-formcap__note"><?php shizuku_filter_e( 'f_note' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-copy","layout":{"type":"default"}} -->
<div class="wp-block-group sf-copy">
<!-- wp:heading {"level":3,"className":"sf-h3"} -->
<h3 class="wp-block-heading sf-h3"><?php shizuku_filter_e( 'waitlist_h1' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php shizuku_filter_e( 'waitlist_b1_1' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-copy","layout":{"type":"default"}} -->
<div class="wp-block-group sf-copy">
<!-- wp:heading {"level":3,"className":"sf-h3"} -->
<h3 class="wp-block-heading sf-h3"><?php shizuku_filter_e( 'waitlist_h2' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php shizuku_filter_e( 'waitlist_b2_1' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
