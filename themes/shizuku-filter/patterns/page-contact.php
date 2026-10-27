<?php
/**
 * Title: Page: contact
 * Slug: shizuku-filter/page-contact
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: Contact page: photograph, three capsules and a short form.
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php shizuku_filter_img( '11-back-cta-table.webp' ); ?>","dimRatio":0,"className":"sf-phero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover sf-phero"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php shizuku_filter_a( 'alt_contact' ); ?>" src="<?php shizuku_filter_img( '11-back-cta-table.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
<!-- wp:group {"tagName":"section","align":"full","className":"sf-sec ","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sf-sec ">
<!-- wp:paragraph {"className":"sf-rail"} -->
<p class="sf-rail"><span><?php shizuku_filter_e( 'rail_contact' ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sf-body ","layout":{"type":"default"}} -->
<div class="wp-block-group sf-body ">
<!-- wp:group {"className":"sf-xh sp-reveal sp-reveal--wipe sf-wipe","layout":{"type":"default"}} -->
<div class="wp-block-group sf-xh sp-reveal sp-reveal--wipe sf-wipe">
<!-- wp:paragraph {"className":"sf-mk"} -->
<p class="sf-mk"><?php shizuku_filter_e( 'contact_intro' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-ccaps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sf-ccaps sp-stagger">
<!-- wp:group {"className":"sf-ccap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-ccap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sf-ccap__k"} -->
<p class="sf-ccap__k"><?php shizuku_filter_e( 'c1_k' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-ccap__v"} -->
<p class="sf-ccap__v"><?php shizuku_filter_e( 'c1_v' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-ccap sp-reveal sp-reveal--up sf-ccap--aux","layout":{"type":"default"}} -->
<div class="wp-block-group sf-ccap sp-reveal sp-reveal--up sf-ccap--aux">
<!-- wp:paragraph {"className":"sf-ccap__k"} -->
<p class="sf-ccap__k"><?php shizuku_filter_e( 'c2_k' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-ccap__v"} -->
<p class="sf-ccap__v"><?php shizuku_filter_e( 'c2_v' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-ccap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-ccap sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sf-ccap__k"} -->
<p class="sf-ccap__k"><?php shizuku_filter_e( 'c3_k' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-ccap__v"} -->
<p class="sf-ccap__v"><?php shizuku_filter_e( 'c3_v' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-copy","layout":{"type":"default"}} -->
<div class="wp-block-group sf-copy">
<!-- wp:heading {"level":3,"className":"sf-h3"} -->
<h3 class="wp-block-heading sf-h3"><?php shizuku_filter_e( 'contact_h1' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php shizuku_filter_e( 'contact_b1_1' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-copy","layout":{"type":"default"}} -->
<div class="wp-block-group sf-copy">
<!-- wp:heading {"level":3,"className":"sf-h3"} -->
<h3 class="wp-block-heading sf-h3"><?php shizuku_filter_e( 'contact_h2' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php shizuku_filter_e( 'contact_b2_1' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-formcap","layout":{"type":"default"}} -->
<div class="wp-block-group sf-formcap">
<!-- wp:html -->
<form class="sf-form " action="#" method="post"><label for="sf-f-name"><?php shizuku_filter_e( 'f_name' ); ?></label><input id="sf-f-name" type="text" name="name" required/><label for="sf-f-email"><?php shizuku_filter_e( 'f_email' ); ?></label><input id="sf-f-email" type="email" name="email" required/><label for="sf-f-msg"><?php shizuku_filter_e( 'f_msg' ); ?></label><textarea id="sf-f-msg" name="msg" rows="4" required></textarea><button type="submit"><?php shizuku_filter_e( 'f_send' ); ?></button></form>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
