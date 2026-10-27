<?php
/**
 * Title: Home: wordmark band photo, badge and info bar
 * Slug: shizuku-filter/front-hero
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: Full-bleed photograph under the band with the pill badge, then the four-cell campaign info bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sf-hero">
<!-- wp:heading {"level":1,"className":"sf-sr"} -->
<h1 class="wp-block-heading sf-sr"><?php echo wp_kses_post( shizuku_filter_t( 'h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:group {"className":"sf-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group sf-hero__photo">
<!-- wp:group {"className":"sf-hero-zoom","layout":{"type":"default"}} -->
<div class="wp-block-group sf-hero-zoom">
<!-- wp:cover {"url":"<?php shizuku_filter_img( '01-hero-filter-carafe.webp' ); ?>","dimRatio":0,"className":"sf-hero__cover sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover sf-hero__cover sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php shizuku_filter_a( 'hero_alt' ); ?>" src="<?php shizuku_filter_img( '01-hero-filter-carafe.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-badge","layout":{"type":"default"}} -->
<div class="wp-block-group sf-badge">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sf-badge__thumb"} -->
<figure class="wp-block-image size-full sf-badge__thumb"><img src="<?php shizuku_filter_img( '04-reward-cartridge.webp' ); ?>" alt="<?php shizuku_filter_a( 'badge_alt' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"sf-badge__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sf-badge__txt">
<!-- wp:paragraph {"className":"sf-badge__t"} -->
<p class="sf-badge__t"><?php echo wp_kses_post( shizuku_filter_t( 'badge_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-badge__s"} -->
<p class="sf-badge__s"><?php echo wp_kses_post( shizuku_filter_t( 'badge_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-info","layout":{"type":"default"}} -->
<div class="wp-block-group sf-info">
<!-- wp:group {"className":"sf-info__c sf-info__c--main","layout":{"type":"default"}} -->
<div class="wp-block-group sf-info__c sf-info__c--main">
<!-- wp:paragraph {"className":"sf-info__claim"} -->
<p class="sf-info__claim"><?php echo wp_kses_post( shizuku_filter_t( 'claim' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-info__num"} -->
<p class="sf-info__num"><?php echo wp_kses_post( shizuku_filter_t( 'raised' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-info__bar"} -->
<p class="sf-info__bar"></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-info__c","layout":{"type":"default"}} -->
<div class="wp-block-group sf-info__c">
<!-- wp:paragraph {"className":"sf-info__num"} -->
<p class="sf-info__num"><?php echo wp_kses_post( shizuku_filter_t( 'backers' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-info__c","layout":{"type":"default"}} -->
<div class="wp-block-group sf-info__c">
<!-- wp:paragraph {"className":"sf-info__num"} -->
<p class="sf-info__num"><?php echo wp_kses_post( shizuku_filter_t( 'days' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-info__c sf-info__c--btn","layout":{"type":"default"}} -->
<div class="wp-block-group sf-info__c sf-info__c--btn">
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sf-btn"} -->
<div class="wp-block-button sf-btn"><a class="wp-block-button__link wp-element-button" href="#rewards"><?php echo wp_kses_post( shizuku_filter_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
