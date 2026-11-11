<?php
/**
 * Title: Home: letters from recent searches (cards)
 * Slug: senbatsu-partners/front-letters
 * Categories: senbatsu-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","anchor":"letters","align":"full","className":"sb-band sb-band--grey","layout":{"type":"constrained","contentSize":"992px","wideSize":"992px"}} -->
<section id="letters" class="wp-block-group alignfull sb-band sb-band--grey">
<!-- wp:group {"className":"sb-head sb-head--l sp-reveal sp-reveal--up"} -->
<div class="wp-block-group sb-head sb-head--l sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( senbatsu_partners_t( 'kee542dd0' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"sb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity sb-rule"/>
<!-- /wp:separator -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"sb-letters"} -->
<div class="wp-block-query sb-letters"><!-- wp:post-template {"className":"sb-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"sb-card sp-reveal sp-reveal--up"} -->
<div class="wp-block-group sb-card sp-reveal sp-reveal--up">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"8/5","scale":"cover","className":"sb-card__img"} /-->

<!-- wp:group {"className":"sb-card__body"} -->
<div class="wp-block-group sb-card__body">
<!-- wp:post-title {"level":3,"isLink":true,"className":"sb-card__t"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"sb-card__ex"} /-->

<!-- wp:group {"className":"sb-card__foot"} -->
<div class="wp-block-group sb-card__foot">
<!-- wp:post-terms {"term":"category","className":"sb-tag"} /-->

<!-- wp:read-more {"content":"\u003e Read the letter","className":"sb-more"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"className":"sb-bare"} -->
<div class="wp-block-group sb-bare">
<!-- wp:buttons {"className":"sb-btn sb-btn--primary"} -->
<div class="wp-block-buttons sb-btn sb-btn--primary"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( senbatsu_partners_t( 'k9b410351' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
